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
        $bag = Bag::whereBetween('id', ['2', '4'])->get();
        return view('semua', ['bag' => $bag]);
    }


public function satuan($id){
    $bag = Bag::findOrFail($id);
    return view('satuan', ['bag' => $bag]);
}
}
