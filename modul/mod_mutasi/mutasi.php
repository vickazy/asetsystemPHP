<?php 
if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
    echo "<link href=\"../css/style_login.css\" type=\"text/css\" rel=\"stylesheet\">
    <p class=\"error-code\"> 404</p>
        <p class=\"not-found\">Not<br/>Found</p>
        <div class=\"clear\"></div>
        <div class=\"content\">
            Silahkan untuk login terlebih dahulu.
            <br>
            <a href=\"index.php\">Go Home</a>
            or
            <br>
            <br>
</div>";
}
else {
        $aksi = "modul/mod_mutasi/aksi_mutasi.php";
        $act = isset($_GET['act']) ? $_GET['act'] : '';

   switch($act){ 
        default:
            	//Tampil data mutasi
			echo "<div>
            <ul class=\"breadcrumb\">
                <li>
                    <a href=\"?module=beranda\">Home</a>
                </li>
                <li>
                    <a href=\"?module=mutasi\">Mutasi</a>
                </li>
            </ul>
            </div>";


        break;
   }     
}