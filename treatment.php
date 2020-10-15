<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>牙周治疗</title>

  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/treatment.css">
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
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/treatment/banner_01.jpg" alt="优贝口腔_牙周治疗"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/treatment/banner_01.jpg" alt="优贝口腔_牙周治疗"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/treatment/banner_01.jpg" alt="优贝口腔_牙周治疗"></div>
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

  <!-- 牙周病的症状你占了几个 -->
  <section class="mbBox_01">
    <div class="tit">
      <h3><span>牙周病</span> 的症状你占了几个?</h3>
    </div>
    <ul class="mbBox_01List">
      <li><img src="<?php echo IMG_PATH ?>/treatment/mbBox_01_01.jpg" alt="优贝口腔_牙周病引发口臭"><p>口臭</p></li>
      <li><img src="<?php echo IMG_PATH ?>/treatment/mbBox_01_02.jpg" alt="优贝口腔_牙周病引发牙龈出血"><p>牙龈出血</p></li>
      <li><img src="<?php echo IMG_PATH ?>/treatment/mbBox_01_03.jpg" alt="优贝口腔_牙周病引发牙龈萎缩"><p>牙龈萎缩</p></li>
      <li><img src="<?php echo IMG_PATH ?>/treatment/mbBox_01_04.jpg" alt="优贝口腔_牙周病引发牙齿松动"><p>牙齿松动</p></li>
      <li><img src="<?php echo IMG_PATH ?>/treatment/mbBox_01_05.jpg" alt="优贝口腔_牙周病引发牙齿疼痛"><p>牙齿疼痛</p></li>
      <li><img src="<?php echo IMG_PATH ?>/treatment/mbBox_01_06.jpg" alt="优贝口腔_牙周病引发咀嚼无力"><p>咀嚼无力</p></li>
    </ul>
    <p>和上面症状相似，该怎么办？</p>
    <a href="#"><span></span>咨询治疗方案</a>
  </section>

  <!-- 牙周病的危害有哪些 -->
  <section class="mbBox_02">
    <div class="tit">
      <h3><span>牙周病</span> 的危害有哪些?</h3>
    </div>
    <p>牙周疾病是引起牙齿缺失的主要原因之一，牙周病早期若不重视，则会造成牙周组织长期感染，炎症反复发作，不仅损害口腔咀嚼功能，还会导致牙齿掉落，严重影响身体健康。</p>
    <ul class="mbBox_02List">
      <li><i>1</i><img src="<?php echo IMG_PATH ?>/treatment/mbBox_02_01.png" alt="优贝口腔_牙周病引发突发性、阵发性牙痛"><p>突发性、阵发性牙痛</p></li>
      <li><i>2</i><img src="<?php echo IMG_PATH ?>/treatment/mbBox_02_02.png" alt="优贝口腔_牙周病引发牙龈肿痛导致面部肿胀"><p>牙龈肿痛导致面部肿胀</p></li>
      <li><i>3</i><img src="<?php echo IMG_PATH ?>/treatment/mbBox_02_04.png" alt="优贝口腔_牙周病导致牙齿松动缺失"><p>导致牙齿松动缺失</p></li>
      <li><i>4</i><img src="<?php echo IMG_PATH ?>/treatment/mbBox_02_05.png" alt="优贝口腔_牙周病引发咬合无力无法饮食"><p>咬合无力无法饮食</p></li>
      <li><i>5</i><img src="<?php echo IMG_PATH ?>/treatment/mbBox_02_06.png" alt="优贝口腔_牙周病引发夜晚疼痛，影响睡眠"><p>夜晚疼痛，影响睡眠</p></li>
      <li><i>6</i><img src="<?php echo IMG_PATH ?>/treatment/mbBox_02_03.png" alt="优贝口腔_牙周病引发口臭"><p>口臭</p></li>
    </ul>
    <a href="#">>>我有以上情况，点击问医生怎么治疗？ <<</a>
  </section>

  <!-- 巩固松牙牙周病分型治疗 -->
  <section class="mbBox_03">
    <div class="tit">
      <h3>巩固松牙 <span>牙周病</span> 分型治疗</h3>
    </div>

    <ul class="mbBox_03Top">
      <li class="on">轻度牙周病</li>
      <li>中度牙周病</li>
      <li>重度牙周病</li>
    </ul>

    <div class="mbBox_03But">
      <img src="<?php echo IMG_PATH ?>/treatment/mbBox_03But_01.png" alt="优贝口腔_轻度牙周病治疗">
      <ul class="mbBox_03Text">
        <li><h4>技术</h4><p>超声波洁牙。</p></li>
        <li><h4>原 理</h4><p>利用超声波产生的高频、高能振动，360度全方位去除牙齿上的结石、斑菌等，减轻牙龈炎症。</p></li>
        <li><h4>优 势</h4><p>快速、无痛、舒适。</p></li>
      </ul>
      <a href="#">>>了解治疗详情>></a>
    </div>

    <div class="mbBox_03But hide">
      <img src="<?php echo IMG_PATH ?>/treatment/mbBox_03But_02.png" alt="优贝口腔_中度牙周病治疗">
      <ul class="mbBox_03Text">
        <li><h4>技术</h4><p>牙周治疗仪辅助刮治。</p></li>
        <li><h4>原 理</h4><p>采用法国赛力特牙周治疗仪,去除牙结石和牙斑菌，使根面光滑。</p></li>
        <li><h4>优 势</h4><p>无需麻醉、恢复较快。</p></li>
      </ul>
      <a href="#">>>了解治疗详情>></a>
    </div>

    <div class="mbBox_03But hide">
      <img src="<?php echo IMG_PATH ?>/treatment/mbBox_03But_01.png" alt="优贝口腔_重度牙周病治疗">
      <ul class="mbBox_03Text">
        <li><h4>技术</h4><p>数字化种植牙。</p></li>
        <li><h4>原 理</h4><p>采用3D打印数字化导板，直在电脑上进行术前设计、模拟，患者术前即可看到自己植牙后的效果。</p></li>
        <li><h4>优 势</h4><p>即种即用、稳定坚固。</p></li>
      </ul>
      <a href="#">>>了解治疗详情>></a>
    </div>
  </section>

  <!-- 优贝口腔 · 技术优势 -->
  <section class="mbBox_04">
    <div class="tit">
      <h3><span>优贝口腔</span>· 技术优势</h3>
    </div>
    <img src="<?php echo IMG_PATH ?>/treatment/mbBox_04_01.png" alt="优贝口腔_技术优势_疼痛感和肿胀感很轻_治疗后两小时即可进食_3-6个月牙龈再生牙周恢复">
    <ul>
      <li>疼痛感和肿胀感很轻</li>
      <li>治疗后两小时即可进食</li>
      <li>3-6个月牙龈再生牙周恢复</li>
    </ul>
    <a href="#">点击预约牙周治疗 >></a>
  </section>

  <!-- 治疗牙周需要多少钱？ -->
  <section class="mbBox_05">
    <div class="tit">
      <h3>治疗 <span>牙周</span> 需要多少钱？</h3>
    </div>

    <div class="mbBox_05List">
      <img src="<?php echo IMG_PATH ?>/treatment/mbBox_05_01.jpg" alt="优贝口腔_治疗牙周炎的费用与所选治疗方式相关">
      <span>治疗牙周炎的费用与所选治疗方式相关</span>
    </div>

    <div class="mbBox_05But">
      <p><span>与方法有关</span><i>牙周炎的治疗费用与选择的治疗方法有关</i></p>
      <p><span>与病情有关</span><i>检查和治疗牙周炎的费用与患者病情程度有关</i></p>
      <p><span>应尽早治疗</span><i>越早治疗，牙周病的治疗费用越少</i></p>
    </div>

    <a href="tel:400-1671818"><span></span>一键通话，咨询治疗费用</a>
  </section>

  <!-- 优贝口腔牙周治疗案例 -->
  <section class="mbBox_06">
    <div class="tit">
      <h3>优贝口腔 <span>牙周</span> 治疗案例</h3>
    </div>
    <!-- Swiper -->
    <div class="swiper-container" id="case_swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/treatment/case_01.jpg" alt="优贝口腔_牙周治疗案例"></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/treatment/case_02.jpg" alt="优贝口腔_牙周治疗案例"></div>
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
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/repair/mbBox_07_01.jpg" alt="优贝口腔_超声波洁牙专题"><p>>>超声波洁牙专题<<</p></a></li>
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/repair/mbBox_07_02.jpg" alt="优贝口腔_数字化种牙专题"><p>>>数字化种牙专题<<</p></a></li>
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/repair/mbBox_07_03.jpg" alt="优贝口腔_牙周病费用专题"><p>>>牙周病费用专题<<</p></a></li>
      <li><a href="#"><img src="<?php echo IMG_PATH ?>/repair/mbBox_07_04.jpg" alt="优贝口腔_根管治疗专题"><p>>>根管治疗专题<<</p></a></li>
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

    $('.mbBox_03Top>li').click(function(){
      $(this).addClass('on').siblings().removeClass('on')
      var index = $(this).index()
      $('.mbBox_03But').eq(index).show().siblings('.mbBox_03But').hide()
    })

    // 案例 swiper
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