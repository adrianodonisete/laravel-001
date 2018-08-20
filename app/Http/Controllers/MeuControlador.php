<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function getNome() {
        return 'Jose da Silva';
    }


    public function getIdade() {
        return '20 anos';
    }

    public function multiplicar($num1, $num2) {
        return $num1 * $num2;
    }

    public function getNomeByID($id) {
        $nomes = ['joao', 'maria', 'josé'];

        $id = intval($id);
        if ($id >= 0 && $id < count($nomes)) {
            return $nomes[$id];
        }
        return 'nao existe';
    }

    //
}
