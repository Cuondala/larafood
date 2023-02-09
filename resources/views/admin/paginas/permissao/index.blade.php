@extends('adminlte::page')

@section('title', 'permissoes')

@section('content_header')

    <h1>Listagem</h1>
@endsection

@section('content')
<div class="container row">
    <div class="col-md-6">
        <a href="#" class="btn btn-success " data-toggle="modal" data-target="#create">Nova Permissão</a>
    </div>
</div>



<div class="container mt-3">
    <div class="row">
        <div class="card col-md-12">
            <div class="card-header ">
                <h3 class="card-title">Permissão</h3>
                <form action="{{route('permissoes.index')}}" class="form-inline justify-content-end" method="get">
                    @csrf
                    <input type="search" name="filtro" id="" class="form-control col-md-3" placeholder="Pesquisar">
                    <button type="submit" class="btn btn-outline-dark">Pesquisar</button>
                </form>
            </div>

            <div class="card-body">
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Nª</th>
                            <th>Nome</th>
                            <th width="90"> Açcões</th>
                        </tr>

                    </thead>
                    <tbody>

                        @foreach ($permissoes as $permissao)
                            <tr>
                                <td>{{ $permissao->id }}</td>
                                <td>{{ $permissao->nomePermissao }}</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#show{{ $permissao->id }}"><i class="fas fa-eye " Style="color: green"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#edit{{ $permissao->id }}"><i class="fas fa-pen " ></i></a>
                                    <a href="#" data-toggle="modal" data-target="#destroy{{ $permissao->id }}"><i class="fas fa-trash" Style="color: red"></i></a>
                                    <a href="{{ route('detalhes.index',$permissao->id) }}" class="btn btn-outline-info">Detalhes</a>
                                </td>
                            </tr>

                            @include('admin.paginas.permissao.modal.show')
                            @include('admin.paginas.permissao.modal.edit')
                            @include('admin.paginas.permissao.modal.destroy')

                        @endforeach

                    </tbody>
                </table>
                @include('admin.paginas.permissao.modal.create')
            </div>
        </div>

    </div>

</div>


    {{ $permissoes->links() }}


@endsection
