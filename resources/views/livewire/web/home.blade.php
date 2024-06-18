<div>
    <h1>List of Films</h1>
    <ul>
        @foreach($films as $film)
            <li><a href="{{ route('view-film', $film->id) }}">{{ $film->title }}</a></li>
        @endforeach
    </ul>
    {{ $films->links() }}
</div>
