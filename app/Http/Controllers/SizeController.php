<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SizeController extends Controller
{
    public function index(){
        return view('admin.size.size');
    }

    public function store(Request $request){
        try {
            $size=DB::transaction(function() use($request){
                $size=Size::create([
                    'size'=>$request->size,
                ]);
                return $size;
            });
            if ($size) {
                return back()->with('success', 'Size Created Successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
