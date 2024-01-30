<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        $subCategory=SubCategory::latest()->get();
        return view('admin.sub_category.sub_category',compact('subCategory'));
    }
}