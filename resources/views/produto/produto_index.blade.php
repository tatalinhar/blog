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

<h2>Listagem de produtos</h2>

<table>
  <tr>
    <th>id</th>
    <th>nome</th>
    <th>quantidade</th>
    <th>valor</th>

  </tr>
  @foreach ($produtos as $value )
  <tr>
    <td>{{ $value->id             }}</td>
    <td>{{ $value->nome           }}</td>
    <td>{{ $value->quantidade     }}</td>
    <td>{{ $value->valor            }}</td>


  </tr>
  @endforeach


</table>

</body>
</html>