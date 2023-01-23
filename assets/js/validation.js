function showEroor(input, message){
    let formControl = input.parentElement ;
    input.classList.add('border-danger') ;
    let small = formControl.querySelector("small") ;
    small.classList.add("text-danger") ;
    small.innerText = message ;
}

function showSuccess(input){
    input.classList.add("border-success")
}

function isValidEmail(email){
    let pattern =/^(([^<>()[]\.,;:\s@"]+(.[^<>()[]\.,;:\s@"]+)*)|(".+"))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/ ;
    return pattern.test(email.value);
}

let btnLogin = document.getElementById("login");
let Name = document.getElementById("name") ;
let email = document.getElementById("email") ;
let password = document.getElementById("password") ;
let passwordC = document.getElementById("passwordd") ;

btnLogin.addEventListener('click', (e)=>{

   if (Name != null) {
    if(Name.value == ""){
        e.preventDefault() ;
        showEroor(Name, "Name is required !!")
    }else{
        showSuccess(Name, "Name is good")
    }
   }
    
    if(email.value == ""){
        e.preventDefault() ;
        showEroor(email, "Email is required !!")
    }else{
        if (isValidEmail(email)) {
            showSuccess(email, "Email is good")
        }else{
            showEroor(email, "Email not valide !!")
        }
         
    }

    if(password.value == ""){
        e.preventDefault() ;
        showEroor(password, "Password is required !!")
    }else{ 
        showSuccess(password, "Password is good")
    }

   if (passwordC != null) {
    if(passwordC.value == ""){
        e.preventDefault() ;
        showEroor(passwordC, "Password is required !!")
    }else{
        
        showSuccess(passwordC, "password is good")
    }

    if(passwordC.value != password.value ){
        e.preventDefault() ;
        showEroor(passwordC, "Password not match !!")
    }else{
        
        showSuccess(passwordC, "password is good")
    }
   }

})