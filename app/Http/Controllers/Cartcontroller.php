<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cartcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Mostrar variables de sesion 
        return view('Cart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //reestucturar la información del producto
        $producto=[
            [
            "nombre"=>$request->prod_nom,
            "id"=>$request->prod_id,
            "precio"=>$request->prod_pre,
            "cantidad"=>$request->cantidad
            ]
        ];
        
        if(!session('cart')){
            //si no existe la sesionn 
            //se crear sesion cart        
            $auxiliar[]=$producto;
            session(['cart'=>$auxiliar]);
        }else{
            //existe la sesión
            //extraer el cont de la variable de sesión
            $auxiliar=session('cart');
            //arreglo
            $auxiliar[]=$producto;
            //volver a crear la sesion cart con el item ya añanido
            session(['cart'=>$auxiliar]);
        }        
        //redireccionar al catalogo de productos, envinado un mensaje
            return redirect('productos')
                        ->with ('mensaje','Producto Añadido al Carrito');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //elimirar la session 'cart'
        session()->forget("cart");
        return redirect('cart')
                ->with('mensaje','Carrito Eliminar');
    }
}
