<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Order;

class OrderController extends Controller
{
    public function addAnOrder(OrderRequest $req) {
        $addorder = new Order;
        $addorder->items = $req->input('items');
        $addorder->customer = $req->input('customer');
        $addorder->email = $req->input('email');
        $addorder->adress = $req->input('adress');
        $addorder->city = $req->input('city');
        $addorder->country = $req->input('country');
        $addorder->airport = $req->input('airport');
        $addorder->price = $req->input('price');

        $addorder->save();

        \ShoppingCart::clean();

        return redirect()->route('home')->with('success', 'Заказ размещён');
    }

    public function getAllOrders(){
        return view('ordersAdmin', ['data' => Order::all()]);
    }

    public function deleteOrder(Request $req){
        $id = $req->input('id');
        Order::findOrFail($id)->delete();
        return view('ordersAdmin', ['data' => Order::all()])->with('success', 'Заказ удалён');
    }

    public function userOrders(Request $req){

        $orders = Order::query();

        $email = $req->input('email');

        $orders = $orders->Email($email);

        $orders = $orders->get();

        return view('ordersUser', ['data' => $orders]);
    }

    public function updateAnOrder(Request $req) {
        $id = $req->input('id');
        $addorder = Order::findOrFail($id);
        $addorder->items = $req->input('items');
        $addorder->customer = $req->input('customer');
        $addorder->email = $req->input('email');
        $addorder->adress = $req->input('adress');
        $addorder->city = $req->input('city');
        $addorder->country = $req->input('country');
        $addorder->airport = $req->input('airport');
        $addorder->price = $req->input('price');
        if($req->input('complete')){
            $addorder->complete = 0;
        }else{
            $addorder->complete = 1;
        }

        $addorder->save();

        return view('ordersAdmin', ['data' => Order::all()]);

    }
}