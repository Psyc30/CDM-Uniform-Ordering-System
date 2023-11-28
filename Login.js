let username;

document.getElementById("button").onclick = function(){

    username = document.getElementById("StudentNumber").value;

    if(username === "" ) {
        return window.alert("error")
    }

    return true;
}