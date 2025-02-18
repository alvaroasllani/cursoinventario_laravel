<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Models\Producto;

use DB;
use Illuminate\Support\Facades\Redirect;

class ControllerSistema extends Controller
{
    public function ejemplo1()
    {
        $n1 = 20;
        $n2 = 25;
        $s = ($n1 + $n2);
        echo "Suma: " . $s;
    }
    public function ejemplo2()
    {
        $n1 = 20;
        $n2 = 25;
        if ($n1 > $n2) {
            $r = $n1;
        } else {
            $r = $n2;
        }
        echo "Nro. es: " . $r;
    }

    #Modulo Categoria
    public function categoria()
    {
        //SELECT * FROM categorias WHERE ca_estado != 'ELIMINADO'
        $categoria = DB::table('categorias')->where('ca_estado', '!=', 'ELIMINADO')->get();
        /* dd($categoria);
        die; */
        return view('categoria.categoria_index', compact('categoria'));
    }
    #--------------->

    public function guardarNuevaCategoria(Request $request)
    {
        /* echo mb_strtoupper($request->post('nombre'), 'utf-8');
        exit; */

        $obj = new Categoria;
        $obj->ca_nombre = mb_strtoupper($request->post('nombre'), 'utf-8');
        $obj->save();
    }
    public function cambiarEstadoCat(Request $request)
    {
        $id = $request->post('id');
        $ca_estado = $request->post('ca_estado');

        if ($ca_estado == 'ACTIVO') {
            $estado = 'INACTIVO';
        } else {
            $estado = 'ACTIVO';
        }

        $obj = Categoria::find($id);
        $obj->ca_estado = $estado;
        $obj->save();
    }
    public function editarCategoria(Request $request)
    {
        $obj = DB::table('categorias')->where('id', '=', $request->post('id'))->first();
        return view('categoria.editarCategoria_form', compact('obj'));
    }

    #Modulo producto
    public function producto()
    {
        return view('producto.producto_index');
    }
    #--------------->
}
