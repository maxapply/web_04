<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>来院路线</title>

  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/route.css">
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

  <!-- 地图 -->
  <section class="map">
    <div id="container">
      <a href="https://uri.amap.com/marker?position=116.231524,40.212314&name=优贝口腔旗舰店" class="navigation">
        <span></span>
        <div class="map_text">
          <h3>高德地图</h3>
          <h3>点击导航</h3>
        </div>
      </a>
    </div>
  </section>

  <!-- 交通路线 -->
  <section class="route_box">
    <div class="tit">
      <h3>
        交通路线
        <span>
          <small>route</small>
        </span>
      </h3>
    </div>
    <ul class="route_list">
      <li><span><img src="<?php echo IMG_PATH ?>/route/dt.png" alt="优贝口腔_地铁路线"></span><h3>地铁路线</h3><p>昌平（地铁站）</p></li>
      <li><span><img src="<?php echo IMG_PATH ?>/route/gj.png" alt="优贝口腔_公交路线"></span><h3>公交路线</h3><p>324路、357路、559路、885路、昌1路、昌2路、昌67路、昌68路</p></li>
    </ul>
  </section>

  <!-- 有问必答 -->
  <section class="chat">
    <div class="chatTop">
      <span><img src="<?php echo IMG_PATH ?>/route/chat.png" alt="优贝口腔_有问必答"></span>
      <ul>
        <li><a href="tel:400-1671818"><i><img src="<?php echo IMG_PATH ?>/route/tel.png" alt="优贝口腔_电话服务"></i>电话服务</a></li>
        <li><a href="#"><i><img src="<?php echo IMG_PATH ?>/route/lt.png" alt="优贝口腔_在线服务"></i>在线服务</a></li>
      </ul>
    </div>
    <div class="zixunBox">
      <span class="time">2020-10-07 16:09</span>
      <dl>
        <dt></dt>
        <dd>
            <em>你好！请问有什么能帮到您？</em>
            <a href="#">请点击输入内容......</a>
        </dd>
      </dl>
    </div>

  </section>


  <!-- 齿科技艺 见证美丽蜕变 -->
  <section class="case_box">
    <div class="tit">
      <h3>
        齿科技艺 见证 美丽蜕变
        <span>
          <small>Beautiful</small>
        </span>
      </h3>
    </div>


    <!-- Swiper -->
    <div class="swiper-container case_swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <h2>牙齿贴面</h2>
          <div class="case_text">
            <h3>项 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;目: <strong>牙贴面</strong></h3>
            <h3>牙齿问题: <strong>门牙虎牙</strong></h3>
          </div>
          <div class="case_img">
            <div class="case_flImg fl"><img src="<?php echo IMG_PATH ?>/route/case_01_01.jpg" alt="优贝口腔_牙齿贴面手术前"><h4>术前</h4></div>
            <div class="case_frImg fr"><img src="<?php echo IMG_PATH ?>/route/case_01_03.jpg" alt="优贝口腔_牙齿贴面手术后"><h4>术后</h4></div>
            <div class="case_flImg"><img src="<?php echo IMG_PATH ?>/route/case_01_02.jpg" alt="优贝口腔_牙齿贴面手术中"><h4>术中</h4></div>
          </div>
  
        </div>

        <div class="swiper-slide">
          <h2>隐形矫正</h2>
          <div class="case_text">
            <h3>项 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;目: <strong>隐形矫正</strong></h3>
            <h3>牙齿问题: <strong>牙列拥挤</strong></h3>
          </div>
          <div class="case_img">
            <div class="case_flImg fl"><img src="<?php echo IMG_PATH ?>/route/case_02_01.jpg" alt="优贝口腔_隐形矫正手术前"><h4>术前</h4></div>
            <div class="case_frImg fr"><img src="<?php echo IMG_PATH ?>/route/case_02_03.jpg" alt="优贝口腔_隐形矫正手术后"><h4>术后</h4></div>
            <div class="case_flImg"><img src="<?php echo IMG_PATH ?>/route/case_02_02.jpg" alt="优贝口腔_隐形矫正手术中"><h4>术中</h4></div>
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

  //地图初始化时，在地图上添加一个marker标记,鼠标点击marker可弹出自定义的信息窗体
  var map = new AMap.Map("container", {
      resizeEnable: true, //是否监控地图容器尺寸变化
      zoom: 16, //初始化地图层级
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

  // case swiper
  var swiper = new Swiper('.case_swiper', {
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
      nextEl: '.case_swiper>.swiper-button-next',
      prevEl: '.case_swiper>.swiper-button-prev',
    },
  });

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
    // 在图面添加鹰眼控件，在地图右下角显示地图的缩略图
    map.addControl(new AMap.OverView({isOpen:true}));
  });

  function getNowFormatDate() {
    var date = new Date();
    var seperator1 = "-";
    var year = date.getFullYear();
    var month = date.getMonth() + 1;
    var strDate = date.getDate();
    var hours = date.getHours();
    var minutes =date.getMinutes();
    var seconds = date.getSeconds();
    if (month >= 1 && month <= 9) {
        month = "0" + month;
    }
    if (strDate >= 0 && strDate <= 9) {
        strDate = "0" + strDate;
    }
    if (hours >= 0 && hours <= 9) {
        hours = "0" + hours;
    }
    if (minutes >= 0 && minutes <= 9) {
        minutes = "0" + minutes;
    }
    if (seconds >= 0 && seconds <= 9) {
        seconds = "0" + seconds;
    }

    var currentdate = year + seperator1 + month + seperator1 + strDate + ' '+ hours +':'+minutes + ':'+seconds;
    $('.time').text(currentdate)
    return currentdate;
  }
  getNowFormatDate()
</script>
</body>

</html>