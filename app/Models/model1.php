<?php 
namespace App\Models;
use Illuminate\Support\Facades\DB;


class model1 {
public static function get_pertanyaan(){
    $ask = DB::table('tblpertanyaan')->get();
    return $ask;
}

public static function get_pertanyaan_by_id($id){
    $pertanyaan = DB::table('tblpertanyaan')->where('id', $id)->first();
    return $pertanyaan;
}

public static function save_pertanyaan($data){
    $simpan = DB::table('tblpertanyaan')->insert($data);

    return $simpan;
}

public static function update($id, $request){
    $updatepertanyaan = DB::table('tblpertanyaan')
                        ->where('id', $id)
                        ->update([
                            'judul' => $request["judul"],
                            'isi' => $request["isi"],
                            'created_at' => $request["created_at"],
                            'updated_at' => $request["updated_at"]
                        ]);
    return $updatepertanyaan;
}
 public static function destroy($id)
 {
     $deleted = DB::table('tblpertanyaan')
                    ->where ('id',$id)
                    ->delete();
        return redirect('/pertanyaan');
 }
}