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

        Aparment::create($request->all());
        return redirect('/departamentos');
    }


    public function show(Aparment $aparment)
    {
      return view('aparments.show')->whit('aparment',$aparment);
    }


    public function edit($id)
    {
        $aparment = Aparment::find($id);
        return view('aparments.edit')->with('aparment',$aparment);
    }


    public function update(Request $request, $id)
    {

        $aparment = Aparment::find($id);
        $aparment->update($request->all());
        return redirect('/departamentos');
    }


    public function destroy($id)
    {
        $aparment = Aparment::find($id);
        $aparment->delete();
        return redirect('/departamentos');

    }
}
