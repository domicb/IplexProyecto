<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tu cuenta</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Assets/css/Aspecto.css">

    </head>
    <body>
    <center>
        <img src="<?= base_url() ?>Assets/logo.png" alt="" class="img-responsive" class="img-thumbnail">
        <br></center>
    <br>
    <div class="row">
        <div class="panel panel-default">

            <div class="panel-heading">DATOS DE USUARIOS</div>
            <div class="panel-body">
                <p>...</p>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><i class="fa fa-building"></i> Column name</th>
                            <th><i class="fa fa-calendar"></i> Column name</th>
                            <th><i class="glyphicon glyphicon-send"></i> Column name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="success">
                            <td><img src="<?= base_url() ?>Assets/images/male.png" alt="" width="20"></td>
                            <td>Value 2</td>
                            <td>Value 3</td>
                        </tr>
                        <tr class="warning">
                            <td><span class="label label-success">Approved </span></td>
                            <td>Value 2</td>
                            <td>Value 3</td>
                        </tr>
                        <tr class="danger">
                            <td>Value 1</td>
                            <td>Value 2</td>
                            <td>Value 3</td>
                        </tr>
                        <tr class="info">
                            <td>Value 1</td>
                            <td>Value 2</td>
                            <td><a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit white"></i> Edit </a></td>
                        </tr>
                        <tr class="active">
                            <td>Value 1</td>
                            <td>Value 2</td>
                            <td>Value 3</td>
                        </tr>
                        <tr>
                            <td>Value 1</td>
                            <td>Value 2</td>
                            <td>Value 3</td>
                        </tr>
                    </tbody>
                </table>
              <div class="panel-footer">Cerrar sesión - Solicitar acumulado - Contactar con el administrador</div>
            </div>
        </div>
    </div>   

    <script type="text/javascript" src="<?= base_url() ?>Assets/js/jquery2.min.js"></script>
</script>
</body>
</html>
