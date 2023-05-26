<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Paket;

use App\Models\order;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $paket = paket::all();

                return view('user.home', compact('paket'));
            }
            else
            {
                return view('admin.home');
            }

        }

        else
        {
            return redirect()->back();
        }

    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
        $paket = paket::all();

        return view('user.home', compact('paket'));
        }
    }


    public function order(Request $request)
    {

        $data = new order;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->date=$request->date;

        $data->phone=$request->number;

        $data->message=$request->message;

        $data->paket=$request->paket;

        $data->status='In progress';

        if(Auth::id())
        {

        $data->user_id=Auth::user()->id;

        }

        $data->save();

        return redirect()->back()->with('message','Pesanan Telah Berhasil. Kami akan mengkonfirmasi pesanan anda');

    }

    public function pesanan()
    {

        if(Auth::id())
        {

            $userid=Auth::user()->id;

            $order=order::where('user_id', $userid)->get();

            return view('user.pesanan', compact('order'));

        }
        else
        {
            return redirect()->back();
        }

    }

    public function batalkan_pesanan($id)
    {
        $data=order::find($id);

        $data->delete();

        return redirect()->back();

    }

}
