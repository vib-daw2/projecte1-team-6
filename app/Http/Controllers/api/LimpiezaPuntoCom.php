<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServeiController;
use App\Http\Controllers\TreballadorController;

class LimpiezaPuntoCom extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = Client::latest()->paginate(10);



        $response = [

            'success' => true,

            'message' => "Llistat planetes recuperat",

            'data' => $client,

        ];



        //return $response;

        return response()->json($response,200);

    }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
