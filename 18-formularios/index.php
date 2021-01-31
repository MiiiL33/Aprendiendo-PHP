<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre: </label>
            <p><input type="text" name="nombre"/><br></p>
            
            <label for="apellido">Apellido: </label>
            <p><input type="text" name="apellido"/><br></p>
            
            <hr><label for="boton">Botón: </label>
            <p><input type="button" name="boton" value="clickeame"/><br></p>
            
            <hr><label for="sexo">Sexo: </label>
            <p>
                Hombre <input type="checkbox" name="sexo" value="hombre"/>
                Mujer <input type="checkbox" name="sexo" value="mujer" checked="checked"/>
            </p>
            
            <hr><label for="color">Color: </label>
            <p><input type="color" name="color"/><br></p>
            
            <hr><label for="fecha">Fecha: </label>
            <p><input type="date" name="fecha"/><br></p>
            
            <hr><label for="correo">Email: </label>
            <p><input type="email" name="correo"/><br></p>
            
            <hr><label for="archivo">Archivo: </label>
            <p><input type="file" name="archivo" multiple="multiple"/><br></p>
            
            <hr><label for="archivo">Archivo: </label>
            <p><input type="hidden" name="archivo" multiple="multiple"/><br></p>
            
            <hr><label for="numero">Numero: </label>
            <p><input type="number" name="numero"/><br></p>
            
            <hr><label for="pass">Contraseña: </label>
            <p><input type="password" name="pass"/><br></p>
            
            <hr><label for="continente">Continente: </label>
            <p>
                America: <input type="radio" name="continente" value="America"/>
                Europa: <input type="radio" name="continente" value="Europa"/>
                Asia: <input type="radio" name="continente" value="Asia"/>
            </p>
            
            <hr><label for="web">Página web: </label>
            <p><input type="url" name="web"/><br></p>
            
            <hr>Textarea:<br><textarea></textarea><hr>
            
            Bandas:
            <select name="Bandas">
                <option value="TesseracT">TesseracT</option>
                <option value="System of a Down">System of a Down</option>
                <option value="Tool">Tool</option>
                <option value="Periphery">Periphery</option>
                
            </select>
            
            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>

