<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function index(){
      $artikel = ArtikelModel::get_all();
      return view('artikel.index', compact('artikel'));
    }

    public function show($id){
      $artikel = ArtikelModel::get($id);
      return view('artikel.show', compact('artikel'));
    }

    public function create(){
      return view('artikel.form');
    }

    public function store(Request $request){
      $data = $request->all();
      $data["slug"] = ArtikelModel::slugify($data["judul"]);
      unset($data["_token"]);
      // dd($data);
      $artikel = ArtikelModel::save($data);
      return view('artikel.index', compact('artikel'));
    }

    public function edit($id){
      $artikel = ArtikelModel::get($id);
      return view('artikel.edit', compact('artikel'));
    }

    public function update(Request $request){
      $data = $request->all();
      $id = $data["id"];
      unset($data["id"]);
      $artikel = ArtikelModel::update($data, $id);
      return view('artikel.index', compact('artikel'));
    }
}
