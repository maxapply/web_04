// 点击  header  显示左侧导航
$('.header_fl_list').click(function () {
  $(this).addClass('click_before').removeClass("click_after")
  $(".mask").show().addClass("shift_right").removeClass("shift_left")
})

// 点击遮罩层
$('.mask').click(function (e) {
  $('.header_fl_list').removeClass("click_before").addClass('click_after')
  $(this).removeClass("shift_right").addClass("shift_left")

  // 关闭遮罩层
  setTimeout(function () {
    $(".mask").hide()
  }, 1000)

})


// 子导航
var swiper = new Swiper('.swiper-container.subNav', {
  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'progressbar',
  },
  navigation: {
    nextEl: '.subNav>.swiper-button-next',
    prevEl: '.subNav>.swiper-button-prev',
  },
});

// 点击弹出框关闭按钮
$('.Popup>span').click(function(){
  $('.Popup').removeClass('fadeInDown1').addClass('fadeInDown2')
})


// 滚动大于200 制顶按钮显示
$(function () {
  function showBox() {
    $(document).scrollTop() >= 200 ?
    $(".scroll_top").fadeIn() :
    $(".scroll_top").fadeOut()
  }
  // dom渲染完成后判断滚动条卷起距离大于200 ？显示 ：隐藏
  showBox()
  // 滚动的时候显示制顶按钮
  $(window).scroll(function () {
    showBox()
  })
})


// 制顶按钮  卷起距离为0
$(".scroll_top").click(function () {
  $("body,html").animate({
    scrollTop: 0,
  })
})






// 错误提示信息
$(".error_btn").click(function () {
  $('.error_message').hide()
})


// 用户名验证
$("#user_name").blur(function () {
  if (/^([\u4e00-\u9fa5]){2,5}$/.test(this.value)) {
    console.log('用户名输入正确');
    // 修改标签属性
    $(this).attr('verification', 'yes')
  } else {
    // 设置弹出信息框错误提示的文字
    $('.error_message').find('h3>span').html('姓名')
    // 显示弹出框
    $('.error_message').show()
    // 修改标签属性
    $(this).attr('verification', 'no')
  }
});


// 手机号验证
$("#User_telephone").blur(function () {
  if (!(/^1[3456789]\d{9}$/.test(this.value))) {
    // 设置弹出信息框错误提示的文字
    $('.error_message').find('h3>span').html('手机号')
    // 显示弹出框
    $('.error_message').show()
    // 修改标签属性
    $(this).attr('verification', 'no')
  } else {
    console.log('手机号输入正确');
    // 修改标签属性
    $(this).attr('verification', 'yes')
  }
});

function check() {

  var name = $("#user_name").attr('verification')
  var telephone = $("#User_telephone").attr('verification')

  if (name == 'yes' && telephone == 'yes') {

    console.log('信息全部填写正确，提交信息');


    return true

  } else {


    // 判断信息填写是否有误
    if (name == 'no') {
      // 设置弹出信息框错误提示的文字
      $('.error_message').find('h3>span').html('姓名')
      // 显示弹出框
      $('.error_message').show()
    } else if (telephone == 'no') {
      // 设置弹出信息框错误提示的文字
      $('.error_message').find('h3>span').html('手机号')
      // 显示弹出框
      $('.error_message').show()
    }
    return false
  }

}

// 点击重置按钮
$('#reset').click(function () {
  $('#user_name').val('')
  $('#User_telephone').val('')
  $('#gender').val('')
  $('#project').val('选择就诊项目')
  $('#describe').val('')
})

