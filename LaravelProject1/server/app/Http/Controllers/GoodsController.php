<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;

class GoodsController extends Controller
{
    public function list() {
        return view('goods-list', ['goods' => Good::all()]);
    }

    public function create()
    {
        return view('goods-create');
    }

    public function post(Request $request)
    {
        $good = new Good();
        $good->title=$request->title;
        $good->description=$request->description;
        $good->qty=$request->qty;
        $good->price=$request->price;
        $good->save();

        return redirect('/goods/list');
    }

    public function delete($id) 
    {
        $good = Good::find($id);  

        $good->delete();
        
        return redirect('/goods/list');
    }

    public function edit($id) {

        $good = Good::find($id);

        return view('goods-edit', ['good'=>$good, 'id'=>$good->id]);

        
    }

    public function saveChanges(Request $request) {

        $id = $request->id;

        $good =  Good::find($id);
        
         $good->title=$request->title;
         $good->description=$request->description;
         $good->qty=$request->qty;
         $good->price=$request->price;

        $good->save();

        return redirect('/goods/list');
    }

    public function search(Request $request)
    {    
        $title = $request->search;
        $goods = Good::where('title', $title)->get();

        return view('goods-list', ['goods' => $goods]);
    }


}
