<div style="max-width: 600px; margin: auto; padding: 20px; background-color: #333; border-radius: 8px;">
    <h1 style="color: white; text-align: center; margin-bottom: 20px;">Create a New Film</h1>
    <form wire:submit.prevent="submit">
        <div style="margin-bottom: 15px;">
            <label for="title" style="color: white; display: block; margin-bottom: 5px;">Title</label>
            <input type="text" id="title" wire:model="title" style="width: 100%; padding: 10px; color: black; border-radius: 4px; border: 1px solid #ccc;">
            @error('title') <span style="color: red;">{{ $message }}</span> @enderror
        </div>
        <div style="margin-bottom: 15px;">
            <label for="summary" style="color: white; display: block; margin-bottom: 5px;">Summary</label>
            <textarea id="summary" wire:model="summary" style="width: 100%; padding: 10px; color: black; border-radius: 4px; border: 1px solid #ccc;"></textarea>
            @error('summary') <span style="color: red;">{{ $message }}</span> @enderror
        </div>
        <div style="margin-bottom: 15px;">
            <label for="cover" style="color: white; display: block; margin-bottom: 5px;">Cover</label>
            <input type="text" id="cover" wire:model="cover" style="width: 100%; padding: 10px; color: black; border-radius: 4px; border: 1px solid #ccc;">
            @error('cover') <span style="color: red;">{{ $message }}</span> @enderror
        </div>
        <button type="submit" style="width: 100%; padding: 10px; background-color: red; color: white; border: none; border-radius: 4px; cursor: pointer;">Create</button>
    </form>
    @if (session()->has('message'))
        <div style="color: green; text-align: center; margin-top: 15px;">{{ session('message') }}</div>
    @endif
</div>
