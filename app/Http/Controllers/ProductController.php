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

    public function viewProduct(Request $request)
    {

        $keyword = $request->query('keyword');

        $products = Product::with('media')->when($keyword, function ($query) use ($keyword) {
            $query->where('product_name', 'like', "%{$keyword}%")
                ->orWhere('product_code', 'like', "%{$keyword}%");
        })->latest()->paginate(10);




        return view('admin.product.view_product', compact('products'));
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
                    'discount' => $request->discount,
                    'product_code' => $request->product_code

                ]);

                $size = $request->input('size');
                $price = $request->input('price');
                $product_stock = $request->input('product_stock');

                // Loop through the arrays and save each product
                for (
                    $i = 0;
                    $i < count($size);
                    $i++
                ) {
                    $productSizePrice = new ProductSizePrice();
                    $productSizePrice->size_id = $size[$i];
                    $productSizePrice->product_id = $product->id;
                    $productSizePrice->price = $price[$i];
                    $productSizePrice->product_stock = $product_stock[$i];
                    $productSizePrice->save();
                }

                if ($request->product_image) {
                    $product->addMedia($request->product_image)->toMediaCollection('product_image');
                }
                return $product;
            });


            if ($product) {
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
