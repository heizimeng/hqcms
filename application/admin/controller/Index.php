<?php
# @Author: HeiZi
# @Date:   2017-07-03T23:52:12+08:00
# @Email:  hz@25ic.com
# @Project: 恒企内容管理系统
# @Last modified by:   HeiZi
# @Last modified time: 2017-07-04T00:30:46+08:00
# @Copyright: 恒企@2017

namespace app\admin\controller;
use think\View;
use app\common\controller\adminBase;
class Index extends adminBase {

  public function index()
  {
    $view = new View();
    return $view->fetch();
  }
}
