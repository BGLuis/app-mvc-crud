<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="resources/favicon.png" type="image/x-icon">
    <title>app-mvc-crud</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>

</head>
<body>
    
    <div class="conteiner">
        <h2 class="text-center">Lista de Usuários <i class="bi bi-people-fill"></i></h2>

        <h5 class="text-end">
            <a href="view/page_registre.php" class="btn btn-primary btn-xs">
                <i class="bi bi-person-plus-fill"></i>
            </a>
        </h5>
    </div>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="thead">
                <tr>
                    <td>ID</td>
                    <td>NOME</td>
                    <td>E-MAIL</td>
                    <td>CPF</td>
                    <td>DT. DE NACIMENTO</td>
                    <td>ENDEREÇO</td>
                    <td>TELEFONE</td>
                    <td colspan="3">AÇÕES</td>
                </tr>
            </thead>
            <tbody>
                <td>1</td>
                <td>Maria Fernada</td>
                <td>mariafernada@gmail.com</td>
                <td>333.444.555-33</td>
                <td>11/10/2003</td>
                <td>Av. Santos da Silva</td>
                <td>(31) 2232-33232</td>
                <td>
                    <form action="" method="post">
                        <button class="btn btn-warning btn-xs">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                    </form>
                </td>
                <td>
                    <form action="" method="post" onclick="return confirm('Tem certeza que deseja excluir?')">
                        <button class="btn btn-danger btn-xs">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </td>
            </tbody>
        </table>
    </div>

</body>
</html>