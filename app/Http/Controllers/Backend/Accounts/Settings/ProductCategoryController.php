<?php

namespace App\Http\Controllers\Backend\Accounts\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductServiceCategory;
use Illuminate\Support\Facades\DB;


class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = ProductServiceCategory::all();
        return view('backend.accounts.settings.product_service_categories.view_category',  $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
            'category_name' => 'required|string|max:255|unique:product_service_categories,name',
            'category_select' => 'required',
            'category_color'=> 'required',
        ]);

        $data = new ProductServiceCategory();
        $data->name = $request->category_name;
        $data->type = $request->category_select;
        $data->color = $request->category_color;
        $data->save();
        $notification = array(
            'message' => 'Tax Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('product_service_category.view')->with($notification);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCategoryController  $productCategoryController
     * @return \Illuminate\Http\Response
     */

    public function update(Request $data)
    {
        $this->validate($data, [
            'edit_category_name' => 'required|max:255',
            'edit_category_select' => 'required',
            'edit_category_color' => 'required'
        ]);

        $arr["name"] = $data->edit_category_name;
        $arr["type"] = $data->edit_category_select;
        $arr["color"] = $data->edit_category_color;
        $fire = DB::table("product_service_categories")->where("id", $data->id)->update($arr);
        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('product_service_category.view')->with($notification);

        /* $id = $data->input('id');
        $category_name = $data->input('edit_category_name');
        $category_type = $data->input('edit_category_select');
        $category_color = $data->input('edit_category_color');
        $fire  = ProductServiceCategory::where('id', $id)
            ->update(
                [
                    'name' => $category_name,
                    'type' => $category_type,
                    'color' => $category_color
                ]
            );
            $notification = array(
                'message' => 'Category Inserted Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('product_service_category.view')->with($notification); */

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategoryController  $productCategoryController
     * @return \Illuminate\Http\Response
     */
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
}
