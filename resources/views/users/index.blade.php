@extends('layouts.app')

@section('content')
<div class="content-padder content-background">
  <div class="uk-section-small uk-section-default header">
      <div class="uk-container uk-container-large">
          <h1><span class="ion-speedometer"></span> Usuarios </h1>
      </div>
  </div>
<a href="/usuarios/create"> Crear Nuevo </a>
<br>
  <table class="" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>#ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Tipo</th>
        <th> Acciones </th>
      </tr>
    </thead>
    <tbody>
      @forelse($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->lastname }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->type }}</td>
        <td>
          <a class="btn btn-primary btn-xs" href="/usuarios/{{$user->id}}/edit"  title="Editar" style="float:left;margin-right:5px;">
            Editar
          </a>
          <form  action="/usuarios/{{ $user->id }}" method="post" onSubmit="if(!confirm('Estas seguro de eliminar el usuario...')){return false;}" >
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger btn-xs" type="submit" title="Eliminar" style="float:left;">
              Eliminar
            </button>
          </form>

        </td>
      </tr>
      @empty
      <span>sin registros aun</span>
      @endforelse
    </tbody>
  </table>

</div>
@endsection
