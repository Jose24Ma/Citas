<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Iniciar Sesión</h1>

        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

        <?php if (isset($error)) { ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php } ?>

        <?php echo form_open('usuarios/login', 'class="mt-4"'); ?>
            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" name="correo" class="form-control" value="<?php echo set_value('correo'); ?>" required>
            </div>

            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena" class="form-control" required>
            </div>

            <input type="submit" value="Iniciar Sesión" class="btn btn-primary">
        <?php echo form_close(); ?>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>
</body>
</html>
