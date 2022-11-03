<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class veritabaniislemleri extends Controller
{
    public  function Ekle()
    {
        DB::table("bilgiler")->insert([
           "username"=>"samet",
            "password"=>"yorgun.1292"
        ]);

    }
    public  function Duzenle()
    {
        DB::table("bilgiler")->where("id",1)->update([
            "username"=>"samet60",
            "password"=>"yorgun.1292"
        ]);

    }
    public  function Sil()
    {
        DB::table("bilgiler")->where("id",1)->delete();

    }
    public  function Listele()
    {
        $list = DB::table("bilgiler")->Get();
//        print_r($list);

        foreach ($list as $key=>$bilgi)
        {
            echo $bilgi->id." ".$bilgi->username;
        }

    }

    public  function birverigetir()
    {
        $veri = DB::table("bilgiler")->where("id",1)->first();
        echo $veri->username;

    }
}
