$(function () {

    var clicked = 0;
    $('.menu-btn').click(function (e) {

        $(this).toggleClass('active');
        $('body').toggleClass('menu-active');

        if (clicked == 0) {
            $('.main-menu-wrap').height('300px');
            clicked = 1;
            return;
        }

        if (clicked == 1) {
            $('.main-menu-wrap').removeAttr('style');
            clicked = 0;
            return;
        }

    });

});

var myIndex = 0;
slide_show();

function slide_show() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {
        myIndex = 1
    }
    x[myIndex - 1].style.display = "block";
    setTimeout(slide_show, 4000);
}
