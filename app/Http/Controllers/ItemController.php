<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::get();
        // foreach($items as $item){
        //     echo $item->getFirstMediaUrl('item_images');
        // }
        //return $items->getMedia();
        return view('test', compact('items'));
    }
    public function store(Request $request)
    {
        //dd($request->item_image);
        $item = Item::create($request->all());
        $item->addMedia($request->item_image)->toMediaCollection('item_images');
        dd('success');
    }
}
