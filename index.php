<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\style\outputStyle\style.css">
    <title>DEV Planet</title>
</head>

<body class="bg-gray-100 h-screen" id="index">
    <nav class="bg-mycolor-100 ">
        <div class="flex justify-between px-3">
            <div class="w-12">
                <a href="#" class="hover:cursor-pointer">
                    <img src="assets\image\logo_Planet.png" alt="logo">
                </a>
            </div>
            <div class="flex flex-col items-center">
                <div id="symbol-menu" class="block sm:hidden pt-4 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-6 border border-black rounded hover:cursor-pointer hover:bg-blue-400 
                        hover:text-white transition ease-out duration-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </div>
                <ul id="menu" class="sm:flex gap-6 px-3 items-center hidden py-3">
                    <li><a href="#"
                            class="font-semibold text-white hover:text-red-500 transition ease-out duration-500"><span>Homme</span></a>
                    </li>
                    <li><a href="#"
                            class="font-semibold text-white hover:text-red-500 transition ease-out duration-500"><span>About
                                Us</span></a></li>
                    <li> <a href="#"
                            class="font-semibold text-white hover:text-red-500 transition ease-out duration-500"><span>Contact</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="m-4">
        <div class="flex justify-center sm:justify-end gap-9">
            <div class="">
                <a href="./page/signUP.php" class="btn text-primary border-primary md:border-2 hover:bg-primary 
                hover:text-white transition ease-out duration-500">signUP</a>
            </div>
            <div>
                <a href="./page/signIN.PHP" class="btn text-primary border-primary md:border-2 hover:bg-primary 
                hover:text-white transition ease-out duration-500">signIN</a>
            </div>
        </div>
        <div class="mt-6 grid gap-3 md:grid-cols-2">
            <div class="px-4 md:cols-span-1">
                <div class="bg-white rounded ouverflow-hidden shadow-md my-1">
                    <img src="assets\image\image1index.jpg" alt="img1" class="w-full h-40 md:h-full rounded">
                </div>
                <div class="grid md:grid-cols-2">
                    <div class="bg-white rounded ouverflow-hidden shadow-md my-1 mr-0 md:mr-1 ">
                        <img src="assets\image\img2.jpg" alt="image2" class="w-full h-40 rounded">
                    </div>
                    <div class="bg-white rounded ouverflow-hidden shadow-md my-1 ml-0 md:ml-1">
                        <img src="assets\image\image2index.png" alt="img3" class="w-full h-40 rounded">
                    </div>
                </div>
            </div>
            <div class="md:cols-span-1 flex justify-center items-center text-center">
                <span>"It has become appallingly obvious that our technology has exceeded our humanity".</span>
            </div>
        </div>

    </section>
    <footer class="bg-footer">
        <div>
            <div class="w-12 ml-2 mt-3">
                <a href="#" class="hover:cursor-pointer w-full">
                    <img src="assets\image\logo_Planet.png" alt="logo">
                </a>
            </div>
            <div class="flex justify-between items-center px-4 text-white py-2 mx-6">
                <ul class="text-center">
                    <a href="#">
                        <li class="font-semibold text-sm pb-1">RESSOURCES</li>
                    </a>
                    <a href="#">
                        <li class="font-semibold text-xs hover:text-red-500 transition ease-out duration-500">Wikepidia
                        </li>
                    </a>
                    <a href="#">
                        <li class="font-semibold text-xs hover:text-red-500 transition ease-out duration-500">W3schools
                        </li>
                    </a>
                </ul>
                <ul class="text-center">
                    <a href="#">
                        <li class="font-semibold text-sm pb-1">A PROPOS NOUS</li>
                    </a>
                    <a href="#">
                        <li class="font-semibold text-xs hover:text-red-500 transition ease-out duration-500">Notre
                            objectifs</li>
                    </a>
                    <a href="#">
                        <li class="font-semibold text-xs hover:text-red-500 transition ease-out duration-500">Video
                            explecatifs</li>
                    </a>
                </ul>
                <ul class="text-center">
                    <a href="#">
                        <li class="font-semibold text-sm pb-1">CONTACT</li>
                    </a>
                    <a href="#">
                        <li class="font-semibold text-xs hover:text-red-500 transition ease-out duration-500">Email</li>
                    </a>
                    <a href="#">
                        <li class="font-semibold text-xs hover:text-red-500 transition ease-out duration-500">N
                            telephone</li>
                    </a>
                </ul>
            </div>
            <div>
                <div class="font-semibold text-xs text-white border-t border-slate-300 py-2 px-2">
                    <span>© 2023 planet.Dev™ All Rights Reserved.</span>
                </div>
                <div>

                </div>
            </div>
        </div>
    </footer>
    <script src="assets\js\style.js"></script>

</body>

</html>