<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <nav class="bg-blue-300 flex justify-center flex-wrap h-16 gap-6 text-black font-medium">
        <a class="hover:text-white" href="/">Home</a>
        <a class="hover:text-white" href="https://google.com" target="_blank" rel="noopener noreferrer">Google</a>
    </nav>
    <div>
      <ul class="divide-y divide-gray-200">
        <li class="flex gap-6 p-4">
          <span class="font-medium text-gray-800">Current Temperature:</span>
          <span class="text-gray-600">{{$current->temperature_2m}}°C</span>
        </li>
        <li class="flex gap-6 p-4">
          <span class="font-medium text-gray-800">Current Condition</span>
          <span class="text-gray-600">☀️</span>
        </li>
        <li class="flex gap-6 p-4">
          <span class="font-medium text-gray-800">Humidity:</span>
          <span class="text-gray-600">{{$current->relative_humidity_2m}}</span>
        </li>
        <li class="flex gap-6 p-4">
          <span class="font-medium text-gray-800">Wind Speed:</span>
          <span class="text-gray-600">{{$current->wind_speed_10m}}km/h</span>
        </li>
      </ul>
    </div>
</body>
<footer class="flex flex-col space-y-10 justify-center m-10 bg-blue-300">

    <nav class="flex justify-center flex-wrap gap-6 text-black font-medium">
        <a class="hover:text-white" href="/">Home</a>
        <a class="hover:text-white" href="https://google.com">Google</a>
    </nav>

    <div class="flex justify-center space-x-5">
        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer">
            <img src="https://img.icons8.com/fluent/30/000000/facebook-new.png" />
        </a>
        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer">
            <img src="https://img.icons8.com/fluent/30/000000/linkedin-2.png" />
        </a>
        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">
            <img src="https://img.icons8.com/fluent/30/000000/instagram-new.png" />
        </a>
        <a href="https://messenger.com" target="_blank" rel="noopener noreferrer">
            <img src="https://img.icons8.com/fluent/30/000000/facebook-messenger--v2.png" />
        </a>
        <a href="https://twitter.com" target="_blank" rel="noopener noreferrer">
            <img src="https://img.icons8.com/fluent/30/000000/twitter.png" />
        </a>
    </div>
    <p class="text-center text-black font-medium">&copy; 2025 Weather Dashboard</p>
</footer>
</html>
