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
            return response()->json($data, 200);
        } catch (\Throwable $th) {

            return response()->json(['error' => $th->getMessage(), 500]);
        }
    }

    public function create(Request $request){

        try{
            $data['codigo']=$request['codigo'];
            $data['descripcion']=$request['descripcion'];
            $data['codigo_barras']=$request['codigo_barras'];
            $data['referencia']=$request['referencia'];
            $data['grupo']=$request['grupo'];
            $data['vr_ult_costo']=$request['vr_ult_costo'];
            $data['vr_precio']=$request['vr_precio'];
            $data['ult_compra']=$request['ult_compra'];
            $data['ult_venta']=$request['ult_venta'];
            $res=Productos::create($data);
            return response()->json($res,200);

        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage(),500]) ;
    }

}
}
