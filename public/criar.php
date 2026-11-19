<?php
require_once __DIR__ . '/../repositories/PersonagemRepository.php';

if($_POST){
    $personagem = new Personagem(
        $_POST['nome'],
        $_POST['idade'],
        $_POST['genero'],
        $_POST['personalidade'],
        $_POST['obra']
    );
    (new PersonagemRepository())->criar($personagem);
    header("Location: index.php");
}
?>
<form action="" method="post">
    <input type="text" name="nome" id="nome" placeholder="Nome" required><br>
    <input type="number" name="idade" id="idade" placeholder="Idade" required><br>
    <input type="text" name="genero" id="genero" placeholder="Gênero(personagem)" required><br>
    <input type="text" name="personalidade" id="personalidade" placeholder="Personalidade" required><br>
    <input type="text" name="obra" id="obra" placeholder="Obra" required><br>
    <button>Enviar</button>
</form>