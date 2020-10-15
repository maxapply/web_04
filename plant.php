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
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/plant.css">
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
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/plant/banner.jpg" alt="优贝口腔_种植牙"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/plant/banner.jpg" alt="优贝口腔_种植牙"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/plant/banner.jpg" alt="优贝口腔_种植牙"></div>
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

  <section class="box_01">
    <img src="<?php echo IMG_PATH ?>/plant/box_01_01.jpg" alt="">
    <div class="btnBg1">
      <a href="#">
        <div class="yuyue">
          <img src="<?php echo IMG_PATH ?>/plant/click.png" alt="优贝口腔_微创舒适_媲美真牙_全国连锁品牌_资深医生坐诊">
        </div>
      </a>
    </div>
  </section>

  <!-- 缺牙百害而无一利 -->
  <section class="box_01">
    <div class="tit">
      <h3>缺 <strong> 牙</strong> 百害而无一利</h3>
      <p>A hundred evils do no good</p>
    </div>
    <img src="<?php echo IMG_PATH ?>/plant/box_02_02.jpg" alt="">
    <div class="btnBg1">
      <a href="#">
        <div class="yuyue2">
          <img src="<?php echo IMG_PATH ?>/plant/box_02_03.png" alt="优贝口腔_缺牙百害而无一利">
        </div>
      </a>
    </div>
  </section>

  <!-- 选择种植牙 -->
  <section class="box_03">
    <div class="tit">
      <h3>选择 <strong> 种植牙</strong></h3>
      <p>Selection of implant teeth</p>
    </div>
    <div class="box_03Img">
      <img src="<?php echo IMG_PATH ?>/plant/box_03Img.jpg" alt="优贝口腔_种植牙坚固耐用_不上领牙_媲美真牙_美观舒适">
      <div class="box_03btn">
        <a href="#">了解更多优势</a>
      </div>
    </div>
  </section>


  <!-- 优贝微创种植 -->
  <section class="box_04">
    <div class="tit">
      <h3>优贝 <strong> 微创 </strong> 种植</h3>
      <p>Minimally invasive implantation</p>
    </div>

    <div class="box_04Text">
      <img src="<?php echo IMG_PATH ?>/plant/box_04_01.jpg" alt="优贝口腔_微创种植">
      <img src="<?php echo IMG_PATH ?>/plant/box_04_02.jpg" alt="优贝口腔_微创种植">
      <p>优贝数字化种植牙采用全新种植理念，口腔CT及3D导板技术制定种植牙方案，并结合微创舒适技术精细植入种植体，实现了即拔即种、创口微小、一次成型、术后即可饮食的种植效果。</p>
    </div>

    <a href="#"><img src="<?php echo IMG_PATH ?>/plant/jg_img.jpg" alt="优贝口腔_在线估算种植牙费用"></a>

  </section>


  <!-- 优贝微创种植 -->
  <section class="box_05">
    <div class="tit">
      <h3>精选国际 <strong> 四大种植体</strong></h3>
      <p>Four implants</p>
    </div>
    <ul class="box_05Img">
      <li><img src="<?php echo IMG_PATH ?>/plant/box_05Img_01.jpg" alt="优贝口腔_瑞典诺贝尔"></li>
      <li><img src="<?php echo IMG_PATH ?>/plant/box_05Img_02.jpg" alt="优贝口腔_德国ICX"></li>
      <li><img src="<?php echo IMG_PATH ?>/plant/box_05Img_03.jpg" alt="优贝口腔_德国费亚丹"></li>
      <li><img src="<?php echo IMG_PATH ?>/plant/box_05Img_04.jpg" alt="优贝口腔_瑞士ITI"></li>
    </ul>
    <a href="#"><img src="<?php echo IMG_PATH ?>/plant/box_05Img.jpg" alt="优贝口腔_拔牙多久后可以种牙"></a>
  </section>


  <!-- 种牙全过程 -->
  <section class="box_01">
    <div class="tit">
      <h3>种牙 <strong> 全过程</strong></h3>
      <p>The whole process</p>
    </div>
    <img src="<?php echo IMG_PATH ?>/plant/box_03_02.jpg" alt="优贝口腔_种牙全过程">
    <div class="btnBg1">
      <a href="#">
        <div class="yuyue2">
          <img src="<?php echo IMG_PATH ?>/plant/box_03_03.png" alt="优贝口腔_改变丑牙 从齿开始">
        </div>
      </a>
    </div>
  </section>


  <!-- 确保种牙效果选择医生是关键 -->
  <section class="box_07">
    <div class="tit">
      <h3>确保种牙效果 <strong> 选择医生是关键</strong></h3>
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
                  <h3>宋铁砾 / <span>特邀口腔医师</span></h3>
                  <p><span></span>北京大学口腔医学院博士</p>
                  <p><span></span>北京同仁医院口腔科医生</p>
                  <p><span></span>优贝口腔德国卡瓦技术</p>
                  <p><span></span>口腔医学会专委会委员</p>
                  <p>&nbsp;</p>
                </div>
                <div class="team_fr fr">
                  <img src="<?php echo IMG_PATH ?>/index/team_02.jpg" alt="优贝口腔_宋铁砾_北京大学口腔医学院博士_北京同仁医院口腔科医生_优贝口腔德国卡瓦技术_口腔医学会专委会委员">
                </div>

                <div class="team_fl fl">
                  <strong>擅长项目：</strong><p>牙齿种植、美容修复；口腔颌面外科疾病的诊断治疗，口腔颌面部先天或后天软硬组织缺损畸形的整复治疗等。</p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="bgc_color">
                <div class="team_fl fl">
                <h3>陈桦 / <span>正畸科主治医师</span></h3>
                <p><span></span>知名口腔种植医师</p>
                <p><span></span>优贝口腔总监级种植医师</p>
                <p><span></span>优贝口腔集团副总经理</p>
                <p><span></span>美国种植硕士大师班毕业</p>
                <p><span></span>AIC国际种植医师协会会员</p>
                </div>
                <div class="team_fr fr">
                  <img src="<?php echo IMG_PATH ?>/index/team_04.jpg" alt="优贝口腔_陈桦_知名口腔种植医师_优贝口腔总监级种植医师_优贝口腔集团副总经理_美国种植硕士大师班毕业_AIC国际种植医师协会会员">
                </div>

                <div class="team_fl fl">
                  <strong>擅长项目：</strong><p>擅长前牙美学种植、现代微创种植、即刻种植、GBR技术及上颌窦提升术等复杂种植术。全瓷美学修复方面积累了丰富的经验。</p>
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