<?php 

require_once BASE_DIR . "/views/_includes/header.php"; 

?>

<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-md-10 mt-5">
            <h3>Lista de Usuários</h3>           
        </div>
        <div class="col-12 col-md-10">
        <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>User 1</td>
                <td><a href="/users/show">Show</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>User 2</td>
                <td><a href="/users/show">Show</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>User 3</td>
                <td><a href="<?=assets('users/show?id=3') ?>">Show</a></td>
            </tr>
        </tbody>
    </table>
        </div>
    </div>
</div>
   

