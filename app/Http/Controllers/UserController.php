<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate($request, [
                'nama_pelanggan' => 'required|max:255',
                'email' => 'max:190',
                'no_handphone' => 'max:15',
                'nik' => 'max:16'
            ]);

            $input = $request->all();

            try
            {
                //code...
                $user = User::create($input);
            }
            catch (\Throwable $th)
            {
                return response()->json(['error' => $th->getMessage()], 500);
            }

            return response()->json([
                'message' => 'Data User Berhasil Disimpan.'
            ], 201);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_restful_api($id)
    {
        $user = User::find($id);

            if($user)
            {
                return response()->json($user);
            }

            return response()->json([
                'message' => 'Data User Tidak Ditemukan.'
            ], 422);
    }
}
