<?php

if(!['nama_user']){
    header ("Location: http://localhost/screenesia/latihan8/login.php");
}

$content['title'] = "Dashboard";
$content['body'] = "view/view_dashboard.php";




include "view/view_template.php";
