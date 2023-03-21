
<?php

class ContactController extends BaseController
{
    public function Contact()
    {
        $this->view("Contact","Page de contact");	
    }
    public function CreateMessage()
			{
                $this->ContactManager->insert(array($_POST["mail"],$_POST["message"] )); 
                $this->view("Contact","Page de contact");	
                 
			}	
}