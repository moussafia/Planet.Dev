<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/style/outputStyle/style.css" />
    <title>article name</title>
</head>

<body class="bg-gray-100 w-screen" id="dashboard">
    <div class="lg:grid lg:grid-cols-7 h-screen overflow-x-hidden">
        <div class="col-span-1 bg-mycolor-100 py-3 lg:py-10  text-white fixed w-full lg:static lg:w-44 ">
            <div class="lg:fixed grid grid-cols-2 lg:grid-cols-none">
                <div class="flex lg:flex-col lg:items-center lg:px-10 text-center">
                    <div class="px-1">
                        <img src="../assets/image/profil.png" class="w-10 lg:w-16" />
                    </div>
                    <div class="font-mono tracking-wider pt-1 lg:pt-0 font-semibold"><?php echo $_SESSION['nameAdmin']; ?></div>
                </div>
                <div class="grid grid-cols-3 px-1 lg:grid-cols-none lg:px-0 gap-2 lg:gap-0">
                    <div class="lg:pl-4 pt-0 lg:pt-16">

                        <a href="dashboard.php" class="flex gap-2 hover:text-slate-300 transition ease-out duration-500">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                            </div>
                            <div class="hidden lg:block">dashboard
                            </div>
                        </a>

                    </div>
                    <div class="lg:pl-4 lg:pt-5">
                        <a href="myarticles.php" class="flex gap-2 hover:text-slate-300 transition ease-out duration-500">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                </svg>
                            </div>
                            <div class="hidden lg:block">My article</div>
                        </a>
                    </div>
                    <div class="lg:pl-4 lg:pt-5">
                        <a href="#" class="flex gap-2 hover:text-slate-300 transition ease-out duration-500">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                </svg>
                            </div>
                            <form method="post">
                            <div class="hidden lg:block"><button type="submit" name="logOUT">Log OUT</button></div>
                            </form>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-6 pt-12 overflow-x-hidden">