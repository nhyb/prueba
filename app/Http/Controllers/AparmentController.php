<?php

namespace App\Http\Controllers;

use App\Aparment;
use Illuminate\Http\Request;

class AparmentController extends Controller
{

    public function index()
    {
        return view('aparments.index')->with('aparments',Aparment::all());
    }


    public function create()
    {
        return view('aparments.create');
    }


    public function store(Request $request)
    {
        Apartment::create($request->all());
        return redirect('/departamentos');
    }


    public function show(Aparment $aparment)
    {
      return view('aparments.show')->whit('aparment',$aparment);
    }


    public function edit(Aparment $aparment)
    {
        return view('aparments.edit')->whit('aparment',$aparment);
    }


    public function update(Request $request, Aparment $aparment)
    {
        Apartment::update($request->all());
        return redirect('/departamentos');
    }


    public function destroy(Aparment $aparment)
    {
        $aparment->delete();
        return redirect('/departamentos');

    }
}
