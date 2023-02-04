<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Registro;
use App\Models\Estudiante;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->exists("buscar")) {
            $estudiantes = Estudiante::all();
            $fecha=request('fecha');
            $registro_asis =DB::select('select * from registro_asistencia where fecha_registro = ?', [$fecha]);
            return view('asistencia.buscador')->with(["asistencia"=>$registro_asis]);

        }else{
        $cantidad_es = Estudiante::all()->count();
        $fecha_actual = date("Y-m-d");
        $registro_asis = Asistencia::all();
        $estudiantes = Estudiante::all();
        $arrayAsistencia=array();
        foreach($estudiantes as $e){
            $id=$e->id_es;
            $a=Asistencia::where('id_estudiante',$id)->where('fecha_registro',$fecha_actual)->count();

            if($a>0){
                $arrayAsistencia[]=true;

            }else{
                $arrayAsistencia[]=false;
            }

        }
        return view('asistencia.index')->with(['cantidad_es'=>$cantidad_es,'cantidad'=>$a,'asistencia'=>$arrayAsistencia,'registro_asis' => $registro_asis, 'fecha_actual' => $fecha_actual, 'estudiantes' => $estudiantes]);
    }
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
        ///// Logica insertar estudiante en la asistencia /////
        if ($request->exists("A_ausente")) {
            $registro = request('id_asis');

            $id = array($registro);

            foreach ($id as $datos) {
                for ($i = 0; $i < count($datos); $i++) {
                    $fecha_actual = date("Y-m-d");
                    $insertar = $datos[$i];
                    Asistencia::create([
                        'id_estudiante' => $insertar,
                        'fecha_registro' => $fecha_actual
                    ]);
                }
            }
            ///// fin Logica insertar ////


        }else if($request->exists("todos_presente")){
            $ids_estudiantes = request('id_estudiante');
            for ($i = 0; $i < count($ids_estudiantes); $i++) {
                $fecha_actual = date("Y-m-d");
                $insertar = $ids_estudiantes[$i];
                Asistencia::create([
                    'id_estudiante' => $insertar,
                    'fecha_registro' => $fecha_actual
                ]);
            }
        }
        return redirect('/asistencia');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function show(Asistencia $asistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asistencia $asistencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asistencia $asistencia)
    {
        //
    }
}
