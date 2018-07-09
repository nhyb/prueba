@extends('layouts.app')
@section('content')
<div class="content-padder content-background">
  <div class="uk-section-small uk-section-default header">
      <div class="uk-container uk-container-large">
          <h1><span class="ion-speedometer"></span> Nueva Orden </h1>
      </div>
  </div>
  <form class="" action="/ordenes" method="post">
    {{ csrf_field() }}
    <label for="">Permiso para Entrar</label>
    <input type="number" name="entry_permit" value="">
    <br>
    <label for="">Departamentos</label>
    <select class="" name="aparment_id">
      @foreach($aparments as $aparment)
      <option value="{{ $aparment->id }}">{{ $aparment->address }}</option>
      @endforeach
    </select>
    <button type="submit"> Enviar </button>
  </form>

</div>
@endsection
