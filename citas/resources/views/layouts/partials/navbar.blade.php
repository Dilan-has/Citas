    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home"><img
                    src="https://www.micolombiadigital.gov.co/sites/superadmin/content/files/001584/79173.png"
                    alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <form class="d-flex" role="search">
                    @auth
                        <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="truey">

                                    {{ auth()->user()->name }}

                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Mi cuenta</a></li>
                                    <li><a class="dropdown-item" href="#">Ajustes</a></li>
                                    <li><a class="dropdown-item" href="/citas">Mis citas</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/logout">Cerrar sesion</a></li>
                                </ul>
                            </li>
                        </ul>
                    @endauth
                </form>
            </div>
        </div>
    </nav>
