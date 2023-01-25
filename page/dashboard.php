<?php

include('autolaoder.php');
include('../script_PHP/script.php');

if (isset($_SESSION['idAdmin'])) {
    include('./navbar/header.php'); ?>
    <div class="grid grid-cols-3 gap-10 px-11 mt-14">
        <div class="py-12 bg-white-400 flex flex-col items-center rounded ouverflow-hidden shadow-md border-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                </svg>
            </div>
            <div class="hidden lg:block">nombre des articles</div>
            <p class="text-slate-500 pt-1 ">
                <?php
                $nbreArticles = Articles::nbrArticles();
                echo $nbreArticles;
                ?>
            </p>
        </div>
        <div class="py-12 bg-white-400 flex flex-col items-center rounded ouverflow-hidden shadow-md border-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>
            </div>
            <div class="hidden lg:block">nombre des utilisateurs</div>
            <p class="text-slate-500 pt-1 ">
                <?php nombreUtilisateur(); ?>
            </p>
        </div>
        <div class="py-12 bg-white-400 flex flex-col items-center rounded ouverflow-hidden shadow-md border-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                </svg>
            </div>
            <div class="hidden lg:block">nombre des écrivains</div>
            <p class="text-slate-500 pt-1 ">
                <?php
                $nbreEcrivain = Articles::nbrEcrivain();
                echo $nbreEcrivain;
                ?>
            </p>
        </div>
    </div>
    <div class="px-4 mt-20">
        <form action="">
            <div class="lg:grid lg:grid-cols-4 lg:gap-60 lg:px-36">
                <div class="lg:col-span-2 input-group relative flex items-stretch w-full lg:w-96 mb-4 gap-1">
                    <input type="search" id="rechercheDasgboard" oninput="search()"
                        class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="&#128270; Search" aria-label="Search" aria-describedby="button-addon2">
                </div>
                <div class="lg:col-span-2 lg:w-96 px-12">
                    <select id="type" onchange="filtrerType()"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="0" selected>selectionner selon date ajoute</option>
                        <option value="1">trier par ordre croissante</option>
                        <option value="2">trier par ordre decroissante</option>
                    </select>
                </div>
            </div>
        </form>
    </div>

    <div id="articles" class="grid grid-cols-1 sm:grid-cols-2 sm:gap-2 lg:grid-cols-4 lg:gap-2.5 px-4 mt-14">
        <?php
        $fetsh = Articles::fetshArticles();
        foreach ($fetsh as $row) {
            $idArticle = $row['id'];
            ?>
            <a href="readArticle.php?article=<?= $idArticle ?>" name="carte">
                <div class="max-w-sm rounded overflow-hidden shadow-lg cursor-pointer hover:bg-slate-200 mb-5" >
                    <input type="hidden" class="articleType" value="<?= $idArticle ?>">
                    <div class="h-40 overflow-hidden flex justify-center">
                        <img class="h-full object-cover" src="../assets/imgUploaded/<?= $row['thumbnail'] ?>"
                            alt="Sunset in the mountains">
                    </div>
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 titleDashboard">
                            <?= $row['title']; ?>
                        </div>
                        <p class="text-gray-700 text-base">
                            <?= displayCutString($row['article']) ?>
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                            <?= $row['name'] ?></span>
                        <span
                            class="inline-block text-center bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Read
                            more ...</span>
                    </div>
                </div>
            </a>
        <?php } ?>
    </div>
    </div>
    </div>
    <script>
       
       function filtrerType() {
            var filtre, carte, cellule, i, text;
            filtre = document.getElementById("type").value;
            carte = document.getElementsByName("carte");
            let max = 0;
            for (i = 0; i < carte.length; i++) {
                cellule = carte[i].getElementsByClassName("articleType")[0];
                let ordre = cellule.value;
                if (max < ordre) {
                    max = ordre;
                }
            }
            let min = max;
            for (i = 0; i < carte.length; i++) {
                cellule = carte[i].getElementsByClassName("articleType")[0];
                let ordre = cellule.value;
                if (min > ordre) {
                    min = ordre;
                }
            }
            for (i = 0; i < carte.length; i++) {
                cellule = carte[i].getElementsByClassName("articleType")[0];
                let ordre = cellule.value;
                carte[i].classList.remove("hidden");
            }
            for (i = 0; i < carte.length; i++) {
                cellule = carte[i].getElementsByClassName("articleType")[0];
                let ordre = cellule.value;
                if (filtre == 1 && ordre != max) {
                    carte[i].classList.add("hidden");
                }
                if (filtre == 2 && ordre != min) {
                    carte[i].classList.add("hidden");
                }
            }
        }

        function search() {
            var filtre, ligne, cellule, i, text;
            filtre = document.getElementById("rechercheDasgboard").value.toUpperCase();
            ligne = document.getElementsByName("carte");
            for (i = 0; i < ligne.length; i++) {
                cellule = ligne[i].getElementsByClassName("titleDashboard")[0];
                if (cellule) {
                    text = cellule.innerText;
                    if (text.toUpperCase().indexOf(filtre) > -1) {
                        ligne[i].style.display = "";
                    } else {
                        ligne[i].style.display = "none";
                    }
                }
            }
        }
    </script>
    </body>

    </html>
<?php } else {
    header('location: ../index.php');
}