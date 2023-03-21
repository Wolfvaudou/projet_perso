
<?php

class ProjectController extends BaseController
{
    public function Project()
    {
    $req=$this->ProjectManager->getAll();
    $this->addParam("projects",$req);
    $this->addParam("id",0);
    $this->view("Project","All my works");
}
    public function ViewProject()
    {
        $req=$this->ProjectManager->getById($_GET["id"]);
        $this->addParam("project",$req);
        $this->view("ViewProject","One of my work");

    }	
}