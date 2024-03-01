<?php

namespace App\Http\Controllers;

use App\Http\Requests\Faq\FaqStoreRequest;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    public function index(){
        return view('admin.faq.faq');
    }

    public function store(FaqStoreRequest $request){
        try {
            $faq= DB::transaction(function() use($request){
                $faq= Faq::create([
                    'question'=>$request->question,
                    'answer'=>$request->answer,
                ]);
                return $faq;
            });
            if ($faq) {
                return back()->with('success', 'FAQ created Successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
