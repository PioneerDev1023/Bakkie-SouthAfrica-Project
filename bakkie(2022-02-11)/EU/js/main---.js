
jQuery(document).ready(function ($) {

    // REGISTER AREA 
    // $('#register-form').submit(function () {
    //     var f = $(this).find('.form-group'),
    //         ferror = false,
    //         emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

    //     f.children('input').each(function () { // run all inputs

    //         var i = $(this); // current input
    //         var rule = i.attr('data-rule');

    //         if (rule !== undefined) {
    //             var ierror = false; // error flag for current input
    //             var pos = rule.indexOf(':', 0);
    //             if (pos >= 0) {
    //                 var exp = rule.substr(pos + 1, rule.length);
    //                 rule = rule.substr(0, pos);
    //             } else {
    //                 rule = rule.substr(pos + 1, rule.length);
    //             }

    //             switch (rule) {
    //                 case 'minlen':
    //                     if (i.val().length < parseInt(exp)) {
    //                         ferror = ierror = true;
    //                     }
    //                     break;

    //                 case 'email':
    //                     if (!emailExp.test(i.val())) {
    //                         ferror = ierror = true;
    //                     }
    //                     break;
    //             }
    //             i.next('.validation').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
    //         }
    //     });

    //     if (ferror) return false;
    //     else var str = $(this).serialize();
    //     var action = $(this).attr('action');
    //     if (!action) {
    //         action = 'inc/handler.inc.php';
    //     }
        
    //     // var username = $('#username').val();
    //     // var surname = $('#surname').val();
    //     // var nickname = $('#nickname').val();
    //     // var cellnumber = $('#cell_number').val();
    //     // var email = $('#email').val();
    //     // var country = $('#country').val();
    //     // var province = $('#province').val();
    //     // var hometown = $('#hometown').val();
    //     // var hocrate = $('#hoc_rate').val();
    //     // var freerate = $('#free_rate').val();
    //     // var dailyrate = $('#daily_rate').val();
    //     // var license_photo = $('#license_photo').val();
    //     // var formdata = new FormData();
    //     // formdata.append("myFile", $("#license_photo").files[0]);
    //     var data = new FormData(this);
    //     data.append('status', 'register');
    //     var password = $('#password').val();
    //     var re_pass = $('#re_pass').val();
    //     $.ajax({
    //         type: "POST",
    //         url: action,
    //         data: data,
    //         // data: {
    //         //     username: username,
    //         //     surname: surname,
    //         //     nickname: nickname,
    //         //     cellnumber: cellnumber,
    //         //     email: email,
    //         //     country: country,
    //         //     province: province,
    //         //     hometown: hometown,
    //         //     hocrate: hocrate,
    //         //     freerate: freerate,
    //         //     dailyrate: dailyrate,
    //         //     license_photo: license_photo,
    //         //     password: password,
    //         //     re_pass: re_pass,
    //         //     status: 'register'
    //         // },
    //         success: function (data) {
    //             if (data == 'pwdMissMatch') {
    //                 $(".pwd-retype").text("Enter the same password");
    //                 $('#re_pass').val('')
    //             } else if (data == 'sqlError') {
    //                 $(".errorLogs").addClass("error");
    //                 $(".errorLogs").text("SQL Error occure");
    //                 $('#register-form').find("input").val('')
    //             } else if (data == 'usernameTaken') {
    //                 $(".uName").text("username exist, try another");
    //                 $('#username').val('')
    //             } else if (data == 'Error') {
    //                 $(".errorLogs").addClass("error");
    //                 $(".errorLogs").text("Error occure while registering");
    //             } else if (data == 'OK') {
    //                 $(".errorLogs").removeClass("error");
    //                 $(".errorLogs").addClass("success");
    //                 $('#register-form').find("input").val('')
    //                 $(".errorLogs").text("Successfully registered");
    //                 $('#register').text("Submitting ...")
    //                 // setTimeout(function () {
    //                 //     $(location).attr('href', 'welcome.php')
    //                 // }, 3500);
    //             }

    //         }
    //     });
    //     return false;
    // });
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

                    case 'email':
                        if (!emailExp.test(i.val())) {
                            ferror = ierror = true;
                        }
                        break;
                    
                    // case 'maxlen':
                    //     if (i.val().length > parseInt(exp)) {
                    //         ferror = ierror = true;
                    //     }
                    //     break;    
                }
                i.next('.validation').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
            }
        });

        if (ferror) return false;
        else var str = $(this).serialize();
        $('#register-form').submit();
        // $('#register-form').submit({
        //     async: false,
        //     success: function(data) {
        //         if (data == 'pwdMissMatch') {
        //             $(".pwd-retype").text("Enter the same password");
        //             $('#re_pass').val('');
        //         } else if (data == 'sqlError') {
        //             $(".errorLogs").addClass("error");
        //             $(".errorLogs").text("SQL Error occured!");
        //             $('#register-form').find("input").val('');
        //         } else if (data == 'usernameTaken') {
        //             $(".uName").text("username exist, try another");
        //             $('#username').val('');
        //         } else if (data == 'Error') {
        //             $(".errorLogs").addClass("error");
        //             $(".errorLogs").text("Error occure while registering");
        //         } else if (data == 'OK') {
        //             $(".errorLogs").removeClass("error");
        //             $(".errorLogs").addClass("success");
        //             $('#register-form').find("input").val('');
        //             $(".errorLogs").text("Successfully registered");
        //             $('#register').text("Submitting ...");
        //             // setTimeout(function () {
        //             //     $(location).attr('href', 'welcome.php')
        //             // }, 3500);
        //         }
        //     }
        // });
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
        var username = $('#uName').val();
        var password = $('#uPassword').val();
        var remember = $('#remember').val();
        // console.log(username, password, remember);
        $.ajax({
            type: "POST",
            url: action,
            data: {
                username: username,
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
                    $(".loginErrorLogs").text("No user found!. Please register before");
                    $('#login-form').find("input").val('')
                } else if (data == 'OK') {
                    $(".loginErrorLogs").removeClass("error");
                    $(".loginErrorLogs").addClass("success");
                    $('#login-form').find("input").val('')
                    $(".loginErrorLogs").text("Successful login");
                    $('#login').text("Logging ...")
                    setTimeout(function () {
                        $(location).attr('href', 'welcome.php')
                    }, 3500);
                }

            }
        });
        return false;
    });
});