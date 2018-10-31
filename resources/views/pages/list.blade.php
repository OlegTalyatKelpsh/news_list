@extends('layout')

@section('content')


 <div class="container">
 @foreach($news as $item)
       @if($item->category)
             <a href="{{route('category.show', $item->category->id)}}"> {{$item->category->title}}</a>
        @endif

      <div class="starter-template">
        <h1>
         <a href="{{route('news.show', $item->id)}}">{{$item->title}}</a>
        </h1>
      
        <p class="lead">{!! $item->content !!}</p>
        {{$item->date}}
      </div>
@endforeach
{{$news->links()}}
    </div><!-- /.container -->

@endsection