<?php
/**
 * Created by PhpStorm.
 * User: yuliang
 * Date: 2017/10/28
 * Time: 19:29
 */

namespace App\Model;

use \DB;

class Welcome extends Base
{
    public function getArticleTitleList()
    {
        $article_title_list = DB::table('article')
            ->select('article_title')
            ->get();
        return $article_title_list;
    }

    /**
     * y函数要写参数
     * @param $email
     * @param $password
     * @return bool
     */
    public function createAccocunt($email, $password)
    {
        $account = DB::table('account')->insert([
            'email' => $email,
            'password' => $password,
        ]);
        return $account;
    }

    /**
     * 插入留言
     * @param string $username 用户名
     * @param string $email 邮箱
     * @param int $comment_time 评论时间
     * @param string $comment_content 评论内容
     * @return bool
     */
    public function insertComment($username, $email, $comment_time, $comment_content)
    {
        $comment = DB::table('web_comment')->insert([
            'username' => $username,
            'email' => $email,
            'comment_time' => $comment_time,
            'comment_content' => $comment_content,
        ]);
        return $comment;
    }

    public function getCommentList()
    {
        $comment_list = DB::table('web_comment')
            ->select(['username', 'comment_time', 'comment_content'])
            ->get();
        return $comment_list;
    }


}