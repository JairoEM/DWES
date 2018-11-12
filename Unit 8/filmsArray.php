<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
        $peliculas["Acción"] = [
            "Película 1" => "La Jungla de Cristal",
            "Película 2" => "Los Vengadores: Infinity Wars",
            "Película 3" => "Gladiator"
        ];
        $peliculas["Comedia"] = [
            "Película 1" => "Deadpool",
            "Película 2" => "Shrek",
            "Película 3" => "Intocable"
        ];
        $peliculas["Fantasía"] = [
            "Película 1" => "El Hobbit",
            "Película 2" => "El Señor de los Anillos",
            "Película 3" => "Star Wars Episodio IV: La Guerra de las Galaxias"
        ];

        foreach ($peliculas as $genero => $value) {
            echo("<h1>Genero: $genero</h1>");
            foreach ($value as $keys => $values) {
                echo("Pelicula: $values <br>");
            }
        }
    ?>

</body>
</html>