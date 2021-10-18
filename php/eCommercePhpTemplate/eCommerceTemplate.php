<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>eCommerce template By Adobe Dreamweaver CC</title>
<link href="eCommerceStyle.css" rel="stylesheet" type="text/css">

<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>
<div id="mainWrapper">
  <header> 
    <!-- This is the header content. It contains Logo and links -->
    <div id="logo"> 
      <!-- Company Logo text --> 
      LOGO </div>
</header>
  <h1>OFFER 50%</h1>
  <div id="headerLinks"><a href="#" title="Login/Register">Login/Register</a><a href="#" title="Cart">Cart</a></div>
  <img src="COPY_&__PASTE__TEXT_FROM__A_PSD.png" alt="" />
  <img src="Drag_image.png" alt="" />
  <section id="offer"> 
    <!-- The offer section displays a banner text for promotions -->
    <p>REALLY AWESOME DISCOUNTS THIS JULY</p>
</section>
  <div id="content">
    <nav class="sidebar"> 
      <!-- This adds a sidebar with 1 searchbox,2 menusets, each with 4 links -->
      <input type="text"  id="search" value="search">
      <div id="menubar">
        <div class="menu">
          <?php
                                                $no_of_menus=2;
                                                for($menu_no=1;$menu_no<=$no_of_menus;$menu_no++){
                                                                
                                ?>
          <h1>MENU ITEM <?php echo $menu_no ?> </h1>
          <hr>
          <ul>
            <?php
                                                $no_of_links=3;
                                                for($link_no=1;$link_no<=$no_of_links;$link_no++){
                                                                
                                                ?>
            <li><a href="#" title="Link">Link <?php echo $link_no ?> </a></li>
            
            <?php 
                                                }
                                                ?>
          </ul>
          <?php
                                                }
                                ?>
        </div>
      </div>
    </nav>
    <div class="mainContent">
      <?php
                for($x=1;$x<=3;$x++){
     ?>
      <div class="productRow"><!-- Each product row contains info of 3 elements -->
        <?php for($y=1;$y<=3;$y++)
                  {
                  ?>
        <div class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder </p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </div>
        <?php
                  }
                  ?>
      </div>
      <?php 
                }
                ?>
    </div>
  </div>
  <footer> 
    <!-- This is the footer with default 3 divs -->
    <div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam varius sem neque. Integer ornare.</p>
    </div>
    <div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam varius sem neque. Integer ornare.</p>
    </div>
    <div class="footerlinks">
    <?php 
                $no_of_links=3;
                for($link_no=1;$link_no<=$no_of_links;$link_no++){
                                ?>
      <p><a href="#" title="Link">Link <?php echo $link_no ?> </a></p>
     <?php
				}
      ?>
    </div>
  </footer>
</div>
</body>
</html>
