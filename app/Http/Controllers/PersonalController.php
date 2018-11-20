<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal;
use App\Http\Requests\PersonalRequest;


class PersonalController extends Controller
{
    public function index()
    {
    	$personals = Personal::orderBy ('id', 'DESC')->paginate();
    	return view('admin.personal.index', compact('personals'));
    }

    public function edit($id)
    {
    	$personal = Personal::find($id);
    	return view('admin.personal.edit', compact('personal'));
    }

    public function create()
    {
    	return view('admin.personal.create');
    }

    public function store(PersonalRequest $request)
    {
    	$personal = new Personal;

        $personal->nombre = $request->telefono;
        $personal->email = $request->telefono;
        $personal->telefono = $request->telefono;

        $personal->save();
        return redirect()->route('personals.index')->with('info', 'La persona fue Guardada');;
    }

    public function show($id)
    {
    	$personal = Personal::find($id);
    	return view('admin.personal.show', compact('personal'));
    }

    public function update(PersonalRequest $request, $id)
    {
    	$personal = Personal::find($id);
        $personal->nombre = $request->telefono;
        $personal->email = $request->telefono;
        $personal->telefono = $request->telefono;

        $personal->save();
        return redirect()->route('personals.index')->with('info', 'La persona ha sido actualizada');;
    }

    public function destroy($id)
    {
    	$personal = Personal::find($id);
    	$personal->delete();

    	return back()->with('info', 'La persona ha sido eliminada');
    }
}
