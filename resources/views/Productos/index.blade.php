@extends('layouts.menu')

@section('contenido')
<link href="{{ asset('materialize/css/materialize.css')}}" rel="stylesheet"/>
    <div class="row">   
        <h1>Catalogo de Producto</h1>
    </div>
    @foreach($productos as $producto)
    
    <div class="row">
        <div class="col s6">
                <span class="card-tittle blue-text text-darken-2 z-depth-2">{{$producto->nombre}}</span>
                </div><br>
                <div class="card-content blue-text text-darken-2 ">
                    <p class="z-depth-2">{{$producto->descripcion}}</p>
                </div>
                <div class="card">
                <div class="card-image blue-text text-darken-2">
                    @if($producto->imagen===null)
                    <img class="circle responsive-img" src="{{ asset('img/nodisp.jpg' ) }}" alt="" />
                    @else
                    <img class="circle responsive-img" src="{{ asset('img/'.$producto->imagen) }}" alt="" />
                    @endif
                    
                <div class="card-action blue-text text-darken-2">
                    <a href="{{route('productos.show',$producto->id)}}">Ver detalles</a>
                </div>
            </div>
        </div>
    </div>
    
    
    @endforeach
@endsection
