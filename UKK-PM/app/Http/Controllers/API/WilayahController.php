<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function provinsi(Request $request)
    {
        $response = Http::get('http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        $article = $response->json();
        // fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
        // .then(response => response.json())
        // .then(provinces => console.log(provinces));
    }
    public function kabupaten(Request $request)
    {
        # code...
    }
    public function kecamatan(Request $request)
    {
        # code...
    }
    public function kelurahan(Request $request)
    {
        # code...
    }
}
