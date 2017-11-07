<?php 

function error_404(){
        ?>
        <link href=../../css/style_login.css type=text/css rel=stylesheet>
        <p class=error-code> 404</p>
                <p class=not-found>Not<br/>Found</p>
                <div class=clear></div>
                <div class=content>
                Silahkan untuk login terlebih dahulu.
                <br>
                <a href=index.php>Go Home</a>
                or
                <br>
                <br>
        </div>

<?php
}

if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
    echo error_404();
}
else{
        include "../../config/koneksi.php";
        include "../../config/function.php";
        //action         
        $module = $_GET['module'];
        $act = $_GET['act'];

        if($module=='mutasi' AND $act=='update'){
                $id = $_POST['id'];
                $no_aset = $_POST['no_aset'];
                $nama_aset = $_POST['nama_aset'];
                $noreg = $_POST['noreg'];
                $pic = $_POST['karyawan'];
                $customer = $_POST['customer'];
                $koordinator = $_POST['koordinator'];
                $area = $_POST['area'];
                $tgl_terima = $_POST['tgl_terima'];
                $departemen = $_POST['departemen'];
                $tgl_pindah = $_POST['tgl_pindah'];
                $keterangan = $_POST['keterangan'];

        $query = "UPDATE input_aset SET no_aset   = '%s',
                                        nama_aset = '%s',
                                        noreg     = '%s', 
                                        area      = '%s', 
                                        customer  = '%s',
                                        pic       = '%s' 
                     WHERE id_input = %d";

        $run_query = sprintf($query, $no_aset,
                        $nama_aset, $noreg, 
                        $area, $customer,
                        $pic,$id);
        mysqli_query($konek,$run_query);
        }
}
