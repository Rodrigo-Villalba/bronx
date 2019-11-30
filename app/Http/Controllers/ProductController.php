<?php

namespace App\Http\Controllers;

use App\Product;
use App\Categoria;
use App\ImagesProducts;
use Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::All();
      return view('productos', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

      $this->validate($request, [
        'name' => 'required',
        'category' => 'required',
        'price' => 'required|min:1'
      ]);

      $producto = new Product;

      $producto->name = $request->input('name');
      $producto->description = $request->input('description');
      $producto->category_id = $request->input('category');
      $producto->price = $request->input('price');
      $producto->stock = $request->input('stock');
      $producto->tags = "";
      $producto->user_id = Auth::user()->id;

      $producto->save();

      if ($request->file('imagen1') != NULL) {
        $image_name = time() . $request->file('imagen1')->getClientOriginalName();
        $path = base_path() . '/public/storage/products';
        $request->file('imagen1')->move($path,$image_name);
        $img1 = new ImagesProducts;
        $img1->image = $image_name;
        $producto->photos()->save($img1);
      }

      if ($request->file('imagen2') != NULL) {
        $image_name = time() . $request->file('imagen2')->getClientOriginalName();
        $path = base_path() . '/public/storage/products';
        $request->file('imagen2')->move($path,$image_name);
        $img2 = new ImagesProducts;
        $img2->image = $image_name;
        $producto->photos()->save($img2);
      }

      if ($request->file('imagen3') != NULL) {
        $image_name = time() . $request->file('imagen3')->getClientOriginalName();
        $path = base_path() . '/public/storage/products';
        $request->file('imagen3')->move($path,$image_name);
        $img3 = new ImagesProducts;
        $img3->image = $image_name;
        $producto->photos()->save($img3);
      }

      if ($request->file('imagen4') != NULL) {
        $image_name = time() . $request->file('imagen4')->getClientOriginalName();
        $path = base_path() . '/public/storage/products';
        $request->file('imagen4')->move($path,$image_name);
        $img4 = new ImagesProducts;
        $img4->image = $image_name;
        $producto->photos()->save($img4);
      }

      return redirect('/productos');
    }

    public function mostrarFormulario(){

      $categorias = Categoria::all();

      return view("formulario", compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $productDetail = Product::find($id);

       return view('productDetalle', compact('productDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
