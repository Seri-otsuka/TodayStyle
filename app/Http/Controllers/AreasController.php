<?php

namespace App\Http\Controllers;

use App\Models\areas;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Models\User;

class AreasController extends Controller
{
     public function area(Area $area,User $user)
    {
        return view('auth.register')->with([
            'users' => $user,
            
            //データを呼び出す
            $area = Area::get()]);
    }
    
    //とりあえずページにデータを全件引き渡す
   /*** public function area(Area $area,User $user)
    {
        return view('auth.register')->with([
            'users' => $user,
            
            //データを呼び出す
            'areas' => $area->get()]);
    }***/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function show(areas $areas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function edit(areas $areas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, areas $areas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function destroy(areas $areas)
    {
        //
    }
}
