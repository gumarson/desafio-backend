<div style="max-width: 600px; margin: auto; padding: 20px; background-color: #333; border-radius: 8px;">
    <h1 style="color: white; text-align: center; margin-bottom: 20px;">List of Films</h1>
    <ul style="list-style-type: none; padding: 0;">
        @foreach($films as $film)
            <li style="background-color: #444; margin-bottom: 10px; padding: 10px; border-radius: 4px;">
                <a href="{{ route('view-film', $film->id) }}" style="color: white; text-decoration: none;">{{ $film->title }}</a>
            </li>
        @endforeach
    </ul>
    {{ $films->links() }}
</div>
