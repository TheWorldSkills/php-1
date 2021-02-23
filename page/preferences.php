<?php
    include_once('./lib/lib.php');  

    if(!isset($_SESSION['member'])){
        alert("로그인 ㄱ", "/page/login");
    }
    else if(isset($_SESSION['member'])){
        if(isset($_POST['menu_make'])){
            print_r($_POST['content']);
            $make = $pdo->query("insert into menu set content='{$_POST['content']}'");
            print_r($make);
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
                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    메뉴이름2
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm">
                                                        <option>선택</option>
                                                        <option>board3</option>
                                                        <option>board2</option>
                                                        <option>board1</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <button class="btn btn-default btn-xs" type="button">게시판등록</button>
                                                    <button class="btn btn-default btn-xs" type="button">메뉴삭제</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    메뉴이름1
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm">
                                                        <option>선택</option>
                                                        <option>board3</option>
                                                        <option>board2</option>
                                                        <option>board1</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <button class="btn btn-default btn-xs" type="button">게시판등록</button>
                                                    <button class="btn btn-default btn-xs" type="button">메뉴삭제</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="margin-bottom">
                                <h2 class="page-header">게시판등록</h2>
                                <div class="testimonial">
                                    <form class="menuwrite">
                                        <label>게시판아이디
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-20" type="text">
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
                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    board3
                                                </td>                                                
                                                <td>
                                                    <button class="btn btn-default btn-xs" type="button">게시판삭제</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    board2
                                                </td>                                                
                                                <td>
                                                    <button class="btn btn-default btn-xs" type="button">게시판삭제</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    board1
                                                </td>                                                
                                                <td>
                                                    <button class="btn btn-default btn-xs" type="button">게시판삭제</button>
                                                </td>
                                            </tr>
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
                    </div>
                    <!-- content inner -->

                </div>
            </div>
        </div>
    </section>