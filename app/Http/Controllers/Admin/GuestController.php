<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\GuestDataTable;
use App\Http\Controllers\Controller;
use App\Models\GuestMessage;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(GuestDataTable $dataTable)
    {
        return $dataTable->render('be.admin.master.guest.index', []);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('be.admin.master.guest.form', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

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
