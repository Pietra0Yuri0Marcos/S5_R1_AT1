<?php
require_once __DIR__ . '/../repositories/PersonagemRepository.php';

(new PersonagemRepository())->excluir($_GET['id']);
header("Location: index.php");
?>