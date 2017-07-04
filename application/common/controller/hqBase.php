<?php
# @Author: HeiZi
# @Date:   2017-07-04T00:31:37+08:00
# @Email:  hz@25ic.com
# @Project: 恒企内容管理系统
# @Last modified by:   HeiZi
# @Last modified time: 2017-07-04T00:34:23+08:00
# @Copyright: 恒企@2017

namespace app\common\controller;

/**
 * 控制基类
 */
class hqBase
{

  function __construct()
  {
    # code...
  }


  //空操作
    public function _empty() {
        $this->error('该页面不存在！');
    }
}
