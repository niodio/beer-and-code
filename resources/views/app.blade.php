<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    @routes
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <title>Beer and Code</title>

</head>

<body class="bg-gray-200 flex ">
    <div>
        @inertia
    </div>
</body>

</html>
