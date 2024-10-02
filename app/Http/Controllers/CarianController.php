<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RefNegeri;
use App\Models\RefGiatmara;
use App\Models\VGiatMaraKursus;

class CarianController extends Controller
{
    //
    public function giatmara(Request $request)
    {
        $neg = RefNegeri::where('nama_negeri', $request->carian_negeri)->first();

        if($neg)
        {
            $gm = RefGiatmara::where('id_negeri', $neg->id)->get();

            $res['status'] = 1;
            $res['gm'] = $gm;
            
        }

        return $res;
    }

    public function kursus(Request $request)
    {
        $kursus = VGiatMaraKursus::select('id_kursus','nama_kursus')->where('id_giatmara', $request->carian_giatmara)->where('status', 1)->get();

        $res['status'] = 1;
        $res['kursus'] = $kursus;
            

        return $res;
    }

    public function sesi(Request $request)
    {
        $sesi = VGiatMaraKursus::where('id_kursus', $request->carian_kursus)->where('id_giatmara', $request->carian_giatmara)->where('status', 1)->get();

        $res['status'] = 1;
        $res['sesi'] = $sesi;
            

        return $res;
    }
}
