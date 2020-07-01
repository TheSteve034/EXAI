var simpClickCount =0;
var techClickCount =0;
var visClickCount =0;
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
    simpClickCount++;
    setViability(simp);
    turnOff(tech);
    turnOff(vis);
}

function toggleTechnicalEX() {
    techClickCount++;
    setViability(tech);
    turnOff(simp);
    turnOff(vis);
}

function toggleVisualEX() {
    visClickCount++;
    setViability(vis);
    turnOff(simp);
    turnOff(tech)
}