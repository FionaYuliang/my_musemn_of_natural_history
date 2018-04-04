<?php
/**
 * Created by PhpStorm.
 * User: yuliang
 * Date: 2017/10/28
 * Time: 19:29
 */

namespace App\Model;

use \DB;

class Comment extends Base
{
    /**
     * 插入留言
     * @param string $username 用户名
     * @param string $email 邮箱
     * @param string $comment_content 评论内容
     * @param int $comment_time 评论时间
     * @return bool
     */

    //用户添加评论
    public function insertComment($username, $email, $comment_content, $comment_time)
    {
        $comment = DB::table('web_comment')->insert([
            'username' => $username,
            'email' => $email,
            'comment_content' => $comment_content,
            'comment_time' => $comment_time,
        ]);
        return $comment;
    }


     //评论区遍历评论；记得分页
    public function getCommentList()
    {
        $comments = DB::table('web_comment')
            ->select(['username', 'comment_time', 'comment_content'])
            ->get();
        return $comments;
    }


}