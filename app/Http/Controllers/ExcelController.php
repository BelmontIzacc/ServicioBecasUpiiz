<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Excel;

class ExcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

     public function All()
    {

        Excel::create('Lista_Todos_Registrados',function($excel)
        {
            $excel->sheet('Registrados',function($sheet)
            {
                    $users = DB::table('usuario')
                        ->join('vivienda','vivienda.usuario_id','=','usuario.id')
                        ->join('carrera','carrera.id','=','usuario.carrera_id')
                        ->join('estado','estado.id','=','vivienda.estado_id')
                        ->join('municipio','municipio.id','=','vivienda.municipio_id')
                        ->join('tcasa','tcasa.id','=','vivienda.tipoCasa_id')
                        ->join('transporte','transporte.id','=','vivienda.transporte_id')
                        ->join('personales','personales.usuario_id','=','usuario.id')
                        ->join('antecedentes','antecedentes.usuario_id','=','usuario.id')
                        ->join('beca','beca.id','=','antecedentes.beca_id')
                        ->join('gasto','gasto.usuario_id','=','usuario.id')
                        ->select('usuario.boleta as Boleta','usuario.apellidoPaterno as A.Paterno','usuario.apellidoMaterno as A.Materno','usuario.nombre as Nombre','carrera.nombre as Carrera','antecedentes.promActual as Promedio','usuario.edad as Edad','usuario.semestre as Semestre','usuario.grupo as Grupo','personales.nomTutor as NombreTutor','personales.telTutor as TelefonoTutor','personales.telCasa as TelefonoCasa','personales.telCelular as TelefonoCelular','antecedentes.actualBeca as BecaActual','beca.nombre as BecaASolicitar','antecedentes.licenciatura as LicenciaturaTerminada','antecedentes.historiaAC as Status','municipio.nombre as Municipio','estado.nombre as Estado','vivienda.habitantes as PersonasQueVivenEnCasa','vivienda.habitaciones as HabitacionesEnCasa','tcasa.nombre as TipoCasa','vivienda.residencia as ResidenciaMientrasEstudia','vivienda.pagoMensual as Renta_x_Mes','vivienda.calle as Calle','vivienda.numExterior as NumeroExterior','vivienda.numInterior as NumeroInterior','vivienda.colonia as Colonia','vivienda.codigoPostal as CodigoPostal','vivienda.tiempo as TiempoEnLlegarEcuela','transporte.nombre as MedioTransporte','vivienda.viajeMensual as ViajeMensualForaneo','vivienda.transporte as TransporteForaneo','vivienda.gastoMensual as GastoMensualForaneo','gasto.ingresoMensual as IngresoMensualFamilia','gasto.gastoMensual as GastoMensual','gasto.noIntegrantes as numIntegrantesEnFamilia','gasto.apoyo as ApoyanEnFamilia','gasto.trabajo as Trabajas','gasto.dependencia as Dependencia','personales.enfermedades as Enfermedades')
                        ->where('usuario.tipo','=',2)
                        ->OrderBy('carrera.nombre')      
                        ->get();

                        $users = json_decode(json_encode($users),true);
        
                        $sheet->cells('A1:AO1', function($cells) 
                        {
                        /*modifica fila*/
            
                        $cells->setBackground('#8A0829');
                        $cells->setFontColor('#ffffff');

                        });
             
              $sheet->fromArray($users);
            });
          })->export('xls');
    }
 
 /*SELECT usuario.apellidoPaterno as APaterno , usuario.apellidoMaterno as AMaterno, usuario.nombre as Nombre, usuario.boleta as Boleta,  usuario.edad as Edad, usuario.semestre as Semestre, usuario.grupo as Grupo, carrera.nombre as Carrera , beca.nombre as Beca, antecedentes.licenciatura as Licenciatura, antecedentes.historiaAC as HistoriaAcademica, antecedentes.promActual as Promedio, municipio.nombre as municipio , estado.nombre as Estado, vivienda.habitantes as VivenEnCasa, vivienda.habitaciones as Habitaciones, tcasa.nombre as TipoCasa, vivienda.residencia as Recidencia, vivienda.calle as Calle, vivienda.numExterior as NumeroExterior, vivienda.numInterior as NumeroInterior, vivienda.colonia as Colonia, vivienda.codigoPostal as CodigoPostal,vivienda.viajeMensual as ViajeMensual ,transporte.nombre as MedioTransporte , vivienda.tiempo as TiempoEnLlegarEcuela, vivienda.transporte as transporte , vivienda.gastoMensual as GastoMensual, gasto.noIntegrantes as numIntegrantes, gasto.gastoMensual as GastoMensual, gasto.ingresoMensual as IngresoMensual, gasto.apoyo as ApoyanEnFamilia, gasto.trabajo as Trabajas, gasto.dependencia as Dependencia, personales.enfermedades as Enfermedades, personales.nomTutor as NombreTutor, personales.telTutor as TelefonoTutor, personales.telCasa as TelefonoCasa, personales.telCelular as TelefonoCelular
FROM usuario 
INNER JOIN vivienda ON vivienda.usuario_id = usuario.id
INNER JOIN carrera ON carrera.id = usuario.carrera_id
INNER JOIN estado on estado.id = vivienda.estado_id
INNER JOIN municipio ON municipio.id = vivienda.municipio_id
INNER JOIN tcasa on tcasa.id = vivienda.tipoCasa_id
INNER JOIN transporte on transporte.id = vivienda.transporte_id
INNER JOIN personales on personales.usuario_id = usuario.id
INNER JOIN antecedentes on antecedentes.usuario_id = usuario.id
INNER JOIN beca on beca.id = antecedentes.beca_id
INNER JOIN gasto on gasto.usuario_id = usuario.id
WHERE usuario.tipo=2
ORDER BY carrera.nombre*/   
   
}