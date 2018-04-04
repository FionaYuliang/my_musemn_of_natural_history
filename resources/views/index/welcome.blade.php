@extends('common.layouts')

@section('content')
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
                                <a class="button" href="#" style="float:right ">查看详情</a>
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <ul>
                                @foreach ($article_title_list as $article_title)
                                    <li>{{$article_title->article_title}}</li>
                              @endforeach
                            </ul>
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
                                            <img src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=3436176760,1659716943&fm=27&gp=0.jpg"
                                                 alt="...">
                                            <div class="carousel-caption">
                                                ...
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=1891003518,813611907&fm=27&gp=0.jpg"
                                                 alt="...">
                                            <div class="carousel-caption">
                                                ...
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=2501062531,3326407854&fm=27&gp=0.jpg"
                                                 alt="...">
                                            <div class="carousel-caption">
                                                ...
                                            </div>
                                        </div>

                                        <a class="left carousel-control" href="#carousel-generic" role="button"
                                           data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"
                                                      aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>

                                        <a class="right carousel-control" href="#carousel-generic" role="button"
                                           data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"
                                                      aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="quick-news">
                                <ul>
                                    <li></li>
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
                                <p></p>
                                <p><a href="#" class="btn btn-primary" role="button">button</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumnail">
                            <img src="..." alt="">
                            <div class="caption">
                                <h3>Thumbnail label</h3>
                                <p></p>
                                <p><a href="#" class="btn btn-primary" role="button">button</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumnail">
                            <img src="..." alt="">
                            <div class="caption">
                                <h3>Thumbnail label</h3>
                                <p></p>
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
                            <img class="media-object"
                                 src="http://ww1.sinaimg.cn/large/6ff418c7ly1fne2aanbn3j22001hse83.jpg"
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
@stop



