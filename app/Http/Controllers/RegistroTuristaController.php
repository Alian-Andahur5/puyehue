<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Turista;
use App\visitas;
use App\Origen;
use App\Destino;

class RegistroTuristaController extends Controller
{

   Public function view(){
       //$turistas = Turista::all();


             $turistas = DB::table('turista')
             ->join('visitas', 'visitas.Turista_Identificacion', '=', 'turista.Identificacion')
             ->join('destino_detalle', 'visitas.Id', '=', 'destino_detalle.Visitas_Id')
             ->join('origen', 'origen.Nombre', '=', 'visitas.Origen_Nombre' )
             ->select('turista.Nombre', 'turista.Apellido', 'turista.Email', 'turista.Sexo', 'turista.GrupoEtario',
                    DB::raw('MAX(visitas.Fecha) as UltimaVisita'), 'destino_detalle.Destino_Nombre as Destino',  'origen.nombre as Origen',
                      'origen.Nacionalidad as Nacionalidad')

             ->groupBy('turista.Nombre', 'turista.Apellido', 'turista.Email', 'turista.Sexo', 'turista.GrupoEtario', 'visitas.Fecha',
             'destino_detalle.Destino_Nombre', 'origen.Nombre', 'origen.Nacionalidad')
             ->get();


return view('RegistroTurista', compact('turistas'));

    }

    public function create(){
        return view('turistas.create');
    }



    public function store(Request $request){

        $this->validate($request ,[

          'Nombre' => 'required|max:150',
          'Apellido' => 'required|max:200',
          'Email' => 'required|max:150',
          'Sexo' => 'required|max:200',
          'GrupoEtario' => 'required|max:150',
          'Fecha' => 'required|max:200',
          'Destino' => 'required|max:150',
          'Origen' => 'required|max:200',
          'Nacionalidad' => 'required|max:150',

        ]);


        $turista = new Turista;

        $turista->Nombre = $request->Nombre;
        $turista->Apellido = $request->Apellido;
        $turista->Email = $request->Email;
        $turista->Sexo = $request->Sexo;
        $turista->GrupoEtario = $request->GrupoEtario;

        $turista->save();

        $origen = new Origen;
        $origen->Nombre = $request->Origen;
        $origen->Nacionalidad = $request->Nacionalidad;

        $origen->save();

        $destino = new Destino;

        $destino->Nombre = $request->Destino;

        $destino->save();




        return redirect()->to('RegistroTurista')->with('success', 'Turista Registrado Exitosamente') ;

    }




    public function edit(){

    }


    public function show(){

    }

    public function destroy($Identificacion){

        $turistas = Turista::find($Identificacion);
        $Turista->delete();
        return redirect()->to('RegistroTurista');




    }
}
