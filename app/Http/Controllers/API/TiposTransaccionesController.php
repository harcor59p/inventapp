<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TiposTransacciones;
use Illuminate\Http\Request;

class TiposTransaccionesController extends Controller
{
    public function get()
        {
            try {

                $data = TiposTransacciones::get();
                return response()->json($data, 200);
            } catch (\Throwable $th) {

                return response()->json(['error' => $th->getMessage(), 500]);
            }
        }

        public function create(Request $request)
        {

            try {
                $data['tipo'] = $request['tipo'];
                $data['tipo_movimiento'] = $request['tipo_movimiento'];
                $data['descripcion'] = $request['descripcion'];
                $res = TiposTransacciones::create($data);
                return response()->json($res, 200);
            } catch (\Throwable $th) {
                return response()->json(['error' => $th->getMessage(), 500]);
            }
        }

        public function getById($id)
        {
            try {

                $data = TiposTransacciones::find($id);
                return response()->json($data, 200);
            } catch (\Throwable $th) {
                return response()->json(['error' => $th->getMessage(), 500]);
            }
        }

        public function update(Request $request, $id)
        {
            try {
                $data['tipo'] = $request['tipo'];
                $data['tipo_movimiento'] = $request['tipo_movimiento'];
                $data['descripcion'] = $request['descripcion'];
                TiposTransacciones::find($id)->update($data);
                $res = TiposTransacciones::find($id);
                return response()->json($res, 200);
            } catch (\Throwable $th) {
                return response()->json(['error' => $th->getMessage(), 500]);
            }
        }
        public function delete($id)
        {
            try {
                $res = TiposTransacciones::find($id)->delete();
                return response()->json(['Registro Eliminado' => $res], 200);
            } catch (\Throwable $th) {
                return response()->json(['error' => $th->getMessage(), 500]);
            }
        }

}
