<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Model\welcome as MArticle;

class welcome extends Controller
{
    public function index(Request $request)
    {
        return view('/index/welcome');
    }

    public function showArticleTitle(Request $request)
    {
        $m_article = new MArticle();
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
        return $this->ajaxShowResult($data, $message, $action, $code, $redirect);
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

        $m_article = new MArticle();
        $correct_password = $m_article->getPassword($email);
        if ($email == false) {
            $message = '此账号不存在，请先去注册';
            return $this->ajaxShowError($message);
        } elseif ($correct_password == $password) {
            setcookie('is_login', true);
            return $this->ajaxShowResult('', '登录成功', 'redirect', 0, '/home');
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
//            return $this->ajaxShowResult([]);

            return $this->ajaxShowError('email/password不能为空');
//            return view('register');
        }

        $m_article = new MArticle();
        $id = $m_article->add($email, $password);

        if ($email) {
            $message = '此邮箱已经注册过账号,选择：1.去登录 2.换个邮箱试试 3.找回密码';
            return view('iforget', ['message' => $message]);
        } else {
            return $this->ajaxShowResult([], '注册成功', 'redirect', '', '/index/welcome'); // RedirectResponse::create('/index/welcome');
        }
    }
}











