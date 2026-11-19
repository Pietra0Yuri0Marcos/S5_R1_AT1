<?php
require_once __DIR__ . '/../repositories/PersonagemRepository.php';

$repo = new PersonagemRepository();
$persoagens = $repo->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Persoagens & OCs</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif; margin: 40px; 
        }
        nav a{
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }
        table{
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td{
            border: 1px solid #ccc;
            padding: 8px;
        }
        th{
            background: #eee;
        }
    </style>
</head>
<body>
    <h1>Sistema de Cadastro de Personagens</h1>
    <nav>
        <a href="index.php">Lista de Personagens📜</a>
        <a href="criar.php">Novo Personagem➕</a>
    </nav>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Gênero</th>
            <th>Personalidade</th>
            <th>Obra</th>
        </tr>
        <?php foreach ($persoagens as $c): ?>
    	<tr>
        	<td><?= $c['id'] ?></td>
        	<td><?= $c['nome'] ?></td>
        	<td><?= $c['idade'] ?></td>
        	<td><?= $c['genero'] ?></td>
            <td><?= $c['personalidade'] ?></td>
            <td><?= $c['obra'] ?></td>
        	<td>
            	<a href="editar.php?id=<?= $c['id'] ?>"> Editar</a> |
            	<a href="excluir.php?id=<?= $c['id'] ?>"
               	onclick="return confirm('Deseja excluir?')"> Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>