var contcarrossel = 0;

$(document).ready(function () {
    $('#mouse').on('click', function (e) {
        e.preventDefault();
        smoothScroll('secao2');
    });

    $('#fecharModal #btnVerCreditos').on('click', function (e) {
        e.preventDefault();
    });

    document.getElementById("carrosselimagem").src = "img/tela03/capa.png";

    $(".controlecarrossel").click(function () {
        manipularCarrossel($(this).attr('id'));
    })

    $(".itemicone").on('mouseover', function () {
        document.getElementById("texto" + $(this).attr('id')).style.display = "flex";
        $(this).closest('div')[0].style.backgroundColor = "#ffffff78";
    });

    $(".itemicone").on('mouseout', function () {
        document.getElementById("texto" + $(this).attr('id')).style.display = "none";
        $(this).closest('div')[0].style.backgroundColor = "transparent";
    });

    $(".pontos").on('mouseover', function () {
        for (var i = 0; i < document.getElementsByClassName("tipo" + $(this).attr('id')).length; i++) {
            document.getElementsByClassName("tipo" + $(this).attr('id'))[i].style.display = "block";
        }
    });

    $(".pontos").on('mouseout', function () {
        for (var i = 0; i < document.getElementsByClassName("tipo" + $(this).attr('id')).length; i++) {
            document.getElementsByClassName("tipo" + $(this).attr('id'))[i].style.display = "none";
        }
    });
});

function manipularCarrossel(id) {
    id == "antCarrossel" ? contcarrossel-- : contcarrossel++;

    if (contcarrossel != 0) {
        document.getElementById("carrosselimagem").src = "img/tela03/0" + contcarrossel + ".png";
    } else {
        document.getElementById("carrosselimagem").src = "img/tela03/capa.png";
    }

    if (id == "antCarrossel") {
        if (contcarrossel == 0) {
            $("#antCarrossel")[0].disabled = true;
        } else {
            $("#proxCarrossel")[0].disabled = false;
        }
    } else {
        if (contcarrossel == 3) {
            $("#proxCarrossel")[0].disabled = true;
        } else {
            $("#antCarrossel")[0].disabled = false;
        }
    }
}

function currentYPosition() {
    // Firefox, Chrome, Opera, Safari
    if (self.pageYOffset) return self.pageYOffset;
    // Internet Explorer 6 - standards mode
    if (document.documentElement && document.documentElement.scrollTop)
        return document.documentElement.scrollTop;
    // Internet Explorer 6, 7 and 8
    if (document.body.scrollTop) return document.body.scrollTop;
    return 0;
}


function elmYPosition(eID) {
    var elm = document.getElementById(eID);
    var y = elm.offsetTop;
    var node = elm;
    while (node.offsetParent && node.offsetParent != document.body) {
        node = node.offsetParent;
        y += node.offsetTop;
    } return y;
}


function smoothScroll(eID) {
    var startY = currentYPosition();
    var stopY = elmYPosition(eID);
    var distance = stopY > startY ? stopY - startY : startY - stopY;
    if (distance < 100) {
        scrollTo(0, stopY); return;
    }
    var speed = Math.round(distance / 100);
    if (speed >= 20) speed = 20;
    var step = Math.round(distance / 25);
    var leapY = stopY > startY ? startY + step : startY - step;
    var timer = 0;
    if (stopY > startY) {
        for (var i = startY; i < stopY; i += step) {
            setTimeout("window.scrollTo(0, " + leapY + ")", timer * speed);
            leapY += step; if (leapY > stopY) leapY = stopY; timer++;
        } return;
    }
    for (var i = startY; i > stopY; i -= step) {
        setTimeout("window.scrollTo(0, " + leapY + ")", timer * speed);
        leapY -= step; if (leapY < stopY) leapY = stopY; timer++;
    }
    return false;
}