<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use App\Models\Product;
use DB,Validator;
use Image;
class ProductController extends Controller
{
    //
    public function HomePage()
    {
        $product = Product::count();
        $active = Product::where('status',1)->count();
        $inactive = Product::where('status',0)->count();
        return Inertia::render('Home',[
            "product"=> $product,
            "active"=> $active,
            "inactive"=> $inactive
        ]);
    }

   
    public function Products()
    {
        $products = Product::paginate(5);
        $total = Product::count();
        return Inertia::render('product/ProductPage',[
            'products' =>$products,
            'total' =>$total,
        ]);
      
    }

    public function ProductCreeate()
    {
        return Inertia::render('product/CreatePage');
    }

    public function ProductStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'status' => 'required',
            'image' => 'required|image',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('images/'),$filename);
        }
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->qty = $request->input('qty');
        $product->image = "images/".$filename;
        $product->status = $request->input('status');
        $product->save();
        return redirect()->route('Products');
    }

    public function ProductUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'qty' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $product = Product::find($request->id);
        $img = DB::table('products')->where('id',$request->id)->first();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->qty = $request->input('qty');
        $product->status = $request->input('status');
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('images/'),$filename);   
            $url = "images/".$filename;   
            @unlink(public_path($img->image));
        }else{
            $url =  $img->image;
        }
        $product->image = $url;
        $product->save();
        return redirect()->route('Products');
    }

    public function ProductDelete($id)
    {
        $img = DB::table('products')->where('id',$id)->first();
        if ($img->image) {
            @unlink(public_path($img->image));
        }
        DB::table('products')->where('id',$id)->delete();
        return redirect()->route('Products');
    }

    public function ProductEdit($id)
    {
        $product = DB::table('products')->where('id',$id)->first();
        return Inertia::render('product/EditPage',[
            'product' =>$product,
        ]);
    }





    public function ProductLoadLit(Request $request)
    {
        
        // Query the products based on the requested page
        $productslist = Product::paginate(5);

        // Pass the products data to the view using Inertia
        return Inertia::render('ProductPage', [
            'productslist' => $products,
        ]);
    }





}
