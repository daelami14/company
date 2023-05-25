<!DOCTYPE html>
<html>
<head>
</head>
<body>


<h3>Data Company</h3>

<a href="/"> Kembali</a>

<br/>
<br/>

<form action="/company/store" method="post">
    {{ csrf_field() }}
    Company Code 1 <input type="text" name="company_code_1" required="required"> <br/>
    Company Name <input type="text" name="company_name" required="required"> <br/> <br/>
    <input type="submit" value="Save Data">
</form>

</body>
</html>
