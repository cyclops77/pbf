<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .card-body{
      background-color: #ff8c00;
       width: 100%;
      height: 200px;
    }
    .button{
      width: 500px;
      height: 100px;
      border-radius: 10%;
      background-color: #6495ed;
    }
  </style>
</head>
<body>
	<div class="card">
  <div class="card-header">
    WEB Laravel PBF
  </div>
  <div class="card-body" style="">
    <h1 style="color: white">ADA YG MAU BUAT DESIGN INI GAK ?</h1>
    Password Anda :
    {{$e_message}}
    <a href="#" class="button">Login</a>
  </div>
</div>
	
	

</body>
</html>