@extends ('template')
@section ('main')
<div class="card shadow">
    <div class="card-header py-3">
        <p class="text-primary m-0 fw-bold">Daftar Pengawas Aktif</p>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 text-nowrap">
                <div class="container"></div><a class="btn btn-primary" role="button" href="{{route('tambahpengawasform')}}">Tambah Pengawas</a>
            </div>
            <div class="col-md-6">
                <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
            </div>
        </div>
        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
            <table class="table my-0" id="dataTable">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>NUPTK</th>
                        <th>Pangkat/Golongan</th>
                        <th>Tempat, Tanggal lahir</th>
                        <th>Jabatan</th>
                        <th>Unit Organisasi</th>
                        <th>Alamat Unit Organisasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @csrf
                    @foreach ($userss as $users)
                    <tr>
                        <td>{{$users->nip_user}}</td>
                        <td><img src="{{asset('images/'.$users->pic)}}" style="height: 100px;width:100px;"></td>
                        <td>{{$users->nama}}</td>
                        <td>{{$users->nuptk}}</td>
                        <td>{{$users->golongan}}</td>
                        <td>{{$users->tempat}}, {{$users->tanggal_lahir}}</td>
                        <td>{{$users->jabatan}}</td>
                        <td>{{$users->unit_organisasi}}</td>
                        <td>{{$users->alamat_unit_organisasi}}</td>
                        <td>
                            <a href="edituser/{{$users->nip_user}}">ubah</a>
                            /
                            <a href="deleteuser/{{$users->nip_user}}">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th><strong>NIP</strong></th>
                        <th><strong>Foto</strong></th>
                        <th><strong>Nama</strong></th>
                        <th><strong>NUPTK</strong></th>
                        <th><strong>Pangkat/Golongan</strong></th>
                        <th><strong>Tempat, Tanggal lahir</strong></th>
                        <th><strong>Jabatan</strong></th>
                        <th><strong>Unit Organisasi</strong></th>
                        <th><strong>Alamat Unit Organisasi</strong></th>
                        <th><strong>Aksi</strong></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="row">
            <div class="col-md-6">
                {{ $userss->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
