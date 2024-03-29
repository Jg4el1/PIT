<?php
session_start();
include "../Components/conexao.php";
include 'header.php';
ini_set('default_charset', 'utf-8');
if (isset($_SESSION['usuario_id'])) {
    header('Location: home.php');
}
if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $complemento = $_POST['complemento'];

    $sql = "INSERT INTO usuario(nome,senha,email,telefone,sexo,cpf,data_nasc) VALUES('$nome','$senha','$email','$telefone','$sexo','$cpf','$data_nasc')";
    mysqli_query($conn, $sql);

    $sql = "INSERT INTO endereco(cidade,rua,estado,bairro,complemento) VALUES ('$cidade', '$rua','$estado','$bairro', '$complemento')";
    mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<div class="box2">

    <form action="#" method="POST" class="form">
        <h1 class="titulo2"> Cadastro </h1>
        <div class="inputBox">
            <label for="nome" class="labelInput">Nome completo:</label> <br>
            <input type="text" name="nome" id="nome" class="inputUser" required>
        </div>
        <br>
        <div class="inputBox">
            <label for="senha" class="labelInput">Senha:</label> <br>
            <input type="text" name="senha" id="senha" class="inputUser" required>
        </div>
        <br>
        <div class="inputBox">
            <label for="email" class="labelInput">Email:</label> <br>
            <input type="text" name="email" id="email" class="inputUser" required>
        </div>
        <br>
        <div class="inputBox">
            <label for="cpf" class="labelInput">CPF:</label> <br>
            <input type="text" maxlength="14" name="cpf" id="cpf" class="inputUser" required oninput=mascara_cpf()>
        </div>
        <br>
        <div class="inputBox">
            <label for="telefone" class="labelInput">Telefone:</label> <br>
            <input type="tel" maxlength="15" name="telefone" id="telefone" class="inputUser" required
                oninput=mascara_telefone()>
        </div>
        <div class="inputbox">
            <p class="labelInput">Sexo:</p>
            <input type="radio" id="feminino" name="genero" value="feminino" required autocomplete="off">
            <label for="feminino" class="labelInput">Feminino</label>
            <br>
            <input type="radio" id="masculino" name="genero" value="masculino" required autocomplete="off">
            <label for="masculino" class="labelInput">Masculino</label>
            <br>
            <input type="radio" id="outro" name="genero" value="outro" required autocomplete="off">
            <label for="outro" class="labelInput">Outro</label>
            <br><br>
        </div>
        <div class="datanasc"> <label for="data_nascimento"><b class="labelInput">Data de Nascimento:</b></label>
            <input type="date" name="data_nascimento" id="data_nascimento" required>
            <br><br>
        </div>
        <div class="inputBox">
            <label for="cidade" class="labelInput" id="end">Cidade:</label> <br>
            <input type="text" name="cidade" id="cidade" class="inputUser" required>
        </div>
        <br>
        <div class="inputBox">
            <label for="estado" class="labelInput" id="end">Estado:</label> <br>
            <input type="text" name="estado" id="estado" class="inputUser" required>
        </div>
        <br>
        <div class="inputBox">
            <label for="estado" class="labelInput">Rua:</label> <br>
            <input type="text" name="rua" id="rua" class="inputUser" required autocomplete="off">
        </div>
        <br><br>
        <div class="inputBox">
            <label for="bairro" class="labelInput">Bairro:</label> <br>
            <input type="text" name="bairro" id="bairro" class="inputUser" required autocomplete="off">
        </div>
        <br><br>
        <div class="inputBox">
            <label for="complemento" class="labelInput">Complemento:</label> <br>
            <input type="text" name="complemento" id="complemento" class="inputUser" required autocomplete="off">
        </div>
        <br> <br>
        <input type="submit" name="submit" id="submit" value="ENVIAR">
    </form>
    <a href="login.php">
        <div class="icone2"> <img src="../img/profileicon.png" alt="" width="300px" id="iconeperfil"> <br> <a
                class="titulo2" href="login.php"> Já é cadastrado? </a> <a class="texto3" href="login.php">
                Clique aqui para entrar </a> </div>
    </a>
</div>
<?php
include 'footer.php';
?>
<script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>
<script src="../Components/script.js"> </script>
</body>

</html>