<?php
    include_once('./lib/lib.php');
    if(isset($_POST['login'])){
        $read = $pdo->query("select * from member where userId = '{$_POST['userId']}' and userPwd = '{$_POST['userPwd']}'")->fetch();
        if($read){
            $_SESSION['member'] = $read;
            alert("성공");
        } else{
            alert("실패");
        }
    }
?>    
    <!-- contents -->
    <section id="contents">
        <div class="container">
            <div class="row">
                <div class="main-content">
                    <h1 class="antitle">로그인</h1>

                    <!-- content inner -->
                    <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                        <form class="login-page" action="" method="post">
                        <input type="hidden" name="login" value="">
                            <div class="login-header margin-bottom-30">
                                <h2>Login to your account</h2>
                            </div>
                            <div class="input-group margin-bottom-20">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input placeholder="아이디" class="form-control" type="text" name="userId">
                            </div>
                            <div class="input-group margin-bottom-20">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input placeholder="비밀번호" class="form-control" type="password" name="userPwd">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary pull-right" type="submit">로그인</button>
                                </div>
                            </div>
                            <hr>
                            <h4>Forget your Password ?</h4>
                            <p>
                                <a href="#">Click here</a>to reset your password.
                            </p>
                        </form>
                    </div>
                    <!-- content inner -->

                </div>
            </div>
        </div>
    </section>