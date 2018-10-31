
@extends('layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->

 
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">новости</h3>
            </div>
            <!-- /.box-header -->
            <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <a href="{{route('news.create')}}" class="btn btn-success">Добавить</a>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Категория</th>
                        
                        
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($news as $new)
                    <tr>
                        <td>{{$new->id}}</td>
                        <td>{{$new->title}}</td>
                        <td>{{$new->category['title']}}</td>
                        
                       
                       <td><a href="{{route('news.edit', $new->id)}}" class="fa fa-pencil"></a>

                      <a href="{{route('news.destroy', $new->id)}}"   onclick="return confirm('are you sure?')" class="fa fa-remove"></a>

                       </td>

                       
                    </tr>
                    @endforeach
                    </tbody>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>


  @endsection


