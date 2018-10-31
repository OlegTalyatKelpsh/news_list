@extends('layout')

@section('content')
 <div class="container">

      <div class="starter-template">
          @if($news->category)
          <h6><a href="{{route('category.show', $news->category->id)}}"> {{$news->category->title}}</a></h6>
       @endif   
        <h1><a href="{{route('news.show', $news->id)}}">{{$news->title}}</a></h1>
        <p class="lead">{!! $news->content !!}</p>
        {{$news->date}}
      </div>
</div>
<!-- end main content-->
@endsection