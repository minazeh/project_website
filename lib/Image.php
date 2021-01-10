<?php 

class Image {

    private $sticker_directory = 'img/sticker';

    public function show_stickers_in_slider(){

        $images = glob( $this->sticker_directory . '/*.png' );
        
        // open slider div
        echo '<div id="drag-items" class="sticker-slider">';

        foreach( $images as $image ){

            // open slider item div, print image and close div
            echo '<div class="item">';
            echo '<img style="cursor:move;" src="' . $image . '" draggable="true" />';
            echo '</div>';

        }

        // close slider div
        echo '</div>';

    }

}


?>
