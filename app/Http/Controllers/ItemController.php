<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create() {
        return view('inventory.create');
    }

    public function index() {
        // $items = new Item();
        // $allData = $items->all();
        // return $allData;
        return view('inventory.index',[
            'items'=>Item::all()
        ]);
    }

    public function show($id){
        // $item = Item::find($id);

        // if(is_null($item)){
        //     abort(404);
        // }


        // return view("inventory.show",compact("item"));

        return view("inventory.show",[
            'item'=> Item::findOrFail($id)
        ]);
    }
    public function store(Request $request) {
        // dd($request-> name);
        $item = new Item();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->save();

        // $item = Item::create([
        //     'name' => $request->name,
        //     'price' => $request->price,
        //     'stock' => $request->stock
        // ]);
        return redirect()->route("item.index");
    }

public function destory($id){
    $item = Item::findOrFail($id);
    $item->delete();
    return redirect()->back();

}
}
