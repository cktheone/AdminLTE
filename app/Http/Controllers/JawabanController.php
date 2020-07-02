<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use illuminate\Http\Request;
use App\Models\model1;


class JawabanController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
  
    public function index()
    {
        $question = model1::get_jawaban();
        return view ('page.jawaban', compact('question'));
    }

    public function create()
    {
        $simpan = model1::save_jawaban($data);
        return view ('page.jawaban', compact('simpan'));

    }
}