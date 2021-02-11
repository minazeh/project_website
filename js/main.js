var stageWidth = 500;
var stageHeight = 500;

var layer;
var textLayer;
var fortuneLayer;
var messageText;
var receiverText;
var senderText;
var image_url;
var card_template;
var tr;
var numset = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
var luckNum;
var luckyNumber;
var fortuneText;
var fortuneVar;
var imageType;

//shuffle the sequence and take the first 4 values 
var luckNum = shuffle(numset).slice(0, 4);
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

var stage = new Konva.Stage({
    container: 'container',
    width: stageWidth,
    height: stageHeight,
});

function fitStageIntoParentContainer() {
    var container = document.querySelector('#stage-parent');

    // now we need to fit stage into parent
    var containerWidth = container.offsetWidth;
    // to do this we need to scale the stage
    var scale = containerWidth / stageWidth;

    stage.width(stageWidth * scale);
    stage.height(stageHeight * scale);
    stage.scale({ x: scale, y: scale });
    stage.draw();
}

fitStageIntoParentContainer();
// adapt the stage on any window resize
window.addEventListener('resize', fitStageIntoParentContainer);

(function ($) {

    $('.get-started').click(function () {
        $('#main-system').removeClass('hidden');
        $('#main-system').hide();
        $('.intro-overlay').fadeOut();
        console.log('thisi s clicked');
        setTimeout(function () {
            $('#main-system').fadeIn();
        }, 500)
    });


    $('.draggable-item').click(function () {

        var itemURLs = $(this).attr('src');

        stage.setPointersPositions();

        var canvas = document.createElement('canvas');

        function onDrawFrame(ctx, frame) {
            // update canvas size
            canvas.width = frame.width;
            canvas.height = frame.height;
            // update canvas that we are using for Konva.Image
            ctx.drawImage(frame.buffer, 0, 0);
            // redraw the layer
            layer.draw();
        }

        gifler(itemURLs).frames(canvas, onDrawFrame);

        var image = new Konva.Image({
            image: canvas,
            x: 0,
            y: 0,
            width: 65,
            height: 65,
            draggable: true,

        });
        layer.add(image);

    });


    $(document).ready(function () {

        fitStageIntoParentContainer();

        layer = new Konva.Layer();
        fortuneLayer = new Konva.Layer();
        stage.add(layer);

        // what is url of dragging element?
        var itemURLz = '';
        document.getElementById('drag-items').addEventListener('dragstart', function (e) {
            itemURLz = e.target.src;
        });


        var con = stage.container();
        con.addEventListener('dragover', function (e) {
            e.preventDefault(); // !important
        });

        tr = new Konva.Transformer();

        con.addEventListener('drop', function (e) {
            e.preventDefault();

            stage.setPointersPositions(e);

            var canvas = document.createElement('canvas');

            function onDrawFrame(ctx, frame) {
                // update canvas size
                canvas.width = frame.width;
                canvas.height = frame.height;
                // update canvas that we are using for Konva.Image
                ctx.drawImage(frame.buffer, 0, 0);
                // redraw the layer
                layer.draw();
            }

            gifler(itemURLz).frames(canvas, onDrawFrame);

            var image = new Konva.Image({
                image: canvas,
                position: stage.getPointerPosition(),
                width: 65,
                height: 65,
                draggable: true,

            });
            layer.add(image);
        });
        layer.add(tr);
        layer.draw();

        // text from form to canvas
        textLayer = new Konva.Layer();

        receiverText = new Konva.Text({
            x: 70,
            y: 65,
            text: '',
            fontSize: 18,
            fontFamily: 'Times New Roman',
            fill: 'black',
            fontStyle: 'bold',
        });

        messageText = new Konva.Text({
            x: 70,
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
            x: stageWidth / 2,
            y: 420,
            text: 'LUCKY No: ' + luckNum,
            fontSize: 13,
            fontFamily: 'Times New Roman',
            fill: 'black',
            fontStyle: 'bold',
            align: 'center',
        });

        fortuneText = new Konva.Text({
            x: stageWidth / 2,
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


    $('.freezeGIF').click(function () {

        data_val = $(this).attr('data-val');

        switch (data_val) {

            case 'card-1':
                card_template = 1;
                random = Math.floor(Math.random() * loveMessage.length);
                fortuneVar = loveMessage[random];
                imageType = 1;
                console.log(fortuneVar);
                break;

            case 'card-2':
                card_template = 2;
                random = Math.floor(Math.random() * careerMessage.length);
                fortuneVar = careerMessage[random];
                imageType = 2;
                break;

            case 'card-3':
                card_template = 3;
                random = Math.floor(Math.random() * wealthMessage.length);
                fortuneVar = wealthMessage[random];
                imageType = 3;
                break;

            case 'card-4':
                card_template = 4;
                random = Math.floor(Math.random() * familyMessage.length);
                fortuneVar = familyMessage[random];
                imageType = 4;
                break;

            case 'card-5':
                card_template = 5;
                random = Math.floor(Math.random() * healthMessage.length);
                fortuneVar = healthMessage[random];
                imageType = 5;
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

        $('.rays').each(function () {

            if ($(this).hasClass('hidden')) {
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


    $('.submitBtn').click(function (e) {



        var data = new FormData();
        var perm_id = generateFileName();

        data.append('perm_id', perm_id);
        data.append('image_url', image_url);
        data.append('image_type', imageType);
        data.append('recipient_name', $('#recipient_name').val());
        data.append('recipient_email', $('#recipient_email').val());
        data.append('sender_name', $('#sender_name').val());
        data.append('sender_email', $('#sender_email').val());

        try {

            $.ajax({
                url: 'ajax.savetodb.php',
                type: 'POST',
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    console.log('Start saving to the database');
                    document.body.scrollTop = document.documentElement.scrollTop = 0;
                    $('.animation-processing').removeClass('hidden');
                    $('body').addClass('no-scroll');
                },
                complete: function (response) {

                    setTimeout(function () {

                        console.log('Data saved to the database');
                        $('#urlLink').val('https://toolart.sg/custom-greetings/view.php?perm_id=' + perm_id);
                        $('#whatsappLink').attr('href', 'https://api.whatsapp.com/send?text=https://toolart.sg/custom-greetings/view.php?perm_id=' + perm_id);
                        $('#facebookLink').attr('href', 'https://www.facebook.com/sharer/sharer.php?u=https://toolart.sg/custom-greetings/view.php?perm_id=' + perm_id);

                        $('#mailLink').attr('href', ' mailto:' + $('#recipient_email').val() +'?body=https://toolart.sg/custom-greetings/view.php?perm_id=' + perm_id);
                        $('#twitterLink').attr('href', 'https://twitter.com/intent/tweet?url=https://toolart.sg/custom-greetings/view.php?perm_id=' + perm_id);
                        $('#smsLink').attr('href', 'sms:?&body=https://toolart.sg/custom-greetings/view.php?perm_id=' + perm_id);


                        $('.animation-processing').addClass('hidden');
                        $('body').removeClass('no-scroll');

                    }, 2000);

                    console.log(response);

                },
                error: function (error) {
                    console.log('second-error');
                    console.log(error);
                }
            });
        } catch (error) {
            console.log('Error catch second save image -- 1');
            console.log(error);
        }



    });

    $('.preview_card').click(function () {

        $('.submitBtn').removeClass('hidden');
        $(this).addClass('hidden');

        $('.tempprev').removeClass('hidden');
        $('.rec_field').addClass('hidden');

    });

    $('.nextBtn').click(function () {

        console.log('start getting images');

        var frameTimer = 1;
        var fileName = generateFileName();
        var data = new FormData();
        data.append('fileName', fileName);

        var captureFrame = setInterval(function () {
            imgData = stage.toDataURL({ pixelRatio: 2 });
            data.append('imgData' + frameTimer, imgData);
            // localStorage.setItem("imgData" + frameTimer, imgData);
            // var dataImage = localStorage.getItem('imgData' + frameTimer);
            frameTimer++;

            if (frameTimer == 16) {

                clearInterval(captureFrame);

                try {

                    data.append('fileName', fileName);

                    $.ajax({
                        url: 'saveimage.php',
                        type: 'POST',
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function () {
                            document.body.scrollTop = document.documentElement.scrollTop = 0;
                            $('.animation-processing').removeClass('hidden');
                            $('body').addClass('no-scroll');
                        },
                        complete: function (response) {

                            image_url = 'img/temp/' + fileName + '.gif';
                            $('#temp_prev').attr('src', 'img/temp/' + fileName + '.gif');
                            $('.nextTrigger').click();

                            $('#temp_prev').on('load', function () {
                                $('.animation-processing').addClass('hidden');
                                $('body').removeClass('no-scroll');
                                console.log("image loaded correctly");
                            }).on('error', function () {
                                console.log("error loading image");
                            });

                        },
                        error: function (error) {
                            console.log('second-error');
                            console.log(error);
                        }
                    });
                } catch (error) {
                    console.log('Error catch second save image -- 1');
                    console.log(error);
                }
            }

        }, 15);


    });

    $('.prevBtn').click(function () {

        $('.prevTrigger').click();
        fitStageIntoParentContainer();

    });

    $('.nextBtn1').click(function () {

        var rec_name = $('#recipient_name').val();
        var rec_email = $('#recipient_email').val();
        var sender_name = $('#sender_name').val();
        var sender_email = $('#sender_email').val();

        if (rec_name.length === 0 || sender_name.length === 0 || sender_email.length === 0) {

            $('.alert-fields').removeClass('hidden');

            return false;

        } else {

            if ($('.alert-fields').hasClass('hidden')) {

            } else {
                $('.alert-fields').addClass('hidden');
            }

            if ( validateEmail(sender_email) ) {

                $('#staticBackdrop').modal('show');

            } else {

                $('.alert-email').removeClass('hidden');

                return false;
            }



        }

    });

    $('.btn-save').click(function () {

        $('#staticBackdrop').modal('hide');

        $('.submitBtn').click();

    });

    $('.prevBtn1').click(function () {

        $('.prevTrigger1').click();
        fitStageIntoParentContainer();

    });

    $('.resetBtn').click(function () {
        location.reload();
    })



})(jQuery);


function generateFileName() {
    // Math.random should be unique because of its seeding algorithm.
    // Convert it to base 36 (numbers + letters), and grab the first 9 characters
    // after the decimal.
    return '_' + Math.random().toString(36).substr(2, 9);
};




//first we need a shuffle function
function shuffle(array) {
    for (var i = array.length, j, tmp; i--;) {
        j = 0 | (Math.random() * i);
        tmp = array[j];
        array[j] = array[i];
        array[i] = tmp;
    }
    return array;
}


function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}