<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>牙齿修复</title>

  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/repair.css">
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
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/repair/banner_01.jpg" alt="优贝口腔_美学修复"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/repair/banner_01.jpg" alt="优贝口腔_美学修复"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/repair/banner_01.jpg" alt="优贝口腔_美学修复"></div>
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

  <!-- 这些牙齿症状还在困扰着你吗？ -->
  <section class="mbBox_01">
    <div class="tit">
      <h3>这些牙齿症状还在困扰着你吗？<span></span></h3>
    </div>
    <div class="info">
      <div class="info_text">
        <p>求职面试，相亲会面，再得体的穿着、再精美的妆容都敌不过一口丑牙给人留下的印象深刻！！！</p>
      </div>
      <img src="<?php echo IMG_PATH ?>/repair/info.jpg" alt="优贝口腔_牙齿问题带来的影响">
    </div>
    <ul class="mbBox_01List">
      <li><img src="<?php echo IMG_PATH ?>/repair/mbBox_01_01.jpg" alt="优贝口腔_“笑”不露齿"><h3>“笑”不露齿</h3></li>
      <li><img src="<?php echo IMG_PATH ?>/repair/mbBox_01_02.jpg" alt="优贝口腔_容易自卑"><h3>容易自卑</h3></li>
      <li><img src="<?php echo IMG_PATH ?>/repair/mbBox_01_03.jpg" alt="优贝口腔_牙齿缺损"><h3>牙齿缺损</h3></li>
      <li><img src="<?php echo IMG_PATH ?>/repair/mbBox_01_04.jpg" alt="优贝口腔_牙齿松动"><h3>牙齿松动</h3></li>
    </ul>
    <div class="mbBox_btn"><a href="#"><span></span>我要改变自己，立即咨询方案</a></div>
  </section>

  <!-- 牙齿出现这些问题怎么办 -->
  <section class="mbBox_02">
    <div class="tit">
      <h3>牙齿出现这些问题怎么办<span></span></h3>
    </div>
    <div class="mbBox_02List">
      <img src="<?php echo IMG_PATH ?>/repair/mbBox_02_01.png" alt="优贝口腔_牙齿长期冷、热、酸、甜、刺激疼痛">
      <img src="<?php echo IMG_PATH ?>/repair/mbBox_02_02.png" alt="优贝口腔_牙齿夜间剧烈疼痛">
      <img src="<?php echo IMG_PATH ?>/repair/mbBox_02_03.png" alt="优贝口腔_牙齿咬合不适有轻微或强烈痛感">
      <img src="<?php echo IMG_PATH ?>/repair/mbBox_02_04.png" alt="优贝口腔_牙齿突然强烈剧痛持续性疼痛">
    </div>
    <div class="mbBox_02Btn">
      <a href="#">
        咨询治疗方案
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <i></i>
      </a>
      <a href="#">
        申请预约
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <i></i>
      </a>
      </div>
    </div>
  </section>

  <!-- 烤瓷牙种类繁多 -->
  <section class="mbBox_03">
    <div class="tit">
      <h3>烤瓷牙种类繁多<span></span><p>如何选择适合自己的？</p></h3>
    </div>
    <ul class="mbBox_03List">
      <li>
        <div class="mbBox_03Fl fl"><img src="<?php echo IMG_PATH ?>/repair/mbBox_03_01.jpg" alt="优贝口腔_全瓷牙"></div>
        <div class="mbBox_03Fr fr">
          <h1>全瓷牙</h1>
          <p><strong>优点：</strong>美观度佳，自然如真，耐磨坚固，使用寿命长。</p>
          <p><strong>缺点：</strong>价格相对较高。</p>
          <p><strong>适合人群：</strong>对牙齿美观度和功能性要求高的人群，是很多年轻人的选择。</p>
        </div>
      </li>

      <li>
        <div class="mbBox_03Fl fl"><img src="<?php echo IMG_PATH ?>/repair/mbBox_03_02.jpg" alt="优贝口腔_普通金属烤瓷牙"></div>
        <div class="mbBox_03Fr fr">
          <h1>普通金属烤瓷牙</h1>
          <p><strong>优点：</strong>价格低廉。</p>
          <p><strong>缺点：</strong>质地色泽不如全瓷牙，牙龈后期容易出现黑线，影响美观。</p>
          <p><strong>适合人群：</strong>对美观度要求不高或经济能力一般的人群。</p>
        </div>
      </li>


      <li>
        <div class="mbBox_03Fl fl"><img src="<?php echo IMG_PATH ?>/repair/mbBox_03_03.jpg" alt="优贝口腔_贵金属烤瓷牙"></div>
        <div class="mbBox_03Fr fr">
          <h1>贵金属烤瓷牙</h1>
          <p><strong>优点：</strong>美观度相对自然，价格比全瓷牙偏低。</p>
          <p><strong>缺点：</strong>易出现牙龈黑线，影响美观。</p>
          <p><strong>适合人群：</strong>对美观度要求不高的人群。</p>
        </div>
      </li>
    </ul>
    <a href="#">更多价格问题直接咨询</a>
  </section>

  <!-- 诚于精品 给您更好的修复选择 -->
  <section class="mbBox_04">
    <div class="tit">
      <h3>诚于精品 给您更好的修复选择<span></span></h3>
    </div>
    <ul class="mbBox_04List">
      <li>
        <a href="#">
          <img src="<?php echo IMG_PATH ?>/repair/mbBox_04_01.png" alt="优贝口腔_精品氧化锆全瓷冠">
          <p>精品氧化锆全瓷冠</p>
        </a>
      </li>

      <li>
        <a href="#">
          <img src="<?php echo IMG_PATH ?>/repair/mbBox_04_02.png" alt="优贝口腔_超薄水晶贴面">
          <p>超薄水晶贴面</p>
        </a>
      </li>

      <li>
        <a href="#">
          <img src="<?php echo IMG_PATH ?>/repair/mbBox_04_03.png" alt="优贝口腔_格莱美全瓷冠">
          <p>格莱美全瓷冠</p>
        </a>
      </li>

      <li>
        <a href="#">
          <img src="<?php echo IMG_PATH ?>/repair/mbBox_04_04.png" alt="优贝口腔_美国LAVA全瓷冠">
          <p>美国LAVA全瓷冠</p>
        </a>
      </li>
    </ul>
    <div class="mbBox_04Btn">
      <a href="#">更多牙齿修复材料 在线了解<span> >>></span></a>
    </div>
  </section>

  <!-- 规范化修复流程 变美只需这几步 -->
  <section class="mbBox_05">
    <div class="tit">
      <h3>规范化修复流程 变美只需这几步<span></span></h3>
    </div>
    <div class="mbBox_05List">
      <img src="<?php echo IMG_PATH ?>/repair/mbBox_05_01.jpg" alt="优贝口腔_术前检查美学分析_专属修复方案定制_印取牙模定制牙冠">
      <ul>
        <li><p>术前检查</p><p>美学分析</p></li>
        <li><p>专属修复</p><p>方案定制</p></li>
        <li><p>印取牙模</p><p>定制牙冠</p></li>
      </ul>
      <img src="<?php echo IMG_PATH ?>/repair/mbBox_05_02.jpg" alt="优贝口腔_精准对比力求自然_试戴牙冠调整咬合_粘接牙冠修复完成">
      <ul>
        <li><p>精准对比</p><p>力求自然</p></li>
        <li><p>试戴牙冠</p><p>调整咬合</p></li>
        <li><p>粘接牙冠</p><p>修复完成</p></li>
      </ul>
    </div>
  </section>

  <!-- 美齿修复医生 定制你的专属笑容 -->
  <section class="mbBox_06">
    <div class="tit">
      <h3>美齿修复医生 定制你的专属笑容<span></span></h3>
    </div>
    <img src="<?php echo IMG_PATH ?>/case/team_img.jpg" alt="优贝口腔_美齿修复医生 定制你的专属笑容">
    <div class="mbBox_06Btn">
      <a href="#"><span></span>预约医生</a>
      <a href="#"><span></span>病情诊断</a>
    </div>
  </section>

  <!-- 你可能感兴趣的专题 -->
  <section class="mbBox_07">
    <div class="tit">
      <h3>你可能感兴趣的专题 <span></span></h3>
    </div>
    <ul class="mbBox_07List">
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/repair/mbBox_07_01.jpg" alt="优贝口腔_生态全瓷冠专题"><p>>>生态全瓷冠专题<<</p></a></li>
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/repair/mbBox_07_02.jpg" alt="优贝口腔_超薄贴面专题"><p>>>超薄贴面专题<<</p></a></li>
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/repair/mbBox_07_03.jpg" alt="优贝口腔_烤瓷牙价格专题"><p>>>烤瓷牙价格专题<<</p></a></li>
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/repair/mbBox_07_04.jpg" alt="优贝口腔_微笑美学设计"><p>>>微笑美学设计<<</p></a></li>
    </ul>
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