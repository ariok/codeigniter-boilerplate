<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends BP_Controller {
        
    public function index()
    {

        // Define custom main template
        $this->template = "box-template";

        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->buildContent();
        $this->renderPage();
    }
}
