<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function index()
    {
       $fClientes= Clientes::orderBy('id', 'DESC')->paginate();
        $num=1;
        return view('admin/index', compact('food', 'num'));
    }


    public function create()
    {
        $cliente = new Clientes();
        return View::make('users.save')->with('user', $user);
    }

 
    public function store(Request $request)
    {
        $user = new Clientes();
       $user->real_name = Input::get('real_name');
       $user->email = Input::get('email');
       $user->password = Hash::make(Input::get('password'));
       $user->level = Input::get('level');
       $user->active = true;
       $user->save();
   return Redirect::to('users')->with('notice', 'El usuario ha sido creado correctamente.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
