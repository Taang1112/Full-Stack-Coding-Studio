<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bag;

class BagController extends Controller
{
    public function submit(Request $request)
    {
        $bag = new Bag();
        $bag->brand = $request->brand;
        $bag->bahan = $request->bahan;
        $bag->save();


        return redirect()->route('bag');
    }
    public function tampil(){
        $bag = Bag::all();
        return view('semua', ['bag' => $bag]);
    }
}
