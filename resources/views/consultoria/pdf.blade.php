<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
    <thead>
        <tr style="background-color: #4A8522; color:#FFFFFF;">
            <th style=" text-align: center;"> Sexo agredido </th>
            <th style=" text-align: center;"> Nombre agresor </th>
            <th style=" text-align: center;"> Sexo agresor </th>
            <th style=" text-align: center;"> Tipo Violencia </th>
            <th style=" text-align: center;"> Institución </th>
            <th style=" text-align: center;"> Lugar </th>
            <th style=" text-align: center;"> Accion tomada </th>
            <th style=" text-align: center;"> Respuesta acción </th>
            <th style=" text-align: center;"> Temporalidad </th>
            <th style=" text-align: center;"> ¿Necesitó otro servicio? </th>
            <th style=" text-align: center;"> Detalles </th>
            <th style=" text-align: center;"> Correo </th>
        </tr>

    </thead>
    <tbody>
    @foreach($denuncias as $denuncia)
        <tr style="background-color: #DCFFE5; color:#000000;">
            <td >{{$denuncia->sexo_agredido}}</td>
            <td >{{$denuncia->nombre_agresor}}</td>
            <td >{{$denuncia->sexo_agresor}}</td>
            <td >{{$denuncia->nombre_violencia}}</td>
            <td >{{$denuncia->nombre_institucion}}</td>
            <td >{{$denuncia->lugar}}</td>
            <td >{{$denuncia->accion_tomada}}</td>
            <td >{{$denuncia->respuesta_accion}}</td>
            <td >{{$denuncia->tiempo}}</td>
            <td >{{$denuncia->otro_servicio}}</td>
            <td >{{$denuncia->detalles}}</td>
            <td >{{$denuncia->correo}}</td>
        </tr>
        @endforeach
        <tr style="background-color: #4A8522; color:#FFFFFF; font-weight: bold;">
            <td colspan="11">Total de denuncias con estos parametros</td>
            <td style="text-align: center; ">{{$denuncias_cuenta}}</td>
        </tr>
    </tbody>
</table>
</body>
</html>