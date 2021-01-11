<?php 

class Image {

    private $sticker_directory = 'img/sticker';

    public function show_stickers_in_slider(){

        $images = glob( $this->sticker_directory . '/*.png' );
        
        // open slider div
        echo '<ul id="drag-items" class="sticker-slider">';

        foreach( $images as $image ){

            // open slider item div, print image and close div
            echo '<li class="item">';
            echo '<img style="cursor:move;" src="' . $image . '" draggable="true" />';
            echo '</li>';

        }

        // close slider div
        echo '</ul>';

    }

}


?>
