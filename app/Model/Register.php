<?php
/**
 * Created by PhpStorm.
 * User: yuliang
 * Date: 2017/10/28
 * Time: 19:29
 */

namespace App\Model;

use \DB;

class Register extends Base
{

    //目前注册和登录页面都在首页，所以注册和登录都要显示首页文章列表？？
    public function getArticleTitleList()
    {
        $article_title_list = DB::table('article')
            ->select('article_title')
            ->get();
        return $article_title_list;
    }

    /**
     * 函数要写参数
     * @param $email
     * @param $password
     * @return bool
     */

    //创建账户
    public function createAccocunt($email, $password)
    {
        $account = DB::table('account')->insert([
            'email' => $email,
            'password' => $password,
        ]);
        return $account;
    }


}