<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadFile($file){
        $pathFile = '';
        try {
            switch ($file) {
                case 'calidad':
                        $pathFile = public_path().'\files\pdf\calidad_de_la_energía.pdf';
                    break;
                case 'clavijas':
                        $pathFile = public_path().'\files\pdf\catalogo_clavijasybases_marca_ide_2018.pdf';
                    break;
                case 'finder':
                        $pathFile = public_path().'\files\pdf\catalogo_finder.pdf';
                    break;
                case 'moeller':
                        $pathFile = public_path().'\files\pdf\catalogo_marca_moeller_ohm_carta.pdf';
                    break;
                case 'componentes':
                        $pathFile = public_path().'\files\pdf\componentes.pdf';
                    break;
                case 'energia':
                        $pathFile = public_path().'\files\pdf\control_y_distribucion_de_la_energía.pdf';
                    break;
                case 'vitae':
                        $pathFile = public_path().'\files\pdf\CURRICULUM_VITAE_TERMOMAGNETICOS.pdf';
                    break;
                case 'proyectos':
                        $pathFile = public_path().'\files\pdf\PROYECTOS_TERMOMAGNETICOS.pdf';
                    break;
                
                default:
                    return back()->with(array(
                        'type'    => 'red',
                        'message' => array(
                            'title' => 'Cuidado',
                            'text'  => 'Archivo no encontrado'
                        )
                    ));
                    break;
            }
        } catch (\Throwable $th) {
            return back()->with(array(
                'type'    => 'red',
                'message' => array(
                    'title' => 'Cuidado',
                    'text'  => 'Archivo no encontrado'
                )
            ));
        }
        return response()->download($pathFile);
    }
}
