@extends('template')
@section('main')
<div class="row register-form">
    <div class="col-md-8 offset-md-2">
        
        <form class="custom-form" method="POST" action="{{ route('tambahpengawas') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col"><img></div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>Form Regristrasi</h1>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label"> NIP </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="nip"></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label"> Foto Profil</label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="file" name="foto"></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label"> Nama </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="nama"></div>
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
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="nuptk"></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label"> Pangkat/Golongan </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="golongan"></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label"> Tempat, </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="tempat"></div>
                <div class="col-sm-4 label-column"><label class="col-form-label"> Tanggal lahir </label> </div>
                <div class="col-sm-6 input-column"><input class="form-control" type="date" name="tl"></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> Jabatan </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="jabatan"></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> Unit Organisasi </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="unit_organisasi"></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> Alamat Unit Organisasi </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="alamat_unit"></div>
            </div>
            <button class="btn btn-light submit-button" type="submit" value="Upload">Submit Form</button>
        </form>
    </div>
</div>
@endsection