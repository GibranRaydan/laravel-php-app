<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::latest()->paginate(7);

        return view('brands.index', compact('brands'))
            ->with('i', (request()->input('page', 1) - 1) * 7);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'reference' => 'required'
        ]);

        if (Brand::where('reference', $request['reference'])->exists()) {
            return response()->json([
                'message' => 'reference already exist.'
            ], 404);
        };

        Brand::create($request->all());

        return redirect()->route('brands.index')
            ->with('success', 'Brand created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('brands.edit', compact('brand'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'required',
            'reference' => 'required'
        ]);


        $brand->update($request->all());
        $brand->touch();

        return redirect()->route('brands.index')
            ->with('success', 'Brand updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        if (Product::where('brand_id', $brand['id'])->exists()) {
            return response()->json([
                'message' => 'cannot delete brand with products.'
            ], 404);
        };        $brand->delete();

        return redirect()->route('brands.index')
            ->with('success', 'Brand deleted successfully');
    }
}
