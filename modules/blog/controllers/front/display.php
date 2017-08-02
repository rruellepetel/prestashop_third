<?php
class blogdisplayModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    parent::initContent();
    $this->setTemplate('display.tpl');
    $sql = "SELECT * FROM `"._DB_PREFIX_."blog`";
    $posts = [];
    if ($result=Db::getInstance()->ExecuteS($sql)) {
      foreach ($result as $post) {
        $post["link"] = $this->context->link->getModuleLink('blog', 'postdetail', array('id' =>$post['id_blog']));
        $posts[] = $post;
      }
      $this->context->smarty->assign(
        array(
            'posts' => $posts
        )
    );
    }
    }
  }
