@php $editing = isset($player) @endphp

<div class="flex flex-wrap">
    <x-inputs.group class="w-full">
        <x-inputs.text
            name="name"
            label="Name"
            value="{{ old('name', ($editing ? $player->name : '')) }}"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.number
            name="number"
            label="Number"
            value="{{ old('number', ($editing ? $player->number : '')) }}"
            max="255"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.select name="team_id" label="Team" required>
            @php $selected = old('team_id', ($editing ? $player->team_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Team</option>
            @foreach($teams as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
