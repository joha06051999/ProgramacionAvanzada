<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class clienteController extends BaseController
{
    public function all(Request $request){

    	$cliente = Cliente::all();

    	return response()->json($cliente, 200);

    }
}
