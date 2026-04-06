@foreach($fruits as $fruit)
    <h2>{{ $fruit->name }}</h2>
    <p>{{ $fruit->price }}</p>
@endforeach

