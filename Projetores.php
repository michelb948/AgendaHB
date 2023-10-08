<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetores/Datashow</title>
    <link rel="stylesheet" href="Reservas.php">
    <link rel="stylesheet" href="Projetores.php">
</head>
<body>

    

    <div style="text-align: center;" class="div1">
        <form action="Reservas.php" method="POST">
            <label for="Professor(a)">Professor(a): *</label>
            <br>
            <input type="text" name="Professor(a)" id="Professor(a)" placeholder="Digite seu nome" class="Professor(a)" autocomplete="on" required>
            <br>
            <br>
            <label for="Aula">Aula: *</label>
            <br>
            <input type="number" name="Aula" id="Aula" placeholder="Qual(is) a(s) aula(s)" class="Aula" autocomplete="on" required>
            <br>
            <button type="submit" name="Reservar" onclick="reservarProjetor()">Reservar</button>
        </form>
    </div>
    
</body>
</html>