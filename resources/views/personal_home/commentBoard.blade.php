<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-eauiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="keywords" content="gerenzhuye">
    <meta name="description" content="">
    <meta name="author" content="liang">
    <meta name="copyright" content="Copyright ........">
    <title>我的自然博物馆</title>

    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <style>
        footer {
            display: block;
            background-color: dimgray;

        }
        footer a {
            color: rgb(255, 255, 255);
        }

    </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="nav-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">首页</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="ture" aria-expanded="false">博物馆简介</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">馆长致辞</a></li>
                        <li><a href="#">历史回顾</a></li>
                        <li><a href="#">组织结构</a></li>
                        <li><a href="#">地理位置</a></li>
                        <li><a href="#">参观资讯</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="ture" aria-expanded="false">展览介绍</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">基本陈列</a></li>
                        <li><a href="#">临时展览</a></li>
                        <li><a href="#">巡回展览</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="ture" aria-expanded="false">参观与服务</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">新展览预告</a></li>
                        <li><a href="#">服务项目</a></li>
                        <li><a href="#">参观指南</a></li>
                        <li><a href="#">科普活动预约</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="ture" aria-expanded="false">科研与收藏</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">科研项目</a></li>
                        <li><a href="#">学术活动</a></li>
                        <li><a href="#">科研论文</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">防控外来物种入侵</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">教育与活动</a></li>
                <li class="dropdown"><a href="#">内容检索</a></li>



            </ul>

            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="email" placeholder="邮箱" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="密码" class="form-control">
                </div>
                <button type="submit" class="btn btn-success" onclick="accessToDB">登录</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">注册</button>

            </form>
        </div>
    </div>
</nav>

<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="registerModalLabel">注册新账号</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">

                    <label class="control-label">请输入您的邮箱</label>
                    <input class="form-control" id="message-text" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label class="control-label">请输入您的密码</label>
                    <input class="form-control"type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label class="control-label">请确认您的密码</label>
                    <input class="form-control" type="password"  name="password_twice"  placeholder="Password again">
                </div>
                <button type="submit" class="btn btn-success" onclick="submitAccount()">提交</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron">
    <h2>我的自然博物馆</h2>
    <p>My Musemu of Natural History</p>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="toppic">
                <img src="http://ww1.sinaimg.cn/large/6ff418c7ly1fnxupcynnmj25bw1n24qf.jpg"
                     style="width:100%; position:relative; ">
            </div>
        </div>
    </div>
</div>
    <br/>
    <br/>
    <br/>
    <br/>
        <div class="comment-edit">
            <div class="panel panel-primary">
                <div class="panel-heading">在线留言</div>
                <div class="panel-body">
                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon1">姓名：</span>
                        <input type="text" class="form-control" name="username" aria-describedby="sizing-addon1">
                    </div>
                    <br/>
                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2">邮箱：</span>
                        <input type="text" class="form-control" name="email" aria-describedby="sizing-addon1">
                    </div>
                    <br/>
                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon3">留言内容</span>
                        <input type="text" class="form-control" name="comment_content" aria-describedby="sizing-addon1">
                    </div>
                    <br/>
                    <button type="submit" class="btn btn-success" onclick="addComment()">创建留言</button>
                </div>
            </div>
        </div>
<div class="comment-show">
    <div class="panel panel-info">
        @foreach($comment_list as $comment)
        <div class="panel-heading">用户：{{$comment['username']}}，留言时间：{{$comment['comment_time']}}</div>
        <div class="panel-body">
            {{$comment['comment_content']}}
        </div>
        @endforeach
    </div>
</div>


<br/>
<br/>
<br/>
<br/>
<footer class="footer">
    </br>
    <div class="container-fluid">
        <div class="row footer-top">
            <div class="col-sm-4">
                <h3>mymnh</h3>
                </br>
                <h4>mmmmm</h4>
            </div>

            <div class="col-sm-8">
                <div class="row">
                    <div class="col-xs-3">
                        <h4>aaa</h4>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">about us</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-3">
                        <h4>aaa</h4>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">about us</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-3">
                        <h4>aaa</h4>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">about us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer-buttom">
            <div class="beian">
                <ul class="list-inline text-center">
                    <li class="copyright">Copyright © 2007-2013 北京自然博物馆(Beijing Museum of Natural History) 京ICP备07033573 </li>
                    <li><a href="#" target="_blank">北京市东城区天桥南大街126号 100050 电话:010-67024431 传真:010-67021254 </a></li></br>
                    <li><a href="#" target="_blank">电子信箱:office@bmnh.org.cn 网址:www.bmnh.org.cn 京公网安备110101003156号</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script>
    function addComment() {
        let username = $("[name='username']").val()
        let comment_content = $("[name='comment_content']").val()
        let comment_time = time()

        let get_data = {
            username: username,
            comment_content: comment_time,
            comment_time: comment_time
        }

        $get.('/commment',get_data,function(response){
            switch (response.action) {
                case success:
                    alert(response.message);
                    break;
                case redirect:
                    location.href = '/personal_home/commentBoard';
                    break;
                case alert:
                    alert(response.message);
                    break;
            }
        }
        return false;
    }
</script>
</body>