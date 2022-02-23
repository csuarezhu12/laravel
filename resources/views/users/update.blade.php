@extends('layout')
@section('content')
<div>
    <div class="row">
        <div class="col col-md-8">
            <p class="text-danger">Actualizar</p>
            <form action="{{ route('user.update',$user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <p class="text-info">Insertar Usuarios</p>
                <label class="form-label">Nombre</label>
                <input type="text" id="nombre" name="name" class="form-control" value="{{$user->name}}" />
                @error('nombre')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <br><label class="form-label">Correo</label>
                <input type="text" id="Correo" name="email" class="form-control" value="{{$user->email}}" />
                @error('correo')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" value="{{$user->password}}" />
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label class="form-label">Imagen</label>
                <input type="file" id="imagen" name="image" class="form-control" value="{{$user->image}}" /><br>
                @error('imagen')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button class="btn btn-danger">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('title','Update')