<?php 
namespace App\Models;
use Illuminate\Support\Facades\DB;


class model2 {
public static function get_satupertanyaan($id_pertanyaan)
{
    $pertanyaan = DB::table('tblpertanyaan')->where('id', $id_pertanyaan)->get();
    return $pertanyaan;
}

public static function get_jawaban_by_pertanyaan($id_pertanyaan)
{
    $jawaban = DB::table('tbljawaban')->where('pertanyaan_id', $id_pertanyaan)->get();
    return $jawaban;
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