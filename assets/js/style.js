const barmenu=document.querySelector('#symbol-menu');
const menu=document.querySelector('#menu');
console.log(menu);

barmenu.addEventListener('click',()=>{
    if(menu.classList.contains('hidden')){
        menu.classList.remove('hidden');
    }else{
        menu.classList.add('hidden');
    }
})