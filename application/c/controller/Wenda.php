<?php
/**
 * @author liaoshengping@haoxiaec.com
 * @Time: 2019/2/19 -9:52
 * @Version 1.0
 * @Describe:
 * 1:
 * 2:
 * ...
 */

namespace app\c\controller;


class Wenda
{
    public function index()
    {
        set_time_limit(130);
        (new \app\c\repertory\Wenda())->CatList();
    }
}