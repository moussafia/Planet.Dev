const ADDformDynamic=document.querySelector('.add-form-dynamic');
const inputdynamic=document.querySelector('.input-dynamic');
const newINPfiled=document.getElementById('newINPfiled');
const removeFormdynamique=document.querySelector('.remove-formdynamique');
let form=document.getElementById('dynamiqueForm');
let btnRemoveform=document.querySelector('.btn-remove-form');
form.children[1].children[0].classList.add('hidden');

ADDformDynamic.onclick=()=>{
    newINPfiled.appendChild(inputdynamic.cloneNode(true));
    form.children[2].lastChild.children[0].classList.remove('hidden');
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
    ADDformDynamic.classList.remove='hidden';
}

closeM1.onclick=()=>{
    myarticle.style.display='block';
    modalpopUp.style.display='none';
    // window.location.reload();
}
cancelModal.onclick=()=>{
    myarticle.style.display='block';
    modalpopUp.style.display='none';
    // newINPfiled.childNodes.forEach(element => {
    //     console.log(element)
    // });

}
function remplirForm(arg){
    myarticle.style.display='none';
    modalpopUp.style.display='block';
    ADDformDynamic.classList.add('hidden');
    typeModale.innerHTML='EDIT Article';
    EDit_Article.classList.remove('hidden')
    create_Article.classList.add('hidden');
}
