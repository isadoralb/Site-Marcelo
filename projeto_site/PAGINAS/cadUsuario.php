<?php
    require ("../TEMPLATES/header.php");
?>
<h1>Cadastro de Usuário</h1>

<form action="" method="POST">
    <fieldset>
    <label for = "email">Email: </label>
    <input type="email"  name= "email">
    <br>
    <label for="nome">Nome: </label>
    <input type="text" name= "nome">
    <br>
    <label for="fone">Fone: </label>
    <input type="text" namw= "fone">
    <br>
    <label for="senha">Senha: </label>
    <input type="password" name= "senha">
    <br>
    <input type="checkbox" name= "administrador">
    <label for="administrador">Administrador</label>
    </fieldset>

    <fieldset>
    <input type="submit" value= "salvar">
    <input type="reset" value= "limpar">
    </fieldset>
   
</form>

<?php
    require ("../TEMPLATES/footer.php");
?>