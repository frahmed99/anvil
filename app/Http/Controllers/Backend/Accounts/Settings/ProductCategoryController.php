<?php

namespace App\Http\Controllers\Backend\Accounts\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductServiceCategory;


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
        $data = new ProductServiceCategory();
        $data->name = $request->category_name;
        $data->type = $request->category_select;
        $data->color = $request->category_color;
        $data->save();

        $notification = array(
            'message' => 'Category Inserted Successfully',
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

        $id = $data->input('id');
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
            return redirect()->route('product_service_category.view')->with($notification);

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
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->route('product_service_category.view')->with($notification);
    }
}
