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
<form action="/data-handle/form" method="post">
    @csrf
    <input type="text" name="eventname">
    <input type="text" name="bandname">
    <input type="text" name="stardate">
    <input type="text" name="enddate">
    <input type="text" name="portfolio">
    <input type="text" name="ticketprice">
    <input type="text" name="status">
    <button type="submit" name="submit">submit</button>
</form>

</body>
</html>
