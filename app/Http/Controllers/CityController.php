<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        $province=Province::all();
        return view('admin.setting.city.city', compact('province'));
    }
}
