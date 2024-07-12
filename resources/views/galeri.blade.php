<!DOCTYPE html>
<html>
<head>
    <title>Galeri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
       .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
       .header h1 {
            margin: 0;
        }
       .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
       .gallery-item {
            margin: 20px;
            width: 250px;
            height: 250px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
       .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
       .gallery-item:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Galeri</h1>
    </header>
    <div class="gallery">
        <div class="gallery-item">
            <img src="https://via.placeholder.com/250x250" alt="Gambar 1">
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/250x250" alt="Gambar 2">
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/250x250" alt="Gambar 3">
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/250x250" alt="Gambar 4">
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/250x250" alt="Gambar 5">
        </div>
        <!-- Tambahkan gambar lainnya disini -->
    </div>
</body>
</html>
