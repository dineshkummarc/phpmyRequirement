<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

// require_once dirname ( __FILE__ ) . '/../third_party/PHPExcel/Classes/PHPExcel.php';
require_once(APPPATH.'/third_party/PHPExcel/Classes/PHPExcel.php');
// require_once(APPPATH.'/third_party/spreadsheet-parser/src/SpreadsheetParser.php');

class Excel extends PHPExcel {
	public function __construct() {
		parent::__construct ();
	}
}