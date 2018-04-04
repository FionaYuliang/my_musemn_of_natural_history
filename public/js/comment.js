

function addComment() {
    let username = $("[name='username']").val()
    let comment_content = $("[name='comment_content']").val()
    let comment_time = Math.round(new Date().getTime()/1000)

    let get_data = {
        username: username,
        comment_content: comment_content,
        comment_time: comment_time
    }

    $.get('/comment',get_data,function(response){
        switch (response.action) {
            case 'success':
                alert(response.message);
                location.reload(true);
                break;
            case 'alert':
                alert(response.message);
                break;
        }
    })
    return false;
}
