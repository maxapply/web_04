<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>牙齿正畸</title>

  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/correct.css">
  <link rel="shortcut icon" href="<?php echo IMG_PATH ?>/favicon.ico">


  <script src="<?php echo JS_PATH ?>/flexible.js"></script>
  <script src="<?php echo JS_PATH ?>/jquery-3.5.1.min.js"></script>
  <script src="<?php echo JS_PATH ?>/swiper.min.js"></script>

</head>

<body>

  <!-- 头部 logo -->
  <?php include './public/header.php';?>

  <!-- 头部 轮播图 -->
  <div class="header_swiper">
    <!-- Swiper -->
    <div class="swiper-container top_swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/correct/banner_01.jpg" alt="优贝口腔_数字化美学正畸"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/correct/banner_01.jpg" alt="优贝口腔_数字化美学正畸"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/correct/banner_01.jpg" alt="优贝口腔_数字化美学正畸"></div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>

  <!-- 主导航 -->
  <?php include './public/mainNav.php';?>

  <!-- 子导航 -->
  <?php include './public/subNav.php';?>

  <!-- 介绍 -->
  <section class="intro">
    <img src="<?php echo IMG_PATH ?>/correct/intro_img.jpg" alt="优贝口腔_牙齿正畸">
    <p>错合畸形、龋齿、牙周病和颞下颌关节病是国内最常见的四大口腔疾病，其中错合畸形发生率高达90%，若不能及时治疗，则会反复导致后三种疾病发生。</p>
  </section>

  <!-- 你的牙齿也是这样吗？ -->
  <section class="is_it">
    <div class="tit">
      <h3>你的牙齿也是这样吗？</h3>
      <p>Are your teeth the same?</p>
    </div>
    <div class="is_itBox">
      <img src="<?php echo IMG_PATH ?>/correct/is_itBox_01.jpg" alt="优贝口腔_牙齿畸形">
      <img src="<?php echo IMG_PATH ?>/correct/is_itBox_02.jpg" alt="优贝口腔_牙齿排列不齐_龅牙_牙缝隙大">
      <img src="<?php echo IMG_PATH ?>/correct/is_itBox_03.jpg" alt="优贝口腔_牙齿排列不齐_龅牙_牙缝隙大">
      <img src="<?php echo IMG_PATH ?>/correct/is_itBox_04.jpg" alt="优贝口腔_牙齿拥挤_前牙反颌_牙齿开颌">
      <img src="<?php echo IMG_PATH ?>/correct/is_itBox_05.jpg" alt="优贝口腔_牙齿拥挤_前牙反颌_牙齿开颌">
      <a href="#"><img src="<?php echo IMG_PATH ?>/correct/is_itBox_06.jpg" alt="优贝口腔_改变小丑牙"></a>
    </div>
  </section>

  <!-- 牙齿矫正，你有哪些担忧？ -->
  <section class="is_it worry">
    <div class="tit">
      <h3>牙齿矫正，你有哪些担忧？</h3>
      <p>What are your concerns about orthodontics?</p>
    </div>
    <div class="worry_box">
      <a href="#"><img src="<?php echo IMG_PATH ?>/correct/worry_box_01.jpg" alt="牙齿矫正_有哪些疑问"></a>
    </div>
  </section>

  <!-- 牙齿矫正的黄金年龄 -->
  <section class="is_it age">
    <div class="tit">
      <h3>牙齿矫正的黄金年龄</h3>
      <p>The golden age of Orthodontics</p>
    </div>
    <div class="age_box">
      <ul class="age_fl fl">
        <li class="on">乳牙期<h4>(3-6岁)</h4></li>
        <li class="">替牙期<h4>(6-12岁)</h4></li>
        <li class="">恒牙期<h4>(13-18岁)</h4></li>
        <li class="">成年期<h4>(18岁后)</h4></li>
      </ul>

      <div class="age_fr fr">
        <p>骨性龅牙、反颌的矫牙黄金年龄段。对牙型脸型的塑造作用明显，还能纠正孩子如咬唇、吐舌等坏习惯。</p>
        <img src="<?php echo IMG_PATH ?>/correct/age_fr_01.jpg" alt="优贝口腔_儿童牙齿畸形">
        <a href="#">了解矫牙方案</a>
      </div>

      <div class="age_fr fr hide">
        <p>牙齿畸形的黄金年龄段。骨骼生长发育最高峰，促进或抑制牙颌骨的生长改善牙畸形，效果稳定、快速。</p>
        <img src="<?php echo IMG_PATH ?>/correct/age_fr_02.jpg" alt="优贝口腔_儿童牙齿畸形">
        <a href="#">了解矫牙方案</a>
      </div>

      <div class="age_fr fr hide">
        <p>第三个生长发育高峰期或高峰前期。一般常见的错颌畸形在这个阶段都可以得到很好的治疗。</p>
        <img src="<?php echo IMG_PATH ?>/correct/age_fr_03.jpg" alt="优贝口腔_儿童牙齿畸形">
        <a href="#">了解矫牙方案</a>
      </div>

      <div class="age_fr fr hide">
        <p>全身骨骼发育定型，牙槽骨改建的速度不及生长发育时。但牙周情况健康，60岁还能矫正哦~</p>
        <img src="<?php echo IMG_PATH ?>/correct/age_fr_04.jpg" alt="优贝口腔_儿童牙齿畸形">
        <a href="#">了解矫牙方案</a>
      </div>
    </div>
  </section>

  <!-- 定制你的专属方案 -->
  <section class="is_it customized">
    <div class="tit">
      <h3>定制你的专属方案</h3>
      <p>Customize your own solution</p>
    </div>
    <div class="is_itBox customized_Box">
      <img src="<?php echo IMG_PATH ?>/correct/is_itBox_01.jpg" alt="优贝口腔_定制你的专属方案">
      <img src="<?php echo IMG_PATH ?>/correct/customized_Box_02.jpg" alt="优贝口腔_3-15岁儿童干预矫正，牙更好健康_11-18岁青少年矫正，矫正黄金期">
      <a href="#"><img src="<?php echo IMG_PATH ?>/correct/customized_Box_03.jpg" alt="优贝口腔_18岁成人矫正，无年龄限制"></a>
    </div>
  </section>

  <!-- 优贝四大美学矫正技术 -->
  <section class="is_it technology">
    <div class="tit">
      <h3>优贝四大美学矫正技术</h3>
      <p>Aesthetic correction technology</p>
    </div>
    <ul class="technology_box">
      <li class="on"><h4>时代天使</h4><h4>隐形矫正</h4></li>
      <li><h4>美国金属</h4><h4>托槽矫正</h4></li>
      <li><h4>冰晶托槽</h4><h4>半隐形矫正</h4></li>
      <li><h4>舌侧隐</h4><h4>形矫正</h4></li>
    </ul>
    <div class="technology_img">
      <a href="#"><img src="<?php echo IMG_PATH ?>/correct/technology_img_01.jpg" alt="优贝口腔_时代天使隐形矫正"></a>
    </div>
    <div class="technology_img hide">
      <a href="#"><img src="<?php echo IMG_PATH ?>/correct/technology_img_02.jpg" alt="优贝口腔_美国金属托槽矫正"></a>
    </div>
    <div class="technology_img hide">
      <a href="#"><img src="<?php echo IMG_PATH ?>/correct/technology_img_03.jpg" alt="优贝口腔_冰晶托槽半隐形矫正"></a>
    </div>
    <div class="technology_img hide">
      <a href="#"><img src="<?php echo IMG_PATH ?>/correct/technology_img_04.jpg" alt="优贝口腔_舌侧隐形矫正"></a>
    </div>


  </section>

  <!-- 优贝美学全过程 -->
  <section class="is_it process">
    <div class="tit">
      <h3>优贝美学全过程</h3>
      <p>The whole process of youbei Aesthetics</p>
    </div>
    <div class="is_itBox processBox">
      <img src="<?php echo IMG_PATH ?>/correct/processBox_01.jpg" alt="优贝口腔_在线咨询预约_到店面诊检查_取模拍片">
      <img src="<?php echo IMG_PATH ?>/correct/processBox_02.jpg" alt="优贝口腔_在线咨询预约_到店面诊检查_取模拍片">
      <img src="<?php echo IMG_PATH ?>/correct/processBox_03.jpg" alt="优贝口腔_诊断分析定制方案_佩戴矫正器定期复查_矫正完成">
      <a href="#"><img src="<?php echo IMG_PATH ?>/correct/processBox_04.jpg" alt="优贝口腔_我的牙齿矫正需要多久完成"></a>
    </div>
  </section>

  <!-- 优贝美学全过程 -->
  <section class="is_it case">
    <div class="tit">
      <h3>真实对比 效果认证</h3>
      <p>Real contrast effect certification</p>
    </div>
    <div class="is_itBox caseBox">
      <img src="<?php echo IMG_PATH ?>/correct/caseBox_01.jpg" alt="优贝口腔_牙齿排列拥挤案例">
      <img src="<?php echo IMG_PATH ?>/correct/caseBox_02.jpg" alt="优贝口腔_牙齿排列拥挤案例">
      <a href="#"><img src="<?php echo IMG_PATH ?>/correct/caseBox_03.jpg" alt="优贝口腔_我的牙齿情况适合矫正吗？"></a>
    </div>
  </section>

  <!-- 确保种牙效果 选择医生是关键 -->
  <section class="is_it doctor">
    <div class="tit">
      <h3>确保牙齿矫正效果 选择医生是关键</h3>
      <p>Choosing a doctor is the key</p>
    </div>

    <!-- Swiper -->
    <div class="swiper-container team_swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="bgc_color">
              <div class="team_fl fl">
                <h3>郭宏伟 / <span>优贝口腔院长</span></h3>
                <p><span></span>口腔种植、正畸学医生</p>
                <p><span></span>无痕修复美牙技术</p>
                <p><span></span>优贝口腔德国卡瓦技术</p>
                <p><span></span>中华口腔医学会委员</p>
                <p><span></span>国际种植牙协会会员</p>
              </div>
              <div class="team_fr fr">
                <img src="<?php echo IMG_PATH ?>/index/team_01.jpg" alt="优贝口腔_郭宏伟_口腔种植、正畸学医生_无痕修复美牙技术_优贝口腔德国卡瓦技术_中华口腔医学会委员_国际种植牙协会会员">
              </div>

              <div class="team_fl fl">
                <strong>擅长项目：</strong><p>口腔美学修复设计、活动义齿修复、牙齿美学修复、精密附着体义齿、复杂牙齿缺失再修复、口腔种植、口腔正畸等。</p>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="bgc_color">
              <div class="team_fl fl">
                <h3>张洪波 / <span>正畸技术总监</span></h3>
                <p><span></span>知名口腔正畸</p>
                <p><span></span>优贝口腔总监级正畸</p>
                <p><span></span>美国隐形矫正认证医师</p>
                <p><span></span>中华口腔医学会委员</p>
                <p>&nbsp;</p>
              </div>
              <div class="team_fr fr">
                <img src="<?php echo IMG_PATH ?>/index/team_05.jpg" alt="优贝口腔_张洪波_知名口腔正畸_优贝口腔总监级正畸_美国隐形矫正认证医师_中华口腔医学会委员">
              </div>

              <div class="team_fl fl">
                <strong>擅长项目：</strong><p>MBT矫正技术、自锁矫正技术、隐形矫正技术，MBT矫正技术、自锁矫正技术、invisalign隐形矫正技术</p>
              </div>
            </div>
          </div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
  </section>

  <!-- 底部导航 -->
  <?php include './public/footer.php';?>


  <script src="<?php echo JS_PATH ?>/public.js"></script>
  <script>
    // banner swiper
    var swiper = new Swiper('.top_swiper', {
      spaceBetween: 30,
      centeredSlides: true,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.top_swiper>.swiper-button-next',
        prevEl: '.top_swiper>.swiper-button-prev',
      },
    });




      // 记录当前显示的图片的索引
      var current = 0;
      // 保存定时器
      var timer = null;
      timer = setInterval(autoPlay, 1000)
      // 自动播放
      function autoPlay() {
        current < $('.age_fl>li').length - 1 ? current++ : current = 0;
        $('.age_fl>li').eq(current).addClass('on').siblings().removeClass('on')
        $('.age_fr').eq(current).show().siblings('.age_fr').hide()
      }


    // 牙齿矫正的黄金年龄 切换
    $('.age_fl>li').on("click", function() {
      $(this).addClass('on').siblings().removeClass('on')
      var index = $(this).index()
      $('.age_fr').eq(index).show().siblings('.age_fr').hide()
      clearInterval(timer)
      setTimeout(function(){
        timer = setInterval(autoPlay,1000);
      },2000)
    });











    // 优贝四大美学矫正技术 切换
    $('.technology_box>li').on("click", function() {
      $(this).addClass('on').siblings().removeClass('on')
      var index = $(this).index()
      $('.technology_img').eq(index).show().siblings('.technology_img').hide()
    });

    // 确保种牙效果 选择医生是关键
    var swiper = new Swiper('.team_swiper', {
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.team_swiper>.swiper-button-next',
        prevEl: '.team_swiper>.swiper-button-prev',
      },
    });
  </script>

</body>

</html>