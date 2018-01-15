<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!--Datos de ruta:
- Origen: Av. de Brasil, 1, 28020 Madrid = 40.45361,-3.694235
- Destino: Calle de Orense, 30, 28020 Madrid = 40.453253, -3.694936-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario de ruta</title>
    </head>
    <body>
        <form action="MapsRequest.php" method="post">
            
            Seleccionar dispositivo:<br>
            <select name="Dispositivo">
                <option value="Dispositivo1">Dispositivo Beta</option>
            </select>
            <br><br>
            
            Datos de ruta<br>
            Origen: Av. de Brasil, 1, 28020 Madrid<br>
            <input type="text" name="Origen" value="40.45361,-3.694235" placeholder="Av. de Brasil, 1, 28020 Madrid">
            <br>
            Destino: Calle de Orense, 30, 28020 Madrid<br>
            <input type="text" name="Destino" value="40.453253, -3.694936" placeholder="Calle de Orense, 30, 28020 Madrid">
            <br><br>
            
            Datos de contacto<br>
            Nombre:<br>
            <input type="text" name="NombreUsuario" value="Carlos Aguilar" placeholder="Inserte el nombre del usuario">
            <br>
            Código de valicación:<br>
            <input type="text" name="CodigoValidacion" value="123456" placeholder="123456">
            <br><br>
            
            <input type="submit" value="Configurar">
        </form>

    </body>
</html>
