<?php

namespace App\Http\Controllers;

use App\Service;
use App\Item;
use App\Sales;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services   = Service::all();
        return view('services.index', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $service = new Service();
        $service->name = $request->input('sname');
        $service->labour_cost = $request->input('labour_cost');
        $service->price = $request->input('price');
        $service->save(); //persist the data
        return redirect()->route('services.index')->with('success', 'Service Created Successfully');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service    = Service::find($id->id);
        return view('services.show', ['services' => $service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service    = Service::findOrFail($id);

        return view('services.edit', ['service' => $service]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service    = Service::findOrFail($id);
        $service->delete();

        return redirect('/serices')->with('service', 'Service is successfully deleted');
    }

    public function serch_item($name)
    {
        $item = Item::Where('name', 'like', '%' . $name . '%')->first();
        return $item->name;
    }
}
