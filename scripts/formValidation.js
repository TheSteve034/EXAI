var allQuestionsAnswered = 0;

function reset() {
    allQuestionsAnswered = 0;
}

function checkQ1() {
    var radios = document.getElementsByName("question1");
    for(var i = 0, len = radios.length; i < len; i++) {
        if(radios[i].checked) {
            allQuestionsAnswered += 1;
        }
    }
}

function checkQ2() {
    var radios = document.getElementsByName("question2");
    for(var i = 0, len = radios.length; i < len; i++) {
        if(radios[i].checked) {
            allQuestionsAnswered += 1;
        }
    }
}

function checkQ3() {
    var radios = document.getElementsByName("question3");
    for(var i = 0, len = radios.length; i < len; i++) {
        if(radios[i].checked) {
            allQuestionsAnswered += 1;
        }
    }
}

function checkQ4() {
    var radios = document.getElementsByName("question4");
    for(var i = 0, len = radios.length; i < len; i++) {
        if(radios[i].checked) {
            allQuestionsAnswered += 1;
        }
    }
}

function checkQ5() {
    var radios = document.getElementsByName("question5");
    for(var i = 0, len = radios.length; i < len; i++) {
        if(radios[i].checked) {
            allQuestionsAnswered += 1;
        }
    }
}

function checkQ6() {
    var radios = document.getElementsByName("question6");
    for(var i = 0, len = radios.length; i < len; i++) {
        if(radios[i].checked) {
            allQuestionsAnswered += 1;
        }
    }
}

function nextPage() {
    checkQ1();
    checkQ2();
    checkQ3();
    checkQ4();
    checkQ5();
    checkQ6();
    return allQuestionsAnswered;
}