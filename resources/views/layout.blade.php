<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>личный кабинет</title>
    <link href={{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">
    <link href={{asset('asset/vendor/font-awesome/css/font-awesome.min.css')}} rel="stylesheet">

    <link href={{asset('asset\js\jquery-1.11.1.min.js')}} rel="stylesheet">
    <link href={{asset('asset/vendor/datatables/dataTables.bootstrap4.css')}} rel="stylesheet">
   {{--  <link href={{asset('asset/css/sb-admin.min.css')}} rel="stylesheet"> --}}
    <!-- Bootstrap core CSS-->

</head>

 <body>
       
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Статьи</h1>
        <p>всякие интересные статьи</p>
         <p><a class="btn btn-primary btn-lg" href="/" role="button">главная страница &raquo;</a></p>
        <p><a class="btn btn-primary btn-lg" href="{{route('main.manager')}}" role="button">в панель менеджера &raquo;</a></p>
        
      </div>
    </div>

  
        
   
	@yield('content')



<footer class="bs-docs-footer">
  <div class="container">
  

    <p><h1>Копирайтеще&copy</h1></p>

   

  </div>
</footer>


     <script src="/plugins/ckeditor/ckeditor.js"></script>
     <script src="/plugins/ckfinder/ckfinder.js"></script>
<script>
    
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
   
</script>



</body>
</html>