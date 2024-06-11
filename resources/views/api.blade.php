<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>api</title>
</head>

<body>
    <ul>
        @foreach($myapi as $api)
        <li>
            {{$api['title']}}
        </li>
        <li>
            {{$api['price']}}
        </li>
        <li>
            {{$api['category']}}
        </li>
        <br/><br/>
        @endforeach
    </ul>


</body>

</html>