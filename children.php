<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>儿童齿科</title>

  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/children.css">
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
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/children/bannner_01.jpg" alt="优贝口腔_儿童齿科诊疗"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/children/bannner_01.jpg" alt="优贝口腔_儿童齿科诊疗"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/children/bannner_01.jpg" alt="优贝口腔_儿童齿科诊疗"></div>
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

  <!-- 儿牙问题不重视 孩子一生不自信 -->
  <section class="mbBox_01">
    <div class="tit">
      <h3>儿牙问题不重视 <span>孩子一生不自信</span></h3>
      <p>child tooth problem is not taken seriously</p>
    </div>
    <ul class="mbBox_01List">
      <li>
        <img src="<?php echo IMG_PATH ?>/children/mbBox_01_01.png" alt="优贝口腔_蛀牙/龋齿">
        <div class="info rollUp">
          <h3>蛀牙/龋齿</h3>
          <p><strong>危害：</strong>影响发音、咀嚼、形象美观、恒牙发育...</p>
        </div>
      </li>

      <li>
        <img src="<?php echo IMG_PATH ?>/children/mbBox_01_02.png" alt="优贝口腔_乳牙早失">
        <div class="info">
          <h3>乳牙早失</h3>
          <p><strong>危害：</strong>影响发音、咀嚼，导致恒牙出现畸形...</p>
        </div>
      </li>

      <li>
        <img src="<?php echo IMG_PATH ?>/children/mbBox_01_03.png" alt="优贝口腔_乳牙滞留">
        <div class="info">
          <h3>乳牙滞留</h3>
          <p><strong>危害：</strong>影响恒牙发育，出现双重牙，导致牙齿畸形...</p>
        </div>
      </li>

      <li>
        <img src="<?php echo IMG_PATH ?>/children/mbBox_01_04.png" alt="优贝口腔_牙齿畸形">
        <div class="info">
          <h3>牙齿畸形</h3>
          <p><strong>危害：</strong>影响咬合功能、面部发育、形象美观...</p>
        </div>
      </li>

      <li>
        <img src="<?php echo IMG_PATH ?>/children/mbBox_01_05.png" alt="优贝口腔_牙外伤">
        <div class="info">
          <h3>牙外伤</h3>
          <p><strong>危害：</strong>撞击引起牙体牙髓损伤...</p>
        </div>
      </li>

      <li>
        <img src="<?php echo IMG_PATH ?>/children/mbBox_01_06.png" alt="优贝口腔_多生牙">
        <div class="info">
          <h3>多生牙</h3>
          <p><strong>危害：</strong>妨碍正常牙齿生长发育，影响颌骨发育...</p>
        </div>
      </li>
    </ul>
    <a href="#">点击了解详情</a>
  </section>

  <!-- 12岁以后才能进行牙齿矫正？ -->
  <section class="mbBox_02">
    <div class="tit">
      <h3>12岁以后才能 <span>进行牙齿矫正？</span></h3>
      <p>这种观念早已OUT了！</p>
    </div>
    <div class="mbBox_02Text">
      <p>国内外口腔医学界达成共识：5~12岁（替牙期）是儿童牙齿矫正的黄金期。儿童颌面部的生长发育在4岁完成60%，7岁完成70%，12岁完成90%，在替牙期对孩子牙齿进行矫正，还能够帮助孩子颌面部更好地发育。</p>
    </div>
    <div class="mbBox_02Img">
      <img src="<?php echo IMG_PATH ?>/children/mbBox_02_01.jpg" alt="优贝口腔_在孩子7岁之前，要为孩子进行正畸检查">
      <div class="mbBox_02ImgFr">
        <p>在孩子7岁之前，要为孩子进行正畸检查。</p>
        <a href="#">了解更多 +</a>
      </div>
    </div>
  </section>

  <!-- 为什么5~12岁是牙齿矫正的黄金期？ -->
  <section class="mbBox_03">
    <div class="tit">
      <h3>为什么5~12岁是牙齿矫正的 <span>黄金期</span>？</h3>
      <p>The golden age of Orthodontics</p>
    </div>
    <div class="mbBox_03Text">
      <p>在替牙期，牙齿生长发育较为快速，而且在这个阶段孩子面部肌肉和颌骨也在快速成型，受小歪牙的影响，嘴型和脸型都有可能受到不好的影响，就算是后期再进行矫正也是难以完全消除的。</p>
    </div>
    <div class="mbBox_03Img">

      <div class="mbBox_03ImgFl">
        <p>就像扶正小树苗一样，小树长歪了，借助较小的外力就能轻轻松松扶正，如果等小树长得枝繁叶茂，再想去扶正它就难了。</p>
        <a href="#">了解更多 +</a>
      </div>
      <img src="<?php echo IMG_PATH ?>/children/mbBox_03_01.jpg" alt="优贝口腔_5~12岁是牙齿矫正的黄金期">
    </div>
  </section>

  <!-- 儿童错颌畸形的“4不利”？ -->
  <section class="mbBox_04">
    <div class="tit">
      <h3>儿童错颌畸形的 <span>“4不利”</span> ？</h3>
      <p>Harm of malocclusion in children</p>
    </div>
    <div class="mbBox_04List">
      <div class="mbBox_04Text">
        <h3>一、不利于口腔健康</h3>
        <h3>二、不利于面部发育</h3>
        <h3>三、不利于身体发育</h3>
        <h3>四、不利于心理健康</h3>
      </div>
      <img src="<?php echo IMG_PATH ?>/children/mbBox_04_01.jpg" alt="优贝口腔_儿童错颌畸形的“4不利”_一、不利于口腔健康_二、不利于面部发育_三、不利于身体发育_四、不利于心理健康">
    </div>
    <a href="#">在线咨询治疗方案</a>
  </section>

  <!-- 四大核心技术 -->
  <section class="mbBox_05">
    <div class="tit">
      <h3>四大 <span>核心技术</span></h3>
      <p>core technology</p>
    </div>
    <ul class="mbBox_05List">
      <li><img src="<?php echo IMG_PATH ?>/children/mbBox_05_01.jpg" alt="优贝口腔_窝沟封闭"><p>窝沟封闭</p></li>
      <li><img src="<?php echo IMG_PATH ?>/children/mbBox_05_02.jpg" alt="优贝口腔_树脂补牙"><p>树脂补牙</p></li>
      <li><img src="<?php echo IMG_PATH ?>/children/mbBox_05_03.jpg" alt="优贝口腔_舒适拔牙"><p>舒适拔牙</p></li>
      <li><img src="<?php echo IMG_PATH ?>/children/mbBox_05_04.jpg" alt="优贝口腔_矫正器"><p>矫正器</p></li>
    </ul>
    <div class="mbBox_05Text">
      <h3>六大技术优势</h3>
      <ul class="mbBox_05Img">
        <li><img src="<?php echo IMG_PATH ?>/children/mbBox_05_05.png" alt="优贝口腔_儿童齿科六大技术优势(无痛)"><h5>无痛</h5><p>无需拔牙</p><p>免除痛苦</p></li>
        <li><img src="<?php echo IMG_PATH ?>/children/mbBox_05_06.png" alt="优贝口腔_儿童齿科六大技术优势(隐形)"><h5>隐形</h5><p>夜间佩戴</p><p>无碍观瞻</p></li>
        <li><img src="<?php echo IMG_PATH ?>/children/mbBox_05_07.png" alt="优贝口腔_儿童齿科六大技术优势(安全)"><h5>安全</h5><p>白金品质</p><p>科学设计</p></li>
        <li><img src="<?php echo IMG_PATH ?>/children/mbBox_05_08.png" alt="优贝口腔_儿童齿科六大技术优势(轻松)"><h5>轻松</h5><p>三月一查</p><p>摘戴自如</p></li>
        <li><img src="<?php echo IMG_PATH ?>/children/mbBox_05_09.png" alt="优贝口腔_儿童齿科六大技术优势(有效)"><h5>有效</h5><p>效果显著</p><p>增强信心</p></li>
        <li><img src="<?php echo IMG_PATH ?>/children/mbBox_05_10.png" alt="优贝口腔_儿童齿科六大技术优势(无忧)"><h5>无忧</h5><p>适时诱导</p><p>受益一生</p></li>
      </ul>
    </div>
  </section>



  <!-- 优贝口腔牙周治疗案例 -->
  <section class="mbBox_06">
    <div class="tit">
      <h3>优贝口腔 <span>牙周</span> 治疗案例</h3>
    </div>
    <!-- Swiper -->
    <div class="swiper-container" id="case_swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/children/case_01.jpg" alt="优贝口腔_牙周治疗案例"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/children/case_02.jpg" alt="优贝口腔_牙周治疗案例"></div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination "></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="mbBox_06Btn">
      <a href="tel:400-1671818"><span></span>康复热线</a>
      <a href="#">咨询牙周医生</a>
    </div>
  </section>

  <!-- 优贝口腔牙周治疗专家 -->
  <section class="mbBox_07">
    <div class="tit">
      <h3>优贝口腔 <span>牙周</span> 治疗专家</h3>
    </div>
    <img src="<?php echo IMG_PATH ?>/case/team_img.jpg" alt="优贝口腔_牙周治疗专家">
    <div class="mbBox_07Btn">
      <a href="#"><span></span>预约医生</a>
      <a href="#"><span></span>病情诊断</a>
    </div>
  </section>

  <!-- 你可能感兴趣的专题 -->
  <section class="mbBox_08">
    <div class="tit">
      <h3>你可能感兴趣的专题</h3>
    </div>
    <ul class="mbBox_08List">
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/children/mbBox_08_01.jpg" alt="优贝口腔_儿童牙齿矫正"><p>>>儿童牙齿矫正<<</p></a></li>
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/children/mbBox_08_02.jpg" alt="优贝口腔_儿童补牙"><p>>>儿童补牙<<</p></a></li>
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/children/mbBox_08_03.jpg" alt="优贝口腔_儿童窝沟封闭"><p>>>儿童窝沟封闭<<</p></a></li>
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/children/mbBox_08_04.jpg" alt="优贝口腔_儿童蛀牙怎么办？"><p>>>儿童蛀牙怎么办？<<</p></a></li>
    </ul>
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

    var pre = 0
    $('.mbBox_01List>li').click(function(){
      $('.mbBox_01List>li').eq(pre).find('.info').addClass('rollDown').removeClass('rollUp')
      $(this).find('.info').addClass('rollUp').removeClass('rollDown')
      pre = $(this).index()
    })

    // banner swiper
    var swiper = new Swiper('#case_swiper', {
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
        nextEl: '#case_swiper>.swiper-button-next',
        prevEl: '#case_swiper>.swiper-button-prev',
      },
    });


  </script>

</body>

</html>