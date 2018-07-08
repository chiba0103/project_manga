<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Carbon\Carbon; //laravelには初期配備されてる






class PlanController extends Controller
{

    //private $array= array();
    //private $array2 = array();

    public function getPlan(){

        //$html = file_get_contents("https://honto.jp/netstore/calender.html");
        //phpQuery::newDocument($html)->find("h1")->text();


        return response()->json([['title' => 'test', 'start' => '2018-07-20']]);
    }

    public function test(){

        // Create Goutte Object
        $client = new Client();

        global $array2;
        $array2 = array();
        // Get Data Source
        $crawler = $client->request('GET', "https://honto.jp/netstore/calender.html");

        $tr = $crawler->filter('table.stTableData01 tr')->each(function($element){
            //td要素があるときのみ取得処理を行う
            if(count($element->filter('td'))){
                $element->filter('td')->eq(0)->text()."\n";
                $stringDate = date('Y'). '年'.$element->filter('td')->eq(0)->text();
                $date = Carbon::createFromFormat('Y年m月d日', $stringDate);

                //①
                $title =$element->filter('td')->eq(1)->text()."\n";
                //②
                $day = $date->format('Y-m-d');
                $tmp_array= array('title'=>$title, 'start'=>$day);
                //global $array;
                global $array2;
                array_push($array2, $tmp_array);

                //echo $element->filter('td')->eq(2)->text()."\n";
                //echo $element->filter('td')->eq(3)->text()."\n";
                // echo $element->filter('td')->eq(5)->text()."\n";
            }
            
        });
        global $array2;
        global $tmp_array;
        $json = json_encode($array2);
        //echo $json;
        //var_dump($array2);
        
        return response()->json($array2);
        //return response()->json(array($tmp_array));
        
    }
}

