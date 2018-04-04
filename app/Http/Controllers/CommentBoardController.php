<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Model\Comment as Mdata;

class CommentBoardController extends Controller
{
    // 添加评论，此方法不应该在欢迎面实现，应该在个人中心
    public function addComment(Request $request)
    {
        $username = $request->query->get('username');
        $email = $request->query->get('email', '');
        $comment_content = $request->query->get('comment_content');
        $comment_time = $request->query->get('comment_time');


        //此处参照视频教程上的验证规则修改
        if(empty($username)|| empty($comment_content)){
            $message_comment = '必填项不能为空';
            return $this->ajaxShowError($message_comment);
        }

        $m_comment_content = new Mdata();
        $is_insert_success = $m_comment_content->insertComment($username,$email,$comment_content,$comment_time);
        if($is_insert_success){
            $message_comment = '留言成功';
            return $this->ajaxShowResult([], $message_comment);
        } else {
            $message_comment = '留言失败';
            return $this->ajaxShowError($message_comment);
        }
    }
         // 展示评论区
     public function showComment(Request $request)
     {
        /* 实例化：*/ $m_comment_list = new Mdata();
        /*从M层获取数据（查询构造器已经写好）：*/ $raw_comment_list = $m_comment_list->getCommentList();
        /*新建空字符串：*/  $comment_list = [];

         /*需要这么麻烦吗？为什么不能提取变量。循环查找数据,把每一个数据赋给对应的变量，然后把这串放到上一步新建的空字符串中：*/
        foreach ($raw_comment_list->toArray() as $raw_comment){
            $comment = [];
            $comment['username'] = $raw_comment->username;
            $comment['comment_time'] =  $raw_comment->comment_time;
            $comment['format_comment_time'] =  date('Y-m-d H:i:s', $raw_comment->comment_time);
            $comment['comment_content'] = $raw_comment->comment_content;
            $comment_list[] = $comment;  /*为了web端的循环数据展示 foreach $comment_list as $comment */
        }
        /*带着数据返回页面（页面的数据展示方式已经写好）:*/
        return view('personal_home/commentBoard',['comment_list'=> $comment_list]);
     }

    public function ajaxShowError($message = '', $code = 10000, $action = 'alert', $data = [], $redirect = '')
    {
        return $this->ajaxShowResult($message, $action, $code,$data, $redirect);
    }

}











