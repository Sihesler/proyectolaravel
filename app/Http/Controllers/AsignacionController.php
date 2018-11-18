<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asignacion;
use App\Estudiante;
use App\Curso;
use DB;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $asignaciones = Asignacion::all();
        return view('/listar_asignacion', ['asignaciones' =>$asignaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        //$estudiantes = Estudiante::all();
        //return view('/crear_asignacion', compact('estudiantes'));
         $cursos = Curso::all();
         $estudiantes=Estudiante::all();
         return view('/crear_asignacion',[
             'cursos' => $cursos,
             'estudiantes' => $estudiantes
             
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
        /*$estudiante = $request->input('estudiante');

        $checkbox=$_POST['checkbox'];
        foreach($checkbox as $llave =>$valor)
        {
     
            DB::insert('insert into asignacion (estudiante_idestudiante,curso_idcurso) values(?,?) ',[$estudiante,$valor]);
 
        }
          return redirect('/listarasignacion')->with('info', 'Asignacion agregado');*/

        $idestudiante = $request->input('idestudiante');
        $checkbox=$_POST['checkbox'];
        foreach($checkbox as $llave =>$valor)
        {   
            DB::insert('insert into asignacion (estudiante_idestudiante,curso_idcurso) values(?,?) ',[$idestudiante,$valor]);
        }
        return redirect('/listarasignacion')->with('info', 'Asignacison agregado');
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
        $estudiante=estudiante::where('idestudiante',$id)->first();
        $curso=curso::where('idcurso',$id)->first();
        return view('/editar_asignacion',[
            'estudiante'=>$estudiante,
            'curso'=>$curso
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
    public function delete($id)
    {
        Asignacion::where('idasignacion', $id)->delete();        
        return redirect('/listarasignacion')->with('info', 'Asignacion eliminado');
    }
}
