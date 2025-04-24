<!DOCTYPE html>
<html>
<head>
    <title>Rapport des ventes</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Rapport des ventes</h1>
    <table>
        <tr>
            <th>Produit</th>
            <th>Ventes (unités)</th>
            <th>Prédiction (unités)</th>
        </tr>
        @foreach($sales as $sale)
        <tr>
            <td>{{ $sale->product_name }}</td>
            <td>{{ $sale->total_sales }}</td>
            <td>{{ $sale->predicted_sales }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>