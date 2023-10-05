<?php 
include_once 'top.php';
include_once 'menu.php';


?>

<div>
    <div class="container-fluid px-4">
        <!-- <h1>Selamat Datang di Halaman Admin</h1> -->
        <?php 
        $url = !isset($_GET['url']) ? 'dashboard' : $_GET['url'];
        $Pages = ['dashboard', 'about', 'contact', 'data', 'login']; // Daftar halaman yang diizinkan

        if (in_array($url, $Pages) && file_exists($url . '.php')) {
            include_once $url . '.php';
        } else {
            include_once 'dashboard.php'; // Halaman default jika url tidak valid
        }
        ?>
    </div>
</div>

<?php 

include_once 'bottom.php';
?>