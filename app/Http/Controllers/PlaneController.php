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

        $pricefrom = $req->input('pricefrom');
        $priceto = $req->input('priceto');
        $paxfrom = $req->input('paxfrom');
        $paxto = $req->input('paxto');
        $name = $req->input('name');
        $manufacture = $req->input('manufacture');
        $fuselage = $req->input('fuselage');
        $minrange = $req->input('minrange');

        $planes = Plane::all();

        if(isset($name)){
            $planes = Plane::Name($name)->get();
         }
         
        if(isset($manufacture)){
            $planes = Plane::From($manufacture)->get();
        }

        if(isset($pricefrom)){
            $planes = Plane::Pricef($pricefrom)->get();
        }

        if(isset($priceto)){
            $planes = Plane::Pricet($priceto)->get();
        }

        if(isset($paxfrom)){
           $planes = Plane::Paxf($paxfrom)->get();
        }

        if(isset($paxto)){
            $planes = Plane::Paxt($paxto)->get();
         }

        if(isset($fuselage)){
            $planes = Plane::Fus($fuselage)->get();
        }

        if(isset($minrange)){
            $planes = Plane::Minr($minrange)->get();
        }

        return view('store', ['dataPlanes' => $planes]);
    }

    public function onlyOne($id) {
        $plane = Plane::where('id', $id);
        dd($id);
        return view('onlyOne', ['th' => $plane]);
    }
}