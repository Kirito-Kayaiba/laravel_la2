
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tin Mới Nhất</h1>
@php
foreach ($data as $tin) {
    echo "<p>{$tin->tieude} - {$tin->ngay}</p>";
}
@endphp
</body>
</html>