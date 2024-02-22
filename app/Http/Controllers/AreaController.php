<?php

namespace App\Http\Controllers;

use App\Http\Requests\Area\AreaStoreRequest;
use App\Models\Area;
use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function store(AreaStoreRequest $request)
    {
        try {
            $areas = DB::transaction(function () use ($request) {
                $areaNamesString = $request->input('areas')[0];
                $areaNames = explode(',', $areaNamesString);


                foreach ($areaNames as $areaName) {
                    $area = Area::create([
                        'area' => trim($areaName),
                        'city_id' => $request->city_id,
                    ]);
                    $areas[] = $area;
                }
                return $areas;
            });

            if (!empty($areas)) {
                return back()->with('success', 'Area Created Successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

}
