@extends('layout.header_layout')

@section('content')

  <body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <div class="container">
        <form method="POST" action="{{url('admin/'.$taruna->id)}}">
            @csrf
                <input type="hidden" name="_method" value="PATCH">
                @include('admin._form')
        </form>
        <a href="/admin"class="btn btn-secondary mt-2">Batal</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
  @endsection
