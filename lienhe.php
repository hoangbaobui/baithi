<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Liên Hệ Cửa Hàng</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
<script>
PositionX = 100;
PositionY = 100;
defaultWidth  = 500;
defaultHeight = 500;
var AutoClose = true;
if (parseInt(navigator.appVersion.charAt(0))>=4){
var isNN=(navigator.appName=="Netscape")?1:0;
var isIE=(navigator.appName.indexOf("Microsoft")!=-1)?1:0;}
var optNN='scrollbars=no,width='+defaultWidth+',height='+defaultHeight+',left='+PositionX+',top='+PositionY;
var optIE='scrollbars=no,width=150,height=100,left='+PositionX+',top='+PositionY;
function popImage(imageURL,imageTitle){
if (isNN){imgWin=window.open('about:blank','',optNN);}
if (isIE){imgWin=window.open('about:blank','',optIE);}
with (imgWin.document){
writeln('<html><head><title>Loading...</title><style>body{margin:0px;}</style>');writeln('<sc'+'ript>');
writeln('var isNN,isIE;');writeln('if (parseInt(navigator.appVersion.charAt(0))>=4){');
writeln('isNN=(navigator.appName=="Netscape")?1:0;');writeln('isIE=(navigator.appName.indexOf("Microsoft")!=-1)?1:0;}');
writeln('function reSizeToImage(){');writeln('if (isIE){');writeln('window.resizeTo(300,300);');
writeln('width=300-(document.body.clientWidth-document.images[0].width);');
writeln('height=300-(document.body.clientHeight-document.images[0].height);');
writeln('window.resizeTo(width,height);}');writeln('if (isNN){');       
writeln('window.innerWidth=document.images["George"].width;');writeln('window.innerHeight=document.images["George"].height;}}');
writeln('function doTitle(){document.title="'+imageTitle+'";}');writeln('</sc'+'ript>');
if (!AutoClose) writeln('</head><body bgcolor=ffffff scroll="no" onload="reSizeToImage();doTitle();self.focus()">')
else writeln('</head><body bgcolor=ffffff scroll="no" onload="reSizeToImage();doTitle();self.focus()" onblur="self.close()">');
writeln('<img name="George" src='+imageURL+' style="display:block"></body></html>');
close();		
}}
</script>
</head>
<body>
<div id="main_container">
  <div id="header">
    <div class="top_right">
      <div class="languages">
      </div>
    </div>
   <div id="logo"> </div>
 </div>
  <div id="main_content">
    <div id="menu_tab">
      <ul class="menu">
        <li><a href="index.php" class="nav"> Trang Chủ </a></li>
        <li class="divider"></li>
        <li><a href="sanpham.php" class="nav">Sản Phẩm</a></li>
        <li class="divider"></li>
        <li><a href="khuyenmai.php" class="nav">Khuyến Mãi</a></li>
        <li class="divider"></li>
        <li><a href="lienhe.php" class="nav">Liên Hệ</a></li>
      </ul>
    </div>
    <!-- end of menu tab -->
   
    <div class="left_content">
      <div class="title_box">Liên Hệ</div>
     
		<div class="banner_adds">
				Tòa nhà ETown 2, lầu 5, phòng 5.1 - số 364 Cộng Hòa, Tân Bình, TP HCM
				Địa chỉ Đăng ký kinh doanh: 128 Trần Quang Khải, P. Tân Định, Q1, TP HCM
				Điện thoại: (028) 38 125 960
				Fax: 028 38 125 961
		</div>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Thông Tin Liên Hệ</div>
      <div class="prod_box_big">
        <div class="center_prod_box_big">
          <div class="contact_form">
            <div class="form_row">
              <label class="contact"><strong>Họ Tên:</strong></label>
              <input type="text" class="contact_input" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Địa Chỉ:</strong></label>
              <input type="text" class="contact_input" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Điện Thoại:</strong></label>
              <input type="text" class="contact_input" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Email:</strong></label>
              <input type="text" class="contact_input" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Nội Dung:</strong></label>
              <textarea class="contact_textarea" ></textarea>
            </div>
            <div class="form_row"> <a href="#" class="prod_details">Gửi</a> </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of center content -->
    <div class="right_content">
      <div class="title_box">Liên Hệ</div>
		<div class="banner_adds"> 
			Hỗ Trợ Khách Hàng (7h30 đến 22h): 1800.1060 hoặc 028.3622.1060
			Tổng đài khiếu nại: 1800.1062 
		</div>
		<iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=209366815787131953673.0004cafc86bc98e1ed2bd&amp;ie=UTF8&amp;t=m&amp;ll=10.801691,106.641026&amp;spn=0.010117,0.011115&amp;z=15&amp;output=embed" width="190" height="240" frameborder="0"></iframe>
    </div>
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  <div class="footer">
    <div class="left_footer">  </div>
    <div class="center_footer"> 180 Cao Lỗ, Phường 4, Quận 8, TP.HCM <br />
      
	  </div>
    <div class="right_footer"> </div>
  </div>
</div>
<!-- end of main_container -->
</body>
</html>
