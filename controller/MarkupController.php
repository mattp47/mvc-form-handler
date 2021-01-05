<?php
/**
* Manages POST requests and calls the appropriate model for the task.
*/

require_once 'model/MarkupObserver.php';

class MarkupController {
    
	// set variable scope to MarkupController only
	private $MarkupObserver = NULL;
    
	// Magic method to create new object
	public function __construct() {
		$this->MarkupObserver = new MarkupObserver();
    }
    
    // Create redirect method to redirect to index.php
	public function redirect($location) {
        header('Location: '.$location);
    }
    
    // Request method to be used on index.php
    public function requestHandler() {
    	// If the savePeople method is ok continue as normal.
        try {
            $this->savePeople();
        }
        // Create an object containing the exception information
        catch ( Exception $e ) {
            // throw unknown Exception, use app error.php to display it
            $this->displayError("Errors", $e->getMessage());
        }
    }
    // Post people data method
    public function savePeople() {
        $fullname = '';       
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        	$people = $_POST['people'];
        	$download = 'Download this file';
        	// Loop through people with inputs with the same name and post with some formatting
			foreach ($people as $key => $val) {					
				foreach ($val as $key => $fname ){
					$fullname .= $key.": ".$fname."\n";
					if ($key == 'surname') {
							$fullname .= "\n";
					}
				}
			}	
			//$firstname   = $_POST['people'][0]['firstname'];
			//$surname     = $_POST['people'][1]['surname'];
			
			// Use createNewPeople method from model/MarkupObserver.php
            $this->MarkupObserver->createNewPeople( $fullname );
            $this->redirect('index.php?download');
            return;
        }
        // include markup view 
        include 'view/markup.php';
    }
    // Display error page method
    public function displayError($title, $msg) {
        include 'view/error.php';
    }
    
}
?>
