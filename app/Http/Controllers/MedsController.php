<?php

namespace App\Http\Controllers;

use App\Med;
use Illuminate\Http\Request;

class MedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $meds = Med::all();
        return view('meds.show')->with('meds', $meds);
    }
}