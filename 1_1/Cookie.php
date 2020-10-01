<?php 
// Nếu click vào nút Lưu Session
if (isset($_POST['save-cookie']))
{
    echo $_POST['username'] . '<br>';
    // Lưu Session
    $str = $_POST['username'];
    echo 'str:' . $str . '<br>';
    setcookie('username', $str, time()+3600);
    
    echo 'Tên Đăng Nhập Là: ' . $_COOKIE['username'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h1>
            <?php
            // Hiển thị thông tin lưu trong Session
            // phải kiểm tra có tồn tại không trước khi hiển thị nó ra
            if (isset($_COOKIE['username']))
            {
                echo 'Tên Đăng Nhập Là: ' . $_COOKIE['username'] . '<br>';
                echo 'Post la:' . $_POST['username'] . '<br>';            }
            ?>
        </h1>
        <form method="POST" action="">
            <input type="text" name="username" value=""/> <br/>
            <input type="submit" name="save-cookie" value="Lưu Cookie"/>
        </form>
    </body>
</html>