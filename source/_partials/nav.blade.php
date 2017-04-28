<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="{{ $page->baseUrl . '/image/logo.png' }}" class="img-responsive" alt="logo">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ $page->baseUrl }}">Início</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="{{ $page->baseUrl . '/sobre' }}">Sobre</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Organização Interna</a></li>
                        <li><a class="dropdown-item" href="#">Conselho Regulador</a></li>
                        <li><a class="dropdown-item" href="#">Conselho Consutivo</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Deliberações</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Curiculares</a></li>
                        <li><a class="dropdown-item" href="#">Comunicados</a></li>
                        <li><a class="dropdown-item" href="#">Deliberações</a></li>
                        <li><a class="dropdown-item" href="#">Diretivas</a></li>
                        <li><a class="dropdown-item" href="#">Pareceres</a></li>
                        <li><a class="dropdown-item" href="#">Recomendações</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Estudos e Publicações</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Estudos</a></li>
                        <li><a class="dropdown-item" href="#">Publicações</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Legislação</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">ARC</a></li>
                        <li><a class="dropdown-item" href="#">Atividade Jornalista</a></li>
                        <li><a class="dropdown-item" href="#">Comunicação Social</a></li>
                        <li><a class="dropdown-item" href="#">Lei de Incentivos</a></li>
                        <li><a class="dropdown-item" href="#">Publicidade</a></li>
                        <li><a class="dropdown-item" href="#">Registro dos Orgaos de Comunicação Social</a></li>
                        <li><a class="dropdown-item" href="#">Sondagens e Inqueritos de Opinião</a></li>
                    </ul>
                </li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Contatos</a></li>
            </ul>
        </div>
    </div>
</nav>