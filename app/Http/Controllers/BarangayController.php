<?php

namespace App\Http\Controllers;

use App\Models\AssrBarangay;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\DataTables\AssrBarangayDataTable;
use App\Http\Requests\StoreAssrBarangayRequest;

class BarangayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AssrBarangayDataTable $dataTable)
    {
        $title = 'Barangay setup';
        return $dataTable->render('administrationMenu.barangay.index', ['title' => $title]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Barangay Create';
        return view('administrationMenu.barangay.create', ['title' => $title]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssrBarangayRequest $request)
    {
        $assrbarangay = new AssrBarangay();
        $assrbarangay->name = $request->name;
        $assrbarangay->district = $request->district;
        $assrbarangay->code = $request->code;
        $assrbarangay->remarks = $request->remarks;
        $assrbarangay->save();
        return redirect()->route('barangay.index')->with('success', 'Barangay created successfully!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barangay = AssrBarangay::findOrFail($id);
        $title = 'Edit Barangay';
        return view('administrationMenu.barangay.edit', ['title' => $title, 'barangay' => $barangay]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAssrBarangayRequest $request, string $id)
    {
        $barangay = AssrBarangay::findOrFail($id);
        $barangay->name = $request->name;
        $barangay->district = $request->district;
        $barangay->code = $request->code;
        $barangay->remarks = $request->remarks;
        $barangay->save();
        return redirect()->route('barangay.index')->with('success', 'Barangay updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): Response
    {
        try {
            AssrBarangay::findOrFail($id)->delete();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong Please Try Again!'], 500);
        }
    }
}
