<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retrieve all items
        $items =Item::all();
        return view('items.index', ['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //code size	name cost saleable quantity	minimum_quantity brand
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'code' => 'required',
            'cost' => 'required',
            'saleable' => 'required',
            'size' => 'required',
            'quantity' => 'required',
            'minimum_quantity' => 'required',
            'brand' => 'required'
            
            
        ]);
        $item = Item::create($validatedData);
   
        return redirect('/items')->with('success', 'Item is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        // retrieve one item by id
        // $item=Item::where('id', $item->id)->first();
        $item=Item::find($item->id);
        return view('items.show', ['items'=>$item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::findOrFail($id);

        return view('items.edit', ['item'=>$item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'code' => 'required',
            'cost' => 'required',
            'saleable' => 'required',
            'size' => 'required',
            'quantity' => 'required',
            'minimum_quantity' => 'required',
            'brand' => 'required'
            
            
        ]);
        Item::whereId($id)->update($validatedData);

        return redirect('/items')->with('success', 'Item is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect('/items')->with('success', 'Item is successfully deleted');
    }
}
