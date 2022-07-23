<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use Illuminate\Routing\Controller;

class ProdukController extends Controller
{

    public function store(Request $request)
    {
            $this->validate($request, [
                'item' => 'max:255',
                'qty' => 'max:15',
                'harga_satuan' => 'max:15',
            ]);

            $input = $request->all();

            try
            {
                //code...
                $user = Produk::create($input);
            }
            catch (\Throwable $th)
            {
                return response()->json(['error' => $th->getMessage()], 500);
            }

            return response()->json([
                'message' => 'Data Produk Berhasil Disimpan.'
            ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::find($id);

            if($produk)
            {
                return response()->json($produk);
            }

            return response()->json([
                'message' => 'Data Produk Tidak Ditemukan.'
            ], 422);
    }
}
