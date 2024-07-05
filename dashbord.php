<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-warning bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='addproduct.php';">add product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='from_html.php';">Form HTML</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='from_mahasiswa.php';">Form Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='latihan1.php';">latihan 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='latihan2.php';">latihan 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='quiss.php';">Quiz</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar and Content -->
    <div class="d-flex">
        <div class="bg-dark min-vh-100 p-3" style="width: 250px;">
            <ul>
                <!-- <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contact</a></li> -->
                <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='addproduct.php';">Add product</a>
                    </li>
                <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='from_html.php';">Form HTML</a>
                    </li>
                <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='from_mahasiswa.php';">Form Mahasiswa</a>
                    </li>
                <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='latihan1.php';">latihan 1</a>
                    </li>
                <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='latihan2.php';">latihan 2</a>
                    </li>
                <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='quiss.php';">Quiz</a>
                    </li>
            </ul>
            <!-- Sidebar can have more links here -->
        </div>

        <!-- Dynamic Content Area -->
        <div id="content" class="p-4 w-100">
            <iframe id="contentFrame" src="" style="width:100%; height:600px; border:none;"></iframe>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-warning bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='addproduct.php';">add product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='from_html.php';">From HTML</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='from_mahasiswa.php';">From Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='latihan1.php';">latihan 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='latihan2.php';">latihan 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='quiss.php';">Quiz</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar and Content -->
    <div class="d-flex">
        <div class="bg-dark min-vh-100 p-3" style="width: 250px;">
            <ul>
                <!-- <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contact</a></li> -->
                <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='addproduct.php';">add product</a>
                    </li>
                <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='from_html.php';">From HTML</a>
                    </li>
                <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='from_mahasiswa.php';">From Mahasiswa</a>
                    </li>
                <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='latihan1.php';">latihan 1</a>
                    </li>
                <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='latihan2.php';">latihan 2</a>
                    </li>
                <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='quiss.php';">Quiz</a>
                    </li>
            </ul>
            <!-- Sidebar can have more links here -->
        </div>

        <!-- Dynamic Content Area -->
        <div id="content" class="p-4 w-100">
            <iframe id="contentFrame" src="home_content.html" style="width:100%; height:600px; border:none;"></iframe>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
>>>>>>> ae36ca376bf8766d3452c74a9bc474fbf7d6a562
</html>