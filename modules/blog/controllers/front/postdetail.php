<?php

class blogpostdetailModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    parent::initContent();
    $this->setTemplate('post_detail.tpl');
    $post_id = Tools::getValue('id');
    $sql = "SELECT * FROM `"._DB_PREFIX_."blog` WHERE id_blog=".$post_id;
    if ($result=Db::getInstance()->ExecuteS($sql)) {
      $this->context->smarty->assign(
        array(
            'post' => $result,
        )
    );
    }
    }
  }
