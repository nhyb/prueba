@extends('layouts.app')

@section('content')
<div class="content-padder content-background">
  <div class="uk-section-small uk-section-default header">
      <div class="uk-container uk-container-large">
          <h1><span class="ion-speedometer"></span> Ordenes </h1>
      </div>
  </div>
<a href="/ordenes/create"> Crear Nuevo </a>
<br>
  <table class="" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>#ID</th>
        <th>Permiso para Entrar</th>
        <th>Departamento</th>
        <th> Acciones </th>
      </tr>
    </thead>
    <tbody>
      @forelse($orders as $order)
      <tr>
        <td>{{ $order->id }}</td>
        <td>{{ $order->entry_permit }}</td>
        <td>{{ $order->aparment->address }}</td>
        <td>
          <a class="btn btn-primary btn-xs" href="/ordenes/{{$order->id}}/edit"  title="Editar" style="float:left;margin-right:5px;">
            Editar
          </a>
          <form  action="/ordenes/{{ $order->id }}" method="post" onSubmit="if(!confirm('Estas seguro de eliminar la orden, puede tener datos relacionados...')){return false;}" >
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
