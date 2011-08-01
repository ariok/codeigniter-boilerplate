<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * BP_Controller
 * Provides a basic extension of CI_Controller to implement codeigniter-boilerplate
 * logics. 
 *
 * Extend this class to create a page.
 *
 * @package		codeigniter-boilerplate
 * @author		Yari D'areglia yari@jumpzero.com
 */
class BP_Controller extends CI_Controller{
    
    //Page info
    protected $page_id = false;
    protected $view = false;
    protected $template = "main";
    protected $hasNav = true;
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
        $this->page_id = strToLower(get_class($this));
        $this->view = "pages/".$this->page_id;
    }

    /**
     * @desc render the final page composed on template and page content
     */
    public function render_page(){
        //Setup template content
        $toTpl["javascript"] = $this->javascript;
        $toTpl["css"] = $this->css;
        $toTpl["content"] = $this->content;
        $toTpl["title"] = $this->title;
        $toTpl["description"] = $this->description;
        $toTpl["GFont"] = $this->GFont;
        
        /* Menu: to avoid use boilerplate menu set hasNav to false
         * and remove $menu reference from templates (i.e. from views/template/main.php)*/
        if($this->hasNav){
            $this->load->helper("nav");
            $toMenu["page_id"] = $this->page_id;
            $toTpl["nav"] = $this->load->view("template/nav",$toMenu,true);
        }
        /*eo menu*/

        //Finally render the page :)
        $this->load->view("template/".$this->template,$toTpl);
    }
    
    /**
     * @desc Create content for the current page
     */
    public function build_content($page_content=""){
        $this->content = $this->load->view($this->view,$page_content,true);
    }
      
    /**
     * @desc get function for page_id
     */
    public function get_page_id(){  
        return $this->page_id;
    }
    
    /**
     * @desc get function for view
     */
    public function get_view(){  
        return $this->view;
    }
    
    /**
     * @desc get function for template
     */
    public function get_template(){  
        return $this->template;
    }
    
}

/*End of file BP_Controller.php*/
/*Location .application/core/BP_Controller.php*/