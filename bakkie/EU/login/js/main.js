
jQuery(document).ready(function ($) {
    $('#register').on('click', function() {
        var f = $('#register-form').find('.form-group'),
            ferror = false,
            emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

        f.children('input').each(function () { // run all inputs

            var i = $(this); // current input
            var rule = i.attr('data-rule');

            if (rule !== undefined) {
                var ierror = false; // error flag for current input
                var pos = rule.indexOf(':', 0);
                if (pos >= 0) {
                    var exp = rule.substr(pos + 1, rule.length);
                    rule = rule.substr(0, pos);
                } else {
                    rule = rule.substr(pos + 1, rule.length);
                }

                switch (rule) {
                    case 'minlen':
                        if (i.val().length < parseInt(exp)) {
                            ferror = ierror = true;
                        }
                        break;

                    case 'exact':
                        if (i.val().length !== parseInt(exp)) {
                            ferror = ierror = true;
                        }
                        break;

                    case 'email':
                        if (!emailExp.test(i.val())) {
                            ferror = ierror = true;
                        }
                        break;

                    case 'required':
                        if (i.val() === '') {
                            ferror = ierror = true;
                        }
                        break;

                }
                i.next('.validation').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
            }
        });

        if (ferror) return false;
        else var str = $(this).serialize();
        $('#register-form').submit();
    });

    // LOGIN AREA 
    $('#login-form').submit(function () {
        var f = $(this).find('.form-group'),
            ferror = false;

        f.children('input').each(function () { // run all inputs

            var i = $(this); // current input
            var rule = i.attr('data-rule');

            if (rule !== undefined) {
                var ierror = false; // error flag for current input
                var pos = rule.indexOf(':', 0);
                if (pos >= 0) {
                    var exp = rule.substr(pos + 1, rule.length);
                    rule = rule.substr(0, pos);
                } else {
                    rule = rule.substr(pos + 1, rule.length);
                }

                switch (rule) {
                    case 'required':
                        if (i.val() === '') {
                            ferror = ierror = true;
                        }
                        break;

                    case 'minlen':
                        if (i.val().length < parseInt(exp)) {
                            ferror = ierror = true;
                        }
                        break;
                    
                    
                }
                i.next('.validation').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
            }
        });

        if (ferror) return false;
        else var str = $(this).serialize();
        var action = $(this).attr('action');
        if (!action) {
            action = 'inc/handler.inc.php';
        }
        var email = $('#email').val();
        var password = $('#uPassword').val();
        var remember = $('#remember').val();
        // console.log(username, password, remember);
        $.ajax({
            type: "POST",
            url: action,
            data: {
                email: email,
                password: password,
                remember: remember,
                status: 'login'
            },
            success: function (data) {
                if (data == 'wrongPwd') {
                    $(".loginErrorLogs").addClass("error");
                    $(".pwd").text("Wrong Password");
                    $('#password').val('')
                } else if (data == 'noUser') {
                    $(".loginErrorLogs").addClass("error");
                    $(".loginErrorLogs").text("No user found! Please register before");
                    $('#login-form').find("input").val('')
                } else if (data == 'OK') {
                    $(".loginErrorLogs").removeClass("error");
                    $(".loginErrorLogs").addClass("success");
                    $('#login-form').find("input").val('')
                    $(".loginErrorLogs").text("Successful login");
                    $('#login').text("Logging ...")
                    setTimeout(function () {
                        $(location).attr('href', './../../view.php')
                    }, 3500);
                }

            }
        });
        return false;
    });
});