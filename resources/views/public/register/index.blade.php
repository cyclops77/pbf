<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
	 <div class="col-md-6">

    @if(session('sukses'))
    <div class="alert alert-success" >
      {{session('sukses')}}
    </div>
    @endif
    @if(session('gagal'))
    <div class="alert alert-success" >
      {{session('gagal')}}
    </div>
    @endif

<br>
   <form method="POST" action="{{url('/send/registration')}}">
          {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">First Name</label>
    <input type="text" class="form-control" name="first_name" placeholder="first_name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" class="form-control" name="last_name" placeholder="last_name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Adress</label>
    <input type="text" class="form-control" name="address" placeholder="address">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">job_experience</label>
    <input type="text" class="form-control" name="job_experience" placeholder="job_experience">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">last_education</label>
    <input type="text" class="form-control" name="last_education" placeholder="last_education">
  </div>
  <button type="submit" class="btn btn-primary">
    Send Registration
  </button>

</form>
</div>
  </div>
</body>
</html>