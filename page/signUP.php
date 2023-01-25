<?php
include('autolaoder.php');
include('../script_PHP/script.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/outputStyle/style.css">
    <title>Sign UP</title>
</head>

<body class="bg-gray-100" id="signUP">
    <div class="flex justify-center items-center my-20 mx-4 md:my-10 md:mx-40 ">
        <div class="bg-white rounded ouverflow-hidden shadow-md  w-full">
            <div class="py-3 px-3 items-center my-2">
                <form method="post" id="autentification" name="autentification">
                    <div class="py-2 px-2 form-field">
                        <label class="block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700 py-2">Username</span>
                        </label>
                            <input type="text" placeholder="Username" class="mt-1 px-3 py-2 bg-white border shadow-sm 
                            border-slate-300 placeholder-slate-400 focus:outline-none  
                            block w-full rounded-md sm:text-sm focus:ring-1 " 
                            id="username" name="adminName"/>
                            <small></small>
                    </div>
                    <div class="py-2 px-2 form-field ">
                        <label class="block">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700 py-2">
                                Email
                            </span></label>
                            <input type="email" name="email" class="mt-1 px-3 py-2 bg-white border shadow-sm 
                            border-slate-300 placeholder-slate-400 focus:outline-none 
                            block w-full rounded-md sm:text-sm focus:ring-1 " placeholder="you@example.com"
                              id="email" name="email" />
                            <small></small>
                        
                    </div>
                    <div class="py-2 px-2 form-field">
                        <label class="block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700 py-2">Password</span>
                        </label>
                            <input type="password" placeholder="Password" class="mt-1 px-3 py-2 bg-white border shadow-sm 
                            border-slate-300 placeholder-slate-400 focus:outline-none 
                            block w-full rounded-md sm:text-sm focus:ring-1" 
                            id="password" name="password"/>
                            <small></small>
                       
                    </div>
                    <div class="py-2 px-2 form-field">
                        <label class="block">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700 py-2">Confirmer Password</span>
                        </label>
                            <input type="password" placeholder="Confirmer password" class="mt-1 px-3 py-2 bg-white border shadow-sm 
                            border-slate-300 placeholder-slate-400 focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1" 
                            id="confirmerpassword"/>
                            <small></small>
                        
                    </div>
                    <div class="py-2 flex justify-center">
                        <button type="submit" class="btn text-primary border-primary md:border-2 hover:bg-primary 
                        hover:text-white transition ease-out duration-500 tracking-wider" id="enregistrer" name="enregistrerAdmin" ><span>Enregistrer</span></button>
                    </div>
                    <div class="flex justify-center">
                        <a href="signIN.php" class="tracking-wider text-primary hover:text-red transition ease-out duration-500"><span>Se connecter</span></a>
                    </div>
    
                </form>
            </div>
        </div>
    </div>
    <script src="../assets/js/style.js"></script>
</body>

</html>