<!DOCTYPE html>
<html>
<head>
    <title>Informasi</title>
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
       .info-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
       .info-section {
            margin-bottom: 20px;
        }
       .info-section h2 {
            margin-top: 0;
        }
       .info-section p {
            margin-bottom: 10px;
        }
       .info-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
       .info-section ul li {
            margin-bottom: 10px;
        }
       .info-section ul li::before {
            content: "\2022";
            margin-right: 10px;
            color: #337ab7;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Informasi</h1>
    </header>
    <div class="info-container">
        <div class="info-section">
            <h2>Tentang Kami</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
        </div>
        <div class="info-section">
            <h2>Visi dan Misi</h2>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
            </ul>
        </div>
        <div class="info-section">
            <h2>Kontak Kami</h2>
            <p>Alamat: Jalan Lorem Ipsum, No. 123, Kota Lorem</p>
            <p>Telepon: 012 345 6789</p>
            <p>Email: [info@example.com](mailto:info@example.com)</p>
        </div>
        <!-- Tambahkan informasi lainnya disini -->
    </div>
</body>
</html>
