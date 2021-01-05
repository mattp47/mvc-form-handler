<?php
/**
 * Observer to implement the insert event
 */
require_once 'model/MarkupData.php';

class MarkupObserver {
    
	// set variable scope to MarkupObserver only
	private $markupData = null;
  	
	// Magic method to create new object
	public function __construct() {
		$this->markupData = new MarkupData();
	}
	// createNewPeople method which uses insert method from model/MarkupData
	public function createNewPeople( $fullname ) {
		// If the insert method is ok continue as normal.
		try {
			$result = $this->markupData->insert( $fullname );
			return $result;
        } 
        catch (Exception $e) {
            throw $e;
        }
    }   
}

?>
