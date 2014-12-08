/**
 * Created by Maqurez on 12/6/2014.
 */

var editor = '<li class="editor"> <div class="button-more"><img src="images/more.png"/></div> <div class="editor-inner" style="display: none;"> <div class="select-type"> <img class="rule-type allow selected" src="images/allow.png" /> <img class="rule-type deny" src="images/deny.png" /> <img class="rule-type info" src="images/info.png" /> <img class="rule-type alert" src="images/alert.png" /> </div> <input class="editor-input" type="text" maxlength="200"/> <button class="button button-add">Add</button> </li>';
var editorlist = '<ul class="rules nested">' + editor + '</ul>';

$(document).ready(refresh);

function refresh() {
    console.log('start refreshing');

    $('.rules').sortable({
        cancel: ".add,.field,.editor"
    });

    $('.add-img').off().on('click', showField);

    $('.rule-type').off().on('click', selectType);

    $('.button-add').off().on('click', addRule);

    $('.button-edit').off().on('click', editRule);

    $('.button-delete').off().on('click', deleteRule);

    $('.button-save').off().on('click', save);

    $('.button-load').off().on('click', load);

    $('.button-more').off().on('click', toggleEditor);

    $('.button-view').off().on('click', changeView);

    //$('.rule-text').off().on('dblclick', toggleEditor);

    console.log('end refreshing');
}

function changeView() {
    $('body').find('.editor').toggle();
}

function toggleEditor() {
    $(this).parent().children('.editor-inner').toggle();
}

function load() {
    var id = $('#list-id').val();
    if (id != "") {
        $.ajax({
            type: "GET",
            url: "testconnection.php",
            data: {id: id}
        })
            .done(function (html) {
                var res = JSON.parse(html);
                console.log(res);
                loadInfo(res);
            });
    }
    else {
        alert("Need id!");
    }
}

function save() {
    var d = getInfo();
    if (d.title == "") {
        alert("Need title!");
    }
    else if (d.rules.length == 0) {
        alert("Need at least one rule!");
    }
    else {
        $.ajax({
            type: "POST",
            url: "testconnection.php",
            data: d
        })
            .done(function (msg) {
                $('#list-id').val(msg);
                alert("Data saved! " + msg);

            });
    }
}

function deleteRule() {
    console.log("Deleted!");
}

function editRule() {
    console.log("Edited!");
    $(this).parent('.editor').replaceWith();
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
    var list = $($(this).parent().parent().parent());
    var item = document.createElement('li');
    var innertext = document.createElement('span');
    innertext.classList.add('rule-text');
    var selectedImg = $(this).parent().children('.select-type').children('.selected')[0].classList[1];
    item.classList.add('rule');
    item.classList.add(selectedImg);
    innertext.appendChild(document.createTextNode($(this).parent().children(':input').val()));
    item.appendChild(innertext);
    $($(this).parent().parent().before(item));
    $(item).append(editorlist);
    $(this).parent().hide();
    $(this).parent().children(':input').val("");
    refresh();
}

function getInfo() {
    var list = getList('.main');
    var title = $('.title-input').val();
    var comp = "GMD";
    var agree = {"title": title, "owner": comp, "rules":list};
    //$('#request').val(JSON.stringify(agree));
    return(agree);
}

function loadInfo(infoObj) {
    $('.title-input').val(infoObj.title);
    //console.log(infoObj.rules);
    setList('.main', infoObj.rules);
    appendEditor('.main');
    $('.main').children('ul').children('.editor').insertAfter('.rule:last');
    refresh();
}

function getList(root) {
    console.log("start map");
    var result = [];

    $('> ul > li.rule', root).each(function () {
        var t = {"value" : $(this).children('.rule-text').text(), "type" : $(this)[0].classList[1], "rules" : []};
        if ($(this).children('ul').children('.rule').length > 0) {
            t.rules = (getList($(this)));
        }
        else {
            $(this).next().val();
        }
        console.log(t);
        result.push(t);
    });
    return(result);
}

function setList(root, list) {
    //console.log("start list creation");
    if (root != '.main') {
        var hlist = document.createElement('ul');
        hlist.classList.add('rules');
        $(root).append(hlist);
    }
    $(list).each(function() {
        //console.log($(this));
        var item = document.createElement('li');
        var innertext = document.createElement('span');
        innertext.classList.add('rule-text');
        item.classList.add('rule');
        item.classList.add($(this)[0].type);
        innertext.appendChild(document.createTextNode($(this)[0].value));
        item.appendChild(innertext);
        $('> ul', root).append(item);
        if ($(this)[0].rules !== undefined) {
            setList(item, $(this)[0].rules);
        }
    });
}

function appendEditor(root) {
    $('> ul li.rule', root).each(function() {
        if ($(this).children('ul').length > 0) {
            appendEditor($(this));
            var hl = $(this).children('ul')[0];
            if ($(hl).children('.editor').length < 1) {
                $(hl).append(editor);
            }
        }
        else {
            $(this).append(editorlist);
        }
    });
}