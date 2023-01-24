<?php

include('autolaoder.php');
include('../script_PHP/script.php');
if (isset($_GET['article'])) {
    $article = Articles::readarticles($_GET['article']);
    foreach ($article as $row) {



        if (isset($_SESSION['idAdmin'])) {
            include('./navbar/header.php'); ?>
            <div class="flex flex-col items-center overflow-x-hidden">
                <div id="" class="py-8 text-center">

                    <h2 class="font-bold text-4xl font-serif"><?=$row['title']; ?></h2>
                </div>
                <div class="max-w-md rounded overflow-hidden max-h-fit">
                    <img src="../assets/imgUploaded/<?=$row['thumbnail'] ?>" class="px-4">
                </div>

                <div class="mt-14 px-16">
                    <p class="indent-8 text-lg font-serif"><?=$row['article'] ?>
                    </p>
                </div>
            </div>
            <div class="text-end px-28 py-14">
                <p class="text-md font-serif italic"><?=$row['name'] ?></p>
            </div>
            </div>
            </div>
            </body>

            </html>
            <?php
        }
    }

} else {
    header('location: ../index.php');
}
