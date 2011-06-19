<div class="clearfix"></div>
<h2>Example of <span><?php echo $day?></span></h2>

<h3>Code to produce this page</h3>
<pre>
class Example extends BP_Controller {

    public function index()
    {

        $this->title = "Example!";
        $this->description = "A Codeigniter-Boilerplate example";
        $this->css = array("BP/homepage.css","BP/example.css");
        $this->GFont = array("Lobster","Puritan");
        $toView["day"] = strftime("%A",strtotime("today"));

        $this->buildContent($toView);
        $this->renderPage();
    }
}
</pre>

<img src="<?php echo base_url()?>images/BP/logo.png" id="logo"/>

