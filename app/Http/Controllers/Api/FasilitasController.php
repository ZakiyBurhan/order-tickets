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
        $fasilitas = Fasilitas::latest()->paginate(5);

        return new FasilitasResource(true, 'List Data Fasilitas', $fasilitas);
    } 

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5000',
            'kategori' => 'required'
        ]);

        // validasi gagal
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // upload image
        $image = $request->file('image');
        $image->storeAs('public/fasilitas', $image->hashName());

        // create fasilitas
        $fasilitas = Fasilitas::create([
            'image'     => $image->hashName(),
            'nama'      => $request->nama,
            'kategori'  => $request->kategori,
        ]);

        return new FasilitasResource(true, 'Data Fasilitas Berhasil Ditambahkan!', $fasilitas);
    }

    public function show(Fasilitas $fasilitas)
    {
        return new FasilitasResource(true, 'Data Fasilitas Ditemukan!', $fasilitas);
    }

    public function update(Request $request, Fasilitas $fasilitas)
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

        //check if image is not empty
        if ($request->hasFile('image')) {

            //upload image
            $image = $request->file('image');
            $image->storeAs('public/fasilitas', $image->hashName());

            //delete old image
            Storage::delete('public/fsailitas/'.$fasilitas->image);

            //update post with new image
            $fasilitas->update([
                'image'      => $image->hashName(),
                'nama'       => $request->nama,
                'kategori'   => $request->kategori,
            ]);

        } else {

            //update post without image
            $fasilitas->update([
                'nama'       => $request->nama,
                'kategori'   => $request->kategori,
            ]);
        }

        //return response
        return new FasilitasResource(true, 'Data Fasilitas Berhasil Diubah!', $fasilitas);
    }

    public function destroy(Fasilitas $fasilitas)
    {
        //delete image
        Storage::delete('public/fasilitas/'.$fasilitas->image);

        //delete post
        $fasilitas->delete();

        //return response
        return new FasilitasResource(true, 'Data Fasilitas Berhasil Dihapus!', null);
    }
}
