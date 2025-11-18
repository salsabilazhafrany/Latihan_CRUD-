<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

                <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

                @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7... (CSS Tailwind bawaan yang sangat panjang) */
                /* ... (Saya biarkan utuh) ... */
            </style>
        @endif

                <style>
            :root {
                /* Tentukan warna utama neon */
                --glow-color: #00ffff; /* Cyan Neon */
                --glow-color-accent: #f50057; /* Magenta/Pink Neon */
                --glow-border: rgba(0, 255, 255, 0.3);
            }

            /* Paksa background jadi hitam pekat (override dark:bg-[#0a0a0a]) */
            body {
                background-color: #000 !important;
            }

            /* Tombol header (Login/Register) */
            header nav a {
                color: var(--glow-color) !important;
                border-color: var(--glow-border) !important;
                text-shadow: 0 0 3px var(--glow-color);
                box-shadow: 0 0 5px var(--glow-border);
                transition: all 0.3s ease;
            }
            header nav a:hover {
                color: #000 !important;
                background-color: var(--glow-color) !important;
                border-color: var(--glow-color) !important;
            }