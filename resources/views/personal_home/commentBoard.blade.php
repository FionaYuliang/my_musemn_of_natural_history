@extends('common.layouts')

<body>

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

//此处需要重写个人中心的header
<div class="jumbotron">
 @section('header)
        <h2>我的自然博物馆</h2>
        <p>My Musemu of Natural History</p>
        </div>
@stop
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
        @foreach($comments as $comment)
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
