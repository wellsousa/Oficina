<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <!-- BEGIN: brand -->
 <div>

    <div style="font-size: 48px; color: #f8f9fa;">
        <i class="fas fa-car-side"></i>
    </div>
    <div>
        <a class="navbar-brand" href="#">Oficina 2.0</a>
    </div>
  </div>
  <!-- END: Brand-->

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li @if($current == "home") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="{{ url('/home') }}">Home</a>
      </li>  
      <li @if($current == "clientes") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="{{ url('/clientes') }}">Clientes</a>
      </li> 
      <li @if($current == "orcamentos") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="{{ url('/orcamentos/painel') }}">Orçamentos</a>
      </li>              
      <li @if($current == "administrativo") class="nav-item dropdown active" @else class="nav-item dropdown" @endif>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administrativo
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Cargos</a>
          <a class="dropdown-item" href="#">Funcionários</a>
        </div>
      </li>
      <li @if($current == "relatorios") class="nav-item dropdown active" @else class="nav-item dropdown" @endif>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Relatórios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Orçamentos por Período</a>
        </div>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="#">Ajuda</a>
      </li>             
    </ul>
  </div>
</nav>