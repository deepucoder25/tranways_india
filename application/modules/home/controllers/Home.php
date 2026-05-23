<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Home extends MX_Controller
{
    function error()
    {
        $this->oldurl_to_newurl();
        $data['title'] = "Page Not Found | " . ($this->comp['company3']);
        $data['description'] = "The page you are looking for might have been removed, had its name changed, or is temporarily unavailable. Return to the homepage of " . ($this->comp['company3']). " Packers and Movers.";
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }
    function index()
    {
        $data['title'] = "Top Rated Packers and Movers in India | " . ($this->comp['company3']);
        $data['description'] = ($this->comp['company3']) . " is a highly trusted relocation service provider in India. We offer 100% safe, fast, and affordable household shifting, office relocation, and car transport services pan-India.";
        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }
    public function oldurl_to_newurl()
    {
        // if (@$this->uri->segment(1) == "packers-movers-bihar-india") {
        //     redirect("bihar", 'location', 301);
        // }
    }
}
