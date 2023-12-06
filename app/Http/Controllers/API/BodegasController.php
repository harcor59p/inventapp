<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bodegas;

class BodegasController extends Controller
{

        public function get()
        {
            try {

                $data = Bodegas::get();
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
                $res = Bodegas::create($data);
                return response()->json($res, 200);
            } catch (\Throwable $th) {
                return response()->json(['error' => $th->getMessage(), 500]);
            }
        }

        public function getById($id)
        {
            try {

                $data = Bodegas::find($id);
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
                Bodegas::find($id)->update($data);
                $res = Bodegas::find($id);
                return response()->json($res, 200);
            } catch (\Throwable $th) {
                return response()->json(['error' => $th->getMessage(), 500]);
            }
        }
        public function delete($id)
        {
            try {
                $res = Bodegas::find($id)->delete();
                return response()->json(['Registro Eliminado' => $res], 200);
            } catch (\Throwable $th) {
                return response()->json(['error' => $th->getMessage(), 500]);
            }
        }


}
