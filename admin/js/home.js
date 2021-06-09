function delt(phone){
    window.location="./config/delete.php?ph="+phone;
}

if(localStorage.getItem('users')!='1'){
    window.location='signup.php';
}