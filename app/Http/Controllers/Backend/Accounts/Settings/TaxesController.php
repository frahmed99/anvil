<?php

namespace App\Http\Controllers\Backend\Accounts\Settings;

use App\Http\Controllers\Controller;
use App\Models\Taxes;
use Illuminate\Support\Facades\Validator;
use Response;
use Illuminate\Http\Request;
use Auth;

class TaxesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = Taxes::all();
        return view('backend.accounts.settings.taxes.view_tax', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tax_name' => 'required|string|max:255|unique:taxes,name',
            'tax_rate' => 'required|numeric|between:0,100',
        ]);

        $data = new Taxes();
        $data->name = $request->tax_name;
        $data->rate = $request->tax_rate;
        $data->save();

        $notification = array(
            'message' => 'Tax Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('tax.view')->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Taxes  $taxes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editData = Taxes::find($id);
        return view('backend.accounts.settings.taxes.edit_tax', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Taxes  $taxes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data)
    {
        $validator = Validator::make($data->all(), [
            'edit_tax_name' => 'required|max:255',
            'edit_tax_rate' => 'required|numeric|between:0,100',
        ]);

        $input = $data->all();

        if ($validator->fails()) {
            return response::json(['errors' => $validator->errors()->all()]);
        } else {
            $id = $data->input('id');
            $tax_name = $data->input('edit_tax_name');
            $tax_type = $data->input('edit_tax_rate');
            $fire  = Taxes::where('id', $id)
                ->update(
                    [
                        'name' => $tax_name,
                        'rate' => $tax_type,
                    ]
                );
            $notification = array(
                'message' => 'Tax Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('tax.view')->with($notification);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Taxes  $taxes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tax = Taxes::find($id);
        $tax->delete();

        $notification = array(
            'message' => 'Tax Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->route('tax.view')->with($notification);
    }
}

