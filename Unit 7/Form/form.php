<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>From</title>
</head>
<body>
    <form action="">
        <h1>Elementos de tipo INPUT</h1>
        <h2>TEXT</h2>
        <p>Introduzca la cadena a buscar:</p><input type="text">
        <h2>RADIO</h2>
        <p>Sexo:</p><input type="radio" name="gender">Mujer <input type="radio" name="gender">Hombre
        <h2>CHECKBOX</h2>
        <p>Extras:</p><input type="checkbox" name="extra" id="">Garaje <input type="checkbox" name="extra" id="">Piscina <input type="checkbox" name="extra" id="">Jardín
        <h2>FILE</h2>
        <p>Fichero:</p><input type="file" name="" id="">
        <h2>HIDDEN</h2>
        <input type="hidden" name="">
        <h2>PASSWORD</h2>
        <p>Contraseña:</p><input type="password" name="pass" id="">
        
        <hr>

        <h1>Elementos de tipo SELECT</h1>
        <h2>SELECT SIMPLE</h2>
        <p>Color:</p>
        <select name="selectSimple" id="">
            <option value="value1">Rojo</option>
            <option value="value2">Amarillo</option>
            <option value="value3" selected>Morado</option>
        </select>
        <h2>SELECT MÚLTIPLE</h2>
        <p>Idiomas:</p>
        <select name="selectMultiple" id="" multiple>
            <option value="option1">Inglés</option>
            <option value="option2">Español</option>
            <option value="option3">Francés</option>
        </select>

        <hr>

        <h1>Elemento de tipo TEXTAREA</h1>
        <p>Comentario:</p><textarea name="textArea" id="" cols="30" rows="10"></textarea>

        <hr>
        <input type="submit" value="Enviar Datos"> <input type="reset" value="Borrar Datos">
    </form>
</body>
</html>