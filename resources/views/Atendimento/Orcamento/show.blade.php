@extends('Templates.Default', ["current" => "atendimento"])

@section('custom_head')
<title>Orçamento - Detalhes</title>
@endsection

@section('custom_css')
<style>

.card-header{
    font-weight: bold;
}

</style>
@endsection

@section('content')
<div class="card mx-auto mt-5">
    <div class="card-header">Detalhes de Orçamento</div>

    <div class="card-body">
        <!-- BEGIN: Dados do Atendimento -->
        <div class="row">
            <div class="col-md-6">
                <div class="card mx-auto mt-5">
                    <div class="card-header">Funcionário responsável</div>

                    <div class="card-body">
                        {{ $orcamento->cod_funcionario }}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mx-auto mt-5">
                    <div class="card-header">Data/Hora Atendimento</div>

                    <div class="card-body">
                        {{ $orcamento->created_at }}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mx-auto mt-5">
                    <div class="card-header">Última Atualização</div>

                    <div class="card-body">
                        {{ $orcamento->updated_at }}
                    </div>
                </div>
            </div>            
        </div>
        <!-- END: Dados do Atendimento -->

        <!-- BEGIN: Dados do Cliente -->
        <div class="row">
            <div class="col-md-6">
                <div class="card mx-auto mt-5">
                    <div class="card-header">Cliente</div>

                    <div class="card-body">{{ $orcamento->cod_cliente }}</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mx-auto mt-5">
                    <div class="card-header">Telefone</div>

                    <div class="card-body">{{ $orcamento->cod_cliente }}</div>
                </div>
            </div> 
            <div class="col-md-3">
                <div class="card mx-auto mt-5">
                    <div class="card-header">Email</div>

                    <div class="card-body">{{ $orcamento->cod_cliente }}</div>
                </div>
            </div>                       
        </div>
        <!-- END: Dados do Cliente -->

        <!--BEGIN: Dados do Orçamento -->
        <div class="row">
            <div class="col-md-12">
                <div class="card mx-auto mt-5">
                    <div class="card-header">Descrição</div>

                    <div class="card-body">{{ $orcamento->descricao }}</div>
                </div>
            </div>
        </div>
        <!--END: Dados do Orçamento -->

        <!-- BEGIN: Valor -->
        <div class="row">
            <div class="col-md-6 ml-auto">
                <div class="card mx-auto mt-5 text-center">
                    <div class="card-header">Validade</div>

                    <div class="card-body"></div>
                </div>
            </div>        
            <div class="col-md-6 ml-auto">
                <div class="card mx-auto mt-5 text-center">
                    <div class="card-header">Valor</div>

                    <div class="card-body">{{ $orcamento->valor }}</div>
                </div>
            </div>
        </div>
        <!-- END: Valor -->
    </div>

    <div class="card-footer">
        <a href="{{ url('/orcamentos') }}" class="btn btn-secondary">Voltar</a>
    </div>
</div>
@endsection