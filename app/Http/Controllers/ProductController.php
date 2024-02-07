<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\ProductCreateRequest;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\ProductSizePrice;
use App\Models\Size;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $Category = MainCategory::with('subCategories')->latest()->get();
        $size = Size::latest()->get();

        return view('admin.product.add_product', compact('Category', 'size'));
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
    public function store(ProductCreateRequest $request)
    {
        try {
            $product = DB::transaction(function () use ($request) {
                $product = Product::create([
                    'user_id' => auth()->user()->id,
                    'product_name' => $request->product_name,
                    'sub_category_id' => $request->sub_category_id,
                    'short_description' => $request->short_description,
                    'description' => $request->description,
                    'product_code' => $request->product_code

                ]);
                if ($request->product_image) {
                    $product->addMedia($request->product_image)->toMediaCollection('product_image');
                }
                return $product;
            });

            $productsizeprice = DB::transaction(function () use ($request, $product) {
                $productsizeprice = ProductSizePrice::create([
                    'size_id' => $request->size_id,
                    'product_id' => $product->id,
                    'price' => $request->price,
                    'product_stock' => $request->product_stock,
                ]);
                return $productsizeprice;
            });
            if ($product && $productsizeprice) {
                return back()->with('success', 'Product Created Successfully!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
