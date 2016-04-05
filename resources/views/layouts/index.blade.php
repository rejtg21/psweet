<?php session_start(); ?>
<!-- 
@author: Rej Mediodia
        Nikki Salgado  
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!–[if IE 7 ]> <html lang="en" class="ie7″> <![endif]–> 
<!–[if IE 8 ]> <html lang="en" class="ie8″> <![endif]–> 
<!–[if IE 9 ]> <html lang="en" class="ie9″> <![endif]–> 
<!–[if (gt IE 9)|!(IE)]><!–> <html lang="en"> <!–<![endif]–> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
<META NAME="description" CONTENT="Ecommerce website that caters to customized cakes in cupcakes around Metro Manila, Philippines.">
<META NAME="keywords" CONTENT="ecommerce, customized, cakes, cupcakes, metro manila, philippines, perfectly sweets">
<title>PERFECTLY SWEETS</title>
<!-- added jquery -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<?php
$css_path = ($title == 'home') ? 'stylesheet.css' : 'stylesheet2.css';
?>
<input type = "hidden" id = "base_url" value = "<?php echo base_url(); ?>">
 <link href="<?php echo base_url() . $css_path; ?> " rel="stylesheet" type="text/css" />

<link href="<?php echo base_url(FONTS_PATH . 'CarroisGothic/stylesheetfont1.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(FONTS_PATH . 'Engagement/stylesheet.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(FONTS_PATH . 'chunkfive/stylesheet.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(FONTS_PATH . 'MenNeferBlack/stylesheet.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(FONTS_PATH . 'webfontkit-20130807-045125/stylesheet.css'); ?>" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(STATIC_IMAGES_PATH . 'favicon.ico'); ?>">
<link rel="icon" href="<?php echo base_url(STATIC_IMAGES_PATH . 'favicon.ico'); ?>" type="image/x-icon">



<link href='http://fonts.googleapis.com/css?family=Lobster&subset=all' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Engagement' rel='stylesheet' type='text/css'>

<!-- Syntax Highlighter -->
  <link href="<?php echo base_url(CSS_PATH . 'shCore.css'); ?>" rel="stylesheet" type="text/css" />

  <!-- slider CSS -->
  <link rel="stylesheet" href="<?php echo base_url(CSS_PATH . 'flexslider.css'); ?>" type="text/css" media="screen" />
  
    <!-- prod gallery -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . 'demo(2).css'); ?>" />
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . 'style1.css'); ?>" />
    <script type="text/javascript" src="<?php echo base_url(JS_EXTERNAL_PATH . 'modernizr.custom.29473.js'); ?>"></script>
    
    
    <!--Login-->
    
    <link rel="stylesheet" href="<?php echo base_url(CSS_PATH . 'style-login.css'); ?>" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
    <script src="<?php echo base_url(JS_EXTERNAL_PATH . 'login.js'); ?>"></script>
  <!-- Modernizr -->
    
 
<link href="<?php echo base_url(STATIC_SPRY_ASSETS_PATH . 'SpryValidationTextField.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(STATIC_SPRY_ASSETS_PATH . 'SpryValidationTextarea.css'); ?>" rel="stylesheet" type="text/css" />

<!-- EASING -->
<script>
    
    $(document).ready(function() {
  function filterPath(string) {
  return string
    .replace(/^\//,'')
    .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
    .replace(/\/$/,'');
  }
  var locationPath = filterPath(location.pathname);
  var scrollElem = scrollableElement('html', 'body');
 
  $('a[href*=#]').each(function() {
    var thisPath = filterPath(this.pathname) || locationPath;
    if (  locationPath == thisPath
    && (location.hostname == this.hostname || !this.hostname)
    && this.hash.replace(/#/,'') ) {
      var $target = $(this.hash), target = this.hash;
      if (target) {
        var targetOffset = $target.offset().top;
        $(this).click(function(event) {
          event.preventDefault();
          $(scrollElem).animate({scrollTop: targetOffset}, 400, function() {
            location.hash = target;
          });
        });
      }

    }
  });
 
  // use the first element that is "scrollable"
  function scrollableElement(els) {
    for (var i = 0, argLength = arguments.length; i <argLength; i++) {
      var el = arguments[i],
          $scrollElement = $(el);
      if ($scrollElement.scrollTop()> 0) {
        return el;
      } else {
        $scrollElement.scrollTop(1);
        var isScrollable = $scrollElement.scrollTop()> 0;
        $scrollElement.scrollTop(0);
        if (isScrollable) {
          return el;
        }
      }
    }
    return [];
  }
 
});
</script>        
    
    <!--[if lt IE 9]>
<script src="dist/html5shiv.js"></script>
<![endif]-->
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
</head>


<body>

<div id="header-wrap"><div class="header-top"></div><div class="header-inner">
<div class="logo-wrap"><a href="<?php echo base_url('home'); ?>"><img src="<?php echo base_url(STATIC_IMAGES_PATH . 'logo.png'); ?>" width="178" height="170" /></a></div>



 <!--UPER NAV-->
  
  <div id="login-bag-wrap">
     <div class="login-bag">
     <ul>

  <li>
<?php
// check current user
// if($_SESSION['utype']== 1){
//    echo '<a href="admin/dashboard.php?page=dboard">Admin Page
//   </a>';
// }
// else{
 echo '<a href="'.base_url('account').'">My Account
   </a>';
// }
?>

</li> 

  <li> <a href="?page=signup">Sign Up</a></li>
     <!--LOGIN-->
             <?php
    if($_SESSION['uname'] == "Guest"){

           echo '  <div id="loginContainer">
                <a href="#" name="loginButton" id="loginButton"><span>Login</span><em></em></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
               
                    <form id="loginForm" method="post" action="redirect.php">
                        <fieldset id="body">
                            <fieldset>
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" />
                            </fieldset>
                            <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="pword" id="password" />
                            </fieldset>
                            <input type="submit" id="login" value="Sign in" />
                            <input type="hidden" value="login" name = "action" />
                            <label for="checkbox"><input type="checkbox" id="checkbox" />Remember me</label>
                        </fieldset>
                        <span><a href="#">Forgot your password?</a></span>

                    </form>
                </div>
            </div>
  
     <!--END LOGIN-->';
    }
    else
    {
      echo '<li> <a href="javascript: document.logout.submit()">Log out</a></li>';
    }
   ?>

  <form name = "logout" action = "redirect.php" method = "post">
<input type="hidden" name="action" value="logout">
</form>
  
     <!--END LOGIN-->
     </ul>
     
</div>
</div></div>
<div class="header"><div class="head-con">

 <!--NAVIGATION-->
    
    <div class="nav-wrap-left">
<ul id="menu">
     <li><a href="<?php echo base_url('info/view/about'); ?>">Company</a></li> 
    <li><a href="<?php echo base_url('products'); ?>">Products</a>


        <ul class="sub-menu">
        <div class="arrow"></div>
            <li>
                <a href="<?php echo base_url('products/1'); ?>">Wedding Cakes</a>
            </li>
            <li>
                <a href="<?php echo base_url('products/2'); ?>">Birthday Cakes</a>
            </li>
            <li>
                <a href="<?php echo base_url('products/3'); ?>">Christening Cakes</a>
            </li>
            <li>
                <a href="<?php echo base_url('products/4'); ?>">Adult Cakes</a>
            </li>
            <li>
                <a href="<?php echo base_url('products/5'); ?>">Cupcakes</a>
            </li>
        </ul>
    </li>
    <li><a href="<?php echo base_url('create'); ?>">Create Shop</a>
    </li>

</ul></div>
    
    
    <div class="nav-wrap-right">
    <ul class="nav">  
    <li><a href="<?php echo base_url('news'); ?>">News</a></li> 
    <li><a href="<?php echo base_url('contact'); ?>">Contact Us</a></li>
    </ul></div>



<!--PaperBag-->

<div class="paperbag-bg">
<div class="paperbag-wrap">
 <div class="paperbag"><a href="?page=cart&id=0"><img src="<?php echo base_url(STATIC_IMAGES_PATH . 'paperbag.png'); ?>" width="55" height="88" alt="shoppingcart" /></a></div>
    <div class="paperbag-view-cart"><a href="?page=cart&id=0"><span>View Cart</span></a></div>
    <div class="paperbag-item-no"><span>item(s) (<?php echo $_SESSION['items']; ?>)</span></div>
    <div class="paperbag-item-cost"><span>Php <?php echo $_SESSION['prodTotal']; ?> </span></div></div>
</div>
</div>

</div>

   
  
  </div>
  
</div></div>



