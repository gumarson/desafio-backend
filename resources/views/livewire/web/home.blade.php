<div class="max-w-lg mx-auto p-4 bg-white text-black rounded shadow">
    <h1 class="text-2xl font-bold mb-4">List of Films</h1>
    <ul>
        @foreach($films as $film)
            <li class="mb-2 p-2 border-b">
                <a href="{{ route('view-film', $film->id) }}" class="text-blue-500 hover:underline">{{ $film->title }}</a>
            </li>
        @endforeach
    </ul>
    {{ $films->links() }}
</div>
