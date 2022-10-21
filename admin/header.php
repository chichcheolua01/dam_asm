<?php
    $userName = $_SESSION["userName"];
    $query = "SELECT * FROM users WHERE userName = '$userName'";
    $login_user = getOne($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function chooseFile(fileInput){
            if(fileInput.files && fileInput.files[0]){
                var reader = new FileReader();

                reader.onload = function(e){
                    $('#image').attr('src', e.target.result);
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    </script>
</head>

<body class="lg:px-[100px] ">
    <div class="container mx-auto">
        <header class="py-[60px] flex justify-between items-center">
            <div class="">
                <img class="h-[60px] w-auto" src="./image/nike-logo.png" alt="">
            </div>
            <div class="flex justify-between items-center space-x-[100px]">
                <ul class="md:flex justify-between space-x-[52px] hidden items-center">
                    <a href="index.php?act=home">
                        <li class="text-sm hover:-translate-y-1 duration-500">Home</li>
                    </a>
                    <a href="index.php?act=product">
                        <li class="text-sm hover:-translate-y-1 duration-500">Store</li>
                    </a>
                    <a href="index.php?act=category">
                        <li class="text-sm hover:-translate-y-1 duration-500">Categories</li>
                    </a>
                    <a href="index.php?act=list-user">
                        <li class="text-sm hover:-translate-y-1 duration-500">Customers</li>
                    </a>
                    <a href="./controller/test.php">
                        <li class="text-sm hover:-translate-y-1 duration-500">Comments</li>
                    </a>
                    <a href="./controller/test.php">
                        <li class="text-sm hover:-translate-y-1 duration-500">Point of Sale</li>
                    </a>
                </ul>
                <div class="flex justify-between items-center space-x-8">
                        <a href="controller/logout.php"><img class="w-[50px] h-auto rounded-full" src="../image/<?php echo $login_user['userImage'] ?>" alt=""></a>
                </div>
                <div>
                    <img src="./image/" alt="">
                </div>
            </div>
        </header>