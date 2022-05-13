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
    <link rel="shortcut icon" href="../resources/favicon.png" type="image/x-icon">
    <title>app-mvc-crud</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>

</head>
<body>
    
    <div class="conteiner">
        <h2 class="py-5 text-center">Novo Usuario</h2>

        <form action="" method="post">
            <div class="row g-3">

                <div class="col-md-6">
                    <label for="name" class="form-label">Nome <i class="bi bi-person"></i></label>
                    <input type="text" class="form-control" name="name" require autofocus>
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail <i class="bi bi-envelope"></i></label>
                    <input type="email" class="form-control" name="email" require autofocus>
                </div>

                <div class="col-md-4">
                    <label for="cpf" class="form-label">CPF <i class="bi bi-credit-card-2-front"></i></label>
                    <input type="text" class="form-control" name="cpf" require autofocus>
                </div>

                <div class="col-md-4">
                    <label for="birt" class="form-label">DT. de Nascimento <i class="bi bi-calendar"></i></label>
                    <input type="date" class="form-control" name="birt" require autofocus>
                </div>

                <div class="col-md-4">
                    <label for="phone" class="form-label">Telefone <i class="bi bi-whatsapp"></i></label>
                    <input type="text" class="form-control" name="phone" require autofocus>
                </div>

                <div class="col-md-12">
                    <label for="address" class="form-label">Endereço <i class="bi bi-map"></i></label>
                    <input type="text" class="form-control" name="address" require autofocus>
                </div>

            </div>
        </form>
    </div>

</body>
</html>