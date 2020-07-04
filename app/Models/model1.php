<?php 
namespace App\Models;
use Illuminate\Support\Facades\DB;


class model1 {
public static function get_pertanyaan(){
    $ask = DB::table('tblpertanyaan')->get();
    return $ask;
}

public static function get_pertanyaan_by_id($id_pertanyaan){
    $pertanyaan = DB::table('tblpertanyaan')->where('pertanyaan_id', $id_pertanyaan)->get();
    return $pertanyaan;
}

public static function save_pertanyaan($data){
    $simpan = DB::table('tblpertanyaan')->insert($data);

    return $simpan;
}

}