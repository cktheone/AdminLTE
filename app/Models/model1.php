<?php 
namespace App\Models;
use Illuminate\Support\Facades\DB;


class model1 {
public static function get_pertanyaan(){
    $ask = DB::table('tblpertanyaan')->get();
    return $ask;
}

public static function get_satupertanyaan($data)
    $pertanyaan = DB::table('tblPertanyaan')->where('id', '=', $data)->get();
    return $pertanyaan;

public static function save_pertanyaan($data){
    $simpan = DB::table('tblpertanyaan')->insert($data);

    return $simpan;
}
public static function get_jawaban(){
    $question = DB::table('tbljawaban')->get();
    return $question;
}

public static function save_jawaban($data){
    $simpan = DB::table('tbljawaban')->insert($data);

    return $simpan;
}

}