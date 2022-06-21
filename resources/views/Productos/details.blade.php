@extends('layouts.menu')
@section('contenido')
<link href="{{ asset('materialize/css/materialize.css')}}" rel="stylesheet"/>
    <div class="row">
        <h1>{{$producto->nombre}}</h1>
    </div>
    <div class="row">
        <div class="col s8">            
            <ul >
                <li>Descripcion:{{$producto->descripcion}}</li>
                <li>Precio:${{$producto->precio}}</li>
                <li>Marca:{{$producto->marca->nombre}}</li>
                <li>Categoria:{{$producto->categoria->nombre}}</li>
            </ul>
            <img src="{{ asset('img/'.$producto->imagen) }}" class="circle responsive-img" alt="" />
        </div>
        <div class="col s4">
                <div class="row">
                    <h3>Añadir al carrito</h3>
                </div>
                
                    <form action="{{route('cart.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="prod_id" value="{{$producto->id}}">
                    <input type="hidden" name="prod_nom" value="{{$producto->nombre}}">
                    <input type="hidden" name="prod_pre" value="{{$producto->precio}}">
                    <div class="row">
                        <div class="col s4 input-field">
                            <select name="cantidad" id="cantidad">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <label for="cantidad">Cantidad</label>
                        </div>
                        <div>
                        <button class="btn light-blue darken-4" type="submit" name="action">Añadir</button>
                        </div>
                    </div>
                    </form>                                    
            </div>
    </div>
    
@endsection