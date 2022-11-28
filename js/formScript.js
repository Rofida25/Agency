


function signIn()
{

    var username = document.getElementById("userName").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;
    var userLen = false; 
    var nnum = false;   
    var com = false;
    var passlen = false; 
    var phonelen=false;
    var phonebg=false;


    if (username.length >= 5) {
        userLen = true;
    } else {
        confirm("check you Name")
    }
 
    for (i = 0; i < username.length; i++) {
        
        if (!Number(username[i])) {
            nnum = true;
        } else {
            nnum = false
            alert(" your frist name shouldn't contain any numbers ");
        }
    }

    if (pass.length >= 7) {
        passlen = true;
       
    } else {
        alert(" short password ...! ");
    }
 

    if (phone.length = 11) {
        phonelen = true;
       
    } else {
        alert(" wrong phone ...! ");
    }
    if(phone[0]==0&&phone[1]==1){
    phonebg = true;
    }
    if (email.includes(".com"))
    {
       com = true;
   }
    else 
   {
       alert(" Error at your E-mail  ");
   }



    if (userLen == true && nnum == true && com == true && phonelen == true && passlen == true && phonebg == true) {
        window.open("file:///G:/Web%20Engineering%20(2)/Project/Project/Agency.HTML");



    } else {
        alert("try agin")
    }



}


