<div class="max-w-lg mx-auto p-4 bg-white text-black rounded shadow">
    <h1 class="text-2xl font-bold mb-4">{{ $film->title }}</h1>
    <p class="mb-4">{{ $film->summary }}</p>
    <img src="{{ $film->cover }}" alt="{{ $film->title }}" class="w-full rounded">
</div>
