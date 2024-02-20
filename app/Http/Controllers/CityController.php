<?php

namespace App\Http\Controllers;

use App\Http\Requests\City\CityStoreRequest;
use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function index(){
        $province=Province::all();
        return view('admin.setting.city.city', compact('province'));
    }

    public function store(CityStoreRequest $request){
        try {
            $city= DB::transaction(function () use($request) {
                $city=City::create([
                    'city'=>$request->city,
                    'province_id'=>$request->province_id,
                ]);
                return $city;
            });
            if ($city) {
                return back()->with('success', 'City Created Successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
