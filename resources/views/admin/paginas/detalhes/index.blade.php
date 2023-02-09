@extends('adminlte::page')

@section('title', 'detalhes do plano ', $planos->nomePlano)

@section('content_header')

    <h1>Listagem dos detalhes do plano {{ $planos->nomePlano }}</h1>
@endsection

@section('content')
<div class="container row">
    <div class="col-md-6">
        <a href="{{ route('planos.index') }}" class="btn btn-outline-success " ><i class="fas fa-arrow-left"></i> Voltar para os Planos</a>
    </div>
</div>



<div class="container mt-3">
    <div class="row">
        <div class="card col-md-12">

                <div class="card-header">
                    <a href="#" class="btn btn-success " data-toggle="modal" data-target="#create{{ $planos->id }}">Novo Detalhe</a>

                </div>



            <div class="card-body">
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Nª</th>
                            <th>Nome</th>
                            <th width="150">Açcões</th>
                        </tr>

                    </thead>
                    <tbody>

                        @foreach ($detalhes as $detalhe)
                            <tr>
                                <td>{{ $detalhe->id }}</td>
                                <td>{{ $detalhe->nomeDetalhe }}</td>

                                <td>
                                    <a href="#" data-toggle="modal" data-target="#show{{ $detalhe->id }}"><i class="fas fa-eye " Style="color: green"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#edit{{ $detalhe->id }}"><i class="fas fa-pen " ></i></a>
                                    <a href="#" data-toggle="modal" data-target="#destroy{{ $detalhe->id }}"><i class="fas fa-trash" Style="color: red"></i></a>
                                </td>
                            </tr>
                             @include('admin.paginas.detalhes.modal.show')
                             @include('admin.paginas.detalhes.modal.edit')
                             @include('admin.paginas.detalhes.modal.destroy')


                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>

    </div>

</div>
 {{--    {{ $detalhes->links() }}
 --}}
 @include('admin.paginas.detalhes.modal.create')



 <script >


    $(document).ready(function(){

        toastr.options.timeOut=10000;
        toastr.options.closeButton=true;
        toastr.options.progressBar=true;

        @if (Session::has('error'))

            toastr.error('{{ Session::get('error') }}');

        @elseif (Session::has('success'))

            toastr.success('{{ Session::get('success') }}');

        @elseif (Session::has('warning'))
            toastr.warning('{{ Session::get('warning') }}');

        @elseif (Session::has('info'))
            toastr.info('{{ Session::get('info') }}')
        @endif
    });






</script>

@endsection

