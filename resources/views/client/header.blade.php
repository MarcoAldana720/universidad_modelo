<nav class="navbar">
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>

    <img src="{{ asset('img/logo-blanco.svg') }}" alt="Logo">

    <ul>
        <!-- OPCION DE INICIO -->
        <li><a href="#">inicio</a></li>
        <!-- OPCION DE DOCUMENTOS CURRICULARES -->
        <li>
            <a href="#">documentos curriculares
                <i class="fa-solid fa-chevron-down"></i>
            </a>
            <!-- SUB OPCIONES -->
            <!-- <ul>
                <li><a href="{{ route('id') }}">identificacion del profesor</a></li>
                <li><a href="{{ route('studies') }}">estudios realizados</a></li>
                <li><a href="{{ route('data') }}">datos laborales</a></li>
                <li><a href="{{ route('line') }}">linea de generacion o aplicacion innovadora del conocimiento</a></li>
                <li><a href="{{ route('production') }}">produccion académica</a></li>
                <li><a href="{{ route('projects') }}">proyectos de investigación</a></li>
                <li><a href="#">ver curriculum</a></li>
                <li><a href="#">exportar curriculum</a></li>
            </ul> -->
        </li>
        <!-- OPCION DE CERRAR SESION -->
        <li><a href="#">cerrar sesion</a></li>
    </ul>
</nav>