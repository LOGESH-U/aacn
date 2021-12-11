
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="../css/gallery.css">
        <link href='simplelightbox-master/dist/simple-lightbox.min.css' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
        <script type="text/javascript" src="simplelightbox-master/dist/simple-lightbox.jquery.min.js"></script>
    </head>
    <body>
         <?php
            require_once('../php_files/top_header.php');
            require_once('../php_files/nav_header.php');
        ?>
        <div class='container'>
            <div class="image">
              
            <?php 
            // Image extensions
            $image_extensions = array("png","jpg","jpeg","gif");

            // Target directory
            // $dir = 'images/';
            $dir = '../upload/uploads/';
            if (is_dir($dir)){
                
                if ($dh = opendir($dir)){
                    $count = 1;

                    // Read files
                    while (($file = readdir($dh)) !== false){

                        if($file != '' && $file != '.' && $file != '..'){

                            // Image path
                            // $image_path = "images/".$file;
                            $image_path = "../upload/uploads/".$file;

                            $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

                            // Check its not folder and it is image file
                            if(!is_dir($image_path) && 
                                in_array($image_ext,$image_extensions)){
                                ?>

                                <!-- Image -->
                                <a href="<?php echo $image_path; ?>">
                                    <img src="<?php echo $image_path; ?>" alt="" title=""/>
                                </a>
                                <!-- --- -->
                                <?php

                                // Break
                                if( $count%4 == 0){
                                ?>
                                    <div class="clear"></div>
                                <?php    
                                }
                                $count++;
                            }
                        }
                            
                    }
                    closedir($dh);
                }
            }
            ?>
            </div>
        </div>

    <?php 
        require_once('../php_files/footer.php');
    ?> 
        <!-- Script -->
        <script type='text/javascript'>
        $(document).ready(function(){
            var gallery = $('.image a').simpleLightbox();
        });
        </script>
    </body>
</html>