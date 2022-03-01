
<?php
//TODO remover daqui

if(isset($_POST)) {
    $_SESSION['user_id'] = rand(100, 5000);
    header('Location:'. basePath());
}
?>
<!-- CSS Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>

    .bg-login {
        background-image: url("/images/bg-login.jpg"), url("https://befasterenglish.com.br/wp-content/uploads/2021/02/bg-3.jpg");
        background-color: #ccc;
        background-repeat: no-repeat;
        background-position: relative;
        background-size: cover;
    }

    .link-senha {
        text-decoration: none;
    }

</style>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12 ">
            <div class="row vh-100";>
                <div class="col-12 col-md-6 bg-login">

                </div>
                <div class="col-12 col-md-6">
                    <div class="row justify-content-center d-flex align-items-center">
                        <div class="col-12 col-md-8">
                            <h3 class="mt-5 text-secondary fw-bold">Plataforma EAD</h3>
                            <p class="text-muted lead">Entre com login e senha para acessar seu curso.</p>
                            <form method="post">
                                <div class="form-group mt-5">
                                    <label for="email">Login:</label>
                                    <input type="email" class="form-control bg-light" id="email" aria-describedby="emailHelp" placeholder="exemplo@email.com">
                                </div>
                                <div class="form-group mt-1">
                                    <label for="senha">Senha:</label>
                                    <input type="password" class="form-control bg-light" id="senha" placeholder="******">
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4 col-md-4">
                                        <button type="submit" class="btn btn-primary">Entrar</button>
                                    </div>
                                    <div class="col-8 col-md-8 mt-3 d-flex justify-content-end">
                                        <p class="text-muted">Esqueceu a senha?<a class="justify-content-end link-dark link-senha" href="#"> Clique aqui</a></p>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
