<?php
    include_once('./lib/lib.php');
    if(isset($_POST['join'])){
        print_r($_POST['userId']);
        print_r($_POST['userPwd']);
       $pdo->query("insert into member set userId='{$_POST['userId']}', userPwd='{$_POST['userPwd']}', permission='{$_POST['permission']}'");

       if($_POST['permission'] == 1){
           alert("관리자권한으로 회원가입", "/");
       }
       else{
           alert("유저권한으로 회원가입", "/");
       }
    }
?>
    <!-- contents -->
    <section id="contents">
        <div class="container">
            <div class="row">
                <div class="main-content">
                    <h1 class="antitle">회원가입</h1>

                    <!-- content inner -->
                    <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                        <form class="signup-page" ection="" method="post">
                            <input type="hidden" name="join" value="">
                            <div class="signup-header">
                                <h2>Register a new account</h2>
                            <label>아이디
                                <span class="color-red">*</span>
                            </label>
                            <input class="form-control margin-bottom-20" type="text" name="userId">
                            <label>비밀번호
                                <span class="color-red">*</span>
                            </label>
                            <input class="form-control margin-bottom-20" type="text" name="userPwd">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>이름
                                        <span class="color-red">*</span>
                                    </label>
                                    <input class="form-control margin-bottom-20" type="text" name="userName">
                                </div>
                                <div class="col-sm-6">
                                    <label>권한
                                        <span class="color-red">*</span>
                                    </label>
                                    <input class="form-control margin-bottom-20" type="text" name="permission">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-8">
                                    <p>Already a member? <br> Click 
                                        <a href="login.html">HERE</a>to login to your account.</p>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-primary" type="submit">회원가입</button>
                                </div>
                            </div>
                        </form>  
                    </div>
                    <!-- content inner -->
                </div>
            </div>
        </div>
    </section>
