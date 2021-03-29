<?php

namespace App\Http\Controllers\Api;

use App\Models\Player;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PlayerResource;
use App\Http\Resources\PlayerCollection;
use App\Http\Requests\PlayerStoreRequest;
use App\Http\Requests\PlayerUpdateRequest;

class PlayerController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Player::class);

        $search = $request->get('search', '');

        $players = Player::search($search)
            ->latest()
            ->paginate();

        return new PlayerCollection($players);
    }

    /**
     * @param \App\Http\Requests\PlayerStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlayerStoreRequest $request)
    {
        $this->authorize('create', Player::class);

        $validated = $request->validated();

        $player = Player::create($validated);

        return new PlayerResource($player);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Player $player
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Player $player)
    {
        $this->authorize('view', $player);

        return new PlayerResource($player);
    }

    /**
     * @param \App\Http\Requests\PlayerUpdateRequest $request
     * @param \App\Models\Player $player
     * @return \Illuminate\Http\Response
     */
    public function update(PlayerUpdateRequest $request, Player $player)
    {
        $this->authorize('update', $player);

        $validated = $request->validated();

        $player->update($validated);

        return new PlayerResource($player);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Player $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Player $player)
    {
        $this->authorize('delete', $player);

        $player->delete();

        return response()->noContent();
    }
}
