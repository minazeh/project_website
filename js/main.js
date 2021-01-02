(function ($) {

    const card_1 = new Freezeframe('.freezeGIF_1', {
        trigger: 'false'
    });
    const card_2 = new Freezeframe('.freezeGIF_2', {
        trigger: 'false'
    });
    const card_3 = new Freezeframe('.freezeGIF_3', {
        trigger: 'false'
    });

    $(document).ready(function () {

        card_1.stop(); // stop animation 1
        card_2.stop(); // stop animation 2
        card_3.stop(); // stop animation 3

        //create canvas with image

    });

    $('.freezeGIF').click(function () {

        data_val = $(this).attr('data-val');

        switch (data_val) {

            case 'card-1':
                card_1.toggle();
                card_2.stop();
                card_3.stop();
                break;

            case 'card-2':
                card_2.toggle();
                card_1.stop();
                card_3.stop();
                break;

            case 'card-3':
                card_3.toggle();
                card_2.stop();
                card_1.stop();
                break;

        }

    });

})(jQuery);

var img = new Image();
img.src = './template/ecard-template/ecard-template.png';


// wait for the image to load
img.onload = function () {
    fill_canvas(img); // fill the canvas with image
}

function fill_canvas(img) {
    var canvas = document.getElementById('cardcanvas');
    var ctx = canvas.getContext('2d');

    canvas.width = img.width;
    canvas.height = img.height;

    ctx.drawImage(img, 0, 0); // draw the image on the canvas
}