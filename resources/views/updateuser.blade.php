@extends('template')
@section('main')
<div class="row register-form">
    <div class="col-md-8 offset-md-2">
        @foreach($user as $u)
        <form class="custom-form" method="POST" action="{{ route('updatepengawas') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col"><img></div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>Form Update</h1>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label"> NIP </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="nip_user" value="{{$u->nip_user}}" readonly></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label"> Foto Profil</label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="file" name="foto"></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label"> Nama </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="nama" value="{{$u->nama}}"></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field"> Password </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="password" name="password"></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field"> Ulangi Password </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="password"></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label"> NUPTK </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="nuptk" value="{{$u->nuptk}}"></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label"> Pangkat/Golongan </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="golongan" value="{{$u->golongan}}"></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label"> Tempat, Tanggal lahir </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="tempat" value="{{$u->tempat}}"></div>
                <div class="col-sm-4 label-column"></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="date" name="tl" value="{{$u->tanggal_lahir}}"></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> Jabatan </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="jabatan" value="{{$u->jabatan}}"></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> Unit Organisasi </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="unit_organisasi" value="{{$u->unit_organisasi}}"></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> Alamat Unit Organisasi </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="alamat_unit" value="{{$u->alamat_unit_organisasi}}"></div>
            </div>
            <button class="btn btn-light submit-button" type="submit" name="tombol" value="Upload">Submit Form</button>
            <button class="btn btn-light submit-button" type="submit" name="tombol" value="Cetak">Cetak</button>
        </form>
        @endforeach
    </div>
</div>
@endsection