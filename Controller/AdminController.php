<?php
class AdminController extends BaseController
{
    public function Admin()
    {
        $req=$this->AdminManager->GetTable();
        $this->addParam("tables",$req);
        $this->view("Admin","Admin page");	
    }
    public function Admin1()
    {
       
        $this->view("Admin1","Admin page");	
    }
    public function Admin2()
    {
        $req=$this->AdminManager->GetColumns($_SESSION['table']);
        $_SESSION['column']=$req;
        $this->addParam("columns",$req);
        $this->view("Admin2","Admin page");	
    }
    public function ChangeTable()
    {
        $array=[];
        if($_SESSION['method']=="select"){
            var_dump($_SESSION['column']) ;
            foreach($_SESSION['column'] as $column)
        {
            $array["$column->Field"]=$_POST["$column->Field"];
        }
        var_dump($array);
        $reqs=$this->AdminManager->Select($array);
        $this->addParam("results",$reqs);
        $this->view("Admin3","Admin page");	

        }
        elseif($_SESSION['method']=="update"){
            var_dump($_SESSION['column']) ;
            foreach($_SESSION['column'] as $column)
        {
            $array["$column->Field"]=$_POST["$column->Field"];
        }
        var_dump($array);
        $reqs=$this->AdminManager->Update($array);
        $this->addParam("results",$reqs);
        $this->view("Admin3","Admin page");	
            
        }
        elseif($_SESSION['method']=="insert"){
            var_dump($_SESSION['column']) ;
            foreach($_SESSION['column'] as $column)
        {
            $array["$column->Field"]=$_POST["$column->Field"];
        }
        var_dump($array);
        $reqs=$this->AdminManager->Insert($array);
        $this->addParam("results",$reqs);
        $this->view("Admin3","Admin page");	
            
        }
        elseif($_SESSION['method']=="delete"){
            var_dump($_SESSION['column']) ;
            foreach($_SESSION['column'] as $column)
        {
            $array["$column->Field"]=$_POST["$column->Field"];
        }
        var_dump($array);
        $reqs=$this->AdminManager->Delete($array);
        $this->addParam("results",$reqs);
        $this->view("Admin3","Admin page");	
            
        }
    }
    public function viewChallenge($filename,$title)	
	{
        $sql=$this->AdminManager->getAllAssoc()
        ob_start();
        foreach ($sql as $row) {
            extract($row);
            include("View/Chalenge/viewChallenge.php");
        }
        
		include("View/" . $this->_httpRequest->getRoute()->getController() . "/" . $filename . ".php");
		$content = ob_get_clean();

		include("View/Challenge/layout.php");
	}
}