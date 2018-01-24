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

        .media-left img {
            height: 40px;
            width: 40px;
        }
        .carousel-inner img {
            height：40px;
            width: 100px;
        }
        .navbar .nav > li:hover .dropdown-menu {
            display: block;
        }
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
<div class="container">
     <div class="row">
         <div class="col-xs-6 col-md-4">
             <div class="row">
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         <h4>自博公告</h4>
                     </div>
                     <div class="panel-body">
                         <p>
                         <ul>
                             @foreach ($article_title_list as $article_title)
                                 <li>{{$article_title->article_title}}</li>
                             @endforeach
                         </ul>
                         </p>
                     </div>
                 </div>
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         <h4>展览介绍</h4>
                     </div>
                     <div class="panel-body">
                         <div class="exhibition_intro">
                             <div class="media">
                                 <div class="media-left">
                                     <a href="#">
                                         <img class="media-object" src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=3436176760,1659716943&fm=27&gp=0.jpg" alt="...">
                                     </a>
                                 </div>
                                 <div class="media-body">
                                     <p class="media-heading"></p>
                                     此处应有php代码/数据库
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         <h4>馆内书架</h4>
                     </div>
                     <div class="panel-body">
                         <p>
                         </p>
                     </div>
                 </div>
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         <h4>基础功能</h4>
                     </div>
                     <div class="panel-body">
                         <div class="list-group" style="text-align: center">
                             <a href="/personal_home/messageBoard" target="_blank" class="list-group-item">登录后的留言板</a>
                             <a href="#" class="list-group-item">网上预约订票</a>
                             <a href="#" class="list-group-item">媒体扫描</a>
                             <a href="#" class="list-group-item">会员俱乐部</a>
                             <a href="#" class="list-group-item">宣传片</a>
                             <a href="#" class="list-group-item">北京市科普基地优秀活动展评投票</a>
                             <a href="#" class="list-group-item">北京市中小学生自然知识竞赛</a>
                         </div>
                     </div>
                 </div>
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         <h4>友情链接</h4>
                     </div>
                     <div class="panel-body">
                         <p>
                         </p>
                     </div>
                 </div>

                 <div class="panel panel-default">
                     <div class="panel-heading">
                         <h4>Some list</h4>
                     </div>
                     <div class="panel-body">
                         <p>
                         </p>
                     </div>
                 </div>
             </div>

         </div>
         <div class="col-xs-12 col-md-8">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <h4>参观资讯</h4></div>
                 <div class="panel-body">
                     <div class="container-fluid">
                         <div class="row">
                             <div class="col-xs-12 col-md-6">
                                 <p>
                                     本馆全年对外开放，周一闭馆，寒暑假、法定节假日及观众人数较多时将有调整，届时请关注网站通知公告。<br/>
                                     开放时间：周二至周日9:00—17:00（周一闭馆，16:00停止入。<br/>
                                     参观内容：动物的奥秘、植物世界、恐龙公园、古哺乳动物、古爬行动物、神奇的非洲、动物-人类的朋友等
                                     免费参观预约办法：为保证观众安全和参观质量，社会公众参观我馆需提前预约免费门票。<br/>
                                     <a  class="button"  href="#" style="float:right ">查看详情</a>
                                 </p>
                             </div>
                             <div class="col-xs-12 col-md-6">
                                 <ul>
                                     @foreach ($article_title_list as $article_title)
                                         <li>{{$article_title->article_title}}</li>
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="panel panel-default">
                 <div class="panel-heading"><h4>综合快讯</h4></div>
                 <div class="panel-body">
                     <div class="container-fluid">
                         <div class="row">
                             <div class="col-xs-12 col-md-6">
                                 <div class="wrapper-for-carousel">
                                 <div id="littleCarousel" class="carousel slide" data-ride="carousel">
                                     <ol class="carousel-indicators">
                                         <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
                                         <li data-target="#carousel-generic" data-slide-to="1"></li>
                                         <li data-target="#carousel-generic" data-slide-to="2"></li>
                                     </ol>
                                     <div class="carousel-inner" role="listbox">
                                         <div class="item active">
                                         <img src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=3436176760,1659716943&fm=27&gp=0.jpg" alt="...">
                                             <div class="carousel-caption">
                                                 ...
                                             </div>
                                         </div>
                                         <div class="item">
                                             <img src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=1891003518,813611907&fm=27&gp=0.jpg" alt="...">
                                             <div class="carousel-caption">
                                                 ...
                                             </div>
                                         </div>
                                         <div class="item">
                                             <img src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=2501062531,3326407854&fm=27&gp=0.jpg" alt="...">
                                             <div class="carousel-caption">
                                                 ...
                                             </div>
                                         </div>

                                         <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
                                             <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                             <span class="sr-only">Previous</span>
                                         </a>

                                         <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
                                             <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                             <span class="sr-only">Next</span>
                                         </a>

                                     </div>
                                 </div>
                                 </div>
                             </div>
                             <div class="col-xs-12 col-md-6">
                                 <div class="quick-news">
                                     <ul>
                                         <li> </li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="panel panel-default">
                 <div class="panel-heading"><h4>科研与收藏</h4></div>
                 <div class="panel-body">
                     <div class="row">
                         <div class="col-sm-6 col-md-4">
                             <div class="thumnail">
                                 <img src="..." alt="">
                                 <div class="caption">
                                     <h3>Thumbnail label</h3>
                                     <p> </p>
                                     <p><a href="#" class="btn btn-primary" role="button">button</a></p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-sm-6 col-md-4">
                             <div class="thumnail">
                                 <img src="..." alt="">
                                 <div class="caption">
                                     <h3>Thumbnail label</h3>
                                     <p> </p>
                                     <p><a href="#" class="btn btn-primary" role="button">button</a></p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-sm-6 col-md-4">
                             <div class="thumnail">
                                 <img src="..." alt="">
                                 <div class="caption">
                                     <h3>Thumbnail label</h3>
                                     <p> </p>
                                     <p><a href="#" class="btn btn-primary" role="button">button</a></p>
                                 </div>
                             </div>
                         </div>

                     </div>

                 </div>
             </div>
             <div class="panel panel-primary">
                 <div class="panel-heading"><h4>相关科教动态</h4></div>
                 <div class="panel-body">
                     <div class="media">
                         <div class="media-left media-middle">
                             <a href="#">
                                 <img class="media-object" src="..." alt="...">
                             </a>
                         </div>
                         <div class="media-body">
                             <h4 class="media-heading">article title</h4>
                         </div>
                     </div>

                     <div class="media">
                         <div class="media-left media-middle">
                             <a href="#">
                                 <img class="media-object" src="..." alt="...">
                             </a>
                         </div>
                         <div class="media-body">
                             <h4 class="media-heading">article title</h4>
                         </div>
                     </div>

                     <div class="media">
                         <div class="media-left">
                             <a href="#">
                                 <img class="media-object" src="http://ww1.sinaimg.cn/large/6ff418c7ly1fne2aanbn3j22001hse83.jpg"
                                      alt="..." style="width:64px;height:64px">
                             </a>
                         </div>
                         <div class="media-body">
                             <h4 class="media-heading">article title</h4>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
</div>
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


/*    function accessToDB() {

    }*/
    function submitAccount()
    {
        let email = $("[name='email']".val())
        let password = $("[name='password']".val())

        let get_data = {
            email:email,
            password:password,
        }

        $.get('/register',get_data,function(response){
          if(response.action === 'success'){
              location.href = '/personal_home'
          } else {
              if (response.action === 'alert'){
                  alert(response.message);
              }
          }
        })
        return false;
    }
</script>
</body>
</html>
