<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>医疗团队</title>

  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/medical_team.css">
  <link rel="shortcut icon" href="<?php echo IMG_PATH ?>/favicon.ico">


  <script src="<?php echo JS_PATH ?>/flexible.js"></script>
  <script src="<?php echo JS_PATH ?>/jquery-3.5.1.min.js"></script>
  <script src="<?php echo JS_PATH ?>/swiper.min.js"></script>
  <!-- 加载地图JSAPI脚本 -->
<script src="https://webapi.amap.com/maps?v=1.4.15&key=e6bd1d1580e1dbb6a33a1a51da4bbb99"></script>
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


  <!-- 专家团队 -->
  <section class="team">
    <div class="tit">
      <h3>博士、教授级专家领衔坐诊</h3>
      <p>EXPERT  TEAM</p>
    </div>
    <div class="swiper-container team_swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="text_fl fl">
            <h3>郭宏伟 / <span>优贝口腔院长</span></h3>
            <p><span></span>口腔种植、正畸学医生</p>
            <p><span></span>无痕修复美牙技术</p>
            <p><span></span>优贝口腔德国卡瓦技术</p>
            <p><span></span>中华口腔医学会委员</p>
            <p><span></span>国际种植牙协会会员</p>
          </div>
          <div class="text_fr fr">
            <img src="<?php echo IMG_PATH ?>/index/team_01.jpg" alt="优贝口腔_郭宏伟_口腔种植、正畸学医生_无痕修复美牙技术_优贝口腔德国卡瓦技术_中华口腔医学会委员_国际种植牙协会会员">
          </div>
          <div class="text_but fl">
            <p>口腔美学修复设计、活动义齿修复、牙齿美学修复、精密附着体义齿、复杂牙齿缺失再修复、口腔种植、口腔正畸等。</p>
          </div>
        </div>


        <div class="swiper-slide">
          <div class="text_fl fl">
            <h3>宋铁砾 / <span>特邀口腔医师</span></h3>
            <p><span></span>北京大学口腔医学院博士</p>
            <p><span></span>北京同仁医院口腔科医生</p>
            <p><span></span>优贝口腔德国卡瓦技术</p>
            <p><span></span>口腔医学会专委会委员</p>
            <p>&nbsp;</p>
          </div>
          <div class="text_fr fr">
            <img src="<?php echo IMG_PATH ?>/index/team_02.jpg" alt="优贝口腔_宋铁砾_北京大学口腔医学院博士_北京同仁医院口腔科医生_优贝口腔德国卡瓦技术_口腔医学会专委会委员">
          </div>
          <div class="text_but fl">
            <p>牙齿种植、美容修复；口腔颌面外科疾病的诊断治疗，口腔颌面部先天或后天软硬组织缺损畸形的整复治疗等。</p>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="text_fl fl">
            <h3>王迪 / <span>东城口腔医院院长</span></h3>
            <p><span></span>优贝口腔特邀修复种植</p>
            <p><span></span>北京东城区口腔医院院长</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div>
          <div class="text_fr fr">
            <img src="<?php echo IMG_PATH ?>/index/team_03.jpg" alt="优贝口腔_王迪_优贝口腔特邀修复种植_北京东城区口腔医院院长">
          </div>

          <div class="text_but fl">
            <p>牙齿美容修复、种植牙、如口腔颌面部各种良恶性肿瘤的综合治疗，义齿、牙槽外科、智齿拔除等。</p>
          </div>
        </div>


        <div class="swiper-slide">
          <div class="text_fl fl">
          <h3>陈桦 / <span>正畸科主治医师</span></h3>
            <p><span></span>知名口腔种植医师</p>
            <p><span></span>优贝口腔总监级种植医师</p>
            <p><span></span>优贝口腔集团副总经理</p>
            <p><span></span>美国种植硕士大师班毕业</p>
            <p><span></span>AIC国际种植医师协会会员</p>
          </div>
          <div class="text_fr fr">
            <img src="<?php echo IMG_PATH ?>/index/team_04.jpg" alt="优贝口腔_陈桦_知名口腔种植医师_优贝口腔总监级种植医师_优贝口腔集团副总经理_美国种植硕士大师班毕业_AIC国际种植医师协会会员">
          </div>
          <div class="text_but fl">
            <p>擅长前牙美学种植、现代微创种植、即刻种植、GBR技术及上颌窦提升术等复杂种植术。全瓷美学修复方面积累了丰富的经验。</p>
          </div>
        </div>


        <div class="swiper-slide">
          <div class="text_fl fl">
            <h3>张洪波 / <span>正畸技术总监</span></h3>
            <p><span></span>知名口腔正畸</p>
            <p><span></span>优贝口腔总监级正畸</p>
            <p><span></span>美国隐形矫正认证医师</p>
            <p><span></span>中华口腔医学会委员</p>
            <p>&nbsp;</p>
          </div>
          <div class="text_fr fr">
            <img src="<?php echo IMG_PATH ?>/index/team_05.jpg" alt="优贝口腔_张洪波_知名口腔正畸_优贝口腔总监级正畸_美国隐形矫正认证医师_中华口腔医学会委员">
          </div>
          <div class="text_but fl">
            <p>MBT矫正技术、自锁矫正技术、隐形矫正技术，MBT矫正技术、自锁矫正技术、invisalign隐形矫正技术</p>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="text_fl fl">
            <h3>徐涛 </h3>
            <p><span></span>北京大学医学硕士</p>
            <p><span></span>金牌首席牙周病学医生</p>
            <p><span></span>中华口腔医学牙周病</p>
            <p><span></span>美国牙周病学会会员(AAP)</p>
            <p>&nbsp;</p>
          </div>
          <div class="text_fr fr">
            <img src="<?php echo IMG_PATH ?>/index/team_06.jpg" alt="优贝口腔_徐涛_北京大学医学硕士_金牌首席牙周病学医生_中华口腔医学牙周病_美国牙周病学会会员(AAP)">
          </div>
          <div class="text_but fl">
            <p>擅长全口疑难疾病的诊疗，具有口腔多学科联合诊疗能力。尤其擅长前牙美学种植、现代微创种植、即刻种植。</p>
          </div>
        </div>


        <div class="swiper-slide">
          <div class="text_fl fl">
             <h3>刘洋 / <span>口腔学国际医生</span></h3>
            <p><span></span>北京大学医学硕士</p>
            <p><span></span>优贝口腔特邀医生</p>
            <p><span></span>金牌首席医生</p>
            <p><span></span>北京大学口腔部主任</p>
            <p><span></span>美国宾夕法尼亚大学者</p>
          </div>
          <div class="text_fr fr">
            <img src="<?php echo IMG_PATH ?>/index/team_07.jpg" alt="优贝口腔_刘洋_北京大学医学硕士_优贝口腔特邀医生_金牌首席医生_北京大学口腔部主任_美国宾夕法尼亚大学者_中华口腔医学会修复委员">
          </div>
          <div class="text_but fl">
            <p>显微疑难根管治疗，CEREC椅旁即刻修复，前牙美学设计与修复，可摘局部义齿修复、综合治疗等领域造诣颇深。</p>
          </div>
        </div>


        <div class="swiper-slide">
          <div class="text_fl fl">
            <h3>张鹏 / <span>金牌首席医生</span></h3>
            <p><span></span>优贝口腔特邀医生</p>
            <p><span></span>北京儿童医院口腔科医生</p>
            <p><span></span>国际口腔正畸学会会员</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div>
          <div class="text_fr fr">
            <img src="<?php echo IMG_PATH ?>/index/team_08.jpg" alt="优贝口腔_张鹏_优贝口腔特邀医生_北京儿童医院口腔科医生_金牌首席医生_国际口腔正畸学会会员">
          </div>
          <div class="text_but fl">
            <p>儿童口腔正畸序列治疗、儿童口腔粘膜病的诊断与治疗等，儿童、成人各类牙颌畸形的矫治及各类复杂疑难病例的矫治。</p>
          </div>
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <a href="#">点击预约专家</a>
  </section>

  <!-- 口腔科普 -->
  <section class="list_box">
    <ul class="list">
      <li class="selected">口腔科普</li>
      <li>医院动态</li>
      <li>看牙案例</li>
    </ul>
    <div class="list_text">
      <a href="#"><span></span>种植牙有哪些优点和缺点呢？</a>
      <a href="#"><span></span>种植牙究竟由哪几部分组成？</a>
      <a href="#"><span></span>补牙材料那么多，我们该怎么选？</a>
      <a href="#"><span></span>60岁以后，想要一口好牙，需要做些什么？</a>
      <a href="#"><span></span>口腔种植牙之后怎样保养？</a>
      <a href="#"><span></span>每个人都可以做种植牙吗？</a>
      <a href="#"><span></span>拔牙时要注意哪些误区</a>
      <a href="#"><span></span>种一颗牙多少钱？真的能用一辈子吗？</a>
      <a href="#"><span></span>牙齿松动怎么办？</a>
    </div>

    <div class="list_text hide">
      <div class="swiper-container list_swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/medical_team/list_swiper_01.jpg" alt="优贝口腔_门店展示"></div>
          <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/medical_team/list_swiper_02.jpg" alt="优贝口腔_前台展示"></div>
          <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/medical_team/list_swiper_03.jpg" alt="优贝口腔_诊室展示"></div>
          <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/medical_team/list_swiper_04.jpg" alt="优贝口腔_休息区展示"></div>
          <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/medical_team/list_swiper_05.jpg" alt="优贝口腔_走廊展示"></div>
          <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/medical_team/list_swiper_06.png" alt="优贝口腔_咨询室展示"></div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>

    <div class="list_text hide">
      <div class="swiper-container case_swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <h3>PATIENT INFORMATION</h3> 
            <div class="case_flImg fl">
              <img src="<?php echo IMG_PATH ?>/medical_team/case_01_01.jpg" alt="优贝口腔_全瓷牙修复案例">
              <div class="case_text">
                <p>牙齿问题：</p>
                <p>牙齿拥挤 歪斜</p>
                <p>治疗方式：</p>
                <p>全瓷牙修复</p>
              </div>
            </div>
            <div class="case_frImg fr">
              <img src="<?php echo IMG_PATH ?>/medical_team/case_01_02.jpg" alt="优贝口腔_全瓷牙修复案例">
              <img src="<?php echo IMG_PATH ?>/medical_team/case_01_03.jpg" alt="优贝口腔_全瓷牙修复案例">
            </div>

          </div>

          <div class="swiper-slide">
            <h3>PATIENT INFORMATION</h3>
            <div class="case_flImg fl">
              <img src="<?php echo IMG_PATH ?>/medical_team/case_02_01.jpg" alt="优贝口腔_半隐形矫正案例">
              <div class="case_text">
                <p>牙齿问题：</p>
                <p>牙齿前突</p>
                <p>治疗方式：</p>
                <p>半隐形矫正</p>
              </div>
            </div>
            <div class="case_frImg fr">
              <img src="<?php echo IMG_PATH ?>/medical_team/case_02_02.jpg" alt="优贝口腔_半隐形矫正案例">
              <img src="<?php echo IMG_PATH ?>/medical_team/case_02_03.jpg" alt="优贝口腔_半隐形矫正案例">
            </div>
          </div>

          <div class="swiper-slide">
            <h3>PATIENT INFORMATION</h3> 
            <div class="case_flImg fl">
              <img src="<?php echo IMG_PATH ?>/medical_team/case_03_01.jpg" alt="优贝口腔_冷光美白案例">
              <div class="case_text">
                <p>牙齿问题：</p>
                <p>牙齿黄</p>
                <p>治疗方式：</p>
                <p>冷光美白</p>
              </div>
            </div>
            <div class="case_frImg fr">
              <img src="<?php echo IMG_PATH ?>/medical_team/case_03_02.jpg" alt="优贝口腔_冷光美白案例">
              <img src="<?php echo IMG_PATH ?>/medical_team/case_03_03.jpg" alt="优贝口腔_冷光美白案例">
            </div>
          </div>

          <div class="swiper-slide">
            <h3>PATIENT INFORMATION</h3>
            <div class="case_flImg fl">
              <img src="<?php echo IMG_PATH ?>/medical_team/case_04_01.jpg" alt="优贝口腔_金属自锁矫正案例">
              <div class="case_text">
                <p>牙齿问题：</p>
                <p>虎牙</p>
                <p>治疗方式：</p>
                <p>金属自锁矫正</p>
              </div>
            </div>
            <div class="case_frImg fr">
              <img src="<?php echo IMG_PATH ?>/medical_team/case_04_02.jpg" alt="优贝口腔_金属自锁矫正案例">
              <img src="<?php echo IMG_PATH ?>/medical_team/case_04_03.jpg" alt="优贝口腔_金属自锁矫正案例">
            </div>
          </div>

          <div class="swiper-slide">
            <h3>PATIENT INFORMATION</h3>
            <div class="case_flImg fl">
              <img src="<?php echo IMG_PATH ?>/medical_team/case_05_01.jpg" alt="优贝口腔_All-On-4全口种植案例">
              <div class="case_text">
                <p>牙齿问题：</p>
                <p>全口牙缺失</p>
                <p>治疗方式：</p>
                <p>All-On-4全口种植</p>
              </div>
            </div>
            <div class="case_frImg fr">
              <img src="<?php echo IMG_PATH ?>/medical_team/case_05_02.jpg" alt="优贝口腔_All-On-4全口种植案例">
              <img src="<?php echo IMG_PATH ?>/medical_team/case_05_03.jpg" alt="优贝口腔_All-On-4全口种植案例">
            </div>

          </div>


          <div class="swiper-slide">
            <h3>PATIENT INFORMATION</h3>
            <div class="case_flImg fl">
              <img src="<?php echo IMG_PATH ?>/medical_team/case_06_01.jpg" alt="优贝口腔_树脂补牙案例">
              <div class="case_text">
                <p>牙齿问题：</p>
                <p>蛀牙，烂牙</p>
                <p>治疗方式：</p>
                <p>树脂补牙</p>
              </div>
            </div>
            <div class="case_frImg fr">
              <img src="<?php echo IMG_PATH ?>/medical_team/case_06_02.jpg" alt="优贝口腔_树脂补牙案例">
              <img src="<?php echo IMG_PATH ?>/medical_team/case_06_03.jpg" alt="优贝口腔_树脂补牙案例">
            </div>

          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
    <a href="#">点击在线咨询</a>
  </section>


  <!-- 就诊机构路线 -->
  <section class="map_box">
    <div class="tit">
      <h3>就诊机构路线</h3>
      <p>NAVIGATION IN HOSPITAL</p>
    </div>
    <div class="map">
      <div id="container"></div>
    </div>
    <ul class="map_list">
      <li><span></span><h3>咨询电话：</h3><p>400-1671818</p></li>
      <li><span></span><h3>营业时间：</h3><p>9:00-18:00 (节假日照常上班)</p></li>
      <li><span></span><h3>门诊地址：</h3><p>地址：北京市昌平区南环中路24号</p></li>
      <li><span></span><h3>地铁路线：</h3><p>昌平（地铁站）</p></li>
      <li><span></span><h3>公交路线：</h3><p>324路、357路、559路、885路、昌1路、昌2路、昌67路、昌68路</p></li>
    </ul>
  </section>



  <!-- 在线预约 -->
  <section class="online_booking">
    <h3>在线预约</h3>

    <form action="./post.php" method="post" onsubmit="return check();" enctype="multipart/form-data" accept-charset="UTF-8">
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
            <select id="project" name="project" value="选择就诊项目">
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
            <textarea name="text" id="describe"  placeholder="请把问题留给我们，我们会提供让您满意的答案！"></textarea>
          </div>

          <span>
          *填写信息已加密，保证您的隐私安全，我们会尽快与您取得联系，谢谢您的信任。*
          </span>


        </div>
      </div>

      <div class="index-form-btn">
        <input class="sub" type="submit"  id="submit" value="提交">
        <input class="reset" type="reset" id="reset" value="重置">
      </div>
    </form>

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

  // banner swiper
  var swiper = new Swiper('.team_swiper', {
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
      nextEl: '.team_swiper>.swiper-button-next',
      prevEl: '.team_swiper.swiper-button-prev',
    },
  });


// 点击list 切换显示内容
  $('.list>li').click(function(){
    var index = $(this).index()
    $(this).addClass('selected').siblings().removeClass('selected')
    $('.list_text').eq(index).show().siblings('.list_text').hide()
  })


  // list swiper
  var swiper = new Swiper('.list_swiper', {
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    observer: true,
    observeParents: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.list_swiper>.swiper-button-next',
      prevEl: '.list_swiper.swiper-button-prev',
    },
  });


  // case swiper
  var swiper = new Swiper('.case_swiper', {
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    observer: true,
    observeParents: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.case_swiper>.swiper-button-next',
      prevEl: '.case_swiper>.swiper-button-prev',
    },
  });

  //地图初始化时，在地图上添加一个marker标记,鼠标点击marker可弹出自定义的信息窗体
  var map = new AMap.Map("container", {
      resizeEnable: true, //是否监控地图容器尺寸变化
      zoom: 15, //初始化地图层级
      center: [116.231524, 40.212314] //初始化地图中心点
    });
    addMarker();

    //添加marker标记
    function addMarker() {
      map.clearMap();
      var marker = new AMap.Marker({
        map: map,
        center: [116.231524, 40.212314] //初始化地图中心点

      });



      //鼠标点击marker弹出自定义的信息窗体
      AMap.event.addListener(marker, 'click', function () {
        infoWindow.open(map, marker.getPosition());
      });
    }

    //实例化信息窗体
    var title = '优贝口腔北京昌平旗舰店',
      content = [];
    content.push(
      "<img src='https://store.is.autonavi.com/showpic/1b50bcfdb0a91ae883379418a8c8cc42'>地址：北京市昌平区南环中路24号");
    content.push("电话：400-1671818 ");
    var infoWindow = new AMap.InfoWindow({
      isCustom: true, //使用自定义窗体
      content: createInfoWindow(title, content.join("<br/>")),
      offset: new AMap.Pixel(16, -45)
    });

    infoWindow.open(map, [116.231524, 40.212314]);

    //构建自定义信息窗体
    function createInfoWindow(title, content) {
      var info = document.createElement("div");
      info.className = "custom-info input-card content-window-card";

      //可以通过下面的方式修改自定义窗体的宽高
      //info.style.width = "400px";
      // 定义顶部标题
      var top = document.createElement("div");
      var titleD = document.createElement("h3");
      var closeX = document.createElement("img");
      top.className = "info-top";
      titleD.innerHTML = title;
      closeX.src = "https://webapi.amap.com/images/close2.gif";
      closeX.onclick = closeInfoWindow;

      top.appendChild(titleD);
      top.appendChild(closeX);
      info.appendChild(top);

      // 定义中部内容
      var middle = document.createElement("div");
      middle.className = "info-middle";
      middle.style.backgroundColor = 'white';
      middle.innerHTML = content;
      info.appendChild(middle);

      // 定义底部内容
      var bottom = document.createElement("div");
      bottom.className = "info-bottom";
      bottom.style.position = 'relative';
      bottom.style.top = '0px';
      bottom.style.margin = '0 auto';
      var sharp = document.createElement("img");
      sharp.src = "https://webapi.amap.com/images/sharp.png";
      bottom.appendChild(sharp);
      info.appendChild(bottom);
      return info;
    }

    //关闭信息窗体
    function closeInfoWindow() {
      map.clearInfoWindow();
    }























  // 同时引入工具条插件，比例尺插件和鹰眼插件
AMap.plugin([
    'AMap.ToolBar',
    'AMap.Scale',
    'AMap.OverView',
    'AMap.MapType',
    'AMap.Geolocation',
], function(){
    // 在图面添加工具条控件，工具条控件集成了缩放、平移、定位等功能按钮在内的组合控件
    map.addControl(new AMap.ToolBar());

    // 在图面添加比例尺控件，展示地图在当前层级和纬度下的比例尺
    map.addControl(new AMap.Scale());

    // 在图面添加鹰眼控件，在地图右下角显示地图的缩略图
    map.addControl(new AMap.OverView({isOpen:true}));

    // 在图面添加定位控件，用来获取和展示用户主机所在的经纬度位置
    map.addControl(new AMap.Geolocation());
});














</script>











</body>

</html>