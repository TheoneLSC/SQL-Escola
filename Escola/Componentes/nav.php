<head>
<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous"
    />
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

    <style>
    .navbar {
    border-bottom: #c0c0c0 3px solid;
    border-top: #c0c0c0 3px solid;
    border-left: #c0c0c0 3px solid;
    border-right: #c0c0c0 3px solid;
    opacity: 0.9;}
    .container{
        font: 16px Century Gothic;
        color:white;}
    .dropdown-menu{
        background-color:#343a40;}
    a{
        color:white;}
    </style>
</head>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
        <div class="container">
            <a class="navbar-brand" href="#">Escola</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="/SQL-Escola/Escola/index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Noa tem dependencias</a>
                    <div class="dropdown-menu">
                        <ul>
                    <li><a href="/SQL-Escola/Escola/Paginas/horarios/listar.php">Horarios</a></li>
                    <li><a href="/SQL-Escola/Escola/Paginas/Disciplina/listar.php">Disciplina</a></li>
                    <li><a href="/SQL-Escola/Escola/Paginas/generos/listar.php">Generos</a></li>
                    <li><a href="/SQL-Escola/Escola/Paginas/professores/listar.php">Professores</a></li>
                    </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Tem dependencias</a>
                    <div class="dropdown-menu">
                    <ul>
                    <li><a href="/SQL-Escola/Escola/Paginas/Alunos/listar.php">Alunos</a></li>
                    <li><a href="/SQL-Escola/Escola/Paginas/Turmas/listar.php">Turmas</a></li>
                    <li><a href="/SQL-Escola/Escola/Paginas/Curso/listar.php">Cursos</a></li>
                </ul>
                </div>
                </li>
            </ul>
        </div>
    </nav>