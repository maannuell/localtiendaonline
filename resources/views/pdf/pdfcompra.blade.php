<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<h1>Cliente: {{$user->name}}</h1>
<h2>En triple "B"</h2>
<h3>Fecha: {{$generales->fecha}}</h3>
<h3>Direccion Envio: {{$generales->direnvio}}</h3><h3>Ciudad: {{$generales->ciudadnombre}}</h3>
<h3>Paqueteria: {{$generales->nombrepaquete}}</h3>
<table>
  <tr>
    <th>id_orden</th>
    <th>Nombre</th>
    <th>Precio Uni</th>
    <th>Cantidad</th>
    <th>Subtotal</th>
  </tr>
  @foreach($detalle As $d)
  <tr>
    <td>{{$d->id_orden}}</td>
    <td>{{$d->nombre}}</td>
    <td>{{number_format($d->preciouni, 2, '.', ',' )}}</td>
    <td>{{$d->cantidad}}</td>
    <td>{{number_format($d->preciouni*$d->cantidad, 2, '.', ',' )}}</td>
  </tr>
  @endforeach

  
  
</table>
<hr>
<br>
				<label>Total:${{number_format($sumtotal->sumtotal, 2, '.', ',')}}</label>

</body>


</html>





