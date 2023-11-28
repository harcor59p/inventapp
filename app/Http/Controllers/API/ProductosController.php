<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productos;
use Route;

class ProductosController extends Controller
{
    public function get()
    {
        try {

            $data = Productos::get();
            //return redirect()->away('https://www.google.com');
            return response()->json($data, 200);
        } catch (\Throwable $th) {

            return response()->json(['error' => $th->getMessage(), 500]);
        }
    }
}
