<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\ModelUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class BukuController extends Controller
{
    public function index()
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        } else {
            $books   = Book::all()->toArray();
            return view('buku.index', compact('books'));
        }
    }
    public function create()
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        } else {
            return view('buku.create');
        }
    }
    public function store(Request $request)
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        } else {
            $data   = new Book();
            $data->judul_buku       = $request->get('judul_buku');
            $data->penerbit_buku    = $request->get('penerbit_buku');
            $data->jumlah_halaman   = $request->get('jumlah_halaman');
            $data->user_have        = $request->get('user_have');
            $data->save();

            return redirect('/');
        }
    }
    public function edit($id)
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        } else {
            $data   = Book::find($id);
            return view('buku.edit', compact('data'));
        }
    }
    public function update(Request $request, $id)
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        } else {
            $this->validate($request,[
                'judul_buku' => 'required',
                'penerbit_buku'  => 'required',
                'jumlah_halaman'    => 'required',
                'user_have'    => 'required'
            ]);
            $data   = Book::find($id);
            $data->judul_buku        = $request->get('judul_buku');       //sebelahh kiri nama field
            $data->penerbit_buku         = $request->get('penerbit_buku');        // sebelah kanan name di input
            $data->jumlah_halaman   = $request->get('jumlah_halaman');
            $data->user_have   = $request->get('user_have');
            $data->save();

            return redirect('/')->with('success', "{$data['judul_buku']} Terupdate");
        }
    }
    public function destroy($id)
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        } else {
            $data   = Book::find($id);
            $data->delete();

            return back()->with('success', "{$data['judul_buku']} Terhapus");
        }
    }

    public function view_(){
        $data   = ModelUser::find(2);
        //print_r($data); 
        return $data->detail;
    }
}
