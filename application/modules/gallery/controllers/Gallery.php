<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller {
    

    function photo_gallery()
    {
        $data['title']="Our Work Gallery | " . ($this->comp['company3']) . " Packers & Movers";
        $data['description']="View the photo gallery of " . ($this->comp['company3']) . " Packers and Movers. See our professional team at work handling household shifting, office relocation, and vehicle transport securely.";
        $data['module']="gallery";
        $data['view_file']="photo-gallery";
        echo Modules::run('template/layout2',$data);
    }
    

}