<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Resources\productResource;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return new productResource($products, 'Success', 'Daftar Buku');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'judul_buku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'kategori' => 'required',
        ]);

        if ($validator->fails()) {
            return new productResource(null, 'Gagal Menambahkan Buku Baru', $validator->errors());
        }

        $products = Product::create($request->all());
        return new productResource($products, 'Berhasil', 'Data buku baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Product::find($id);
        if ($products) {
            return new productResource($products, 'Success', 'Buku ditemukan');
        } else {
            return new productResource(null, 'Failed', 'Buku tidak ditemukan');
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'judul_buku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'kategori' => 'required',
        ]);

        if ($validator->fails()) {
            return new productResource(null, 'Failed', $validator->errors());
        }

        $products = Product::find($id);
        if (!$products) {
            return new productResource(null, 'Failed', 'Buku tidak dapat diperbarui');
        }

        $products->update($request->all());

        return new productResource($products, 'Success', 'Data Buku diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Product::find($id);
        if (!$products) {
            return new productResource(null, 'Failed', 'Buku tidak ditemukan');
        }

        $products->delete();

        return new productResource(null, 'Success', 'Data Buku berhasil dihapus');
    }
}
