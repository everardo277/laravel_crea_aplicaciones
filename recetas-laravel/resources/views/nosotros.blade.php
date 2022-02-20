<!-- Pagina de prueba-->

@php
$saludo = "hola mundo";
$cuenta = 50;
@endphp

@if($cuenta == 50)

{{"La cuenta es 50 pesos"}}

@endif

<center>
    <h2>Nosotros desde una plantilla</h2>
    <p>{{$saludo}}</p>
    <p>este vista se invoca en el controlador receta</p>
</center>

