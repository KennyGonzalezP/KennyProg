<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HouseClient;
use App\Http\Requests\HouseClientRequest;


class HouseClientController extends Controller
{
    public function index()
    {
    	$houseclients = HouseClient::orderBy ('id', 'DESC')->paginate();
    	return view('admin.houseclient.index', compact('houseclients'));
    }

    public function edit($id)
    {
    	$houseclient = HouseClient::find($id);
    	return view('admin.houseclient.edit', compact('houseclient'));
    }

    public function create()
    {
    	return view('admin.houseclient.create');
    }

    public function store(HouseCLientRequest $request)
    {
    	$houseclient = new HouseClient;

        $houseclient->nombre = $request->nombre;
        $houseclient->email = $request->email;
        $houseclient->telefono = $request->telefono;
        $houseclient->descripcion = $request->descripcion;

        $houseclient->save();
        return redirect()->route('houseclients.index')->with('info', 'La persona fue Guardada');;
    }

    public function show($id)
    {
    	$houseclient = HouseClient::find($id);
    	return view('admin.houseclient.show', compact('houseclient'));
    }

    public function update(HouseClientRequest $request, $id)
    {
    	$houseclient =HouseClient::find($id);
        $houseclient->nombre = $request->nombre;
        $houseclient->email = $request->email;
        $houseclient->telefono = $request->telefono;
        $houseclient->descripcion = $request->descripcion;

        $houseclient->save();
        return redirect()->route('houseclients.index')->with('info', 'La persona ha sido actualizada');;
    }

    public function destroy($id)
    {
    	$houseclient = HouseClient::find($id);
    	$houseclient->delete();

    	return back()->with('info', 'La persona ha sido eliminada');
    }
}
