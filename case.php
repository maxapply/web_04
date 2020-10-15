<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>案例分享</title>

  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/case.css">
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
      <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/index/banner_01.jpg" alt="优贝口腔_这个暑假让我们变美丽"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/index/banner_02.jpg" alt="优贝口腔_健康牙齿从现在开始"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/index/banner_03.jpg" alt="优贝口腔_健商家补贴500万爱牙基金"></div>
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


  <!-- 案例展示 -->
  <section class="case">
    <div class="tit">
      <span>CASE</span>
      <div class="tit_fr">
        <h1>案例展示</h1>
        <h3>给你真实笑容 诠释自信人生</h3>
      </div>
    </div>
    <p>优贝口腔将人性化医疗服务与精深技术聚合为一，开创了北京口腔领域品质服务新纪元，赢得了患者的信任和好评。优贝口腔用实例证明，来优贝，拥有一口洁白整齐的牙齿不是梦。</p>
    <img src="<?php echo IMG_PATH ?>/case/case_img.png" alt="优贝口腔_技术实力">
    <!-- Swiper -->
    <div class="case-slider swiper-container">
      <div class="swiper-wrapper">

        <div class="item swiper-slide">
          <h3>心平才会气和，乐观才能长寿</h3>
          <div class="case_fl fl">
            <img src="<?php echo IMG_PATH ?>/case/case_01_01.png" alt="优贝口腔_牙齿种植">
            <a href="#">了解费用</a>
            <a href="#">预约提交</a>
          </div>

          <div class="case_fr fr">
            <p><strong>姓名：</strong>张阿姨</p>
            <p><strong>年龄：</strong>66岁</p>
            <p><strong>牙齿问题：</strong>全口牙缺失等，多种问题</p>
            <p><strong>解决方法：</strong>UNIC全数字化智能种植</p>
            <p><strong>完成时间：</strong>30分钟</p>
            <p><strong>CT结果：</strong>全口牙缺失</p>
          </div>

          <div class="case_img fl">
            <img src="<?php echo IMG_PATH ?>/case/case_01_02.png" alt="优贝口腔_牙齿种植">
            <img src="<?php echo IMG_PATH ?>/case/case_01_03.png" alt="优贝口腔_牙齿种植">
          </div>
        </div>

        <div class="item swiper-slide">
          <h3>一口好牙带你重回靓丽</h3>
          <div class="case_fl fl">
            <img src="<?php echo IMG_PATH ?>/case/case_02_01.png" alt="优贝口腔_牙齿种植">
            <a href="#">了解费用</a>
            <a href="#">预约提交</a>
          </div>

          <div class="case_fr fr">
            <p><strong>姓名：</strong>迟阿姨</p>
            <p><strong>年龄：</strong>55岁</p>
            <p><strong>牙齿问题：</strong>全口牙缺失等，多种问题</p>
            <p><strong>解决方法：</strong>UNIC全数字化智能种植</p>
            <p><strong>完成时间：</strong>40分钟</p>
            <p><strong>CT结果：</strong>多颗牙缺失</p>
          </div>

          <div class="case_img fl">
            <img src="<?php echo IMG_PATH ?>/case/case_02_02.png" alt="优贝口腔_牙齿种植">
            <img src="<?php echo IMG_PATH ?>/case/case_02_03.png" alt="优贝口腔_牙齿种植">
          </div>
        </div>

        <div class="item swiper-slide">
          <h3>爱护种植牙，珍惜“新生”口腔！</h3>
          <div class="case_fl fl">
            <img src="<?php echo IMG_PATH ?>/case/case_03_01.png" alt="优贝口腔_牙齿种植">
            <a href="#">了解费用</a>
            <a href="#">预约提交</a>
          </div>

          <div class="case_fr fr">
            <p><strong>姓名：</strong>王大爷</p>
            <p><strong>年龄：</strong>69岁</p>
            <p><strong>牙齿问题：</strong>牙槽骨吸收等，多种问题</p>
            <p><strong>解决方法：</strong>UNIC全数字化智能种植</p>
            <p><strong>完成时间：</strong>40分钟</p>
            <p><strong>CT结果：</strong>多颗牙缺失</p>
          </div>

          <div class="case_img fl">
            <img src="<?php echo IMG_PATH ?>/case/case_03_02.png" alt="优贝口腔_牙齿种植">
            <img src="<?php echo IMG_PATH ?>/case/case_03_03.png" alt="优贝口腔_牙齿种植">
          </div>
        </div>

        <div class="item swiper-slide">
          <h3>让您吃嘛嘛香，拥抱健康！</h3>
          <div class="case_fl fl">
            <img src="<?php echo IMG_PATH ?>/case/case_04_01.png" alt="优贝口腔_牙齿种植">
            <a href="#">了解费用</a>
            <a href="#">预约提交</a>
          </div>

          <div class="case_fr fr">
            <p><strong>姓名：</strong>管大爷</p>
            <p><strong>年龄：</strong>71岁</p>
            <p><strong>牙齿问题：</strong>下颌第一磨牙全部缺失</p>
            <p><strong>解决方法：</strong>UNIC全数字化智能种植</p>
            <p><strong>完成时间：</strong>35分钟</p>
            <p><strong>CT结果：</strong>多颗牙缺失</p>
          </div>

          <div class="case_img fl">
            <img src="<?php echo IMG_PATH ?>/case/case_04_02.png" alt="优贝口腔_牙齿种植">
            <img src="<?php echo IMG_PATH ?>/case/case_04_03.png" alt="优贝口腔_牙齿种植">
          </div>
        </div>

        <div class="item swiper-slide">
          <h3>是为了不让自己难受</h3>
          <div class="case_fl fl">
            <img src="<?php echo IMG_PATH ?>/case/case_05_01.png" alt="优贝口腔_牙齿种植">
            <a href="#">了解费用</a>
            <a href="#">预约提交</a>
          </div>

          <div class="case_fr fr">
            <p><strong>姓名：</strong>张大爷</p>
            <p><strong>年龄：</strong>73岁</p>
            <p><strong>牙齿问题:</strong>多颗牙缺失</p>
            <p><strong>解决方法:</strong>UNIC全数字化智能种植</p>
            <p><strong>完成时间:</strong>30分钟</p>
            <p><strong>CT结果：</strong>前下门牙缺失4颗</p>
          </div>

          <div class="case_img fl">
            <img src="<?php echo IMG_PATH ?>/case/case_05_02.png" alt="优贝口腔_牙齿种植">
            <img src="<?php echo IMG_PATH ?>/case/case_05_03.png" alt="优贝口腔_牙齿种植">
          </div>
        </div>

        <div class="item swiper-slide">
          <h3>种一口健康的牙</h3>
          <div class="case_fl fl">
            <img src="<?php echo IMG_PATH ?>/case/case_06_01.png" alt="优贝口腔_牙齿种植">
            <a href="#">了解费用</a>
            <a href="#">预约提交</a>
          </div>

          <div class="case_fr fr">
            <p><strong>姓名：</strong>吴大爷</p>
            <p><strong>年龄：</strong>73岁</p>
            <p><strong>牙齿问题：</strong>牙槽骨吸收,多种问题</p>
            <p><strong>解决方法：</strong>UNIC全数字化智能种植</p>
            <p><strong>完成时间：</strong>35分钟</p>
            <p><strong>CT结果：</strong>多颗牙缺失</p>
          </div>

          <div class="case_img fl">
            <img src="<?php echo IMG_PATH ?>/case/case_06_02.png" alt="优贝口腔_牙齿种植">
            <img src="<?php echo IMG_PATH ?>/case/case_06_03.png" alt="优贝口腔_牙齿种植">
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


  <!-- 牙齿问题 -->
  <section class="problem">
    <span></span>
    <ul>
      <li><a href="#">牙齿疼痛</a></li>
      <li><a href="#">残根保留</a></li>
      <li><a href="#">病牙拔除</a></li>
      <li><a href="#">口腔洁治</a></li>
      <li><a href="#">牙龈萎缩</a></li>
      <li><a href="#">虫牙蛀牙</a></li>
      <li><a href="#">松牙固定</a></li>
      <li><a href="#">补牙</a></li>
    </ul>
  </section>


  <!-- 种植牙 -->
  <section class="zzy">
    <div class="tit">
      <span>PLANT</span>
      <div class="tit_fr">
        <h1>优贝·种植牙</h1>
        <h3>重拾齿间美味</h3>
      </div>
    </div>
    <h2>当天种牙 当天用新牙啃苹果</h2>
    <ul class="zzy_box">
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/case/zzy_box_01.png" alt="优贝口腔_牙齿种植"><h3>当天种植</h3></a></li>
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/case/zzy_box_02.png" alt="优贝口腔_牙齿种植"><h3>当天戴牙冠</h3></a></li>
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/case/zzy_box_03.png" alt="优贝口腔_牙齿种植"><h3>当天啃排骨</h3></a></li>
    </ul>

    <div class="con_btn">
      <a href="tel:400-1671818"><span></span>电话快捷咨询</a>
      <a href="#"><span></span>申请专属优惠</a>
    </div>
  </section>


  <!-- 知名专家团队 -->
  <section class="team">
    <div class="tit">
      <span>TEAM</span>
      <div class="tit_fr">
        <h1>经验丰富</h1>
        <h3>知名专家团队</h3>
      </div>
    </div>
    <p>作为优贝口腔专科医院，对医生的选拔要求颇为严格，每位口腔医生必有一门专精的口腔医疗技术，口腔种植医生超10000例独立成功种植案例，临床经验丰富，的要求。</p>
    <img src="<?php echo IMG_PATH ?>/case/team_img.jpg" alt="优贝口腔_牙齿种植团队">
  </section>

  <!-- 贴心服务 -->
  <section class="txfw">
    <div class="tit">
      <span>SERVICE</span>
      <div class="tit_fr">
        <h1>贴心服务</h1>
        <h3>给您VIP看牙体验</h3>
      </div>
    </div>
    <ul class="txfw_box">
      <li>
        <h1>预约方便/快捷</h1>
        <p>在线咨询预约系统，快速预约，减少就诊等待</p>
      </li>
      <li>
        <h1>看牙舒适/安全</h1>
        <p>国外先进设备和技术，看牙不再疼</p>
      </li>
      <li>
        <h1>看牙舒心/放心</h1>
        <p>治疗全程引导、安心看牙。疗后跟踪维护</p>
      </li>
    </ul>
  </section>

  <!-- 国外先进设备 -->
  <section class="xjsb">
    <div class="tit">
      <span>ABROAD</span>
      <div class="tit_fr">
        <h1>国外先进设备</h1>
        <h3>治疗效果更佳</h3>
      </div>
    </div>
    <a href="tel:400-1671818"><img src="<?php echo IMG_PATH ?>/case/xjsb.png" alt="优贝口腔_咨询热线"></a>
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
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  // 案例展示
  var aboutSwiper = new Swiper('.case-slider', {
    centeredSlides: true, // 居中幻灯片
    loop: true, // 无线轮播
    slidesPerView: 'auto', // 控制一行显示占比
    spaceBetween: 0, // 控制间隔
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.case-slider>.swiper-button-next',
      prevEl: '.case-slider>.swiper-button-prev',
    },
  });


</script>











</body>

</html>