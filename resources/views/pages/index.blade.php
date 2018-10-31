@extends('layout')

@section('content')

<div class="container">
      <!-- Example row of columns -->
      <div class="row">

     @foreach($news as $item)
        <div class="col-md-4">
        @if($item->category)   
          
            <a href="{{route('category.show', $item->category->id)}}"> {{$item->category->title}}</a>
          
        @endif
           <h2>
              <a href="{{route('news.show', $item->id)}}">{{$item->title}}</a> 
           </h2>
          <p> {!!$item->description!!} </p>
          {{$item->date}}
          <p><a class="btn btn-secondary" href="{{route('news.show', $item->id)}}" role="button">читать далее  &raquo;</a></p>
        </div>
     @endforeach
      </div>
  </div>

@endsection