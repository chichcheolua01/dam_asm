
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
                    <a href="index.php?act=list-comment">
                        <li class="text-sm hover:-translate-y-1 duration-500">Comments</li>
                    </a>
                    <a href="index.php?act=list-money">
                        <li class="text-sm hover:-translate-y-1 duration-500">Point of Sale</li>
                    </a>
                </ul>
                <div class="flex justify-between items-center space-x-8">
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg></a>
                    <a class="" href="./admin.php"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                        </svg></a>
                    <a href="./controller/logout.php"> <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg> </a>
                </div>
                <div>
                    <img src="./image/" alt="">
                </div>
            </div>
        </header>