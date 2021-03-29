<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Team;
use App\Models\Player;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TeamPlayersControllerTest extends TestCase
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
    public function it_gets_team_players()
    {
        $team = Team::factory()->create();
        $players = Player::factory()
            ->count(2)
            ->create([
                'team_id' => $team->id,
            ]);

        $response = $this->getJson(route('api.teams.players.index', $team));

        $response->assertOk()->assertSee($players[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_team_players()
    {
        $team = Team::factory()->create();
        $data = Player::factory()
            ->make([
                'team_id' => $team->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.teams.players.store', $team),
            $data
        );

        $this->assertDatabaseHas('players', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $player = Player::latest('id')->first();

        $this->assertEquals($team->id, $player->team_id);
    }
}
