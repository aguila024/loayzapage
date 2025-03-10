function checkAndApplyClass() {
    var scrollPosition = jQuery(window).scrollTop();

    if (scrollPosition > 0) {
        jQuery('header').addClass('fondo_header_scrol');
    } else {
        jQuery('header').removeClass('fondo_header_scrol');
    }
}
function is_in_view(elem) {
    var docViewTop = jQuery(window).scrollTop();
    var docViewBottom = docViewTop + jQuery(window).height();
    var elemTop = jQuery(elem).offset().top;
    var elemBottom = elemTop + jQuery(elem).height();
    return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom));
}


function marcakLinkActivo() {
    const links = document.querySelectorAll(".menu_destokp_ifeep ul li a");
    const links_mov = document.querySelectorAll(".navegation-movil li a");
    let currentURL = window.location.pathname.replace(/^\//, "");
    console.log(currentURL);

    links.forEach(link => {
        console.log(link.getAttribute("href"));
        let linkPath = link.getAttribute("href").replace(/^\//, "");
        if (currentURL === linkPath) {
            link.classList.add("activo");
        }
    });
    links_mov.forEach(link_mov => {
        console.log(link_mov.getAttribute("href"));
        let linkPath = link_mov.getAttribute("href").replace(/^\//, "");
        if (currentURL === linkPath) {
            link_mov.classList.add("activo");
        }
    });
}


jQuery(window).bind("scroll resize", function () {
    checkAndApplyClass();
    contar_numero_d();
});


jQuery(document).ready(function () {

    checkAndApplyClass();

    

    marcakLinkActivo();
    const player = new Plyr('#player', {
        controls: ['play-large','play', 'progress', 'current-time', 'mute', 'volume', 'captions', 'settings', 'pip', 'airplay', 'fullscreen']
    });
});