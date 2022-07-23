<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Routing\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nama_pelanggan' => 'max:255',
            'tanggal' => 'max:200',
            'jam' => 'max:175',
            'total' => 'max:15',
            'bayar_tunai' => 'max:15',
            'kembali' => 'max:15'
        ]);

        $input = $request->all();

        try
        {
            //code...
            $order = Order::create($input);
        }
        catch (\Throwable $th)
        {
            return response()->json(['error' => $th->getMessage()], 500);
        }

        return response()->json([
            'message' => 'Data Order Berhasil Disimpan.'
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
        //
    }
}
