<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>优惠活动</title>

  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/activity.css">
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
    <div class="swiper-container" id="top_swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/activity/banner_01.jpg" alt="优贝口腔_卡瓦种植体"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/activity/banner_02.jpg" alt="优贝口腔_健康牙齿从现在开始"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/activity/banner_03.jpg" alt="优贝口腔_即刻种植不受罪"></div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination "></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>

  <!-- 主导航 -->
  <?php include './public/mainNav.php';?>

  <!-- 子导航 -->
  <?php include './public/subNav.php';?>

  <section class="mbBox">

    <!-- 享受全年  最低价格 -->
    <div class="mbBox_01">
      <div class="tit">
        <h3>>> 享受全年  最低价格 <<</h3>
      </div>
      <a href="#">
        <img src="<?php echo IMG_PATH ?>/activity/mbBox_01_01.png" alt="优贝口腔_充值礼">
      </a>
      <div class="mbBox_01List">
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_01_02.png" alt="优贝口腔_进口种植体"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_01_03.png" alt="优贝口腔_德国进口种植牙"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_01_04.png" alt="优贝口腔_精准微矫正"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_01_05.png" alt="优贝口腔_隐形矫正"></a>
      </div>
    </div>

    <!-- 种植优惠专场 -->
    <div class="mbBox_02">
      <div class="tit">
        <h3>>> 种植优惠专场 <<</h3>
        <p>牙不好 容颜易老 , 一口好牙 身体倍棒</p>
      </div>
      <a href="#">
        <img src="<?php echo IMG_PATH ?>/activity/mbBox_02_01.jpg" alt="优贝口腔_德国进口种植牙">
      </a>
      <div class="mbBox_02List">
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_02_02.png" alt="优贝口腔_韩国进口种植牙"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_02_03.png" alt="优贝口腔_美国进口种植牙"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_02_04.png" alt="优贝口腔_德国高端种植牙"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_02_05.png" alt="优贝口腔_法国高端种植牙"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_02_06.png" alt="优贝口腔_瑞士高端进口种植牙"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_02_07.png" alt="优贝口腔_美国高端进口种植牙"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_02_08.png" alt="优贝口腔_瑞士亲水种植牙"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_02_09.png" alt="优贝口腔_瑞典亲水种植牙"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_02_10.png" alt="优贝口腔_假牙抵现礼"></a>
      </div>
    </div>


    <!-- 正畸特惠专场 -->
    <div class="mbBox_02 mbBox_03">
      <div class="tit">
        <h3>>> 正畸特惠专场 <<</h3>
      </div>
      <a href="#">
        <img src="<?php echo IMG_PATH ?>/activity/mbBox_03_01.png" alt="优贝口腔_隐形矫牙">
      </a>
      <div class="mbBox_02List">
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_03_02.png" alt="优贝口腔_隐形矫正"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_03_03.png" alt="优贝口腔_精准微矫正"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_03_04.png" alt="优贝口腔_隐适美隐形矫正"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_03_05.png" alt="优贝口腔_时代天使隐形矫正"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_03_06.png" alt="优贝口腔_时代天使隐形矫正"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_03_07.png" alt="优贝口腔_时代天使隐形矫正"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_03_08.png" alt="优贝口腔_进口自锁托槽正畸"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_03_09.png" alt="优贝口腔_美国进口自锁托槽正畸"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_03_10.png" alt="优贝口腔_进口陶瓷半隐形矫治"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_03_11.png" alt="优贝口腔_国产自锁托槽正畸"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_03_12.png" alt="优贝口腔_隐形牙套试戴"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_03_13.png" alt="优贝口腔_儿童肌功能矫正"></a>
      </div>
    </div>


    <!-- 美牙特惠专场 -->
    <div class="mbBox_02 mbBox_04">
      <div class="tit">
        <h3>>> 美牙特惠专场 <<</h3>
      </div>
      <a href="#">
        <img src="<?php echo IMG_PATH ?>/activity/mbBox_04_01.png" alt="优贝口腔_美国矿植物美白">
        <img src="<?php echo IMG_PATH ?>/activity/mbBox_04_02.png" alt="优贝口腔_超薄贴瓷面">
        <img src="<?php echo IMG_PATH ?>/activity/mbBox_04_03.png" alt="优贝口腔_美国3M补牙">
      </a>
      <div class="mbBox_02List">
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_04_04.png" alt="优贝口腔_冷光美白"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_04_05.png" alt="优贝口腔_皓齿美白"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_04_06.png" alt="优贝口腔_超薄贴齿面"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_04_07.png" alt="优贝口腔_精准巡航洁牙"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_04_08.png" alt="优贝口腔_德国进口全瓷牙冠"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_04_09.png" alt="优贝口腔_美国进口氧化皓冠"></a>
      </div>
    </div>


    <!-- 到店享多重豪礼 -->
    <div class="mbBox_02 mbBox_05">
      <div class="tit">
        <h3>>> 到店享多重豪礼 <<</h3>
      </div>

      <div class="mbBox_02List">
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_05_01.png" alt="优贝口腔_到店礼"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_05_02.png" alt="优贝口腔_砸蛋礼"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_05_03.png" alt="优贝口腔_集赞礼"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_05_04.png" alt="优贝口腔_拼团礼"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_05_05.png" alt="优贝口腔_特惠礼"></a>
        <a href="#"><img src="<?php echo IMG_PATH ?>/activity/mbBox_05_06.png" alt="优贝口腔_正畸礼"></a>
      </div>
    </div>

  </section>













  <!-- 底部导航 -->
  <?php include './public/footer.php';?>
  <script src="<?php echo JS_PATH ?>/public.js"></script>
  <script>
    // banner swiper
    var swiper = new Swiper('#top_swiper', {
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
        nextEl: '#top_swiper>.swiper-button-next',
        prevEl: '#top_swiper>.swiper-button-prev',
      },
    });



  </script>

</body>

</html>