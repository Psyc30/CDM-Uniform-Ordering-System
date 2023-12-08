function loginvalidation(){

    var StudentNumber = document.getElementById("StudentNumber").value;
    var password = document.getElementById("password").value;

    if(StudentNumber.trim()===''||password.trim()===''){
        alert("All field must be filled out");
        return false;
    }
    return true;
}