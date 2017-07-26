<?php

include_once(PS_ADMIN_DIR.'/../classes/AdminTab.php');

class AdminBlogController extends ModuleAdminController

{

    public function __construct()

    {

        parent::__construct();

        $this->context = Context::getContext();

    }

}

?>
