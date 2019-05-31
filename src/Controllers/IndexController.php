<?php

namespace Winndoo\User\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Winndoo\User\WdUser;

class IndexController extends BaseController
{
    public function index() {

        //$data = 'Hello World';
        $data = WdUser::getInfo();
        //可以直接使用创建的包里的视图，注意调用是两个冒号
        return view('WdUserView::welcome',['data' => $data]);
    }
}