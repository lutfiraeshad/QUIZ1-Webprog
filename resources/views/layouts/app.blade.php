<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduFun - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling untuk Navbar */
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .navbar-nav .nav-item {
            margin-right: 15px; /* Sesuaikan nilai margin */
        }

        
        /* Dropdown pada Category */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 200px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }
        .dropdown-content a {
            color: black;
            padding: 10px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        .nav-item.dropdown:hover .dropdown-content {
            display: block;
        }

        /* Banner styling */
        .banner {
            background-image: url('/path/to/your/banner-image.jpg'); /* Ganti dengan path gambar Anda */
            background-size: cover;
            background-position: center;
            height: 300px;
            position: relative;
            color: #fff;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Artikel dan read more button */
        .article-thumbnail {
            display: flex;
            padding: 20px;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
        }
        .article-thumbnail img {
            width: 150px;
            height: 100px;
            margin-right: 20px;
        }
        .article-info {
            flex: 1;
        }
        .footer {
            background-color: #1a1a40;
            color: #fff;
            text-align: center;
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">EduFun</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <!-- Tambahkan kelas ms-auto di sini -->
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="categoryDropdown">Category</a>
                    <div class="dropdown-content">
                        <a href="/category/interactive-multimedia">Interactive Multimedia</a>
                        <a href="/category/software-engineering">Software Engineering</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="/writers">Writers</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="/popular">Popular</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Banner -->
<div class="banner">
    <h1>Welcome to EduFun</h1>
</div>

<!-- Article Section -->
<div class="container mt-4">
    <div class="article-thumbnail">
        <img src="/path/to/article-thumbnail.jpg" alt="Thumbnail">
        <div class="article-info">
            <h5>Judul Artikel</h5>
            <p class="text-muted">Tanggal Publish | Nama Dosen</p>
            <p>Deskripsi singkat dari artikel yang tersedia...</p>
            <a href="/article/1" class="btn btn-primary">Read more...</a>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    © EduFun 2024 | Web Programming | Lutfi Raeshad Wijayanto | 2602194190
</div>

</body>
</html>