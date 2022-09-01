<label class="form-label">Nama Taruna</label>
<input type="text" class="form-control" name="nama_taruna" value="{{$taruna->nama_taruna}}">
@foreach($errors->get('nama_taruna') as $msg)
    <p class="text-danger">{{$msg}}</p>
@endforeach
<label class="form-label">Slug</label>
<input type="text" class="form-control" name="slug" value="{{$taruna->slug}}">
@foreach($errors->get('slug') as $msg)
    <p class="text-danger">{{$msg}}</p>
@endforeach
<label class="form-label">Nama Ayah</label>
<input type="text" class="form-control" name="nama_ayah" value="{{$taruna->nama_ayah}}">
@foreach($errors->get('nama_ayah') as $msg)
    <p class="text-danger">{{$msg}}</p>
@endforeach
<label class="form-label">Nama Ibu</label>
<input type="text" class="form-control" name="nama_ibu" value="{{$taruna->nama_ibu}}">
@foreach($errors->get('nama_ibu') as $msg)
    <p class="text-danger">{{$msg}}</p>
@endforeach
<label class="form-label">Konfirmasi Kehadiran</label>
<input type="text" class="form-control" name="konfirmasi_kehadiran" value="{{$taruna->konfirmasi_kehadiran}}">
@foreach($errors->get('konfirmasi_kehadiran') as $msg)
    <p class="text-danger">{{$msg}}</p>
@endforeach
<button type="submit" class="btn btn-primary mt-4">Simpan Data</button>

