<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DishesController extends Controller
{
    public function recommend(Request $request)
    {
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,"127.0.0.10:5000/");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        $data= $request->getContent();
        $data = json_decode($data,true);
        $requestString = json_encode($data);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $requestString);
        curl_setopt($ch, CURLOPT_POST,true);
        $output = curl_exec($ch);
        curl_close($ch);
        

        return response($output)
            ->header('content-type','application/json');
    }
}
