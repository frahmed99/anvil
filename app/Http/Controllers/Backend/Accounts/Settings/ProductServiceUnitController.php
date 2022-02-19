<?php

namespace App\Http\Controllers\Backend\Accounts\Settings;

use App\Http\Controllers\Controller;
use App\Models\ProductServiceUnit;
use Illuminate\Http\Request;

class ProductServiceUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = ProductServiceUnit::all();
        return view('backend.accounts.settings.product_service_unit.view_unit', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ProductServiceUnit();
        $data->name = $request->unit_name;
        $data->save();

        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('backend.accounts.settings.product_service_unit.view_unit')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductServiceUnit  $productServiceUnit
     * @return \Illuminate\Http\Response
     */
    public function show(ProductServiceUnit $productServiceUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductServiceUnit  $productServiceUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductServiceUnit $productServiceUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductServiceUnit  $productServiceUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductServiceUnit $productServiceUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductServiceUnit  $productServiceUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit = ProductServiceUnit::find($id);
        $unit->delete();

        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->route('backend.accounts.settings.product_service_unit.view_unit')->with($notification);    }
}
