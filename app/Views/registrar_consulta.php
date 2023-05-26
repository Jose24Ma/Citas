<!DOCTYPE html>
<html>
<head>
    <title>Registro de Consulta General</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Registro de Consulta General</h1>

        <form class="mt-4">
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="hora">Hora:</label>
                <input type="time" name="hora" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="medico">Médico:</label>
                <input type="text" name="medico" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="paciente">Paciente:</label>
                <input type="text" name="paciente" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="sintomas">Síntomas:</label>
                <textarea name="sintomas" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="recomendaciones">Recomendaciones:</label>
                <textarea name="recomendaciones" class="form-control" required></textarea>
            </div>

            <input type="submit" value="Registrar" class="btn btn-primary">
        </form>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>
</body>
</html>
