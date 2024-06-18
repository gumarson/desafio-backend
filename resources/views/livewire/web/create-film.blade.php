<div>
    <h1>Create a New Film</h1>
    <form wire:submit.prevent="submit">
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" wire:model="title">
            @error('title') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="summary">Summary</label>
            <textarea id="summary" wire:model="summary"></textarea>
            @error('summary') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="cover">Cover</label>
            <input type="text" id="cover" wire:model="cover">
            @error('cover') <span>{{ $message }}</span> @enderror
        </div>
        <button type="submit">Create</button>
    </form>
    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif
</div>
