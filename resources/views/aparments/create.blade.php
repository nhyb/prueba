@extends('layouts.app')
@section('content')
<div class="content-padder content-background">
  <div class="uk-section-small uk-section-default header">
      <div class="uk-container uk-container-large">
          <h1><span class="ion-speedometer"></span> Nuevo Departamento </h1>
      </div>
  </div>
  <form class="" action="/departamentos" method="post">
    {{ csrf_field() }}
    <label for="">Direccion</label>
    <input type="text" name="address" value="">
    <button type="submit"> Enviar </button>
  </form>

</div>
@endsection
