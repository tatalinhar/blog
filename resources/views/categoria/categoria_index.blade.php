@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria</div>

                <div class="card-body">

          <a class="btn btn-success" href="{{ url('categoria/create')}}">CRIAR</a>


        <table class='table'>
                <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Acoes</th>

                </tr>
              @foreach ($categorias as $value)

              <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->nome }}</td>
                <td>
                    <a class="btn btn-info" href="{{  url('categoria/' . $value->id) }}">Visualizar</a>

                 <a  class="btn btn-warning" href="{{url('categoria/' . $value->id . '/edit')  }}">EDITAR</a>
                 <form action="{{ url('categoria/' . $value->id) }}" method="post" onsubmit='return ConfirmDelete()'>
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">EXCLUIR</button>
                </tr>
              @endforeach







        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
