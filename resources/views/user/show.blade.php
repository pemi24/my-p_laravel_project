<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style>
    body:not(.homepage) {
      background-image: none;
    }
  </style>
</head>
<body style="background: url(/flare.jpg);">

@extends('home.homelayout')
@section('content')
 
<div class="container">
  <div class="row">
    <div style="margin-top: 180px;">
      <div style="width: 100%;">
        <div class="table-responsive">
          <table id="user-table" class="table table-bordered table-hover table-striped" style="width: 100%;">
            <tr>
              <th>N<sup>0</sup> du devis</th>
              <th>User Name</th>
              <th>Phone Number</th>
              <th>Description</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Date</th>
              <th>Email</th>
              <th>Bon De Commande</th>
            </tr>
            <tr>
              <td>{{ $user->id}}</td>
              <td>{{ $user->username }}</td>
              <td>{{ $user->phoneNumber }}</td>
              <td>{{ $user->description }}</td>
              <td>{{ $user->address }}</td>
              <td>{{ $user->price }}</td>
              <td>{{ $user->date }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->bdc }}</td>
            </tr>
          </table>
         
      </div>
    </div>
  </div>
</div>
<button class="btn btn-success" onclick="downloadTable()">Download</button>

<script src="https://cdn.jsdelivr.net/npm/file-saver@2.0.5/dist/FileSaver.min.js"></script>

<script>
  function downloadTable() {
    const table = document.getElementById("user-table").cloneNode(true);
    const actionsColumnIndex = table.rows[0].cells.length - 1; // Index of the "Actions" column

    // Remove the "Actions" column from each row
    for (let i = 0; i < table.rows.length; i++) {
      table.rows[i].deleteCell(actionsColumnIndex);
    }

    const htmlContent = `
      <html>
      <head>
        <title>User Table</title>
        <style>
          table {
            border-collapse: collapse;
          }
          th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
          }
        </style>
      </head>
      <body>
        ${table.outerHTML}
      </body>
      </html>
    `;

    const downloadLink = document.createElement('a');
    const blob = new Blob([htmlContent], { type: 'text/html' });
    const url = URL.createObjectURL(blob);

    downloadLink.href = url;
    downloadLink.download = 'user_table.html';
    downloadLink.click();

    URL.revokeObjectURL(url);
  }
</script>


@stop
</body>
</html>
