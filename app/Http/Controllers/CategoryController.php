<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use DB;

class CategoryController extends Controller
{
    public function index()
    {
        $data = category::all();
        return view ('product.addcategory',compact('data'));
    }

     //category Add
     public function create(Request $request)
     {
 
 
         // Create the new category
         $category = new Category();
         $category->name = $request->input('name');
         if($request->has('status'))
         {
          $category->status=1 ;
         }
         else
         {
          $category->status=0 ;
         }
         $category->save();
         return back()->with('success', 'Success! Category created');
    
     }

     //Category Edit
     public function categoryedit($id)
     {
         $list = category::find($id);
         return view('product.editcategory', ['list' => $list]);
     }

      //Category Update
    public function categoryupdate($id, Request $request)
    {
        $list = category::find($id);
        $list->name = $request->name;
        if($request->has('status'))
        {
         $list->status=1 ;
        }
        else
        {
         $list->status=0 ;
        }
        $list->save();

        return redirect('category')->with('msg', 'Category data  updated');
    }

      //category delete
      public function categorydelete($id)
      {
          $user = category::find($id);
          $check= DB::table('subcategories')->where('category_id','=',$id)->count();
          

  
          if ($check <= 0 ) {
            
              $user->delete();
              return back()->with('success', 'Success! Category Deleted');
              return redirect('category')->with('msg', 'data delete');
          } else {
           
            return redirect('category')->with('msg', 'Category NOT  DELETERD');
          }
      }
}
