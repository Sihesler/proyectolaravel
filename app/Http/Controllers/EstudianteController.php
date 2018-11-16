<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $estudiantes = Estudiante::all();
        return view('listar_estudiante', ['estudiantes' =>$estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('crear_estudiante');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //a
        $nombre = $request->input('nombre') ;
        $edad = $request->input('edad') ;
        $fecha = $request->input('fecha') ;
        $direccion = $request->input('direccion') ;
          
      DB::insert('insert into estudiante (nombre, edad, fecha_nacimiento, direccion) values(?,?,?,?) ',[$nombre, $edad, $fecha, $direccion ]);
        return redirect('/listarestudiante')->with('info', 'Estudiante agregado');

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
        return view('editar_estudiante',['estudiante'=>$estudiante]);
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
            'nombre' => 'required',
            'edad' => 'required',
            'fecha' => 'required',
            'direccion' => 'required'
            
          
        ]);
        $data = array(
            'nombre' => $request->input('nombre'),
            'edad' => $request->input('edad'),
            'fecha_nacimiento' => $request->input('fecha'),
            'direccion' => $request->input('direccion')
            
        );
        
        estudiante::where('idestudiante',$id)->update($data);      
        return redirect('listarestudiante')->with('info', 'estudiante actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        Estudiante::where('idestudiante', $id)->delete();        
        return redirect('/listarestudiante')->with('info', 'Estudiante eliminado');
    }
}
