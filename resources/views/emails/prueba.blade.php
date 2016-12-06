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
<h1>Estimado {{$user->name}}</h1>
<h2>En triple "B" Le Compartimos el Detalle de Su Compra</h2>
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
				<td>Total:${{number_format($sumtotal->sumtotal, 2, '.', ',')}}</td>

</body>
<hr>
<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2016 <a href="http://itculiacan.edu.mx">Proyecto Integrador</a>.</strong> All rights reserved.
      </footer>
</html>





