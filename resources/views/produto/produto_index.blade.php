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
    <th>Id</th>
    <th>Nome</th>
    <th>Quantidade</th>
    <th>Valor</th>

  </tr>
  @foreach ($produtos as $value )

    <td></td>
    <td></td>
    <td></td>
    <td></td>

  @endforeach
  <

</table>

</body>
</html>