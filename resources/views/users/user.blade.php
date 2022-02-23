@extends('layout')
@section('content')
<div>
    <div class="row">
        <div class="col col-md-8">
            <p class="text-danger">Datos</p>

            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Fecha Creacion</th>
                    <th>Fecha Actualizacion</th>
                    <th>Imagen</th>
                    <th width="280px"></th>
                </tr>
                @foreach ($user as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->update_at }}</td>
                    <td>{{ $user->image }}</td>
                    <td>
                        <form action="{{ route('user.destroy',$user->id) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Editar</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="col col-md-4">
            <div class="col">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <p class="text-info">Insertar Usuarios</p>
                    <label class="form-label">Nombre</label>
                    <input type="text" id="nombre" name="name" class="form-control" />
                    @error('nombre')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <br><label class="form-label">Correo</label>
                    <input type="text" id="Correo" name="email" class="form-control" />
                    @error('correo')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" />
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label class="form-label">Imagen</label>
                    <input type="file" id="imagen" name="image" class="form-control" /><br>
                    @error('imagen')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button class="btn btn-danger">Insertar</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection

@section('title','User')