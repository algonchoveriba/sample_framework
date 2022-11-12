<?php

use \Model\Welcome;
use Fuel\Core\Controller_Template;
use Fuel\Core\View;

class Controller_Home extends Controller_Template
{
  public $template = 'template/index';
  public function action_index($param1 = null, $param2 = null)
  {
    // 変数としてビューを割り当てる
    $this->template->head = View::forge('template/head');
    $this->template->header = View::forge('template/header');
    $this->template->contents = View::forge('home/content');
    $this->template->footer = View::forge('template/footer');
    $data = Welcome::get_results();
    $this->template->data = $data;
    
    // テンプレートビューの中でさらに読み込んだビューの中にある変数へ値を渡したい場合は、set_globalを使う。
    // テンプレートビューの中で使う変数へ値を渡すだけならsetでいい。

    // レンダリングした、HTMLをリクエストに返す

  }
}