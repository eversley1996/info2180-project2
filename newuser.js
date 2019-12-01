let submitForm = (form) =>{
    let firstname = form.firstname.value;
    let lastname = form.lastname.value;
    let password = form.password.value;
    let email = form.email.value;

    let chkFname = checkFirstName(form, firstname);
    let chkLname = checkLastName(form, lastname);
    let chkPass = checkPassword(form, password);
    let chkEmail = checkEmail(form, email);

    if (chkFname && chkLname && chkPass && chkEmail){
        return true;
    }
    return false;
}   

let checkPassword= (form, password) =>{
    let pattern = /(?-i)(?=^.{8,}$)((?!.*\s)(?=.*[A-Z])(?=.*[a-z]))(?=(1)(?=.*\d)|.*[^A-Za-z0-9])^.*$/;

    if ((password != "") && (pattern.test(password))==true){
        return true;
    }
    else{
        form.password.style.color = "red";
        form.password.style.border = "thick solid red";
        return false;
    }
}

let checkFirstName = (form, firstname) =>{
    if (firstname == ""){
        form.firstname.style.color = "red";
        form.firstname.style.border = "thick solid red";
        return false;
    }
    return true;
}

let checkLastName = (form, lastname) =>{
    if (lastname == ""){
        form.lastname.style.color = "red";
        form.lastname.style.border = "thick solid red";
        return false;
    }
    return true;
}

let checkEmail = (form, email) =>{
    if(email == " " || email == null){
        return false;
    }else{
        let pattern =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if((pattern.test(email)) == false){
            form.email.style.color = "red";
            form.email.style.border = "thick solid red";
            return false;
        }
        return true;
    }
}