$(document).ready(function() {
    var windowHeight = $(window).innerHeight();
    document.getElementById("banner1").style.height = windowHeight + 'px';
    document.getElementById("img-banner1").style.height = windowHeight + 'px';
});

$("#banner1").backstretch([
    "img/index-cover-1.png",
    "img/index-cover-2.png",
    "img/fondo1.png"
], { duration: 4000, fade: 750 });

$(document).ready(function() {
    var customContainer = $('#custom-pagination-container');
    var customContainerArray = new Array();
    var OWLinit = false;
    var text_s = ["Primeros auxilios", "Medicina general", "Especialistas", "Premium"];
    var pag_cond = $(window).width();
    var condition = false;

    $(".banner2-index").owlCarousel({
        navigation: false, // Show next and prev buttons
        autoPlay: true,
        slideSpeed: 300,
        pagination: condition,
        paginationSpeed: 400,
        singleItem: true,
        afterInit: afterOWLinit, // do some work after OWL init
        afterAction: afterAction
    });

    function afterAction() {
        if (OWLinit) updateClass(this.owl.currentItem);
        //console.info('afterAction ' + this.owl.currentItem);
    }

    function afterOWLinit() {
        // Possible to move the pagination to a new div?
        // https://github.com/OwlFonk/OwlCarousel/issues/196
        // var that = this;
        // that.owlControls.prependTo(customContainer);
        // that.owlControls.append(customContainer);
        //============================================
        $.each(this.owl.userItems, function(i) {
            var a = $('<div class="owl-page"><span class="bg-img-' + i + '"><p>' + text_s[i] + '</p></span></div>');
            customContainerArray.push(a);
            // bind click event for new pgination item
            a.bind('click', function(event) {
                event.preventDefault();
                this.goto = i;
                updateClass(this.goto); // add/remove .active class
                //console.log(this.goto);
                $(".banner2-index").trigger('owl.goTo', i);
            });
            customContainer.append(a);
        });
        updateClass(this.owl.currentItem);
        OWLinit = true;
    }

    function updateClass(elem) {
        $.each(customContainerArray, function() {
            this.removeClass('active');
        });
        customContainerArray[elem].addClass('active');
    }
});

$(document).ready(main);
var counter = true;

function main() {
    $('.menu_bar').click(function() {
        //$('nav').toggle();
        if (counter) {
            $('nav').animate({
                left: '0'
            });
            counter = false;
        } else {
            $('nav').animate({
                left: '-100%'
            });
            counter = true;
        }
    });
    onload();
}
var onload = function (){
	
};

$(window).on("load", function() {
    $('.loader').css("display","none");
	$('.content').css("display","block");
});