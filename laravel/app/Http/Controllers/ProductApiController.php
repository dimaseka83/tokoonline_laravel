<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return response()->json(['message' => 'Success', 'data'=> $products]);
    }
    public function show($id)
    {
        $product = Products::find($id);
        return response()->json(['message'=>'Success','data'=> $product]);
    }
    public function store(Request $request)
    {
        $product = Products::create($request->all());
        return response()->json(['message' => 'Data has been inserted successfully', 'data' => $product]);
    }
    public function update(Request $request, $id)
    {
        $product = Products::find($id);
        $product->update($request->all());
        return response()->json(['message' => 'Update data has been successfully', 'data' => $product]);
    }
    public function destroy($id)
    {
        $product = Products::find($id);
        $product->delete();
        return response()->json(['message' => 'Update data has been successfully', 'data' => null]);
    }
}
