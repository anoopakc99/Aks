<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\subcategory;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    //Show Category
    public function index()
    {
        $data = category::all();
        
        return view ('product.addcategory',compact('data'));
    }

    //category Add
    public function create(Request $request)
    {


        // Create the new category
        $category = new category();
        $category->name = $request->input('name');

        $category->status =1;
        $category->save();
        return back()->with('success', 'Success! Category created');
   
    }

    //category Edit
    public function categoryedit($id)
    {
        $list = category::find($id);
        return view('product.editcategory', compact('list'));
    }

    //Category Update
    public function categoryupdate($id, Request $request)
    {
        $list = category::find($id);
        $list->name = $request->name;
        $list->status = $request->status;
        $list->save();

        return redirect('category')->with('msg', 'Games data  updated');
    }

     //category delete
     public function categorydelete($id)
     {
         $user = category::find($id);
 
         if ($user) {
             $user->delete();
             return back()->with('success', 'Success! Category Deleted');
             return redirect('category')->with('msg', 'data delete');
         } else {
             // user not found
         }
     }

    //Show Subcategory
    public function subcategory()
    {
        $data = category::all();
        $subcategory = subcategory::all();
        return view ('product.subcategory',compact('data','subcategory'));
    }


    //Add subcategory
    // public function addsubcategory(Request $request)
    // {


    //     // Create the new category
    //     $category = new subcategory();
    //     $category->category_name = $request->input('category_name');
    //     $category->subcategory_name = $request->input('subcategory_name');
    //     $category->status = 1;
    //     $category->save();
    //     return redirect('subcategory')->with('msg', " Added Sucessfully");
    // }

    //Edit Subcategory
    // public function editsubcategory($id)
    // {
    //     $data = category::all();
      
    //     $list = subcategory::find($id);

        
    //    return view('product.editsubcategory',compact('data','list'));
    // }

    //Subcategory Delete



   

    //Product
    public function product()
    {
        $dataa = Product::join('categories','categories.id','=','product.category')->join('subcategories','subcategories.id','=','product.subcategory')->get();
      
        // $data = category::all();
        $data = category::where('status', 1)->get();
        
        // $dataa = subcategory::all();
    
        return view ('product.product',compact('dataa','data'));
    }
    //Category fache
    public function getProduct($category_id)
    {
        
        $states = Subcategory::where('category_id', $category_id)->pluck('name', 'id');
        return response()->json($states);
    }

    //Product add
    public function productadd(Request $request)
    {
            $product = new Product();
            $product->category = $request->input('category');
            $product->subcategory = $request->input('subcategory');
            $product->productname = $request->input('productname');
 
            $product->shortdesc = $request->input('shortdesc');
            $product->title = $request->input('title');
            $product->heading = $request->input('heading');
            $product->description = $request->input('description');
            $product->Contenct = $request->input('Contenct');
            $product->pdf = $request->input('pdf');


        if ($request->hasfile('productimage')) {
            $file = $request->file('productimage');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads', $filename);
            $product->productimage = $filename;
        }

        if ($request->has('status')) {
            $product->status = 1;
        } else {
            $product->status = 0;
        }
            $product->save();
       
            return back()->with('success', 'Success! Prodect Added Succesfully ');

    }

    //Product Edit 
    public function productedit($id)
    {
     
        $list = Product::find($id);
        $data = category::where('status', 1)->get();
        return view('product.productedit',compact('list','data'));
    }

    //Product Update
    public function productupdate($id, Request $request){
        $list = Product::find($id);
        
        $list->category = $request->input('category');
        $list->subcategory = $request->input('subcategory');
        $list->productname = $request->input('productname');
       
        $list->shortdesc = $request->input('shortdesc');
        $list->title = $request->input('title');
        $list->heading = $request->input('heading');
        $list->description = $request->input('description');
        $list->Contenct = $request->input('Contenct');
    $list->pdf = $request->input('pdf');


    if ($request->hasfile('productimage')) {
        $destination = 'uploads/' . $list->productimage;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $file = $request->file('productimage');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $file->move('uploads', $filename);
        $list->productimage = $filename;
    }

    if ($request->has('status')) {
        $list->status = 1;
    } else {
        $list->status = 0;
    }
        $list->save();
   
        return redirect('product')->with('success', ' Prodect Updeted Succesfully ');

    }

    public function delete($id)
    {
        $user = product::find($id);
  
        if ($user) {
            $user->delete();
            return back()->with('success', 'Product Deleted Succssfully');
            return redirect('product')->with('msg', 'data delete');
        } else {
            // user not found
        }
    }

}
