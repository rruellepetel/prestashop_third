<?php

// include_once(PS_ADMIN_DIR.'/../classes/AdminBlog.php');

class AdminBlogController extends ModuleAdminController

{

    public function __construct()
 {
     $this->table = 'example_data';
     $this->className = 'ExampleData';
     $this->lang = true;
     $this->deleted = false;
     $this->colorOnBackground = false;
     $this->bulk_actions = array('delete' => array('text' => $this->l('Delete selected'), 'confirm' => $this->l('Delete selected items?')));

     $this->context = Context::getContext();
     parent::__construct();
 }
 public function renderForm()
 {    }

}
