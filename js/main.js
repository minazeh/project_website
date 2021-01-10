(function ($) {

    $(document).ready(function(){

        fitStageIntoParentContainer();
        console.log('this has happened');

    });

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

    $('.action-button').click(function(){
        
        setTimeout(function(){
            fitStageIntoParentContainer();
        },500);
        

    });


        
  
})(jQuery);

var stageWidth = 500;
var stageHeight = 500;

var stage = new Konva.Stage({
    container: 'container',
    width: stageWidth,
    height: stageHeight,
});

var layer = new Konva.Layer();
stage.add(layer);

// what is url of dragging element?
var itemURL = '';
document.getElementById('drag-items').addEventListener('dragstart', function (e) {
    itemURL = e.target.src;
});

var con = stage.container();
con.addEventListener('dragover', function (e) {
e.preventDefault(); // !important
});

con.addEventListener('drop', function (e) {
e.preventDefault();
// now we need to find pointer position
// we can't use stage.getPointerPosition() here, because that event
// is not registered by Konva.Stage
// we can register it manually:
stage.setPointersPositions(e);

Konva.Image.fromURL(itemURL, function (image) {
    layer.add(image);

    image.position(stage.getPointerPosition());
    image.draggable(true);

    layer.draw();
});
});


// scaling canvas
function fitStageIntoParentContainer() {
    var container = document.querySelector('#stage-parent');

    // now we need to fit stage into parent
    var containerWidth = container.offsetWidth;
    // to do this we need to scale the stage
    var scale = containerWidth / stageWidth;

    stage.width(stageWidth * scale);
    stage.scale({ x: scale, y: scale });
    stage.draw();

    console.log('this has been triggered');
}


// adapt the stage on any window resize
