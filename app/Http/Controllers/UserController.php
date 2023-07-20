<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use mikehaertl\pdftk\Pdf;
use File;

class UserController extends Controller
{
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
        return redirect()->action([UserController::class,'showuser']);
    }

    public function edituser($nip_user)
    {
	$user = DB::table('user')->where('nip_user',$nip_user)->get();
	return view('updateuser',['user' => $user]);
    }

    public function updateuserproc(Request $request)
    {
        switch ($request->input('tombol')) {
            case 'Upload':
    //Update dan delete foto
                $file = User::findorFail($request->nip_user);
                $path = (public_path('images/'.$file->pic));
                unlink($path);
                $imageName=time().'.'.$request->foto->extension();
                $request->foto->move(public_path('images'),$imageName);
    //Update DB
	            DB::table('user')->where('nip_user',$request->nip_user)->update([
		            'pic'=>$imageName,
                    'nama'=>$request->nama,
                    'password'=>bcrypt($request->password),
                    'nuptk'=>$request->nuptk,
                    'golongan'=>$request->golongan,
                    'tempat'=>$request->tempat,
                    'tanggal_lahir'=>$request->tl,
                    'jabatan'=>$request->jabatan,
                    'unit_organisasi'=>$request->unit_organisasi,
                    'alamat_unit_organisasi'=>$request->alamat_unit
	            ]);
                return redirect()->action([UserController::class,'showuser']);
                break;
    //Print PDF
                case 'Cetak':
                    $pdf = new Pdf(public_path('pdftemp/INSTRUMEN SUPERVISI MANAJERIAL rev(1).pdf'));
                    $result = $pdf->fillForm([
                    'nama_pengawas'=>$request->nama, 
                    'nip' =>$request->nip_user,
                    'form'=>3,
                    ])
                    ->flatten()
                    ->send();
                break;
        }   
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
	return redirect()->route('daftarpengawas');
    }
//Akhir backend User


}