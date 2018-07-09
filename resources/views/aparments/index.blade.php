@extends('layouts.app')

@section('content')
<div class="content-padder content-background">
  <div class="uk-section-small uk-section-default header">
      <div class="uk-container uk-container-large">
          <h1><span class="ion-speedometer"></span> Departamentos </h1>
      </div>
  </div>
<a href="/departamentos/create"> Crear Nuevo </a>
<br>
  <table class="" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>#ID</th>
        <th>Direccion</th>
        <th> Acciones </th>
      </tr>
    </thead>
    <tbody>
      @forelse($aparments as $aparment)
      <tr>
        <td>{{ $aparment->id }}</td>
        <td>{{ $aparment->address }}</td>
        <td>
          <a class="btn btn-primary btn-xs" href="/departamentos/{{$aparment->id}}/edit"  title="Editar" style="float:left;margin-right:5px;">
            Editar
          </a>
          <form  action="/departamentos/{{ $aparment->id }}" method="post" onSubmit="if(!confirm('Estas seguro de eliminar el departamento, puede tener datos relacionados...')){return false;}" >
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
