<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'config.php';
session_start();
if( isset($_SESSION['SYNC_ADMIN']) ){
    include './plantilla/admin.php';    
}else{    
    include './plantilla/login.php';    
}
session_write_close();