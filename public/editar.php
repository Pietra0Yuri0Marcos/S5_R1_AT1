<?php
require_once __DIR__ . '/../repositories/PersonagemRepository.php';

$repo = new PersonagemRepository();

if($_POST){
    $personagem = new Personagem($_POST['nome'], $_POST['idade'], $_POST['genero'], $_POST['personalidade'],  $_POST['obra']);

    $repo->atualizar($_POST['id'], $personagem);
    header("Location: index.php");
    exit();
}

$personagem = $repo->buscarPorId($_GET['id']);
?>
<form action="" method="post">
    <input type="hidden" name="id" value="<?=  $personagem['id'] ?>">
    <input type="text" name="nome" id="nome" value="<?= $personagem['nome'] ?>">
    <input type="number" name="idade" id="idade" value="<?= $personagem['idade'] ?>">
    <input type="text" name="genero" id="genero" value="<?= $personagem['genero'] ?>">
    <input type="text" name="personalidade" id="personalidade" value="<?= $personagem['personalidade'] ?>">
    <input type="text" name="obra" id="obra" value="<?= $personagem['obra'] ?>">
    <button>Atualizar</button>
</form>