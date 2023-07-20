<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;


class SupervisiController extends Controller
{
/*
//Awal backend untuk User(daftar, input, edit, delete)
    public function showuser()
    {
        $userss = DB::table('user')->orderby('nama', 'desc')->paginate(5);
        return view('daftaruser', ['userss'=>$userss]);
    }

    public function adduserproses(Request $users)
    {
        $users->validate([
            'nip' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required',
            'password' => 'required',
            'nuptk'=>'required',
            'golongan'=>'required',
            'tempat'=>'required',
            'tl'=>'required',
            'jabatan'=>'required',
            'unit_organisasi'=>'required',
            'alamat_unit'=>'required'
        ]);

        $imageName=time().'.'.$users->foto->extension();
        $users->foto->move(public_path('images'),$imageName);

        DB::table('user')->insert([
            'nip_user'=>$users->nip,
            'pic'=>$imageName,
            'nama'=>$users->nama,
            'password'=>bcrypt($users->password),
            'nuptk'=>$users->nuptk,
            'golongan'=>$users->golongan,
            'tempat'=>$users->tempat,
            'tanggal_lahir'=>$users->tl,
            'jabatan'=>$users->jabatan,
            'unit_organisasi'=>$users->unit_organisasi,
            'alamat_unit_organisasi'=>$users->alamat_unit
        ]);
        return redirect()->action([SupervisiController::class,'showuser']);
    }

    public function edituser($nip_user)
    {
	$users = DB::table('user')->where('nip_user',$nip_user)->get();
	return view('edituser',['user' => $users]);
    }

    public function deleteuser($nip_user)
    {
    //Memanggil data tabel user menggunakan nip via model User.php
    $file = User::findorFail($nip_user);
    //memamnggil file yang namanya ada  dalam data base
    $path = (public_path('images/'.$file->pic));
    //menghapus file yang telah di spesifikasi
    unlink($path);
    //menghapus record dari DB
	DB::table('user')->where('nip_user',$nip_user)->delete();
	return redirect('/daftaruser');
    }
//Akhir backend User
*/
}
