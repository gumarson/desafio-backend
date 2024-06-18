<div class="max-w-lg mx-auto p-4 bg-white text-black rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Create a New Film</h1>
    <form wire:submit.prevent="submit">
        <div class="mb-4">
            <label for="title" class="block font-medium">Title</label>
            <input type="text" id="title" wire:model="title" class="w-full p-2 border rounded">
            @error('title') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="summary" class="block font-medium">Summary</label>
            <textarea id="summary" wire:model="summary" class="w-full p-2 border rounded"></textarea>
            @error('summary') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="cover" class="block font-medium">Cover</label>
            <input type="text" id="cover" wire:model="cover" class="w-full p-2 border rounded">
            @error('cover') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">Create</button>
    </form>
    @if (session()->has('message'))
        <div class="mt-4 text-green-600">
            {{ session('message') }}
        </div>
    @endif
</div>
