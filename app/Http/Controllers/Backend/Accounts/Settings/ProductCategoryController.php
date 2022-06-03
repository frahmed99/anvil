<?php

namespace App\Http\Controllers\Backend\Accounts\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductServiceCategory;
use Illuminate\Support\Facades\DB;


class ProductCategoryController extends Controller
{

    public function index()
    {
        $data['allData'] = ProductServiceCategory::all();
        return view('backend.accounts.settings.product_service_categories.view_category',  $data);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'category_name' => 'required|string|max:255|unique:product_service_categories,name',
                'category_select' => 'required',
                'category_color' => 'required',
            ],
            [
                'category_name.required' => 'The Category Name Is Required',
                'category_name.unique' => 'Category Already Exists',
                'category_select.required' => 'Category Type Is Required',
                'category_color.required' => 'Color Is Required',
            ]
        );

        $data = new ProductServiceCategory();
        $data->name = $request->category_name;
        $data->type = $request->category_select;
        $data->color = $request->category_color;
        $data->save();
        $notification = array(
            'message' => 'Category Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('product_service_category.view')->with($notification);
    }

    public function destroy($id)
    {
        $category = ProductServiceCategory::find($id);
        $category->delete();

        $notification = array(
            'message' => 'Category Deleted!!!',
            'alert-type' => 'warning'
        );

        return redirect()->route('product_service_category.view')->with($notification);
    }

    function fetch(Request $request)
    {
        $sel = DB::table("product_service_categories")->find($request->id);
        echo json_encode($sel);
    }

    function update(Request $request)
    {
        $this->validate(
            $request,
            [
                'category_nameEdit' => 'required|string|max:255',
                'category_selectEdit' => 'required',
                'category_colorEdit' => 'required'
            ],
            [
                'category_nameEdit.required' => 'The Category Name Is Required',
                'category_selectEdit.required' => 'Category Type Is Required',
                'category_colorEdit.required' => 'Color Is Required',
            ]
        );
        $arr["name"] = $request->category_nameEdit;
        $arr["type"] = $request->category_selectEdit;
        $arr["color"] = $request->category_colorEdit;
        $upd = DB::table("product_service_categories")->where("id", $request->idcategories)->update($arr);
        if ($upd) {
            $res["status"] = 1;
            $res["title"] = "Updated";
            $res["msg"] = "Category updated successfully ";
        } else {
            $res["status"] = 0;
            $res["msg"] = "Unable to update Category";
        }
        echo json_encode($res);
    }
}
