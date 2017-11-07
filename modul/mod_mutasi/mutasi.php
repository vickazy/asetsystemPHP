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

            echo "<div class=\"row\">
            <div class=\"box col-md-12\">
            <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2><i class=\"glyphicon glyphicon-user\"></i> Data Mutasi Aset</h2>
        
                <div class=\"box-icon\">
                    <a href=\"#\" class=\"btn btn-setting btn-round btn-default\"><i class=\"glyphicon glyphicon-cog\"></i></a>
                    <a href=\"#\" class=\"btn btn-minimize btn-round btn-default\"><i
                            class=\"glyphicon glyphicon-chevron-up\"></i></a>
                    <a href=\"#\" class=\"btn btn-close btn-round btn-default\"><i class=\"glyphicon glyphicon-remove\"></i></a>
                </div>
            </div>
            <div class=\"box-content\">
            <table class=\"table table-striped table-bordered bootstrap-datatable datatable responsive\">
            <thead>
            <tr>
                <th>No Aset</th>
                <th>Nama Aset</th>
                <th>PIC</th>
                <th>Noreg</th>
                <th>Area</th>
                <th>Customer</th>
                <th>Cluster</th>
                <th>Tgl. Pindah</th>
                <th>Keterangan</th>
                <th>Status</th>
            </tr>
            </thead>";
           echo"</table>
                </div>
                </div>
                </div>
            </div>";

        break;
   }     
}