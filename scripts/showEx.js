var wasSomethingClicked =0;

var simp = "simple_EX";
var tech = "tech_EX";
var vis ="visual_EX";

function setViability(id) {
    var e = document.getElementById(id);
    if(e.style.display == 'block') {
        e.style.display = 'none';
    } else {
        e.style.display = 'block';
    }
}

function turnOff(id) {
    var e = document.getElementById(id);
    if(e.style.display != 'none') {
        e.style.display = 'none';
    }
}


function toggleSimpleEX() {
    setViability(simp);
    turnOff(tech);
    turnOff(vis);

    /*wasSomethingClicked = wasSomethingClicked + 1;
    var simp = document.getElementById("simple_EX");
    var tech = document.getElementById("tech_EX");
    var vis = document.getElementById("visual_EX");
    //tech.style.display = "none";

    if(simp.style.display !== "none") {
        simp.style.display = "block";
    } else {
        simp.style.display = "block";
    }*/
}

function toggleTechnicalEX() {
    setViability(tech);
    turnOff(simp);
    turnOff(vis);
    /*wasSomethingClicked = wasSomethingClicked + 1;
    var ex = document.getElementById("tech_EX");
    if(ex.style.display !== "none") {
        ex.style.display = "block";
    } else {
        ex.style.display = "none";
    }*/
}

function toggleVisualEX() {
    setViability(vis);
    turnOff(simp);
    turnOff(tech)
    /*wasSomethingClicked = wasSomethingClicked + 1;
    var ex = document.getElementById("visual_EX");
    if(ex.style.display !== "none") {
        ex.style.display = "block";
    } else {
        ex.style.display = "none";
    }*/
}

function checkIfClicked(event) {
    if(wasSomethingClicked <=2) {
        event.preventDefault();
        event.stopImmediatePropagation();
        alert("You must view all the recommendations before proceeding ");
    }
}