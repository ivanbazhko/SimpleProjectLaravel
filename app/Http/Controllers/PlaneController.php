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
        $sendplane->bigdesc = $req->input('bigdesc');
        $sendplane->begin = $req->input('begin');

        $sendplane->save();

        return redirect()->route('admin')->with('success', 'Самолёт добавлен');

    }
    
    public function filteredPlanes(Request $req) {

        $planes = Plane::all();

        $having = false;
        if($req->has('name')){
            $having = true;
            $planes = Plane::Name($req->input('name'));
         }
         
        if($req->has('manufacture')){
            if($req->input('manufacture') != 'any'){
            $having = true;
            $planes = Plane::From($req->input('manufacture'));
        }
        }

        if($req->has('pricefrom')){
            $having = true;
            $planes = Plane::Pricef($req->input('pricefrom'));
        }

        if($req->has('priceto')){
            $having = true;
            $planes = Plane::Pricet($req->input('priceto'));
        }

        if($req->has('paxfrom')){
            $having = true;
            $planes = Plane::Paxf($req->input('paxfrom'));
        }

        if($req->has('paxto')){
            $having = true;
            $planes = Plane::Paxt($req->input('paxto'));
         }

        if($req->has('fuselage')){
            if($req->input('fuselage') != 'any'){
            $having = true;
            $planes = Plane::Fus($req->input('fuselage'));
        }
        }

        if($req->has('minrange')){
            $having = true;
            $planes = Plane::Minr($req->input('minrange'));
        }

        if($having){
        $planes = $planes->get();
        }

        return view('store', ['dataPlanes' => $planes]);
    }

    public function onlyOne($id) {
        $plane = Plane::findOrFail($id);
        return view('onlyOne', ['th' => $plane]);
    }
}