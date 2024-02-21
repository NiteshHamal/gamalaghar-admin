<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $province = Province::all();
        return view('admin.setting.area.area', compact('province'));
    }

    public function getCities($provinceId)
    {
        $cities = City::where('province_id', $provinceId)->get();
        return response()->json($cities);
    }
}
