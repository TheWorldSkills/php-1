<?php
    switch ($midx){
        case 'logout':
            session_destroy();
            alert('logout');
            break;
    }
?>