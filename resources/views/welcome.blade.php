<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    {{-- Need to make it responsive --}}

    {{-- Navigation --}}
    <nav class="bg-blue-300 flex justify-center flex-wrap h-16 gap-6 text-black font-medium">
        <a class="hover:text-white" href="/">Home</a>
        <a class="hover:text-white" href="https://google.com" target="_blank" rel="noopener noreferrer">Google</a>
    </nav>

    @livewire('create-form')

    <div class="text-black px-6 py-4">
        <h1 class="text-2xl font-semibold text-center">Current Weather</h1>
    </div>

    {{-- Data List --}}
    <div>
      <ul class="divide-y divide-gray-200">
        <li class="flex gap-6 p-4">
          <span class="font-medium text-gray-800">Current Temperature:</span>
          <span class="text-gray-600">{{$data['temperature_2m'] ?? 'N/A'}}°C</span>
        </li>
        <li class="flex gap-6 p-4">
          <span class="font-medium text-gray-800">Current Condition</span>
          <span class="text-gray-600">☀️</span>
        </li>
        <li class="flex gap-6 p-4">
          <span class="font-medium text-gray-800">Humidity:</span>
          <span class="text-gray-600">{{$data['relative_humidity_2m'] ?? 'N/A'}}</span>
        </li>
        <li class="flex gap-6 p-4">
          <span class="font-medium text-gray-800">Wind Speed:</span>
          <span class="text-gray-600">{{$data['wind_speed_10m'] ?? 'N/A'}}km/h</span>
        </li>
      </ul>
    </div>
</body>

{{-- Footer --}}
<footer class="flex flex-col space-y-10 justify-center m-10 bg-blue-300">

    <nav class="flex justify-center flex-wrap gap-6 text-black font-medium">
        <a class="hover:text-white" href="/">Home</a>
        <a class="hover:text-white" href="https://google.com">Google</a>
    </nav>

    <div class="flex justify-center space-x-5">
        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
            <img src="https://img.icons8.com/fluent/30/000000/facebook-new.png" alt=""/>
        </a>
        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="Linkedin">
            <img src="https://img.icons8.com/fluent/30/000000/linkedin-2.png" alt=""/>
        </a>
        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
            <img src="https://img.icons8.com/fluent/30/000000/instagram-new.png" alt=""/>
        </a>
        <a href="https://messenger.com" target="_blank" rel="noopener noreferrer" aria-label="Messenger">
            <img src="https://img.icons8.com/fluent/30/000000/facebook-messenger--v2.png" alt=""/>
        </a>
        <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
            <img src="https://img.icons8.com/fluent/30/000000/twitter.png" alt=""/>
        </a>
    </div>
    <p class="text-center text-black font-medium">&copy; 2025 Weather Dashboard</p>
</footer>
</html>
