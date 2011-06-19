<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends BP_Controller {
    
    public function __construct(){  
        parent::__construct();
    }

    public function index()
    {
        /*Page dedicated JS - CSS - Google Fonts
        $this->javascript = array("homepage.js");
        */
        $this->css = array("BP/homepage.css");
        $this->GFont = array("Lobster","Puritan");

        /*Define single page content as usual*/
        $toView['page_content'] = date("H:i:s");
        $toView['other_data'] = "<p>See you!</p>";
        
        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->buildContent($toView);

        $this->renderPage();
    }
}
