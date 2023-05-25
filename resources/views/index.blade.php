<!DOCTYPE html>
<html>
<head>
</head>
<body>
<a href="/company/tambah"> + Tambah Company Baru</a>
<table border="1">
    <tr>
        <th>Company Code</th>
        <th>Company Name</th>
{{--        <th>Company Code 2</th>--}}
{{--        <th>Company Name 2</th>--}}
        <th>Opsi</th>
    </tr>

    @foreach($data as $p)

        <tr>
            <td>{{ $p->company_code_1 }}</td>
            <td>{{ $p->company_name}}</td>
{{--            <td>{{ $p->company_code_2 }}</td>--}}
{{--            <td>{{ $p->company_name_2 }}</td>--}}
            <td><a href="/company/edit/{{ $p->company_code_1 }}">Edit</a>
                |
                <a href="/company/hapus/{{ $p->company_code_1 }}">Hapus</a></td>

        </tr>
    @endforeach
</table>


</body>
</html>
