/**
 * Created by Maqurez on 12/6/2014.
 */

window.onload = function() {
    var adds = document.getElementsByClassName('add');
    console.log(adds);
    for (var i = 0; i < adds.length; i++) {
        adds[i].click = showField(adds[i]);
    }
};

function addRule() {

}

function addButs() {

}

function showField(target) {
    var p = target.parentNode;
    var children = document.getElementsByClassName()
    console.log(p);
}