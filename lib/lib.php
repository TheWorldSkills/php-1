<?php 
// pdo 연결하기. 
    $pdo = new PDO("mysql:host=localhost;dbname=HelloWorld;charset=utf8", "root", "", array(
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    ));
    
    session_start(); // $_SESSION 변수실행
    header("content-type: text/html; charset=utf-8"); // html docs를 한글 incode
    date_default_timezone_set("Asia/Seoul"); //시간 설정

    // //member CREATE
    // $pdo->query("insert into member set userId='hello', userPwd='password'");
    // //member READ
    // $read = $pdo->query("select * from member")->fetchAll();
    // //idx가 2인 data만 import
    // $user1 = $pdo->query("SELECT * FROM `member` WHERE idx='33' or userId='world'")->fetchAll();
    // //array 로 정렬 
    // echo'<pre>';
    // print_r($user1);

    //주소 가져오기
    $varray = isset($_GET['uri']) ? explode("/", $_GET['uri']) : null;
    $pagemode = isset($varray[0]) ? $varray[0] : null;
    $midx = isset($varray[1]) ? $varray[1] : 'main';
    $page = isset($varray[2]) ? $varray[2] : 1;

    // DataBase
    function execute($sql, $parame = null)
    {
        global $pdo;
        $data = $pdo->prepare($sql);
        $data->execute($parame);
        return $data;
    }
    function fetch($sql, $parame = null){
        return execute($sql, $parame)->fetch();
    }
    function fetchAll($sql, $parame = null){
        return execute($sql, $parame)->fetchAll();
    }
    function rowCount($sql, $parame = null){
        return execute($sql, $parame)->rowCount();
    }

    // 경고창 함수
    function alert($msg=null, $url=null){
        echo "<script>";
        echo $msg ? "alert('{$msg}');" : "";
        echo $url ? "documment.location.replace('{$url}')" : "history.back()";
        echo "</script>";
        exit;
    } 

    //회원변수
    $member = isset($_SESSION['member']) ? $_SESSION['member'] : null;
    if($pagemode == 'action'){
        include("./lib/action.php");
        exit;
    }
?>