<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="bg-gray-100">
    <header class="bg-gray-200 p-4 text-center">
        <h1 class="text-2xl font-bold">Awesome product store</h1>
    </header>
    <div class="container mx-auto p-4">
        {{ $slot }}
    </div>
    <footer class="bg-gray-200 p-4 text-center fixed bottom-0 w-full">
        <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
    </footer>
</body>

</html>
