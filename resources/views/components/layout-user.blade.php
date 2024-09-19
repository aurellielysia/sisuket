<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

  
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400&display=swap" rel="stylesheet">


   
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
    <x-navbar-user />
    <x-sidebar-user />

    
    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg mt-14">
            {{$slot}}
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>
