$(document).ready(function () {
    $('.itemOrder').hide();
    $('.cateOrder').click(function (e) { 
        e.preventDefault();
        $(this).next().slideDown()
    });

    $('.itemOrder').mouseleave(function () { 
        $(this).slideUp();
    });
});