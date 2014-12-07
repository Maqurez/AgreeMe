/**
 * Created by Maqurez on 12/6/2014.
 */

$(document).ready(refresh);

function refresh() {
    console.log('start refreshing');

    $('.add-img').off().on('click', showField);

    $('.rule-type').off().on('click', selectType);

    $('.button-add').off().on('click', addRule);

    $('.rule-text').off().on('click', showEdit);

    $('.button-edit').off().on('click', editRule);

    console.log('end refreshing');
}

function editRule() {
    console.log("Edited!");
}

function showEdit() {
    console.log("Edit it!");
    var t = $(this).parent().get(0);
    $(t).removeClass('rule');
    $(this).parent().append('<li class="field visible"> <div class="select-type"> <img class="rule-type allow" src="images/allow.png" /> <img class="rule-type deny" src="images/deny.png" /> <img class="rule-type info" src="images/info.png" /> <img class="rule-type alert" src="images/alert.png" /> </div> <input class="field-input" type="text" value="' + $(this).text() + '"/> <button class="button-edit">Edit</button> </li>');
    refresh();
}

function showField() {
    console.log("clicked!");
    $($(this).parent().parent()).children('.field, .add').toggle();
}

function selectType() {
    $($(this).parent()).children().removeClass('selected');
    $(this).addClass('selected');
}

function addRule() {
    var t = $($(this).parent().parent());
    var img = t.children('.field').children('.select-type').children('.selected')[0].src;
    var cl = $(t).children('.field').children('.select-type').children('.selected').removeClass('selected rule-type')[0].className;
    console.log(cl);
    console.log("Rule added!");
    t.append('<li class="rule ' + cl + '"><span class="rule-text">' + $(t).children('.field').children('.field-input')[0].value + '</span></li>');
    t.children('.field').remove();
    t.children('.add').remove();
    temp(t);
    refresh();
}

function temp(t) {
    t.children().last().append('<ul class="rules nested"><li class="add"><img class="add-img" src="images/more.png"></li><li class="field hidden"><div class="select-type"> <img class="rule-type allow selected" src="images/allow.png" /> <img class="rule-type deny" src="images/deny.png" /> <img class="rule-type info" src="images/info.png" /> <img class="rule-type alert" src="images/alert.png" /> </div> <input class="field-input" type="text"/> <button class="button-add">Add</button> </li> </ul>');
    t.append('<li class="add"><img class="add-img" src="images/more.png"></li> <li class="field hidden"> <div class="select-type"> <img class="rule-type allow selected" src="images/allow.png" /> <img class="rule-type deny" src="images/deny.png" /> <img class="rule-type info" src="images/info.png" /> <img class="rule-type alert" src="images/alert.png" /> </div> <input class="field-input" type="text"/> <button class="button-add">Add</button>');
}

function getInfo() {
    console.log(JSON.stringify(getList('.main')));
}

function getList(root) {
    console.log("start map");
    var result = [];

    $('> ul > li.rule', root).each(function () {
        //console.log($(this).children('.rule-text').text());
        //console.log($(this).parent().children().length);
        var t = {"value" : $(this).children('.rule-text').text(), "type" : $(this).removeClass('rule')[0].className, "rules" : []};
        //console.log($(this).children('.rule-text').text());
        if ($(this).children('ul').children().length > 2) {
            t.rules = (getList($(this)));
        }
        else {
            $(this).next().val();
        }
        result.push(t);
    });
    return(result);
}