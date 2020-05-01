<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function getHospitals(Request $request)
    {
        $hospital = new Hospital();
        return $hospital->getHospitals($request->lat, $request->lng, $request->rad)->get();
    }
}
