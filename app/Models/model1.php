<?php 
namespace App\Models;
use Illuminate\Support\Facades\DB;


class model1 {
public static function get_pertanyaan(){
    $ask = DB::table('tbl_pertanyaan')->get();
    return $ask;
}

public static function save_pertanyaan($data){
    $simpan = DB::table('tbl_pertanyaan')->insert($data);

    return $simpan;
}
public static function get_jawaban(){
    $question = DB::table('tbl_jawaban')->get();
    return $question;
}

public static function save_jawaban($data){
    $simpan = DB::table('tbl_jawaban')->insert($data);

    return $simpan;
}

}