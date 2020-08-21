$(function (){
    $(".form-horizontal").validate({
        rules:{
            uname:{
                required:true,
                minlength:5,
                remote:{
                    url:"/2006/MVC/index.php/admin/reg/checkName",
                    type:"post",
                    data:{
                        uname:function (){
                            return $("input[name=uname]").val();
                        }
                    }
                }
            },
            password:{
                required:true,
                rangelength:[6,10],
                equalTo:"#password1"
            },
            password1:{
                required:true,
                rangelength:[6,10],
                equalTo:"#password"
            }
        },
        messages:{
            uname:{
                required:"用户名必须填写",
                minlength:"用户必须五位及以上",
                remote: "用户名已经存在"
            },
            password:{
                required:"密码必须填写",
                rangelength:"密码在六到十位之间"
            },
            password1:{
                required:"必须再次填写密码",
                rangelength:"密码在六到十位之间",
                equalTo:"密码不一致"
            }
        }
    })
})