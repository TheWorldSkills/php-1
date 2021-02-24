<?php
    switch ($midx){
        case 'logout':
            session_destroy();
            alert('logout', '/');
            break;
        
        // 메뉴 게시판 아이디 등록
        case "menu_chk":
            $pdo->query("update menu set mBoard = '{$_POST['board_idx']}' where menuIdx = '{$_POST['menu_idx']}'");
            break;
    }
?>