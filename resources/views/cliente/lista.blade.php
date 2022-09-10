@extends('layouts.master')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Agence</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Cliente</a></li>
                        <li class="breadcrumb-item active">Lista</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Clientes</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead style="background-color:#A9D0F5">
                                <th colspan="2">
                                    @include('cliente.search')
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    </div>
                                </th>
                            </thead>

                            @forelse($cao_clientes as $cliente)
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"
                                                id="{{ $cliente->co_cliente }}" value="{{ old($cliente->co_cliente) }}">
                                            <label for="{{ $cliente->co_cliente }}" class="custom-control-label"></label>
                                        </div>
                                    </td>
                                    <td>
                                        {{ $cliente->no_razao }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>Nenhum registo encontrado!</td>
                                </tr>
                            @endforelse

                            <tr>
                                <th style="background-color:#A9D0F5" colspan="2"></th>
                            </tr>
                        </table>
                    </div>
                    {{ $cao_clientes->render() }}
                </div>
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            By Agence @2022
        </div>
        <!-- /.card-footer-->
    </div>
@stop

@section('js')
@stop
