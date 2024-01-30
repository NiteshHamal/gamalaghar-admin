<?php

namespace App\Http\Controllers;

use App\Http\Requests\MainCategory\MainCategoryCreateRequest;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainCategoryController extends Controller
{
    public function index()
    {
       return view('admin.main_category.main_category');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MainCategoryCreateRequest $request)
    {
        try {
            $category = DB::transaction(function () use ($request) {
                $category = MainCategory::create([
                    'main_category' => $request->main_category,
                ]);
                return $category;
            });
            if ($category) {
                return back()->with('success', 'Main Category Created Successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = MainCategory::find();
        return view(compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = MainCategory::find($id);
        if (is_null($category)) {
            return back()->with('error', 'Category not found!');
        }
        try {
            $category = DB::transaction(function () use ($request, $category) {
                $category->update([
                    'category' => $request->category,
                ]);
                return $category;
            });
            if ($category) {
                return back()->with('success', 'Category Updated Successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = MainCategory::find($id);
        if (is_null($category)) {
            return back()->with('error', 'Category not found!');
        }
        try {
            $category = DB::transaction(function () use ($category) {
                $category->delete();
                return $category;
            });
            if ($category) {
                return back()->with('success', 'Category Deleated Successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}