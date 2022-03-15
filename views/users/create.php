<?php

require_once BASE_DIR . "/views/_includes/header.php";

?>

<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-md-10 mt-5 mb-3">
            <h3>Cadastrar Usuário</h3>
        </div>

        <div class="col-12 col-md-10 mb-3">
            <form action="<?=assets('users/store')?>" class="row" method="post">

                <div class="col-md-6 col-sm-12 mb-3">
                    <label for="name">name *</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name"
                        value="name <?=rand(100, 500); ?>"
                        required>
                </div>

                <div class="col-md-6 col-sm-12 mb-3">
                    <label for="email">email *</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email"
                        value="email_<?=rand(100, 500); ?>@site.com"
                        required>
                </div>

                <div class="col-md-6 col-sm-12 mb-3">
                    <label for="password">password *</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="password"
                        value="power@123"
                        required>
                </div>

                <div class="col-md-6 col-sm-12 my-3">
                    <button type="submit" class="btn btn-outline-success">Cadastrar</button>
                </div>

            </form>
        </div>
    </div>
</div>
