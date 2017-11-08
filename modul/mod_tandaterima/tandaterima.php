<?php
//mutasi aset Herry Prasetyo
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
         $tanggal = date('d/m/Y');
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
                        <h2><i class=\"glyphicon glyphicon-edit\"></i> Data Transaksi</h2>
                        <div class=\"box-icon\"> 
                            <a href=\"#\" class=\"btn btn-minimize btn-round btn-default\"><i
                                    class=\"glyphicon glyphicon-chevron-up\"></i></a>
                            <a href=\"#\" class=\"btn btn-close btn-round btn-default\"><i
                                    class=\"glyphicon glyphicon-remove\"></i></a>
                        </div>
                    </div>
                    <div class=\"box-content\">
                        <form role=\"form\" method=\"POST\"  action=\"$_SERVER[PHP_SELF]\">
                      
                            <div class=\"form-group col-md-6\">
                                <label>No. Tanda Terima</label>
                                <input type=\"text\" class=\"form-control\"  name=\"no_aset\" placeholder=\"No. Aset\"   required>
                               
                            </div>
                            
                            <div class=\"form-group col-md-6\">
                                <label>Tgl. Kirim Barang</label>
                                <input type=\"text\" class=\"form-control \" name=\"nama_aset\"  placeholder=\"Nama Aset\" required>
                               
                            </div>
                            <div class=\"form-group col-md-6\">
                            <label>Noreg</label>
                            <input type=\"text\" class=\"form-control \" name=\"nama_aset\"  placeholder=\"Nama Aset\" required>
                            </div>
        
                            <div class=\"form-group col-md-6\">
                            <label>Nama Karyawan</label>
                            <input type=\"text\" class=\"form-control \" name=\"nama_aset\"  placeholder=\"Nama Aset\" required>
                           
                            </div>
                            <div class=\"form-group col-md-6\">
                            <label>Area</label>
                            <input type=\"text\" class=\"form-control \" name=\"nama_aset\"  placeholder=\"Nama Aset\" required>
                           
                            </div>
                            <div class=\"form-group col-md-6\">
                            <label>Cluster</label>
                            <input type=\"text\" class=\"form-control \" name=\"nama_aset\"  placeholder=\"Nama Aset\" required>
                           
                            </div>
                            <div class=\"form-group col-md-6\">
                            <label>Koordinator</label>
                            <input type=\"text\" class=\"form-control \" name=\"nama_aset\"  placeholder=\"Nama Aset\" required>
                           
                            </div>
                <div class=\"row\">
                <div class=\"box col-md-12\">
                    <div class=\"box-inner\">
                        <div class=\"box-header well\" data-original-title=\"\">
                            <h2><i class=\"glyphicon glyphicon-user\"></i> Input Barang</h2>
                        </div>
                        <div class=\"box-content\">
                            <table class=\"table\">
                                 <div class=\"form-group col-md-6\">
                        <label class=\"control-label\">No. Aset</label>
                        <input type=\"text\" class=\"form-control\" name=\"no_aset\" placeholder=\"Noreg\" id=\"noreg\" >
                      
                        </div>
                    
                    <div class=\"form-group col-md-6\">
                        <label>Nama. Aset</label>
                        <input type=\"text\" class=\"form-control\"  name=\"nama_aset\" placeholder=\"Nama Aset\" >
                    </div>
                    <br><br>
        
                    <div class=\"form-group col-md-6\">
                        <label class=\"control-label\">Merk</label>
                        <input type=\"text\" class=\"form-control\" name=\"Merk\" placeholder=\"Cluster\">
                        </div>

                    <div class=\"form-group col-md-12\">
                        <label>Keterangan</label>
                        <textarea cols=\"10\" rows=\"15\" name=\"keterangan\" class=\"form-control\"></textarea>
                    </div>
                    
                            </table>
                        </div>
                    </div>
                </div>
                <!--/span-->
        </div><!--/row--> 
             
             
                    <button type=\"submit\" class=\"btn btn-default\">Save</button> | 
                    <button type=\"button\" class=\"btn btn-warning\" onclick=\"self.history.back()\">Cancel</button>
              
                </form>
          
                    </div>
                </div>
            </div>
            <!--/span-->
        
        </div><!--/row-->";
   }     
