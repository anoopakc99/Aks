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

    <option value="{{ $list->id }}" {{ $list->category_id == $list->id ? 'selected' : '' }}>
                {{ $list->name }}
            </option>
             @endforeach