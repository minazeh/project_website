(function($){

    const logo = new Freezeframe('.freezeGIF', {
        trigger: 'click'        
     });

    logo.on('start', function(){

        alert('something is not right?');

    });
      

    $(document).ready(function(){

        logo.stop(); // stop animation

    });

    $('.freezeGIF').click(function(){

        $(this).stop();

    });



})(jQuery);