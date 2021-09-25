<?php
if(!isset($_REQUEST['lang']))
  $lang = 'eng';
else
  $lang = $_REQUEST['lang'];
$langarr = array();

$langarr[0]['eng'] = 'The foundation year program to join UK Universities';
$langarr[0]['arabic'] = "برنامج السنة التأسيسية للإلتحاق بجامعات المملكة المتحدة  ";

$langarr[1]['eng'] = 'Uni Student for Academic Consultation and Study Abroad is the fastest growing company.';
$langarr[1]['arabic'] = "  يوني ستيودنت للخدمات الاكاديمية والدراسة في الخارج هي من أسرع الشركات نموًا وتطورًا  ";

$langarr[2]['eng'] = 'Join now';
$langarr[2]['arabic'] = "  إنضم الآن  ";

$langarr[3]['eng'] = 'To join the academic track program';
$langarr[3]['arabic'] = "للانضمام إلى برنامج المسار الأكاديمي  ";

$langarr[4]['eng'] = ' (Foundation Year) in the United Kingdom as per the following disciplines: Medicine – Engineering - Biological Sciences -L.LB- Computer Science - Management – Sociology and obtain the following below facilities : -';
$langarr[4]['arabic'] = "  السنة التأسيسية في المملكة المتحدة في التخصصات الاتية: الطب-الهندسة-علوم الاحياء-المختبرات-علوم الحاسوب- الادارة- علم الاجتماع وتمتع بهذه الميزات:  ";

$langarr[5]['eng'] = 'Join Now';
$langarr[5]['arabic'] = "  إنضم الآن  ";

$langarr[6]['eng'] = 'Submit your application';
$langarr[6]['arabic'] = "قدم طلبك الجامعي  ";

$langarr[7]['eng'] = 'Submit';
$langarr[7]['arabic'] = "  قدم الآن  ";

$langarr[8]['eng'] = 'Obtain the following below facilities';
$langarr[8]['arabic'] = "  الحصول على الميزات التالية:  ";

$langarr[9]['eng'] = 'A discount for more than ₤ 2000';
$langarr[9]['arabic'] = "خصم أكثر من 2000 جنية أسترليني  ";

$langarr[10]['eng'] = 'Visa processing for the candidature';
$langarr[10]['arabic'] = " إنهاء إجراءات التأشيرة للطالب  ";

$langarr[11]['eng'] = 'One way Air ticket to UK';
$langarr[11]['arabic'] = "تذكرة سفر ذهابا للملكة المتحدة  ";

$langarr[12]['eng'] = 'Pick up at Heathrow Airport upon arrival';
$langarr[12]['arabic'] = "أستقبال في المطار عبر مطار هيثرو  ";

$langarr[13]['eng'] = 'Features of the Foundation Year Progr​am';
$langarr[13]['arabic'] = " مميزات برنامج السنة التأسيسية   ";

$langarr[14]['eng'] = 'Granted Eligibility';
$langarr[14]['arabic'] = "قبول مضمون   ";

$langarr[15]['eng'] = 'IELTS is not required';
$langarr[15]['arabic'] = "لا يشترط الأيلتس  ";

$langarr[16]['eng'] = 'Intensive program';
$langarr[16]['arabic'] = "برنامج مكثف   ";

$langarr[17]['eng'] = 'Affordable installments';
$langarr[17]['arabic'] = " أقساط ميسرة  ";

$langarr[18]['eng'] = 'Foundation year programs facilitate your path of admission to sounded universities in the United Kingdom.';
$langarr[18]['arabic'] = "برامج السنة لتأسيسية تسهل طريقك للقبول إلي الجامعات العريقة في المملكة المتحدة.  ";


$langarr[19]['eng'] = 'UNI Student Academic consultant company is founded in 2015 where it provides professional consultancy services of high quality standards to serve students who wish to join overseas educational institutions universities / colleges such as: UK, USA, Canada, Australia, New Zealand, Malaysia, Europe and some Middle East countries.';
$langarr[19]['arabic'] = "  تأسست شركة يوني ستيودنت  للخدمات الأكاديمية والدراسة في الخارج عام 2015 حيث تقدم الشركة أفضل الخدمات ذات الجودة العالية لكي تخدم الطلبة الراغبين بالدراسة في الخارج في أرقي الجامعات والكليات والمعاهد حول العالم مثل.
المملكة المتحدة. الولايات المتحدة الأمريكية. كندا. أستراليا. نيوزلندا. ماليزيا. أوروبا. وبعض بلدان الشرق الأوسط. ";

$langarr[20]['eng'] = 'To join overseas educational institutions universities / colleges such as';
$langarr[20]['arabic'] = "للالتحاق بالجامعات والكليات الدولية مثل: ";


$langarr[21]['eng'] = 'UK';
$langarr[21]['arabic'] = "  المملكة المتحدة  ";

$langarr[22]['eng'] = 'USA';
$langarr[22]['arabic'] = "  الولايات المتحدة الأمريكية  ";

$langarr[23]['eng'] = 'Canada';
$langarr[23]['arabic'] = "كندا ";

$langarr[24]['eng'] = 'Australia';
$langarr[24]['arabic'] = "  استراليا  ";

$langarr[25]['eng'] = 'New <br />Zealand';
$langarr[25]['arabic'] = "نيوزلندا   ";

$langarr[26]['eng'] = 'Malaysia';
$langarr[26]['arabic'] = " ماليزيا  ";

$langarr[27]['eng'] = 'Europe';
$langarr[27]['arabic'] = "  أوروبا  ";

$langarr[28]['eng'] = 'Middle East';
$langarr[28]['arabic'] = " الشرق الأوسط  ";

$langarr[29]['eng'] = 'Our Core Values';
$langarr[29]['arabic'] = "قيمنا الأساسية  ";

$langarr[30]['eng'] = 'Our Vision';
$langarr[30]['arabic'] = "رؤيتنا  ";

$langarr[31]['eng'] = 'To be a top reliable pioneer that provides educational consultancy services <span style="font-weight: 700;">in </span>UAE.';
$langarr[31]['arabic'] = "  أن نكون شركة رائدة موثوق بها في خدمات الاستشارات التعليمية  في دولة الإمارات العربية المتحدة.  ";

$langarr[32]['eng'] = 'Our Mission';
$langarr[32]['arabic'] = "رسالتنا  ";

$langarr[33]['eng'] = "To offer the world's best global educational knowledge platforms and opportunities to each and every student to enhance his/her career.";
$langarr[33]['arabic'] = "تقديم أفضل منصات المعرفة التعليمية العالمية والفرص المتاحة لكل طالب لتعزيز المستقبل الخاص به  ";

$langarr[34]['eng'] = 'Our Academic Services';
$langarr[34]['arabic'] = "  خدماتنا الأكاديمية  ";

$langarr[35]['eng'] = 'Free academic consultation';
$langarr[35]['arabic'] = "  استشارة أكاديمية مجانية  ";

$langarr[36]['eng'] = 'Academic university Eligibility/post graduate / Bachelor / post-graduation studies  ( conditional & unconditional )';
$langarr[36]['arabic'] = "ضمان القبول الاكاديمي للدراسة في الجامعة  ";

$langarr[37]['eng'] = 'Dormitory / Hostels';
$langarr[37]['arabic'] = "  توفير السكن الجامعي  ";

$langarr[38]['eng'] = 'English language courses';
$langarr[38]['arabic'] = " دورات لغة انجليزية ";

$langarr[39]['eng'] = 'Student visa services';
$langarr[39]['arabic'] = "خدمات التأشيرات الطلابية ";

$langarr[40]['eng'] = 'Air booking services';
$langarr[40]['arabic'] = "  خدمات الحجز الجوي
";

$langarr[41]['eng'] = 'Airport Pick up';
$langarr[41]['arabic'] = "  خدمة توصيل من المطار  ";

$langarr[42]['eng'] = 'Open student bank A/C';
$langarr[42]['arabic'] = "  فتح حساب بنكي للطالب  ";

$langarr[43]['eng'] = 'Health insurance covers all over the world';
$langarr[43]['arabic'] = "  تأمين صحي يغطي جميع أنحاء العالم  ";

$langarr[44]['eng'] = 'Financial facilities';
$langarr[44]['arabic'] = "تسهيلات مالية للدراسة  ";

$langarr[45]['eng'] = 'Special group packages';
$langarr[45]['arabic'] = "  أسعار خاصة للمجموعات  ";

$langarr[46]['eng'] = 'Contact Info';
$langarr[46]['arabic'] = "معلومات التواصل  ";

$langarr[47]['eng'] = 'All rights reserved';
$langarr[47]['arabic'] = " كل الحقوق محفوظة ";

if(isset($_POST['submit'])){
  $name = (isset($_POST['name'])?trim($_POST['name']):'');
  $email = (isset($_POST['email'])?trim($_POST['email']):'');
  $residences = (isset($_POST['residences'])?trim($_POST['residences']):'');
  $phone = (isset($_POST['phone'])?trim($_POST['phone']):'');
  $message = (isset($_POST['message'])?trim($_POST['message']):'');
  $msg = '';
  $errmsg = '';

  if(($name != '') && ($email != '') && ($phone != '') && ($message != '')){
    $messagebody = "Name:  ".$name." \n";
    $messagebody .= "Email:  ".$email." \n";
    $messagebody .= "Country of Residences*:  ".$residences." \n";
    $messagebody .= "Phone:  ".$phone." \n";
    $messagebody .= "Message:  ".$message." \n";
    $messagebody .= "Regards, \n Uni Student Support Team";

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html;charset=utf-8';
    $headers[] = 'From: info@unistudent.ae';
    $headers[] = 'Bcc: mr.jasmin.shukal@tgmail.com';
    $headerstext = implode("\r\n", $headers);
    $messagebody = nl2br($messagebody);
    $res = mail('info@unistudent.ae','Uni Student Application', $messagebody,$headerstext);
    
    if($res){
      $msg = "Thank you! Your application has been sent.";
    }else{
      $errmsg = 'Due to some technical issue mail could not be sent. Please try again.';
    }
  }else{
    $errmsg = 'Unable to send your message. Please fix errors then try again.';
  }
}

?><!DOCTYPE html>
<html style="font-size: 16px;"<?php if($lang == 'arabic'){ ?> dir="rtl"<?php } ?>>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​​The
foundation year program to join UK Universities, ​ To
join the academic track program, Submit your application, ​Obtain
the following below facilities, ​Features of the Foundation Year Progr​am, ​
 
  
  UNI StudentAcademic consultant
  company is founded in 2015 where it provides professional consultancy
  services of high quality standards to serve studentswho wish., ​To join overseas educational institutions universities / colleges such as, US, USA, Canada, Australia, New&nbsp;Zealand, ​Malaysia, ​Europe, Middle East, Our Core Values, Our Vision, ​To be a top reliable pioneer that provides educational consultancy services in UAE., Our Mission, ​Our Academic Services&nbsp;​">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <link name="favicon" type="image/x-icon" href="images/uni-logo.jpg" rel="shortcut icon">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.24.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    
     <style>
      .div-whatsapp
      {
        text-align: center;
    bottom: 40px;
    cursor: pointer;
    position: fixed;
    right: 20px;
    z-index: 999;
      }
      .div-whatsapp img {
    width: 60px;
    height: auto;
}
    </style>
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/uni-logo.jpg",
		"sameAs": [
			"https://www.facebook.com/unistudentuae/",
				"https://twitter.com/unistudent_ae",
				"https://www.instagram.com/unistudent.uae/"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Home">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body"><header class="u-clearfix u-header u-header" id="sec-91a3"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="485" data-image-height="709">
          <img src="images/uni-logo.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <div class="u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/unistudentuae"><span class="u-icon u-social-facebook u-social-icon u-text-custom-color-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a1ea"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-a1ea"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/unistudentuae"><span class="u-icon u-social-icon u-social-twitter u-text-custom-color-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ff10"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-ff10"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/unistudentuae/"><span class="u-icon u-social-icon u-social-instagram u-text-custom-color-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a61e"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-a61e"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
        </div>
        <img class="u-image u-image-round u-preserve-proportions u-radius-10 u-image-2" src="images/uk.png" alt="" data-image-width="512" data-image-height="512">
        <img class="u-image u-image-round u-preserve-proportions u-radius-10 u-image-3" src="images/uae.png" alt="" data-image-width="512" data-image-height="512">
        <div style="clear:both; float:right; margin-bottom: 5px;"><select onchange="javascript: if(this.value == 'arabic'){window.location.href='index.php?lang=arabic';}else{window.location.href='index.php';}" name="language">
          <option value="">English</option>
          <option value="arabic"<?php if($lang == 'arabic'){ ?> selected="selected" <?php } ?>>Arabic</option>
        </select>
      </div>
      </div></header>
    <section class="u-clearfix u-image u-section-1" id="carousel_c30a" data-image-width="2121" data-image-height="1414">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-align-left u-black u-container-style u-expanded-width-xs u-group u-opacity u-opacity-60 u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-border-7 u-border-palette-1-base u-expanded-width u-line u-line-horizontal u-line-1"></div>
            <h1 class="u-text u-text-1"<?php if($lang == 'arabic'){ ?> style="text-align:right;"<?php } ?>> <?php echo trim($langarr[0][$lang]); ?>&nbsp;</h1>
            <p class="u-text u-text-2"<?php if($lang == 'arabic'){ ?> style="text-align:right;"<?php } ?>> <?php echo trim($langarr[1][$lang]); ?></p>
            <?php
            /*
            <a href="https://unistudent.ae/apply" class="u-border-1 u-border-palette-1-base u-btn u-btn-round u-button-style u-custom u-radius-1 u-text-white u-btn-1"><?php echo trim($langarr[2][$lang]); ?></a>
            */
            ?>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-custom-color-1 u-section-2" id="carousel_d43c" style="direction:ltr;">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-size-34-lg u-size-34-xl u-size-41-sm u-size-41-xs u-size-60-md" style="">
                <div class="u-layout-col" style="">
                  <div class="u-container-style u-hidden-md u-hidden-sm u-hidden-xs u-layout-cell u-right-cell u-similar-fill u-size-20 u-layout-cell-1">
                    <div class="u-container-layout u-valign-top u-container-layout-1"></div>
                  </div>
                  <div class="u-container-style u-layout-cell u-right-cell u-similar-fill u-size-40 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2">
                      <h2 class="u-heading-font u-text u-text-white u-text-1"<?php if($lang == 'arabic'){ ?> style="direction: rtl; text-align: right; margin-right: 0px;"<?php } ?>> <?php echo trim($langarr[3][$lang]); ?></h2>
                      <p class="u-text u-text-font u-text-2"<?php if($lang == 'arabic'){ ?> style="direction: rtl; text-align: right; margin-right: 0px;"<?php } ?>>&nbsp;<?php echo trim($langarr[4][$lang]); ?></p>
                      <?php
                      /*
                      <a href="https://unistudent.ae/apply" class="u-btn u-button-style u-custom u-text-body-alt-color u-btn-1"><?php echo trim($langarr[5][$lang]); ?></a>
                      */
                      ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-19-sm u-size-19-xs u-size-26-lg u-size-26-xl u-size-60-md">
                <div class="u-layout-row">
                  <div class="u-container-style u-custom-color-1 u-layout-cell u-left-cell u-opacity u-opacity-60 u-size-60 u-layout-cell-3" imgwidth="678" imgheight="677">
                    <div class="u-container-layout u-container-layout-3">
                      <h2 class="u-heading-font u-text u-text-white u-text-3"<?php if($lang == 'arabic'){ ?> style="text-align:center;"<?php } ?>><?php echo trim($langarr[6][$lang]); ?></h2>
                      <div class="u-form u-form-1">
                        <?php
                          if(isset($msg) && ($msg != '')){
                            echo '<div class="u-form-send-message u-form-send-success">'.$msg.'</div>';
                            $msg = '';
                          }
                          if(isset($errmsg) && ($errmsg != '')){
                            echo '<div class="u-form-send-error u-form-send-message">'.$errmsg.'</div>';  
                            $errmsg = '';
                          }
                        ?>  
                        <form action="<?php if($lang == 'arabic'){ ?>index.php?lang=arabic<?php }else{ ?>index.php<?php } ?>" method="POST" class="u-clearfix u-form-spacing-17 u-form-vertical u-inner-form" source="custom" style="padding: 17px;">
                          <div class="u-form-group u-form-name">
                            <label for="name-3a43" class="u-form-control-hidden u-label"></label>
                            <input type="text" placeholder="Enter your Name*" id="name-3a43" name="name" minlength="3" maxlength="100" class="u-border-1 u-border-palette-1-base u-input u-input-rectangle u-white" required="">
                          </div>
                          <div class="u-form-email u-form-group">
                            <label for="email-3a43" class="u-form-control-hidden u-label"></label>
                            <input type="email" placeholder="Enter a valid email address*" id="email-3a43" name="email" minlength="7" maxlength="150" class="u-border-1 u-border-palette-1-base u-input u-input-rectangle u-white" required="">
                          </div>
                          <div class="u-form-group u-form-phone u-form-group">
                            <label for="phone-0bf3" class="u-form-control-hidden u-label"></label>
                            <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" minlength="5" maxlength="25" placeholder="Enter your phone* (e.g. +14155552675)" id="phone-0bf3" name="phone" class="u-border-1 u-border-palette-1-base u-input u-input-rectangle u-white" required="">
                          </div>
                          <div class="u-form-group u-form-residences u-form-group">
                            <label for="residences-0bf3" class="u-form-control-hidden u-label"></label>
                            <input type="text" placeholder="Country of Residences*" name="residences" class="u-border-1 u-border-palette-1-base u-input u-input-rectangle u-white" required="">
                          </div>
                          <div class="u-form-group u-form-message">
                            <label for="message-3a43" class="u-form-control-hidden u-label"></label>
                            <textarea placeholder="Enter your message*" rows="4" cols="50" id="message-3a43" name="message" minlength="10" maxlength="250" class="u-border-1 u-border-palette-1-base u-input u-input-rectangle u-white" required=""></textarea>
                          </div>
                          <div class="u-align-left u-form-group u-form-submit">
                            <input type="submit" name="submit" value="<?php echo trim($langarr[7][$lang]); ?>" class="u-border-none u-btn u-btn-submit u-button-style u-palette-1-base u-btn-2">
                            <!--
                            <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-palette-1-base u-btn-2">< ?php echo trim($langarr[7][$lang]); ?></a>
                            -->  
                            <input type="submit" value="submit" class="u-form-control-hidden">
                          </div>
                          <?php
                          /*                          
                          <div class="u-form-send-message u-form-send-success">  </div>
                          <div class="u-form-send-error u-form-send-message"> </div>
                          <input type="hidden" value="" name="recaptchaResponse">
                          */
                          ?>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-white u-section-3" id="carousel_797b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-disable-padding u-gutter-18 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-similar-fill u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-padding-12 u-container-layout-1"<?php if($lang == 'arabic'){ ?> style="padding:0px !important;"<?php } ?>>
                  <h2 class="u-text u-text-1"<?php if($lang == 'arabic'){ ?> style="text-align:right;"<?php } ?>>
                    <span class="u-text-custom-color-1"><?php echo trim($langarr[8][$lang]); ?></span>
                  </h2>
                  <ul class="u-custom-list u-text u-text-custom-color-1 u-text-2" <?php if($lang == 'arabic'){ ?>style="padding-right: 0px; text-align: right;"<?php } ?>>
                    <li style="<?php if($lang == 'arabic'){ ?><?php }else{ ?>margin-left: 2.1em;<?php } ?>">
                      <div class="class u-list-icon u-text-palette-1-base"<?php if($lang == 'arabic'){ ?> style="position: relative; left:0.5em;"<?php } ?>>
                        <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" style="font-size: 1.2em; margin: -1.2em;">✔</div>
                      </div>
                      <span style="font-size: 1.5rem;"><?php echo trim($langarr[9][$lang]); ?></span>
                    </li>
                    <li style="<?php if($lang == 'arabic'){ ?><?php }else{ ?>margin-left: 2.1em;<?php } ?>">
                      <div class="class u-list-icon u-text-palette-1-base"<?php if($lang == 'arabic'){ ?> style="position: relative; left:0.5em;"<?php } ?>>
                        <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" style="font-size: 1.2em; margin: -1.2em;">✔</div>
                      </div>
                      <span style="font-size: 1.5rem;"><?php echo trim($langarr[10][$lang]); ?></span>
                    </li>
                    <li style="<?php if($lang == 'arabic'){ ?><?php }else{ ?>margin-left: 2.1em;<?php } ?>">
                      <div class="class u-list-icon u-text-palette-1-base"<?php if($lang == 'arabic'){ ?> style="position: relative; left:0.5em;"<?php } ?>>
                        <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" style="font-size: 1.2em; margin: -1.2em;">✔</div>
                      </div>
                      <span style="font-size: 1.5rem;"><?php echo trim($langarr[11][$lang]); ?></span>
                    </li>
                    <li style="<?php if($lang == 'arabic'){ ?><?php }else{ ?>margin-left: 2.1em;<?php } ?>">
                      <div class="class u-list-icon u-text-palette-1-base"<?php if($lang == 'arabic'){ ?> style="position: relative; left:0.5em;"<?php } ?>>
                        <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" style="font-size: 1.2em; margin: -1.2em;">✔</div>
                      </div>
                      <span style="font-size: 1.5rem;"><?php echo trim($langarr[12][$lang]); ?></span>
                    </li>
                  </ul>
                  <?php
                  /*
                  <a href="#" class="u-btn u-button-style u-custom u-palette-1-base u-btn-1">Read More</a>
                  */
                  ?>
                </div>
              </div>
              <div class="u-align-left u-container-style u-image u-image-contain u-layout-cell u-left-cell u-similar-fill u-size-30 u-image-1" data-image-width="840" data-image-height="1080">
                <div class="u-container-layout" src=""></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-grey-5 u-section-4" id="carousel_63c5">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-heading-font u-text u-text-1">
          <span style="font-size: 3rem;" class="u-text-custom-color-1"><?php echo trim($langarr[13][$lang]); ?>&nbsp;</span>
        </h2>
        <div class="u-border-16 u-border-palette-1-base u-line u-line-horizontal u-line-1"></div>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-custom-item u-list-item u-repeater-item u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <div class="u-expanded-height u-palette-1-base u-shape u-shape-rectangle u-shape-1"></div><span class="u-align-left u-icon u-icon-circle u-palette-1-base u-spacing-10 u-text-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9e52"></use></svg><svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-9e52" style="enable-background:new 0 0 58 58;"><g><path d="M9.5,43c-2.757,0-5,2.243-5,5s2.243,5,5,5s5-2.243,5-5S12.257,43,9.5,43z M9.5,51c-1.654,0-3-1.346-3-3s1.346-3,3-3   s3,1.346,3,3S11.154,51,9.5,51z"></path><path d="M56.5,35c0-2.495-1.375-3.662-2.715-4.233C54.835,29.85,55.5,28.501,55.5,27c0-2.757-2.243-5-5-5H36.134l0.729-3.41   c0.973-4.549,0.334-9.716,0.116-11.191C36.461,3.906,33.372,0,30.013,0h-0.239C28.178,0,25.5,0.909,25.5,7   c0,8.023-2.002,11.694-3.681,13.36c-1.647,1.634-3.231,1.616-3.319,1.64h-1v-2h-16v38h16v-2h28c2.757,0,5-2.243,5-5   c0-1.164-0.4-2.236-1.069-3.087C51.745,47.476,53.5,45.439,53.5,43c0-1.164-0.4-2.236-1.069-3.087   C54.745,39.476,56.5,37.439,56.5,35z M3.5,56V22h12v34H3.5z M51.5,38h-3h-8c-0.552,0-1,0.447-1,1s0.448,1,1,1h8   c1.654,0,3,1.346,3,3s-1.346,3-3,3h-2h-1h-7c-0.552,0-1,0.447-1,1s0.448,1,1,1h7c1.654,0,3,1.346,3,3s-1.346,3-3,3h-28V24   l0.969-0.001c0.097,0.019,2.42,0.05,4.682-2.144C26.037,19.059,27.5,14.061,27.5,7c0-1.867,0.295-5,2.274-5h0.239   C32.244,2,34.621,5.13,35,7.691c0.207,1.392,0.81,6.26-0.093,10.48L33.662,24H50.5c1.654,0,3,1.346,3,3s-1.346,3-3,3h-2h-1h-7   c-0.552,0-1,0.447-1,1s0.448,1,1,1h7c0.883,0,2.825,0.04,3.854,0.193C53.965,32.58,54.5,33.595,54.5,35   C54.5,36.654,53.154,38,51.5,38z"></path>
</g></svg></span>
                <h5 class="u-text u-text-2"> <?php echo trim($langarr[14][$lang]); ?></h5>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <div class="u-expanded-height u-palette-1-base u-shape u-shape-rectangle u-shape-2"></div><span class="u-align-left u-icon u-icon-circle u-palette-1-base u-spacing-10 u-text-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 52 52" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-fae8"></use></svg><svg class="u-svg-content" viewBox="0 0 52 52" x="0px" y="0px" id="svg-fae8" style="enable-background:new 0 0 52 52;"><g><path d="M26,0C11.664,0,0,11.663,0,26s11.664,26,26,26s26-11.663,26-26S40.336,0,26,0z M26,50C12.767,50,2,39.233,2,26
		S12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z"></path><path d="M35.707,16.293c-0.391-0.391-1.023-0.391-1.414,0L26,24.586l-8.293-8.293c-0.391-0.391-1.023-0.391-1.414,0
		s-0.391,1.023,0,1.414L24.586,26l-8.293,8.293c-0.391,0.391-0.391,1.023,0,1.414C16.488,35.902,16.744,36,17,36
		s0.512-0.098,0.707-0.293L26,27.414l8.293,8.293C34.488,35.902,34.744,36,35,36s0.512-0.098,0.707-0.293
		c0.391-0.391,0.391-1.023,0-1.414L27.414,26l8.293-8.293C36.098,17.316,36.098,16.684,35.707,16.293z"></path>
</g></svg></span>
                <h5 class="u-text u-text-3"> <?php echo trim($langarr[15][$lang]); ?></h5>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <div class="u-expanded-height u-palette-1-base u-shape u-shape-rectangle u-shape-3"></div><span class="u-align-left u-icon u-icon-circle u-palette-1-base u-spacing-10 u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-372a"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-372a"><path d="m90.050781 395.949219c-7.167969 0-14.058593 1.789062-20.171875 5.148437-32.203125-41.28125-49.878906-92.5625-49.878906-145.097656 0-130.132812 105.867188-236 236-236 15.820312 0 31.632812 1.574219 47 4.679688 5.40625 1.09375 10.6875-2.40625 11.78125-7.820313s-2.40625-10.6875-7.820312-11.785156c-16.667969-3.367188-33.8125-5.074219-50.960938-5.074219-68.378906 0-132.667969 26.628906-181.019531 74.980469-48.351563 48.351562-74.980469 112.640625-74.980469 181.019531 0 57.519531 19.53125 113.652344 55.089844 158.652344-4.578125 6.839844-7.039063 14.878906-7.039063 23.296875 0 11.21875 4.371094 21.765625 12.304688 29.695312 7.929687 7.933594 18.476562 12.304688 29.695312 12.304688s21.765625-4.371094 29.699219-12.304688c7.933594-7.929687 12.300781-18.480469 12.300781-29.699219 0-11.214843-4.367187-21.765624-12.300781-29.695312-7.933594-7.933594-18.480469-12.300781-29.699219-12.300781zm15.554688 57.554687c-4.152344 4.15625-9.679688 6.445313-15.554688 6.445313s-11.398437-2.289063-15.554687-6.445313-6.445313-9.679687-6.445313-15.554687c0-5.878907 2.289063-11.402344 6.445313-15.558594 4.152344-4.15625 9.679687-6.441406 15.554687-6.441406s11.398438 2.289062 15.554688 6.441406c4.15625 4.15625 6.445312 9.679687 6.445312 15.558594 0 5.875-2.289062 11.398437-6.445312 15.554687zm0 0"></path><path d="m456.902344 97.335938c10.871094-16.308594 9.125-38.605469-5.253906-52.984376-7.933594-7.929687-18.480469-12.300781-29.699219-12.300781s-21.765625 4.371094-29.699219 12.300781c-7.933594 7.933594-12.300781 18.480469-12.300781 29.699219s4.367187 21.765625 12.300781 29.699219 18.480469 12.300781 29.699219 12.300781c7.167969 0 14.058593-1.789062 20.171875-5.148437 32.203125 41.285156 49.878906 92.5625 49.878906 145.097656 0 130.132812-105.867188 236-236 236-15.664062 0-31.328125-1.542969-46.550781-4.589844-5.414063-1.082031-10.683594 2.429688-11.769531 7.84375-1.082032 5.417969 2.429687 10.683594 7.84375 11.769532 16.511718 3.300781 33.496093 4.976562 50.476562 4.976562 68.378906 0 132.667969-26.628906 181.019531-74.980469 48.351563-48.351562 74.980469-112.640625 74.980469-181.019531 0-57.523438-19.535156-113.660156-55.097656-158.664062zm-50.507813-7.726563c-4.15625-4.15625-6.445312-9.679687-6.445312-15.558594 0-5.875 2.289062-11.398437 6.445312-15.554687 4.152344-4.15625 9.679688-6.445313 15.554688-6.445313s11.402343 2.289063 15.558593 6.445313c8.574219 8.578125 8.574219 22.535156 0 31.113281-4.15625 4.152344-9.683593 6.441406-15.558593 6.441406-5.878907 0-11.402344-2.289062-15.554688-6.441406zm0 0"></path><path d="m214.734375 428c0 5.523438 4.480469 10 10 10h62.527344c5.523437 0 10-4.476562 10-10v-19.386719c13.148437-3.539062 25.71875-8.75 37.53125-15.554687l13.6875 13.6875c1.875 1.875 4.417969 2.929687 7.074219 2.929687 2.648437 0 5.195312-1.054687 7.070312-2.933593l44.195312-44.226563c3.902344-3.90625 3.902344-10.238281 0-14.140625l-13.671874-13.671875c6.804687-11.8125 12.015624-24.382813 15.554687-37.53125h19.3125c5.523437 0 10-4.476563 10-10v-62.527344c0-5.523437-4.476563-10-10-10h-19.316406c-3.539063-13.144531-8.746094-25.714843-15.550781-37.527343l13.597656-13.597657c1.875-1.875 2.929687-4.421875 2.929687-7.074219-.003906-2.652343-1.058593-5.199218-2.933593-7.074218l-44.230469-44.195313c-3.902344-3.902343-10.234375-3.902343-14.140625.003907l-13.578125 13.582031c-11.8125-6.804688-24.382813-12.015625-37.53125-15.554688v-19.207031c0-5.523438-4.476563-10-10-10h-62.527344c-5.519531 0-10 4.476562-10 10v19.210938c-13.144531 3.535156-25.714844 8.746093-37.527344 15.550781l-13.582031-13.582031c-3.902344-3.902344-10.234375-3.90625-14.140625-.003907l-44.226563 44.199219c-1.878906 1.875-2.933593 4.417969-2.933593 7.070312 0 2.652344 1.054687 5.199219 2.929687 7.074219l13.597656 13.597657c-6.804687 11.8125-12.015624 24.378906-15.554687 37.527343h-19.277344c-5.523437 0-10 4.476563-10 9.996094l-.035156 62.527344c-.003906 2.652343 1.050781 5.199219 2.925781 7.074219s4.417969 2.929687 7.074219 2.929687h19.3125c3.539063 13.148437 8.75 25.71875 15.554687 37.53125l-13.671874 13.671875c-3.902344 3.902344-3.90625 10.234375 0 14.140625l44.195312 44.226563c1.875 1.875 4.417969 2.933593 7.070312 2.933593h.003907c2.652343 0 5.195312-1.054687 7.070312-2.929687l13.683594-13.6875c11.816406 6.804687 24.386719 12.015625 37.53125 15.554687zm-33.609375-55.972656c-3.957031-2.558594-9.164062-2.003906-12.5 1.328125l-12.175781 12.175781-30.058594-30.082031 12.164063-12.167969c3.332031-3.332031 3.886718-8.539062 1.328124-12.496094-9.066406-14.03125-15.441406-29.410156-18.941406-45.714844-.992187-4.605468-5.0625-7.898437-9.777344-7.898437h-17.175781l.023438-42.527344h17.152343c4.714844 0 8.785157-3.289062 9.777344-7.898437 3.5-16.300782 9.875-31.679688 18.941406-45.710938 2.558594-3.957031 2.003907-9.164062-1.328124-12.496094l-12.085938-12.089843 30.082031-30.058594 12.074219 12.078125c3.335938 3.332031 8.539062 3.882812 12.5 1.328125 14.027344-9.066406 29.40625-15.441406 45.710938-18.941406 4.605468-.992188 7.898437-5.066407 7.898437-9.777344v-17.078125h42.527344v17.074219c0 4.714843 3.289062 8.789062 7.898437 9.777343 16.300782 3.503907 31.683594 9.875 45.710938 18.941407 3.957031 2.558593 9.164062 2.007812 12.496094-1.328125l12.078124-12.074219 30.082032 30.058594-12.085938 12.085937c-3.335937 3.335938-3.886718 8.542969-1.328125 12.5 9.066407 14.03125 15.4375 29.410156 18.941407 45.710938.988281 4.609375 5.0625 7.898437 9.777343 7.898437h17.183594v42.527344h-17.183594c-4.714843 0-8.785156 3.292969-9.777343 7.898437-3.5 16.300782-9.875 31.683594-18.941407 45.710938-2.558593 3.960938-2.003906 9.167969 1.328125 12.5l12.164063 12.164062-30.058594 30.082032-12.175781-12.171875c-3.335938-3.335938-8.542969-3.886719-12.5-1.328125-14.03125 9.066406-29.410156 15.4375-45.710938 18.941406-4.609375.992188-7.898437 5.0625-7.898437 9.777344v17.253906h-42.527344v-17.253906c0-4.710938-3.292969-8.785156-7.898437-9.777344-16.300782-3.5-31.679688-9.875-45.710938-18.941406zm0 0"></path><path d="m338.628906 256c0-45.5625-37.066406-82.628906-82.628906-82.628906s-82.628906 37.066406-82.628906 82.628906 37.066406 82.628906 82.628906 82.628906 82.628906-37.066406 82.628906-82.628906zm-145.257812 0c0-34.535156 28.09375-62.628906 62.628906-62.628906s62.628906 28.097656 62.628906 62.628906-28.09375 62.628906-62.628906 62.628906-62.628906-28.09375-62.628906-62.628906zm0 0"></path><path d="m348.078125 37.820312c2.632813 0 5.210937-1.070312 7.070313-2.929687 1.859374-1.871094 2.929687-4.449219 2.929687-7.082031 0-2.617188-1.066406-5.199219-2.929687-7.070313-1.859376-1.859375-4.4375-2.929687-7.070313-2.929687-2.640625 0-5.207031 1.070312-7.066406 2.929687-1.863281 1.871094-2.933594 4.441407-2.933594 7.070313 0 2.640625 1.070313 5.210937 2.933594 7.082031 1.859375 1.859375 4.425781 2.929687 7.066406 2.929687zm0 0"></path><path d="m164.359375 474.359375c-2.628906 0-5.210937 1.070313-7.070313 2.929687-1.859374 1.859376-2.929687 4.441407-2.929687 7.070313 0 2.640625 1.070313 5.210937 2.929687 7.070313 1.859376 1.859374 4.441407 2.929687 7.070313 2.929687s5.210937-1.070313 7.070313-2.929687c1.859374-1.859376 2.929687-4.441407 2.929687-7.070313s-1.070313-5.210937-2.929687-7.070313c-1.859376-1.859374-4.441407-2.929687-7.070313-2.929687zm0 0"></path></svg></span>
                <h5 class="u-text u-text-4"> <?php echo trim($langarr[16][$lang]); ?></h5>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-4">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <div class="u-expanded-height u-palette-1-base u-shape u-shape-rectangle u-shape-4"></div><span class="u-align-left u-icon u-icon-circle u-palette-1-base u-spacing-10 u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 511.999 511.999" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3771"></use></svg><svg class="u-svg-content" viewBox="0 0 511.999 511.999" x="0px" y="0px" id="svg-3771" style="enable-background:new 0 0 511.999 511.999;"><g><g><g><path d="M316.209,117.615h0.598C316.808,117.615,316.342,116.445,316.209,117.615z"></path><path d="M171.747,117.615h0.598C172.212,116.445,171.747,117.615,171.747,117.615z"></path>
</g>
</g>
</g><g><g><path d="M460.496,154.447c-3.357-5.359-8.599-9.09-14.761-10.506l-32.457-7.458l14.986-4.195    c12.417-3.475,19.898-16.737,16.417-29.177c-3.476-12.417-16.736-19.896-29.178-16.417l-69.876,19.557    c-1.819-3.31-4.406-6.143-7.522-8.251c14.181-26.391,34.612-71.176,34.612-90.443c0-4.699-4.442-8.335-9.051-7.406    c-27.731,5.602-53.586,8.187-79.011,7.91c-26.134-0.287-58.659-3.533-79.095-7.893c-6.318-1.348-11.388,5.722-8.056,11.276    c4.98,8.3,8.031,17.076,9.708,25.921c-25.649,0.786-52.248-2.322-72.38-12.389c-5.423-2.712-11.824,2.033-10.832,8    c6.332,37.987,19.106,60.259,31.913,77.086h-0.284c-13.053,0-23.673,10.62-23.673,23.673c0,12.005,8.985,21.944,20.581,23.465    c-8.453,14.158-20.525,27.591-33.209,41.687c-26.973,29.976-57.546,63.952-67.832,118.811c-4.922,26.249-4.758,50.81,0.489,73.002    c4.898,20.718,14.227,39.471,27.726,55.737c17.919,21.592,42.538,38.345,73.172,49.797c27.595,10.315,59.198,15.767,91.394,15.767    c32.196,0,63.8-5.452,91.394-15.767c30.634-11.452,55.253-28.206,73.172-49.797c13.499-16.266,22.828-35.018,27.726-55.737    c5.246-22.192,5.411-46.754,0.489-73.002c-10.286-54.858-40.858-88.834-67.831-118.81c-9.157-10.177-17.869-19.88-25.173-29.728    l91.079,20.926c9.649,2.217,19.931-2.004,25.261-10.342C465.272,172.11,465.301,162.115,460.496,154.447z M284.489,23.17    c23.263,0.254,46.807-1.78,71.676-6.212c-4.56,18.643-19.203,51.801-33.092,77.06c-9.625,0.725-17.659,7.227-20.637,16.043H281.46    c-0.474-1.021-0.999-2.14-1.584-3.383C273.39,92.89,259.892,64.2,259.892,39.792c0-4.692-4.431-8.33-9.037-7.408    c-8.792,1.759-18.465,3.182-28.53,4.074c-1.055-6.304-2.692-12.618-5.072-18.828C237.553,20.772,263.124,22.935,284.489,23.17z     M333.429,117.615v32.236c0,4.721-3.841,8.563-8.563,8.563s-8.563-3.841-8.563-8.563v-32.236c0-4.722,3.841-8.563,8.563-8.563    S333.429,112.894,333.429,117.615z M141.612,44.107c18.888,6.447,42.123,9.306,67.216,8.424l14.974-0.946    c7.063-0.648,14.229-1.581,21.448-2.802c2.356,23.374,13.034,47.392,19.522,61.278h-50.307h-15.894h-23.376    c-0.169-0.265-0.351-0.525-0.556-0.773C162.002,94.085,149.179,76.5,141.612,44.107z M357.994,208.993    c25.645,28.498,54.708,60.798,64.214,111.487c8.747,46.652,0.338,85.782-24.993,116.303    c-31.234,37.635-88.407,60.105-152.937,60.105S122.574,474.419,91.34,436.784c-25.331-30.521-33.739-69.651-24.993-116.303    c9.505-50.69,38.57-82.991,64.214-111.488c15.333-17.041,29.819-33.159,39.103-51.586h18.452c4.174,0,7.555-3.383,7.555-7.555    c0-4.173-3.382-7.555-7.555-7.555h-32.488c-4.722,0-8.563-3.841-8.563-8.563c0-4.722,3.841-8.563,8.563-8.563h145.564v17.125    h-77.064c-4.174,0-7.555,3.383-7.555,7.555c0,4.172,3.382,7.555,7.555,7.555h78.307c3.161,9.358,12.018,16.118,22.43,16.118    c1.203,0,2.383-0.092,3.539-0.265C336.836,185.456,347.114,196.903,357.994,208.993z M348.54,121.127l71.035-19.881    c4.498-1.261,9.298,1.449,10.554,5.938c1.258,4.499-1.447,9.297-5.938,10.553l-40.596,11.362    c-0.331,0.093-0.647,0.213-0.954,0.346l-34.101-7.835V121.127z M448.779,168.929c-1.058,4.602-5.654,7.487-10.263,6.428    l-90.451-20.782c0.31-1.527,0.474-3.107,0.474-4.725v-12.738l93.811,21.554C446.897,159.711,449.824,164.378,448.779,168.929z"></path>
</g>
</g><g><g><path d="M292.631,310.526c10.831,0,19.644-8.812,19.644-19.644v-12.088c0-28.268-21.084-51.702-48.354-55.4v-13.101    c0-10.831-8.812-19.644-19.644-19.644c-10.831,0-19.644,8.812-19.644,19.644v14.101c-27.997,6.245-48.354,31.134-48.354,60.444    c0,34.161,27.792,61.953,61.953,61.953h12.088c12.497,0,22.666,10.167,22.666,22.666s-10.168,22.666-22.666,22.666h-18.133    c-9.166,0-16.622-7.457-16.622-16.622c0-10.831-8.812-19.644-19.644-19.644c-10.831,0-19.644,8.812-19.644,19.644    c0,28.268,21.084,51.702,48.354,55.4v13.101c0,10.831,8.812,19.644,19.644,19.644c10.831,0,19.644-8.812,19.644-19.644v-14.101    c27.997-6.245,48.354-31.134,48.354-60.444c0-34.161-27.792-61.953-61.953-61.953h-12.088c-12.497,0-22.666-10.167-22.666-22.666    s10.168-22.666,22.666-22.666h18.133c9.166,0,16.622,7.457,16.622,16.622v12.088C272.987,301.713,281.8,310.526,292.631,310.526z     M256.366,247.062h-18.133c-20.83,0-37.776,16.946-37.776,37.776c0,20.83,16.946,37.776,37.776,37.776h12.088    c25.83,0,46.843,21.014,46.843,46.843c0,23.899-17.899,43.908-41.632,46.545c-3.826,0.425-6.721,3.659-6.721,7.509v20.491    c0,2.499-2.034,4.533-4.533,4.533s-4.533-2.034-4.533-4.533v-20.147c0-4.173-3.382-7.555-7.555-7.555    c-22.497,0-40.798-18.302-40.798-40.798c0-2.499,2.034-4.533,4.533-4.533s4.533,2.034,4.533,4.533    c0,17.497,14.235,31.732,31.732,31.732h18.133c20.83,0,37.776-16.946,37.776-37.776s-16.946-37.776-37.776-37.776h-12.088    c-25.83,0-46.843-21.014-46.843-46.843c0-23.899,17.899-43.908,41.632-46.545c3.826-0.425,6.721-3.659,6.721-7.509v-20.491    c0-2.499,2.034-4.533,4.533-4.533s4.533,2.034,4.533,4.533v20.147c0,4.173,3.382,7.555,7.555,7.555    c22.497,0,40.798,18.302,40.798,40.798v12.088c0,2.499-2.034,4.533-4.533,4.533s-4.533-2.034-4.533-4.533v-12.088    C288.098,261.297,273.863,247.062,256.366,247.062z"></path>
</g>
</g></svg></span>
                <h5 class="u-text u-text-5"> <?php echo trim($langarr[17][$lang]); ?></h5>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-5">
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <div class="u-expanded-height u-palette-1-base u-shape u-shape-rectangle u-shape-5"></div><span class="u-align-left u-icon u-icon-circle u-palette-1-base u-spacing-10 u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512.001 512.001" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b8e5"></use></svg><svg class="u-svg-content" viewBox="0 0 512.001 512.001" x="0px" y="0px" id="svg-b8e5" style="enable-background:new 0 0 512.001 512.001;"><g><g><g><circle cx="256" cy="109" r="20"></circle><path d="M508.385,480.531l-49-70C455.642,405.184,449.526,402,443,402h-80V220c0-13.785,11.215-25,25-25     c13.785,0,25,11.215,25,25v103c0,11.046,8.954,20,20,20c11.046,0,20-8.954,20-20V194h39c11.046,0,20-8.954,20-20v-54     c0-8.036-4.81-15.292-12.211-18.421l-236.5-100c-4.99-2.109-10.62-2.105-15.606,0.012l-235.5,100C4.796,104.728,0,111.975,0,120     v54c0,11.046,8.954,20,20,20h33v216.015c-0.128,0.172-0.261,0.339-0.385,0.516l-49,70c-4.276,6.109-4.799,14.091-1.355,20.706     C5.704,507.852,12.543,512,20,512h472c7.458,0,14.296-4.149,17.74-10.764C513.184,494.622,512.661,486.64,508.385,480.531z      M40,154v-20.764l215.517-91.515L472,133.258V154H40z M323,220v182h-50V220c0-13.785,11.215-25,25-25     C311.785,195,323,206.215,323,220z M233,220v182h-50V220c0-13.785,11.215-25,25-25C221.785,195,233,206.215,233,220z M143,220     v182H93V220c0-13.785,11.215-25,25-25C131.785,195,143,206.215,143,220z M58.413,472l21-30h353.174l21,30H58.413z"></path>
</g>
</g>
</g></svg></span>
                <h5 class="u-text u-text-6"> <?php echo trim($langarr[18][$lang]); ?></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-5" id="carousel_a461" data-image-width="2449" data-image-height="1632">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-white u-text-1"<?php if($lang == 'arabic'){ ?> style="text-align:right;"<?php } ?>> <?php echo trim($langarr[19][$lang]); ?></h1>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-white u-section-6" id="carousel_85b5" style="width: 100%; ">
      <div class="u-align-left u-clearfix u-sheet u-valign-bottom-lg u-valign-bottom-xl u-sheet-1">
        <h2 class="u-heading-font u-text u-text-1"> <?php echo trim($langarr[20][$lang]); ?></h2>
        <div class="u-border-16 u-border-palette-1-base u-line u-line-horizontal u-line-1"></div>
        <div class="u-align-left u-expanded-width-md u-expanded-width-sm u-layout-horizontal u-list u-list-1" >
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-custom-item u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-container-layout-1">
                <div class="u-image u-image-circle u-preserve-proportions u-image-1" data-image-width="512" data-image-height="512"></div>
                <h2 class="u-align-center u-heading-font u-text u-text-custom-color-1 u-text-2"><?php echo trim($langarr[21][$lang]); ?></h2>
              </div>
            </div>
            <div class="u-container-style u-custom-item u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-container-layout-2">
                <div class="u-image u-image-circle u-preserve-proportions u-image-2" data-image-width="512" data-image-height="512"></div>
                <h2 class="u-align-center u-heading-font u-text u-text-custom-color-1 u-text-3"><?php echo trim($langarr[22][$lang]); ?></h2>
              </div>
            </div>
            <div class="u-container-style u-custom-item u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-container-layout-3">
                <div class="u-image u-image-circle u-preserve-proportions u-image-3" data-image-width="512" data-image-height="512"></div>
                <h2 class="u-align-center u-heading-font u-text u-text-custom-color-1 u-text-4"><?php echo trim($langarr[23][$lang]); ?></h2>
              </div>
            </div>
            <div class="u-container-style u-custom-item u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-container-layout-4">
                <div class="u-image u-image-circle u-preserve-proportions u-image-4" data-image-width="512" data-image-height="512"></div>
                <h2 class="u-align-center u-heading-font u-text u-text-custom-color-1 u-text-5"><?php echo trim($langarr[24][$lang]); ?></h2>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-hidden u-icon-rectangle u-opacity u-opacity-70 u-text-white u-gallery-nav-1" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-hidden u-icon-rectangle u-opacity u-opacity-70 u-text-white u-gallery-nav-2" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
        <div class="u-expanded-width-md u-expanded-width-sm u-layout-horizontal u-list u-list-2">
          <div class="u-repeater u-repeater-2">
            <div class="u-container-style u-custom-item u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <div class="u-align-center-xs u-image u-image-circle u-preserve-proportions u-image-5" data-image-width="202" data-image-height="203"></div>
                <h2 class="u-align-center u-heading-font u-text u-text-custom-color-1 u-text-6"><?php echo trim($langarr[25][$lang]); ?>
                </h2>
              </div>
            </div>
            <div class="u-container-style u-custom-item u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-6">
                <div class="u-align-center-xs u-image u-image-circle u-preserve-proportions u-image-6" data-image-width="512" data-image-height="512"></div>
                <h2 class="u-align-center u-heading-font u-text u-text-custom-color-1 u-text-7"><?php echo trim($langarr[26][$lang]); ?></h2>
              </div>
            </div>
            <div class="u-container-style u-custom-item u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-7">
                <div class="u-align-center-xs u-image u-image-circle u-preserve-proportions u-image-7" data-image-width="512" data-image-height="512"></div>
                <h2 class="u-align-center u-heading-font u-text u-text-custom-color-1 u-text-8"><?php echo trim($langarr[27][$lang]); ?></h2>
              </div>
            </div>
            <div class="u-container-style u-custom-item u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-8">
                <div class="u-align-center-xs u-image u-image-circle u-preserve-proportions u-image-8" data-image-width="512" data-image-height="512"></div>
                <h2 class="u-align-center u-heading-font u-text u-text-custom-color-1 u-text-9"><?php echo trim($langarr[28][$lang]); ?></h2>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </section>
    <section class="u-clearfix u-image u-shading u-typography-custom-page-typography-32--Testimonials u-section-7" id="carousel_0a2b" data-image-width="580" data-image-height="387">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-similar-fill u-group-1">
          <div class="u-container-layout u-padding-12">
            <h2 class="u-align-center u-text u-text-white u-text-1"><?php echo trim($langarr[29][$lang]); ?></h2>
            <div class="u-border-3 u-border-palette-1-base u-line u-line-horizontal u-line-1"></div>
          </div>
        </div>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-2">
                  <h2 class="u-align-center u-text u-text-white u-text-2"><?php echo trim($langarr[30][$lang]); ?></h2>
                  <div class="u-radius-10 u-shape u-shape-round u-white u-shape-1"></div>
                  <div class="u-container-style u-group u-similar-fill u-group-2">
                    <div class="u-container-layout u-container-layout-3">
                      <h2 class="u-align-left u-text u-text-custom-color-1 u-text-3"<?php if($lang == 'arabic'){ ?> style="direction: rtl; text-align: right; margin-right: 0px;"<?php } ?>><?php echo trim($langarr[31][$lang]); ?></h2>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-4">
                  <h2 class="u-align-center u-text u-text-white u-text-4"><?php echo trim($langarr[32][$lang]); ?></h2>
                  <div class="u-radius-10 u-shape u-shape-round u-white u-shape-2"></div>
                  <div class="u-container-style u-group u-similar-fill u-group-3">
                    <div class="u-container-layout u-container-layout-5">
                      <h3 class="u-align-left u-text u-text-custom-color-1 u-text-5"<?php if($lang == 'arabic'){ ?> style="direction: rtl; text-align: right; margin-right: 0px;"<?php } ?>><?php echo trim($langarr[33][$lang]); ?></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-8" id="carousel_d205">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-custom-color-1 u-text-1"><?php echo trim($langarr[34][$lang]); ?></h2>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-align-left u-custom-color-1 u-icon u-icon-circle u-spacing-22 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 490.667 490.667" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-52f5"></use></svg><svg class="u-svg-content" viewBox="0 0 490.667 490.667" x="0px" y="0px" id="svg-52f5" style="enable-background:new 0 0 490.667 490.667;"><g><g><path d="M138.667,192H96c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667    v-74.667h32c5.888,0,10.667-4.779,10.667-10.667S144.555,192,138.667,192z"></path>
</g>
</g><g><g><path d="M117.333,234.667H96c-5.888,0-10.667,4.779-10.667,10.667S90.112,256,96,256h21.333c5.888,0,10.667-4.779,10.667-10.667    S123.221,234.667,117.333,234.667z"></path>
</g>
</g><g><g><path d="M245.333,0C110.059,0,0,110.059,0,245.333s110.059,245.333,245.333,245.333s245.333-110.059,245.333-245.333    S380.608,0,245.333,0z M245.333,469.333c-123.52,0-224-100.48-224-224s100.48-224,224-224s224,100.48,224,224    S368.853,469.333,245.333,469.333z"></path>
</g>
</g><g><g><path d="M386.752,131.989C352.085,88.789,300.544,64,245.333,64s-106.752,24.789-141.419,67.989    c-3.691,4.587-2.965,11.307,1.643,14.997c4.587,3.691,11.307,2.965,14.976-1.643c30.613-38.144,76.096-60.011,124.8-60.011    s94.187,21.867,124.779,60.011c2.112,2.624,5.205,3.989,8.32,3.989c2.368,0,4.715-0.768,6.677-2.347    C389.717,143.296,390.443,136.576,386.752,131.989z"></path>
</g>
</g><g><g><path d="M376.405,354.923c-4.224-4.032-11.008-3.861-15.061,0.405c-30.613,32.235-71.808,50.005-116.011,50.005    s-85.397-17.771-115.989-50.005c-4.032-4.309-10.816-4.437-15.061-0.405c-4.309,4.053-4.459,10.816-0.405,15.083    c34.667,36.544,81.344,56.661,131.456,56.661s96.789-20.117,131.477-56.661C380.864,365.739,380.693,358.976,376.405,354.923z"></path>
</g>
</g><g><g><path d="M206.805,255.723c15.701-2.027,27.861-15.488,27.861-31.723c0-17.643-14.357-32-32-32h-21.333    c-5.888,0-10.667,4.779-10.667,10.667v42.581c0,0.043,0,0.107,0,0.149V288c0,5.888,4.779,10.667,10.667,10.667    S192,293.888,192,288v-16.917l24.448,24.469c2.091,2.069,4.821,3.115,7.552,3.115c2.731,0,5.461-1.045,7.531-3.136    c4.16-4.16,4.16-10.923,0-15.083L206.805,255.723z M192,234.667v-21.333h10.667c5.867,0,10.667,4.779,10.667,10.667    s-4.8,10.667-10.667,10.667H192z"></path>
</g>
</g><g><g><path d="M309.333,277.333h-32v-64h32c5.888,0,10.667-4.779,10.667-10.667S315.221,192,309.333,192h-42.667    c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667h42.667c5.888,0,10.667-4.779,10.667-10.667    S315.221,277.333,309.333,277.333z"></path>
</g>
</g><g><g><path d="M288,234.667h-21.333c-5.888,0-10.667,4.779-10.667,10.667S260.779,256,266.667,256H288    c5.888,0,10.667-4.779,10.667-10.667S293.888,234.667,288,234.667z"></path>
</g>
</g><g><g><path d="M394.667,277.333h-32v-64h32c5.888,0,10.667-4.779,10.667-10.667S400.555,192,394.667,192H352    c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667h42.667c5.888,0,10.667-4.779,10.667-10.667    S400.555,277.333,394.667,277.333z"></path>
</g>
</g><g><g><path d="M373.333,234.667H352c-5.888,0-10.667,4.779-10.667,10.667S346.112,256,352,256h21.333    c5.888,0,10.667-4.779,10.667-10.667S379.221,234.667,373.333,234.667z"></path>
</g>
</g></svg></span>
                <h3 class="u-align-center u-text u-text-custom-color-1 u-text-2"><?php echo trim($langarr[35][$lang]); ?></h3>
              </div>
            </div>
            <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-align-left u-custom-color-1 u-icon u-icon-circle u-spacing-22 u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7a26"></use></svg><svg class="u-svg-content" viewBox="0 0 60 60" id="svg-7a26"><path d="m59.03 60h-58c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h58c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1zm-57-2h56v-2h-56z"></path><path d="m57.03 56h-54c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h54c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1zm-53-2h52v-2h-52z"></path><path d="m17.03 52h-12c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h12c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1zm-11-2h10v-2h-10z"></path><path d="m15.03 22h-8c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h8c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1zm-7-2h6v-2h-6z"></path><path d="m15.03 48h-8c-.278 0-.544-.116-.733-.32-.189-.205-.285-.479-.264-.756l2-26c.04-.521.475-.923.997-.923h4c.522 0 .957.402.997.923l2 26c.021.278-.074.552-.263.756-.19.204-.455.32-.734.32zm-6.92-2h5.84l-1.846-24h-2.148z"></path><path d="m59.03 14h-58c-.477 0-.888-.337-.98-.805-.093-.468.157-.937.598-1.119l29-12c.245-.102.52-.102.765 0l29 12c.441.182.691.651.599 1.119-.094.468-.505.805-.982.805zm-52.968-2h47.936l-23.968-9.918z"></path><path d="m55.03 18h-50c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h50c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1zm-49-2h48v-2h-48z"></path><path d="m55.03 52h-12c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h12c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1zm-11-2h10v-2h-10z"></path><path d="m53.03 22h-8c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h8c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1zm-7-2h6v-2h-6z"></path><path d="m53.03 48h-8c-.278 0-.544-.116-.733-.32-.189-.205-.285-.479-.264-.756l2-26c.04-.521.475-.923.997-.923h4c.522 0 .957.402.997.923l2 26c.021.278-.074.552-.263.756-.19.204-.455.32-.734.32zm-6.92-2h5.84l-1.846-24h-2.148z"></path><path d="m36.03 52h-12c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h12c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1zm-11-2h10v-2h-10z"></path><path d="m34.03 22h-8c-.552 0-1-.448-1-1v-4c0-.552.448-1 1-1h8c.552 0 1 .448 1 1v4c0 .552-.448 1-1 1zm-7-2h6v-2h-6z"></path><path d="m34.03 48h-8c-.278 0-.544-.116-.733-.32-.189-.205-.285-.479-.264-.756l2-26c.04-.521.475-.923.997-.923h4c.522 0 .957.402.997.923l2 26c.021.278-.074.552-.263.756-.19.204-.455.32-.734.32zm-6.92-2h5.84l-1.846-24h-2.148z"></path></svg></span>
                <h3 class="u-align-center u-text u-text-custom-color-1 u-text-3"><?php echo trim($langarr[36][$lang]); ?></h3>
              </div>
            </div>
            <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-align-left u-custom-color-1 u-icon u-icon-circle u-spacing-22 u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bfe1"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-bfe1" style="enable-background:new 0 0 512 512;"><g><g><path d="M208.879,53.682c-1.334-3.402-3.23-6.434-5.687-9.101c-2.459-2.668-5.414-4.816-8.868-6.436    c-3.452-1.62-7.296-2.433-11.533-2.433c-4.133,0-7.94,0.772-11.416,2.317c-3.48,1.543-6.488,3.61-9.025,6.198    c-2.537,2.587-4.511,5.584-5.924,8.983c-1.412,3.402-2.119,6.932-2.119,10.594c0,3.61,0.68,7.113,2.041,10.513    c1.361,3.402,3.268,6.424,5.727,9.064c2.459,2.643,5.414,4.773,8.866,6.396c3.455,1.621,7.297,2.431,11.536,2.431    c4.13,0,7.937-0.785,11.416-2.352c3.479-1.567,6.474-3.649,8.983-6.238c2.513-2.588,4.474-5.572,5.887-8.946    c1.412-3.374,2.118-6.892,2.118-10.554C210.88,60.561,210.213,57.084,208.879,53.682z M194.6,69.217    c-0.496,1.779-1.254,3.362-2.276,4.747c-1.021,1.388-2.341,2.51-3.962,3.375c-1.623,0.86-3.53,1.294-5.727,1.294    c-2.199,0-4.095-0.42-5.689-1.259c-1.597-0.835-2.917-1.933-3.962-3.292c-1.048-1.36-1.832-2.916-2.355-4.668    c-0.522-1.754-0.784-3.573-0.784-5.454c0-1.829,0.247-3.621,0.745-5.377c0.496-1.749,1.267-3.321,2.314-4.708    c1.045-1.385,2.365-2.497,3.964-3.335c1.593-0.838,3.49-1.254,5.687-1.254c2.145,0,4.015,0.405,5.611,1.215    c1.594,0.811,2.93,1.883,4.001,3.217c1.071,1.334,1.87,2.877,2.394,4.631s0.785,3.57,0.785,5.454    C195.345,65.634,195.096,67.438,194.6,69.217z"></path>
</g>
</g><g><g><path d="M261.338,68.041c-0.785-1.83-1.91-3.386-3.375-4.669c-1.464-1.281-3.23-2.394-5.296-3.335    c-2.068-0.941-4.382-1.805-6.945-2.588c-1.623-0.522-3.073-0.969-4.355-1.334c-1.283-0.364-2.368-0.747-3.257-1.139    c-0.89-0.391-1.57-0.823-2.041-1.293c-0.472-0.472-0.705-1.074-0.705-1.808c0-0.993,0.404-1.697,1.215-2.118    c0.811-0.418,1.896-0.626,3.257-0.626c1.674,0,3.386,0.274,5.14,0.823c1.751,0.549,3.335,1.136,4.746,1.765    c1.675,0.734,3.295,1.57,4.865,2.512l6.592-12.634c-1.256-0.626-2.668-1.294-4.237-2.001c-1.57-0.705-3.257-1.358-5.062-1.961    c-1.805-0.603-3.675-1.099-5.611-1.492c-1.934-0.393-3.922-0.587-5.962-0.587c-2.773,0-5.403,0.407-7.886,1.215    c-2.486,0.812-4.696,2.001-6.63,3.571c-1.936,1.57-3.467,3.53-4.591,5.885c-1.126,2.355-1.688,5.076-1.688,8.161    c0,2.039,0.274,3.844,0.825,5.416c0.549,1.569,1.398,2.967,2.55,4.197c1.151,1.23,2.614,2.328,4.395,3.295    c1.776,0.969,3.895,1.869,6.356,2.706c1.674,0.577,3.255,1.074,4.746,1.49c1.492,0.421,2.813,0.838,3.964,1.256    c1.151,0.42,2.052,0.902,2.707,1.451c0.653,0.552,0.98,1.217,0.98,2.002c0,0.734-0.327,1.324-0.98,1.765    c-0.654,0.445-1.818,0.668-3.492,0.668c-2.197,0-4.356-0.317-6.474-0.942c-2.119-0.627-4.016-1.334-5.689-2.118    c-1.988-0.89-3.898-1.91-5.727-3.061l-6.592,13.417c1.674,0.994,3.492,1.883,5.453,2.668c1.963,0.785,4.002,1.465,6.121,2.041    c2.119,0.575,4.248,1.02,6.394,1.334c2.146,0.316,4.238,0.472,6.278,0.472c2.563,0,5.113-0.303,7.652-0.903    c2.539-0.604,4.814-1.583,6.828-2.945c2.012-1.358,3.635-3.177,4.865-5.454c1.229-2.277,1.843-5.086,1.843-8.435    C262.514,72.094,262.123,69.871,261.338,68.041z"></path>
</g>
</g><g><g><path d="M490.667,433.778h-7.625c0.333-2.324,0.513-4.696,0.513-7.111c0-22.548-14.996-41.583-35.556-47.704V92.444h-30.595    V78.399h-25.266V36.028h-15.302v56.417h-11.062V78.399h-24.402v-8.789h20.244V57.21h-20.244v-7.848h23.696V36.026H326.07v56.418    h-25.502V49.364h16.008V36.028h-47.393v13.336h16.085v43.081H256h-14.672h-97.456V36.028H128.57v20.555h-18.674V36.028H94.595    v56.417H64v286.518c-20.56,6.121-35.556,25.156-35.556,47.704c0,2.415,0.181,4.787,0.513,7.111h-7.625    C9.552,433.778,0,443.329,0,455.111s9.552,21.333,21.333,21.333h149.333v-85.333h170.667v85.333h149.333    c11.782,0,21.333-9.552,21.333-21.333S502.448,433.778,490.667,433.778z M109.897,69.922h18.675v22.522h-18.675V69.922z     M149.333,348.444h-42.667v-42.667h42.667V348.444z M149.333,263.111h-42.667v-42.667h42.667V263.111z M149.333,177.778h-42.667    v-42.667h42.667V177.778z M234.667,348.444H192v-42.667h42.667V348.444z M234.667,263.111H192v-42.667h42.667V263.111z     M234.667,177.778H192v-42.667h42.667V177.778z M320,348.444h-42.667v-42.667H320V348.444z M320,263.111h-42.667v-42.667H320    V263.111z M320,177.778h-42.667v-42.667H320V177.778z M405.333,348.444h-42.667v-42.667h42.667V348.444z M405.333,263.111h-42.667    v-42.667h42.667V263.111z M405.333,177.778h-42.667v-42.667h42.667V177.778z"></path>
</g>
</g></svg></span>
                <h3 class="u-align-center u-text u-text-custom-color-1 u-text-4"><?php echo trim($langarr[37][$lang]); ?></h3>
              </div>
            </div>
            <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-4">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span class="u-align-left u-custom-color-1 u-icon u-icon-circle u-spacing-22 u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512.004 512.004" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-174e"></use></svg><svg class="u-svg-content" viewBox="0 0 512.004 512.004" x="0px" y="0px" id="svg-174e" style="enable-background:new 0 0 512.004 512.004;"><g><g><g><path d="M291.057,242.811c1.51,2.953,4.514,4.659,7.62,4.659c1.297,0,2.628-0.299,3.866-0.93     c0.503-0.256,50.731-25.771,75.503-33.596c4.489-1.425,6.98-6.221,5.555-10.709c-1.417-4.489-6.178-6.989-10.709-5.572     c-26.095,8.252-75.981,33.596-78.097,34.671C290.596,233.467,288.924,238.605,291.057,242.811z"></path><path d="M298.677,145.071c1.297,0,2.628-0.299,3.866-0.93c0.503-0.256,50.731-25.771,75.503-33.596     c4.489-1.425,6.98-6.221,5.555-10.709c-1.417-4.489-6.178-6.989-10.709-5.572c-26.095,8.252-75.981,33.596-78.097,34.671     c-4.198,2.133-5.871,7.27-3.738,11.477C292.567,143.364,295.571,145.071,298.677,145.071z"></path><path d="M503.469,128.004c-4.719,0-8.533,3.823-8.533,8.533v332.8c0,14.114-11.486,25.6-25.6,25.6h-204.8v-19.635     c12.442-4.352,44.851-14.498,76.8-14.498c74.334,0,124.809,16.461,125.312,16.631c2.568,0.853,5.436,0.427,7.68-1.178     c2.227-1.604,3.541-4.181,3.541-6.921V93.871c0-4.002-2.773-7.467-6.682-8.329c0,0-6.69-1.493-18.125-3.593     c-4.617-0.853-9.079,2.219-9.933,6.844c-0.853,4.642,2.21,9.088,6.844,9.941c4.361,0.802,8.013,1.51,10.829,2.074v357.188     c-19.337-5.069-62.276-14.259-119.467-14.259c-37.18,0-73.702,12.211-85.001,16.35c-10.044-4.437-40.405-16.35-77.133-16.35     c-58.778,0-107.196,9.694-128,14.618V100.475c17.041-4.19,67.371-15.138,128-15.138c31.113,0,57.796,9.685,68.267,14.063v335.804     c0,3.072,1.655,5.914,4.326,7.424c2.671,1.519,5.965,1.476,8.602-0.111c0.845-0.503,85.393-51.004,160.435-76.015     c3.49-1.169,5.837-4.42,5.837-8.098V8.537c0-2.799-1.374-5.419-3.678-7.014c-2.287-1.596-5.222-1.963-7.859-0.981     C346.856,26.15,277.771,69.141,277.079,69.568c-3.994,2.5-5.214,7.765-2.714,11.759c2.492,3.994,7.757,5.214,11.759,2.714     c0.631-0.401,60.732-37.794,123.477-63.027v331.281c-58.249,20.241-119.066,53.291-145.067,68.087V93.871     c0-3.234-1.826-6.187-4.719-7.637c-1.468-0.725-36.437-17.963-80.614-17.963c-77.107,0-136.388,16.683-138.88,17.399     c-3.661,1.041-6.187,4.395-6.187,8.201v375.467c0,2.671,1.263,5.197,3.388,6.81c1.502,1.135,3.311,1.724,5.146,1.724     c0.785,0,1.57-0.111,2.338-0.333c0.589-0.162,59.597-16.734,134.195-16.734c31.198,0,57.856,9.711,68.267,14.071v20.062h-204.8     c-14.114,0-25.6-11.486-25.6-25.6v-332.8c0-4.71-3.823-8.533-8.533-8.533s-8.533,3.823-8.533,8.533v332.8     c0,23.526,19.14,42.667,42.667,42.667h426.667c23.526,0,42.667-19.14,42.667-42.667v-332.8     C512.002,131.827,508.188,128.004,503.469,128.004z"></path><path d="M291.057,191.611c1.51,2.953,4.514,4.659,7.62,4.659c1.297,0,2.628-0.299,3.866-0.93     c0.503-0.256,50.731-25.771,75.503-33.596c4.489-1.425,6.98-6.221,5.555-10.709c-1.417-4.489-6.178-6.989-10.709-5.572     c-26.095,8.252-75.981,33.596-78.097,34.671C290.596,182.267,288.924,187.405,291.057,191.611z"></path><path d="M291.057,294.011c1.51,2.953,4.514,4.659,7.62,4.659c1.297,0,2.628-0.299,3.866-0.93     c0.503-0.256,50.731-25.771,75.503-33.596c4.489-1.425,6.98-6.221,5.555-10.709c-1.417-4.489-6.178-6.989-10.709-5.572     c-26.095,8.252-75.981,33.596-78.097,34.671C290.596,284.667,288.924,289.805,291.057,294.011z"></path><path d="M206.748,158.366c-52.693-12.365-112.572,3.388-115.089,4.062c-4.548,1.22-7.253,5.896-6.033,10.453     c1.024,3.814,4.471,6.323,8.235,6.323c0.734,0,1.476-0.094,2.219-0.29c0.572-0.162,58.223-15.326,106.778-3.934     c4.565,1.067,9.182-1.775,10.257-6.366C214.189,164.032,211.339,159.441,206.748,158.366z"></path><path d="M206.748,209.566c-52.693-12.356-112.572,3.388-115.089,4.062c-4.548,1.22-7.253,5.897-6.033,10.453     c1.024,3.814,4.471,6.323,8.235,6.323c0.734,0,1.476-0.094,2.219-0.29c0.572-0.162,58.223-15.326,106.778-3.934     c4.565,1.067,9.182-1.775,10.257-6.366C214.189,215.232,211.339,210.641,206.748,209.566z"></path><path d="M291.057,345.211c1.51,2.953,4.514,4.659,7.62,4.659c1.297,0,2.628-0.299,3.866-0.93     c0.503-0.256,50.731-25.771,75.503-33.596c4.489-1.425,6.98-6.221,5.555-10.709c-1.417-4.488-6.178-6.989-10.709-5.572     c-26.095,8.252-75.981,33.596-78.097,34.671C290.596,335.867,288.924,341.005,291.057,345.211z"></path><path d="M206.748,260.766c-52.693-12.356-112.572,3.379-115.089,4.062c-4.548,1.22-7.253,5.897-6.033,10.453     c1.024,3.814,4.471,6.332,8.235,6.332c0.734,0,1.476-0.102,2.219-0.299c0.572-0.162,58.223-15.326,106.778-3.934     c4.565,1.067,9.182-1.775,10.257-6.366C214.189,266.432,211.339,261.841,206.748,260.766z"></path><path d="M206.748,363.166c-52.693-12.365-112.572,3.388-115.089,4.062c-4.548,1.22-7.253,5.897-6.033,10.453     c1.024,3.814,4.471,6.332,8.235,6.332c0.734,0,1.476-0.102,2.219-0.299c0.572-0.162,58.223-15.326,106.778-3.934     c4.565,1.058,9.182-1.775,10.257-6.366C214.189,368.832,211.339,364.241,206.748,363.166z"></path><path d="M206.748,311.966c-52.693-12.365-112.572,3.379-115.089,4.062c-4.548,1.22-7.253,5.897-6.033,10.453     c1.024,3.814,4.471,6.332,8.235,6.332c0.734,0,1.476-0.102,2.219-0.299c0.572-0.162,58.223-15.326,106.778-3.934     c4.565,1.067,9.182-1.775,10.257-6.366C214.189,317.632,211.339,313.041,206.748,311.966z"></path>
</g>
</g>
</g></svg></span>
                <h3 class="u-align-center u-text u-text-custom-color-1 u-text-5"><?php echo trim($langarr[38][$lang]); ?></h3>
              </div>
            </div>
            <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-5">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5"><span class="u-align-left u-custom-color-1 u-icon u-icon-circle u-spacing-22 u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e6d2"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-e6d2"><g id="Connect"><g><g><path d="m256 150c-41.355 0-75-33.645-75-75s33.645-75 75-75 75 33.645 75 75-33.645 75-75 75zm0-120c-24.813 0-45 20.187-45 45s20.187 45 45 45 45-20.187 45-45-20.187-45-45-45z"></path>
</g><g><path d="m10.038 428.5c-20.678-35.815-8.363-81.774 27.452-102.452 35.817-20.677 81.775-8.362 102.452 27.452 20.726 35.898 8.45 81.724-27.452 102.452-36.042 20.809-81.906 8.135-102.452-27.452zm42.452-76.471c-21.489 12.406-28.877 39.982-16.471 61.471 12.347 21.385 39.886 28.933 61.471 16.471 21.538-12.435 28.908-39.93 16.472-61.471-12.407-21.488-39.982-28.878-61.472-16.471z"></path>
</g><g><path d="m399.51 455.952c-35.898-20.725-48.18-66.55-27.452-102.452 20.677-35.814 66.638-48.13 102.452-27.452 35.814 20.677 48.129 66.637 27.452 102.452-20.585 35.654-66.49 48.215-102.452 27.452zm-1.471-87.452c-12.435 21.538-5.07 49.035 16.472 61.471 21.487 12.406 49.064 5.018 61.471-16.471 12.406-21.489 5.018-49.065-16.471-61.471-21.602-12.472-49.131-4.905-61.472 16.471z"></path>
</g>
</g><g><path d="m61.299 275.094-29.955-1.649c1.958-35.56 12.5-70.552 30.487-101.193 17.489-29.794 42.015-55.565 70.927-74.526l16.452 25.086c-51.662 33.882-84.526 90.81-87.911 152.282z"></path>
</g><g><path d="m450.701 275.094c-3.385-61.472-36.249-118.4-87.911-152.282l16.452-25.086c28.912 18.961 53.438 44.731 70.927 74.526 17.987 30.641 28.529 65.633 30.487 101.193z"></path>
</g><g><path d="m256 512c-35.676 0-69.8-8.11-101.425-24.106l13.541-26.771c27.387 13.853 56.956 20.877 87.884 20.877s60.497-7.024 87.884-20.876l13.541 26.771c-31.625 15.995-65.749 24.105-101.425 24.105z"></path>
</g>
</g></svg></span>
                <h3 class="u-align-center u-text u-text-custom-color-1 u-text-6"><?php echo trim($langarr[39][$lang]); ?>
                </h3>
              </div>
            </div>
            <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-6">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6"><span class="u-align-left u-custom-color-1 u-icon-circle u-spacing-22 u-icon-6"><svg xmlns="http://www.w3.org/2000/svg" width="88" height="88" viewBox="0 0 88 88">
  <defs>
    <style>
      .cls-1 {
        fill: #233e79;
      }

      .cls-2 {
        fill: #fff;
        fill-rule: evenodd;
      }
    </style>
  </defs>
  <circle class="cls-1" cx="44" cy="44" r="44"/>
  <path class="cls-2" d="M47.086,43.386L37,53.443l0.5,9.216-3.834,3.355-2.3-9.1s0.51-.4-1.6,1.6c-1.994,1.887-2.464.307-1.15-1.271s1.6-1.6,1.6-1.6l-8.2-3.921,4.8-3.174,6.54,2.082L44.019,39.994l-20.6-9.788L25.9,27.193,53.372,30.94s8.184-7.62,10.136-8.491,3.3-.6,1.917,2.121-8.891,10.475-8.891,10.475l0.8,26.349-3.525,4.589Z"/>
</svg></span>
                <h3 class="u-align-center u-text u-text-custom-color-1 u-text-7"><?php echo trim($langarr[40][$lang]); ?></h3>
              </div>
            </div>
            <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-7">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-7"><span class="u-align-left u-custom-color-1 u-icon u-icon-circle u-spacing-22 u-icon-7"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 496 496" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e4aa"></use></svg><svg class="u-svg-content" viewBox="0 0 496 496" x="0px" y="0px" id="svg-e4aa" style="enable-background:new 0 0 496 496;"><g><g><path d="M326.88,204l-3.032-21.656c-2.8-19.576-19.824-34.344-39.6-34.344h-84.48c-27.784,0-53.896,10.824-73.536,30.464    l-23.192,23.192c-1.504,1.496-3.56,2.344-5.664,2.344H85.584c-26.032,0-51.592,7.08-73.944,20.48C4.464,228.8,0,236.688,0,245.064    V316h42.8c6.608,18.616,24.344,32,45.2,32s38.592-13.384,45.2-32h205.6c6.608,18.616,24.344,32,45.2,32s38.592-13.384,45.2-32H456    c22.056,0,40-17.944,40-40v-72H326.88z M88,332c-17.648,0-32-14.352-32-32s14.352-32,32-32s32,14.352,32,32S105.648,332,88,332z     M384,332c-17.648,0-32-14.352-32-32s14.352-32,32-32s32,14.352,32,32S401.648,332,384,332z M480,260h-40v16h40    c0,13.232-10.768,24-24,24h-24c0-26.472-21.528-48-48-48s-48,21.528-48,48h-14.24l0.104-0.504    c0.952-4.752,1.792-9.504,2.512-14.28l-15.816-2.424c-0.696,4.536-1.488,9.048-2.392,13.552L305.44,300H232v-48h-16v48h-80    c0-26.472-21.528-48-48-48s-48,21.528-48,48H16v-54.936c0-2.8,1.496-5.432,3.88-6.864C39.736,226.288,62.456,220,85.584,220    h11.792c6.408,0,12.44-2.496,16.968-7.032l23.192-23.192C154.168,173.16,176.256,164,199.768,164h84.488    c11.864,0,22.08,8.856,23.752,20.608l4,27.96v24.92c0,4.72-0.12,9.432-0.336,14.136l15.984,0.752    c0.224-4.952,0.344-9.912,0.344-14.88V220h152V260z"></path>
</g>
</g><g><g><path d="M184,180c-22.056,0-40,17.944-40,40v8h152v-48H184z M280,212H161.368c3.304-9.312,12.2-16,22.632-16h96V212z"></path>
</g>
</g><g><g><rect x="256" y="244" width="16" height="16"></rect>
</g>
</g><g><g><rect x="176" y="244" width="16" height="16"></rect>
</g>
</g><g><g><rect x="80" y="292" width="16" height="16"></rect>
</g>
</g><g><g><rect x="376" y="292" width="16" height="16"></rect>
</g>
</g></svg></span>
                <h3 class="u-align-center u-text u-text-custom-color-1 u-text-8"><?php echo trim($langarr[41][$lang]); ?></h3>
              </div>
            </div>
            <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-8">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-8"><span class="u-align-left u-custom-color-1 u-icon u-icon-circle u-spacing-22 u-icon-8"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f8d2"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-f8d2"><g><path d="m387.897 56.237h-4.342v-28.815c0-8.396-3.766-16.211-10.334-21.442-6.569-5.231-15.029-7.154-23.21-5.276l-243.506 55.873c-.018.004-.035.01-.053.015-9.991 1.793-17.604 10.531-17.604 21.03v124.574c0 4.15 3.364 7.515 7.515 7.515s7.515-3.365 7.515-7.515v-124.574c0-3.504 2.851-6.356 6.356-6.356h182.452c4.151 0 7.515-3.365 7.515-7.515s-3.364-7.515-7.515-7.515h-117.495l178.182-40.884c3.698-.849 7.519.021 10.484 2.384 2.967 2.363 4.668 5.894 4.668 9.686v28.814h-45.782c-4.151 0-7.515 3.365-7.515 7.515s3.364 7.515 7.515 7.515h65.154c11.152 0 20.225 9.073 20.225 20.226v310.599c0 4.15 3.364 7.515 7.515 7.515s7.515-3.365 7.515-7.515v-310.599c0-19.44-15.815-35.255-35.255-35.255z"></path><path d="m415.637 424.635c-4.151 0-7.515 3.365-7.515 7.515v44.595c0 11.153-9.073 20.226-20.225 20.226h-277.664c-3.504 0-6.356-2.851-6.356-6.356v-258.36c0-4.15-3.365-7.515-7.515-7.515s-7.515 3.365-7.515 7.515v258.36c0 11.792 9.593 21.385 21.385 21.385h277.664c19.439 0 35.254-15.815 35.254-35.255v-44.595c.002-4.151-3.362-7.515-7.513-7.515z"></path><path d="m255.704 334.389c52.599 0 95.393-42.793 95.393-95.393s-42.794-95.394-95.393-95.394c-52.6 0-95.393 42.794-95.393 95.394s42.793 95.393 95.393 95.393zm0-15.029c-7.502 0-17.397-15.638-22.563-42.105h45.126c-5.167 26.467-15.061 42.105-22.563 42.105zm25.495-4.17c1.893-3.378 3.653-7.173 5.258-11.374 2.997-7.848 5.382-16.835 7.105-26.561h32.801c-9.64 17.73-25.768 31.428-45.164 37.935zm54.869-76.194c0 8.076-1.21 15.871-3.437 23.23h-37.001c.755-7.505 1.15-15.293 1.15-23.23 0-7.173-.326-14.222-.944-21.053h37.415c1.825 6.715 2.817 13.768 2.817 21.053zm-8.589-36.082h-33.547c-1.744-10.564-4.256-20.309-7.476-28.739-1.604-4.201-3.364-7.997-5.258-11.374 20.18 6.77 36.803 21.335 46.281 40.113zm-71.775-44.283c7.706 0 17.938 16.494 22.975 44.282h-45.951c5.038-27.787 15.27-44.282 22.976-44.282zm25.047 59.312c.64 6.58 1 13.608 1 21.053 0 8.275-.447 16.03-1.228 23.23h-49.637c-.781-7.2-1.228-14.955-1.228-23.23 0-7.445.36-14.473 1-21.053zm-50.541-55.142c-1.893 3.378-3.653 7.173-5.258 11.374-3.219 8.43-5.732 18.175-7.476 28.739h-33.547c9.479-18.778 26.101-33.343 46.281-40.113zm-54.87 76.195c0-7.285.992-14.338 2.817-21.053h37.415c-.618 6.831-.944 13.88-.944 21.053 0 7.937.396 15.725 1.15 23.23h-37.002c-2.226-7.359-3.436-15.155-3.436-23.23zm42.507 38.259c1.723 9.726 4.108 18.713 7.105 26.561 1.605 4.201 3.364 7.997 5.258 11.374-19.397-6.508-35.525-20.206-45.164-37.935z"></path><path d="m167.826 381.01h176.35c4.151 0 7.515-3.365 7.515-7.515s-3.364-7.515-7.515-7.515h-176.35c-4.15 0-7.515 3.365-7.515 7.515s3.364 7.515 7.515 7.515z"></path><path d="m201.114 409.605c-4.15 0-7.515 3.364-7.515 7.515s3.365 7.515 7.515 7.515h109.773c4.151 0 7.515-3.364 7.515-7.515s-3.364-7.515-7.515-7.515z"></path>
</g></svg></span>
                <h3 class="u-align-center u-text u-text-custom-color-1 u-text-9"><?php echo trim($langarr[42][$lang]); ?></h3>
              </div>
            </div>
            <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-9">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-9"><span class="u-align-left u-custom-color-1 u-icon u-icon-circle u-spacing-22 u-icon-9"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-419f"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-419f"><path d="m498 447h-482c-9.284 3-16 9.716-16 18v32c0 8.284 6.716 15 15 15h482c8.284 0 15-6.716 15-15v-32c0-8.284-6.716-15-14-18z"></path><path d="m502.749 101.146-241-100c-3.681-1.527-7.817-1.527-11.498 0l-241 100c-5.601 2.323-9.251 7.791-9.251 13.854v30c0 8.284 6.716 15 15 15h482c8.284 0 15-6.716 15-15v-30c0-6.063-3.65-11.531-9.251-13.854zm-156.749 13.854h-180c-8.284 0-15-6.716-15-15s6.716-15 15-15h180c8.284 0 15 6.716 15 15s-6.716 15-15 15z"></path><path d="m28.5 390v30h115v-30c0-8.284-6.716-15-15-15h-85c-8.284 0-15 6.716-15 15z"></path><path d="m48.5 190h75v155h-75z"></path><path d="m388.5 190h75v155h-75z"></path><path d="m368.5 390v30h115v-30c0-8.284-6.716-15-15-15h-85c-8.284 0-15 6.716-15 15z"></path><path d="m256 350c-8.271 0-15-6.729-15-15 0-8.284-6.716-15-15-15s-15 6.716-15 15c0 19.555 12.541 36.228 30 42.42v7.58c0 8.284 6.716 15 15 15s15-6.716 15-15v-7.58c17.459-6.192 30-22.865 30-42.42 0-24.813-20.187-45-45-45-8.271 0-15-6.729-15-15s6.729-15 15-15 15 6.729 15 15c0 8.284 6.716 15 15 15s15-6.716 15-15c0-19.555-12.541-36.228-30-42.42v-7.58c0-8.284-6.716-15-15-15s-15 6.716-15 15v7.58c-17.459 6.192-30 22.865-30 42.42 0 24.813 20.187 45 45 45 8.271 0 15 6.729 15 15s-6.729 15-15 15z"></path></svg></span>
                <h3 class="u-align-center u-text u-text-custom-color-1 u-text-10"><?php echo trim($langarr[43][$lang]); ?></h3>
              </div>
            </div>
            <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-10">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-10"><span class="u-align-left u-custom-color-1 u-icon u-icon-circle u-spacing-22 u-icon-10"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 332 332" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-58ea"></use></svg><svg class="u-svg-content" viewBox="0 0 332 332" x="0px" y="0px" id="svg-58ea" style="enable-background:new 0 0 332 332;"><g><g><path d="M166,0C74.4,0,0,74.4,0,166s74.4,166,166,166s166-74.4,166-166S257.6,0,166,0z M166,317.6c-83.6,0-151.6-68-151.6-151.6    S82.4,14.4,166,14.4s151.6,68,151.6,151.6S249.6,317.6,166,317.6z"></path>
</g>
</g><g><g><path d="M252.4,130H202V79.6c0-4-3.2-7.2-7.2-7.2h-57.6c-4,0-7.2,3.2-7.2,7.2V130H79.6c-4,0-7.2,3.2-7.2,7.2v57.6    c0,4,3.2,7.2,7.2,7.2H130v50.4c0,4,3.2,7.2,7.2,7.2h57.6c4,0,7.2-3.2,7.2-7.2V202h50.4c4,0,7.2-3.2,7.2-7.2v-57.6    C259.2,133.2,256,130,252.4,130z M245.6,187.6h-0.4h-50.4c-4,0-7.2,3.2-7.2,7.2v50.4h-43.2v-50.4c0-4-3.2-7.2-7.2-7.2H86.8v-43.2    h50.4c4,0,7.2-3.2,7.2-7.2V86.8H188v50.4c0,4,3.2,7.2,7.2,7.2h50.4V187.6z"></path>
</g>
</g></svg></span>
                <h3 class="u-align-center u-text u-text-custom-color-1 u-text-11"><?php echo trim($langarr[44][$lang]); ?></h3>
              </div>
            </div>
            <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-11">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-11"><span class="u-align-left u-custom-color-1 u-icon u-icon-circle u-spacing-22 u-icon-11"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-796d"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-796d" style="enable-background:new 0 0 512 512;"><path d="M256,386c-5.52,0-10,4.48-10,10s4.48,10,10,10c5.52,0,10-4.48,10-10S261.52,386,256,386z"></path><path d="M469.087,61.37C444.479,51.459,412.485,46,379,46s-65.479,5.459-90.087,15.37C274.371,67.227,263.268,74.385,256,82.417  c-7.268-8.032-18.371-15.189-32.913-21.046C198.479,51.459,166.485,46,133,46s-65.479,5.459-90.087,15.37  C15.24,72.516,0,88.366,0,106v240c0,17.634,15.24,33.484,42.913,44.63C65.8,399.848,95.078,405.208,126,405.914V406  c0,34.206,55.888,60,130,60s130-25.794,130-60v-0.086c30.922-0.706,60.2-6.066,83.087-15.284C496.76,379.484,512,363.634,512,346  V106C512,88.366,496.76,72.516,469.087,61.37z M492,286c0,8.537-11.643,18.529-30.385,26.078  c-20.285,8.17-47.519,13.113-75.615,13.823V286c0-0.029-0.002-0.058-0.002-0.086c30.923-0.705,60.201-6.065,83.09-15.284  c8.983-3.618,16.646-7.734,22.913-12.244L492,286L492,286z M246,166c0,8.537-11.643,18.529-30.385,26.078  C193.648,200.926,163.536,206,133,206s-60.648-5.074-82.615-13.922C31.643,184.529,20,174.537,20,166v-27.614  c6.267,4.51,13.93,8.626,22.913,12.244C67.521,160.541,99.515,166,133,166s65.479-5.459,90.087-15.37  c8.983-3.618,16.646-7.734,22.913-12.244V166z M42.913,210.63C67.521,220.541,99.515,226,133,226s65.479-5.459,90.087-15.37  c8.983-3.618,16.646-7.734,22.913-12.244v27.791c-25.87,0.876-50.68,5.122-70.747,12.189c-20.127,7.089-34.61,16.542-42.486,27.631  c-30.456-0.026-60.471-5.094-82.382-13.919C31.643,244.529,20,234.537,20,226v-27.614C26.267,202.896,33.93,207.012,42.913,210.63z   M20,258.386c6.267,4.51,13.93,8.626,22.913,12.244c22.888,9.218,52.167,14.578,83.09,15.284c0,0.029-0.002,0.058-0.002,0.086  v39.901c-28.097-0.71-55.33-5.653-75.615-13.823C31.643,304.529,20,294.537,20,286V258.386z M147.058,281.087  C154.469,263.84,197.244,246,256,246s101.531,17.84,108.934,35.067c0.718,1.681,1.066,3.294,1.066,4.933  c0,8.792-10.839,18.558-28.995,26.123C315.529,321.072,286.761,326,256,326s-59.529-4.928-81.005-13.877  C156.839,304.558,146,294.792,146,286C146,284.361,146.349,282.748,147.058,281.087z M492,226c0,8.537-11.643,18.529-30.385,26.078  c-21.91,8.825-51.924,13.893-82.379,13.919c-7.87-11.083-22.355-20.54-42.489-27.631c-20.067-7.068-44.877-11.313-70.747-12.189  v-27.791c6.267,4.51,13.93,8.626,22.913,12.244C313.521,220.541,345.515,226,379,226s65.479-5.459,90.087-15.37  c8.983-3.618,16.646-7.734,22.913-12.244V226z M492,166c0,8.537-11.643,18.529-30.385,26.078C439.648,200.926,409.536,206,379,206  s-60.648-5.074-82.615-13.922C277.643,184.529,266,174.537,266,166v-27.614c6.267,4.51,13.93,8.626,22.913,12.244  C313.521,160.541,345.515,166,379,166s65.479-5.459,90.087-15.37c8.983-3.618,16.646-7.734,22.913-12.244V166z M296.385,79.922  C318.352,71.074,348.464,66,379,66s60.648,5.074,82.615,13.922C480.357,87.471,492,97.463,492,106s-11.643,18.529-30.385,26.078  C439.648,140.926,409.536,146,379,146s-60.648-5.074-82.615-13.922C277.643,124.529,266,114.537,266,106  S277.643,87.471,296.385,79.922z M50.385,79.922C72.352,71.074,102.464,66,133,66s60.648,5.074,82.615,13.922  C234.357,87.471,246,97.463,246,106s-11.643,18.529-30.385,26.078C193.648,140.926,163.536,146,133,146s-60.648-5.074-82.615-13.922  C31.643,124.529,20,114.537,20,106S31.643,87.471,50.385,79.922z M50.385,372.078C31.643,364.529,20,354.537,20,346v-27.614  c6.267,4.51,13.93,8.626,22.913,12.244C65.8,339.848,95.078,345.208,126,345.914v39.988  C97.903,385.191,70.67,380.249,50.385,372.078z M337.005,432.123C315.529,441.072,286.761,446,256,446s-59.529-4.928-81.005-13.877  C156.839,424.558,146,414.792,146,406v-27.031c2.265,1.639,4.768,3.268,7.544,4.874c15.529,8.986,36.658,15.633,61.104,19.221  c0.493,0.072,0.981,0.107,1.465,0.107c4.88,0,9.151-3.577,9.881-8.549c0.802-5.464-2.978-10.544-8.441-11.346  C171.078,376.453,146,358.979,146,346v-27.12C168.634,335.442,208.587,346,256,346s87.366-10.558,110-27.12V346  c0,12.979-25.078,30.453-71.553,37.276c-5.464,0.802-9.244,5.882-8.441,11.346c0.73,4.973,5.001,8.549,9.881,8.549  c0.483,0,0.973-0.035,1.465-0.107c24.445-3.588,45.574-10.234,61.104-19.221c2.775-1.606,5.279-3.235,7.544-4.874V406  C366,414.792,355.161,424.558,337.005,432.123z M461.615,372.078c-20.285,8.17-47.519,13.113-75.615,13.823v-39.988  c30.922-0.706,60.2-6.066,83.087-15.284c8.983-3.618,16.646-7.734,22.913-12.244V346C492,354.537,480.357,364.529,461.615,372.078z"></path></svg></span>
                <h3 class="u-align-center u-text u-text-custom-color-1 u-text-12"><?php echo trim($langarr[45][$lang]); ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="u-align-center u-clearfix u-grey-90" id="carousel_6fec">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group">
          <div class="u-container-layout u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
            <div style="float:left; direction:ltr; text-align: left;">
              <h3 class="u-custom-font u-font-open-sans u-text u-text-1"><?php echo trim($langarr[46][$lang]); ?></h3>
              <a href="tel: +971526551177" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-palette-1-base u-btn-1"><span class="u-icon u-text-palette-2-base"><svg class="u-svg-content" viewBox="0 0 241.73 241.73" x="0px" y="0px" style="width: 1em; height: 1em;"><g><path style="fill:currentColor;" d="M234.771,181.213l-34.938-34.953c-4.692-4.668-10.975-7.24-17.689-7.24   c-6.987,0-13.584,2.751-18.572,7.742l-13.6,13.597c-10.568-5.874-24.614-13.953-39.197-28.536   c-14.566-14.571-22.646-28.576-28.55-39.201l13.613-13.603c10.121-10.142,10.328-26.413,0.463-36.269L61.37,7.818   c-4.679-4.692-10.962-7.276-17.693-7.276c-6.831,0-13.293,2.63-18.252,7.417c-3,2.416-18.055,15.706-23.666,43.114   c-7.856,38.363,10.194,75.274,62.302,127.403c58.209,58.191,107.902,62.714,121.746,62.714c2.882,0,4.621-0.178,5.085-0.232   c27.147-3.182,36.867-15.238,43.964-24.041C244.052,205.508,244.02,190.496,234.771,181.213z M223.178,207.502   c-6.671,8.274-12.971,16.088-34.031,18.557c-0.011,0.001-1.163,0.13-3.34,0.13c-12.386,0-57.008-4.206-111.139-58.32   C26.615,119.796,9.749,86.829,16.454,54.081c4.894-23.906,17.887-34.067,18.392-34.453l0.448-0.331l0.393-0.394   c2.169-2.167,5.006-3.361,7.989-3.361c2.716,0,5.228,1.018,7.08,2.876l34.939,34.94c4.02,4.016,3.806,10.774-0.471,15.06   L69.829,83.8l-0.253,0.265c-4.012,4.419-3.54,10.391-1.33,14.28c6.377,11.508,15.112,27.269,31.92,44.082   c16.752,16.752,32.49,25.48,43.966,31.845c1.149,0.645,3.521,1.727,6.49,1.727c3.506,0,6.725-1.484,9.108-4.189l14.448-14.444   c2.157-2.158,4.985-3.347,7.964-3.347c2.722,0,5.247,1.021,7.095,2.859l34.915,34.93   C228.587,196.259,226.756,203.064,223.178,207.502z"></path><path style="fill:currentColor;" d="M146.447,37.293c12.887,1.483,28.061,9.289,38.657,19.886c10.695,10.695,18.52,26.023,19.933,39.05   c0.417,3.843,3.667,6.691,7.447,6.691c0.27,0,0.544-0.015,0.818-0.044c4.118-0.447,7.094-4.147,6.647-8.265   c-1.787-16.467-11.075-34.874-24.238-48.038c-13.04-13.041-31.259-22.306-47.549-24.181c-4.113-0.477-7.834,2.479-8.308,6.593   C139.38,33.099,142.331,36.819,146.447,37.293z"></path><path style="fill:currentColor;" d="M139.44,68.711c6.97,0.803,16.616,5.973,22.935,12.292c6.373,6.374,11.553,16.112,12.316,23.157   c0.417,3.844,3.667,6.692,7.447,6.692c0.27,0,0.543-0.015,0.817-0.044c4.118-0.447,7.095-4.147,6.648-8.265   c-1.304-12.028-9.289-24.813-16.623-32.147c-7.268-7.269-19.928-15.216-31.825-16.587c-4.119-0.479-7.835,2.478-8.309,6.592   C132.373,64.516,135.325,68.237,139.44,68.711z"></path>
</g></svg><img></span> +971 52 6551177</a><a href="tel: +971508118304" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-palette-1-base u-btn-1" style="margin-left:28px;">+971 50 8118304</a><a href="tel: +971504987929" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-palette-1-base u-btn-1" style="margin-left:28px;">+971 50 4987929</a><a href="tel: +971586811452" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-palette-1-base u-btn-1" style="margin-left:28px;">+971 58 6811452</a>
              <a href="mailto:info@unistudent.ae" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-palette-1-base u-btn-2"><span class="u-icon u-icon-2"><svg class="u-svg-content" viewBox="0 0 479.058 479.058" style="width: 1em; height: 1em;"><path d="m434.146 59.882h-389.234c-24.766 0-44.912 20.146-44.912 44.912v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159l-200.355 173.649-200.356-173.649c1.769-.736 3.704-1.159 5.738-1.159zm0 299.411h-389.234c-8.26 0-14.971-6.71-14.971-14.971v-251.648l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"></path></svg><img></span> info@unistudent.ae
              </a>
              <div class="u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/unistudentuae"><span class="u-icon u-social-facebook u-social-icon u-text-custom-color-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a1ea"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-a1ea"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/unistudentuae"><span class="u-icon u-social-icon u-social-twitter u-text-custom-color-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ff10"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-ff10"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/unistudentuae/"><span class="u-icon u-social-icon u-social-instagram u-text-custom-color-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a61e"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-a61e"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
        </div>
            </div>
            <div style="float: left; text-align: left;">
              <p class="u-text u-text-2">
                <a href="https://maps.google.com/?cid=11944670827780223237&amp;entry=gps" target="_blank" rel="nofollow" title="Click to open in new window" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-3">
                <span class="u-icon u-text-palette-2-base"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M256,0C156.748,0,76,80.748,76,180c0,33.534,9.289,66.26,26.869,94.652l142.885,230.257    c2.737,4.411,7.559,7.091,12.745,7.091c0.04,0,0.079,0,0.119,0c5.231-0.041,10.063-2.804,12.75-7.292L410.611,272.22    C427.221,244.428,436,212.539,436,180C436,80.748,355.252,0,256,0z M384.866,256.818L258.272,468.186l-129.905-209.34    C113.734,235.214,105.8,207.95,105.8,180c0-82.71,67.49-150.2,150.2-150.2S406.1,97.29,406.1,180    C406.1,207.121,398.689,233.688,384.866,256.818z"></path>
</g>
</g><g><g><path d="M256,90c-49.626,0-90,40.374-90,90c0,49.309,39.717,90,90,90c50.903,0,90-41.233,90-90C346,130.374,305.626,90,256,90z     M256,240.2c-33.257,0-60.2-27.033-60.2-60.2c0-33.084,27.116-60.2,60.2-60.2s60.1,27.116,60.1,60.2    C316.1,212.683,289.784,240.2,256,240.2z"></path>
</g>
</g></svg><img></span>
              <font style="color: #ffffff !important;">53 Hameem Street . Al Nahyan Area, Abu Dhabi - United Arab Emirates</font><br /><br />
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3631.4990499861187!2d54.38014361499521!3d24.46815978424047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e65dd8abfffff%3A0xa5c3fed510cfb105!2sunistudent%20Academic%20Consultant!5e0!3m2!1sen!2sin!4v1631590948829!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </a>
            </p>
          </div>
          </div>
        </div>
      </div>
    </section>

    
    <footer class="u-align-center u-clearfix u-footer u-grey-90 u-footer" id="sec-bd9a"><div class="u-clearfix u-sheet u-sheet-1">
        <hr style="width: 100%; border-top: 1px dotted #ffffff;" />
        <p class="u-small-text u-text u-text-variant u-text-1"> &copy; 2021 UNI Student. <?php echo trim($langarr[47][$lang]); ?>.</p>
      </div>
     
      <div class="div-whatsapp">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=971508118304"> <!-- https://web.whatsapp.com/send?phone= -->
          <img src="https://www.leadsmaster.in/uninew/images/whatsapp.svg">
        </a>
    </div>
    
      </footer>
     <!-- 
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
      -->
  </body>
</html>