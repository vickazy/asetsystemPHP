<?php
    if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
        echo "<link href=\"css/style_login.css\" type=\"text/css\" rel=\"stylesheet\">
                <p class=\"error-code\">
                         404
                </p>

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
    echo "

    <!-- Modal POP Up -->   
    <div id=\"myModal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Herry Prasetyo (2017)</h4>
            </div>
            <div class=\"modal-body\">
                <p><strong>Management Information System Asset</strong></p>
                    <img class=\"img-responsive\" src=\"img/prasetia.png\" alt=\"Herry Prasetyo\">
                 </div>
             </div>
        </div>
    </div>
<!-- END Modal POP Up --> 

    <div>
    <ul class=\"breadcrumb\">
        <li>
            <a href=\"?module=beranda\">Home</a>
        </li>
        <li>
            <a href=\"?module=beranda\">Dashboard</a>
        </li>
    </ul>
</div>
<div class=\"row\">
    <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"6 new members.\" class=\"well top-block\" href=\"#\">
            <i class=\"glyphicon glyphicon-user blue\"></i>

            <div>Total Members</div>
            <div>507</div>
            <span class=\"notification\">6</span>
        </a>
    </div>

    <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"4 new pro members.\" class=\"well top-block\" href=\"#\">
            <i class=\"glyphicon glyphicon-star green\"></i>

            <div>Pro Members</div>
            <div>228</div>
            <span class=\"notification green\">4</span>
        </a>
    </div>

    <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"$34 new sales.\" class=\"well top-block\" href=\"#\">
            <i class=\"glyphicon glyphicon-shopping-cart yellow\"></i>

            <div>Sales</div>
            <div>$13320</div>
            <span class=\"notification yellow\">$34</span>
        </a>
    </div>

    <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"12 new messages.\" class=\"well top-block\" href=\"#\">
            <i class=\"glyphicon glyphicon-envelope red\"></i>

            <div>Messages</div>
            <div>25</div>
            <span class=\"notification red\">12</span>
        </a>
    </div>
</div>
   <div class=\"row\">
    <div class=\"box col-md-12\">
        <div class=\"box-inner\">
            <div class=\"box-header well\">
                <h2><i class=\"glyphicon glyphicon-info-sign\"></i> Dashboard</h2>

                <div class=\"box-icon\">
                    <a href=\"#\" class=\"btn btn-setting btn-round btn-default\"><i
                            class=\"glyphicon glyphicon-cog\"></i></a>
                    <a href=\"#\" class=\"btn btn-minimize btn-round btn-default\"><i
                            class=\"glyphicon glyphicon-chevron-up\"></i></a>
                    <a href=\"#\" class=\"btn btn-close btn-round btn-default\"><i
                            class=\"glyphicon glyphicon-remove\"></i></a>
                </div>
            </div>
            <div class=\"box-content row\">
                <div class=\"col-lg-7 col-md-12\">
                    News
                </div>
            </div>
        </div>
    </div>
</div>";
}
?>

