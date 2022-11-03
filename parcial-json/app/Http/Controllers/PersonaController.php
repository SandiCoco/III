<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

//nombre edad genero correo direccion


class PersonaController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Persona::customers();
        return view('customers')->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customers = Persona::customers();
        array_push($customers, $request->all());
        file_put_contents(base_path('database.json'), json_encode($customers));
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show($persona)
    {
        $customers = Persona::customers();
        $customer = $customers[$persona-1];
        return view('customer')->with('customer', $customer);
    }
    
    public function friends($persona)
    {
        $customers = Persona::customers();
        $customer = $customers[$persona-1];
        return view('cFriends')->with('customer', $customer);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($persona)
    {
        $customers = Persona::customers();
        $customer = $customers[$persona-1];
        return view('edit')->with('customer', $customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
