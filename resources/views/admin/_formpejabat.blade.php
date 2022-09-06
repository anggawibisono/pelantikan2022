<label class="form-label">Nama Pejabat</label>
<input type="text" class="form-control" name="nama_pejabat" value="{{$pejabat->nama_pejabat}}">
@foreach($errors->get('nama_pejabat') as $msg)
    <p class="text-danger">{{$msg}}</p>
@endforeach
<label class="form-label">Slug</label>
<input type="text" class="form-control" name="slug" value="{{$pejabat->slug}}">
@foreach($errors->get('slug') as $msg)
    <p class="text-danger">{{$msg}}</p>
@endforeach
<label class="form-label">Jabatan</label>
<input type="text" class="form-control" name="jabatan" value="{{$pejabat->jabatan}}">
@foreach($errors->get('jabatan') as $msg)
    <p class="text-danger">{{$msg}}</p>
@endforeach
<label class="form-label">Konfirmasi Kehadiran</label>
<input type="text" class="form-control" name="konfirmasi_kehadiran" value="{{$pejabat->konfirmasi_kehadiran}}">
@foreach($errors->get('konfirmasi_kehadiran') as $msg)
    <p class="text-danger">{{$msg}}</p>
@endforeach
<button type="submit" class="btn btn-primary mt-4">Simpan Data</button>

