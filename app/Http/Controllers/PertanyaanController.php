<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use illuminate\Http\Request;
use App\Models\model1;
use App\Models\model2;


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

    public function detail($id)
    {
        $pertanyaan = model1::get_pertanyaan_by_id($id);
        return view ('page.detailpertanyaan', compact('pertanyaan'));
    }

    public function edit($id)
    {
        $pertanyaan = model1::get_pertanyaan_by_id($id);
        return view ('page.editpertanyaan', compact('pertanyaan'));
    }

    public function update($id, Request $request)
    {
        //dd($request);
        $pertanyaan = model1::update($id, $request->all());

        return redirect ('/pertanyaan');
    }

    public function destroy($id)
    {
        //dd($request);
        $delete = model1::destroy($id);
        return redirect ('/pertanyaan');
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