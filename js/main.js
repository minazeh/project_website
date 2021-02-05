var stageWidth = 500;
var stageHeight = 500;
var stage;
var layer;
var textLayer;
var fortuneLayer;
var messageText;
var receiverText;
var senderText;
var image_url;
var card_template;
var tr;
var numset = [0,1,2,3,4,5,6,7,8,9];
var luckNum;
var luckyNumber;
var fortuneText;
var fortuneVar;
//shuffle the sequence and take the first 4 values 
var luckNum = shuffle(numset).slice(0,4);
luckNum = luckNum.toString().replace(/,/g, "");


const loveMessage = [
    'One Who Admires You Greatly Is Hidden Before Your Eyes.',
    'The Time Is Right To Make New Friends.',
    'Love, Because It Is The Only True Adventure.',
    'You Won’t Know Until You Try.',
    'Never Lose The Ability To Find Beauty In Ordinary Things.',
];

const careerMessage = [
    'It’s Not The Destination, It’s The Journey.',
    'Bide Your Time, For Success Is Near.',
    'Someone Has Googled You Recently.',
    'Be Prepared To Accept An Exciting Opportunity.',
    'A Ship In Harbor Is Safe, But That’s Not Why Ships Are Built.',
];

const wealthMessage = [
    'Every Person Is The Architect Of His Or Her Own Fortune.',
    'Your Luck Will Take A Turn For The Better.	',
    'An Unexpected Event Will Soon Bring You Financial Rewards.',
    'New Ideas Could Be Profitable.',
    'You Will Prosper In The New Year.',
];

const familyMessage = [
    'You Will Received Good News From A Loved One Soon.',
    'When We Have Each Other, We Have Everything.',
    'Patience Is Your Alley At The Moment. Don’t Worry!',
    'Don’t Worry About Money. The Best Things In Life Are Free.',
    'To Avoid Criticism, Do Nothing, Say Nothing.',
];

const healthMessage = [
    'You Will Enjoy Good Health.',
    'Now Would Be A Good Time To Take Up A New Sport. ',
    'Love Your Body Because You Only Have One.',
    'Invest In Your Health. Eat A Balanced Diet!',
    'Self-care Is How You Take Your Power Back.	',
];

var random;

(function ($) {

    $('.get-started').click(function () {
        $('#main-system').removeClass('hidden');
        $('#main-system').hide();
        $('.intro-overlay').fadeOut();
        setTimeout(function () {
            $('#main-system').fadeIn();
        }, 500)
    });

    $(document).ready(function () {

        fitStageIntoParentContainer();

        stage = new Konva.Stage({
            container: 'container',
            width: stageWidth,
            height: stageHeight,
        });

        layer = new Konva.Layer();
        fortuneLayer = new Konva.Layer();
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

        tr = new Konva.Transformer();

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
                image.width(50);
                image.height(50);
                image.draggable(true);

                tr.nodes([image]);

                layer.draw();


            });
        });
        layer.add(tr);
        layer.draw();

        // text from form to canvas
        textLayer = new Konva.Layer();

        receiverText = new Konva.Text({
            x:70,
            y: 65,
            text: '',
            fontSize: 18,
            fontFamily: 'Times New Roman',
            fill: 'black',
            fontStyle: 'bold',
        });

        messageText = new Konva.Text({
            x:70,
            y: 105,
            text: '',
            fontSize: 18,
            fontFamily: 'Helvetica',
            fill: 'black',
        });

        

        senderText = new Konva.Text({
            x: 320,
            y: 350,
            text: '',
            fontSize: 18,
            fontFamily: 'Times New Roman',
            fill: 'black',
            draggable: true,
            fontStyle: 'bold',
            align: 'right',
        });

        luckyNumber = new Konva.Text({
            x: stage.width() / 2,
            y: 420,
            text: 'LUCKY No: ' + luckNum,
            fontSize: 13,
            fontFamily: 'Times New Roman',
            fill: 'black',
            fontStyle: 'bold',
            align: 'center',
        });

        fortuneText = new Konva.Text({
            x: stage.width() / 2,
            y: 400,
            text: fortuneVar,
            fontSize: 13,
            fontFamily: 'Times New Roman',
            fill: 'black',
            fontStyle: 'bold',
            align: 'center',
        });
        



        fortuneLayer.add(fortuneText);

       

        
        luckyNumber.offsetX(luckyNumber.width() / 2);


        textLayer.add(messageText);
        textLayer.add(receiverText);
        textLayer.add(senderText);
        textLayer.add(luckyNumber);
        stage.add(textLayer);
        

        stage.add(fortuneLayer);
        



    }); // end document ready function

    $('#message').keyup(function () {

        messageText.text($(this).val());
        textLayer.draw();

    });

    $('#receiver').keyup(function () {

        receiverText.text($(this).val());
        textLayer.draw();

    });

    $('#sender').keyup(function () {

        senderText.text($(this).val());
        textLayer.draw();

    });


    // const card_1 = new Freezeframe('.freezeGIF_1', {
    //     trigger: 'false'
    // });
    // const card_2 = new Freezeframe('.freezeGIF_2', {
    //     trigger: 'false'
    // });
    // const card_3 = new Freezeframe('.freezeGIF_3', {
    //     trigger: 'false'
    // });

    // $(document).ready(function () {

    //     card_1.stop(); // stop animation 1
    //     card_2.stop(); // stop animation 2
    //     card_3.stop(); // stop animation 3

    //     //create canvas with image

    // });

    $('.freezeGIF').click(function () {

        data_val = $(this).attr('data-val');

        switch (data_val) {

            case 'card-1':
                card_template = 1;
                random = Math.floor(Math.random() * loveMessage.length);
                fortuneVar = loveMessage[random];
                console.log(fortuneVar);
                break;

            case 'card-2':
                card_template = 2;
                random = Math.floor(Math.random() * careerMessage.length);
                fortuneVar = careerMessage[random];
                break;

            case 'card-3':
                card_template = 3;
                random = Math.floor(Math.random() * wealthMessage.length);
                fortuneVar = wealthMessage[random];
                break;

            case 'card-4':
                card_template = 4;
                random = Math.floor(Math.random() * familyMessage.length);
                fortuneVar = familyMessage[random];
                break;

            case 'card-5':
                card_template = 5;
                random = Math.floor(Math.random() * healthMessage.length);
                fortuneVar = healthMessage[random];
                break;

        }
        fortuneText.text(fortuneVar);
        fortuneText.offsetX(fortuneText.width() / 2);
        fortuneLayer.draw();


        console.log(card_template);
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

        switch (card_template) {

            case 1:
                imageObj.src = './template/ecard-template/ecard-template-1.png';
                break;
            case 2:
                imageObj.src = './template/ecard-template/ecard-template-2.png';
                break;
            case 3:
                imageObj.src = './template/ecard-template/ecard-template-3.png';
                break;
            case 4:
                imageObj.src = './template/ecard-template/ecard-template-4.png';
                break;
            case 5:
                imageObj.src = './template/ecard-template/ecard-template-5.png';
                break;

            default:
                imageObj.src = './template/ecard-template/ecard-template-1.png';
                break;

        }

        $('.rays').each(function(){

            if( $(this).hasClass('hidden') ){
            } else {
                $(this).addClass('hidden');
            }

        });

        $(this).parent().children('.rays').removeClass('hidden');

    });

    $('.action-button').click(function () {

        setTimeout(function () {
            fitStageIntoParentContainer();
        }, 500);


    });

    $('.save_canvas').click(function () {

        var fileName = generateFileName();

        var settings = {

            'url': 'testSave.php',
            'type': 'post',
            'data': {
                'fileData': stage.toDataURL(),
                'fileName': fileName
            },

        }

        $.ajax(settings).done(function (response) {
            image_url = 'img/temp/' + fileName + '.png';
            $('#temp_prev').attr('src', 'img/temp/' + fileName + '.png');
        });

    });

    $('.submitBtn').click(function (e) {

        var settings = {

            'url': 'ajax.sendemail.php',
            'type': 'post',
            'data': {
                'senderName': $('#sender_name').val(),
                'senderEmail': $('#sender_email').val(),
                'recipientEmail': $('#recipient_email').val(),
                'image_url': image_url,
            },

        }

        $.ajax(settings).done(function (response) {

            console.log(response);

        });


    });

    $('.preview_card').click(function(){

        $('.submitBtn').removeClass('hidden');
        $(this).addClass('hidden');

        $('.tempprev').removeClass('hidden');
        $('.rec_field').addClass('hidden');

    });

    $('.nextBtn').click(function(){

        $('.nextTrigger').click();

    });

    $('.prevBtn').click(function(){

        $('.prevTrigger').click();

    });

    $('.nextBtn1').click(function(){

        $('.nextTrigger1').click();

    });

    $('.prevBtn1').click(function(){

        $('.prevTrigger1').click();

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
    console.log(containerWidth + " x " + containerHeight);
    // uncomment to enable "uniform stretch"
    //scaleX = scaleY =Math.min(scaleX,scaleY);
}


//first we need a shuffle function
function shuffle(array){
    for(var i = array.length, j, tmp; i--; ){
        j = 0|(Math.random() * i);
        tmp = array[j];
        array[j] = array[i];
        array[i] = tmp;
    }
    return array;
}


