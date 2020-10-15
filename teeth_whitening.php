<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>牙齿种植</title>

  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/teeth_whitening.css">
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
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/teeth_whitening/bannner_01.jpg" alt="优贝口腔_牙齿美白"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/teeth_whitening/bannner_01.jpg" alt="优贝口腔_牙齿美白"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/teeth_whitening/bannner_01.jpg" alt="优贝口腔_牙齿美白"></div>
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

  <!-- 牙齿异色 让人苦不堪言 -->
  <div class="mbox01">
    <div class="mbtitle">
        <h3>牙齿异色 让人苦不堪言</h3>
        <p>the discoloration of teeth is excruciating</p>
    </div>
    <ul class="mbox01_list">
      <li>
        <img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox01_01.png" alt="优贝口腔_自拍不敢露齿笑">
        <h3>自拍不</h3>
        <h3>敢露齿笑</h3>
      </li>
      <li>
        <img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox01_02.png" alt="优贝口腔_影响颜值导致自信">
        <h3>影响颜值</h3>
        <h3>导致自信</h3>
      </li>
      <li>
        <img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox01_03.png" alt="优贝口腔_重要场合无比尴尬">
        <h3>重要场合</h3>
        <h3>无比尴尬</h3>
      </li>
    </ul>
    <a href="#"> <span></span>想要牙齿美白 点击了解</a>
  </div>

  <!-- 别让牙齿影响你的社交 -->
  <div class="mbox02">
    <div class="mbtitle">
      <h3>别让牙齿影响你的社交</h3>
      <p>don't let color interfere with your social life</p>
    </div>
    <ul class="mbox02_list">
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox02_01.png" alt="优贝口腔_黄牙黑牙"><h3>黄牙黑牙</h3></li>
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox02_02.png" alt="优贝口腔_烟/茶渍牙"><h3>烟/茶渍牙</h3></li>
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox02_03.png" alt="优贝口腔_四环素牙"><h3>四环素牙</h3></li>
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox02_04.png" alt="优贝口腔_氟斑牙"><h3>氟斑牙</h3></li>
    </ul>
    <a href="#"><span></span>更多牙齿症状 询问医生</a>
  </div>

  <!-- 别让牙齿影响你的社交 -->
  <div class="mbox03">
    <div class="mbtitle">
      <h3>你是否尝试过这些偏方</h3>
      <p>have you tried any of these folk remedies</p>
    </div>
    <ul class="mbox03_list">
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox03_01.jpg" alt="优贝口腔_美白牙膏"><h3>美白牙膏</h3></li>
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox03_02.jpg" alt="优贝口腔_陈醋"><h3>陈醋</h3></li>
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox03_03.jpg" alt="优贝口腔_小苏打"><h3>小苏打</h3></li>
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox03_04.jpg" alt="优贝口腔_柠檬"><h3>柠檬</h3></li>
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox03_05.jpg" alt="优贝口腔_橘子皮"><h3>橘子皮</h3></li>
    </ul>
    <p>......然而你的牙齿并没有白！</p>
  </div>

  <!-- 比一比，你的牙齿是几号色？ -->
  <div class="mbox04">
    <div class="mbtitle">
      <h3>比一比，你的牙齿是几号色？</h3>
      <p>What color are your teeth？</p>
    </div>
    <div class="mbox04_list">
      <img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox04_01.jpg" alt="优贝口腔_婴幼儿牙齿色泽_最迷人牙齿色泽">
      <img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox04_02.jpg" alt="优贝口腔_中度四环素牙色泽_严重的变色牙">
      <img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox04_03.jpg" alt="优贝口腔_牙齿色阶">
    </div>

    <div class="mbox04_btn">
      <a href="tel:400-1671818"><span></span> 400-1671818</a>
      <a href="#">>> 在线咨询预约 <<</a>
    </div>
    <a href="#"><img src="<?php echo IMG_PATH ?>/teeth_whitening/wzj.jpg" alt="优贝口腔_秀出洁白牙齿"></a>
  </div>

  <!-- 优贝新一代美国皓齿美白 -->
  <div class="mbox05">
    <div class="mbtitle">
      <h3>优贝新一代美国皓齿美白</h3>
      <p>New generation of American white teeth</p>
    </div>
    <ul class="mbox05_list">
      <li>
        <img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox05_01.jpg" alt="优贝口腔_美国皓齿美白优势1：方便快捷">
        <div class="text">
          <h3>优势1：方便快捷</h3>
          <p>无需冷光催化，只需使用化学催化的方式即可美白</p>
        </div>
      </li>
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox05_02.jpg" alt="优贝口腔_美国皓齿美白优势1：健康微痛">
        <div class="text">
          <h3>优势2：健康微痛</h3>
          <p>保护牙龈，降低牙齿敏感度，增强牙釉质结构</p>
        </div>
      </li>
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox05_03.jpg" alt="优贝口腔_美国皓齿美白优势1：过程轻松">
        <div class="text">
          <h3>优势3：过程轻松</h3>
          <p>张口时间短，术后处理简单，过程轻松舒适</p>
        </div></li>
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox05_04.jpg" alt="优贝口腔_美国皓齿美白优势1：色泽自然">
        <div class="text">
          <h3>优势4：色泽自然</h3>
          <p>美白光泽好，洁白自然，可提高2~15个色阶</p>
        </div>
      </li>
    </ul>
  </div>

  <!-- 优贝规范化美白流程 -->
  <div class="mbox06">
    <div class="mbtitle">
      <h3>优贝规范化美白流程 </h3>
      <p>Standardized whitening process of youbei</p>
    </div>
    <div class="mbox06_list">
      <img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox06_01.jpg" alt="优贝口腔_30分钟轻轻松松午休美白">
      <a href="#"><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox06_02.jpg" alt="优贝口腔_美白全过程"></a>
    </div>
  </div>

  <!-- 治疗案例 · 实力保障 -->
  <div class="mbox07">
    <div class="mbtitle">
      <h3>治疗案例 · 实力保障</h3>
      <p>Treatment cases and strength guarantee</p>
    </div>
    <!-- Swiper -->
    <div class="swiper-container mbox07_swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox07_01.jpg" alt="优贝口腔_牙齿美白案例"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox07_02.jpg" alt="优贝口腔_牙齿美白案例"></div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>

  <!-- 你可能感兴趣的专题 -->
  <div class="mbox08">
    <div class="mbtitle">
      <h3>你可能感兴趣的专题 </h3>
      <p>topics you might be interested in</p>
    </div>
    <ul class="mbox08_list">
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox08_01.jpg" alt="优贝口腔_生态全瓷冠"><h3>>> 生态全瓷冠 <<</h3></a></li>
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox08_02.jpg" alt="优贝口腔_3D超薄贴面"><h3>>> 3D超薄贴面 <<</h3></a></li>
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox08_03.jpg" alt="优贝口腔_种植牙"><h3>>> 种植牙 <<</h3></a></li>
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/teeth_whitening/mbox08_04.jpg" alt="优贝口腔_隐形矫正"><h3>>> 隐形矫正 <<</h3></a></li>
    </ul>
  </div>

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

    // mbox07 swiper
    var swiper = new Swiper('.mbox07_swiper', {
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
        nextEl: '.mbox07_swiper>.swiper-button-next',
        prevEl: '.mbox07_swiper>.swiper-button-prev',
      },
    });

  </script>

</body>

</html>