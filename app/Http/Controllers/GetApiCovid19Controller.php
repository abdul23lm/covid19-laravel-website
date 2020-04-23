<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class GetApiCovid19Controller extends Controller
{
    public function index(){
        $response = Http::get('https://api.kawalcorona.com/indonesia', [
            [
                    'name'=> 'Indonesia',
                    'positif'=> '514',
                    'sembuh'=> '29',
                    'meninggal'=> '48',
            ]
        ]);
                $list_data = $response[0];
                return view('pages.index', compact('list_data'));
        }
}
