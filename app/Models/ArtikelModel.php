<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ArtikelModel
{
    public static function get_all(){
      $artikel = DB::table('artikel')->get();
      return $artikel;
    }

    public static function get($id){
      $artikel = DB::table('artikel')->get()->where('id', $id);
      return $artikel;
    }

    public static function save($data){
      $new = DB::table('artikel')->insert($data);
      $artikel = DB::table('artikel')->get();
      return $artikel;
    }

    public static function slugify($text){
      // replace non letter or digits by -
      $text = preg_replace('~[^\pL\d]+~u', '-', $text);

      // transliterate
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

      // remove unwanted characters
      $text = preg_replace('~[^-\w]+~', '', $text);

      // trim
      $text = trim($text, '-');

      // remove duplicate -
      $text = preg_replace('~-+~', '-', $text);

      // lowercase
      $text = strtolower($text);

      if (empty($text)) {
        return 'n-a';
      }

      return $text;
    }

    public static function update($content, $id){
      $item = DB::table('artikel')->where('id', $id)->update(['judul' => $content["judul"], 'isi' => $content["isi"]]);
      $artikel = DB::table('artikel')->get();
      return $artikel;
    }

    public static function delete($id){
      $delete = DB::table('artikel')->where('id', $id)->delete();
    }
}
