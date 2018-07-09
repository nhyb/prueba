@extends('layouts.app')

@section('content')
<div class="content-padder content-background">
  <div class="uk-section-small uk-section-default header">
      <div class="uk-container uk-container-large">
          <h1><span class="ion-speedometer"></span>Editar Usuario</h1>
      </div>
  </div>
  <form class="" action="/usuarios/{{ $user->id }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="put">
    <label for="">Nombre</label>
    <input type="text" name="name" value="{{ $user->name }}">
    <br>
    <label for="">Apellido</label>
    <input type="text" name="lastname" value="{{ $user->lastname }}">
    <br>
    <label for="">Email</label>
    <input type="email" name="email" value="{{ $user->email }}">
    <br>
    <label for="">DNI</label>
    <input type="text" name="dni" value="{{ $user->dni }}">
    <br>
    <label for="">Telefono</label>
    <input type="text" name="phone" value="{{ $user->phone }}">
    <br>
    <label for="">Tipo</label>
    <select name="type">
      <option value="super" {{ $user->type == 'super' ? 'selected="selected"':''}}>Super Admin</option>
      <option value="admin" {{ $user->type == 'admin' ? 'selected="selected"':''}}>Admin</option>
      <option value="normal" {{ $user->type == 'normal' ? 'selected="selected"':''}}>Normal</option>
    </select>

    <button type="submit"> Actualizar </button>
  </form>

<br>


</div>
@endsection
