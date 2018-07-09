@extends('layouts.app')
@section('content')
<div class="content-padder content-background">
  <div class="uk-section-small uk-section-default header">
      <div class="uk-container uk-container-large">
          <h1><span class="ion-speedometer"></span> Nuevo Usuario </h1>
      </div>
  </div>
  <form class="" action="/usuarios" method="post">
    {{ csrf_field() }}

    <label for="">Nombre</label>
    <input type="text" name="name" value="">
    <br>
    <label for="">Apellido</label>
    <input type="text" name="lastname" value="">
    <br>
    <label for="">Email</label>
    <input type="email" name="email" value="">
    <br>
    <label for="">Password</label>
    <input type="password" name="password" value="">
    <br>
    <label for="">DNI</label>
    <input type="text" name="dni" value="">
    <br>
    <label for="">Telefono</label>
    <input type="text" name="phone" value="">
    <br>
    <label for="">Tipo</label>
    <select name="type">
      <option value="super">Super Admin</option>
      <option value="admin">Admin</option>
      <option value="normal">Normal</option>
    </select>

    <button type="submit"> Enviar </button>
  </form>

</div>
@endsection
