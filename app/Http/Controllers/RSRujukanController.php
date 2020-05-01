<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital;
use App\Http\Controllers\Controller;

class RSRujukanController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::orderBy('created_at', 'ASC')->paginate(4);
        return view('pages.rs-rujukan.index', compact('hospitals'));
    }

    public function show(Request $request, $id)
    {
        // return $request->all();
        $hospital = Hospital::findOrFail($id);
        return view('pages.rs-rujukan.show', compact('hospital'));
    }

    public function browse()
    {
        return view('pages.rs-rujukan.browse');
    }
}
