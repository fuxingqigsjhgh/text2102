<?php
    // 接受post 传参
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';  
    
    // 获取用户名

    $user_name = $_POST['s_name'];
    // 验证用户名是否符合用户名规则  用户名长度不少于5，不大于10
    $patten = "/^[a-zA-Z0-9_]{5,10}$/";

    if(!preg_match($patten,$user_name)){
        die ("用户名不符合规则");
    }

    // 获取Email
    $mail = $_POST['s_email'];
    // 验证Email是否符合email规则   
    $patten = "/^\w+[@]+\w+\.com$/";

    if(!preg_match($patten,$mail)){
        die("Email不符合规则");
    }

    // 获取手机号
        $tel = $_POST['s_mobile'];
        // 验证手机号是否符合规则
        $patten ="/^[1][356789][0-9]{9}$/";

        if(!preg_match($patten,$tel)){
            die("手机号不符合规则");
        }

    // 获取密码 长度大于六
    $pass = $_POST['s_pass'];
    
    // 验证密码是否符合规则
    $patten ="/^[a-zA-Z0-9]{6,20}$/";

    if(!preg_match($patten,$pass)){
         die("密码不符合规则");
    }

    // 确认密码
    $pass1 = $_POST['s_pass1'];


    if($pass!=$pass1){
        die("请与密码保持一致");
    }

    echo "注册成功";



