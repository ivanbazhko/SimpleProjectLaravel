<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Store;

class StoreController extends Controller
{
    public function filter(StoreRequest $req) {
    dd($req->all());
    }
}
