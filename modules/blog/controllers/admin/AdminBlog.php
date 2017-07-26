<?php

class AdminBlogController extends ModuleAdminController

{

    public function __construct()
 {

    $this->table='blog';
    $this->className='blog';

     $this->fields_list = array(

       'blog_name' => array(
           'title' => $this->l('blog_name'),
       ),
       'blog_description' => array(
           'title' => $this->l('blog_description'),
       ),
       'date_blog' => array(
           'title' => $this->l('date_blog'),
       ),
   );

   parent::__construct();


   $this->fields_form = array(
  'legend' => array(
    'title' => $this->l('Edit carrier'),
  ),
  'input' => array(
    array(
      'type' => 'text',
      'name' => 'shipping_method',
     ),
  ),
  'submit' => array(
    'title' => $this->l('Save'),
    'class' => 'btn btn-default pull-right'
  )
);
 }

}
