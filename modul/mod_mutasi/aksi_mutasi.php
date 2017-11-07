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
else{
        //action 
        $module = $_GET['module'];
        $act = $_GET['act'];

        if($module=='mutasi' AND $act=='update'){
                $no_aset = $_POST['no_aset'];
                $nama_aset = $_POST['nama_aset'];
                $noreg = $_POST['noreg'];
                $pic = $_POST['pic'];
                $koordinator = $_POST['koordinator'];
                $area = $_POST['area'];
                $tgl_terima = $_POST['tgl_terima'];
                $departemen = $_POST['departemen'];
                $tgl_pindah = $_POST['tgl_pindah'];
                $keterangan = $_POST['keterangan'];


        }
}