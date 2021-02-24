<?php
    include_once('./lib/lib.php'); 
    // 현재 유저 idx 를 저장
    $mIdx = $member->idx;
    // print_r($mIdx);
    // 로그인 안하고는 접근 못하게.
    if(!isset($_SESSION['member'])){
        alert("로그인하고와 ㅅㅂ", "/page/login");
    }
    else if(isset($_SESSION['member'])){
        if(isset($_POST['menu_make'])){
            // print_r($_POST['content']);
            $make = $pdo->query("insert into menu set content='{$_POST['content']}', mIdx='{$mIdx}'");
        }
        if(isset($_POST['board_make'])){
            // print_r($_POST['boardContent']);
            $make = $pdo->query("insert into board set content='{$_POST['boardContent']}', mIdx='{$mIdx}'");
        }
    }
?>
<!-- contents -->
    <section id="contents">
        <div class="container">
            <div class="row">
                <div class="main-content">
                    <h1 class="antitle">블로그관리</h1>

                    <!-- content inner -->
                    <div id="testimonial-container">
                        <div class="row">

                            <div class="margin-bottom">
                                <h2 class="page-header">메뉴등록</h2>
                                <div class="testimonial">
                                    <form class="menuwrite" action="" method="post">
                                        <input type="hidden" name="menu_make" value="">
                                        <label>메뉴이름
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-20" type="text" name="content">
                                        <div class="col-lg-12 text-right">
                                            <button class="btn btn-primary btn-sm" type="submit">메뉴등록</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="margin-bottom">
                                <h2 class="page-header">메뉴관리</h2>
                                <div class="testimonial menulist">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="col-md-1">
                                                    번호
                                                </th>
                                                <th class="col-md-4">
                                                    메뉴이름
                                                </th>
                                                <th class="col-md-4">
                                                    게시판아이디
                                                </th>
                                                <th>
                                                    설정
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // menu의 mIdx가 현재 userIdx 인 것.
                                                $list = $pdo->query("select * from menu where mIdx='{$mIdx}'")->fetchAll();
                                                foreach($list as $key => $val){
                                                    // print_r($v);
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $key+1 ?>
                                                </td>
                                                <td>
                                                    <?php echo $val->content ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm">
                                                        <option value="">선택</option>
                                                    <?php 
                                                        $bList = $pdo->query("select * from board where mIdx='{$mIdx}'")->fetchAll();
                                                        foreach($bList as $key => $v){
                                                    ?>
                                                        <option value="<?php echo $v->boardIdx ?>"><?php echo $v->content ?></option>
                                                        <?php }?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <button class="btn btn-default btn-xs on_click" type="button" data-idx="<?= $val->menuIdx ?> ">게시판등록</button>
                                                    <button class="btn btn-default btn-xs" type="button">메뉴삭제</button>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="margin-bottom">
                                <h2 class="page-header">게시판등록</h2>
                                <div class="testimonial">
                                    <form class="menuwrite" action="" method="post">
                                    <input type="hidden" name="board_make" value="">
                                        <label>게시판아이디
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-20" type="text" name="boardContent">
                                        <div class="col-lg-12 text-right">
                                            <button class="btn btn-primary btn-sm" type="submit">게시판등록</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="margin-bottom">
                                <h2 class="page-header">게시판리스트</h2>
                                <div class="testimonial menulist">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="col-md-1">
                                                    번호
                                                </th>
                                                <th class="col-md-8">
                                                    게시판아이디
                                                </th>
                                                <th>
                                                    설정
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach($bList as $key => $v){
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $key+1 ?>
                                                </td>
                                                <td>
                                                    <?php echo $v->content ?>
                                                </td>                                                
                                                <td>
                                                    <input type="hidden" name="board_del" value="">
                                                    <button class="btn btn-default btn-xs" type="button" name="board_del_btn">게시판삭제</button>
                                                </td>
                                            </tr>
                                            <?php } ?>      
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="margin-bottom">
                                <h2 class="page-header">회원리스트</h2>
                                <div class="testimonial menulist">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="col-md-1">
                                                    번호
                                                </th>
                                                <th>
                                                    아이디
                                                </th>
                                                <th>
                                                    이름
                                                </th>
                                                <th>
                                                    닉네임
                                                </th>
                                                <th>
                                                    블로그URL
                                                </th>
                                                <th>
                                                    삭제
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    admin  
                                                </td>
                                                <td>
                                                    관리자
                                                </td>
                                                <td>
                                                    Master
                                                </td> 
                                                <td>
                                                    <a href="http://127.0.0.1/Master">http://127.0.0.1/Master</a>
                                                </td>                                                 
                                                <td>
                                                    <button class="btn btn-danger btn-xs" type="button">회원삭제</button>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                    <!-- content inner -->

                </div>
            </div>
        </div>
    </section>