<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Laravel Starter</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <h1>Weather Dashboard</h1>
    <p>This is a starting point for your assignment.</p>
    <div>
        <p>Current Temperature: <span>{{$current->temperature_2m}}</span></p>
        <p>Current Condition: Sunny</p>
    </div>
    <div>
        <h2>Additional Details</h2>
        <p>Humidity: <span>{{$current->relative_humidity_2m}}</span></p>
        <p>Wind Speed: <span>{{$current->wind_speed_10m}}</span></p>
    </div>
</body>
</html>
