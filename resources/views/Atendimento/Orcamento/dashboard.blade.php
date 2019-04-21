@extends("Templates.Default", ["current" => "atendimento"])

@section('custom_head')
   <title>Orçamento</title>
@endsection

@section('content')

<div class="jumbotron bg-light border-secondary">
   <div class="row">
        <div class="col-md-4 ">
            <div class="card-deck">
                <div class="card border-dark text-center">
                    <div class="card-body">
                    
                    
                        <h4 class="card-title">Cadastrar</h4>

                        <div>
                            <a href="/orcamento/criar" class="btn btn-secondary">
                                <div style="font-size: 48px">
                                    <i class="fas fa-folder-plus"></i> 
                                </div>
                            </a>
                        </div>

                        <p class="card-text">
                            Crie um novo Orçamento.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-deck">
                <div class="card border-dark text-center">
                    <div class="card-body">
                    
                    
                        <h4 class="card-title">Visualizar e Editar</h4>

                        <div>
                            <a href="{{ url('/orcamentos') }}" class="btn btn-secondary">
                                <div style="font-size: 48px">
                                <i class="fas fa-list-ol"></i>
                                </div>
                            </a>
                        </div>

                        <p class="card-text">
                            Visualize e edite Orçamentos criados.
                        </p>
                    </div>
                </div>
            </div>
        </div>  

        <div class="col-md-4">
            <div class="card-deck">
                <div class="card border-dark text-center">
                    <div class="card-body">
                    
                    
                        <h4 class="card-title">Pesquisar</h4>

                        <div>
                            <a href="/novoOrcamento" class="btn btn-secondary">
                                <div style="font-size: 48px">
                                <i class="fas fa-search-plus"></i>
                                </div>
                            </a>
                        </div>

                        <p class="card-text">
                            Pesquise por Orçamentos cadastrados.
                        </p>
                    </div>
                </div>
            </div>
        </div>        
   </div>
</div>

@endsection

