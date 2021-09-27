<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coaches = Coach::all();
        return view('coach.index')->with('coaches', $coaches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coach.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coaches = new Coach();

        $coaches->nombres = $request->get('nombres');
        $coaches->correo = $request->get('correo');
        $coaches->telefono = $request->get('telefono');
        $coaches->activo = $request->get('activo');
        $coaches->observaciones = $request->get('observaciones');

        $coaches->save();

        return redirect('/coaches');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coach = Coach::find($id);
        return view('coach.edit')->with('coach', $coach);
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
        $coach = Coach::find($id);

        $coach->nombres = $request->get('nombres');
        $coach->correo = $request->get('correo');
        $coach->telefono = $request->get('telefono');
        $coach->activo = $request->get('activo');
        $coach->observaciones = $request->get('observaciones');

        $coach->save();

        return redirect('/coaches');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coach = Coach::find($id);
        $coach->delete();

        return redirect('/coaches');
    }
}
