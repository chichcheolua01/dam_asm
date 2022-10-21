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
            <!-- <style>
                 body {
                padding: 2%;
                text-align: center;
                }
                #slideshow {
                overflow: hidden;
                height: 510px;
                width: 728px;
                margin: 0 auto;
                }
                .slide-wrapper {
                width: 2912px;
                -webkit-animation: slide 14s ease infinite;
                }
                .slide {
                float: left;
                height: 510px;
                width: 728px;
                }
                @-webkit-keyframes slide {
                20% {margin-left: 0px;}
                30% {margin-left: -728px;}
                50% {margin-left: -728px;}
                60% {margin-left: -1456px;}
                80% {margin-left: -1456px;}
                }
            </style> --> 
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
                    <a href="index.php?act=cart">
                        <li class="text-sm hover:-translate-y-1 duration-500">Cart</li>
                    </a>
                </ul>
                <div class="flex flex-col items-center justify-center space-y-8">
                    <?php 
                        if(!isset($_SESSION["userName"]))
                        
                        {
                            ?>
                            <a href="index.php?act=login"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg></a>
                            <?php
                        }
                        else {
                            $userName = $_SESSION["userName"];
                            $query = "SELECT * FROM users WHERE userName = '$userName'";
                            $login_user = getOne($query);
                            echo "";
                    ?>
                    <a href="controller/logout.php"><img class="w-[50px] h-auto rounded-full" src="../image/<?php echo $login_user['userImage'] ?>" alt=""></a>
                    <?php
                        }
                    ?> 
                </div>
                <div>
                    <img src="./image/" alt="">
                </div>
            </div>
            
        </header>