@extends('layouts.app')

@section('content')
<div class="content-padder content-background">
  <div class="uk-section-small uk-section-default header">
      <div class="uk-container uk-container-large">
          <h1><span class="ion-speedometer"></span>Editar Departamento</h1>
      </div>
  </div>
  <form class="" action="/departamentos/{{ $aparment->id }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="put">

    <label for="">Direccion</label>
    <input type="text" name="address" value="{{ $aparment->address }}">
    <button type="submit"> Actualizar </button>
  </form>

<br>


</div>
@endsection
