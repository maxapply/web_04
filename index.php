<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>优贝口腔</title>

  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/index.css">
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

  <!-- 子导航 -->
  <ul class="subNav">
    <li><a href="./plant.php"><img src="<?php echo IMG_PATH ?>/subNav_01.jpg" alt="优贝口腔_牙齿种植"></a></li>
    <li><a href="./correct.php"><img src="<?php echo IMG_PATH ?>/subNav_02.jpg" alt="优贝口腔_牙齿正畸"></a></li>
    <li><a href="./teeth_whitening.php"><img src="<?php echo IMG_PATH ?>/subNav_03.jpg" alt="优贝口腔_牙齿美白"></a></li>
    <li><a href="./repair.php"><img src="<?php echo IMG_PATH ?>/subNav_04.jpg" alt="优贝口腔_牙齿修复"></a></li>
    <li><a href="./treatment.php"><img src="<?php echo IMG_PATH ?>/subNav_05.jpg" alt="优贝口腔_牙周治疗"></a></li>
    <li><a href="./children.php"><img src="<?php echo IMG_PATH ?>/subNav_06.jpg" alt="优贝口腔_儿童齿科"></a></li>
  </ul>



  <!-- 口腔常见问题 -->
  <section class="problem">
    <div class="tit">
      <h1>YOU BEI</h1>
      <h3><span>口腔</span> 常见问题</h3>
      <i></i>
      <p>热门关注</p>
    </div>

    <div class="problem_list">
      <ul class="main-wt">
        <li class="bg1"><a href="#" target="_blank">牙齿缺失</a></li>
        <li class="bg2"><a href="#" target="_blank">牙齿矫正年龄</a></li>
        <li class="bg3"><a href="#" target="_blank">牙齿红肿疼痛怎么办</a></li>
      </ul>
      <ul class="main-wt">
        <li class="bg3"><a href="#" target="_blank">牙齿发黄/牙齿发黑</a></li>
        <li class="bg4"><a href="#" target="_blank">种一颗牙多少钱</a></li>
        <li class="bg1"><a href="#" target="_blank">智齿拔牙</a></li>
      </ul>
      <ul class="main-wt">
        <li class="bg5"><a href="#" target="_blank">老人缺牙怎么办</a></li>
        <li class="bg6"><a href="#" target="_blank">超声波洗牙</a></li>
        <li class="bg2"><a href="#" target="_blank">隐形矫正牙套</a></li>
      </ul>
    </div>

  </section>


  <!-- 国际化医疗标准 -->
  <section class="problem">
    <div class="tit">
      <h1>YOU BEI</h1>
      <h3>国际化 <span>医疗</span> 标准</h3>
      <i></i>
      <p>匠心铸造齿科殿堂</p>
    </div>

    <!-- Swiper -->
    <div class="index-about-slider swiper-container">
      <div class="swiper-wrapper">

        <div class="item swiper-slide">
          <img src="<?php echo IMG_PATH ?>/index/problem_01.jpg" alt="优贝口腔_门店大厅">
        </div>

        <div class="item swiper-slide">
          <img src="<?php echo IMG_PATH ?>/index/problem_02.jpg" alt="优贝口腔_口腔诊室">
        </div>

        <div class="item swiper-slide">
          <img src="<?php echo IMG_PATH ?>/index/problem_03.jpg" alt="优贝口腔_休息区">
        </div>


      </div>
    </div>

    <div class="index-about-content">
      <p><span>优贝口腔</span> 以品质铸就品牌，打造市民信赖的专业牙科，优贝口腔引进国内外先进齿科理念和运营模式，采用进口诊疗设备和技术，为顾客提供品质服务和医疗安全保障。</p>
      <a href="#">+ 查看更多 +</a>
    </div>
  </section>


  <!-- 优贝专业医师团队 -->
  <section class="doctor_team">
    <div class="tit">
      <h1>YOU BEI</h1>
      <h3>优贝 <span>专业医师</span> 团队</h3>
      <i></i>
      <p>专科 ● 专业 ● 实力保证</p>
    </div>

    <!-- Swiper -->
    <div class="swiper-container index-doctor-team-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">

          <img src="<?php echo IMG_PATH ?>/index/team_01.jpg" alt="优贝口腔_郭宏伟_口腔种植、正畸学医生_无痕修复美牙技术_优贝口腔德国卡瓦技术_中华口腔医学会委员_国际种植牙协会会员">

          <div class="team_box">
            <h3>郭宏伟 / <span>优贝口腔院长</span></h3>
            <p>口腔种植、正畸学医生</p>
            <p>无痕修复美牙技术</p>
            <p>优贝口腔德国卡瓦技术</p>
            <p>中华口腔医学会委员</p>
            <p>国际种植牙协会会员</p>
          </div>

          <div class="team_text">
            <strong>擅长领域:</strong>
            <p>口腔美学修复设计、活动义齿修复、牙齿美学修复、精密附着体义齿、复杂牙齿缺失再修复、口腔种植、口腔正畸等。</p>
          </div>
        </div>

        <div class="swiper-slide">

          <img src="<?php echo IMG_PATH ?>/index/team_02.jpg" alt="优贝口腔_宋铁砾_北京大学口腔医学院博士_北京同仁医院口腔科医生_优贝口腔德国卡瓦技术_口腔医学会专委会委员">

          <div class="team_box">
            <h3>宋铁砾 / <span>特邀口腔医师</span></h3>
            <p>北京大学口腔医学院博士</p>
            <p>北京同仁医院口腔科医生</p>
            <p>优贝口腔德国卡瓦技术</p>
            <p>口腔医学会专委会委员</p>
          </div>

          <div class="team_text">
            <strong>擅长领域:</strong>
            <p>牙齿种植、美容修复；口腔颌面外科疾病的诊断治疗，口腔颌面部先天或后天软硬组织缺损畸形的整复治疗等。</p>
          </div>
        </div>

        <div class="swiper-slide">

          <img src="<?php echo IMG_PATH ?>/index/team_03.jpg" alt="优贝口腔_王迪_优贝口腔特邀修复种植_北京东城区口腔医院院长">

          <div class="team_box">
            <h3>王迪 / <span>东城口腔医院院长</span></h3>
            <p>优贝口腔特邀修复种植</p>
            <p>北京东城区口腔医院院长 </p>
          </div>

          <div class="team_text">
            <strong>擅长领域:</strong>
            <p>牙齿美容修复、种植牙、义齿、牙槽外科、智齿拔除等。</p>
          </div>
        </div>

        <div class="swiper-slide">

          <img src="<?php echo IMG_PATH ?>/index/team_04.jpg" alt="优贝口腔_陈桦_知名口腔种植医师_优贝口腔总监级种植医师_优贝口腔集团副总经理_美国种植硕士大师班毕业_AIC国际种植医师协会会员">

          <div class="team_box">
            <h3>陈桦 / <span>正畸科主治医师</span></h3>
            <p>知名口腔种植医师</p>
            <p>优贝口腔总监级种植医师</p>
            <p>优贝口腔集团副总经理</p>
            <p>美国种植硕士大师班毕业</p>
            <p>AIC国际种植医师协会会员</p>
          </div>

          <div class="team_text">
            <strong>擅长领域:</strong>
            <p>
              擅长前牙美学种植、现代微创种植、即刻种植、GBR技术及上颌窦提升术等复杂种植术。全瓷美学修复方面积累了丰富的经验。
            </p>
          </div>
        </div>

        <div class="swiper-slide">
          <img src="<?php echo IMG_PATH ?>/index/team_05.jpg" alt="优贝口腔_张洪波_知名口腔正畸_优贝口腔总监级正畸_美国隐形矫正认证医师_中华口腔医学会委员">
          <div class="team_box">
            <h3>张洪波 / <span>正畸技术总监</span></h3>
            <p>知名口腔正畸</p>
            <p>优贝口腔总监级正畸</p>
            <p>美国隐形矫正认证医师</p>
            <p>中华口腔医学会委员</p>
          </div>
          <div class="team_text">
            <strong>擅长领域:</strong>
            <p>MBT矫正技术、自锁矫正技术、隐形矫正技术，MBT矫正技术、自锁矫正技术、invisalign隐形矫正技术
            </p>
          </div>
        </div>

        <div class="swiper-slide">
          <img src="<?php echo IMG_PATH ?>/index/team_06.jpg" alt="优贝口腔_徐涛_北京大学医学硕士_金牌首席牙周病学医生_中华口腔医学牙周病_美国牙周病学会会员(AAP)">
          <div class="team_box">
            <h3>徐涛 </h3>
            <p>北京大学医学硕士</p>
            <p>金牌首席牙周病学医生</p>
            <p>中华口腔医学牙周病</p>
            <p>美国牙周病学会会员(AAP)</p>
          </div>
          <div class="team_text">
            <strong>擅长领域:</strong>
            <p>口腔种植，牙周病，牙外伤等口腔综合治疗。</p>
          </div>
        </div>

        <div class="swiper-slide">
          <img src="<?php echo IMG_PATH ?>/index/team_07.jpg" alt="优贝口腔_刘洋_北京大学医学硕士_优贝口腔特邀医生_金牌首席医生_北京大学口腔部主任_美国宾夕法尼亚大学者_中华口腔医学会修复委员">
          <div class="team_box">
            <h3>刘洋 / <span>口腔学国际医生</span></h3>
            <p>北京大学医学硕士</p>
            <p>优贝口腔特邀医生</p>
            <p>金牌首席医生</p>
            <p>北京大学口腔部主任</p>
            <p>美国宾夕法尼亚大学者</p>
            <p>中华口腔医学会修复委员</p>
          </div>
          <div class="team_text">
            <strong>擅长领域:</strong>
            <p>显微疑难根管治疗，CEREC椅旁即刻修复，前牙美学设计与修复，可摘局部义齿修复、综合治疗等领域造诣颇深。
            </p>
          </div>
        </div>

        <div class="swiper-slide">
          <img src="<?php echo IMG_PATH ?>/index/team_08.jpg" alt="优贝口腔_张鹏_优贝口腔特邀医生_北京儿童医院口腔科医生_金牌首席医生_国际口腔正畸学会会员">
          <div class="team_box">
            <h3>张鹏 / <span>金牌首席医生</span></h3>
            <p>优贝口腔特邀医生</p>
            <p>北京儿童医院口腔科医生</p>
            <p>国际口腔正畸学会会员</p>
          </div>
          <div class="team_text">
            <strong>擅长领域:</strong>
            <p>儿童口腔正畸序列治疗、儿童口腔粘膜病的诊断与治疗等，儿童、成人各类牙颌畸形的矫治及各类复杂疑难病例的矫治。
            </p>
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



  <!-- 案例中心 -->
  <section class="case_center">
    <div class="tit">
      <h1>YOU BEI</h1>
      <h3>优贝经典 <span>案例</span> 中心</h3>
      <i></i>
      <p>真实笑容 诠释自信人生</p>
    </div>
    <!-- Swiper -->
    <div class="swiper-container" id="case_swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="case_box">
            <h3>美白牙齿 牙齿贴面来拯救</h3>
            <p>牙齿问题：牙齿黄，牙齿不齐</p>
            <p>治疗方式：牙齿贴面</p>
            <img src="<?php echo IMG_PATH ?>/index/case_01.jpg" alt="优贝口腔_美白牙齿案例">

            <div class="case_btn">
              <a href="#">咨询医生</a>
              <a href="#">了解详情</a>
            </div>
          </div>

        </div>

        <div class="swiper-slide">
          <div class="case_box">
            <h3>牙齿矫正 绽放美丽笑容</h3>
            <p>牙齿问题：牙齿不齐</p>
            <p>治疗方式：传统正畸矫正</p>
            <img src="<?php echo IMG_PATH ?>/index/case_02.jpg" alt="优贝口腔_牙齿矫正案例">

            <div class="case_btn">
              <a href="#">咨询医生</a>
              <a href="#">了解详情</a>
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


  <!-- 在线预约 -->
  <section class="online_booking">
    <h3>在线预约</h3>

    <div class="Online_box">
      <div class="Online_text">
        <div class="Online_fl">
          <span><i>*</i> 姓名</span>
          <input type="text" name="user_name" verification='no'  id="user_name"  placeholder="请填写您的姓名">
        </div>
        <div class="Online_fr">
          <span><i>*</i> 电话</span>
          <input type="text" name="User_telephone" verification='no' id="User_telephone" placeholder="请填写您的电话">
        </div>

        <div class="Online_fl">
          <span>您的性别</span>
          <input type="text" name="gender" id="gender" placeholder="请填写您的您的性别">
        </div>

        <div class="Online_fr">
          <span>预约项目</span>
          <select id="project" value="选择就诊项目">
            <option value="选择就诊项目">请选择就诊项目</option>
            <option value="种植牙">种植牙</option>
            <option value="牙齿矫正">牙齿矫正</option>
            <option value="牙齿不齐">牙齿不齐</option>
            <option value="烤齿牙">烤齿牙</option>
            <option value="牙齿缺失">牙齿缺失</option>
            <option value="牙痛">牙痛</option>
            <option value="补牙">补牙</option>
            <option value="拔牙">拔牙</option>
            <option value="治疗">治疗</option>
            <option value="洗牙">洗牙</option>
            <option value="智齿">智齿</option>
            <option value="复诊">复诊</option>
          </select>
        </div>

        <div class="Online_but">
          <span>症状描述</span>
          <textarea name="content" id="describe"  placeholder="请把问题留给我们，我们会提供让您满意的答案！"></textarea>
        </div>

        <span>
        *填写信息已加密，保证您的隐私安全，我们会尽快与您取得联系，谢谢您的信任。*
        </span>


      </div>
    </div>

    <div class="index-form-btn">
      <input class="sub" type="submit" id="submit" value="提交">
      <input class="reset" type="reset" id="reset" value="重置">
    </div>
  </section>


  <!-- 底部导航 -->
  <?php include './public/footer.php';?>


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


    // 国际化医疗标准
    var aboutSwiper = new Swiper('.index-about-slider', {
      autoplay: true,
      centeredSlides: true,
      loop: true,
      slidesPerView: 'auto'
    });


    // 优贝专业医师团队
    var swiper = new Swiper('.index-doctor-team-slider', {
      pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
      },
      autoplay: true,
      loop: true,
      navigation: {
        nextEl: '.index-doctor-team-slider>.swiper-button-next',
        prevEl: '.index-doctor-team-slider>.swiper-button-prev',
      },
    });

    // 案例中心
    var swiper = new Swiper('#case_swiper', {
      spaceBetween: 30,
      loop: true,
      centeredSlides: true,
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
  <script src="<?php echo JS_PATH ?>/public.js"></script>

</body>

</html>