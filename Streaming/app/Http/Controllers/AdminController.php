<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paket;

use App\Models\Order;

class AdminController extends Controller
{
    public function tambahview()
    {

        return view('admin.tambah_paket');
    }

    public function upload(Request $request)
    {
        $paket=new paket;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('paketimage', $imagename);

        $paket->image=$imagename;

        $paket->name=$request->name;

        $paket->harga=$request->harga;

        $paket->jenis=$request->jenis;

        $paket->deskripsi=$request->deskripsi;

        $paket->save();

        return redirect()->back()->with('message', 'Paket Berhasil Ditambahkan  ');

    }

    public function lihat_pesanan()
    {

        $data=order::all();

        return view('admin.lihat_pesanan', compact('data'));
    }


    public function setuju($id)
    {

        $data=order::find($id);

        $data->status='Setuju';

        $data->save();

        return redirect()->back();

    }

    public function batal($id)
    {

        $data=order::find($id);

        $data->status='Batal';

        $data->save();

        return redirect()->back();

    }

    public function lihat_paket()
    {
        $data=paket::all();

        return view('admin.lihat_paket', compact('data'));
    }

    public function deletepaket($id)
    {
        $data=paket::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function update_paket($id)
    {

        $data=paket::find($id);

        return view('admin.update_paket', compact('data'));
    }

    public function editpaket(Request $request, $id)
    {
        $paket = paket::find($id);

        $paket->name=$request->name;

        $paket->harga=$request->harga;

        $paket->jenis=$request->jenis;

        $paket->deskripsi=$request->deskripsi;


        $image=$request->file;

        if($image)
        {

        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('paketimage', $imagename);

        $paket->image=$imagename;

        }

        $paket->save();

        return redirect()->back()->with('message', 'Paket Berhasil Diubah');
    }

}
