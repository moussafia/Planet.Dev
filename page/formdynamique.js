const ADDformDynamic=document.querySelector('.add-form-dynamic');
const inputdynamic=document.querySelector('.input-dynamic');
const newINPfiled=document.getElementById('newINPfiled');
const removeFormdynamique=document.querySelector('.remove-formdynamique');
let form=document.getElementById('dynamiqueForm');
let btnRemoveform=document.querySelector('.btn-remove-form');
form.children[1].children[0].classList.add('hidden');
const select = document.querySelector(".selectCategory");

ADDformDynamic.onclick=()=>{
    newINPfiled.appendChild(inputdynamic.cloneNode(true)); 
    form.children[2].lastChild.children[0].classList.remove('hidden');
   form.children[2].lastChild.children[4].children[1].remove();
}

function removeForm(item){
    let deleteDIV=item.parentElement;
    deleteDIV.parentElement.remove();

}

const openModalADD=document.getElementById('openModalADD');
const modalpopUp=document.getElementById('modal-popup');
const myarticle=document.getElementById('myarticle');
const typeModale=document.querySelector('.type-modale');
const closeM1=document.querySelector('.closeM1');
const cancelModal=document.querySelector('.cancelModal');
const EDit_Article=document.querySelector('.EDit_Article');
const create_Article=document.querySelector('.create_Article');

modalpopUp.style.display='none';
openModalADD.onclick=()=>{
    myarticle.style.display='none';
    modalpopUp.style.display='block';
    typeModale.innerHTML='ADD Articles';
    create_Article.classList.remove('hidden');
    EDit_Article.classList.add('hidden');
    ADDformDynamic.classList.remove('hidden');

}

closeM1.onclick=()=>{
    myarticle.style.display='block';
    modalpopUp.style.display='none';
    newINPfiled.innerHTML="";
}
cancelModal.onclick=()=>{
    myarticle.style.display='block';
    modalpopUp.style.display='none';
    newINPfiled.innerHTML="";

}
function remplirForm(idhide,title,select,text){
    myarticle.style.display='none';
    modalpopUp.style.display='block';
    ADDformDynamic.classList.add('hidden');
    typeModale.innerHTML='EDIT Article';
    EDit_Article.classList.remove('hidden')
    create_Article.classList.add('hidden');

    document.getElementById('hideINParticle').value=idhide;
    document.querySelector('.titleInput').value=title;
    document.querySelector('textarea').value=text;
    document.querySelector('.selectCategory').value=select;


}

const container = document.querySelector(".countainer-select");

function selectOption(arg) {
  if (arg.value === "other") {
    const input = document.createElement("input");
    input.type = "text";
    input.name="otherCategory[]";
    input.classList.add("inputHide");
    input.placeholder = "Enter other category";
    arg.parentElement.appendChild(input);
  } else {
       arg.parentElement.children[1].remove();
}};


function remplirINPhideDELETE(idhide){
    document.getElementById('inptDELETE').value=idhide;
}

     
       function filtrerType() {
            var filtre, table, cellule, i, text;
            filtre = document.getElementById("type").value;
            table = document.getElementsByName('tbMY');
            let max = 0;
            for (i = 0; i < table.length; i++) {
                cellule = table[i].getElementsByClassName("articleType")[0];
                let ordre = cellule.value;
                if (max < ordre) {
                    max = ordre;
                }
            }
            let min = max;
            for (i = 0; i < table.length; i++) {
                cellule = table[i].getElementsByClassName("articleType")[0];
                let ordre = cellule.value;
                if (min > ordre) {
                    min = ordre;
                }
            }
            for (i = 0; i < table.length; i++) {
                cellule = table[i].getElementsByClassName("articleType")[0];
                table[i].classList.remove("hidden");
            }
            for (i = 0; i < table.length; i++) {
                cellule = table[i].getElementsByClassName("articleType")[0];
                let ordre = cellule.value;
                if (filtre == 1 && ordre != max) {
                    table[i].classList.add("hidden");
                }
                if (filtre == 2 && ordre != min) {
                    table[i].classList.add("hidden");
                }
            }
        }

        function search() {
            var filtre, ligne, cellule, i, text;
            filtre = document.getElementById("rechercheDasgboard").value.toUpperCase();
            ligne = document.getElementsByName("tbMY");
            for (i = 0; i < ligne.length; i++) {
                cellule = ligne[i].getElementsByClassName("titleMYarticle")[0];
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
   