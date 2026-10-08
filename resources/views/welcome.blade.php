<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galería</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-slate-900">

    <!-- Barra de navegación -->
    <header class="bg-slate-900 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4">

            <div class="flex items-center justify-between">

                <!-- Logo -->
                <h1 class="text-2xl font-bold">
                    Galería
                </h1>

                <!-- Menú para computadora -->
                <nav class="hidden md:flex items-center gap-8">
                    <a href="#" class="hover:text-gray-300 transition">
                        Inicio
                    </a>

                    <a href="#" class="hover:text-gray-300 transition">
                        Galería
                    </a>

                    <a href="#" class="hover:text-gray-300 transition">
                        Nosotros
                    </a>

                    <a href="#" class="hover:text-gray-300 transition">
                        Contacto
                    </a>
                </nav>

                <!-- Botón para celular -->
                <button class="md:hidden text-2xl">
                    ☰
                </button>

            </div>

        </div>
    </header>


    <!-- Contenido principal -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 py-10">

        <!-- Título -->
        <h2 class="text-4xl font-bold text-center mb-10">
            Nuestra Galería
        </h2>


        <!-- Galería -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">


            <!-- Tarjeta 1 -->
            <article class="bg-white rounded-xl overflow-hidden shadow-lg">

                <img
                    src="https://images.unsplash.com/photo-1500534623283-312aade485b7"
                    alt="Paisaje Natural"
                    class="w-full h-56 object-cover"
                >

                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3">
                        Paisaje Natural
                    </h3>

                    <p class="text-slate-700">
                        Una hermosa vista de la naturaleza.
                    </p>
                </div>

            </article>


            <!-- Tarjeta 2 -->
            <article class="bg-white rounded-xl overflow-hidden shadow-lg">

                <img
                    src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b"
                    alt="Montañas"
                    class="w-full h-56 object-cover"
                >

                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3">
                        Montañas
                    </h3>

                    <p class="text-slate-700">
                        Paisajes increíbles rodeados de montañas.
                    </p>
                </div>

            </article>


            <!-- Tarjeta 3 -->
            <article class="bg-white rounded-xl overflow-hidden shadow-lg">

                <img
                    src="https://images.unsplash.com/photo-1448375240586-882707db888b"
                    alt="Bosque"
                    class="w-full h-56 object-cover"
                >

                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3">
                        Bosque
                    </h3>

                    <p class="text-slate-700">
                        Un tranquilo bosque rodeado de naturaleza.
                    </p>
                </div>

            </article>


            <!-- Tarjeta 4 -->
            <article class="bg-white rounded-xl overflow-hidden shadow-lg">

                <img
                    src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e"
                    alt="Playa"
                    class="w-full h-56 object-cover"
                >

                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3">
                        Playa
                    </h3>

                    <p class="text-slate-700">
                        Un lugar perfecto para descansar.
                    </p>
                </div>

            </article>


            <!-- Tarjeta 5 -->
            <article class="bg-white rounded-xl overflow-hidden shadow-lg">

                <img
                    src="https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b"
                    alt="Ciudad"
                    class="w-full h-56 object-cover"
                >

                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3">
                        Ciudad
                    </h3>

                    <p class="text-slate-700">
                        Arquitectura moderna en una gran ciudad.
                    </p>
                </div>

            </article>


            <!-- Tarjeta 6 -->
            <article class="bg-white rounded-xl overflow-hidden shadow-lg">

                <img
                    src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee"
                    alt="Aventura"
                    class="w-full h-56 object-cover"
                >

                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3">
                        Aventura
                    </h3>

                    <p class="text-slate-700">
                        Explora nuevos lugares y vive nuevas experiencias.
                    </p>
                </div>

            </article>


        </section>

    </main>

</body>

</html>