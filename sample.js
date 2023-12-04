// let a = Number(prompt("Enter Adjacent Value: "))
// let b = Number(prompt("Enter Opposite Value: "))

// let hypotenuse;

// a = Math.pow(a, 2)
// b = Math.pow(b, 2)

// hypotenuse = Math.sqrt(a + b)

// console.log(hypotenuse)
let a;
let b;
let hypotenuse;

document.getElementById("submitbutton").onclick = function(){

    a = Number(document.getElementById("Atextbox").value);
    b = Number(document.getElementById("Btextbox").value);
    
    hypotenuse = Math.sqrt(Math.pow(a, 2) + Math.pow(b, 2));

    document.getElementById("result").innerHTML = "Hypotenuse:" + hypotenuse;

}