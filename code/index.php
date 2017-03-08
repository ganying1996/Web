﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <style>
        *{margin: 0;
            padding: 0;

        }
        body{background-image: url(img/1.jpg);font-weight: normal;background-size:cover;color: #333;font-family: "Microsoft Yahei";
        }

        #center{width: 620px;height: 410px;background-color: white;margin: 0 auto;margin-top: 100px;border-radius:15px;opacity: 0.9;
        }

        .top{height: 60px;border-bottom: 1px #e2e2e2 solid;margin-bottom: 10px;line-height: 60px;text-align: center;font-size: 20px;
        }

        tr{height:50px;
        }

        .left{text-align: right;letter-spacing: 2px;
        }

        input{width: 250px;height: 35px; border-color: #e2e2e2;height:40px;border-radius:6px;font-size: 18px;
        }

        .sub{width: 150px;height: 40px;border-radius:8px;background-color: rgb(39, 149, 220);color:#e2e2e2;font-size: 18px;
        }

        a{text-decoration:none; color: rgb(130,180,60);
        }

        a:hover{text-decoration:underline;
        }

    </style>
</head>
<body>
    <div id="center">
        <div class="top"><h5>如果您已拥有账户，在此<a href="login.php" >登录</a></h5></div>
        <div class="bottom">
        <form action="regcheck.php" method="post">
             <table>
                <tr>
                    <td class="left" style="width:210px;  ">用户名：</td>
                    <td style="width:410px"><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td class="left">设置密码：</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td class="left">邮箱：</td>
                    <td><input type="password" name="email"></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="left">姓名：</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td class="left">手机：</td>
                    <td><input type="text" name="phonenum"></td>
                </tr>
                <tr>
                    <td class="left"></td>
                    <td><input class="sub" type="submit" value="注册" ></td>
                </tr>
            </table>
        </form>
        </div>
</body>
</html>