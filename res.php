<?php
    $fp = fopen("xlsfile:D:/PHP/test.xlsx", "wb");
    if (!is_resource($fp)) { 
        die("Cannot open excel file");
    }
    $data= array(
        array("Name" => "Bob Loblaw", "Age" => 50),  
        array("Name" => "Popo Jijo", "Age" => 75),  
        array("Name" => "Tiny Tim", "Age" => 90)
    ); 
    fwrite($fp, serialize($data));
    fclose($fp);