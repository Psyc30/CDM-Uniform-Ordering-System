// CDM POLO 
let Pprice, Psize;
document.getElementById("psmall").onclick = function(){
    Pprice = 450;
    document.getElementById("price-display1").innerHTML = Pprice;
    Psize = "S";
}
document.getElementById("pmedium").onclick = function(){
    Pprice = 450;
    document.getElementById("price-display1").innerHTML = Pprice;
    Psize = "M";
}
document.getElementById("plarge").onclick = function(){
    Pprice = 475;
    document.getElementById("price-display1").innerHTML = Pprice;
    Psize = "L";
}
document.getElementById("pxlarge").onclick = function(){
    Pprice = 500;
    document.getElementById("price-display1").innerHTML = Pprice;
    Psize = "XL";
}
document.getElementById("pxxlarge").onclick = function(){
    Pprice = 525;
    document.getElementById("price-display1").innerHTML = Pprice;
    Psize = "XXL";
}

let Pquanti, Pnewprice;
document.getElementById("quanti1").onclick = function(){
    Pquanti = document.getElementById("quanti1").value;
    Pnewprice = Pprice * Pquanti;
    document.getElementById("price-display1").innerHTML = Pnewprice;
}

let polo_q, polo_s, polo_p;
document.getElementById("add-cart1").onclick = function(){
    polo_q = document.getElementById("polo-q");
    polo_s = document.getElementById("polo-s");
    polo_p = document.getElementById("polo-p");
 
    polo_q.value = Pquanti;
    polo_s.value = Psize;
    polo_p.value = Pnewprice;

    document.getElementById("polo-quanti").innerHTML = Pquanti;
    document.getElementById("polo-price").innerHTML = Pnewprice;
    document.getElementById("polo-size").innerHTML = Psize;
}

document.getElementById("clear1").onclick = function(){
    polo_q = document.getElementById("polo-q");
    polo_s = document.getElementById("polo-s");
    polo_p = document.getElementById("polo-p");

    polo_q.value = "";
    polo_s.value = "";
    polo_p.value = "";

    document.getElementById("polo-quanti").innerHTML = "";
    document.getElementById("polo-price").innerHTML = "";
    document.getElementById("polo-size").innerHTML = "";


}

// CDM BLOUSE
let Bprice, Bsize;
document.getElementById("bsmall").onclick = function(){
    Bprice = 450;
    document.getElementById("price-display2").innerHTML = Bprice;
    Bsize = "S";
}
document.getElementById("bmedium").onclick = function(){
    Bprice = 450;
    document.getElementById("price-display2").innerHTML = Bprice;
    Bsize = "M";
}
document.getElementById("blarge").onclick = function(){
    Bprice = 475;
    document.getElementById("price-display2").innerHTML = Bprice;
    Bsize = "L";
}
document.getElementById("bxlarge").onclick = function(){
    Bprice = 500;
    document.getElementById("price-display2").innerHTML = Bprice;
    Bsize = "XL";
}
document.getElementById("bxxlarge").onclick = function(){
    Bprice = 525;
    document.getElementById("price-display2").innerHTML = Bprice;
    Bsize = "XXL";
}

let Bquanti, Bnewprice;
document.getElementById("quanti2").onclick = function(){
    Bquanti = document.getElementById("quanti2").value;
    Bnewprice = Bprice * Bquanti;
    document.getElementById("price-display2").innerHTML = Bnewprice;
}

let blouse_q, blouse_s, blouse_p;
document.getElementById("add-cart2").onclick = function(){
    blouse_q = document.getElementById("blouse-q");
    blouse_s = document.getElementById("blouse-s");
    blouse_p = document.getElementById("blouse-p");
 
    blouse_q.value = Bquanti;
    blouse_s.value = Bsize;
    blouse_p.value = Bnewprice;

    document.getElementById("blouse-quanti").innerHTML = Bquanti;
    document.getElementById("blouse-price").innerHTML = Bnewprice;
    document.getElementById("blouse-size").innerHTML = Bsize;
}
document.getElementById("clear2").onclick = function(){
    blouse_q = document.getElementById("blouse-q");
    blouse_s = document.getElementById("blouse-s");
    blouse_p = document.getElementById("blouse-p");
 
    blouse_q.value = "";
    blouse_s.value = "";
    blouse_p.value = "";

    document.getElementById("blouse-quanti").innerHTML = "";
    document.getElementById("blouse-price").innerHTML = "";
    document.getElementById("blouse-size").innerHTML = "";
}

// GREEN SLACKS
let Sprice, Ssize;
document.getElementById("ssmall").onclick = function(){
    Sprice = 450;
    document.getElementById("price-display3").innerHTML = Sprice;
    Ssize = "S";
}
document.getElementById("smedium").onclick = function(){
    Sprice = 450;
    document.getElementById("price-display3").innerHTML = Sprice;
    Ssize = "M";
}
document.getElementById("slarge").onclick = function(){
    Sprice = 475;
    document.getElementById("price-display3").innerHTML = Sprice;
    Ssize = "L";
}
document.getElementById("sxlarge").onclick = function(){
    Sprice = 500;
    document.getElementById("price-display3").innerHTML = Sprice;
    Ssize = "XL";
}
document.getElementById("sxxlarge").onclick = function(){
    Sprice = 525;
    document.getElementById("price-display3").innerHTML = Sprice;
    Ssize = "XXL";
}
let Squanti, Snewprice;
document.getElementById("quanti3").onclick = function(){
    Squanti = document.getElementById("quanti3").value;
    Snewprice = Sprice * Squanti;
    document.getElementById("price-display3").innerHTML = Snewprice;
}

let slacks_q, slacks_s, slacks_p;
document.getElementById("add-cart3").onclick = function(){
    slacks_q = document.getElementById("slacks-q");
    slacks_s = document.getElementById("slacks-s");
    slacks_p = document.getElementById("slacks-p");
 
    slacks_q.value = Squanti;
    slacks_s.value = Ssize;
    slacks_p.value = Snewprice;

    document.getElementById("slacks-quanti").innerHTML = Squanti;
    document.getElementById("slacks-price").innerHTML = Snewprice;
    document.getElementById("slacks-size").innerHTML = Ssize;
}
document.getElementById("clear3").onclick = function(){
    slacks_q = document.getElementById("slacks-q");
    slacks_s = document.getElementById("slacks-s");
    slacks_p = document.getElementById("slacks-p");
 
    slacks_q.value = "";
    slacks_s.value = "";
    slacks_p.value = "";

    document.getElementById("slacks-quanti").innerHTML = "";
    document.getElementById("slacks-price").innerHTML = "";
    document.getElementById("slacks-size").innerHTML = "";
}

// PE SHIRT
let PSprice, PSsize;
document.getElementById("PSsmall").onclick = function(){
    PSprice = 350;
    document.getElementById("price-display4").innerHTML = PSprice;
    PSsize = "S";
}
document.getElementById("PSmedium").onclick = function(){
    PSprice = 350;
    document.getElementById("price-display4").innerHTML = PSprice;
    PSsize = "M";
}
document.getElementById("PSlarge").onclick = function(){
    PSprice = 375;
    document.getElementById("price-display4").innerHTML = PSprice;
    PSsize = "L";
}
document.getElementById("PSxlarge").onclick = function(){
    PSprice = 400;
    document.getElementById("price-display4").innerHTML = PSprice;
    PSsize = "XL";
}
document.getElementById("PSxxlarge").onclick = function(){
    PSprice = 425;
    document.getElementById("price-display4").innerHTML = PSprice;
    PSsize = "XXL";
}
let PSquanti, PSnewprice;
document.getElementById("quanti4").onclick = function(){
    PSquanti = document.getElementById("quanti4").value;
    PSnewprice = PSprice * PSquanti;
    document.getElementById("price-display4").innerHTML = PSnewprice;
}

let peshirt_q, peshirt_s, peshirt_p; 
document.getElementById("add-cart4").onclick = function(){
    peshirt_q = document.getElementById("peshirt-q");
    peshirt_s = document.getElementById("peshirt-s");
    peshirt_p = document.getElementById("peshirt-p");
 
    peshirt_q.value = PSquanti;
    peshirt_s.value = PSsize;
    peshirt_p.value = PSnewprice;

    document.getElementById("PEshirt-quanti").innerHTML = PSquanti;
    document.getElementById("PEshirt-price").innerHTML = PSnewprice;
    document.getElementById("PEshirt-size").innerHTML = PSsize;
}

document.getElementById("clear4").onclick = function(){
    peshirt_q = document.getElementById("peshirt-q");
    peshirt_s = document.getElementById("peshirt-s");
    peshirt_p = document.getElementById("peshirt-p");
 
    slacks_q.value = "";
    slacks_s.value = "";
    slacks_p.value = "";
    
    document.getElementById("PEshirt-quanti").innerHTML = "";
    document.getElementById("PEshirt-price").innerHTML = "";
    document.getElementById("PEshirt-size").innerHTML = "";
}

// PE SHIRT
let PPprice, PPsize;
document.getElementById("PPsmall").onclick = function(){
    PPprice = 425;
    document.getElementById("price-display5").innerHTML = PPprice;
    PPsize = "S";
}
document.getElementById("PPmedium").onclick = function(){
    PPprice = 425;
    document.getElementById("price-display5").innerHTML = PPprice;
    PPsize = "M";
}
document.getElementById("PPlarge").onclick = function(){
    PPprice = 450;
    document.getElementById("price-display5").innerHTML = PPprice;
    PPsize = "L";
}
document.getElementById("PPxlarge").onclick = function(){
    PPprice = 475;
    document.getElementById("price-display5").innerHTML = PPprice;
    PPsize = "XL";
}
document.getElementById("PPxxlarge").onclick = function(){
    PPprice = 500;
    document.getElementById("price-display5").innerHTML = PPprice;
    PPsize = "XXL";
}
let PPquanti, PPnewprice;
document.getElementById("quanti5").onclick = function(){
    PPquanti = document.getElementById("quanti5").value;
    PPnewprice = PPprice * PPquanti;
    document.getElementById("price-display5").innerHTML = PPnewprice;
}

let pepants_q, pepants_s, pepants_p;
document.getElementById("add-cart5").onclick = function(){
    pepants_q = document.getElementById("pepants-q");
    pepants_s = document.getElementById("pepants-s");
    pepants_p = document.getElementById("pepants-p");
 
    pepants_q.value = PPquanti;
    pepants_s.value = PPsize;
    pepants_p.value = PPnewprice;

    document.getElementById("PEpants-quanti").innerHTML = PPquanti;
    document.getElementById("PEpants-price").innerHTML = PPnewprice;
    document.getElementById("PEpants-size").innerHTML = PPsize;
}
document.getElementById("clear5").onclick = function(){
    pepants_q = document.getElementById("pepants-q");
    pepants_s = document.getElementById("pepants-s");
    pepants_p = document.getElementById("pepants-p");
 
    pepants_q.value = "";
    pepants_s.value = "";
    pepants_p.value = "";

    document.getElementById("PEpants-quanti").innerHTML = "";
    document.getElementById("PEpants-price").innerHTML = "";
    document.getElementById("PEpants-size").innerHTML = "";
}

// ID LACE
let IDprice = 60, IDquanti, IDnewprice;
document.getElementById("quanti6").onclick = function(){
    IDquanti = document.getElementById("quanti6").value;
    IDnewprice = IDprice * IDquanti;
    document.getElementById("price-display6").innerHTML = IDnewprice;
}

let idlace_q, idlace_p;
document.getElementById("add-cart6").onclick = function(){
    idlace_q = document.getElementById("idlace-q");
    idlace_p = document.getElementById("idlace-p");
 
    idlace_q.value = IDquanti;
    idlace_p.value = IDnewprice;

    document.getElementById("lace-quanti").innerHTML = IDquanti;
    document.getElementById("lace-price").innerHTML = IDnewprice;
}
document.getElementById("clear6").onclick = function(){
    idlace_q = document.getElementById("idlace-q");
    idlace_p = document.getElementById("idlace-p");
 
    idlace_q.value = "";
    idlace_p.value = "";
    
    document.getElementById("lace-quanti").innerHTML = "";
    document.getElementById("lace-price").innerHTML = "";
}


