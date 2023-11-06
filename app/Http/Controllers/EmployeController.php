<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $employes = Employe::get();
        return view('employe.index', compact('employes'));
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('employe.add');
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $employe = new Employe();
        $employe->name = $request->name;
        $employe->address = $request->address;
        $employe->handphone = $request->handphone;
        $employe->save();
        return redirect()->route('employe.index');
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Employe  $employe
    * @return \Illuminate\Http\Response
    */
    public function show(Employe $employe)
    {
        //
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Employe  $employe
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $employes = Employe::find($id);
        return view('employe.edit', compact('employes'));
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Employe  $employe
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        $employe = Employe::find($id);
        $employe->name = $request->name;
        $employe->address = $request->address;
        $employe->handphone = $request->handphone;
        $employe->save();
        return redirect()->route('employe.index');
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Employe  $employe
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {

        Employe::where('_id', $id)->delete();
    return redirect()->route('employe.index');

    }
}
