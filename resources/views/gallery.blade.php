<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Galería de Arte Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
<div class="max-w-4_xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Nuestra Exposición Digital</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($artworks as $artwork)
            <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-indigo-500">
                <h2 class="text-xl font-semibold text-indigo-700">{{ $artwork->title }}</h2>
                <p class="text-gray-600 italic">{{ $artwork->technique }}</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-sm font-medium text-gray-500">Autor: {{ $artwork->artist->name }}</span>
                    <span class="text-lg font-bold text-green-600">{{ number_format($artwork->price, 2) }}€</span>
                </div>
            </div>
        @endforeach
    </div>

    <footer class="mt-12 text-center text-gray-400 text-sm">
        <p>Segunda Evaluación Joseph.</p>
    </footer>
</div>
</body>
</html>
