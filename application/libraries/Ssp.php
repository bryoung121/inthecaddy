<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

// include external library
require_once 'ssp.class.php';

// extends the classname from included file
class Ssp extends SSP_class
{
    public function __construct()
    {
        //parent::__construct();
    }

}
?>