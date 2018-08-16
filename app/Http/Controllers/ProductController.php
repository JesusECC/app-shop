<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::paginate(10);
        return view('admin.products.index')->with(compact('products'));//listado
    }
    public function create()
    {
        
        return view('admin.products.create');//formulario de registro
    }
    public function store(ProductRequest $request)
    {
        // //validar
        // $rules=[
            
        // ];
        // $this->Validate($request,$rules);
        // /registrar el nuevo producto en la bd
        // dd($request->all());
        $product=new Product();
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->price=$request->input('price');
        $product->long_description=$request->input('long_description');
        $product->save();
        return redirect('/admin/products');//registrar el producto 
    }
    public function edit($id)
    {
        // return "mostrar aqui la edicion del producto $id";
        $product=Product::find($id);
        return view('admin.products.edit')->with(compact('product'));//formulario de registro
    }
    public function update(ProductRequest $request,$id )
    {
        // /registrar el nuevo producto en la bd
        // dd($request->all());
        $product= Product::find($id); 
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->price=$request->input('price');
        $product->long_description=$request->input('long_description');
        $product->update();
        return redirect('/admin/products');//registrar el producto 
    }

    public function destroy(Request $request,$id )
    {
        // /registrar el nuevo producto en la bd
        // dd($request->all());
        $product= Product::find($id); 
        $product->delete();
        return back();//registrar el producto 
    }
}
