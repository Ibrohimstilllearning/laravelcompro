<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    @yield('content')
<script>
        // Inisialisasi AOS
        document.addEventListener('DOMContentLoaded', function () {
            AOS.init({
                duration: 1000, // durasi animasi
                once: true,     // animasi hanya sekali
                easing: 'ease-in-out', // efek easing
            });
        });
    </script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>