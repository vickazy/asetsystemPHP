<?php
//mutasi aset
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

        case "editmutasi":
            echo "<div>
            <ul class=\"breadcrumb\">
                <li>
                    <a href=\"?module=beranda\">Home</a>
                </li>
                <li>
                    <a href=\"?module=mutasi\">Halaman Mutasi</a>
                </li>
            </ul>
            </div>";

            echo "<div class=\"row\">
                    <div class=\"box <col-md-12>\">
                    <div class=\"box-inner\">
                    <div class=\"box-header well\" data-original-title=\"\">
                        <h2><i class=\"glyphicon glyphicon-edit\"></i> Sistem Mutasi</h2>
                        <div class=\"box-icon\"> 
                            <a href=\"#\" class=\"btn btn-minimize btn-round btn-default\"><i
                                    class=\"glyphicon glyphicon-chevron-up\"></i></a>
                            <a href=\"#\" class=\"btn btn-close btn-round btn-default\"><i
                                    class=\"glyphicon glyphicon-remove\"></i></a>
                        </div>
                    </div>";

            echo "<div class=\"box-content\">
                    <form method=\"POST\" action=\"$aksi?module=mutasi&act=update\">
                        <div class=\"form-group\">
                            <label for=\"no aset\">No. Aset</label>
                            <input type=\"text\" class=\"form-control\" name=\"no_aset\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"nama aset\">Nama Aset</label>
                            <input type=\"text\" class=\"form-control\" name=\"nama_aset\">
                        </div>
            ";
            echo "</div>";
            echo "
            <div class=\"box <col-md-12>\">
            <div class=\"box-inner\">
            <div class=\"box-header well\" data-original-title=\"\">
                <h2><i class=\"glyphicon glyphicon-edit\"></i> PIC Baru</h2>
                <div class=\"box-icon\"> 
                    <a href=\"#\" class=\"btn btn-minimize btn-round btn-default\"><i
                            class=\"glyphicon glyphicon-chevron-up\"></i></a>
                    <a href=\"#\" class=\"btn btn-close btn-round btn-default\"><i
                            class=\"glyphicon glyphicon-remove\"></i></a>
                </div>
            </div>";

            echo "<div class=\"box-content\">
                        <div class=\"form-group\">
                            <label for=\"noreg\">Noreg</label>
                            <input type=\"text\" class=\"form-control\" name=\"noreg\">
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"nama_karyawan\">Nama Karyawan</label>
                            <input type=\"text\" class=\"form-control\" name=\"nama_karyawan\">
                        </div>
                        
                        <div class=\"form-group\">
                        <label class=\"control-label\">Area</label>
                        <div class='controls'>
                            <select id=\"selectError\" data-rel=\"chosen\" name=\"area\">
                            <option value=\"0\">-Pilih Data-</option>
                            <option value=\"bali-lombok\">Bali-Lombok</option>
                            <option value=\"bandung\">Bandung</option>
                            <option value=\"baturaja\">Baturaja</option>
                            <option value=\"office ho\">Office HO</option>
                            <option value=\"bengkulu\">Bengkulu</option>
                            <option value=\"jambi 2\">Jambi 2</option>
                            <option value=\"jambi 3\">Jambi 3</option>
                            <option value=\"jatim-lampung\">Jatim-Lampung</option>
                            <option value=\"jawa barat\">Jawa Barat</option>
                            <option value=\"kepulauan riau\">Kepulauan Riau</option>
                            <option value=\"lebak bulus\">Lebak Bulus</option>
                            <option value=\"maluku\">Maluku</option>
                            <option value=\"mamuju-majene\">Mamuju Majene</option>
                            <option value=\"manado\">Manado</option>
                            <option value=\"mirah delima\">Mirah Delima</option>
                            <option value=\"nias\">Nias</option>
                            <option value=\"nusa tenggara timur\">Nusa Tenggara Timur/option>
                            <option value=\"ruko cempaka mas\">Ruko Cempaka Mas</option>
                            <option value=\"office makasar\">Office Makasar</option>
                            <option value=\"office palembang\">Office Palembang</option>
                            <option value=\"offive medan\">Office Medan</option>
                            <option value=\"padang sidempuan\">Padang Sidempuan</option>
                            <option value=\"palembang\">Palembang</option>
                            <option value=\"papua\">Papua</option>
                            <option value=\"prs-palopo,rante pao,soroako\">PRS-Palopo,Rante Pao,Soroako</option>
                            <option value=\"pts-palopo,tangkerang,soroako\">PTS-Palopo,Tangkerang,Soroako</option>
                            <option value=\"sulawesi barat\">Sulawesi Barat</option>
                            <option value=\"sulawesi selatan 1\">Sulawesi Selatan 1</option>
                            <option value=\"sulawesi selatan 2 (pbe-pinrang,bantaeng,enrekang)\">sulawesi selatan 2 (PBE-Pinrang,Bantaeng,Enrekang)</option>
                            <option value=\"sulawesi tenggara\">sulawesi tenggara</option>
                            <option value=\"sulawesi tengah\">Sulawesi Tengah</option>
                            <option value=\"sumbagut (medan)\">Sumbagut (Medan)</option>
                            <option value=\"surabaya-jatim\">Surabaya-Jatim</option>
                        </select>
                        </div>  
                        </div>

                        <div class=\" form-group\">
                        <label class=\"control-label\" name=\"customer\">Customer</label>
                        <div class=\"controls\">
                            <select id=\"selectError\"  data-rel=\"chosen\" name=\"customer\">
                            <option value=\"0\">-Pilih Data-</option>
                            <option value=\"no customer\">no customer</option>
                            <option value=\"tower bersama group\">Tower Bersama Group</option>
                            <option value=\"telkomsel\">Telkomsel</option>
                            <option value=\"daya mitra telekomunikasi\">Daya Mitra Telekomunikasi</option>
                            <option value=\"telkom infra\">Telkom Infra</option>
                            <option value=\"inti bangun sejahtera\">Inti Bangun Sejahtera</option> 
                            <option value=\"menara seluler nusantara\">Menara Seluler Nusantara</option>
                            <option value=\"bintang baja sinar cemerlang\">Bintang Baja Sinar Cemerlang</option>
                        </select>
                        </div>

                        ";        

            echo "</form></div>
            </div>>/div>";

        break;
   }     
}