<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\GruposProductos;
use Illuminate\Http\Request;

class GruposProductosController extends Controller
{
    public function get()
        {
            try {

                $data = GruposProductos::get();
                return response()->json($data, 200);
            } catch (\Throwable $th) {

                return response()->json(['error' => $th->getMessage(), 500]);
            }
        }

        public function create(Request $request)
        {

            try {
                $data['codigo'] = $request['codigo'];
                $data['descripcion'] = $request['descripcion'];
                $res = GruposProductos::create($data);
                return response()->json($res, 200);
            } catch (\Throwable $th) {
                return response()->json(['error' => $th->getMessage(), 500]);
            }
        }

        public function getById($id)
        {
            try {

                $data = GruposProductos::find($id);
                return response()->json($data, 200);
            } catch (\Throwable $th) {
                return response()->json(['error' => $th->getMessage(), 500]);
            }
        }

        public function update(Request $request, $id)
        {
            try {
                $data['codigo'] = $request['codigo'];
                $data['descripcion'] = $request['descripcion'];
                GruposProductos::find($id)->update($data);
                $res = GruposProductos::find($id);
                return response()->json($res, 200);
            } catch (\Throwable $th) {
                return response()->json(['error' => $th->getMessage(), 500]);
            }
        }
        public function delete($id)
        {
            try {
                $res = GruposProductos::find($id)->delete();
                return response()->json(['Registro Eliminado' => $res], 200);
            } catch (\Throwable $th) {
                return response()->json(['error' => $th->getMessage(), 500]);
            }
        }

}
