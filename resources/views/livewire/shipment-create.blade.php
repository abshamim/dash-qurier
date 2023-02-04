<form class="w-full min-w-max" wire:submit.prevent="search">
    <div class="w-full mb-6">
        <input class="w-full mb-3" type="text" placeholder="Ratul Ahmed" wire:model.lazy="search">
        <button type="submit" class="bg-blue-700 py-2 px-4 text-white">Search</button>
      </div>
</form>

<div class="w-full mb-6">
    <label class="block tracking-wide text-[#ACB5BB] text-xs font-bold mb-2" for="grid-state">Customer</label>
    <div class="relative">
      <select wire:model.prevent="search" class="appearance-none block w-full text-black placeholder:text-black border border-[#DCE4E8] py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white text-sm" id="grid-state">
        @foreach ($customers as $customer)
        <option>{{ $customer->name }}</option>
        @endforeach
      </select>
    </div>
</div>
