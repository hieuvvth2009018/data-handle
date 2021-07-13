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

<li>name :{{$eventname}}</li>
<li>BandName :{{$bandname}}</li>
<li>Start Date :{{$startdate}}</li>
<li>end date :{{$enddate}}</li>
<li>port folio :{{$portfolio}}</li>
<li>Ticket price :{{$ticketprice}}</li>
<li>Status :
@switch($status)
    @case(1)
    dang dien ra
@break
@case(2)
sap dien ra
@break
        @case(3)
da dien ra
@break
        @case(0)
        tam hoan
@break
@endswitch
</li>
</body>
</html>
