<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubCategory\SubCategoryCreateRequest;
use App\Models\MainCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    public function index(){
        $subCategory=SubCategory::latest()->get();
        $mainCategory=MainCategory::latest()->get();
        return view('admin.sub_category.sub_category',compact('subCategory','mainCategory'));
    }

    public function store(SubCategoryCreateRequest $request){
        try {
            $subCategory=DB::transaction(function() use($request){
                $subCategory=SubCategory::create([
                    'sub_category'=>$request->sub_category,
                    'main_category_id'=>$request->main_category_id,
                ]);
                return $subCategory;
            });
            if ($subCategory) {
                return back()->with('success', 'Sub-Category created Successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
