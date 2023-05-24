<!DOCTYPE html>
<html>
<head>
</head>
<body>

<table border="1">
    <tr>
        <th>Company Code 1</th>
        <th>Company Name 1</th>
        <th>Company Code 2</th>
        <th>Company Name 2</th>
    </tr>

    @foreach($pegawai as $p)

        <tr>
            <td>{{ $p->company_code_1 }}</td>
            <td>{{ $p->company_name_1 }}</td>
            <td>{{ $p->company_code_2 }}</td>
            <td>{{ $p->company_name_2 }}</td>
        </tr>
    @endforeach
</table>


</body>
</html>
