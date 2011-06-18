<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BP_Controller extends CI_Controller{
    //Page info
    public $pageID = false;
    public $view = false;
    public $template = "main";
    public $hasNav = true;
    //Page contents
    public $javascript = array();
    public $css = array();
    public $GFont = array();
    public $content = false;
    //Page Meta
    public $title = false;
    public $description = false;


    /**
     * @desc build and setup basic info
     */
    public function __construct(){
        parent::__construct();
        $this->pageID = strToLower(get_class($this));
        $this->view = "pages/".$this->pageID;
    }

    /**
     * @desc render the final page composed on template and page content
     */
    public function renderPage(){
        //Setup template content
        $toTpl["javascript"] = $this->javascript;
        $toTpl["css"] = $this->css;
        $toTpl["content"] = $this->content;
        $toTpl["title"] = $this->title;
        $toTpl["description"] = $this->description;
        $toTpl["GFont"] = $this->GFont;
        
        /* Menu: to avoid use boilerplate menu comment this code
         * and remove $menu reference from templates (i.e. views/template/main.php)*/
        if($this->hasNav){
            $this->load->helper("nav");
            $toMenu["pageID"] = $this->pageID;
            $toTpl["nav"] = $this->load->view("template/nav",$toMenu,true);
        }
        /*eo menu*/

        //Finally render the page :)
        $this->load->view("template/".$this->template,$toTpl);
    }

    public function buildContent($page_content=""){
        $this->content = $this->load->view($this->view,$page_content,true);
    }
}

?>
