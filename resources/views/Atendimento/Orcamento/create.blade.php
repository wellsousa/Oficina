@extends('Templates.Default', ["current" => "atendimento"])

@section('custom_head')
<title>Orçamento - Cadastrar</title>
@endsection

@section('content')

<div class="card mx-auto mt-5">
    <div class="card-header">Cadastrar Orçamento</div>
    <div class="card-body">
        <form action="{{ url('/orcamento') }}" method="POST">
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="cod_funcionario" class="form-control bg-light">Atendente:</label>
                        <select id='id_cod_funcionario' name='cod_funcionario' class="form-control"
                            placeholder="Selecione quem está criando o Orçamento">
                            <option value="1">fulano</option>
                            <option value="2">ciclano</option>
                        </select> 
                    </div>
                    <div class="col-md-6">
                        <label for="cod_funcionario" class="form-control bg-light">Cliente:</label>
                        <select id='id_cod_funcionario' name='cod_funcionario' class="form-control"
                            placeholder="Selecione quem está criando o Orçamento">
                            <option value="1">fulano</option>
                            <option value="2">ciclano</option>
                        </select> 
                    </div>

                </div>
                  
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <label for="descricao" class="form-control bg-light">Descrição do Orçamento:</label>
                        <textarea id="id_descricao" name="descricao" class="form-control">
                    
                        </textarea>
                    </div>    
                </div>              
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="valor" class="form-control bg-light">Valor:</label>
                        <input type="number" id="id_valor" name="valor" class="form-control"/>
                    </div>
                </div>
            </div>

            <button class="btn btn-secondary">Salvar</button>
            <a class="btn btn-light">Cancelar</a>
        </form>
    </div>
</div>

@endsection