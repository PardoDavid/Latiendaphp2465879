@extends('layouts.menu')
@section('contenido')
<div class="row">
    <h1 class="teal-text text-darken-1">
        Nuevo Producto
    </h1>
</div>
<div class="row">
    <form class="col s8" method="POST" action="">
        <div class="row">
            <div class="input-field col s8">
                <input placeholder="Nombre de Producto" type="text" id="nombre" name="nombre">
                <label for="name">Nombre de Producto</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <textarea class="materialize-textarea" id="desc" name="desc"></textarea>
                <label for="desc">Descripcion</label>            
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <input placeholder="Precio del Producto" type="number" id="precio" name="precio">
                <label for="precio ">Precio del Producto</label>
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