<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    public static function get_all(){
      $artikel = DB::table('artikel')->get();
      return $artikel;
    }

    public static function save($data){
      $new = DB::table('artikel')->insert($data);
      return $new;
    }
}
