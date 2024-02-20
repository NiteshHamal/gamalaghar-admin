<?php

namespace App\Http\Controllers;

use App\Http\Requests\Province\ProvinceStoreRequest;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProvinceController extends Controller
{
    public function index(){

        $province=Province::all();
        return view('admin.setting.province', compact('province'));
    }

    public function store(ProvinceStoreRequest $request){
        try {
            $province=DB::transaction(function() use($request){
                $province=Province::create([
                    'province'=>$request->province,
                ]);
                return $province;
            });
            if ($province) {
                return back()->with('success', 'Province Added Successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
