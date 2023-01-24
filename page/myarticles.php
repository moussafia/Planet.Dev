<?php

include('autolaoder.php');
include('../script_PHP/script.php');

if (isset($_SESSION['idAdmin'])) {
    include('./navbar/header.php');
 
    ?>
            <div class="mt-14 lg:mt-0" id="myarticle">
                <div class="flex px-10 justify-between">
                    <button type="button"
                        class="flex gap-2 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                        <span class="hidden md:inline">Delete All</span>
                    </button>
                    <button type="button" id="openModalADD"
                        class="flex gap-1 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                          </svg>                      
                        <span class="hidden md:inline">ADD article</span></button>
                </div>
                <div class="px-4 mt-20">
                    <form action="">
                        <div class="lg:grid lg:grid-cols-4 lg:gap-60 lg:px-36">
                            <div class="lg:col-span-2 input-group relative flex items-stretch w-full lg:w-96 mb-4 gap-1">
                                <input type="search"
                                    class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                <button
                                    class="btn px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center"
                                    type="button" id="button-addon2">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
                                        class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <div class="lg:col-span-2 lg:w-96 px-12">
                                <select id="countries"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>selectionner selon date ajoute</option>
                                    <option value="OC">trier par ordre croissante</option>
                                    <option value="OD">trier par ordre decroissante</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-14 mx-14 lg:mx-24">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Tiltle
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    thumbnail
                                </th>
                                <th scope="col" class="pl-16 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <?php
                        $idAdmin = $_SESSION['idAdmin'];
                            $fetsh = Articles ::fetshArticles($idAdmin);
                            foreach($fetsh as $row){
                        ?>
                        <tbody>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $row['title'];  ?>
                                </th>
                                <td class="px-6 py-4">
                                <?= $row['category'];  ?>
                                </td>
                                <td class="px-6 py-4">
                                <?= $row['thumbnail'];  ?>
                                </td>
                                <td class="px-6 py-4 flex gap-3">
                                    <button type="button" onclick="remplirForm(`<?= $row['id'] ?>`,`<?= $row['title'] ?>`,`<?= $row['idCategory'] ?>`,`<?= $row['article'] ?>`)"
                                        class="flex gap-1 focus:outline-none text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-offset-blue-100 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                          </svg>     
                                        <span class="hidden md:inline">Edit</span></button>
                                    <button type="button"
                                        class="flex gap-1 focus:outline-none text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                          </svg>
                                        <span class="hidden md:inline">Delete</span></button>
                                </td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div> 
            <!--modal here-->
            <div class="min-w-fit bg-white rounded mx-16 py-4 shadow-md md:px-16 my-14 lg:my-4 transition-opacity ease-in-out" id="modal-popup">
                <form action="" id="dynamiqueForm" method="POST" enctype="multipart/form-data">
                    <div class="border-b border-slate-300 mx-4 flex justify-between items-center">
                        <p class="py-4 type-modale font-serif tracking-wider text-2xl bold">
                        </p>
                        <div class="hover:bg-red-400 hever:shadow-sm rounded cursor-pointer">
                            <button type="button" class="closeM1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                              </svg>
                              </button>
                        </div>
                    </div>
                    <div class="input-dynamic py-4 px-4 md:px-0">
                        <div class="remove-formdynamique pb-2 flex justify-end gap-4 px-12 ">
                            <button type="button" onclick="removeForm(this)"
                                class="btn-remove-form focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-offset-gray-100 font-medium rounded-lg text-sm px-2 py-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-lg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <input type="hidden" id="hideINParticle" name="hideINParticle">
                        <div>
                            <input type="text" name="TitleArticle[]" placeholder="Title"
                                class="titleInput block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <input name="imageArticle[]" accept="image/png, image/jpeg"
                                class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="default_size" type="file">
                        </div>
                        <div class="py-4 countainer-select">
                            <select name="categoryArticle[]" onchange="selectOption(this)"
                                class="selectCategory block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <?php 
                                    $ctg=Category ::fetshcategory();
                                    foreach($ctg as $row){ ?>
                                <option value="<?php echo $row['id'] ?>"><?php echo $row['category']; ?></option>
                                <?php } ?>
                                <option  value="other">Autre</option>
                            </select>
                        </div>
                        <div>
                            <textarea name="articleINP[]" rows="4" 
                                class="block p-2.5 w-full h-screen text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Write your thoughts here..."></textarea>

                        </div>
                        <hr class="mt-6 border-t border-slate-300">
                    </div>
                    <div class="" id="newINPfiled">

                    </div>
                    <div class=" flex justify-between items-center px-6">
                        <div>
                            <button type="button"
                                class="add-form-dynamic flex gap-1 focus:outline-none text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-offset-blue-100 font-medium rounded-lg text-sm px-2 py-1 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-12 h-4 text-lg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex gap-3">
                            <button type="button"
                                class="cancelModal flex gap-1 focus:outline-none text-white bg-gray-400 hover:bg-gray-600 focus:ring-4 focus:ring-offset-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">
                                <p class="hidden md:inline">Cancel</p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                            <button type="submit" name="shareArticle"
                                class="create_Article flex gap-1 focus:outline-none text-white bg-blue-400 hover:bg-blue-600 focus:ring-4 focus:ring-offset-blue-100 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">
                                <p class="hidden md:inline">share</p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                </svg>
                            </button>
                            <button type="submit" name="editArticle"
                                class="EDit_Article flex gap-1 focus:outline-none text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-offset-blue-100 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                                <span class="hidden md:inline">Edit</span></button>
                        </div>
                    </div>
                </form>
            </div>       
        </div>
    </div>
    <script src="./formdynamique.js"></script>
</body>

</html>
<?php }else{
    header('location: ../index.php');
}
