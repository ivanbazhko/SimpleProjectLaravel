<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PlaneRequest;
use App\Plane;

class PlaneController extends Controller
{
    public function adding(PlaneRequest $req) {

        $sendplane = new Plane;
        $sendplane->name = $req->input('name');
        $sendplane->manufacture = $req->input('manufacture');
        $sendplane->image = $req->input('image');
        $sendplane->price = $req->input('price');
        $sendplane->capacity = $req->input('capacity');
        $sendplane->fuselage = $req->input('fuselage');
        $sendplane->range = $req->input('range');
        $sendplane->description = $req->input('description');

        $sendplane->save();

        return redirect()->route('admin')->with('success', 'Самолёт добавлен');

    }

    public function receivePlane(){
        return view('store', ['dataPlanes' => Plane::all()]);
    }
}