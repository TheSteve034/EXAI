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

function resetClickCounts() {
    simpClickCount =0;
    techClickCount =0;
    visClickCount =0;
}

function submitClicks() {
    const data = new FormData();

    data.append("sCount",simpClickCount);
    data.append("tCount",techClickCount);
    data.append("vCount",visClickCount);

    const xhr = new XMLHttpRequest();
    xhr.open("POST","../scripts/submitClicks.php",true);
    xhr.send(data);
    resetClickCounts();
    window.open("../session_survey.php","_self",false);
}