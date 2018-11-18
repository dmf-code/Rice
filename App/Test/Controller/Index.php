<?php
/**
 * Created by PhpStorm.
 * User: DMF
 * Date: 2017/12/18
 * Time: 17:08
 */

namespace App\Test\Controller;


use Rice\Core\Controller;

class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    //测试
    public function Index(){

        $this->assign('test','test 123');
        $this->display();
    }

}
