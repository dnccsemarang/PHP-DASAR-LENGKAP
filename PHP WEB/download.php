<?php

// if(isset($_GET['key']) && $_GET['key'] == 'rahasia'){
//     echo "Success Key";
//     header('Content-Disposition: attachment; filename="profile.png"');
//     // header('Content-Type: image/jpg');
//     readfile(__DIR__.'/files/profile.png');
//     // exit();
// }else {
//     echo "Invalid Key";
// }

$file = 'files/profile.png';

if (1 == 1) {
    header('Content-Description: File Transfer');
    header('Content-Disposition: attachment; filename="file.png"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile(__DIR__.$file);
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="/files/profile.png" alt="">
</body>
</html>