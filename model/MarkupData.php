<?php
/**
 * Handles the data and creates file
 */

class MarkupData {
	
	// Specify file
	public $filename="data/data.txt";
	// set variable scope to MarkupData only
	private $filehandle;
	
	// Create folder and permissions if it doesn't already exist
	public function createFolder() {
		$dirname = dirname($this->filename);
		// if the dir doesn't exist
		if (!is_dir($dirname)){
			// Make dir - read and write for owner, read for everybody else
			mkdir($dirname, 0644, true);
		}
	}
	// Open data.txt and bind to a stream.
	public function openFile() {
		$this->filehandle = fopen( $this->filename, "a" );
	}
	// Close data.txt
	public function closeFile() {
		fclose ($this->filehandle);
	}
	// Insert method that writes to file
	public function insert( $fullname ) {
		$this->createFolder();
		$this->openFile();
		fwrite( $this->filehandle, $fullname );
		$this->closeFile();
	}
}

?>
