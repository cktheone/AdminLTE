<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use illuminate\Http\Request;
use App\Models\model1;


class PertanyaanController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
  
    public function index()
    {
        $ask = model1::get_pertanyaan();
        return view ('page.pertanyaan', compact('ask'));
    }

    public function create()
    {
        return view ('page.pertanyaan');

    }

    public function store(Request $request)
    {
        //dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $simpan_pertanyaan = Model1::save_pertanyaan($data);
        if ($simpan_pertanyaan){
            return redirect('/pertanyaan');
        }

    }
}