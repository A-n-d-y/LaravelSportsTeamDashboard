@extends('layouts.app')

@section('content')
<div class="mx-auto px-4 md:px-6">
    <x-partials.card>
        <div class="flex justify-between">
            <x-slot name="title"> @lang('crud.players.index_title') </x-slot>
        </div>

        <div class="mt-4 mb-5">
            <div class="flex flex-wrap">
                <div class="md:w-1/2">
                    <form>
                        <div class="flex items-stretch w-full">
                            <x-inputs.text
                                id="indexSearch"
                                name="search"
                                value="{{ $search ?? '' }}"
                                placeholder="{{ __('crud.common.search') }}"
                                autocomplete="off"
                            ></x-inputs.text>

                            <div class="ml-1">
                                <button
                                    type="submit"
                                    class="button button-primary"
                                >
                                    <i class="icon ion-md-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="md:w-1/2 text-right">
                    @can('create', App\Models\Player::class)
                    <a
                        href="{{ route('players.create') }}"
                        class="button button-primary"
                    >
                        <i class="mr-1 icon ion-md-add"></i>
                        @lang('crud.common.create')
                    </a>
                    @endcan
                </div>
            </div>
        </div>

        <div class="block w-full overflow-auto scrolling-touch">
            <table class="w-full max-w-full mb-4 bg-transparent">
                <thead>
                    <tr>
                        <th class="px-4 py-3 text-left">
                            @lang('crud.players.inputs.name')
                        </th>
                        <th class="px-4 py-3 text-right">
                            @lang('crud.players.inputs.number')
                        </th>
                        <th class="px-4 py-3 text-left">
                            @lang('crud.players.inputs.team_id')
                        </th>
                        <th class="px-4 py-3 text-center">
                            @lang('crud.common.actions')
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($players as $player)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 text-left">
                            {{ $player->name ?? '-' }}
                        </td>
                        <td class="px-4 py-3 text-right">
                            {{ $player->number ?? '-' }}
                        </td>
                        <td class="px-4 py-3 text-left">
                            {{ optional($player->team)->name ?? '-' }}
                        </td>
                        <td class="px-4 py-3 text-center" style="width: 134px;">
                            <div
                                role="group"
                                aria-label="Row Actions"
                                class="relative inline-flex align-middle"
                            >
                                @can('update', $player)
                                <a
                                    href="{{ route('players.edit', $player) }}"
                                    class="mr-1"
                                >
                                    <button type="button" class="button">
                                        <i class="icon ion-md-create"></i>
                                    </button>
                                </a>
                                @endcan @can('view', $player)
                                <a
                                    href="{{ route('players.show', $player) }}"
                                    class="mr-1"
                                >
                                    <button type="button" class="button">
                                        <i class="icon ion-md-eye"></i>
                                    </button>
                                </a>
                                @endcan @can('delete', $player)
                                <form
                                    action="{{ route('players.destroy', $player) }}"
                                    method="POST"
                                    onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                >
                                    @csrf @method('DELETE')
                                    <button type="submit" class="button">
                                        <i
                                            class="icon ion-md-trash text-red-600"
                                        ></i>
                                    </button>
                                </form>
                                @endcan
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">@lang('crud.common.no_items_found')</td>
                    </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <td class="pt-10" colspan="4">
                            {!! $players->render() !!}
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </x-partials.card>
</div>
@endsection
