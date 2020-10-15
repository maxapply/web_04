<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>品牌简介</title>

  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/introduce.css">
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
  
  <!-- 我们是谁 -->
  <section class="are">
    <div class="tit">
      <h3>我们是谁</h3>
      <p>WHO WE ARE</p>
    </div>
    <div class="are_box">
      <div class="are_text">
        <h3>我们是谁</h3>
        <p>我院走品牌发展路线，实行全国连锁，广泛开展口腔种植、口腔正畸、美容修复、牙齿美白、综合治疗、儿童牙科、致力于让人人享有口腔健康服务。</p>
      </div>

      <div class="are_img">
        <img src="<?php echo IMG_PATH ?>/introduce/are_img_02.jpg" alt="优贝口腔_公司介绍">
        <a class="are_img_btn"> + 了解更多 + </a>
      </div>
    </div>
  </section>


  <!-- 我们有什么 -->
  <section class="have">
    <div class="have_top">
      <div class="tit">
        <h3>我们有什么</h3>
        <p>WHAT WE HAVE</p>
      </div>
      <p>优贝☐腔积极引进由☐腔医学界医生、教授、海归学者、国际ICOIX协会会员、资深行业综合管理医生等精英人才，帮助每一位☐腔患者解除病痛。</p>
    </div>
    <ul class="have_list">
      <li><img src="<?php echo IMG_PATH ?>/introduce/have_list_01.jpg" alt="优贝口腔_国际化"><div class="have_list_text"><h3>国际化</h3><p>国际标准</p><p>服务中国</p></div></li>
      <li><img src="<?php echo IMG_PATH ?>/introduce/have_list_02.jpg" alt="优贝口腔_差异化"><div class="have_list_text"><h3>差异化</h3><p>特色专业</p><p>精专☐腔</p></div></li>
      <li><img src="<?php echo IMG_PATH ?>/introduce/have_list_03.jpg" alt="优贝口腔_精细化"><div class="have_list_text"><h3>精细化</h3><p>雕琢细节</p><p>追求完美</p></div></li>
      <li><img src="<?php echo IMG_PATH ?>/introduce/have_list_04.jpg" alt="优贝口腔_人性化"><div class="have_list_text"><h3>人性化</h3><p>客户至上</p><p>定制服务</p></div></li>
    </ul>
  </section>


  <!-- 我们的成绩 -->
  <section class="results">
    <div class="tit">
      <h3>我们的未来</h3>
      <p>OUR FURTURE</p>
    </div>
    <div class="results_text fr">
      <p>基于“互联网”思维，优贝正在构建口腔大健康生态智能平台，连接国内外诊所、医生、患者、合作方、数据及第三方生态整合，从口腔预防、诊断、治疗等多维度、全方位为大众提供医生集团、信息化输出、AI等应用服务“看牙，先问优贝”的未来诊疗新模式</p>
    </div>
  </section>


  <!-- 源于口腔 超越口腔 -->
  <section class="cavity">
    <div class="tit">
      <h3>源于口腔 超越口腔</h3>
      <p>ORAL CAVITY</p>
    </div>
    <div class="cavity_text fr">
      <p>优贝计划未来3年内,基本覆盖全国核心城市,开启全民口腔整体健康管理新时代</p>
    </div>
  </section>


  <!-- 严谨精密的口腔治疗 -->
  <section class="precise">
    <div class="tit">
      <h3>严谨精密的口腔治疗</h3>
      <p>RIGOROUS AND PRECISE</p>
    </div>
    <div class="precise_box">
      <img src="<?php echo IMG_PATH ?>/introduce/precise_box_01.jpg" alt="优贝口腔_严格卫生消毒提高诊疗安全保障">
      <img src="<?php echo IMG_PATH ?>/introduce/precise_box_02.jpg" alt="优贝口腔_诊室环境">
      <img src="<?php echo IMG_PATH ?>/introduce/precise_box_03.jpg" alt="优贝口腔_医师诊疗">
      <img src="<?php echo IMG_PATH ?>/introduce/precise_box_04.jpg" alt="优贝口腔_一对一沟通 定制私人方案">
      <img src="<?php echo IMG_PATH ?>/introduce/precise_box_05.png" alt="优贝口腔_以顾客为中心全方位建立咨询体系">
      <img src="<?php echo IMG_PATH ?>/introduce/precise_box_06.jpg" alt="优贝口腔_医师一对一沟通">
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

</script>











</body>

</html>