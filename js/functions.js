var url = 'functions/functions.php';

function create() {
    $(document).ready(function(){
        $('#create').click(function(e){
            e.preventDefault();
            var username = $('#username').val();
            var password = $('#password').val();
            var role     = $('#role').val();
    
            $.ajax({
                type: 'POST',
                url : url,
                data : {
                    action : 'register',
                    username : username,
                    password : password,
                    role : role
                },
                dataType: 'json',
                success: function(response){
                    response.success == true ? success(response.bgcolor,response.color,response.message) : validate(response.bgcolor,response.color,response.message);
                }
            })
        });
    });
}

function login() {
    $('document').ready(function(){
        $('#signin').click(function(e){
            e.preventDefault();
            var username = $('#username').val();
            var password = $('#password').val();
            $.ajax({
                type: 'POST',
                url : url,
                data: {
                    action : 'login',
                    username : username,
                    password : password
                },
                dataType: 'json',
                success:function(response) {
                    response.success == true ? success(response.bgcolor,response.color,response.message) : invalid(response.bgcolor,response.color,response.message);
                }
            });
        });
    });
}

function success(bgcolor,color,message) {
    $.amaran({
        'theme'     :'colorful',
        'content'   :{
        bgcolor: bgcolor,
        color: color,
        message: message
        },
        'position'  :'top right',
        'outEffect' :'slideBottom'
    });
}

function validate(bgcolor,color,message) {
    $.amaran({
        'theme'     :'colorful',
        'content'   :{
        bgcolor: bgcolor,
        color: color,
        message: message
        },
        'position'  :'top right',
        'outEffect' :'slideBottom'
    });
}

function invalid(bgcolor,color,message) {
    $.amaran({
        'theme'     :'colorful',
        'content'   :{
        bgcolor: bgcolor,
        color: color,
        message: message
        },
        'position'  :'top right',
        'outEffect' :'slideBottom'
    });
}