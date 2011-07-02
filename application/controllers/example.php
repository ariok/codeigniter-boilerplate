<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends BP_Controller {

    public function index()
    {
        /* Remember you can change the main template if you need!
        $this->template = "example-template";
        */

        // Define Meta
        $this->title = "Example!";
        $this->description = "A Codeigniter-Boilerplate example";

        // Define custom CSS
        $this->css = array("BP/homepage.css","BP/example.css");

        // Import Google Font Lobster and Puritan
        $this->GFont = array("Lobster","Puritan");

        //Somedata for the page.
        $toView["day"] = strftime("%A",strtotime("today"));

        /*short cut to load->view("pages/page_name",$content,true)*/
        $this->buildContent($toView);

        $this->renderPage();
    }
}
