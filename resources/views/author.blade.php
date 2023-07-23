<h1>{{$author->first_name}} {{$author->last_name}}</h1>

<ul>
  @foreach($books as $book)
  <li>{{$book->title}}</li>
  @endforeach
</ul>