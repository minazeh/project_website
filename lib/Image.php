<?php 

class Image {

    private $sticker_directory = 'img/sticker';

    public function show_stickers_in_slider(){

        $images = glob( $this->sticker_directory . '/*.gif' );
        
        // open slider div
        echo '<ul id="drag-items" class="sticker-slider">';

        foreach( $images as $image ){

            // open slider item div, print image and close div
            echo '<li class="item">';
            echo '<img style="cursor:move;" class="draggable-item" src="' . $image . '" draggable="true" />';
            echo '</li>';

        }

        // close slider div
        echo '</ul>';

    }

    public function show_stickers_in_slider_click(){

        $images = glob( $this->sticker_directory . '/*.gif' );
        
        // open slider div
        echo '<ul class="sticker-slider">';

        foreach( $images as $image ){

            // open slider item div, print image and close div
            echo '<li class="item">';
            echo '<img style="cursor:move;" class="draggable-item" src="' . $image . '" draggable="true" />';
            echo '</li>';

        }

        // close slider div
        echo '</ul>';

    }

}


?>
