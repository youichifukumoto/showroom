$('.detail a').click(function () {
    var imgSrc = $(this).children().attr('src');
    $('.bigimg').children().attr('src', imgSrc);
    $('.modal').fadeIn();
    $('body,html').css('overflow-y', 'hidden');
    return false
});

$('.close-btn').click(function () {
    $('.modal').fadeOut();
    $('body,html').css('overflow-y', 'visible');
    return false
});



$('.item_color .count_a a').click(function () {
    var imgSrc = $(this).children().attr('src');
    $('.bigimg').children().attr('src', imgSrc);
    $('.modal').fadeIn();
    $('body,html').css('overflow-y', 'hidden');
    return false
});

$('.close-btn').click(function () {
    $('.modal').fadeOut();
    $('body,html').css('overflow-y', 'visible');
    return false
});

$('.item_color .count_b a').click(function () {
    var imgSrc = $(this).children().attr('src');
    $('.bigimg').children().attr('src', imgSrc);
    $('.modal').fadeIn();
    $('body,html').css('overflow-y', 'hidden');
    return false
});

$('.close-btn').click(function () {
    $('.modal').fadeOut();
    $('body,html').css('overflow-y', 'visible');
    return false
});

$('.item_color .count_c a').click(function () {
    var imgSrc = $(this).children().attr('src');
    $('.bigimg').children().attr('src', imgSrc);
    $('.modal').fadeIn();
    $('body,html').css('overflow-y', 'hidden');
    return false
});

$('.close-btn').click(function () {
    $('.modal').fadeOut();
    $('body,html').css('overflow-y', 'visible');
    return false
});

$('.item_color .count_d a').click(function () {
    var imgSrc = $(this).children().attr('src');
    $('.bigimg').children().attr('src', imgSrc);
    $('.modal').fadeIn();
    $('body,html').css('overflow-y', 'hidden');
    return false
});

$('.close-btn').click(function () {
    $('.modal').fadeOut();
    $('body,html').css('overflow-y', 'visible');
    return false
});

$('.item_color .count_e a').click(function () {
    var imgSrc = $(this).children().attr('src');
    $('.bigimg').children().attr('src', imgSrc);
    $('.modal').fadeIn();
    $('body,html').css('overflow-y', 'hidden');
    return false
});

$('.close-btn').click(function () {
    $('.modal').fadeOut();
    $('body,html').css('overflow-y', 'visible');
    return false
});

// $('form').submit(function () {
//     var scroll_top = $(window).scrollTop();  //送信時の位置情報を取得
//     $('input.st', this).prop('value', scroll_top);  //隠しフィールドに位置情報を設定
// });

// window.onload = function () {
//     //ロード時に隠しフィールドから取得した値で位置をスクロール
//     $(window).scrollTop( $_REQUEST['scroll_top']);
// }