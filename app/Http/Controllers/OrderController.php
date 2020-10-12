<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function addAnOrder(Request $req) {
        $addorder = new Order;
        $addorder->items = $req->input('items');
        $addorder->name = $req->input('name');
        $addorder->customer = $req->input('customer');
        $addorder->email = $req->input('email');
        $addorder->adress = $req->input('adress');
        $addorder->city = $req->input('city');
        $addorder->country = $req->input('country');
        $addorder->airport = $req->input('airport');

        $addorder->save();

        return redirect()->route('home')->with('success', 'Заказ размещён');
    }

    public function show(Request $req){
        $r=$req->input('total');
        dd($r);
        // $r = explode(',', $r);
        // $e = count($r);
        // for($z = 0; $z <= $e; $z = $z+7)
        // $r = $r[$z];
        // $r = explode(':', $r);
        // echo($r[1]);
        // for ($num = 0; $num >= 0; $num++) {
        //     if($req->has($num)){
        //         echo('YES');
        //     } else{
        //         echo ('NO');
        //         break;
        //     }
        // }

    }
}