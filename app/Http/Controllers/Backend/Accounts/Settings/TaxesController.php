<?php

namespace App\Http\Controllers\Backend\Accounts\Settings;

use App\Models\Taxes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
            'category_name' => 'required|string|max:255|unique:taxes,name',
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Taxes  $taxes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data)
    {
       $this->validate($data, [
            'edit_tax_name' => 'required|max:255',
            'edit_tax_rate' => 'required|numeric|between:0,100'
        ]);

        $arr["name"] = $data->edit_tax_name;
        $arr["rate"] = $data->edit_tax_rate;
        $fire = DB::table("taxes")->where("id", $data->id)->update($arr);
        $notification = array(
            'message' => 'Tax Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('tax.view')->with($notification);
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
