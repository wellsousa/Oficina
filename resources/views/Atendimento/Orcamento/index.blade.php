@extends('Templates.Default', ["current" => "atendimento"])

@section('custom_head')
<title>Orçamentos - Listar</title>
@endsection

@section('content')
<div class="card border">
    <div class="card-body">
        

        @if(count($orcamentos) > 0)
            <h5 class="card-title">Orçamentos Cadastrados</h5>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Data</th>
                        <th>Cliente</th>
                        <th>Valor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orcamentos as $orcamento)
                        <tr>
                            <td>{{ $orcamento->id }}</td>
                            <td>{{ $orcamento->created_at }}</td>
                            <td>{{ $orcamento->cod_cliente }}</td>
                            <td>{{ $orcamento->valor}}</td>
                            <td>
                                <a href="{{ url('/orcamento/detalhes') }}/{{ $orcamento->id }}" class="btn btn-sm btn-secondary">
                                    <div style="font-size: 16px; color: #f8f9fa;">
                                        <i class="fas fa-info-circle"></i>
                                    </div>                            
                                </a>
                                <a href="{{ url('/orcamento/editar') }}/{{ $orcamento->id }}" class="btn btn-sm btn-secondary">
                                    <div style="font-size: 16px; color: #f8f9fa;">
                                        <i class="fas fa-edit"></i>
                                    </div>                            
                                </a>
                                <a href="{{ url('/orcamento/apagar') }}/{{ $orcamento->id }}" class="btn btn-sm btn-danger">
                                    <div style="font-size: 16px; color: #f8f9fa;">
                                        <i class="fas fa-trash-alt"></i>
                                    </div>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
          <h5>Não há Orçamentos cadastrados ainda.</h5>
        @endif
    </div>
    <div class="card-footer">
    </div>
</div>
@endsection