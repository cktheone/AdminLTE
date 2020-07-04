<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use illuminate\Http\Request;
use App\Models\model2;


class JawabanController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
  
    public function index($pertanyaan_id)
    {
        $pertanyaan = model2::get_satupertanyaan($pertanyaan_id);
        $jawaban = model2::get_jawaban_by_pertanyaan($pertanyaan_id);
        //dd($jawaban, $pertanyaan);
        return view ('page.jawaban', compact('jawaban'), compact('pertanyaan'));

    }

    public function store($pertanyaan_id, Request $request)
    {
        //dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        model2::save_jawaban($data);
        return redirect('/jawaban/'.$pertanyaan_id);

    }
}