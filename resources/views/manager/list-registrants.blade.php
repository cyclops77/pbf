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


    <div class="card">
    <div class="card-header">
        
        <strong></strong>
        
    </div>
    <div class="card-body card-block">
    
    <form action="/list-pendaftar/acc" method="POST">
        {{csrf_field()}}

    <div class="form-group">

            
            <table class="table table-stripped">
                <thead class="table-active">
                <th width="3%" class="text-center">#</th>
                    <th class="text-center">ID Pendaftar</th>
                    <th class="text-center">Nama Depan</th>
                    <th class="text-center">Nama Belakang</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Pengalaman Kerja</th>
                    <th class="text-center">Pendidikan Terakhir</th>
                </thead>
                <tbody>
                    
        @foreach($register as $reg)
                    <tr>
          <td>
                <input type="checkbox" name="person[]" value="{{$reg->id}}">     
                </td> 
                <td class="text-center">{{$reg->id}}</td>
                    <td class="text-center">{{$reg->first_name}}
                    </td>
                    <td class="text-center">{{$reg->last_name}}
                    </td>
                    <td class="text-center">{{$reg->address}}
                    </td>
                    <td class="text-center">{{$reg->job_experience}}
                    </td>
                    <td class="text-center">{{$reg->last_education}}
                    </td>
                    </tr>
        @endforeach
                </tbody>
            </table>    
    </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
  </form>
</div>
</div>
</div>
            
  </div>
</body>
</html>