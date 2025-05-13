<div>
    <div class="mb-4">
        <label class="mb-2 font-bold text-gray-800">Enter City</label>
        <input wire:model="city" type="text" class="p-2 border rounded" placeholder="Paris">
    </div>

    <div class="mb-4">
        <button wire:click="search" class="bg-blue-300 hover:bg-blue-500 text-white py-2 px-4">
            Search
        </button>

        <div wire:loading wire:target="search" class="inline-block ml-2 text-blue-300">
            Loading...
        </div>
    </div>
</div>
