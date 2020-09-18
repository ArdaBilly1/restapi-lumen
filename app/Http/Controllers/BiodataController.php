<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodataController extends Controller
{
    public function index()
    {
        $biodata = Biodata::all();
        return response()->json($biodata);

    }
    public function create()
    {
        
    }

    public function update($id, Request $request)
    {
       
   
          $biodata = Biodata::find($id);
        
          $biodata->update($request->all());
   
          $msg = [
              'success' => true,
              'message' => 'Data murid berhasil di ubah1'
          ];
   
          return response()->json($msg);
    }

    public function store(Request $request)
    {
        Biodata::create($request->all());
        $msg = [
            'success' => true,
            'message' => 'Biodata berhasil dibuat!'
        ];
        return response()->json($msg);
        // return 'Data berhasil Ditambahkan';
    }

    
    public function show($id)
    {
        $biodata = Biodata::find($id);
        return $biodata->toJson();
    }



    public function delete($id)
    {
        $biodata = Biodata::find($id);
        // return 'data dengan id '.$id.' berhasil dihapus dihapus';
        if(!empty($biodata)){
            $biodata->delete();
            $msg = [
                'success' => true,
                'message' => 'Biodata Berhasil Dihapus!'
            ];
            return response()->json($msg);
        } else {
            $msg = [
                'success' => false,
                'message' => 'Biodata gagal dihapus!'
            ];
            return response()->json($msg);
        }
    }
}
