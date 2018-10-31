@extends('layout')

@section('content')
<div class="content-wrapper">
     <p><a class="btn btn-secondary" href="{{route('news.index')}}" role="button">редактировать новость  &raquo;</a></p>
      <p><a class="btn btn-secondary" href="{{route('categories.index')}}" role="button">редактировать категории &raquo;</a></p>
 
  </div>
@endsection