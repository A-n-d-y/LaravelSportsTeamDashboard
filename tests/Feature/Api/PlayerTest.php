<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Player;

use App\Models\Team;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PlayerControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create(['email' => 'admin@admin.com']);

        Sanctum::actingAs($user, [], 'web');

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_gets_players_list()
    {
        $players = Player::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.players.index'));

        $response->assertOk()->assertSee($players[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_player()
    {
        $data = Player::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.players.store'), $data);

        $this->assertDatabaseHas('players', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_player()
    {
        $player = Player::factory()->create();

        $team = Team::factory()->create();

        $data = [
            'name' => $this->faker->text(255),
            'number' => $this->faker->randomNumber(0),
            'team_id' => $team->id,
        ];

        $response = $this->putJson(route('api.players.update', $player), $data);

        $data['id'] = $player->id;

        $this->assertDatabaseHas('players', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_player()
    {
        $player = Player::factory()->create();

        $response = $this->deleteJson(route('api.players.destroy', $player));

        $this->assertDeleted($player);

        $response->assertNoContent();
    }
}
