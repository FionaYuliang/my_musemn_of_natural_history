
//这是邮箱补全功能,（尚未执行成功）
$('.email').autocomplete({
    delay: 0,
    autoFocus: true,
    source: function (request, response) {
        let hosts = ['qq.con', '163.com', 'sina.com.cn', 'gmail.com'],
            term = request.term,
            name = term,
            host = '',
            at = term.indexOf('@'),
            result = [];

        result.push(term);
        if(at > -1){
            name = term.slice(0,at);
            host = term.slice(at + 1);
        }

        if(name){
            let foundHosts = (
                host ? $.grep(hosts,function (value,index) {
                    return value.indexOf(host)> -1
                }) : hosts
            ), foundResult = $.map(foundResult,function(value,index){
                return name + '@' + value;
            });
            result = result.concat(foundResult)
        }
        response(result);
    }

});


function emailLogin() {
    $.get('/personal_home/commentBoard',function (response) {
        switch (response.action){
            case 'redirect':
                alert(response.message);
                location.href = response.redirect;
                break;
        }
    })
}

function judgeEmail() {

    if (response.action) {
        $("button").mousedown(function () {
            $(".tip-msg").slideToggle();
        });
    }
}

function submitAccount() {
    let email = $("[name='email']").val();
    let password = $("[name='password']").val();

    let get_data = {
        email: email,
        password: password
    };
    console.log('get_data =>');
    console.log(get_data);

    $.get('/register', get_data, function (response) {
        switch (response.action) {
            case 'success':
                alert(response.message);
                break;
            case 'redirect':
                location.href = response.redirect;
                break;
            case 'alert':
                alert(response.message);
                break;
        }
    });
    return false;
}
