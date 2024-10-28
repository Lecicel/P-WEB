<?php
    $jabatan="Menteri";
    switch ($jabatan){
        case "Presiden":
            echo "Kepala Negara";
            break;
        case "Menteri":
            echo "Pembantu Presiden";
            break;
        case "Gurbernur":
            echo "Kepala Daerah Provinsi";
            break;
        default:
            echo "Rakyat";
            break;
        }