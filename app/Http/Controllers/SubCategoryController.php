<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubCategory\SubCategoryCreateRequest;
use App\Models\MainCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    public function index()
    {

        $mainCategory = MainCategory::latest()->get();
        
        $subCategory = SubCategory::join('main_categories', 'main_categories.id', '=', 'sub_categories.main_category_id')
            ->select('sub_categories.id', 'sub_categories.sub_category', 'main_categories.main_category')
            ->get();

        return view('admin.sub_category.sub_category', compact('mainCategory', 'subCategory'));
    }

    public function store(SubCategoryCreateRequest $request)
    {
        try {
            $subCategory = DB::transaction(function () use ($request) {
                $subCategory = SubCategory::create([
                    'sub_category' => $request->sub_category,
                    'main_category_id' => $request->main_category_id,
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