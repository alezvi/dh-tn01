<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'head.php' ?>

    <style type="text/css">
        .alert-danger {
            color: #ffeaec;
            background-color: #c22626;
        }
    </style>
</head>
<body>
    <?php require 'navbar.php' ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Dejanos tu consulta</h1>

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Oops!</strong> El mensaje no se puedo enviar.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <p class="alert alert-success">El mensaje ha sido enviado!</p>

                <form action="">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" type="email" placeholder="tu email">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-warning btn-lg">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php require 'scripts.php' ?>    
</body>
</html>