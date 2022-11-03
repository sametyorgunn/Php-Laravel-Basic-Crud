<?php

namespace App\Http\Controllers;

use app\Http\Model\bilgiler;
use Illuminate\Http\Request;

class modelislemleri extends Controller
{
    public function list()
    {

//    bilgi = bilgiler::get();
//    $bilgi = bilgiler::where("id",2)->first();
      $bilgi = bilgiler::find(2);

      echo $bilgi->username;
    }

    public function Ekle()
    {
        bilgiler::create([
            "username" =>"seko",
            "password"=>"seko1458"
        ]);
    }
    public function Guncelle()
    {
        bilgiler::where("id",1)->update([
            "username" =>'seko',

        ]);
    }
    public function Sil()
    {
        bilgiler::where("id",1)->delete();
    }
}

