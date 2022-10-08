<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Usuarios:: all();
        
        return View('home.index')->with(compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = null;
        return view('home.form')->with(compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Usuarios();
        $user->fill($request->all());
        $user->save();

        return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $user = Usuarios::find($id);
        return view('home.show')->with(compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $user = Usuarios:: find($id);
        // dd($User);
        return view('home.form')->with(compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $user = Usuarios:: find($id);
        $user->fill($request->all());
        $user->save();

        return redirect()->route('home.index')->with('success','User Atualizada com Sucesso!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $user = Usuarios:: find($id);
        $user->delete();

        return redirect()->route('home.index')->with('danger','User Deletado com Sucesso!');
    }
}
