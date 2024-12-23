<?php
    // Xử lý dữ liệu form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    // Chuyển hướng tới trang cảm ơn
    header('Location: confirm.html');
    exit();
?>
