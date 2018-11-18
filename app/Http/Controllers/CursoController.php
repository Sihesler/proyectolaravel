<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use DB;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cursos = Curso::all();
        return view('/listar_curso', ['cursos' =>$cursos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('/crear_curso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materia = $request->input('materia') ;
        $profesor = $request->input('profesor') ;
        $hora = $request->input('hora') ;
          
        DB::insert('insert into curso (materia, profesor, hora) values(?,?,?) ',[$materia, $profesor, $hora]);
        return redirect('/listarcurso')->with('info', 'Curso agregado');
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
        $curso=curso::where('idcurso',$id)->first();
        return view('/editar_curso',['curso'=>$curso]);
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
        $this->Validate($request, [
            'materia' => 'required',
            'profesor' => 'required',
            'hora' => 'required'
            
          
        ]);
        $data = array(
            'materia' => $request->input('materia'),
            'profesor' => $request->input('profesor'),
            'hora' => $request->input('hora')
            
        );
        
        curso::where('idcurso',$id)->update($data);      
        return redirect('/listarcurso')->with('info', 'Curso actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Curso::where('idcurso', $id)->delete();        
        return redirect('/listarcurso')->with('info', 'Curso eliminado');
    }
}
