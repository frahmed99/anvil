<?php

namespace App\Http\Controllers\Backend\Accounts\Settings;

use App\Models\Taxes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

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

    public function store(Request $request)
    {
        $request->validate(
            [
                'tax_name' => 'required|string|max:255|unique:taxes,name',
                'tax_rate' => 'required|numeric|between:0,100',
            ],
            [
                'tax_name.required' => 'The Tax Name Is Required',
                'tax_name.unique' => 'Tax Already Exists',
                'tax_rate.numeric' => 'Tax Rate Must Be a Number in Percentage',
                'tax_rate.required' => 'Tax Value Is Required',
                'tax_rate.numeric' => 'Tax Value Must be and Integer',
                'tax_rate.between:0,100' => 'Tax Value Must Be Between 0 and 100',
            ]
        );

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

    function fetchTaxes(Request $request)
    {
        $sel = DB::table("Taxes")->find($request->id);
        echo json_encode($sel);
    }

    function updateTaxes(Request $request)
    {
        $this->validate(
            $request,
            [
                'tax_nameEdit' => 'required|max:255',
                'tax_rateEdit' => 'required|numeric|between:0,100'
            ],
            [
                'tax_nameEdit.required' => 'The Tax Name Is Required',
                'tax_nameEdit.unique' => 'Tax Already Exists',
                'tax_rateEdit.numeric' => 'Tax Rate Must Be a Number in Percentage',
                'tax_rateEdit.required' => 'Tax Value Is Required',
                'tax_rateEdit.between:0,100' => 'Tax Value Must Be Between 0 and 100',
            ]
        );
        $arr["name"] = $request->tax_nameEdit;
        $arr["rate"] = $request->tax_rateEdit;
        $upd = DB::table("taxes")->where("id", $request->idtaxes)->update($arr);
        if ($upd) {
            $res["status"] = 1;
            $res["title"] = "Updated";
            $res["msg"] = "Tax updated successfully ";
        } else {
            $res["status"] = 0;
            $res["msg"] = "Unable to update taxes";
        }
        echo json_encode($res);
    }
}
