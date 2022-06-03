<?php

namespace App\Http\Controllers\Backend\Accounts\Settings;

use App\Http\Controllers\Controller;
use App\Models\ProductServiceUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductServiceUnitController extends Controller
{

    public function index()
    {
        $data['allData'] = ProductServiceUnit::all();
        return view('backend.accounts.settings.product_service_unit.view_unit', $data);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'unit_name' => 'required|string|max:255|unique:product_service_units,name',
            ],
            [
                'unit_name.required' => 'The Unit Name Is Required',
            ]
        );

        $data = new ProductServiceUnit();
        $data->name = $request->unit_name;
        $data->save();

        $notification = array(
            'message' => 'Unit Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('product_service_unit.view')->with($notification);
    }

    public function destroy($id)
    {
        $unit = ProductServiceUnit::find($id);
        $unit->delete();

        $notification = array(
            'message' => 'Unit Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->route('product_service_unit.view')->with($notification);
    }

    function fetch(Request $request)
    {
        $sel = DB::table("product_service_units")->find($request->id);
        echo json_encode($sel);
    }

    function update(Request $request)
    {
        $this->validate(
            $request,
            [
                'unit_nameEdit' => 'required|max:255',
            ],
            [
                'unit_nameEdit.required' => 'The Unit Name Is Required',
            ]
        );
        $arr["name"] = $request->unit_nameEdit;
        $upd = DB::table("product_service_units")->where("id", $request->idunits)->update($arr);
        if ($upd) {
            $res["status"] = 1;
            $res["title"] = "Updated";
            $res["msg"] = "Unit updated successfully ";
        } else {
            $res["status"] = 0;
            $res["msg"] = "Unable to update Unit";
        }
        echo json_encode($res);
    }

}
