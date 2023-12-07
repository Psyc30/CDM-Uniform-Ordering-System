function registrationvalidation(){

    var fullname = document.getElementById("fullname").value;
    var course = document.getElementById("course").value;
    var studentno = document.getElementById("studentno").value;
    var address = document.getElementById("address").value;
    var cellnumber = document.getElementById("cellnumber").value;
    var email = document.getElementById("email").value;

    if(fullname.trim()===''||course.trim()===''||studentno.trim()===''||address.trim()===''||cellnumber.trim()===''||email.trim()===''){
        alert("All field must be filled out");
        return false;
    }
    return true;
}