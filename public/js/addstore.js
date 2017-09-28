$(document).ready(function(){

    function main() {

    }

    // 驗證店家名稱
    $(".store-name").focusout(function() {
        var value = $(".store-name").val();
        var nameRegx = /^[\u4e00-\u9fa5_\-a-zA-Z0-9]+$/;
        if(!nameRegx.test(value)){
            $('.basic-name .error').text('不可空白，或者非-、—的符號');
            $('.basic-name .error').css('display', 'inline-block');
            return;
        }
        $('.basic-name .error').css('display', 'none');
    });

    // 驗證店家電話
    $(".store-tel").focusout(function() {
        var value = $(".store-tel").val();
        var telregex = /^[0-9]{2,4}\-[0-9]{3,4}\-[0-9]{3,4}$/;
        if(!telregex.test(value)){
            $('.basic-tel .error').text('電話號碼格式錯誤');
            $('.basic-tel .error').css('display', 'inline-block');
            return;
        }
        $('.basic-tel .error').css('display', 'none');
    });

    // 驗證店家地址
    $(".store-addr,.store-intr").focusout(function() {
        var value = $(this).val()
        var regex = /\W{1,}|\_/;
        if(regex.test(value)) {
            $(this).parent().children('.error').text('禁止輸入特殊字符');
            $(this).parent().children('.error').css('display', 'inline-block');
            return;
        }
        $(this).parent().children('.error').css('display', 'none');
    });

    // alert('456');
});
