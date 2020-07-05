<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArtikelModel;

class CRUDController extends Controller
{
    public function __construct(){
        $this->artikel = new ArtikelModel();
    }

    public function ShowImage(){
        return view('pages.img');
    }

    public function ShowArtikel(){
        $data = $this->artikel->get();
        return view ('pages.artikel',compact('data'));
    }

    public function CreateArtikel(){
        return view ('pages.create');
    }

    public function ProsesCreate(Request $request){
        $data = $this->artikel;
        $data->judul = $request->judul;
        $data->isi = $request->isi;
        $data->slug = $request->slug;
        $data->tag = $request->tag;
        $data->save();
        return redirect('artikel');
    }

    public function DetilArtikel($id){
        $data = $this->artikel
        ->where('id',$id)
        ->first();
        return view ('pages.detil',compact('data'));
    }

    public function EditArtikel($id){
        $data = $this->artikel
        ->where('id',$id)
        ->first();
        return view ('pages.edit',compact('data'));
    }

    public function ProsesEdit(Request $request,$id){
        $data = $this->artikel
        ->where('id',$id)
        ->first();
        $data->judul = $request->judul;
        $data->isi = $request->isi;
        $data->slug = $request->slug;
        $data->tag = $request->tag;
        $data->save();
        return redirect ('artikel');
    }

    public function DeleteArtikel($id){
        $data = $this->artikel
        ->where('id',$id);

        $data->delete();
        return redirect ('artikel');
    }
}
