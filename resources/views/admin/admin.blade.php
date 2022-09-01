@extends('layout.header_layout')

@section('content')


<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <div class="container">
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="btn btn-primary mb-4 mt-4" >Logout</button>
      </form>
        
        <div>
          Selamat Datang {{auth()->user()->name}}
        </div>
        <a class="btn btn-primary mb-4 mt-4" href="{{url('admin/create')}}">Tambah Data</a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">Nama Taruna</th>
                <th scope="col">URL Undangan</th>
                <th scope="col">Nama Ayah</th>
                <th scope="col">Nama Ibu</th>
                <th scope="col">Konfirmasi Kehadiran</th>
                <th scope="col" colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tarunas as $key=>$value)
                    <tr>
                        <td>{{$value->nama_taruna}}</td>
                        <td>pelantikan2022.poltekssn.ac.id/invitation/taruna/{{$value->slug}}</td>
                        <td>{{$value->nama_ayah}}</td>
                        <td>{{$value->nama_ibu}}</td>
                        <td>{{$value->konfirmasi_kehadiran}}</td>
                        <td><a class="btn btn-success" href="{{url('admin/'.$value->id.'/edit')}}">Update</a></td>
                        <td>
                            <form action="{{url('admin/'.$value->id)}}" method="POST">
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