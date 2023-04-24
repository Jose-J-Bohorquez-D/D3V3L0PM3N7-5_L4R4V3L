<nav class="navbar bg-dark navbar-expand-lg" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href=" {{ route('home') }} ">&lt;/Development´s_BD&gt;</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=" {{ route('home') }} ">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('nosotros') }} ">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('blog') }} ">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('contacto') }} ">Contacto</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Web</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Movil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Base De Datos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Dominio Y Hosting</a></li>
          </ul>
        </li>        
      </ul>
      <div>
        <a class="btn btn-sm btn-outline-warning" href=" {{ route('ingreso') }} ">Ingresar</a>
        <a class="btn btn-sm btn-outline-success" href=" {{ route('registro') }} ">Registro</a> 
      </div>
      <!--<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>-->
    </div>
  </div>
</nav>