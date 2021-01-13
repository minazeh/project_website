var stageWidth = 500;
var stageHeight = 500;
var stage;
var layer;
var textLayer;
var messageText;
var receiverText;
var image_url;
var canvas = document.createElement('canvas');
var tr;

(function ($) {

 

    $(document).ready(function(){

        fitStageIntoParentContainer();

        stage = new Konva.Stage({
            container: 'container',
            width: stageWidth,
            height: stageHeight,
        });

        // add the selected image from the first section
        var imageObj = new Image();
        imageObj.onload = function () {
            var mainImage = new Konva.Image({
                x: 0,
                y: 0,
                image: imageObj,
                width: 500,
                height: 500,
            });

            // add the shape to the layer
            layer.add(mainImage);
            layer.batchDraw();
        };

        imageObj.src = './template/ecard-template/ecard-template.png';

        layer = new Konva.Layer();
        stage.add(layer);

       
    
        // what is url of dragging element?
        var itemURL = '';
        document.getElementById('drag-items').addEventListener('dragstart', function (e) {
            itemURL = e.target.src;
            gifler(itemURL).frames(canvas, onDrawFrame);
        });
    
        var con = stage.container();
        con.addEventListener('dragover', function (e) {
            e.preventDefault(); // !important
        });

        tr = new Konva.Transformer();
       
       
        
  
        
       
    
        con.addEventListener('drop', function (e) {
            e.preventDefault();
            // now we need to find pointer position
            // we can't use stage.getPointerPosition() here, because that event
            // is not registered by Konva.Stage
            // we can register it manually:
            stage.setPointersPositions(e);
    
            // Konva.Image.fromURL(itemURL, function (image) {
            //     layer.add(image);
            //     image.position(stage.getPointerPosition());
            //     image.width(50);
            //     image.height(50);
            //     image.draggable(true);

            //     tr.nodes([image]);

            //     layer.draw();

            var image = new Konva.Image({
                image: canvas,
                width: 50,
                height: 50,
                draggable: true,
              });
              layer.add(image);

                
            // });
        });
        layer.add(tr);
        layer.draw();

        // text from form to canvas
        textLayer = new Konva.Layer();
    
        messageText = new Konva.Text({
            x: 35,
            y: 35,
            text:'',
            fontSize: 25,
            fontFamily: 'Helvetica',
            fill: 'black',
        });

        receiverText = new Konva.Text({
            x: 320,
            y: 420,
            text:'',
            fontSize: 25,
            fontFamily: 'Helvetica',
            fill: 'black',
        });

        textLayer.add(messageText);
        textLayer.add(receiverText);
        stage.add(textLayer);
        
       

    }); // end document ready function

    $('#message').keyup(function(){
        
        messageText.text( $(this).val() );
        textLayer.draw();

    });

    $('#receiver').keyup(function(){
        
        receiverText.text( $(this).val() );
        textLayer.draw();

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
    
    $('.save_canvas').click(function(){

        var fileName =  generateFileName();
       
        var settings = {
            
            'url': 'testSave.php',
            'type': 'post',
            'data': {
                'fileData' : stage.toDataURL(),
                'fileName' : fileName
            },
            
        }

        $.ajax(settings).done(function (response) {
            image_url = 'img/temp/' + fileName + '.png';
            $('#temp_prev').attr('src', 'img/temp/' + fileName + '.png' );
        });

    });

    $('.submitBtn').click(function(e){
    
        var settings = {
            
            'url': 'ajax.sendemail.php',
            'type': 'post',
            'data': {
                'senderName' : $('#sender_name').val(),
                'senderEmail' : $('#sender_email').val(),
                'recipientEmail' : $('#recipient_email').val(),
                'image_url' : image_url,
            },
            
        }

        $.ajax(settings).done(function (response) {
           
            console.log(response);

        });
        

    });
  
})(jQuery);


function generateFileName() {
    // Math.random should be unique because of its seeding algorithm.
    // Convert it to base 36 (numbers + letters), and grab the first 9 characters
    // after the decimal.
    return '_' + Math.random().toString(36).substr(2, 9);
};



// scaling canvas
function fitStageIntoParentContainer() {
    var container = document.querySelector('#stage-parent');

    // now we need to fit stage into parent
    var containerWidth = window.innerWidth;
    // to do this we need to scale the stage
    var scaleX = containerWidth / stageWidth;

    // now we need to fit stage into parent
    var containerHeight = window.innerHeight;
    // to do this we need to scale the stage
    var scaleY = containerHeight / stageHeight;
    console.log(containerWidth+" x " + containerHeight);
    // uncomment to enable "uniform stretch"
    //scaleX = scaleY =Math.min(scaleX,scaleY);
}


function onDrawFrame(ctx, frame) {
    // update canvas size
    canvas.width = frame.width;
    canvas.height = frame.height;
    // update canvas that we are using for Konva.Image
    ctx.drawImage(frame.buffer, 0, 0);
    // redraw the layer
    layer.draw();
  }
