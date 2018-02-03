<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Model\welcome as Mdata;

class welcome extends Controller
{
    public function index(Request $request)
    {
        return view('/index/welcome');
    }

    public function showArticleTitle(Request $request)
    {
        $m_article = new Mdata();
        $article_title_list = $m_article->getArticleTitleList();
        return view('/index/welcome', ['article_title_list' => $article_title_list]);
    }

    /**
     * @param array $data
     * @param string $message
     * @param string $action => 常用action： success / alert / redirect 扩展 => login
     * @param int $code
     * @param string $redirect
     * @return static
     */
    public function ajaxShowResult($data = [], $message = '', $action = 'success', $code = 0, $redirect = '')
    {
        $response = [
            'code' => $code,
            'action' => $action,
            'message' => $message,
            'data' => $data,
            'redirect' => $redirect
        ];
        return JsonResponse::create($response);
    }

    public function ajaxShowError($message = '', $code = 10000, $action = 'alert', $data = [], $redirect = '')
    {
        return $this->ajaxShowResult($message, $action, $code,$data, $redirect);
    }

    public function ajaxSignin(Request $request)
    {
        if ($request->isXmlHttpRequest() == false) {
            return $this->ajaxShowResult('', '请使用异步请求的方式来访问该页面', 'alert', 100, '');
        }

        $email = $request->query->get('email');
        $password = $request->query->get('password');

        if (empty($email) || empty($password)) {
            $message = '账号、密码不能为空';
            return $this->ajaxShowError($message);
        }

        $m_article = new Mdata();
        $correct_password = $m_article->getPassword($email);
        if ($email == false) {
            $message = '此账号不存在，请先去注册';
            return $this->ajaxShowError($message);
        } elseif ($correct_password == $password) {
            setcookie('is_login', true);
            return $this->ajaxShowResult('', '登录成功', 'redirect', 0, '/personal_home');
        } else
            $message = '密码错误，请重新输入密码';
        return $this->ajaxShowError($message);

    }

    public function register(Request $request)
    {
        $email = $request->query->get('email');
        $password = $request->query->get('password');
        $message = '';
        if (empty($email) || empty($password)) {
            return $this->ajaxShowError('email/password不能为空');
        }elseif ($email){
            return $this->ajaxShowResult([],'','success','10001','');
        }else
            $m_article = new Mdata();
            $id = $m_article->createAccocunt($email, $password);
            return $this->ajaxShowResult([], '注册成功', 'redirect', '', '/index/welcome'); // RedirectResponse::create('/index/welcome');
    }

    public function addComment(Request $request)
    {
        $username = $request->query->get('username');
        $email = $request->query->get('email', '');
        $comment_content = $request->query->get('comment_content');
        $comment_time = $request->query->get('comment_time');

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

     public function showComment(Request $request)
     {
        /* 实例化：*/ $m_comment_list = new Mdata();
        /*从M层获取数据（查询构造器已经写好）：*/ $raw_comment_list = $m_comment_list->getCommentList();
        /*新建空字符串：*/  $comment_list = [];

         /*循环查找数据,把每一个数据赋给对应的变量，然后把这串放到上一步新建的空字符串中：*/
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


}











