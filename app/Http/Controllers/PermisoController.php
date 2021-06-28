<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $roles = DB::table('roles')->get();
        
        return view('permisos.index',['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permisos = DB::table('permisos')->get(); 

    
        return view('permisos.create',[
            'permisos' => $permisos
        ]);
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
    public function edit($rol)
    {   
        $rol_nom = DB::table('roles')->where('id','=',$rol)->get();
        $permisos_rol = DB::table('rol_permiso')->where('fk_rol','=',$rol)->get();
        
        //dd($permisos_rol) ;// ====> 2,3,4 ;
        $permisos = DB::table('permisos')->get(); 
        $roles_key = array();

        foreach($permisos_rol as $permiso_rol) {
            $roles_key[] = $permiso_rol->fk_permiso;
        }

        return view('permisos.edit',[
            'rol' => $rol,
            'permisos' => $permisos,
            'roles_key'=> $roles_key
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
