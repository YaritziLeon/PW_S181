<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Diario Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('recuerdo.inicio')?'text-primary':''}}" aria-current="page" href="/"><strong>Inicio</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('recuerdo.create')?'text-primary':''}}" href="/recuerdo/create"><strong>Formulario</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('recuerdo.index')?'text-primary':''}}" href="/recuerdo"><strong>Recuerdos</strong></a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>