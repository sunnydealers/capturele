<?php 

    //frontend purpose data

    define('SITE_URL','http://127.0.0.1/programfiles/'); //please change on domain
    define('ABOUT_IMG_PATH',SITE_URL.'images/about/');
    define('CAROUSEL_IMG_PATH',SITE_URL.'images/carousel/');
    define('FACILITIES_IMG_PATH',SITE_URL.'images/facilities/');

    //backend upload process needs this data

    define('UPLOAD_IMAGE_PATH',$_SERVER['DOCUMENT_ROOT'].'/programfiles/images/');
    define('ABOUT_FOLDER','about/');
    define('CAROUSEL_FOLDER','carousel/');
    define('FACILITIES_FOLDER','facilities/');

    function adminLogin()
    {
        session_start();
        if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
            echo"<script>
                window.location.href='index.php';
            </script>";
        }
        
        //session_regenerate_id(true);
    }

    function redirect($url){
        echo"<script>
            window.location.href='$url';
        </script>";
    }

    function alert($type,$msg){
        $bs_class = ($type == "success") ? "alert-success" : "aler-danger";
        echo <<<alert
            <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
                <strong class="me-3">$msg</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        alert;
    }

    function uploadImage($image,$folder)
    {
        $valid_mime = ['image/jpeg','image/png','image/webp','image/jpg'];
        $img_mime = $image['type'];

        if(!in_array($img_mime,$valid_mime)){
            return 'inv_img'; //invaild image mime or format
        }
        else if(($image['size']/(1024*1024))>2){
            return 'inv_size'; //inavlid size grater than 2mb
        }
        else{
            $ext = pathinfo($image['name'],PATHINFO_EXTENSION);
            $rname = 'IMG_'.random_int(11111,99999).".$ext";

            $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
            if(move_uploaded_file($image['tmp_name'],$img_path)){
                return $rname;
            }
            else{
                return 'upd_failed';
            }
        }
    }

    function deleteImage($image, $folder)
    {
        if(unlink(UPLOAD_IMAGE_PATH.$folder.$image)){
            return true;
        }
        else{
            return false;
        }
    }

    function uploadPNGImage($image,$folder)
    {
        $valid_mime = ['image/png'];
        $img_mime = $image['type'];

        if(!in_array($img_mime,$valid_mime)){
            return 'inv_img'; //invaild image mime or format
        }
        else if(($image['size']/(1024*1024))>2){
            return 'inv_size'; //inavlid size grater than 2mb
        }
        else{
            $ext = pathinfo($image['name'],PATHINFO_EXTENSION);
            $rname = 'IMG_'.random_int(11111,99999).".$ext";

            $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
            if(move_uploaded_file($image['tmp_name'],$img_path)){
                return $rname;
            }
            else{
                return 'upd_failed';
            }
        }
    }

?>