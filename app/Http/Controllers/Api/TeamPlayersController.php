<?php

namespace App\Http\Controllers\Api;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PlayerResource;
use App\Http\Resources\PlayerCollection;

class TeamPlayersController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Team $team)
    {
        $this->authorize('view', $team);

        $search = $request->get('search', '');

        $players = $team
            ->players()
            ->search($search)
            ->latest()
            ->paginate();

        return new PlayerCollection($players);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Team $team)
    {
        $this->authorize('create', Player::class);

        $validated = $request->validate([
            'name' => ['required', 'max:255', 'string'],
            'number' => ['required', 'numeric'],
        ]);

        $player = $team->players()->create($validated);

        return new PlayerResource($player);
    }
}
