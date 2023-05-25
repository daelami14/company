<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<h3>Edit Company</h3>

<a href="/"> Kembali</a>

<br/>
<br/>

@foreach($data as $p)
    <form action="/company/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->company_code_1 }}"> <br/>
        Nama <input type="text" required="required" name="company_name" value="{{ $p->company_name }}"> <br/>
        <input type="submit" value="Simpan Data">
    </form>
@endforeach



</body>
</html>
