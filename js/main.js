/**
 * Created by Maqurez on 12/6/2014.
 */

window.onload = function() {
    var adds = document.getElementsByClassName('add');
    for (var i = 0; i < adds.length; i++) {
        adds[i].addEventListener('click', showField);
    }

    var fields = document.getElementsByClassName('field-input');
    for (i = 0; i < fields.length; i++) {
        fields[i].addEventListener('focusout', addRule);
    }
};


function addRule() {
    console.log("focus lost");
    console.log(this.parentNode);
    if (this.value != "") {
        this.parentNode.className = "rule";
        this.parentNode.innerHTML = this.value;
    }
    else hideField(this);
}

function addButs() {

}

function showField() {
    var p = this.parentNode;
    var ch = p.childNodes;
    for (var i = 0; i < ch.length; i++) {
        if (ch[i].className == 'field') ch[i].style.display = 'block';
        if (ch[i].className == 'add') ch[i].style.display = 'none';
    }
}

function toggleField() {
    var p = this.parentNode;
    // if open - close
    var ch = p.childNodes;
    for (var i = 0; i < ch.length; i++) {
        if (ch[i].className == 'field') ch[i].style.display = 'none';
        if (ch[i].className == 'add') ch[i].style.display = 'block';
    }
}