<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .profile-container {
            max-width: 800px;
            margin: 85px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            line-height: 1.6;
            align-items: center; /* Mengatur konten vertikal di tengah */
            background-image: linear-gradient(to right, #0072ff, #44d6ffe9);
            color: white; /* Warna teks di atas gradasi */
            
        }

        h1 {
            margin: 0;
        }

        .profile-image {
            flex: 1; /* Mengisi ruang yang tersedia */
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
        }

        .profile-details {
            flex: 2; /* Mengisi ruang yang tersedia */
            padding-left: 20px; /* Spasi antara gambar dan teks */
        }

        h2 {
            margin-top: 0;
        }

        p {
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
   
</head>
<body>
    <div class="profile-container">
        <div class="profile-details">
            <script>
                var nama = "Bima Prasetiya";
                var gender = "Laki-laki";
                var umur = "22";
                var nohp = "+6281230606348";
                var alamat = "Jln. Cibareno, Kepanjenkidul, Blitar, Jawa Timur";
                var keahlian = "FullStack Developer";
                var email = "bimaprasetiya249@gmail.com"
                
                document.write("<h1>" + nama + "</h1><br>");
                document.write("<h3>" + keahlian + "</h3><br>");
                document.write("Gender   : " + gender + "<br>");
                document.write("Umuer : " + umur + "<br>");
                document.write("Email : " + email + "<br>");
                document.write("Kontak : " + nohp + "<br>");
                document.write("Alamat : " + alamat + "<br>");
            </script>
        </div>
        <div class="profile-image">
            <img src="kamen.webp" alt="Foto Profil">
        </div>
    </div>
    <div class="container">
        <p>
            
            Salam! Saya adalah seorang Fullstack Developer dengan hasrat besar dalam menciptakan solusi teknologi yang inovatif dan bermanfaat. Saya memiliki latar belakang yang kuat dalam pengembangan perangkat lunak, serta pengetahuan mendalam tentang pengembangan web, aplikasi, dan database.
        </p>
            
        <p> 
            Sebagai seorang Fullstack Developer, saya memiliki keahlian yang komprehensif dalam pengembangan perangkat lunak, meliputi pengembangan frontend dengan penguasaan bahasa pemrograman dan kerangka kerja seperti HTML, CSS, dan JavaScript untuk menciptakan antarmuka pengguna yang responsif dan menarik. Di sisi backend, saya memiliki keahlian dalam bahasa pemrograman seperti Framework Laravel untuk membangun server dan aplikasi yang handal. Selain itu, saya memiliki pengetahuan dalam merancang, mengelola, dan mengoptimasi basis data, termasuk pengalaman dalam bekerja dengan database SQL dan NoSQL seperti MySQL dan MongoDB.
        </p> 
        <p>  
            Saya percaya bahwa pengembangan perangkat lunak adalah kombinasi antara kreativitas dan ketelitian. Saya senang bekerja dalam tim kolaboratif dan merancang solusi yang tidak hanya memenuhi kebutuhan pelanggan, tetapi juga meningkatkan pengalaman pengguna.
        </p>            
    </div>
</body>
</html>
