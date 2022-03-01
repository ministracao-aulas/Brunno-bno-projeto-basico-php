<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Brunno Hernandez" />
    <meta name="description" content="Plataforma Ead" />
    <meta name="keywords" content="Plataforma Ead" />
    <meta name="robots" content="index,follow" />

    <title>Plataforma Ead de Inglês</title>

    <link rel="icon" href="/views/images/favicon.svg" />

    <!-- JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS Alternativo -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Icon Fontawesome -->
    <script src="https://kit.fontawesome.com/83bd296ae1.js" crossorigin="anonymous"></script>
</head>
<body>
<header class=" container-fluid fixed-top">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12">
            <div class="row justify-content-center bg-white shadow-sm">
                <div class="col-12 col-md-10">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?=assets('')?>">Plataforma EAD</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <div class="col-md-8">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="<?=assets('')?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?=assets('courses/') ?>">Cursos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?=assets('group/') ?>">Turmas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?=assets('users/') ?>">Alunos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?=assets('users/show') ?>">Meus dados</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?=assets('courses/create') ?>">Criar Curso</a>
                                    </li>
                                </ul>
                            </div>                           
                        

                            <div class="col-12 col-md-4 justify-content-end text-end">
                                <span class="text-secondary">Brunno Hernandez <i class="fas fa-user-circle"></i> </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

