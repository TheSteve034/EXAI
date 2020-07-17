var simpClickCount =0;
var techClickCount =0;
var visClickCount =0;
var ingredientCLick =0;
var directionClick =0;
var simp = "simple_EX";
var tech = "tech_EX";
var vis ="visual_EX";
var time =0;
var timeSpent =0;

function startTime() {
    time = new Date();
}

function calculateTimeSpent() {
    timeSpent = new Date() - time;
}

function resetTime(){
    time =0;
    timeSpent =0;
}

function iClick() {
    ingredientCLick++;
}

function dClick() {
    directionClick++;
}

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
    ingredientCLick =0;
    directionClick =0;
}

function submitClicks() {
    const data = new FormData();
    calculateTimeSpent();

    data.append("sCount",simpClickCount);
    data.append("tCount",techClickCount);
    data.append("vCount",visClickCount);
    data.append("iCount",ingredientCLick);
    data.append("dCount",directionClick);
    data.append("pageTime",timeSpent);

    resetTime();

    const xhr = new XMLHttpRequest();
    xhr.open("POST","../scripts/submitClicks.php",true);
    xhr.send(data);
    resetClickCounts();
    window.open("../session_survey.php","_self",false);
}

function submitClicksViewUserProfile() {
    const data = new FormData();
    calculateTimeSpent();

    data.append("sCount",simpClickCount);
    data.append("tCount",techClickCount);
    data.append("vCount",visClickCount);
    data.append("iCount",ingredientCLick);
    data.append("dCount",directionClick);
    data.append("pageTime",timeSpent);

    resetTime();

    const xhr = new XMLHttpRequest();
    xhr.open("POST","../scripts/submitClicks.php",true);
    xhr.send(data);
    resetClickCounts();
    window.open("../user_profile.php","_self",false);
}