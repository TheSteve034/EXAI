var wasSomethingClicked =0;

function toggleSimpleEX() {
    wasSomethingClicked = wasSomethingClicked + 1;
    var ex = document.getElementById("simple_EX");
    if(ex.style.display !== "none") {
        ex.style.display = "block";
    } else {
        ex.style.display = "block";
    }
}

function toggleTechnicalEX() {
    wasSomethingClicked = wasSomethingClicked + 1;
    var ex = document.getElementById("tech_EX");
    if(ex.style.display !== "none") {
        ex.style.display = "block";
    } else {
        ex.style.display = "none";
    }
}

function toggleVisualEX() {
    wasSomethingClicked = wasSomethingClicked + 1;
    var ex = document.getElementById("visual_EX");
    if(ex.style.display !== "none") {
        ex.style.display = "block";
    } else {
        ex.style.display = "none";
    }
}

function checkIfClicked(event) {
    if(wasSomethingClicked <=2) {
        event.preventDefault();
        event.stopImmediatePropagation();
        alert("You must view all the recommendations before proceeding ");
    }
}