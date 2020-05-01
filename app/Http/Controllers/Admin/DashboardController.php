<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Hospital;


class DashboardController extends Controller
{
    public function index (Request $request) {
        return view('pages.admin.dashboard',[
            'hospital' => Hospital::count(),
        ]);
    }
}
