<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Model\Welcome as Mdata;

class WelcomeController extends Controller
{

    public function index(Request $request)
    {
        return view('/index/welcome');
    }

    public function showArticleTitle(Request $request)
    {
        $m_article = new Mdata();
        $article_title_list = $m_article->getArticleTitleList();
        return view('/index', [
            'article_title_list' => $article_title_list
        ]);
    }

    /**
     * @param array $data
     * @param string $message
     * @param string $action => 常用action： success / alert / redirect 扩展 => login
     * @param int $code
     * @param string $redirect
     * @return static
     */

      //异步登录，待使用验证规则
    public function ajaxSignin(Request $request)
    {
        if ($request->isXmlHttpRequest() == false) {
            return $this->ajaxShowResult(
                '', '请使用异步请求的方式来访问该页面', 'alert', 100, '');
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
            return $this->ajaxShowResult(
                '', '登录成功', 'redirect', 0, '/personal_home');
        } else
            $message = '密码错误，请重新输入密码';
        return $this->ajaxShowError($message);

    }
    //注册控制器
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
            return $this->ajaxShowResult(
                [], '注册成功', 'redirect', '', '/index/welcome');
              // RedirectResponse::create('/index/welcome');
    }



}











