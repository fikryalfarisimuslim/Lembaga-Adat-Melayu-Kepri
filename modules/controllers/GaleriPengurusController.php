<?php
/**
 * @Author  : David Naista<davidnaista83@gmail.com>
 * @Date    : 12/28/15 - 2:55 PM
 */
use \modules\controllers\MainController;

class GaleriPengurusController extends MainController {

    public function index() {
		$this->template('galeripengurus');
        
    }
}
?>