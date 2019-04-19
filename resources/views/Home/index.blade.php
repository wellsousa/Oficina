@extends("Templates.Default")

@section('custom_head')
   <title>Oficina 2.0</title>
@endsection


@section('content')

<div class="jumbotron bg-light border-secondary">
   <div class="row">
        <div class="col-md-5 ">
            <div class="card-deck">
                <div class="card border-dark">
                    <div class="card-body">
                    
                    
                        <h4 class="card-title">Orçamento - Cadastro</h4>

                        <div>
                            <a href="/novoOrcamento" class="btn btn-secondary">
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

        <div class="col-md-5">
            <div class="card-deck">
                <div class="card border-dark">
                    <div class="card-body">
                    
                    
                        <h4 class="card-title">Orçamento - Pesquisar</h4>

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


