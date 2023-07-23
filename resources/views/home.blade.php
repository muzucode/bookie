<h1>{{$heading}}</h1>

@unless(count($books) == 0)

  @foreach($books as $book)
    <h2>{{$book['title']}}</h2>
  @endforeach

  @else
  <h2>No listings found!</h2>

@endunless