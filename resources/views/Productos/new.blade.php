@extends('layouts.menu')
@section('contenido')
<div class="row">
    <h1 class="teal-text text-darken-1">
        Nuevo Producto
    </h1>
</div>
<div class="row">
    <form class="col s8" method="POST" action="{{url('productos')}}">        
        @csrf
        <div class="row">
            <div class="input-field col s8">
                <input placeholder="Nombre de Producto" type="text" id="nombre" name="nombre">
                <label for="name">Nombre de Producto</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s8">
                <textarea class="materialize-textarea" id="descripcion" name="descripcion"></textarea>
                <label for="descripcion">Descripcion</label>            
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <input placeholder="Precio del Producto" type="number" id="precio" name="precio">
                <label for="precio ">Precio del Producto</label>
            </div>
        </div>

        <div class="row">
            <div class="col s8 input-field">
            <select name="marca" id="marca">                                
                @foreach($marcas as $marca)
                <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                @endforeach                            
            </select>
            <label for="marca">Marca</label>
            </div>
        </div>

        <div class="row">
            <div class="col s8 input-field">
            <select name="categoria" id="categoria">                                
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endforeach                            
            </select>
            <label for="categoria">Categoria</label>
            </div>
        </div>


        <div class="row">
            <div class="file-field input-field col s8">
            <div class="btn light-blue darken-4">
            <span>Imagen...</span>
            <input type="file" name="imagen">
        </div>

        <div class="file-path-wrapper">
        <input class="file-path validate" type="text">

      </div>
    </div>
    </div>



        <div class="row">
        <div class="input-field col s8">
        <button class="btn light-blue darken-4" type="submit" name="action">Guardar</button>
        </div>
       </div>
       
       
    </form>
</div>
@endsection