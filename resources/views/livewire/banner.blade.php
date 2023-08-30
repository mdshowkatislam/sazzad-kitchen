<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Banners</title>
</head>

@php
$x=$banner->all();
@endphp

<body>
	@foreach ($x as $y)

	<img src="{{ $y['gallery'] }}" alt="Girl in a jacket" width="300" height="260">




	@endforeach



</body>

</html>