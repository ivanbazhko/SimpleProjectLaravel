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

        if($req->has('name')){
            $planes = Plane::Name($req->input('name'));
         }
         
        if($req->has('manufacture')){
            if($req->input('manufacture') !== 'any'){
            $planes = Plane::From($req->input('manufacture'));
        }
        }

        if($req->has('pricefrom')){
            $planes = Plane::Pricef($req->input('pricefrom'));
        }

        if($req->has('priceto')){
            $planes = Plane::Pricet($req->input('priceto'));
        }

        if($req->has('paxfrom')){
           $planes = Plane::Paxf($req->input('paxfrom'));
        }

        if($req->has('paxto')){
            $planes = Plane::Paxt($req->input('paxto'));
         }

        if($req->has('fuselage')){
            if($req->input('fuselage') !== 'any'){
            $planes = Plane::Fus($req->input('fuselage'));
        }
        }

        if($req->has('minrange')){
            $planes = Plane::Minr($req->input('minrange'));
        }

        $planes = $planes->get();

        return view('store', ['dataPlanes' => $planes]);
    }

    public function onlyOne($id) {
        $plane = Plane::where('id', $id)->get();
        return view('onlyOne', ['th' => $plane]);
    }
}