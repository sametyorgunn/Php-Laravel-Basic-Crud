<?php

namespace App\Http\Controllers;

use App\Models\FormdanModel;
use Faker\Provider\en_UG\PhoneNumber;
use Illuminate\Http\Request;

class FormdanPost extends Controller
{
    public function Index()
    {
        return view("Iletisim");
    }
    public function IletisimEkle(Request $request)
    {
        $isim = $request->isim;
        $soyisim = $request->soyisim;

        $resimadi =rand(1,999).".".$request->resim->GetClientOriginalExtension();
        $yukle = $request->resim->move(public_path("images"),$resimadi);

        FormdanModel::create([
            "isim"=>$isim,
            "soyisim"=>$soyisim,
            "resim" =>$resimadi
        ]);
        return redirect("Iletisim");
    }

//    public function ResimEkle(Request $request)
//    {
//        $resimadi = rand(1-999).".".$request->resim.GetClientOriginalExtension();
//        $resim = $request->resim->move(public_path("images"),$resimadi);
//
//    }
}
