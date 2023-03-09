<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/auth/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/auth/vendor/jqvmap/css/jqvmap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/auth/vendor/chartist/css/chartist.min.css')}}">
	<!-- Summernote -->
    <link rel="stylesheet" href="{{asset('assets/auth/vendor/summernote/summernote.css')}}" >
	<link rel="stylesheet" href="{{asset('assets/auth/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/auth/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/auth/css/skin-3.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>



<form action="" method="POST" class="w-75 mx-auto m-5" style="width: 200px;">
@csrf
@method('PUT')
<div class="form-group">
    <label for="exampleInputEmail1">username</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $student->name}}" placeholder="user name">    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="emil" class="form-control" id="name" name="email" value="{{ $student->email}}" placeholder="user email">    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" class="form-control" id="name" name="password" value="{{ $student->password}}" placeholder="Password">    
  </div>

  <button type="submit" class="btn btn-primary w-100">update</button>
</form>


</body>
</html>
