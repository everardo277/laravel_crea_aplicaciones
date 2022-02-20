<center>
<h1>Pagina de recetas.com</h1>

<h2>Comida principal</h2>

@foreach($recetas as $receta )
    <li>{{$receta}}</li>
@endforeach

<h2>Categorias</h2>

@foreach($categorias as $categoria)

<li>{{$categoria}}</li>
    
@endforeach

</center>