
<?php
session_start();

class ChallengeController extends BaseController
{
    
    public function Challenges()
   {
    $_SESSION['id']=$_GET["id_challenge"];
    $this->IndexManager->checkStarted($_GET["id_challenge"],$_SESSION["login"]);
    $id=$_SESSION['id'];
    $this->view("$id","Challenge");
}
    public function Check()
    {
        
        if($_POST["answer"]==$this->ChallengeManager->getbyid( $_SESSION['id'])->answer)
        { ?>
            <script type="text/javascript">
                alert("You are right")
            </script>
            <?php ; }
        else
        { ?>
            <script type="text/javascript">
                alert("wrong answer")
            </script> 
        
        <?php ;}
         $this->view( $_SESSION['id'],"Challenge");

            
    }

}