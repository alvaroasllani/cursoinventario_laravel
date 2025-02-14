<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function categoria()
    {
        return view('categoria.categoria_index');
    }

    public function producto()
    {
        return view('producto.producto_index');
    }
}
