<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{
    //

    public function index()
    {
        // $data = category::all();
        $data = category::where('status', 1)->get();
        $subcategory = subcategory::all();
        return view('product.subcategory', compact('data','subcategory'));
    }

    // public function index(Request $request)
    // {
    //     $categoryId = $request->input('category_id');
    //     $subcategories = Subcategory::where('category_id', $categoryId)->get();
    //     return response()->json($subcategories);
    // }

       //Add subcategory
       public function addsubcategory(Request $request)
       {
   
   
           // Create the new category
           $subcategory = new subcategory();
           $subcategory->name = $request->input('name');
           $subcategory->category_id = $request->input('category_id');
           if($request->has('status'))
           {
            $subcategory->status=1 ;
           }
           else
           {
            $subcategory->status=0 ;
           }
          
           $subcategory->save();
           return redirect('subcategory')->with('success', "Categories Added Sucessfully");
       }
       

          //Edit Subcategory
    public function editsubcategory($id)
    {
        $Subcategory = Subcategory::findOrFail($id);

        $data = Category::all();

       return view('product.editsubcategory')
       ->with('Subcategory',$Subcategory)
       ->with('data',$data);
    }

    public function subcategoryupdate($id, Request $request)
    {
        $subcategory = subcategory::find($id);
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->input('category_id');
        if($request->has('status'))
        {
         $subcategory->status=1 ;
        }
        else
        {
         $subcategory->status=0 ;
        }
        $subcategory->save();

        return redirect('subcategory')->with('success', 'SubCategory data  updated');
    }
    //Delete
    public function delete( Request $request)
    {
        $subcategory = Subcategory::findOrFail($request->id);
        $subcategory->delete();
        return redirect('subcategory')->with('success', 'Delete SubCategory data  updated');
    }

}
