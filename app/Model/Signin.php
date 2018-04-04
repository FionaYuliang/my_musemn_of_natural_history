<?php
/**
 * Created by PhpStorm.
 * User: yuliang
 * Date: 2017/10/28
 * Time: 19:29
 */

namespace App\Model;

use \DB;

class Signin extends Base
{

    //目前注册和登录页面都在首页，所以注册和登录都要显示首页文章列表？？
    public function getArticleTitleList()
    {
        $article_title_list = DB::table('article')
            ->select('article_title')
            ->get();
        return $article_title_list;
    }

   //登录时从数据库获取密码？？？
    public function getPassword($email)
    {
        $passwword = DB::table('account')
            ->select('password')
            ->where('email', '=', $email)
            ->value('password');

        return $passwword;
    }

}