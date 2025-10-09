<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($angka)
    {
        $hasil = $angka + 3;
        return view('product.index', compact('hasil'));
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
    public function show($value)
    {
        if (!is_numeric($value)) {
            $message = 'Parameter bukan angka';
            $type = 'warning';
            return view('ganjap', compact('message', 'type'));
        }

        $number = (int) $value;

        if ($number % 2 === 0) {
            $message = 'Nilai ini adalah genap';
            $type = 'success';
        } else {
            $message = 'Nilai ini adalah ganjil';
            $type = 'warning';
        }

        return view('ganjap', compact('message', 'type'));

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
