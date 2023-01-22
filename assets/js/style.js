
document.addEventListener('DOMContentLoaded',loadPage);

function loadPage(){

    let page=document.body.id;
    switch  (page)  {
        case 'index' :
            navResponsive();
        break;
        case 'signUP' :
            validationForm();
        break;
    }

}



function navResponsive(){
    const barmenu=document.querySelector('#symbol-menu');
const menu=document.querySelector('#menu');

barmenu.addEventListener('click',()=>{
    if(menu.classList.contains('hidden')){
        menu.classList.remove('hidden');
    }else{
        menu.classList.add('hidden');
    }
});
}



function validationForm(){
const username=document.querySelector('#username');
const email=document.querySelector('#email');
const password=document.querySelector('#password');
const passwordConfirm=document.querySelector('#confirmerpassword');
const form=document.querySelector('#signUP');

const isEmailValid=(email)=>{
    const regix= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regix.test(email);
}

const isUsernameValid=(name)=>{
    const regix = /^[A-Za-z]{3,15}$/;
    return regix.test(name);

}
const IsRequired=value => value==='' ?   false:  true;
const isPasswordValid = (password) => {
    const regix = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{3,}$/;
    return regix.test(password);
};

const showErrorMessage=(input,message)=>{
    const Formfield=input.parentElement;
    Formfield.classList.remove('success');
    Formfield.classList.add('error');
    const error=Formfield.querySelector("small");
    error.textContent=message;

}
const showSuccesMessage=(input)=>{
    const Formfield=input.parentElement;
    Formfield.classList.remove('error');
    Formfield.classList.add('success');
    const error=Formfield.querySelector("small");
    error.textContent='';

}


form.addEventListener('submit',(e)=>{
    e.preventDefault();
    let isUsernameValid=checkUserName(),isEmailValid=checkEmail(),isPasswordValid=checkPassword(),
                        isConfirmPasswordValid=checkConfirmPassword();
    let isformValid=isUsernameValid && isEmailValid && isPasswordValid  &&  isConfirmPasswordValid;
    if(isformValid){
    }
});

const checkUserName=()=>{
    let valid=false;
    const min=3,max=15;
    const usernom=username.value.trim();
    if(!IsRequired(usernom)){
        showErrorMessage(username,'Username cannot be blank.');
    }else if(!isUsernameValid(usernom)){
        showErrorMessage(username,`Username must be between ${min} and ${max} charactere .`);
    }else{
        showSuccesMessage(username);
        valid=true;
    }
    return valid;
}

const checkEmail=()=>{
    let valid=false;
    const emailE=email.value.trim();
    if(!IsRequired(emailE)){
        showErrorMessage(email,'Email cannot be blank.');
    }else if(!isEmailValid(emailE)){
        showErrorMessage(email,'Email is not Valid');
    }else{
        showSuccesMessage(email);
        valid=true;
    }
    return valid;

}

const checkPassword=()=>{
    let valid=false;
    const passwordE=password.value.trim();
    if(!IsRequired(passwordE)){
        showErrorMessage(password,'Password cannot be blank.');
    }else if(!isPasswordValid(passwordE)){
        showErrorMessage(password,'Password must has at least 3 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number');
    }else{
        showSuccesMessage(password);
        valid=true;
    }
    return valid;
}
const checkConfirmPassword=()=>{
    let valid=false;
    const confirm=passwordConfirm.value.trim();
    const pwd=password.value.trim();
    if(!IsRequired(confirm)){
        showErrorMessage(passwordConfirm,'Please enter the password again');
    }else if(confirm!==pwd){
        showErrorMessage(passwordConfirm,'The password does not match');
    }else{
        showSuccesMessage(passwordConfirm);
        valid=true;
    }
    return valid;
}

form.addEventListener('keyup',(e)=>{
    switch(e.target.id){
        case 'username':
            checkUserName();
        break;
        case 'email':
            checkEmail();
        break;
        case 'password':
            checkPassword();
        break;
        case 'confirmerpassword':
            checkConfirmPassword();
        break;
    }
})
}