<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function postProduct(Request $request)
    {
        // dd($request->description);
        $request->validate([
            'name' => 'required|unique:products',
            'price' => 'required',
            'quantity' => 'required',
            'description'=>'required'
        ]);
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success_msg','successfully product uploaded');
    }
    public function deleteProduct(Request $request, $product_id)
    {
        $productId = $product_id;
        $product = Product::where('id',$productId)->first();
         // Check if the product exists
        if ($product) {
            $product->delete();
            return redirect()->back()->with('success_msg', 'Product deleted successfully.');
        } 
    }
    public function editProduct(Request $request, $product_id){
        $product = Product::where('id',$product_id)->first();
        return view('admin.edit_product')->with('product', $product);
    }
    public function postEditProduct(Request $request, $product_id)
    {
        $productId = $product_id;
        $product = Product::where('id',$productId)->update([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'description' => $request->description,
        ]);
        
        if ($product) {
            return redirect()->back()->with('success_msg', 'Product updated successfully.');
        } 
    }
}
