
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="/IletisimEkle" enctype="multipart/form-data">
    @csrf
    <input type="text" name="isim"/>
    <input type="text" name="soyisim"/>
    <input type="file" name="resim"/>
    <button type="submit">kaydet</button>
</form>
</body>
</html>

