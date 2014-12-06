/**
 * Created by Maqurez on 12/6/2014.
 */

$(document).ready(function() {

    // Add event

    $('.add-img').click(function() {
        $($(this).parent().parent()).children().toggle();
    });

    $('.rule-type').click(function() {
        $($(this).parent()).children().removeClass('selected');
        $(this).addClass('selected');
    });

    // !!! Write a image pick !!!

    $('.button-add').click(function() {
        var t = $($(this).parent().parent());
        console.log("Rule added!");
        t.append('<li class="rule">' + $(t).children('.field').children('.field-input')[0].value + '</li>');
        t.children('.field').remove();
        t.children('.add').remove();
    });
});