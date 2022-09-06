@extends('layout.header_layout')

@section('content')


<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <div class="container">

      <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/admin">Taruna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/adminpejabat">Pejabat</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li>
           <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item" ><i class="bi bi-box-arrow-right"></i>Logout</button>
            </form>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

     
        
        <!-- <div>
          Selamat Datang {{auth()->user()->name}}
        </div> -->
        <a class="btn btn-primary mb-2 mt-4" href="{{url('adminpejabat/create')}}">Tambah Data Pejabat</a>
        <a class="btn btn-success mb-2 mt-4" href="/pejabat/exportexcel">Export Data Excel</a>

        <div class="row g-3 align-items-center mt-2">
          <div class="col-auto mb-4">
            <form action="/adminpejabat" method="GET">
              <input type="search" name="search" class="form-control" placeholder="Cari Nama Pejabat">
            </form>
          </div>

        </div>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pejabat</th>
                <th scope="col">URL Undangan</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Konfirmasi Kehadiran</th>
                <th scope="col" colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pejabats as $key=>$value)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$value->nama_pejabat}}</td>
                        <td>pelantikan2022.poltekssn.ac.id/invitation/pejabat/{{$value->slug}}</td>
                        <td>{{$value->jabatan}}</td>
                        <td>{{$value->konfirmasi_kehadiran}}</td>
                        <td><a class="btn btn-success" href="{{url('adminpejabat/'.$value->id.'/edit')}}">Update</a></td>
                        <td>
                            <form action="{{url('adminpejabat/'.$value->id)}}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit">Hapus</button></td>
                            </form>    
                    </tr>

                @endforeach
            </tbody>
            </table>
    </div>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>

  @endsection