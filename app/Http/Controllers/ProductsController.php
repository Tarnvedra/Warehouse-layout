<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
     $products = Product::where('sku','!=','EMPTY')->orderBy('id' , 'asc')->paginate(10);
     return view('pages/listitems')->with('products' , $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('pages/additems');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
                'sku' => 'required',
                'description' => 'required',
                'width' => 'required' ,
                'length' => 'required' ,
                'height' => 'required' ,
                'mass' => 'required' ,
                'volume' => 'required' ,
                'density' => 'required' ,
                'size' => 'required' ,
                'image' => 'image|nullable|max:1999'

        ]);

        // dd($request->all());
        // verify file upload
        if ($request->hasFile('image')){
        // retrieve file name and extension
        $filenameExtension = $request->file('image')->getClientOriginalName();
        // split up filename and extension
        $filename = pathinfo($filenameExtension, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('image')->storeAs('public/uploads',  $fileNameToStore);
        }
        else {
            $fileNameToStore = 'empty.png';
        }

        $product = new Product;
        $product->sku = $request->input('sku');
        $product->description = $request->input('description');
        $product->width = $request->input('width');
        $product->length = $request->input('length');
        $product->height = $request->input('height');
        $product->mass = $request->input('mass');
        $product->volume =  $request->input('volume');
        $product->density = $request->input('density');
        $product->size =  $request->input('size');
        $product->image =  $fileNameToStore;
        $product->save();

        return redirect('/products')->with('success', 'Product added to database!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($sku)
    {
    $product = Product::find($sku);
    return view('pages/show')->with('product' , $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($sku)
    {
        $product = Product::find($sku);

        //Check if post exists before deleting
        if (!isset($product)){
            return redirect('/posts')->with('error', 'No Product Found');
        }

        // Check for correct user
       // if(auth()->user()->id !==$post->user_id){
         //   return redirect('/products/show')->with('error', 'Unauthorized Page');
       // }

        return view('pages/edititem')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sku)
    {
        $this->validate($request , [
            'sku' => 'required',
            'description' => 'required',
            'width' => 'required' ,
            'length' => 'required' ,
            'height' => 'required' ,
            'mass' => 'required' ,
            'volume' => 'required' ,
            'density' => 'required' ,
            'size' => 'required' ,
            'image' => 'image|nullable|max:1999'

    ]);

    $product = Product::find($sku);
    // return($sku);
    // verify file upload
    // dd($request->all());
    if ($request->hasFile('image')){
        // retrieve file name and extension
        $filenameExtension = $request->file('image')->getClientOriginalName();
        // split up filename and extension
        $filename = pathinfo($filenameExtension, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('image')->storeAs('public/uploads',  $fileNameToStore);
        }
        else {
            $fileNameToStore = 'empty.png';
        }

        $product->sku = $request->input('sku');
        $product->description = $request->input('description');
        $product->width = $request->input('width');
        $product->length = $request->input('length');
        $product->height = $request->input('height');
        $product->mass = $request->input('mass');
        $product->volume =  $request->input('volume');
        $product->density = $request->input('density');
        $product->size =  $request->input('size');
        $product->image =  $fileNameToStore;
        $product->save();

        return redirect('/products')->with('success' , 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($sku)
    {

        $product = Product::where('sku', '=' , $sku);
       // if($product->image != 'empty.png'){
        //    Storage::delete('public/uploads/.$product->image');
        // }
        //dd($product);
        $product->delete();


        return redirect('/products')->with('success' , 'Product Deleted');
    }



    public function sortitems()
    {
    $products = Product::orderBy('sku' , 'asc')->paginate(7);
     return view('pages/sortitems')->with('products' , $products);
    }


    public function additems()
    {
        return view('pages/additems');
    }

    public function deleteitems()
    {
        return view('pages/delitem');
    }

    public function displayitems()

    {
        // create join of locations and products tables
        $query = "SELECT locations.location, products.sku, products.description, products.image FROM products JOIN locations ON products.sku = locations.sku WHERE location LIKE 'A-01-%' ORDER BY locations.location ASC";
        $products = DB::select($query);
        //dd($products);
        return view('pages/displayitems')->with('products' , $products);
    }


}
