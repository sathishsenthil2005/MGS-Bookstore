<h1>API Books (Google)</h1>

@if(isset($books['items']))

    @foreach($books['items'] as $item)
        <div style="border:1px solid #ccc; padding:10px; margin:10px;">
            <h3>{{ $item['volumeInfo']['title'] ?? 'No Title' }}</h3>
            <p>Author: {{ $item['volumeInfo']['authors'][0] ?? 'Unknown' }}</p>
        </div>
    @endforeach

@else
    <p>⚠️ API limit reached. Showing sample data:</p>

    <div style="border:1px solid #ccc; padding:10px; margin:10px;">
        <h3>Laravel for Beginners</h3>
        <p>Author: John Doe</p>
    </div>

    <div style="border:1px solid #ccc; padding:10px; margin:10px;">
        <h3>Mastering PHP</h3>
        <p>Author: Jane Smith</p>
    </div>

@endif