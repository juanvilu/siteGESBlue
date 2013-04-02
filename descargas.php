<?php

    /**
     * @author Antonio_GES
     * @copyright 2012
     */
     
    $path = "descargas/";
    $file = isset($_REQUEST['file'])?$_REQUEST['file']:'';
    
    if( $file ){
        $path.= $file;    
        header ("Content-Disposition: attachment; filename=".$file." ");         
        header ("Content-Type: application/octet-stream");        
        header ("Content-Length: ".filesize($path));
        
        readfile($path);
    
    }

?>