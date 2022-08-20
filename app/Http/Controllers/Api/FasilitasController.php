<?php

namespace App\Http\Controllers\Api;

use App\Models\Fasilitas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\FasilitasResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitass = Fasilitas::latest()->paginate(5);

        return new FasilitasResource(true, 'List Data Fasilitas', $fasilitass);
    } 

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'kategori' => 'required'
        ]);

        // validasi gagal
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // create fasilitas
        $fasilitas = Fasilitas::create([
            'nama'      => $request->nama,
            'kategori'  => $request->kategori,
        ]);

        return new FasilitasResource(true, 'Data Fasilitas Berhasil Ditambahkan!', $fasilitas);
    }

    public function show(Fasilitas $fasilitas, $id)
    {
        $fasilitas = Fasilitas::find($id);
        return new FasilitasResource(true, 'Data Fasilitas Berhasil Ditambahkan!', $fasilitas);
    }

    public function update(Request $request, Fasilitas $fasilitas, $id)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nama'       => 'required',
            'kategori'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        
        //update post without image
        $fasilitas->update([
            'nama'       => $request->nama,
            'kategori'   => $request->kategori,
        ]);

        $fasilitas = Fasilitas::find($id);
        //return response
        return new FasilitasResource(true, 'Data Fasilitas Berhasil Diubah!', $fasilitas);
    }

    public function destroy(Fasilitas $fasilitas)
    {
        //delete post
        $fasilitas->delete();

        //return response
        return new FasilitasResource(true, 'Data Fasilitas Berhasil Dihapus!', null);
    }
}
