<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products; // Add this line
use App\Models\Photos;   // Add this line

use App\Http\Requests\ProductsRequest;



class ProductsController extends Controller
{
    //
    public function save(ProductsRequest $request){
        $items=new Products();
        $items->name=$request->name;
        $items->price=$request->price;
        $items->quantity=$request->quantity;
        $items->save();

        $imageName=$request->image->getClientOriginalName();
        $request->image->move(public_path('images'),  $imageName);


        $photos=new Photos();
        $photos->path='images/'.$imageName;
        $photos->product_id=$items->id;
        $photos->save();
        return back()->with('message', 'Registered successfully!');;
    }

    public function read(){
        // $items=Products::all();
        $items=Products::with('photo')->get();
        return view('read',compact('items'));
    }
}
