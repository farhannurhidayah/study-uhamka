<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" class="table table-hover">
        <tr>
            <th>idbuku</th>
            <th>NamaBuku</th>
            <th>NamePengarang</th>
            <th>kategori</th>
            <th>Qty</th>
            <th>Cover</th>
        </tr>
        @foreach($buku as $b)
        <tr>
            <td>{{ $b->idbuku }}</td>
            <td>{{ $b->NamaBuku }}</td>
            <td>{{ $b->NamaPengarang }}</td>
            <td>{{ $b->Kategori }}</td>
            <td>{{ $b->qty }}</td>
            <td><image src="{{ Storage::url($b->Image) }} " width="150" height="200"></td>
        </tr>
        @endforeach
    </table>
</body>
</html>