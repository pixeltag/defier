<?php
//make php work in css
$absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
$wp_load = $absolute_path[0] . 'wp-load.php';
require_once($wp_load);
header('Content-type: text/css');
header('Cache-control: must-revalidate');
//make php work in css
//convert php to style file
header("Content-type: text/css; charset: UTF-8");
//convert php to style file
//color Varabile
global $defTheme;
$color_main1 = $defTheme["main_color_one"]["rgba"];
$color_main2 = $defTheme["main_color_two"];
$color_main3 = $defTheme["main_color_three"];
$color_main4 = $defTheme["main_color_four"];
$color_main5 = $defTheme["main_color_five"];
$color_main6 = $defTheme["main_color_six"];
$color_main7 = $defTheme["main_color_seven"];
$color_main8 = $defTheme["main_color_eight"];

?>
@charset "UTF-8";
/**  color Var  **/
/**  color general  **/
/**  Mixin  **/
.stam-topbar {
  background: <?php echo $color_main4; ?>;
  border: 0px;
  line-height: 45px;
  width: 100%;
  position: relative;
  float: left;
}

ul.corpr-contact {
  list-style: none;
}


@media (min-width: 320px) and (max-width: 767px) {
  ul.corpr-contact {
    text-align: center;
  }
}
ul.corpr-contact li {
  margin-right: 15px;
  margin-left: auto;
  display: inline-block;
}

@media (min-width: 768px) and (max-width: 1199px) {
  ul.corpr-contact li {
    margin-right: 5px;
  }
}

ul.corpr-contact li i {
  color: <?php echo $color_main3; ?>;
  font-size: 120%;
  margin-right: 5px;
}

ul.corpr-contact li span {
  font-size: 100%;
  color: <?php echo $color_main6; ?>;
}

ul.stam-social {
  list-style: none;
  float: right;
  margin: 0;
  font-size: 20px;
}

@media (min-width: 320px) and (max-width: 767px) {
  ul.stam-social {
    width: 100%;
  }
}

ul.stam-social li {
  display: inline-block;
  float: left;
  text-align: center;
  margin: 0 8px 0 8px;
  width: auto;
  border: none;
}

@media (min-width: 320px) and (max-width: 767px) {
  ul.stam-social li {
    float: none;
    text-align: center;
  }
}

ul.stam-social li a {
  color: <?php echo $color_main7; ?>;
}

.headerBg {
  background: none repeat scroll 0 0 #fff;
  margin: 0 auto;
  float: left;
  width: 100%;
  border-bottom: 2px solid #f6f6f6;
}

.main-navigation {
  background: #fff;
}

h2#logo {
  margin: 0px auto;
  padding: 0;
  line-height: 100px;
  transition: all 0.6s ease-in-out 0s;
  text-align: center;
  float: none;
}

.fixedScroll {
  overflow: hidden;
  position: fixed;
  width: 100%;
  -webkit-transition: blur 0.5ms ease-in;
  -moz-transition: blur 0.5ms ease-in;
  -ms-transition: blur 0.5ms ease-in;
  transition: blur 0.5ms ease-in;
}

.searchForm {
  position: relative;
}

.searchForm .searchWrapper {
  visibility: hidden;
  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  -ms-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
  opacity: 0;
  width: 100%;
  height: 100%;
  position: fixed;
  box-sizing: border-box;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  display: none;
  z-index: 99999999;
  background: rgba(0, 0, 0, 0.86);
  overflow: auto;
}

.searchForm .searchWrapper .wrapperContentSearch {
  width: 60%;
  margin: 35vh auto;
}

@media (min-width: 320px) and (max-width: 767px) {
  .searchForm .searchWrapper .wrapperContentSearch {
    width: 90%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .searchForm .searchWrapper .wrapperContentSearch {
    width: 75%;
  }
}

.searchForm .searchWrapper .wrapperContentSearch span {
  float: right;
  color: #6c6c6c;
  margin-top: 10px;
}

.searchForm .searchWrapper .wrapperContentSearch h3 {
  color: #737373;
  font-size: 200%;
  margin: 25px 0;
}

@media (min-width: 320px) and (max-width: 767px) {
  .searchForm .searchWrapper .wrapperContentSearch h3 {
    font-size: 150%;
  }
}

.searchForm .searchWrapper .wrapperContentSearch .search-field {
  background: transparent;
  border-bottom: 2px solid #4e4e4e;
  font-style: italic;
  font-size: 260%;
  color: #fff;
  border-top: 0px;
  border-left: 0;
  border-right: 0px;
  border-radius: 0;
  width: 100%;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

@media (min-width: 320px) and (max-width: 767px) {
  .searchForm .searchWrapper .wrapperContentSearch .search-field {
    font-size: 141%;
  }
}

.searchForm .searchWrapper .wrapperContentSearch .search-field:focus {
  outline: none;
  border-bottom: 2px solid #747474;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
}

.searchForm .WrapperVisible {
  visibility: visible;
  opacity: 1;
  display: block;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  -webkit-filter: blur(0px);
  -moz-filter: blur(0px);
  -o-filter: blur(0px);
  -ms-filter: blur(0px);
  filter: blur(0px);
}

.searchForm .searchOpen {
  cursor: pointer;
  width: 100%;
  float: left;
  text-align: center;
}

.searchForm .searchOpen i {
  color: <?php echo $color_main2; ?>;
  font-size: 190%;
  line-height: 117px;
  color: <?php echo $color_main2; ?>;
}

.slidingMenu a i {
  color: <?php echo $color_main2; ?>;
  font-size: 199%;
  line-height: 117px;
}

/******** icon transformer *********/
.iconSearch {
  display: block;
  position: absolute;
  top: 60px;
  right: 0;
  -webkit-transform: translate(-50%, -30%);
  transform: translate(-50%, -30%);
  text-align: center;
  width: 50px;
  height: 50px;
  cursor: pointer;
  z-index: 99999999999;
}

.searchclose {
  text-align: center;
  vertical-align: middle;
  padding-top: 18px;
  cursor: pointer;
  margin-top: 85px;
  right: 8.4%;
  position: absolute;
  cursor: pointer;
  color: #f9f9f9;
  font-size: 4em;
}

[dir="rtl"] .search-form {
  background: transparent url("images/mag.png") no-repeat scroll left 3% center;
}

.search-form {
  background: transparent url("../images/mag.png") no-repeat scroll right 3% center;
}

@media (min-width: 320px) and (max-width: 767px) {
  .search-form {
    background-size: 7%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .search-form {
    background-size: 3%;
  }
}

.search-form input {
  padding-right: 66px;
  padding-left: 0;
}

/******** icon transformer *********/
.backWrapperMenu {
  background: rgba(51, 51, 51, 0.8);
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  opacity: 0;
  visibility: hidden;
  position: fixed;
  z-index: 9999;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.closeSlidingMenu {
  position: fixed;
  left: 26%;
  z-index: 9999999999;
  cursor: pointer;
  display: none;
  top: 0;
  background: <?php echo $color_main3; ?>;
  font-size: 3em;
  width: 65px;
  padding: 0 10px;
  height: 55px;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.closeSlidingMenu:hover {
  color: #fff;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

#slideMenuButton {
  cursor: pointer;
  width: 100%;
  float: right;
  text-align: center;
}

.backWrapperMenu-o {
  opacity: 1;
  visibility: visible;
  -webkit-transition: all 0.8s ease;
  -moz-transition: all 0.8s ease;
  -ms-transition: all 0.8s ease;
  transition: all 0.8s ease;
}

.bgMenuSliding {
  background: #fff;
  position: fixed;
  top: 0;
  left: -30%;
  right: auto;
  width: 26%;
  z-index: 999999;
  bottom: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.bgMenuSliding-o {
  left: 0;
  -webkit-transition: all 0.7s ease;
  -moz-transition: all 0.7s ease;
  -ms-transition: all 0.7s ease;
  transition: all 0.7s ease;
}

.menu-topbar-container {
  float: none;
}

.slidMenu {
  background: #fff;
  z-index: 99999999999999999999;
  position: fixed;
  top: 13px;
  width: 25%;
  right: auto;
  left: -40%;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
  bottom: 13px;
}

.slidMenu .TopbarMenu {
  margin: 0;
  list-style: none;
}

.slidMenu .TopbarMenu li {
  display: block;
  padding: 8px 25px;
  margin-left: 13px;
  margin-right: auto;
  border-bottom: 1px solid #f1f1f1;
}

.slidMenu .TopbarMenu li:after {
  display: none;
}

.slidMenu .TopbarMenu li a {
  font-size: 120%;
  color: <?php echo $color_main6; ?>;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.slidMenu .TopbarMenu li a:hover {
  color: <?php echo $color_main3; ?>;
  padding-left: 25px;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.slidMenu .TopbarMenu li:last-child {
  border-bottom: 0px;
  margin-bottom: 10px;
}

.slidMenu-o {
  left: 0;
  -webkit-transition: all 0.9s ease-in;
  -moz-transition: all 0.9s ease-in;
  -ms-transition: all 0.9s ease-in;
  transition: all 0.9s ease-in;
}

.slideMenuWrapper .widgetTitle {
  display: none;
}

.slideMenuWrapper .about-widget p {
  color: #a2a5a6;
  text-align: justify;
  font-size: 102%;
  display: inline-block;
  font-weight: 200;
  margin: 15px 15px 0 25px;
  line-height: 21px;
}

.slideMenuWrapper .about-widget figure.imgProfile {
  margin-top: 0;
  padding: 0;
  width: 122%;
  border: 8px solid #fff;
  background: #fff;
  overflow: hidden;
  position: relative;
  height: 250px;
}

.slideMenuWrapper .about-widget figure.imgProfile img {
  border-radius: 0;
  margin: 0;
  width: 100%;
  position: absolute;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.slideMenuWrapper .about-widget figure.imgProfile figcaption {
  color: #fff;
  z-index: 999999;
  position: absolute;
  left: 13px;
  bottom: 0;
  right: 0;
}

.slideMenuWrapper .about-widget figure.imgProfile figcaption h2 {
  z-index: 99999999;
  color: #fff;
  position: absolute;
  bottom: 76px;
  left: 35px;
  font-size: 200%;
  width: 100%;
  border-bottom: 1px solid rgba(255, 255, 255, 0.4);
  margin: 0;
}

.slideMenuWrapper .about-widget figure.imgProfile figcaption .aut_social {
  text-align: left;
  margin: 0 30px;
}

.slideMenuWrapper .about-widget figure.imgProfile figcaption .aut_social a {
  text-align: center;
  opacity: 0.8;
  transition: all 0.5s ease;
}

.slideMenuWrapper .about-widget figure.imgProfile figcaption .aut_social a:hover {
  opacity: 1;
  transition: all 0.5s ease;
  color: #fff;
}

.slideMenuWrapper .about-widget figure.imgProfile figcaption .aut_social a:hover span {
  color: #fff;
}

@media (min-width: 320px) and (max-width: 767px) {
  #slidingWidget {
    display: none;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  #slidingWidget {
    display: none;
  }
}

#mobileMenu {
  text-align: center;
}

@media (min-width: 1200px) and (max-width: 1599px) {
  #mobileMenu {
    display: none;
  }
}

@media (min-width: 1600px) {
  #mobileMenu {
    display: none;
  }
}

.headerV2 {
  border-bottom: 0;
}

.headerV2 h2#logo {
  line-height: 70px;
}

.headerV2 header .main-navigation {
  height: 90px;
  position: static;
}

.headerV2 header .main-navigation ul ul {
  top: 90px;
  box-shadow: 0px 0px;
}

.headerV2 header .slidingMenu a i {
  line-height: 90px;
}

.headerV2 header .searchForm .searchOpen i {
  line-height: 90px;
}

.headerV2 header .main-navigation div ul.menu li a {
  line-height: 90px;
  padding: 0 10px;
}

.headerV2 header .main-navigation div ul.menu li a i {
  line-height: 90px;
}

.headerV2 header .main-navigation div ul.menu li ul.sub-menu {
  width: 19%;
}

.headerV2 header .main-navigation div ul.menu li.mega-menu .mega-cat-more-links {
  width: 18%;
}

.headerV2 header .main-navigation div .mega-menu-block .mega-menu-content h3.post-box-title a {
  line-height: 25px;
}

.headerV2 header .main-navigation div ul.menu li .mega-menu-block {
  position: absolute;
  top: 90px;
  border-top: 0px;
  z-index: 9999999999;
}

.headerV2 header .main-navigation div ul.menu li .mega-menu-block .post-thumbnail a figure figcaption i {
  line-height: 75px;
}

.headerV2 header a.mega-menu-link {
  line-height: 25px;
}

.headerV2 header .mega-check-also ul {
  width: 100% !important;
}

.headerV2 header .mega-check-also ul li h3.post-box-title {
  width: 47%;
  top: 0px;
  margin: 0;
  display: inline-block;
  float: none;
}

.headerV2 header .mega-check-also ul li h3.post-box-title a {
  margin-top: 0px;
}

.headerV2 header .mega-check-also ul .post-thumbnail {
  border: 0px solid #ddd;
  width: 50%;
  display: inline-block;
}

.headerV2 header .mega-check-also ul .post-thumbnail a figure {
  width: 100% !important;
}

.headerV2 header .mega-check-also .mega-cat-more-links {
  width: 18%;
}

.headerV2 header .main-navigation div ul.menu li ul li ul {
  width: 100%;
}

.headerV3 {
  background: <?php echo $color_main2; ?>;
  border-bottom: 0;
}

.headerV3 #slideMenuButton {
  cursor: pointer;
  width: auto;
}

.headerV3 .searchForm .searchOpen {
  cursor: pointer;
  float: right;
  width: auto;
  text-align: center;
  display: inline-block;
  margin-right: 15%;
}

.headerV3 h2#logo {
  line-height: 70px;
}

.headerV3 header .main-navigation {
  height: 90px;
  position: static;
  background: transparent;
}

.headerV3 header .main-navigation ul ul {
  top: 90px;
}

.headerV3 header .slidingMenu a i {
  line-height: 90px;
  color: #fff;
}

.headerV3 header .searchForm .searchOpen i {
  line-height: 90px;
  color: #fff;
}

.headerV3 header .main-navigation div ul.menu li a {
  line-height: 90px;
  padding: 0 10px;
  color: #fff;
}

.headerV3 header .main-navigation div ul.menu li a:hover {
  background: #fff;
}

.headerV3 header .main-navigation div ul.menu li a:hover i {
  color: <?php echo $color_main1; ?>;
}

.headerV3 header .darkMenu div ul.menu li ul.sub-menu li a {
  color: #fff !important;
}

.headerV3 header .darkMenu div ul.menu li ul.sub-menu li a:hover {
  color: <?php echo $color_main3; ?> !important;
}

.headerV3 header .darkMenu div ul.menu li a:hover {
  background: <?php echo $color_main1; ?>;
  color: #fff;
}

.headerV3 header .darkMenu div ul.menu li a:hover i {
  color: #fff;
}

.headerV3 header .main-navigation div ul.menu li a i {
  line-height: 90px;
}

.headerV3 header .main-navigation div ul.menu li ul.sub-menu li a {
  color: <?php echo $color_main1; ?>;
}

.headerV3 header .main-navigation div ul.menu li ul.sub-menu li a:hover {
  background: transparent;
}

.headerV3 header .main-navigation ul.menu li ul.sub-menu {
  width: 19%;
  color: <?php echo $color_main1; ?>;
}

.headerV3 header .main-navigation ul.menu li.mega-menu .mega-cat-more-links {
  width: 18%;
}

.headerV3 header .main-navigation .mega-menu-block .mega-menu-content h3.post-box-title a:hover {
  color: #fff !important;
}

.headerV3 header .subhover {
  color: #fff;
}

.headerV3 header .main-navigation div ul.menu li .mega-menu-block {
  position: absolute;
  top: 90px;
  border-top: 0px;
}

.headerV3 header .main-navigation div ul.menu li .mega-menu-block .post-thumbnail a figure figcaption i {
  line-height: 75px;
}

.headerV3 header .mega-check-also ul {
  width: 100% !important;
}

.headerV3 header .mega-check-also ul li h3.post-box-title {
  width: 47%;
  top: 0px;
  margin: 0;
  display: inline-block;
  float: none;
}

.headerV3 header .mega-check-also ul li h3.post-box-title a {
  margin-top: 0px;
}

.headerV3 header .mega-check-also ul .post-thumbnail {
  border: 0px solid #ddd;
  width: 50%;
  display: inline-block;
}

.headerV3 header .mega-check-also ul .post-thumbnail a figure {
  width: 100%;
}

.headerV3 header .mega-check-also .mega-cat-more-links {
  width: 18%;
}

.headerV3 header .main-navigation div ul.menu li ul li ul {
  width: 100%;
}

.headerV3 header .darkMenu div ul.menu li a {
  color: #fff;
}

.headerV3 .closeSlidingMenu {
  top: 0vh;
  left: 26%;
}

.headerV3 #socialMediaList {
  float: right;
  height: 90px;
  margin-left: 35px;
  width: 50px;
}

.headerV3 #socialMediaList ul {
  line-height: 3.4;
  text-align: left;
  float: right;
  display: inline;
  margin: 0;
  padding: 0;
  padding-right: 30px;
  list-style: none;
  font-size: 200%;
}

.headerV3 #socialMediaList ul li {
  display: inline-block;
  position: relative;
  padding: 0;
  cursor: pointer;
  color: #fff;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
}

.headerV3 #socialMediaList ul li:hover {
  color: #fff;
}

.headerV3 #socialMediaList ul li ul {
  padding: 0;
  position: absolute;
  top: 90px;
  right: -32px;
  width: 200px;
  z-index: 9999999999999;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  display: none;
}

.headerV3 #socialMediaList ul li ul ul {
  display: block;
}

.headerV3 #socialMediaList ul li ul li {
  background: <?php echo $color_main1; ?>;
  display: block;
  color: #fff;
  width: 100%;
  margin: 0;
  font-size: 40%;
  border-bottom: 1px solid <?php echo $color_main2; ?>;
  line-height: 0px;
}

.headerV3 #socialMediaList ul li ul li:last-child {
  border-bottom: 0px;
  -webkit-border-radius: 0 0 3px 3px;
  -moz-border-radius: 0 0 3px 3px;
  -ms-border-radius: 0 0 3px 3px;
  border-radius: 0 0 3px 3px;
}

.headerV3 #socialMediaList ul li ul li:hover {
  background: #fff;
}

.headerV3 #socialMediaList ul li ul li:hover a span {
  color: <?php echo $color_main1; ?>;
}

.headerV3 #socialMediaList ul li ul li:hover a i {
  color: <?php echo $color_main1; ?>;
}

.headerV3 #socialMediaList ul li ul li a {
  color: #fff;
  line-height: 40px;
  padding: 0;
  display: block;
  width: 100%;
  text-align: left;
}

.headerV3 #socialMediaList ul li ul li a i {
  text-align: center;
  font-size: 100%;
  margin-right: 15px;
  margin-left: 10px;
  width: 40px;
  line-height: 2;
}

.headerV3 #socialMediaList ul li ul li a span {
  font-size: 60%;
  color: #fff;
}

.headerV3 #socialMediaList ul li ul li #ho-facebook {
  color: #4869af;
}

.headerV3 #socialMediaList ul li ul li #ho-twitter {
  color: #38acd7;
}

.headerV3 #socialMediaList ul li ul li #ho-youtube {
  color: #d24c40;
}

.headerV3 #socialMediaList ul li ul li #ho-rss {
  color: #db973b;
}

.headerV3 #socialMediaList ul li ul li #ho-vimeo {
  color: #26b1cd;
}

.headerV3 #socialMediaList ul li ul li #ho-skype {
  color: #0fabd1;
}

.headerV3 #socialMediaList ul li ul li #ho-instagram {
  color: #5182a7;
}

.headerV3 #socialMediaList ul li ul li #ho-google-plus {
  color: #d25c4b;
}

.headerV3 #socialMediaList ul li ul li #ho-pinterest {
  color: #c3282b;
}

.headerV3 #socialMediaList ul li ul li #ho-linkedin {
  color: #2280b1;
}

ul.foot-social {
  text-align: right;
  color: <?php echo $color_main6; ?>;
  font-size: 20px;
  list-style: outside none none;
  margin: 0;
  padding: 0;
}

@media (min-width: 320px) and (max-width: 767px) {
  ul.foot-social {
    text-align: center;
    margin-top: 20px;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  ul.foot-social {
    text-align: center;
    margin-top: 20px;
  }
}

ul.foot-social li {
  display: inline-block;
  margin: 0 5px;
}

ul.foot-social li a {
  color: #ddd;
}

ul.foot-social li a:hover {
  /* do somethinfg */
}

ul.foot-social li #ho-facebook:hover {
  color: #4869af;
}

ul.foot-social li #ho-twitter:hover {
  color: #38acd7;
}

ul.foot-social li #ho-youtube:hover {
  color: #d24c40;
}

ul.foot-social li #ho-rss:hover {
  color: #db973b;
}

ul.foot-social li #ho-vimeo:hover {
  color: #26b1cd;
}

ul.foot-social li #ho-skype:hover {
  color: #0fabd1;
}

ul.foot-social li #ho-instagram:hover {
  color: #5182a7;
}

ul.foot-social li #ho-google-plus:hover {
  color: #d25c4b;
}

ul.foot-social li #ho-pinterest:hover {
  color: #c3282b;
}

ul.foot-social li #ho-linkedin:hover {
  color: #c3282b;
}

.mCSB_inside > .mCSB_container {
  margin-right: 0px !important;
}

.mCSB_outside + .mCS-minimal.mCSB_scrollTools_vertical, .mCSB_outside + .mCS-minimal-dark.mCSB_scrollTools_vertical {
  width: 4px;
}

.about-widget .aut_social {
  margin: 0 30px;
}

.about-widget .aut_social a {
  display: inline-block;
  font-size: 12px;
  margin: 0 5px;
}

.about-widget .aut_social a i {
  padding-right: 5px;
  font-size: 18px;
}

.aut_facebook {
  color: #597ac7;
}

.aut_twitter {
  color: #5bbcec;
}

.aut_google {
  color: #dc4a38;
}

.aut_linkedin {
  color: #597ac7;
}

header {
  position: relative;
  float: left;
  width: 100%;
}

h1.site-title {
  text-align: center;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  font-weight: 200;
  text-transform: capitalize;
  z-index: 20000001;
  color: #222;
  font-size: 3em;
}

h1.site-title a {
  font-weight: 200;
  color: #777;
}

h1.site-title:first-letter {
  font-weight: 800;
  color: <?php echo $color_main3; ?>;
}

.show {
  display: block;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.headerV1 .main-navigation li {
  float: none;
  position: relative;
}

.main-navigation {
  position: relative;
}

@media (min-width: 320px) and (max-width: 767px) {
  .main-navigation {
    display: none;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .main-navigation {
    display: none;
  }
}

.main-navigation ul ul {
  top: 75px;
}

.main-navigation div ul.menu {
  list-style: none;
  margin: 0;
  padding-left: 0;
  text-align: center;
  padding: 0;
  line-height: 0;
}

.main-navigation div ul.menu li {
  position: static;
  display: inline-block;
}

.main-navigation div ul.menu li a {
  padding: 0 15px;
  line-height: 73px;
  font-weight: 400;
  text-transform: capitalize;
  transition: all 0.5s ease;
  color: #222;
  cursor: pointer;
}

.main-navigation div ul.menu li a i {
  font-size: 44%;
  position: static;
  margin-left: 5px;
  margin-right: auto;
  float: right;
  line-height: 75px;
}

.main-navigation div ul.menu li a .menu-icon {
  float: left;
}

.main-navigation div ul.menu li a .menu-icon i {
  line-height: 50px;
  font-size: 85%;
  margin-left: 5px;
  margin-right: 5px;
  float: none;
  position: relative;
  color: <?php echo $color_main3; ?>;
  top: 0;
  right: 0;
}

.main-navigation div ul.menu li a:hover {
  color: #2b364a;
  font-weight: 400;
  transition: all 0.5s ease;
}

.main-navigation div ul.menu li a:hover i {
  color: #498ba3;
}

.main-navigation div ul.menu li a:active {
  color: #2b364a;
  font-weight: 400;
}

.main-navigation div ul.menu li a:active i {
  color: #498ba3;
}

.main-navigation div ul.menu li a:focus {
  color: #2b364a;
  font-weight: 400;
}

.main-navigation div ul.menu li a:focus i {
  color: #498ba3;
}

.main-navigation div ul.menu li .mega-cat-more-links {
  width: 18%;
}

.main-navigation div ul.menu li ul.sub-menu, .main-navigation div ul.menu li .mega-menu-block {
  background: #fff;
  width: 19%;
  border: 1px solid #ededed;
  border-bottom: 3px solid <?php echo $color_main2; ?>;
}

.main-navigation div ul.menu li ul.sub-menu li, .main-navigation div ul.menu li .mega-menu-block li {
  width: 100%;
  position: relative;
  text-align: left;
  border-bottom: 1px solid #f1f1f1;
}

.main-navigation div ul.menu li ul.sub-menu li:last-child, .main-navigation div ul.menu li .mega-menu-block li:last-child {
  border-bottom: 0px;
}

.main-navigation div ul.menu li ul.sub-menu li a, .main-navigation div ul.menu li .mega-menu-block li a {
  transition: all 0.5s ease;
  font-size: 100%;
  line-height: 45px;
  width: 100%;
}

.main-navigation div ul.menu li ul.sub-menu li a .fa-minus, .main-navigation div ul.menu li ul.sub-menu li a .fa-chevron-right, .main-navigation div ul.menu li .mega-menu-block li a .fa-minus, .main-navigation div ul.menu li .mega-menu-block li a .fa-chevron-right {
  line-height: 45px;
  margin-right: 5px;
  margin-left: auto;
}

.main-navigation div ul.menu li ul.sub-menu li a:hover, .main-navigation div ul.menu li .mega-menu-block li a:hover {
  transition: all 0.5s ease;
  width: 100%;
}

.main-navigation div ul.menu li ul.sub-menu li ul.sub-menu, .main-navigation div ul.menu li .mega-menu-block li ul.sub-menu {
  top: -1px;
  background: #fff;
  width: 100%;
}

.main-navigation div ul.menu li .mega-menu-block {
  top: 75px;
  width: 100%;
  left: 0;
  right: 0;
  background: rgba(255, 255, 255, 0.9);
  border: 1px solid #ededed;
  border-top: 3px solid <?php echo $color_main2; ?>;
  z-index: 9999999999;
}

.main-navigation div .mega-menu-block {
  display: none;
  position: absolute;
  z-index: 99999999999999999;
}

.main-navigation div .mega-menu-block .mega-menu-content {
  padding: 3% 3% 2% 3%;
  z-index: 999;
}

.main-navigation div .mega-menu-block .mega-menu-content ul.defier-posts-list {
  float: left;
  position: relative;
  z-index: 99999;
  padding: 0;
  display: block;
  top: 0 !important;
}

.main-navigation div .mega-menu-block .mega-menu-content ul.defier-posts-list figure.effect-thumbDefier {
  height: 225px;
}

.main-navigation div .mega-menu-block .mega-menu-content ul.defier-posts-list figure.effect-thumbDefier figcaption h2 a.quarterSize {
  font-size: 75%;
}

.main-navigation div .mega-menu-block .mega-menu-content ul.defier-posts-list figure.effect-thumbDefier figcaption h2 a {
  color: #fff !important;
}

.main-navigation div .mega-menu-block .mega-menu-content ul.defier-posts-list figure.effect-thumbDefier figcaption h2 a:hover {
  background: transparent;
  color: #fff !important;
}

.main-navigation div .mega-menu-block .mega-menu-content ul.defier-posts-list figure.effect-thumbDefier figcaption .meta-label {
  bottom: 25px;
  top: auto;
  text-align: center;
}

.main-navigation div .mega-menu-block .mega-menu-content ul.defier-posts-list figure.effect-thumbDefier figcaption p {
  font-size: 80%;
  text-align: center;
  right: auto;
  bottom: -10px;
  height: 20px;
  top: auto;
  padding: 0;
}

.main-navigation div .mega-menu-block .mega-menu-content ul.defier-posts-list figure.effect-thumbDefier figcaption p i {
  text-align: center;
  position: relative;
}

.main-navigation div .mega-menu-block .mega-menu-content ul.defier-posts-list .post-thumbnail {
  margin: 0;
  padding: 0;
  border: 0px;
  border-radius: 0;
}

.main-navigation div .mega-menu-block .mega-menu-content ul.defier-posts-list .post-thumbnail a {
  padding: 0;
  width: auto;
}

.main-navigation div .mega-menu-block .mega-menu-content ul.defier-posts-list .post-thumbnail a figure figcaption i {
  float: left;
  position: relative;
  left: 11px;
  top: -23px;
  font-size: 150%;
  color: #ccc;
}

.main-navigation div .mega-menu-block .mega-menu-content ul.defier-posts-list h3.post-box-title {
  font-size: 110%;
  text-align: left;
  margin-top: 10px;
}

.main-navigation div .mega-menu-block .mega-menu-content ul.defier-posts-list h3.post-box-title a {
  line-height: 140%;
  margin-bottom: 15px;
  color: <?php echo $color_main5; ?>;
  font-size: 102%;
  position: relative;
  display: inline-block;
}

.main-navigation div .mega-menu-block .mega-menu-content ul.defier-posts-list h3.post-box-title a:hover {
  color: <?php echo $color_main2; ?>;
}

.main-navigation div .mega-menu-block .mega-menu-content .mega-check-also {
  float: left;
  font-size: 100%;
}

.main-navigation div .mega-menu-block .mega-menu-content .mega-check-also h3 {
  font-size: 110%;
  position: absolute;
  float: left;
  width: 60%;
  left: 34%;
  top: 0;
  margin: 0;
}

.main-navigation div .mega-menu-block .mega-menu-content .mega-check-also h3 a {
  padding: 0 10px 0 18px;
  line-height: 160%;
  font-size: 100%;
}

.main-navigation div .mega-menu-block .mega-menu-content .mega-check-also ul {
  width: 100%;
  background: transparent;
  display: block;
  top: 0px;
}

.main-navigation div .mega-menu-block .mega-menu-content .mega-check-also ul li {
  width: 50%;
  float: left;
  margin: 0 0 15px 0;
  position: relative;
  padding: 0;
  border: 0px;
}

.main-navigation div .mega-menu-block .mega-menu-content .mega-check-also ul li .post-box-title {
  text-align: left;
}

.main-navigation div .mega-menu-block .mega-menu-content .mega-check-also ul li .post-box-title a {
  margin-top: 0px;
  color: <?php echo $color_main5; ?>;
  font-size: 90%;
}

.main-navigation div .mega-menu-block .mega-menu-content .mega-check-also ul li .post-box-title a:hover {
  background: transparent;
  color: <?php echo $color_main2; ?> !important;
}

.main-navigation div .mega-menu-block .mega-menu-content .mega-check-also ul li .post-thumbnail {
  margin: 0;
  overflow: hidden;
  border: 0px solid #ddd;
  float: left;
  width: 35%;
  display: inline-block;
}

.main-navigation div .mega-menu-block .mega-menu-content .mega-check-also ul li .post-thumbnail a {
  padding: 0;
  width: auto;
}

.main-navigation div .mega-menu-block .mega-menu-content .mega-check-also ul li .post-thumbnail a figure.megaMenuThumb {
  overflow: hidden;
  height: 10vh;
  position: relative;
  width: 100%;
  border-radius: 2px;
  background: <?php echo $color_main2; ?>;
}

.main-navigation div .mega-menu-block .mega-menu-content .mega-check-also ul li .post-thumbnail a figure.megaMenuThumb figcaption {
  font-size: 70%;
  color: #fff;
  background: rgba(0, 0, 0, 0.5);
  height: 28px;
  top: 0;
  width: 100%;
  padding: 0;
  padding: 0 10px 0 15px;
  line-height: 29px;
  font-weight: 200;
  position: absolute;
  left: 0px;
}

.main-navigation div .mega-menu-block .mega-menu-content .mega-check-also ul li .post-thumbnail a figure.megaMenuThumb figcaption p {
  width: 100%;
  font-size: 100%;
}

.main-navigation div .mega-menu-block .mega-menu-content .mega-check-also ul li .post-thumbnail a figure.megaMenuThumb figcaption p i {
  float: left;
  position: relative;
  left: -5px;
  top: -23px;
  font-size: 150%;
  color: #ccc;
}

.main-navigation div .mega-menu-block .mega-menu-content .mega-check-also ul li h3 {
  font-size: 110%;
}

.main-navigation .mega-cat-wrapper figure {
  height: 35vh !important;
}

.main-navigation .mega-cat-wrapper figure img {
  height: 35vh !important;
  width: 100%;
}

.main-navigation .menu-item-has-children .mega-cat-wrapper {
  width: 80%;
  float: right;
}

.main-navigation .menu-item-has-children .menu-sub-content .mega-cat-more-links {
  left: 3%;
  top: 35px;
}

.main-navigation ul.mega-cat-more-links {
  opacity: 1;
  background: transparent;
}

.main-navigation ul.mega-cat-more-links li {
  border-bottom: 1px solid #ddd;
}

.main-navigation .menucol {
  float: left !important;
  line-height: 45px;
  margin-right: 5px;
}

.main-navigation .menucor {
  float: right !important;
  line-height: 45px;
}

.main-navigation .subhover {
  color: #498ba3 !important;
  font-weight: 400;
  transition: all 0.5s ease;
}

.main-navigation .subhover i {
  color: #498ba3;
}

/******************************darkMenu*******************************/
.darkMenu div ul.menu li a {
  color: <?php echo $color_main6; ?>;
  cursor: pointer;
}

.darkMenu div ul.menu li a .menu-icon i {
  color: <?php echo $color_main3; ?>;
}

.darkMenu div ul.menu li a:hover {
  color: #cfe2e9;
}

.darkMenu div ul.menu li a:hover i {
  color: #498ba3;
}

.darkMenu div ul.menu li a:active {
  color: #cfe2e9;
}

.darkMenu div ul.menu li a:active i {
  color: #498ba3;
}

.darkMenu div ul.menu li a:focus {
  color: #cfe2e9;
}

.darkMenu div ul.menu li a:focus i {
  color: #498ba3;
}

.darkMenu div ul.menu li ul.sub-menu, .darkMenu div ul.menu li .mega-menu-block {
  background: <?php echo $color_main1; ?>;
  border: 1px solid <?php echo $color_main2; ?>;
  border-bottom: 2px solid <?php echo $color_main2; ?>;
}

.darkMenu div ul.menu li ul.sub-menu li, .darkMenu div ul.menu li .mega-menu-block li {
  border-bottom: 1px solid #212b3a;
}

.darkMenu div ul.menu li ul.sub-menu li a, .darkMenu div ul.menu li .mega-menu-block li a {
  color: white;
}

.darkMenu div ul.menu li ul.sub-menu li a .fa-minus, .darkMenu div ul.menu li ul.sub-menu li a .fa-chevron-right, .darkMenu div ul.menu li .mega-menu-block li a .fa-minus, .darkMenu div ul.menu li .mega-menu-block li a .fa-chevron-right {
  line-height: 45px;
}

.darkMenu div ul.menu li ul.sub-menu li a:hover, .darkMenu div ul.menu li .mega-menu-block li a:hover {
  color: #fff;
}

.darkMenu div ul.menu li ul.sub-menu li ul.sub-menu, .darkMenu div ul.menu li .mega-menu-block li ul.sub-menu {
  background: <?php echo $color_main1; ?>;
  width: 100%;
}

.darkMenu div ul.menu li .mega-menu-block {
  background: <?php echo $color_main1; ?>;
  border: 1px solid <?php echo $color_main1; ?>;
  border-top: 2px solid <?php echo $color_main3; ?>;
}

.darkMenu div .mega-menu-block .mega-menu-content .post-thumbnail {
  overflow: hidden;
}

.darkMenu div .mega-menu-block .mega-menu-content .post-thumbnail a {
  margin: 0;
  width: 100%;
}

.darkMenu div .mega-menu-block .mega-menu-content .post-thumbnail a figure {
  background: <?php echo $color_main2; ?>;
}

.darkMenu div .mega-menu-block .mega-menu-content .post-thumbnail a figure figcaption time i {
  color: #fff;
  margin-right: 10px;
}

.darkMenu div .mega-menu-block .mega-menu-content h3.post-box-title {
  text-align: left;
}

.darkMenu div .mega-menu-block .mega-menu-content h3.post-box-title a {
  color: #cfe2e9;
}

.darkMenu div .mega-menu-block .mega-menu-content h3.post-box-title a:hover {
  color: <?php echo $color_main2; ?>;
}

.darkMenu div .mega-menu-block .hotspot figure {
  height: 34vh !important;
}

.darkMenu div .mega-menu-block .mega-check-also {
  float: left;
  font-size: 100%;
  /* @include left(45%); */
}

.darkMenu div .mega-menu-block .mega-check-also h3 {
  font-size: 110%;
  position: absolute;
  float: left;
  width: 50%;
  top: 0;
  margin: 0;
}

.darkMenu div .mega-menu-block .mega-check-also h3 a {
  padding: 0 10px 0 18px;
  line-height: 160%;
  font-size: 100%;
}

.darkMenu div .mega-menu-block .mega-check-also ul {
  width: 100%;
  background: transparent;
  display: block;
  top: 0px;
}

.darkMenu div .mega-menu-block .mega-check-also ul li {
  width: 50%;
  float: left;
  margin: 0 0 15px 0;
  position: relative;
  padding: 0;
  border: 0px;
}

.darkMenu div .mega-menu-block .mega-check-also ul li .post-box-title a.mega-menu-link {
  margin-top: 0px;
  color: #fff;
}

.darkMenu div .mega-menu-block .mega-check-also ul li .post-box-title a.mega-menu-link:hover {
  background: transparent;
  color: #f9f9f9 !important;
}

.darkMenu div .mega-menu-block .mega-check-also ul li .post-thumbnail {
  overflow: hidden;
  margin: 0;
  border: 0px solid #ddd;
  float: left;
  width: 35%;
  display: inline-block;
}

.darkMenu div .mega-menu-block .mega-check-also ul li .post-thumbnail a.mega-menu-link {
  width: auto;
}

.darkMenu div .mega-menu-block .mega-check-also ul li .post-thumbnail a {
  padding: 0;
}

.darkMenu div .mega-menu-block .mega-check-also ul li .post-thumbnail a figure.megaMenuThumb {
  overflow: hidden;
  height: 10vh;
  position: relative;
  width: 66%;
  border-radius: 2px;
  background: <?php echo $color_main2; ?>;
}

.darkMenu div .mega-menu-block .mega-check-also ul li .post-thumbnail a figure.megaMenuThumb figcaption {
  font-size: 70%;
  color: #fff;
  height: 28px;
  top: 0;
  width: auto;
  padding: 0 10px 0 15px;
  line-height: 29px;
  font-weight: 200;
  position: absolute;
  left: 0px;
}

.darkMenu div .mega-menu-block .mega-check-also ul li .post-thumbnail a figure.megaMenuThumb figcaption i {
  float: left;
  position: relative;
  left: -5px;
  top: -23px;
  font-size: 150%;
  color: #ccc;
}

.darkMenu div .mega-menu-block .mega-check-also ul li h3 {
  font-size: 110%;
}

.darkMenu .subhover {
  color: <?php echo $color_main3; ?> !important;
}

.main-navigation ul ul ul {
  top: 0px;
}

.slidMenu ul.nav-menu-resp {
  float: left;
}

.slidMenu ul.nav-menu-resp li {
  border-bottom: 1px solid <?php echo $color_main4; ?>;
  list-style: outside none none;
  text-align: left;
  width: 100%;
  border-left: 0;
  float: left;
  position: relative;
}

.slidMenu ul.nav-menu-resp li a {
  padding-left: 20px;
  color: #6c6c6c;
  font-size: 110%;
  width: 100%;
  display: block;
  top: 0;
  bottom: 0;
  padding: 20px 18px;
  line-height: 5px;
  z-index: 99999999999999;
}

.slidMenu ul.nav-menu-resp li a:hover {
  background: <?php echo $color_main2; ?>;
  color: #fff;
}

.slidMenu ul.nav-menu-resp li .openInde {
  color: <?php echo $color_main2; ?>;
  display: block !important;
  font-size: 70%;
  line-height: 1;
  background: <?php echo $color_main4; ?>;
  position: absolute;
  float: right;
  text-align: center;
  height: 39px;
  cursor: pointer;
  right: 0;
  left: auto;
  top: 0px;
  padding: 19px;
  height: 45px;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.slidMenu ul.nav-menu-resp li .closeInde {
  color: <?php echo $color_main4; ?>;
  background: <?php echo $color_main3; ?>;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
  cursor: pointer;
}

.slidMenu ul.nav-menu-resp li ul {
  background: <?php echo $color_main2; ?>;
  float: left;
  margin: 0;
  display: none;
  padding: 0;
  width: 100%;
}

.slidMenu ul.nav-menu-resp li ul li {
  border-left: 0;
  border-bottom: 0px;
  padding-left: 20px;
}

.slidMenu ul.nav-menu-resp li ul li a {
  color: <?php echo $color_main4; ?>;
}

#slidMenu2 {
  width: 40%;
  top: 0;
  height: 100vh;
}

@media (min-width: 320px) and (max-width: 767px) {
  #slidMenu2 {
    width: 80%;
  }
}

#closeMobileMenu {
  left: 1039%;
}

.bgMobileMenu {
  width: 80%;
  left: -90%;
  right: auto;
}

.bgMobileMenu-o {
  width: 80%;
  left: 0;
  right: auto;
}

.mega-menu-post.defier-posts-list {
  margin: 0;
}

.mega-menu-post.defier-posts-list li.defier-first-post {
  border-bottom: 1px solid #f1f1f1;
  border-top: 0px;
  display: inline-block;
  margin-bottom: 10px;
  width: 25% !important;
  float: left;
  padding: 0 8px;
  border: 0;
}

@media (min-width: 320px) and (max-width: 767px) {
  .mega-menu-post.defier-posts-list li.defier-first-post {
    height: auto !important;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .mega-menu-post.defier-posts-list li.defier-first-post {
    height: auto !important;
  }
}

.mega-menu-post.defier-posts-list li.defier-first-post .miHeight {
  height: 230px !important;
}

.mega-menu-post.defier-posts-list li.defier-first-post figure.effect-thumbDefier time {
  top: 5%;
}

.mega-menu-post.defier-posts-list li.defier-first-post figure.effect-thumbDefier h2 {
  padding: 0 10px;
}

.mega-menu-post.defier-posts-list li.defier-first-post figure.effect-thumbDefier h2 a.mega-menu-link {
  font-size: 70%;
  text-align: center;
  padding: 0 10px !important;
  line-height: 125%;
}

.mega-menu-post.defier-posts-list li.defier-first-post figure.effect-thumbDefier p {
  font-size: 75%;
}

@media (min-width: 320px) and (max-width: 767px) {
  .mega-menu-post.defier-posts-list li.defier-first-post figure.effect-thumbDefier p {
    margin: 0 0 5px 0;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .mega-menu-post.defier-posts-list li.defier-first-post figure.effect-thumbDefier p {
    margin: 0 0 5px 0;
  }
}

.mega-menu-post.defier-posts-list li.defier-first-post figure.effect-thumbDefier .data-label {
  width: 100%;
  color: #ddd;
}

.mega-menu-post.defier-posts-list li.defier-first-post:first-child {
  border: 0;
}

.mega-menu-post.defier-posts-list .post-thumbnail, .mega-menu-post.defier-posts-list .post-box-title {
  width: 100%;
  padding: 0;
}

.mainNavigation.nopadding {
  position: unset;
  position: static;
}

@media (min-width: 320px) and (max-width: 767px) {
  .mainNavigation.nopadding {
    display: none;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .mainNavigation.nopadding {
    display: none;
  }
}

.headerV3 header .main-navigation ul.menu li.subhover a {
  background: #fff;
  color: <?php echo $color_main2; ?>;
}

.headerV3 header .main-navigation ul.menu li.subhover ul a {
  background: transparent;
  color: #fff;
}

.headerV3 header .main-navigation ul.menu ul {
  z-index: 999999999999999999;
}

.headerV3 header .main-navigation ul.menu ul a {
  background: transparent !important;
  color: #fff;
}

.headerV3 header .main-navigation ul.menu ul.openDown {
  opacity: 1;
  display: block;
  z-index: 999999999999999999;
}

.headerV3 header .main-navigation.darkMenu ul.menu li.subhover a {
  background: <?php echo $color_main1; ?>;
  color: #fff;
}

.headerV3 header .main-navigation.darkMenu ul.menu li.subhover ul a {
  background: transparent;
  color: #fff;
}

.headerV3 header .main-navigation.darkMenu ul.menu ul {
  z-index: 999999999999999999;
}

.headerV3 header .main-navigation.darkMenu ul.menu ul a {
  background: transparent !important;
  color: #fff;
}

.headerV3 header .main-navigation.darkMenu ul.menu ul.openDown {
  opacity: 1;
  display: block;
  z-index: 999999999999999999;
}

.headerV1 .menu-main-navigation-container {
  background: #f9f9f9;
}

.headerV2 {
  border-bottom: 1px solid #ededed;
  -webkit-box-shadow: 0px 0px 29px -7px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 0px 29px -7px rgba(0, 0, 0, 0.15);
  -o-box-shadow: 0px 0px 29px -7px rgba(0, 0, 0, 0.15);
  -ms-box-shadow: 0px 0px 29px -7px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 0px 29px -7px rgba(0, 0, 0, 0.15);
}

.headerV2 .main-navigation {
  background: transparent;
}

header .main-navigation div ul.menu li ul.sub-menu li a span.menu-icon i {
  line-height: 0;
}

.slidMenu2 {
  left: -90%;
  right: auto;
}

.slidMenu2 {
  left: -90%;
  right: auto;
}

.slidMenu2-o {
  left: 0;
  right: auto;
}

nav.main-navigation .current_page_item {
  color: #fff;
  line-height: 90px;
  padding: 0 10px;
  cursor: pointer;
  font-weight: 400;
  text-transform: capitalize;
  transition: all 0.5s ease;
}

nav.main-navigation .current_page_item a {
  float: left;
  color: #fff;
}

/* Arrows */
.fa-arrow-left2,
.fa-arrow-right2 {
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  position: absolute;
  top: 50%;
  display: block;
  width: 20px;
  height: 20px;
  padding: 0;
  -webkit-transform: translate(0, -50%);
  -ms-transform: translate(0, -50%);
  transform: translate(0, -50%);
  cursor: pointer;
  color: #fff;
  border: none;
  outline: none;
  background: transparent;
}

.fa-arrow-left2:hover,
.fa-arrow-left2:focus,
.fa-arrow-right2:hover,
.fa-arrow-right2:focus {
  color: transparent;
  outline: none;
  background: transparent;
}

.fa-arrow-left2:hover:before,
.fa-arrow-left2:focus:before,
.fa-arrow-right2:hover:before,
.fa-arrow-right2:focus:before {
  opacity: 1;
}

.fa-arrow-left2.slick-disabled:before,
.fa-arrow-right2.slick-disabled:before {
  opacity: .25;
}

.fa-arrow-left2 {
  left: -25px;
}

[dir='rtl'] .fa-arrow-left2 {
  right: -25px;
  left: auto;
}

.fa-arrow-left2:before {
  content: "\e094";
}

[dir='rtl'] .fa-arrow-left2:before {
  content: "\e094";
}

.fa-arrow-right2 {
  right: -25px;
}

[dir='rtl'] .fa-arrow-right2 {
  right: auto;
  left: -25px;
}

.fa-arrow-right2:before {
  content: "\e095";
}

/* Dots */
.slick-dotted.slick-slider {
  margin-bottom: 0px;
}

.slick-dots {
  position: absolute;
  bottom: -25px;
  display: block;
  width: 100%;
  padding: 0;
  margin: 0;
  list-style: none;
  text-align: center;
}

@media (min-width: 320px) and (max-width: 767px) {
  .slick-dots {
    width: 100% !important;
    top: 110px;
    right: 0 !important;
  }
  .slick-dots li {
    padding: 0 0 !important;
    float: none !important;
  }
}

.slick-dots li {
  position: relative;
  display: inline-block;
  width: 20px;
  height: 20px;
  margin: 0 5px;
  padding: 0;
  cursor: pointer;
}

.slick-dots li button {
  font-size: 0;
  line-height: 0;
  display: block;
  width: 20px;
  height: 20px;
  padding: 5px;
  cursor: pointer;
  color: transparent;
  border: 0;
  outline: none;
  background: #ededed;
}

.slick-dots li button:hover,
.slick-dots li button:focus {
  outline: none;
}

.slick-dots li button:hover:before,
.slick-dots li button:focus:before {
  opacity: 1;
}

.slick-dots li button:before {
  font-family: 'slick';
  font-size: 6px;
  line-height: 20px;
  position: absolute;
  top: 0;
  left: 0;
  width: 20px;
  height: 20px;
  content: '•';
  text-align: center;
  opacity: .25;
  color: black;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.slick-dots li.slick-active button:before {
  opacity: .75;
  color: black;
}

.grid {
  background: transparent;
}

.grid figure img {
  position: relative;
  display: block;
  min-height: 100%;
  max-width: 100%;
  opacity: 1.0;
  width: 100%;
}

.featured-wrapper {
  padding: 0px 0;
  float: left;
  display: block;
  margin-bottom: 40px;
  width: 100%;
  overflow: hidden;
}

.featured-wrapper .featured-post {
  padding: 0;
}

@media (min-width: 320px) and (max-width: 767px) {
  .featured-wrapper {
    padding: 0;
  }
}

.featured-wrapper .defier-slider-one {
  height: 200px;
  margin-bottom: 0;
}

.featured-wrapper .defier-slider-two {
  height: 200px;
}

.featured-wrapper .highlights {
  display: inline-block;
  padding: 0;
  height: 470px;
  float: left;
  overflow: hidden;
  width: 100%;
}

.featured-wrapper .highlights .sliderSlickOne {
  z-index: 99;
  height: 470px;
  position: relative;
  overflow: hidden;
}

.featured-wrapper .highlights .sliderSlickOne figure {
  border-radius: 0;
  height: 470px !important;
}

.featured-wrapper .highlights .sliderSlickOne .slick-list {
  width: 100%;
  float: right;
  height: 470px;
  display: block;
}

.featured-wrapper .highlights .sliderSlickOne .slick-list .slick-slide {
  float: left;
}

.featured-wrapper .highlights .sliderSlickOne .slick-list .slick-slide figure {
  border-radius: 0;
  height: 470px !important;
}

.featured-wrapper .highlights .sliderSlickOne .slick-dots {
  position: absolute;
  display: block;
  width: 100%;
  padding: 0;
  margin: 0;
  list-style: none;
  text-align: center;
  z-index: 99999;
  top: 37%;
  right: 1.5%;
  float: right;
  width: 20px;
}

@media (min-width: 320px) and (max-width: 767px) {
  .featured-wrapper .highlights .sliderSlickOne .slick-dots {
    top: 10px;
    height: 30px;
  }
}

.featured-wrapper .highlights .sliderSlickOne .slick-dots li {
  position: relative;
  display: inline-block;
  width: 20px;
  height: 20px;
  margin: 0 5px;
  padding: 0;
  cursor: pointer;
  float: right;
}

.featured-wrapper .highlights .sliderSlickOne .slick-dots li button {
  font-size: 0;
  line-height: 0;
  display: inline;
  width: 3px;
  height: 3px;
  padding: 3px;
  cursor: pointer;
  color: transparent;
  border: 0;
  outline: none;
  background: white;
  border-radius: 50%;
  -webkit-transition: "all 0.3s";
  -moz-transition: "all 0.3s";
  -ms-transition: "all 0.3s";
  transition: "all 0.3s";
}

.featured-wrapper .highlights .sliderSlickOne .slick-dots li.slick-active button {
  width: 5px;
  height: 5px;
  padding: 5px;
  -webkit-transition: "all 0.3s";
  -moz-transition: "all 0.3s";
  -ms-transition: "all 0.3s";
  transition: "all 0.3s";
  background: <?php echo $color_main3; ?>;
}

/*------------------------*/
/***** thumbDefier *****/
/*-----------------------*/
figure.small-thumbDefier h2 a {
  position: absolute;
  top: 75%;
  left: 0;
  font-size: 80%;
  width: 100%;
  color: #fff;
  padding: 0 5%;
  text-align: left;
  -ms-transform: translate3d(0, -50%, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, -50%, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, -50%, 0);
  transform-origin: 20% 40%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
  text-transform: lowercase;
  line-height: 26px;
}

@media (min-width: 768px) and (max-width: 1199px) {
  figure.small-thumbDefier h2 a {
    font-size: 60% !important;
  }
}

figure.small-thumbDefier p {
  font-size: 66% !important;
  padding: 2em 5% !important;
  color: #ccc !important;
}

@media (min-width: 768px) and (max-width: 1199px) {
  .featured-wrapper figure.small-thumbDefier {
    width: 100%;
    display: inline-block;
    float: left;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .featured-wrapper figure.small-thumbDefier h2 a {
    font-size: 100%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  ul.defier-posts-list li.defier-first-post figure.effect-thumbDefier h2 a {
    font-size: 100% !important;
  }
}

figure.effect-thumbDefier {
  -webkit-box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
  -moz-box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
  -o-box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
  -ms-box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
  box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
}

figure.effect-thumbDefier .catLabel {
  color: #fff;
  position: relative;
  overflow: hidden;
  z-index: 150000;
  top: 10%;
  z-index: 99;
  float: left;
  left: 5%;
  padding: 0 5px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  border-radius: 3px;
  left: 5%;
}

figure.effect-thumbDefier .catLabel a {
  z-index: 1;
}

figure.effect-thumbDefier .catLabel .lavecat {
  font-size: 60%;
  position: absolute;
  left: 0;
  float: left;
  width: 10px;
  height: 10px;
  margin: 8px;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  z-index: 20000000;
}

figure.effect-thumbDefier .catLabel a {
  float: left;
  color: #fff;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  font-size: 101%;
  font-weight: lighter;
  text-transform: capitalize;
  padding-left: 20px;
  z-index: 20000001;
}

figure.effect-thumbDefier .catLabel a::first-letter {
  font-weight: bold;
}

figure.effect-thumbDefier h2 a {
  position: absolute;
  top: 55%;
  left: 0;
  font-size: 90%;
  width: 100%;
  color: #fff;
  padding: 0 5%;
  line-height: 150%;
  text-align: left;
  -ms-transform: translate3d(0, -50%, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, -50%, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, -50%, 0);
  transform-origin: 20% 40%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
  text-transform: capitalize;
}

figure.effect-thumbDefier p {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  opacity: 0;
  -ms-transform: translate3d(0, 10px, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 10px, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 10px, 0);
  transform-origin: 20% 40%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
  text-transform: capitalize;
  text-transform: initial;
  text-align: justify;
  font-size: 75%;
  padding: 2em 5%;
}

figure.effect-thumbDefier p i {
  margin-right: 10px;
  margin-left: auto;
  line-height: 1.5;
}

@media (min-width: 320px) and (max-width: 767px) {
  figure.effect-thumbDefier p {
    padding: 1.5em;
  }
}

figure.effect-thumbDefier p a {
  width: 100%;
  text-align: right;
  margin: 0.5em 0;
  color: #fff;
  float: left;
  font-size: 100%;
  text-transform: uppercase;
}

figure.effect-thumbDefier p a i {
  margin-right: 10px;
  margin-left: auto;
  font-size: 110%;
  color: <?php echo $color_main3; ?>;
}

figure.effect-thumbDefier .meta-label {
  color: #fff;
  top: 15%;
  left: 0;
  right: 0;
  padding: 0 10%;
  z-index: 999999;
  float: left;
  position: absolute;
  display: block;
  opacity: 0;
  -ms-transform: translate3d(0, 10px, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 10px, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 10px, 0);
  transform-origin: 20% 40%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
}

figure.effect-thumbDefier .meta-label .pull-left, figure.effect-thumbDefier .meta-label .pull-right {
  font-size: 65%;
  line-height: 1;
  color: #fff;
  text-transform: capitalize;
}

figure.effect-thumbDefier .meta-label .pull-left i, figure.effect-thumbDefier .meta-label .pull-right i {
  font-size: 120%;
  margin-right: 10px;
  margin-left: auto;
  float: left;
}

figure.effect-thumbDefier figcaption:before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 40%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 40%);
  content: '';
  opacity: 0.5;
  -ms-transform: translate3d(0, 50%, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 50%, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 50%, 0);
  transform-origin: 20% 40%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
}

@media (min-width: 320px) and (max-width: 767px) {
  figure.effect-thumbDefier .catLabel {
    color: #fff;
    position: relative;
    overflow: hidden;
    top: 10%;
    float: left;
    left: 5%;
    padding: 0 5px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    left: 5%;
  }
  figure.effect-thumbDefier .catLabel a {
    z-index: 1;
  }
  figure.effect-thumbDefier .catLabel .lavecat {
    position: absolute;
    -ms-transform: scale(100%, 100%);
    /* IE 9 */
    -ms-transform-origin: 20% 40%;
    /* IE 9 */
    -webkit-transform: scale(100%, 100%);
    /* Chrome, Safari, Opera */
    -webkit-transform-origin: 20% 40%;
    /* Chrome, Safari, Opera */
    transform: scale(100%, 100%);
    transform-origin: 20% 40%;
    font-size: 60%;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: -1;
    margin: 0;
    height: auto;
    -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    -ms-transition: all 0.2s ease;
    transition: all 0.2s ease;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    width: 100%;
  }
  figure.effect-thumbDefier .catLabel a {
    float: left;
    color: #fff;
    font-size: 101%;
    font-weight: lighter;
    text-transform: capitalize;
    -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    -ms-transition: all 0.2s ease;
    transition: all 0.2s ease;
    padding-left: 0px;
  }
  figure.effect-thumbDefier h2 a {
    color: #fff;
    -ms-transform: translate3d(0, -50%, 0) translate3d(0, -75px, 0);
    /* IE 9 */
    -ms-transform-origin: 20% 40%;
    /* IE 9 */
    -webkit-transform: translate3d(0, -50%, 0) translate3d(0, -75px, 0);
    /* Chrome, Safari, Opera */
    -webkit-transform-origin: 20% 40%;
    /* Chrome, Safari, Opera */
    transform: translate3d(0, -50%, 0) translate3d(0, -75px, 0);
    transform-origin: 20% 40%;
  }
  figure.effect-thumbDefier figcaption:before {
    opacity: 1;
    -ms-transform: translate3d(0, 0, 0);
    /* IE 9 */
    -ms-transform-origin: 20% 40%;
    /* IE 9 */
    -webkit-transform: translate3d(0, 0, 0);
    /* Chrome, Safari, Opera */
    -webkit-transform-origin: 20% 40%;
    /* Chrome, Safari, Opera */
    transform: translate3d(0, 0, 0);
    transform-origin: 20% 40%;
    background: -webkit-linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
    background: -o-linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
    background: linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
    top: 0;
  }
  figure.effect-thumbDefier p {
    opacity: 1;
    -ms-transform: translate3d(0, 0, 0);
    /* IE 9 */
    -ms-transform-origin: 20% 40%;
    /* IE 9 */
    -webkit-transform: translate3d(0, 0, 0);
    /* Chrome, Safari, Opera */
    -webkit-transform-origin: 20% 40%;
    /* Chrome, Safari, Opera */
    transform: translate3d(0, 0, 0);
    transform-origin: 20% 40%;
  }
}

@media (min-width: 320px) and (max-width: 767px) and (min-width: 320px) and (max-width: 767px) {
  figure.effect-thumbDefier p {
    padding: 1.5em;
  }
}

@media (min-width: 320px) and (max-width: 767px) {
  figure.effect-thumbDefier p a {
    width: 100%;
    text-align: right;
    margin: 0.5em 0;
    color: #fff;
  }
  figure.effect-thumbDefier time {
    opacity: 1;
    -ms-transform: translate3d(0, 0, 0);
    /* IE 9 */
    -ms-transform-origin: 20% 40%;
    /* IE 9 */
    -webkit-transform: translate3d(0, 0, 0);
    /* Chrome, Safari, Opera */
    -webkit-transform-origin: 20% 40%;
    /* Chrome, Safari, Opera */
    transform: translate3d(0, 0, 0);
    transform-origin: 20% 40%;
  }
}

figure.effect-thumbDefier:hover .catLabel {
  color: #fff;
  position: relative;
  overflow: hidden;
  top: 10%;
  float: left;
  left: 5%;
  padding: 0 5px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  border-radius: 3px;
  left: 5%;
}

figure.effect-thumbDefier:hover .catLabel a {
  z-index: 1;
}

figure.effect-thumbDefier:hover .catLabel .lavecat {
  position: absolute;
  -ms-transform: scale(100%, 100%);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: scale(100%, 100%);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: scale(100%, 100%);
  transform-origin: 20% 40%;
  font-size: 60%;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: -1;
  margin: 0;
  height: auto;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  border-radius: 3px;
  width: 100%;
}

figure.effect-thumbDefier:hover .catLabel a {
  float: left;
  color: #fff;
  font-size: 101%;
  font-weight: lighter;
  text-transform: capitalize;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  padding-left: 0px;
}

figure.effect-thumbDefier:hover h2 a {
  color: #fff;
  -ms-transform: translate3d(0, -50%, 0) translate3d(0, -40px, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, -50%, 0) translate3d(0, -40px, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, -50%, 0) translate3d(0, -40px, 0);
  transform-origin: 20% 40%;
}

figure.effect-thumbDefier:hover figcaption:before {
  opacity: 1;
  -ms-transform: translate3d(0, 0, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 0, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 0, 0);
  transform-origin: 20% 40%;
  background: -webkit-linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
  background: -o-linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
  background: linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
  top: 0;
}

figure.effect-thumbDefier:hover p {
  opacity: 1;
  -ms-transform: translate3d(0, 0, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 0, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 0, 0);
  transform-origin: 20% 40%;
}

@media (min-width: 320px) and (max-width: 767px) {
  figure.effect-thumbDefier:hover p {
    padding: 1.5em;
  }
}

figure.effect-thumbDefier:hover p a {
  width: 100%;
  text-align: right;
  margin: 0.5em 0;
  color: #fff;
}

figure.effect-thumbDefier:hover time {
  opacity: 1;
  -ms-transform: translate3d(0, 0, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 0, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 0, 0);
  transform-origin: 20% 40%;
}

figure.effect-thumbDefier:hover .meta-label {
  opacity: 1;
  -ms-transform: translate3d(0, 0, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 0, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 0, 0);
  transform-origin: 20% 40%;
}

@media (min-width: 320px) and (max-width: 767px) {
  .grid figure img {
    min-height: 50%;
    max-width: 160%;
  }
}

.Carousel #SliderCaurasel {
  position: relative;
}

.Carousel #SliderCaurasel .grid figure img {
  position: absolute;
  display: block;
  opacity: 1.0;
  width: 180%;
  max-width: 270%;
  left: -51%;
}

.Carousel #SliderCaurasel .slick-arrow {
  position: absolute;
  top: 26vh;
  box-shadow: 0 0 0;
  padding: 2%;
  margin: 0;
  opacity: 0.5;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.Carousel #SliderCaurasel .slick-arrow:hover {
  opacity: 1;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.Carousel #SliderCaurasel .fa-arrow-right2 {
  right: 0px;
  display: inline-block;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.Carousel #SliderCaurasel .fa-arrow-right2:before {
  content: "\e095";
  font-family: inherit;
  font-size: 250%;
  padding: 33%;
}

.Carousel #SliderCaurasel .fa-arrow-left2 {
  left: -10px;
  display: inline-block;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  z-index: 9999;
}

.Carousel #SliderCaurasel .fa-arrow-left2:before {
  content: "\e094";
  font-family: inherit;
  font-size: 250%;
  padding: 33%;
}

.Carousel #SliderCaurasel .slick-slide {
  float: left;
}

.Carousel #SliderCaurasel .slick-slide .grid figure img {
  position: absolute;
  display: block;
  opacity: 1.0;
  width: 180%;
  max-width: 270%;
  left: -51%;
}

.slick-list {
  float: left;
  width: 100%;
  display: block;
  overflow: hidden;
}

.slick-slide {
  float: left;
}

.slick-track {
  float: left;
  display: inline-block;
}

.slick-list {
  width: 100%;
  float: right;
  display: block;
}

.slick-list .slick-slide {
  float: left;
}

.slick-list .slick-slide figure {
  border-radius: 0;
}

.slick-dots {
  display: block;
  width: 100%;
  padding: 0;
  margin: 0;
  bottom: -380px;
  top: auto;
  list-style: none;
  text-align: center;
  z-index: 99;
  float: right;
}

.slick-dots li {
  position: relative;
  display: inline-block;
  width: 20px;
  height: 20px;
  margin: 0 5px;
  padding: 0;
  cursor: pointer;
  border: 0 !important;
}

.slick-dots li:before {
  display: none !important;
}

.slick-dots li button {
  font-size: 0;
  line-height: 0;
  display: inline;
  width: 3px;
  height: 3px;
  padding: 3px;
  cursor: pointer;
  color: transparent;
  border: 0;
  outline: none;
  background: white;
  border-radius: 50%;
  -webkit-transition: "all 0.3s";
  -moz-transition: "all 0.3s";
  -ms-transition: "all 0.3s";
  transition: "all 0.3s";
}

.slick-dots li.slick-active button {
  width: 5px;
  height: 5px;
  padding: 5px;
  -webkit-transition: "all 0.3s";
  -moz-transition: "all 0.3s";
  -ms-transition: "all 0.3s";
  transition: "all 0.3s";
  background: <?php echo $color_main3; ?>;
}

.CarouselWarpper {
  height: 400px !important;
}

.slidertwoWarpper {
  height: 300px;
}

ul.blockCarousel {
  list-style: none;
}

ul.blockCarousel li.defier-first-post {
  padding: 0;
  top: 0;
  margin: 0;
  position: relative;
  float: left;
  width: 25%;
}

.featured-wrapper .sliderCarousel {
  margin: 0;
  height: 400px;
}

.featured-wrapper .sliderCarousel .meta-label {
  top: 25%;
}

@media (min-width: 320px) and (max-width: 767px) {
  .sliderSlickOne .grid figure.effect-thumbDefier img {
    width: 180%;
    height: 100%;
  }
}

@media (min-width: 320px) and (max-width: 767px) {
  .sliderSlickOne .grid figure.effect-thumbDefier .data-label {
    top: 16%;
  }
}

.Full-width {
  width: 100%;
  float: left;
}

.grid figure.small-thumbDefier figcaption h2 a {
  font-size: 70%;
}

.socialMediaWrapper {
  text-align: right;
}

@media (min-width: 320px) and (max-width: 767px) {
  .socialMediaWrapper {
    text-align: center;
  }
}

.darkFooter {
  margin-top: 15px;
  position: relative;
  float: left;
  width: 100%;
  /*** end of footer wreapper ******/
}

.darkFooter .widget {
  margin: 40px 0;
  padding: 0;
  font-size: 12px;
  background: none;
  box-shadow: none;
  border: none;
  width: 100%;
  float: left;
}

.darkFooter .widget ul {
  margin: 0;
  list-style: none;
  width: 100%;
  float: left;
}

.darkFooter .footer-bottom {
  background: none repeat scroll 0 0 #1b1b1b;
  border-top: 0px;
  color: #ecf0f1;
  padding: 20px 40px;
  position: relative;
}

.darkFooter .footer-black {
  background: #1b1b1b;
  color: #f2f2f2;
}

.darkFooter .footer-black .container {
  border-bottom: 1px solid #3b3b3b;
}

.darkFooter .socialMediaLabel {
  color: <?php echo $color_main6; ?>;
  font-size: 80%;
  text-align: right;
  display: inline-block;
}

@media (min-width: 320px) and (max-width: 767px) {
  .darkFooter .socialMediaLabel {
    display: inline-block;
    float: left;
    line-height: 25px;
  }
}

.darkFooter .defier-cat-title {
  float: left;
  position: relative;
  text-align: center;
  width: 100%;
  border: 0px;
  display: inline-block;
  height: 44px;
  margin-bottom: 10px;
}

.darkFooter .defier-cat-title:before {
  position: absolute;
  top: 18px;
  left: 0;
  right: 0;
  height: 1px;
  background: #6b6b6b;
  content: "";
}

.darkFooter .defier-cat-title h4.widget-title {
  background: #1b1b1b;
  color: #a9a9a9;
  margin: 0;
  padding: 0 5px;
  font-size: 130%;
  font-weight: lighter;
  text-transform: capitalize;
  position: absolute;
  padding-right: 15px;
  left: 0;
  right: auto;
}

.darkFooter .defier-cat-title h4.widget-title:first-letter {
  font-weight: bold;
  color: #fff;
}

.darkFooter ul.footerMenu {
  list-style: none;
}

@media (min-width: 320px) and (max-width: 767px) {
  .darkFooter ul.footerMenu {
    width: 100%;
    float: left;
    text-align: center;
  }
}

.darkFooter ul.footerMenu li {
  float: left;
  padding-left: 25px;
  padding-right: 25px;
  border-right: 1px solid;
  border-left: 0px solid;
  line-height: 15px;
}

@media (min-width: 320px) and (max-width: 767px) {
  .darkFooter ul.footerMenu li {
    float: none;
    display: inline-block;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .darkFooter ul.footerMenu li {
    float: none;
    display: inline-block;
  }
}

.darkFooter ul.footerMenu li:last-child {
  border: 0px;
}

.darkFooter ul.footerMenu li:first-child {
  padding-left: 0px;
}

.darkFooter ul.footerMenu li a {
  -webkit-transition: "all 0.3s ease";
  -moz-transition: "all 0.3s ease";
  -ms-transition: "all 0.3s ease";
  transition: "all 0.3s ease";
}

.darkFooter ul.footerMenu li a:hover {
  color: #fff;
  -webkit-transition: "all 0.3s ease";
  -moz-transition: "all 0.3s ease";
  -ms-transition: "all 0.3s ease";
  transition: "all 0.3s ease";
}

.darkFooter .copyright {
  color: <?php echo $color_main6; ?>;
  font-family: sans-serif;
  font-size: 11px;
  line-height: 29px;
}

.darkFooter .copyright div a {
  color: <?php echo $color_main6; ?>;
  -webkit-transition: "all 0.2s";
  -moz-transition: "all 0.2s";
  -ms-transition: "all 0.2s";
  transition: "all 0.2s";
}

.darkFooter .copyright div a:hover {
  color: <?php echo $color_main3; ?>;
  -webkit-transition: "all 0.2s";
  -moz-transition: "all 0.2s";
  -ms-transition: "all 0.2s";
  transition: "all 0.2s";
}

.darkFooter .no-border li {
  border: 0px solid #1B1B1B !important;
}

.darkFooter .widget-tab .def_col_4 {
  width: 100%;
}

.darkFooter .widget-tab .def_col_4 li {
  float: left;
  width: 33.33333333%;
  border-bottom: 0px;
  margin: 0;
  padding: 0px;
  height: 80px;
  overflow: hidden;
  border: 2px solid #1B1B1B !important;
}

.darkFooter .widget-tab .def_col_4 li a {
  display: block;
}

.darkFooter .widget-tab .def_col_4 li a img {
  position: relative;
  width: 270%;
  height: 85px;
  opacity: 0.7;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  transition: all 0.3s;
}

@media (min-width: 768px) and (max-width: 1199px) {
  .darkFooter .widget-tab .def_col_4 li a img {
    height: 175px !important;
  }
}

.darkFooter .widget-tab .def_col_4 li a img:hover {
  opacity: 1;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  transition: all 0.3s;
}

.darkFooter .twitter-widget {
  float: left;
  width: 100%;
  height: 235px;
  padding: 15px;
  font-family: inherit;
  background: #3b3b3b;
  position: relative;
}

.darkFooter .twitter-widget .slick-slider {
  width: 100%;
  float: left;
}

.darkFooter .twitter-widget .slick-slider span {
  color: #a9a9a9;
  font-size: 110%;
  margin-bottom: 10px;
}

.darkFooter .twitter-widget .slick-slider span a {
  color: #fff;
}

.darkFooter .twitter-widget ul.slick-dots {
  position: absolute;
  bottom: 70px;
  left: 0;
  padding-bottom: 15px;
}

.darkFooter .twitter-widget .twitterfootwrapper {
  position: absolute;
  bottom: 0;
  background: #313131;
  left: 0;
  right: 0;
  padding: 20px;
}

.darkFooter .twitter-widget .twitterfootwrapper .twitterFooterC1 {
  font-size: 105%;
  float: left;
  color: #a9a9a9;
}

.darkFooter .twitter-widget .twitterfootwrapper .twitterFooterC1 .fa-twitter {
  color: #55adec;
  font-size: 160%;
}

.darkFooter .twitter-widget .twitterfootwrapper .follow {
  float: right;
  color: #55adec;
  font-size: 100%;
  background: transparent;
  padding: 0;
}

.darkFooter .widget_categories .mCSB_scrollTools {
  width: 4px;
}

.darkFooter .widget_categories ul {
  height: 235px;
}

.darkFooter .widget_categories ul li.cat-item {
  height: auto;
  position: relative;
  float: left;
  width: 100%;
  background: #3b3b3b;
  border: 0;
  margin-bottom: 6px;
  padding: 8px;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  transition: all 0.3s;
}

.darkFooter .widget_categories ul li.cat-item:hover {
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  transition: all 0.3s;
  background: #434343;
}

.darkFooter .widget_categories ul li.cat-item:hover a {
  margin-left: 12%;
  margin-right: auto;
  color: #fff;
}

.darkFooter .widget_categories ul li.cat-item:before {
  content: "";
  margin-right: 10px;
  margin-left: auto;
  background: #434343;
  position: absolute;
  left: 0;
  right: auto;
  top: 0;
  bottom: 0;
  width: 10%;
}

.darkFooter .widget_categories ul li.cat-item a {
  margin-left: 12%;
  margin-right: auto;
  color: #a9a9a9;
}

.top-container {
  bottom: 0;
  position: fixed;
  right: 1%;
  width: 50px;
  z-index: 99999;
}

.top-container a {
  background: <?php echo $color_main2; ?>;
  -webkit-border-radius: 5px 5px 0 0;
  -moz-border-radius: 5px 5px 0 0;
  -ms-border-radius: 5px 5px 0 0;
  border-radius: 5px 5px 0 0;
  padding: 10px 15px;
  font-size: 140%;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  transition: all 0.3s;
  text-align: center;
  text-decoration: none;
  color: #fff;
}

.top-container a:hover {
  background: <?php echo $color_main3; ?>;
}

a {
  outline: none;
}

a:focus {
  outline: none;
}

.footer .lavecat {
  display: none;
}

.footer-bottom, .footer {
  float: left;
  width: 100%;
}

@media (min-width: 320px) and (max-width: 767px) {
  .copyright {
    text-align: center;
  }
}

.socialMediaWrapper {
  text-align: right;
}

@media (min-width: 320px) and (max-width: 767px) {
  .socialMediaWrapper {
    text-align: center;
  }
}

.lightFooter {
  position: relative;
  float: left;
  width: 100%;
  margin-top: 15px;
  /*** end of footer wreapper ******/
}

.lightFooter .footer-bottom {
  background: none repeat scroll 0 0 #f2f2f2;
  color: #1b1b1b;
}

.lightFooter .footer-black {
  background: #f2f2f2;
  color: #1b1b1b;
}

.lightFooter .footer-black .container {
  border-bottom: 1px solid #cac9c9;
}

.lightFooter .socialMediaLabel {
  color: <?php echo $color_main6; ?>;
}

.lightFooter .defier-cat-title:before {
  background: #a0a0a0;
}

.lightFooter .defier-cat-title h4.widget-title {
  background: #f2f2f2;
  color: <?php echo $color_main5; ?>;
  margin: 0;
}

.lightFooter .defier-cat-title h4.widget-title:first-letter {
  color: #1b1b1b;
}

.lightFooter ul.footerMenu li a:hover {
  color: #1b1b1b;
}

.lightFooter .copyright {
  color: <?php echo $color_main6; ?>;
}

.lightFooter .copyright div a {
  color: <?php echo $color_main6; ?>;
}

.lightFooter .copyright div a:hover {
  color: <?php echo $color_main3; ?>;
}

.lightFooter .no-border li {
  border: 0px solid #f2f2f2 !important;
}

.lightFooter .def_col_4 li {
  border: 2px solid #f2f2f2;
}

.lightFooter .twitter-widget {
  background: #e8e8e8;
}

.lightFooter .twitter-widget .slick-slider span {
  color: #a0a0a0;
}

.lightFooter .twitter-widget .slick-slider span a {
  color: #4e4e4e;
}

.lightFooter .twitter-widget .twitterfootwrapper {
  background: #dbdbdb;
  color: #a9a9a9;
}

.lightFooter .twitter-widget .twitterfootwrapper .fa-twitter {
  color: #55adec;
}

.lightFooter .twitter-widget .follow {
  color: #55adec;
}

.lightFooter .widget_categories ul {
  height: 235px;
}

.lightFooter .widget_categories ul li.cat-item {
  color: #929292;
  background: #e8e8e8;
}

.lightFooter .widget_categories ul li.cat-item:hover {
  background: #dbdbdb;
}

.lightFooter .widget_categories ul li.cat-item:hover a {
  color: #fff;
}

.lightFooter .widget_categories ul li.cat-item:before {
  background: #dbdbdb;
}

.lightFooter .widget_categories ul li.cat-item a {
  margin-left: 12%;
  margin-right: auto;
  color: #1b1b1b;
}

.slick-list .slick-slide {
  float: left;
  list-style: none;
}

/*------------------------*/
/***** thumbDefier *****/
/*-----------------------*/
.grid {
  position: relative;
  margin: 0 auto;
  list-style: none;
  text-align: center;
}

.grid figure.small-thumbDefier {
  height: 235px !important;
  overflow: hidden;
}

.grid figure.small-thumbDefier h2 a {
  position: absolute;
  top: 75% !important;
  left: 0;
  font-size: 60%;
  width: 100%;
  color: #fff;
  padding: 0 5%;
  text-align: left;
  -ms-transform: translate3d(0, -50%, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, -50%, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, -50%, 0);
  transform-origin: 20% 40%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
  text-transform: none;
  line-height: 26px;
}

.grid figure.small-thumbDefier p {
  font-size: 66% !important;
  padding: 2em 5% !important;
  color: #ccc !important;
}

.grid figure.effect-thumbDefier {
  height: 330px;
  overflow: hidden;
  position: relative;
  -webkit-box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
  -moz-box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
  -o-box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
  -ms-box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
  box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
}

@media (min-width: 320px) and (max-width: 767px) {
  .grid figure.effect-thumbDefier img {
    width: 100%;
  }
}

.grid figure.effect-thumbDefier .catLabel {
  color: #fff;
  position: relative;
  overflow: hidden;
  z-index: 150000;
  top: 10%;
  z-index: 99;
  float: left;
  left: 5%;
  padding: 0 5px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  border-radius: 3px;
  left: 5%;
}

.grid figure.effect-thumbDefier .catLabel a {
  z-index: 1;
}

.grid figure.effect-thumbDefier .catLabel .lavecat {
  font-size: 60%;
  position: absolute;
  left: 0;
  float: left;
  width: 10px;
  height: 10px;
  margin: 8px;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
}

.grid figure.effect-thumbDefier .catLabel a {
  float: left;
  color: #fff;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  font-size: 101%;
  font-weight: lighter;
  text-transform: capitalize;
  padding-left: 20px;
  z-index: 20000001;
}

.grid figure.effect-thumbDefier .catLabel a::first-letter {
  font-weight: bold;
}

.grid figure.effect-thumbDefier h2 a {
  position: absolute;
  left: 0;
  font-size: 90%;
  width: 100%;
  color: #fff;
  padding: 0 5%;
  line-height: 140%;
  text-align: left;
  -ms-transform: translate3d(0, -50%, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, -50%, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, -50%, 0);
  transform-origin: 20% 40%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
  text-transform: capitalize;
}

@media (min-width: 320px) and (max-width: 767px) {
  .grid figure.effect-thumbDefier h2 a {
    font-size: 70%;
    top: 60%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .grid figure.effect-thumbDefier h2 a {
    font-size: 70%;
    top: 60%;
  }
}

.grid figure.effect-thumbDefier p {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  opacity: 0;
  -ms-transform: translate3d(0, 10px, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 10px, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 10px, 0);
  transform-origin: 20% 40%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
  text-transform: capitalize;
  text-transform: initial;
  text-align: justify;
  font-size: 85%;
  padding: 1em 5%;
}

.grid figure.effect-thumbDefier p i {
  margin-right: 10px;
}

@media (min-width: 320px) and (max-width: 767px) {
  .grid figure.effect-thumbDefier p {
    padding: 1.5em;
  }
}

.grid figure.effect-thumbDefier p a {
  width: 100%;
  text-align: right;
  margin: 0.5em 0;
  color: #fff;
  float: left;
  font-size: 100%;
  text-transform: uppercase;
}

.grid figure.effect-thumbDefier p a i {
  margin-right: 10px;
  margin-left: auto;
  font-size: 110%;
  color: <?php echo $color_main3; ?>;
}

.grid figure.effect-thumbDefier time {
  color: #fff;
  top: 20%;
  z-index: 999999999999999999999999999999999;
  position: absolute;
  display: block;
  right: 5%;
  left: auto;
  opacity: 0;
  -ms-transform: translate3d(0, 10px, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 10px, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 10px, 0);
  transform-origin: 20% 40%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
  font-size: 70%;
  margin-left: 20px;
  text-align: right;
}

.grid figure.effect-thumbDefier time i {
  font-size: 120%;
  margin-right: 10px;
  margin-left: auto;
  float: left;
}

@media (min-width: 320px) and (max-width: 767px) {
  .grid figure.effect-thumbDefier time {
    top: 7%;
    left: auto;
    right: 3%;
  }
}

.grid figure.effect-thumbDefier figcaption:before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 40%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 40%);
  content: '';
  opacity: 0.5;
  -ms-transform: translate3d(0, 50%, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 50%, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 50%, 0);
  transform-origin: 20% 40%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
}

@media (min-width: 320px) and (max-width: 767px) {
  .grid figure.effect-thumbDefier .catLabel {
    color: #fff;
    position: relative;
    overflow: hidden;
    top: 10%;
    float: left;
    left: 5%;
    padding: 0 5px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    left: 5%;
  }
  .grid figure.effect-thumbDefier .catLabel a {
    z-index: 1;
  }
  .grid figure.effect-thumbDefier .catLabel .lavecat {
    position: absolute;
    -ms-transform: scale(100%, 100%);
    /* IE 9 */
    -ms-transform-origin: 20% 40%;
    /* IE 9 */
    -webkit-transform: scale(100%, 100%);
    /* Chrome, Safari, Opera */
    -webkit-transform-origin: 20% 40%;
    /* Chrome, Safari, Opera */
    transform: scale(100%, 100%);
    transform-origin: 20% 40%;
    font-size: 60%;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: -1;
    margin: 0;
    height: auto;
    -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    -ms-transition: all 0.2s ease;
    transition: all 0.2s ease;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    width: 100%;
  }
  .grid figure.effect-thumbDefier .catLabel a {
    float: left;
    color: #fff;
    font-size: 100%;
    font-weight: lighter;
    text-transform: capitalize;
    -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    -ms-transition: all 0.2s ease;
    transition: all 0.2s ease;
    padding-left: 0px;
  }
  .grid figure.effect-thumbDefier h2 a {
    color: #fff;
    -ms-transform: translate3d(0, -50%, 0) translate3d(0, -75px, 0);
    /* IE 9 */
    -ms-transform-origin: 20% 40%;
    /* IE 9 */
    -webkit-transform: translate3d(0, -50%, 0) translate3d(0, -75px, 0);
    /* Chrome, Safari, Opera */
    -webkit-transform-origin: 20% 40%;
    /* Chrome, Safari, Opera */
    transform: translate3d(0, -50%, 0) translate3d(0, -75px, 0);
    transform-origin: 20% 40%;
  }
  .grid figure.effect-thumbDefier figcaption:before {
    opacity: 1;
    -ms-transform: translate3d(0, 0, 0);
    /* IE 9 */
    -ms-transform-origin: 20% 40%;
    /* IE 9 */
    -webkit-transform: translate3d(0, 0, 0);
    /* Chrome, Safari, Opera */
    -webkit-transform-origin: 20% 40%;
    /* Chrome, Safari, Opera */
    transform: translate3d(0, 0, 0);
    transform-origin: 20% 40%;
    background: -webkit-linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
    background: -o-linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
    background: linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
    top: 0;
  }
  .grid figure.effect-thumbDefier p {
    opacity: 1;
    -ms-transform: translate3d(0, 0, 0);
    /* IE 9 */
    -ms-transform-origin: 20% 40%;
    /* IE 9 */
    -webkit-transform: translate3d(0, 0, 0);
    /* Chrome, Safari, Opera */
    -webkit-transform-origin: 20% 40%;
    /* Chrome, Safari, Opera */
    transform: translate3d(0, 0, 0);
    transform-origin: 20% 40%;
  }
}

@media (min-width: 320px) and (max-width: 767px) and (min-width: 320px) and (max-width: 767px) {
  .grid figure.effect-thumbDefier p {
    padding: 1.5em;
  }
}

@media (min-width: 320px) and (max-width: 767px) {
  .grid figure.effect-thumbDefier p a {
    width: 100%;
    text-align: right;
    margin: 0.5em 0;
    color: #fff;
  }
  .grid figure.effect-thumbDefier time {
    opacity: 1;
    -ms-transform: translate3d(0, 0, 0);
    /* IE 9 */
    -ms-transform-origin: 20% 40%;
    /* IE 9 */
    -webkit-transform: translate3d(0, 0, 0);
    /* Chrome, Safari, Opera */
    -webkit-transform-origin: 20% 40%;
    /* Chrome, Safari, Opera */
    transform: translate3d(0, 0, 0);
    transform-origin: 20% 40%;
  }
}

.grid figure.effect-thumbDefier:hover .catLabel {
  color: #fff;
  position: relative;
  overflow: hidden;
  top: 10%;
  float: left;
  left: 5%;
  padding: 0 5px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  border-radius: 3px;
  left: 5%;
}

.grid figure.effect-thumbDefier:hover .catLabel a {
  z-index: 1;
}

.grid figure.effect-thumbDefier:hover .catLabel .lavecat {
  position: absolute;
  -ms-transform: scale(100%, 100%);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: scale(100%, 100%);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: scale(100%, 100%);
  transform-origin: 20% 40%;
  font-size: 60%;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: -1;
  margin: 0;
  height: auto;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  border-radius: 3px;
  width: 100%;
}

.grid figure.effect-thumbDefier:hover .catLabel a {
  float: left;
  color: #fff;
  font-size: 101%;
  font-weight: lighter;
  text-transform: capitalize;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  padding-left: 0px;
}

.grid figure.effect-thumbDefier:hover h2 a {
  color: #fff;
  -ms-transform: translate3d(0, -40%, 0) translate3d(0, -40px, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, -40%, 0) translate3d(0, -40px, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, -40%, 0) translate3d(0, -40px, 0);
  transform-origin: 20% 40%;
}

.grid figure.effect-thumbDefier:hover figcaption:before {
  opacity: 1;
  -ms-transform: translate3d(0, 0, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 0, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 0, 0);
  transform-origin: 20% 40%;
  background: -webkit-linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
  background: -o-linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
  background: linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
  top: 0;
}

.grid figure.effect-thumbDefier:hover p {
  opacity: 1;
  -ms-transform: translate3d(0, -10px, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, -10px, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, -10px, 0);
  transform-origin: 20% 40%;
}

@media (min-width: 320px) and (max-width: 767px) {
  .grid figure.effect-thumbDefier:hover p {
    padding: 1.5em;
  }
}

.grid figure.effect-thumbDefier:hover p a {
  width: 100%;
  text-align: right;
  margin: 0.5em 0;
  color: #fff;
}

.grid figure.effect-thumbDefier:hover time {
  opacity: 1;
  -ms-transform: translate3d(0, 0, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 0, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 0, 0);
  transform-origin: 20% 40%;
}

.posts-list {
  position: relative;
  display: block;
  float: left;
  width: 100%;
}

.posts-list .grid figure.effect-thumbDefier img {
  width: 200%;
  height: auto;
}

.posts-list .grid figure.effect-thumbDefier h2:before {
  display: none;
  content: "";
}

.posts-list .grid figure.effect-thumbDefier p.data-label {
  bottom: -25px;
}

.posts-list .grid figure.effect-thumbDefier p.data-label small {
  padding: 10px 0;
  color: <?php echo $color_main4; ?>;
  font-size: 115%;
}

.posts-list .fa-arrow-left2 {
  position: absolute;
  top: 15px;
}

.posts-list .nArrow {
  position: absolute;
  top: 15px;
  left: auto;
  right: 25px;
  font-size: 210%;
  display: block;
  z-index: 9999999999999999;
  opacity: 0.7;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  cursor: pointer;
  color: #fff;
  background: rgba(255, 255, 255, 0);
  padding: 2px 10px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}

.posts-list .nArrow:hover {
  opacity: 1;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  background: rgba(255, 255, 255, 0.3);
}

.posts-list .pArrow {
  position: absolute;
  top: 15px;
  left: auto;
  right: 50px;
  font-size: 210%;
  display: block;
  color: #fff;
  z-index: 9999999999999999;
  opacity: 0.7;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  cursor: pointer;
  background: rgba(255, 255, 255, 0);
  padding: 2px 10px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}

.posts-list .pArrow:hover {
  opacity: 1;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  background: rgba(255, 255, 255, 0.3);
}

/*********** Flickr Widget **************/
.flickrLabel {
  background: #0062dd !important;
}

.quick-flickr-item {
  float: left;
  border-bottom: 0px;
  margin: 0;
  padding: 0px;
  overflow: hidden;
}

.quick-flickr-item a {
  display: block;
}

.quick-flickr-item a img {
  position: relative;
  width: 270%;
  height: 78px;
  opacity: 0.9;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.quick-flickr-item a img:hover {
  opacity: 1;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

/*********** popular widget ************/
.popularLabel {
  background: #ffbd0c;
}

/*** Recent Posts Widget ***/
ul.defier-posts-list {
  margin: 0;
  list-style: outside none none;
  /*---------------*/
  /***** list  *****/
  /*---------------*/
}

ul.defier-posts-list li.defier-first-post {
  border-bottom: 1px solid #f1f1f1;
  border-top: 0px;
  display: inline-block;
  margin-bottom: 10px;
  width: 100%;
  padding: 0px;
}

ul.defier-posts-list li.defier-first-post .miHeight {
  height: 230px !important;
}

ul.defier-posts-list li.defier-first-post figure.effect-thumbDefier time {
  top: 5%;
}

ul.defier-posts-list li.defier-first-post figure.effect-thumbDefier h2 a {
  text-align: center;
}

@media (min-width: 768px) and (max-width: 1199px) {
  ul.defier-posts-list li.defier-first-post figure.effect-thumbDefier h2 a {
    font-size: 80% !important;
  }
}

ul.defier-posts-list li.defier-first-post figure.effect-thumbDefier p {
  font-size: 70%;
}

ul.defier-posts-list li.defier-first-post figure.effect-thumbDefier .data-label {
  width: 100%;
  color: #ddd;
}

ul.defier-posts-list li.defier-first-post:first-child {
  border: 0;
}

ul.defier-posts-list li.grid {
  margin: 0;
  border: 0;
  /*padding:0;*/
  float: left;
  display: block;
  width: 100%;
  height: 90px;
  padding-bottom: 10px;
  background: transparent;
  margin-bottom: 10px;
  /*border-bottom: 1px solid #ededed;*/
}

ul.defier-posts-list li.grid:last-child {
  border-bottom: 0px solid #ededed;
  margin-bottom: 0px;
}

ul.defier-posts-list li.grid figure.def-list-post {
  background: transparent;
  width: 100%;
  margin: 0;
  overflow: hidden;
  float: left;
  max-width: 100%;
  position: relative;
  height: 80px;
}

ul.defier-posts-list li.grid figure.def-list-post img {
  position: absolute;
  width: 35%;
  left: 0;
  top: 0%;
  bottom: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

@media (min-width: 320px) and (max-width: 767px) {
  ul.defier-posts-list li.grid figure.def-list-post img {
    width: 50%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  ul.defier-posts-list li.grid figure.def-list-post img {
    width: 50%;
  }
}

ul.defier-posts-list li.grid figure.def-list-post figcaption {
  text-align: left;
  position: relative;
  width: 65%;
  float: right;
  padding: 0 10px 0 15px;
  background: #fff;
  z-index: 999;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

ul.defier-posts-list li.grid figure.def-list-post h5 {
  margin: 0;
}

ul.defier-posts-list li.grid figure.def-list-post h5 a {
  position: relative;
  overflow: hidden;
  padding: 0;
  float: left;
  margin: 0px 0 5px;
  line-height: 130%;
  text-transform: initial;
  color: <?php echo $color_main5; ?>;
}

ul.defier-posts-list li.grid figure.def-list-post .meta-label {
  position: relative;
  overflow: hidden;
  padding: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
  opacity: 1;
  float: left;
  font-size: 70%;
  z-index: 999999;
  color: #ccc;
}

ul.defier-posts-list li.grid figure.def-list-post .meta-label i {
  margin-right: 5px;
  margin-left: auto;
  float: left;
  margin-top: 2px;
}

ul.defier-posts-list li.grid figure.def-list-post:hover figcaption {
  position: absolute;
  width: 100%;
  right: 0;
  left: 0;
  padding: 0 10px 0 15px;
  z-index: 999;
  background: transparent;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

ul.defier-posts-list li.grid figure.def-list-post:hover figcaption:before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: #000;
  opacity: 0.4;
}

ul.defier-posts-list li.grid figure.def-list-post:hover img {
  max-width: none;
  width: -webkit-calc(100% + 20px);
  width: calc(100% + 20px);
  opacity: 0.7;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

ul.defier-posts-list li.grid figure.def-list-post:hover h5 a {
  text-align: left;
  margin: 12px 0;
  color: #fff;
}

ul.defier-posts-list li.grid figure.def-list-post:hover .meta-label {
  opacity: 0;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

@media (min-width: 768px) and (max-width: 1199px) {
  ul.firstBigItem li.grid {
    width: 50%;
  }
}

ul.firstBigItem li.grid:first-child {
  border-bottom: 0;
  height: 160px;
}

@media (min-width: 768px) and (max-width: 1199px) {
  ul.firstBigItem li.grid:first-child {
    width: 100%;
  }
}

ul.firstBigItem li.grid:first-child figure.def-list-post {
  height: 155px;
  -webkit-box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
  -moz-box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
  -o-box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
  -ms-box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
  box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
}

ul.firstBigItem li.grid:first-child figure.def-list-post figcaption {
  position: absolute;
  width: 100%;
  background: transparent;
}

ul.firstBigItem li.grid:first-child figure.def-list-post figcaption h5 a {
  position: absolute;
  top: 55%;
  left: 0;
  width: 100%;
  color: #fff;
  padding: 0 5%;
  line-height: 155%;
  text-align: left;
  -ms-transform: translate3d(0, -50%, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, -50%, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, -50%, 0);
  transform-origin: 20% 40%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
  text-transform: capitalize;
}

@media (min-width: 320px) and (max-width: 767px) {
  ul.firstBigItem li.grid:first-child figure.def-list-post figcaption h5 a {
    top: 60%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  ul.firstBigItem li.grid:first-child figure.def-list-post figcaption h5 a {
    top: 60%;
  }
}

ul.firstBigItem li.grid:first-child figure.def-list-post figcaption .meta-label {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  opacity: 0;
  -ms-transform: translate3d(0, 10px, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 10px, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 10px, 0);
  transform-origin: 20% 40%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
  text-transform: capitalize;
  text-transform: initial;
  text-align: justify;
  font-size: 65%;
  padding: 2em 5%;
}

@media (min-width: 768px) and (max-width: 1199px) {
  ul.firstBigItem li.grid:first-child figure.def-list-post figcaption .meta-label {
    opacity: 1;
    bottom: 10px;
  }
}

ul.firstBigItem li.grid:first-child figure.def-list-post figcaption .meta-label i {
  margin-right: 10px;
  margin-left: auto;
}

@media (min-width: 320px) and (max-width: 767px) {
  ul.firstBigItem li.grid:first-child figure.def-list-post figcaption .meta-label {
    padding: 1.5em;
    opacity: 1;
    bottom: 10px;
  }
}

ul.firstBigItem li.grid:first-child figure.def-list-post figcaption .meta-label a {
  width: 100%;
  text-align: right;
  margin: 0.5em 0;
  color: #fff;
  float: left;
  font-size: 100%;
  text-transform: uppercase;
}

ul.firstBigItem li.grid:first-child figure.def-list-post figcaption .meta-label a i {
  margin-right: 10px;
  margin-left: auto;
  font-size: 110%;
  color: <?php echo $color_main3; ?>;
}

ul.firstBigItem li.grid:first-child figure.def-list-post figcaption time {
  color: #fff;
  top: 20%;
  z-index: 999999999999999999999999999999999;
  float: right;
  position: absolute;
  display: block;
  right: 5%;
  opacity: 0;
  -ms-transform: translate3d(0, 10px, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 10px, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 10px, 0);
  transform-origin: 20% 40%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
}

ul.firstBigItem li.grid:first-child figure.def-list-post figcaption time i {
  font-size: 120%;
  margin-right: 10px;
  margin-left: auto;
}

ul.firstBigItem li.grid:first-child figure.def-list-post figcaption:before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 40%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 40%);
  content: '';
  opacity: 0.5;
  -ms-transform: translate3d(0, 50%, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 50%, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 50%, 0);
  transform-origin: 20% 40%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
}

ul.firstBigItem li.grid:first-child figure.def-list-post img {
  position: relative;
  display: block;
  min-height: inherit;
  max-width: initial;
  opacity: 1;
  width: 110%;
  height: auto;
  margin: 0 auto;
  margin: 0 auto;
  left: 0%;
}

@media (min-width: 768px) and (max-width: 1199px) {
  ul.firstBigItem li.grid:first-child figure.def-list-post img {
    width: 110%;
    height: auto;
    top: 0vh;
    left: 0%;
  }
}

@media (min-width: 320px) and (max-width: 767px) {
  ul.firstBigItem li.grid:first-child figure.def-list-post figcaption h2 a {
    color: #fff;
    -ms-transform: translate3d(0, -50%, 0) translate3d(0, -75px, 0);
    /* IE 9 */
    -ms-transform-origin: 20% 40%;
    /* IE 9 */
    -webkit-transform: translate3d(0, -50%, 0) translate3d(0, -75px, 0);
    /* Chrome, Safari, Opera */
    -webkit-transform-origin: 20% 40%;
    /* Chrome, Safari, Opera */
    transform: translate3d(0, -50%, 0) translate3d(0, -75px, 0);
    transform-origin: 20% 40%;
  }
  ul.firstBigItem li.grid:first-child figure.def-list-post figcaption:before {
    opacity: 1;
    -ms-transform: translate3d(0, 0, 0);
    /* IE 9 */
    -ms-transform-origin: 20% 40%;
    /* IE 9 */
    -webkit-transform: translate3d(0, 0, 0);
    /* Chrome, Safari, Opera */
    -webkit-transform-origin: 20% 40%;
    /* Chrome, Safari, Opera */
    transform: translate3d(0, 0, 0);
    transform-origin: 20% 40%;
    background: -webkit-linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
    background: -o-linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
    background: linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
    top: 0;
  }
  ul.firstBigItem li.grid:first-child figure.def-list-post figcaption .meta-label {
    opacity: 1;
    -ms-transform: translate3d(0, 0, 0);
    /* IE 9 */
    -ms-transform-origin: 20% 40%;
    /* IE 9 */
    -webkit-transform: translate3d(0, 0, 0);
    /* Chrome, Safari, Opera */
    -webkit-transform-origin: 20% 40%;
    /* Chrome, Safari, Opera */
    transform: translate3d(0, 0, 0);
    transform-origin: 20% 40%;
  }
}

@media (min-width: 320px) and (max-width: 767px) and (min-width: 320px) and (max-width: 767px) {
  ul.firstBigItem li.grid:first-child figure.def-list-post figcaption .meta-label {
    padding: 1.5em;
  }
}

@media (min-width: 320px) and (max-width: 767px) {
  ul.firstBigItem li.grid:first-child figure.def-list-post figcaption .meta-label a {
    width: 100%;
    text-align: right;
    margin: 0.5em 0;
    color: #fff;
  }
  ul.firstBigItem li.grid:first-child figure.def-list-post figcaption time {
    opacity: 1;
    -ms-transform: translate3d(0, 0, 0);
    /* IE 9 */
    -ms-transform-origin: 20% 40%;
    /* IE 9 */
    -webkit-transform: translate3d(0, 0, 0);
    /* Chrome, Safari, Opera */
    -webkit-transform-origin: 20% 40%;
    /* Chrome, Safari, Opera */
    transform: translate3d(0, 0, 0);
    transform-origin: 20% 40%;
  }
}

ul.firstBigItem li.grid:first-child figure.def-list-post:hover figcaption h5 a {
  color: #fff;
  -ms-transform: translate3d(0, -50%, 0) translate3d(0, -40px, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, -50%, 0) translate3d(0, -40px, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, -50%, 0) translate3d(0, -40px, 0);
  transform-origin: 20% 40%;
}

ul.firstBigItem li.grid:first-child figure.def-list-post:hover figcaption:before {
  opacity: 1;
  -ms-transform: translate3d(0, 0, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 0, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 0, 0);
  transform-origin: 20% 40%;
  background: -webkit-linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
  background: -o-linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
  background: linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
  top: 0;
}

ul.firstBigItem li.grid:first-child figure.def-list-post:hover figcaption .meta-label {
  opacity: 1;
  -ms-transform: translate3d(0, 0, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 0, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 0, 0);
  transform-origin: 20% 40%;
}

@media (min-width: 320px) and (max-width: 767px) {
  ul.firstBigItem li.grid:first-child figure.def-list-post:hover figcaption .meta-label {
    padding: 1.5em;
  }
}

ul.firstBigItem li.grid:first-child figure.def-list-post:hover figcaption .meta-label a {
  width: 100%;
  text-align: right;
  margin: 0.5em 0;
  color: #fff;
}

ul.firstBigItem li.grid:first-child figure.def-list-post:hover figcaption time {
  opacity: 1;
  -ms-transform: translate3d(0, 0, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 0, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 0, 0);
  transform-origin: 20% 40%;
}

@media (min-width: 768px) and (max-width: 1199px) {
  .latest-posts ul.firstBigItem li.grid {
    width: 100%;
  }
}

/*** Box List ***/
ul.half-list li.defier-first-post {
  width: 100%;
  height: 280px !important;
  margin-bottom: 20px !important;
}

ul.half-list li.defier-first-post .grid {
  background: <?php echo $color_main2; ?>;
  width: 100%;
  height: 280px;
}

ul.half-list li.defier-first-post .grid figure.effect-thumbDefier {
  float: left;
  max-width: 100%;
  width: 100%;
  height: 280px !important;
}

@media (min-width: 320px) and (max-width: 767px) {
  ul.half-list li.defier-first-post .grid figure.effect-thumbDefier img {
    top: 0vh;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  ul.half-list li.defier-first-post .grid figure.effect-thumbDefier img {
    top: 0vh;
  }
}

ul.half-list li.defier-first-post .grid figure.effect-thumbDefier figcaption h2 a {
  font-size: 100%;
  text-align: center;
}

@media (min-width: 320px) and (max-width: 767px) {
  ul.half-list li.defier-first-post .grid figure.effect-thumbDefier figcaption h2 a {
    font-size: 70% !important;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  ul.half-list li.defier-first-post .grid figure.effect-thumbDefier figcaption h2 a {
    font-size: 80% !important;
  }
}

ul.half-list li.defier-first-post .grid figure.effect-thumbDefier p {
  font-size: 85% !important;
}

@media (min-width: 320px) and (max-width: 767px) {
  ul.half-list li.defier-first-post .grid figure.effect-thumbDefier p {
    font-size: 75% !important;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  ul.half-list li.defier-first-post .grid figure.effect-thumbDefier p {
    font-size: 75% !important;
  }
}

ul.half-list li.grid {
  width: 50%;
  float: left;
}

@media (min-width: 320px) and (max-width: 767px) {
  ul.half-list li.grid {
    width: 100%;
    margin-right: 0;
    margin-left: auto;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  ul.half-list li.grid {
    width: 50%;
    margin-right: 0;
    margin-left: auto;
  }
}

/****** slider Block ********/
.sliderBlockWrapper {
  margin: 0px -15px;
  height: 80vh;
  overflow: hidden;
  position: relative;
}

@media (min-width: 768px) and (max-width: 1199px) {
  .sliderBlockWrapper {
    height: 50vh;
  }
}

.sliderBlockWrapper .blockSlider div.grid .figure.slidertwoWarpper {
  height: 100vh !important;
}

.sliderBlockWrapper .blockSlider .slick-list div.grid .figure.slidertwoWarpper {
  height: 100vh !important;
}

.sliderBlockWrapper .blockSlider .slick-list {
  width: 100%;
  float: right;
  display: block;
}

.sliderBlockWrapper .blockSlider .slick-list .slick-slide {
  float: left;
}

.sliderBlockWrapper .blockSlider figure {
  border-radius: 0;
  height: 80vh !important;
}

@media (min-width: 320px) and (max-width: 767px) {
  .sliderBlockWrapper .blockSlider figure {
    height: 100vh !important;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .sliderBlockWrapper .blockSlider figure {
    height: 50vh !important;
  }
}

.sliderBlockWrapper .blockSlider figure img {
  opacity: 1;
}

@media (min-width: 320px) and (max-width: 767px) {
  .sliderBlockWrapper .blockSlider figure img {
    min-width: 370%;
    left: -140%;
  }
}

.sliderBlockWrapper .blockSlider figure .catLabel {
  padding-left: 25px;
  text-transform: capitalize;
}

@media (min-width: 320px) and (max-width: 767px) {
  .sliderBlockWrapper .blockSlider figure .catLabel {
    padding-left: 5px;
    padding-right: 5px;
    top: 1%;
  }
}

.sliderBlockWrapper .blockSlider figure figcaption:before {
  position: absolute;
  top: 0;
  height: 80vh;
  left: 0;
  right: 0;
  /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,ffffff+51&1+0,0+52 */
  background: -moz-linear-gradient(top, black 0%, rgba(255, 255, 255, 0.02) 51%, rgba(255, 255, 255, 0) 52%);
  /* FF3.6-15 */
  background: -webkit-linear-gradient(top, black 0%, rgba(255, 255, 255, 0.02) 51%, rgba(255, 255, 255, 0) 52%);
  /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(to bottom, black 0%, rgba(255, 255, 255, 0.02) 51%, rgba(255, 255, 255, 0) 52%);
  /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#00ffffff',GradientType=0 );
  /* IE6-9 */
  transform: translate3d(0, -3%, 0);
  transform-origin: 0 0;
}

.sliderBlockWrapper .blockSlider figure figcaption h2 a {
  top: 28.5vh;
  font-size: 100%;
  text-align: center;
  padding: 0 13%;
}

@media (min-width: 320px) and (max-width: 767px) {
  .sliderBlockWrapper .blockSlider figure figcaption h2 a {
    top: 32vh !important;
    text-align: center;
  }
}

.sliderBlockWrapper .blockSlider figure figcaption p {
  position: absolute;
  top: 45%;
  font-size: 90%;
  padding: 2em 14%;
  line-height: 30px;
}

.sliderBlockWrapper .blockSlider figure figcaption .enterPostEnter {
  position: absolute;
  bottom: -5vh;
  width: 100%;
  padding: 0 14%;
  opacity: 0;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

@media (min-width: 320px) and (max-width: 767px) {
  .sliderBlockWrapper .blockSlider figure figcaption .enterPostEnter {
    opacity: 1;
    bottom: 5vh;
  }
}

.sliderBlockWrapper .blockSlider figure figcaption .enterPostEnter .enterPost {
  color: #fff;
  font-size: 4em;
  bottom: 0;
  background-repeat: no-repeat;
  background-position: center center;
  object: 0.8;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
  z-index: 99999;
}

.sliderBlockWrapper .blockSlider figure figcaption .enterPostEnter .enterPost:hover {
  object: 1;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.sliderBlockWrapper .blockSlider figure figcaption .enterPostEnter .linePostEnter {
  height: 2px;
  background: rgba(255, 255, 255, 0.5);
  margin: 40px 0;
}

@media (min-width: 320px) and (max-width: 767px) {
  .sliderBlockWrapper .blockSlider figure figcaption .enterPostEnter .linePostEnter {
    display: none;
  }
}

.sliderBlockWrapper .blockSlider figure figcaption .meta-label {
  left: 0;
  opacity: 1;
  top: 38vh;
  right: 0;
  width: auto;
  text-align: center;
  padding: 0 15%;
}

@media (min-width: 320px) and (max-width: 767px) {
  .sliderBlockWrapper .blockSlider figure figcaption .meta-label {
    left: 0;
    right: 0;
    width: 50vw;
    opacity: 1;
    top: 40vh;
    width: auto;
    text-align: center;
    padding: 0 15%;
  }
}

.sliderBlockWrapper .blockSlider figure:hover .catLabel {
  padding-left: 5px;
  text-transform: capitalize;
}

.sliderBlockWrapper .blockSlider figure:hover figcaption:before {
  position: absolute;
  top: 0;
  height: 100vh;
  left: 0;
  bottom: 0;
  right: 0;
  /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,ffffff+100&1+0,0+100 */
  background: -moz-linear-gradient(top, black 0%, rgba(255, 255, 255, 0) 100%);
  /* FF3.6-15 */
  background: -webkit-linear-gradient(top, black 0%, rgba(255, 255, 255, 0) 100%);
  /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(to bottom, black 0%, rgba(255, 255, 255, 0) 100%);
  /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#00ffffff',GradientType=0 );
  /* IE6-9 */
  transform: translate3d(0, -3%, 0);
  transform-origin: 0 0;
}

.sliderBlockWrapper .blockSlider figure:hover figcaption h2 a {
  top: 28vh;
  font-size: 100%;
  text-align: center;
  padding: 0 13%;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

@media (min-width: 768px) and (max-width: 1199px) {
  .sliderBlockWrapper .blockSlider figure:hover figcaption h2 a {
    opacity: 0;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
  }
}

.sliderBlockWrapper .blockSlider figure:hover figcaption .meta-label {
  left: 0;
  width: 50vw;
  opacity: 1;
  top: 32vh;
  right: 0;
  width: auto;
  text-align: center;
  padding: 0 15%;
}

@media (min-width: 768px) and (max-width: 1199px) {
  .sliderBlockWrapper .blockSlider figure:hover figcaption .meta-label {
    top: 10vh;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
  }
}

.sliderBlockWrapper .blockSlider figure:hover figcaption p {
  position: absolute;
  top: 45%;
  font-size: 90%;
  padding: 2em 14%;
  line-height: 30px;
}

@media (min-width: 768px) and (max-width: 1199px) {
  .sliderBlockWrapper .blockSlider figure:hover figcaption p {
    top: 30%;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
  }
}

.sliderBlockWrapper .blockSlider figure:hover figcaption .enterPostEnter {
  position: absolute;
  bottom: 5vh;
  opacity: 1;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.sliderBlockWrapper .blockSlider .slick-dots {
  position: absolute;
  top: 32vh;
  display: block;
  width: 100%;
  padding: 0;
  margin: 0;
  list-style: none;
  text-align: center;
  z-index: 9999999;
  float: right;
  width: 20px;
  right: 3%;
}

@media (min-width: 320px) and (max-width: 767px) {
  .sliderBlockWrapper .blockSlider .slick-dots {
    top: 8vh;
    bottom: auto;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .sliderBlockWrapper .blockSlider .slick-dots {
    top: 8vh;
  }
}

.sliderBlockWrapper .blockSlider .slick-dots li {
  position: relative;
  display: inline-block;
  width: 20px;
  height: 20px;
  margin: 0 5px;
  padding: 0;
  cursor: pointer;
  float: right;
}

.sliderBlockWrapper .blockSlider .slick-dots li button {
  font-size: 0;
  line-height: 0;
  display: inline;
  width: 3px;
  height: 3px;
  padding: 3px;
  cursor: pointer;
  color: transparent;
  border: 0;
  outline: none;
  background: #ededed;
  border-radius: 50%;
  -webkit-transition: "all 0.3s";
  -moz-transition: "all 0.3s";
  -ms-transition: "all 0.3s";
  transition: "all 0.3s";
}

.sliderBlockWrapper .blockSlider .slick-dots li.slick-active button {
  width: 5px;
  height: 5px;
  padding: 5px;
  -webkit-transition: "all 0.3s";
  -moz-transition: "all 0.3s";
  -ms-transition: "all 0.3s";
  transition: "all 0.3s";
  background: <?php echo $color_main3; ?>;
}

.grid figure.effect-thumbDefier a.readMore {
  position: absolute;
  bottom: 0%;
  opacity: 1;
  right: 5%;
  -webkit-transition: all 100s ease;
  -moz-transition: all 100s ease;
  -ms-transition: all 100s ease;
  transition: all 100s ease;
  right: 5%;
  z-index: 9999999999999999999;
  text-align: right;
  margin: -0.5em 0 !important;
  color: #fff;
  float: left;
  font-size: 1em;
  text-transform: uppercase;
  width: auto;
}

@media (min-width: 320px) and (max-width: 767px) {
  .grid figure.effect-thumbDefier a.readMore {
    bottom: 20px;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .grid figure.effect-thumbDefier a.readMore {
    bottom: 20px;
  }
}

.grid figure.effect-thumbDefier a.readMore i {
  margin-left: 10px;
  margin-right: auto;
  font-size: 110%;
  float: right;
  color: <?php echo $color_main3; ?>;
}

.grid figure.effect-thumbDefier:hover a.readMore {
  position: absolute;
  bottom: 0%;
  opacity: 1;
  right: 5%;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
  text-align: right;
  margin: 0em 0 !important;
  color: #fff;
  font-size: 1em;
  text-transform: uppercase;
  width: auto;
}

/****** reverse List *******/
.defier-block-box .highlights-full ul.reverseList {
  margin: 0;
  padding: 0;
}

.defier-block-box .highlights-full ul.reverseList li {
  margin: 0 !important;
  padding: 0 !important;
  height: 230px !important;
  overflow: hidden;
  float: left;
  border-bottom: 0px !important;
}

.defier-block-box .highlights-full ul.reverseList li .gridThumb {
  float: right;
}

.defier-block-box .highlights-full ul.reverseList li .gridThumb .grid figure.effect-thumbDefier .meta-label {
  bottom: 8%;
  display: block;
  right: 0;
  left: 0;
  padding: 10px 35px;
  top: auto;
  bottom: 8%;
}

@media (min-width: 320px) and (max-width: 767px) {
  .defier-block-box .highlights-full ul.reverseList li .gridThumb .grid figure.effect-thumbDefier .meta-label {
    opacity: 1;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .defier-block-box .highlights-full ul.reverseList li .gridThumb .grid figure.effect-thumbDefier .meta-label {
    opacity: 1;
  }
}

.defier-block-box .highlights-full ul.reverseList li .boxContent {
  padding: 15px 25px;
  height: 230px;
  position: relative;
}

.defier-block-box .highlights-full ul.reverseList li .boxContent h2 {
  margin-top: 0;
  border-bottom: 1px solid #f1f1f1;
  max-height: 105px;
  overflow: hidden;
}

.defier-block-box .highlights-full ul.reverseList li .boxContent h2 a {
  color: <?php echo $color_main2; ?>;
  font-size: 75%;
}

.defier-block-box .highlights-full ul.reverseList li .boxContent h2 a:hover {
  color: <?php echo $color_main5; ?>;
}

.defier-block-box .highlights-full ul.reverseList li .boxContent p {
  color: <?php echo $color_main6; ?>;
  font-size: 100%;
}

.defier-block-box .highlights-full ul.reverseList li .boxContent p a.readMore {
  position: relative;
  opacity: 1;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
  z-index: 9999999999999999999;
  text-align: right;
  margin: 2.5em 0 !important;
  color: <?php echo $color_main6; ?>;
  float: right;
  font-size: 1em;
  text-transform: uppercase;
  width: auto;
}

.defier-block-box .highlights-full ul.reverseList li .boxContent p a.readMore i {
  margin-left: 10px;
  margin-right: auto;
  float: right;
  font-size: 110%;
  line-height: 1.2;
  color: <?php echo $color_main3; ?>;
}

.defier-block-box .highlights-full ul.reverseList li:nth-child(odd) .gridThumb {
  float: left;
}

.panel-grid-cell {
  padding-left: 15px !important;
  padding-right: 15px !important;
}

/**************** tabs widget *****************/
.tabs-data {
  background: #efefef;
  float: left;
  padding: 20px 10px;
  width: 100%;
}

.tabs-data ul.tab-posts {
  opacity: 0;
  display: none;
}

.tabs-data ul.active {
  opacity: 1;
  display: block;
}

.tabs-data ul.defier-posts-list li.grid {
  border-bottom: 1px solid #ddd;
}

.tabs-data ul.defier-posts-list li.grid figure.def-list-post {
  border-radius: 0px;
}

.tabs-data ul.defier-posts-list li.grid figure.def-list-post figcaption {
  background: transparent;
}

.tabs-data ul.defier-posts-list li.grid figure.def-list-post figcaption p {
  color: #555;
}

.tabs-data ul.defier-posts-list li.grid figure.def-list-post:hover figcaption h5 a {
  text-align: center;
  outline: none;
}

.tabs-data ul.defier-posts-list li.grid:last-child {
  border-bottom: 0px;
}

ul.tabs-list {
  border-bottom: 4px solid <?php echo $color_main2; ?>;
  width: 100%;
  float: left;
}

ul.tabs-list li {
  display: block;
  margin-bottom: -4px;
  padding: 10px 15px;
  float: left;
  background: transparent;
  font-size: 18px;
  font-weight: 800;
  border-bottom: 4px solid transparent;
}

ul.tabs-list li a {
  color: <?php echo $color_main6; ?>;
  float: left;
  font-weight: 800;
}

ul.tabs-list .active {
  border-bottom: 4px solid <?php echo $color_main3; ?>;
}

ul.tabs-list .active a {
  color: <?php echo $color_main3; ?>;
}

/*** Tab ***/
.widget-tab {
  border: 1px solid #ededed;
  padding: 20px;
  float: left;
  width: 100%;
  margin-bottom: 25px;
}

@media (min-width: 768px) and (max-width: 1199px) {
  .widget-tab {
    padding: 10px;
  }
}

.widget-tab ul.login-links {
  float: right;
  text-align: center;
  padding: 10px 0;
}

.widget-tab ul.login-links li {
  border-bottom: 0px;
}

.widget-tab ul.login-links li a {
  color: <?php echo $color_main6; ?>;
}

.widget-tab .checkbox {
  float: left;
}

.widget-tab .checkbox label {
  position: relative;
}

.widget-tab .checkbox label input[type=checkbox] {
  position: absolute;
  left: 0;
  width: auto;
  margin: 5px;
}

.widget-tab .defier-cat-title:before {
  position: absolute;
  top: 18px;
  left: 0;
  right: 0;
  height: 2px;
  background: #e1e1e1;
  content: "";
}

.widget-tab .defier-cat-title .lavecat {
  background: <?php echo $color_main2; ?>;
}

.widget-tab .author-avatar {
  width: 100%;
  display: block;
  position: relative;
  text-align: center;
}

.widget-tab .author-avatar img {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
  border: 6px solid <?php echo $color_main3; ?>;
  position: relative;
  height: 85px;
  width: 85px;
}

.widget-tab .author-avatar:after {
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 25px 5px 0 5px;
  border-color: <?php echo $color_main3; ?> transparent transparent transparent;
  top: 138px;
  position: absolute;
  margin: 0 auto;
  right: 48%;
}

.widget-tab .welcome-text {
  text-align: center;
  font-size: 145%;
  margin-top: 35px;
}

.widget-tab ul.user-login-links {
  text-align: center;
}

.widget-tab ul.user-login-links li {
  display: inline-block;
  border: 0px;
}

.widget-tab ul.user-login-links li a {
  color: <?php echo $color_main2; ?>;
  padding: 5px;
  margin: 5px;
  border: 1px solid <?php echo $color_main4; ?>;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  border-radius: 3px;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.widget-tab ul.user-login-links li a:hover {
  color: <?php echo $color_main2; ?>;
  border: 1px solid <?php echo $color_main2; ?>;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.login-button {
  box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.26);
  background-color: #eee;
  color: #fff;
  display: inline-block;
  position: relative;
  height: 40px;
  padding: 0;
  line-height: 32px;
  border-radius: 2px;
  font-size: 0.9em;
  background-color: <?php echo $color_main2; ?>;
  border: 0;
  font-size: 100%;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.login-button:hover {
  background: <?php echo $color_main3; ?>;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

/***** tagcloud ******/
.tagcloud a {
  color: <?php echo $color_main2; ?>;
  background: transparent;
  padding: 0px;
  border-radius: 0px;
  margin: 0;
  display: inline-block;
}

.tagcloud a:hover {
  background: transparent;
  padding: 0px;
  border-radius: 0px;
  margin: 0;
  color: <?php echo $color_main3; ?>;
}

/**** about us Widget ******/
.about-widget {
  padding-bottom: 20px;
}

.about-widget p {
  color: <?php echo $color_main5; ?>;
  text-align: justify;
  font-size: 102%;
  display: inline-block;
  font-weight: 200;
  margin: 15px 10px;
  line-height: 21px;
}

.about-widget figure.imgProfile {
  margin-top: 0;
  padding: 0;
  width: 100%;
  border: 8px solid #fff;
  background: #fff;
  overflow: hidden;
  position: relative;
  height: 220px;
}

.about-widget figure.imgProfile img {
  border-radius: 0;
  margin: 0;
  width: 100%;
  position: absolute;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.about-widget figure.imgProfile figcaption {
  color: #fff;
  z-index: 999999;
  position: absolute;
  left: 13px;
  bottom: 0;
  right: 0;
}

.about-widget figure.imgProfile figcaption h2 {
  z-index: 99999999;
  color: #fff;
  position: absolute;
  bottom: 76px;
  left: 35px;
  font-size: 200%;
  width: 100%;
  border-bottom: 1px solid rgba(255, 255, 255, 0.4);
  margin: 0;
}

.about-widget figure.imgProfile figcaption .aut_social {
  text-align: left;
  margin: 0 30px;
  position: absolute;
  bottom: 35px;
}

.about-widget figure.imgProfile figcaption .aut_social a {
  text-align: center;
  opacity: 0.8;
  transition: all 0.5s ease;
}

.about-widget figure.imgProfile figcaption .aut_social a:hover {
  opacity: 1;
  transition: all 0.5s ease;
  color: #fff;
}

.about-widget figure.imgProfile figcaption .aut_social a:hover span {
  color: #fff;
}

/************ Tabs Recent ***************/
ul.defier-tabs-nav {
  list-style: none;
  width: 100%;
  float: left;
  position: relative;
}

ul.defier-tabs-nav li {
  display: inline-block;
  float: left;
  background: transparent;
  border-bottom: 4px solid <?php echo $color_main2; ?>;
  -webkit-transition: all 0.3 ease;
  -moz-transition: all 0.3 ease;
  -ms-transition: all 0.3 ease;
  transition: all 0.3 ease;
  text-align: center;
}

ul.defier-tabs-nav li a {
  padding: 0;
  color: <?php echo $color_main2; ?>;
  font-size: 110%;
  height: 50px;
}

ul.defier-tabs-nav li.active {
  border-bottom: 4px solid <?php echo $color_main3; ?>;
  -webkit-transition: all 0.3 ease;
  -moz-transition: all 0.3 ease;
  -ms-transition: all 0.3 ease;
  transition: all 0.3 ease;
}

ul.defier-tabs-nav li.active a {
  color: <?php echo $color_main3; ?>;
}

ul.tab {
  opacity: 0;
  visibility: hidden;
  height: 0;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

ul.show_tab {
  opacity: 1;
  height: auto;
  visibility: visible;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.tab li.defier-posts-list {
  border-bottom: 1px solid #f1f1f1;
  border-top: 0px;
  display: inline-block;
  margin-bottom: 10px;
  width: 100%;
  /*---------------*/
  /***** list  *****/
  /*---------------*/
}

.tab li.defier-posts-list:last-child {
  border: 0;
}

.tab li.defier-posts-list .grid {
  margin: 0;
  padding: 0;
  background: transparent;
  border: 0;
  display: block;
  float: left;
  height: 90px;
  padding-bottom: 10px;
  margin-bottom: 10px;
  width: 100%;
}

.tab li.defier-posts-list .grid:last-child {
  border-bottom: 0px solid #ededed;
  margin-bottom: 0px;
}

@media (min-width: 768px) and (max-width: 1199px) {
  .tab li.defier-posts-list .grid {
    width: 100% !important;
  }
}

.tab li.defier-posts-list .grid figure.def-list-post {
  width: 100%;
  margin: 0;
  float: left;
  max-width: 100%;
  position: relative;
  height: 80px;
}

.tab li.defier-posts-list .grid figure.def-list-post img {
  width: 35%;
  float: left;
}

@media (min-width: 320px) and (max-width: 767px) {
  .tab li.defier-posts-list .grid figure.def-list-post img {
    width: 35%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .tab li.defier-posts-list .grid figure.def-list-post img {
    width: 25%;
    height: auto;
    min-height: auto;
  }
}

.tab li.defier-posts-list .grid figure.def-list-post figcaption {
  text-align: left;
  position: relative;
  width: 65%;
  float: right;
  padding: 0 10px 0 15px;
  background: #fff;
  z-index: 999;
}

@media (min-width: 768px) and (max-width: 1199px) {
  .tab li.defier-posts-list .grid figure.def-list-post figcaption {
    width: 75%;
  }
}

.tab li.defier-posts-list .grid figure.def-list-post h5 {
  position: relative;
  overflow: hidden;
  padding: 0;
  float: left;
  margin: 3px 0;
  font-size: 100%;
  line-height: 120%;
  text-transform: initial;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.tab li.defier-posts-list .grid figure.def-list-post h5 a {
  color: <?php echo $color_main5; ?>;
  font-size: 88%;
}

.tab li.defier-posts-list .grid figure.def-list-post h5 i.fa {
  color: <?php echo $color_main6; ?>;
  margin-right: 5px;
  margin-left: auto;
  font-size: 1.1em;
}

.tab li.defier-posts-list .grid figure.def-list-post h5:hover {
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.tab li.defier-posts-list .grid figure.def-list-post h5:hover a {
  color: <?php echo $color_main2; ?>;
}

.tab li.defier-posts-list .grid figure.def-list-post h5:hover i.fa {
  color: <?php echo $color_main3; ?>;
}

.tab li.defier-posts-list .grid figure.def-list-post .meta-label {
  position: relative;
  overflow: hidden;
  padding: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
  opacity: 1;
  float: left;
  font-size: 70%;
  z-index: 999999;
  color: <?php echo $color_main3; ?>;
}

.tab li.defier-posts-list .grid figure.def-list-post .meta-label i {
  margin-right: 5px;
}

.grid figure p {
  letter-spacing: 0;
  font-size: 68.5%;
}

.format-post {
  height: 48px;
  width: 48px;
  background-size: 100%;
  background-repeat: no-repeat;
  display: inline-block;
}

.icon-standard {
  background: url("../images/icon-standard.png");
}

.icon-video {
  background: url("../images/icon-video.png");
}

.icon-audio {
  background: url("../images/icon-audio.png");
}

.icon-status {
  background: url("../images/icon-status.png");
}

.icon-link {
  background: url("../images/icon-link.png");
}

.icon-quote {
  background: url("../images/icon-quote.png");
}

/*********  Gallery Widget *************/
#portfolio-wrapper .portfolio-list {
  list-style: none;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid {
  background: <?php echo $color_main2; ?>;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery {
  border-radius: 0;
  height: 130px;
  min-width: 100%;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

@media (min-width: 320px) and (max-width: 767px) {
  #portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery {
    height: auto;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  #portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery {
    height: auto;
  }
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery figcaption:after {
  background: rgba(0, 0, 0, 0.4);
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  content: "";
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery figcaption h4 {
  position: absolute;
  z-index: 999;
  text-transform: capitalize;
  top: 0;
  padding: 10px;
  right: 0;
  display: none;
  left: 0;
  background: rgba(0, 0, 0, 0.5);
  margin: 0;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery figcaption h4 a {
  font-size: 100%;
  color: #fff;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery figcaption p.excerpt {
  display: none;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery figcaption p.links {
  z-index: 999999;
  position: absolute;
  top: 0px;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0;
  text-align: center;
  padding-top: 17%;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

@media (min-width: 320px) and (max-width: 767px) {
  #portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery figcaption p.links {
    opacity: 1;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  #portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery figcaption p.links {
    opacity: 1;
  }
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery figcaption p.links a {
  background: <?php echo $color_main1; ?>;
  color: #fff;
  padding: 10px;
  height: 40px;
  width: 40px;
  display: inline-block;
  margin: 5px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery figcaption p.links a i {
  font-size: 160%;
  float: left;
  display: inline-block;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery:hover {
  color: <?php echo $color_main3; ?>;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery:hover figcaption img {
  opacity: 1;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery:hover figcaption h4 {
  top: 0;
  display: none;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery:hover figcaption:after {
  background: transparent;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  content: "";
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery:hover figcaption p.excerpt {
  display: none;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery:hover figcaption p.links {
  opacity: 1;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery:hover figcaption p.links a {
  background: <?php echo $color_main1; ?>;
  color: #fff;
  padding: 10px;
  height: 40px;
  width: 40px;
  display: inline-block;
  margin: 5px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery:hover figcaption p.links a i {
  font-size: 160%;
  float: left;
  display: inline-block;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.effect-thumbDefier-gallery:hover figcaption p.links a:hover {
  color: <?php echo $color_main3; ?>;
  background: #fff;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.fixed-gallery-thum {
  position: fixed;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  top: 0;
  z-index: 99999999999999999999;
  left: 0;
  bottom: 0;
  padding: 3em;
  height: auto !important;
  text-align: center;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.fixed-gallery-thum a {
  display: inline-block;
  margin: 0 21%;
  text-align: center;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.fixed-gallery-thum img {
  opacity: 1;
  z-index: 999;
  margin: 0;
}

@media (min-width: 320px) and (max-width: 767px) {
  #portfolio-wrapper .portfolio-list .gridThumb .grid figure.fixed-gallery-thum img {
    height: auto;
    min-height: auto;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  #portfolio-wrapper .portfolio-list .gridThumb .grid figure.fixed-gallery-thum img {
    height: auto;
    min-height: auto;
  }
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.fixed-gallery-thum h4 {
  display: block !important;
  top: 0px;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.fixed-gallery-thum h4 a {
  display: block;
  margin: 0;
  text-align: left;
  font-size: 120%;
  font-weight: 800;
  margin: 10px;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.fixed-gallery-thum p.excerpt {
  display: block !important;
  z-index: 999999;
  position: absolute;
  bottom: 0;
  background: rgba(0, 0, 0, 0.6);
  text-transform: capitalize;
  padding: 20px;
  width: 100%;
  text-align: left;
  font-size: 74%;
  margin: 0;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.fixed-gallery-thum p.excerpt a {
  margin: 0;
  padding-left: 10px;
  color: #fff;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.fixed-gallery-thum p.excerpt a i {
  padding-right: 5px;
  padding-left: auto;
  color: <?php echo $color_main3; ?>;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.fixed-gallery-thum figcaption p.links {
  display: none;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.fixed-gallery-thum figcaption:after {
  background: rgba(0, 0, 0, 0.7) !important;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.fixed-gallery-thum:hover:after {
  background: rgba(0, 0, 0, 0.7) !important;
}

#portfolio-wrapper .portfolio-list .gridThumb .grid figure.fixed-gallery-thum .searchclose2 {
  text-align: center;
  vertical-align: middle;
  padding: 0px;
  cursor: pointer;
  margin: 15px;
  font-size: 200%;
  color: #fff;
  position: absolute;
  cursor: pointer;
  z-index: 9999999;
  top: 0;
  right: 0;
  left: auto;
}

#portfolio-wrapper .portfolio-list .gridThumb:first-child {
  width: 50%;
  height: 260px;
}

@media (min-width: 320px) and (max-width: 767px) {
  #portfolio-wrapper .portfolio-list .gridThumb:first-child {
    width: 100%;
    height: 216px;
  }
}

#portfolio-wrapper .portfolio-list .gridThumb:first-child .grid figure.effect-thumbDefier-gallery {
  height: 260px;
}

@media (min-width: 320px) and (max-width: 767px) {
  #portfolio-wrapper .portfolio-list .gridThumb:first-child .grid figure.effect-thumbDefier-gallery {
    height: auto;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  #portfolio-wrapper .portfolio-list .gridThumb:first-child .grid figure.effect-thumbDefier-gallery {
    height: auto;
  }
}

#portfolio-wrapper .portfolio-list .gridThumb:first-child .grid figure.effect-thumbDefier-gallery p.links {
  padding-top: 23%;
}

/********************* Metro List ******************/
.big-block .defier-cat-title:before {
  display: none;
}

.big-block .defier-cat-title h4.widget-title {
  background: transparent;
}

.big-block ul.metroList li.bigOne {
  padding: 0;
  margin: 0;
  border: 0;
  float: left;
  width: 33.3333333%;
  overflow: hidden;
  height: 470px;
}

.big-block ul.metroList li.bigOne figure.effect-thumbDefier {
  height: 470px !important;
}

.big-block ul.metroList li.bigOne figure.effect-thumbDefier img {
  opacity: 1;
  position: absolute;
  width: 250%;
  max-width: 1000%;
  left: -50%;
}

.big-block ul.metroList li.bigOne figure.effect-thumbDefier figcaption h2 a {
  font-size: 100%;
  text-align: left;
}

.big-block ul.metroList li.bigOne figure.effect-thumbDefier figcaption p {
  font-size: 80%;
  padding-bottom: 55px;
}

.big-block ul.metroList li.bigOne figure.effect-thumbDefier figcaption:before {
  /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&0+0,0.74+100 */
  background: -moz-linear-gradient(top, transparent 0%, rgba(0, 0, 0, 0.74) 100%);
  /* FF3.6-15 */
  background: -webkit-linear-gradient(top, transparent 0%, rgba(0, 0, 0, 0.74) 100%);
  /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.74) 100%);
  /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#bd000000',GradientType=0 );
  /* IE6-9 */
}

@media (min-width: 320px) and (max-width: 767px) {
  .big-block ul.metroList li.bigOne {
    width: 100%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .big-block ul.metroList li.bigOne {
    width: 50%;
  }
}

.big-block ul.metroList li.smallOne {
  width: 33.3333333%;
  height: 235px;
  overflow: hidden;
  margin: 0;
  border: 0;
  float: left;
  padding: 0;
}

.big-block ul.metroList li.smallOne figure.effect-thumbDefier {
  height: 235px !important;
}

.big-block ul.metroList li.smallOne figure.effect-thumbDefier img {
  opacity: 1;
}

.big-block ul.metroList li.smallOne figure.effect-thumbDefier figcaption h2 a {
  font-size: 80%;
  text-align: left;
}

.big-block ul.metroList li.smallOne figure.effect-thumbDefier figcaption p {
  font-size: 80%;
  padding: 5em 5%;
}

.big-block ul.metroList li.smallOne figure.effect-thumbDefier figcaption:before {
  /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&0+0,0.74+100 */
  background: -moz-linear-gradient(top, transparent 0%, rgba(0, 0, 0, 0.74) 100%);
  /* FF3.6-15 */
  background: -webkit-linear-gradient(top, transparent 0%, rgba(0, 0, 0, 0.74) 100%);
  /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.74) 100%);
  /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#bd000000',GradientType=0 );
  /* IE6-9 */
}

.big-block ul.metroList li.smallOne figure.effect-thumbDefier:hover figcaption h2 {
  opacity: 0;
}

.big-block ul.metroList li.smallOne figure.effect-thumbDefier:hover figcaption h2 a {
  font-size: 80%;
  text-align: left;
  font-weight: bold;
}

.big-block ul.metroList li.smallOne figure.effect-thumbDefier:hover figcaption h2:before {
  /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&0+0,0.74+100 */
  background: -moz-linear-gradient(top, transparent 0%, rgba(0, 0, 0, 0.74) 100%);
  /* FF3.6-15 */
  background: -webkit-linear-gradient(top, transparent 0%, rgba(0, 0, 0, 0.74) 100%);
  /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.74) 100%);
  /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#bd000000',GradientType=0 );
  /* IE6-9 */
}

@media (min-width: 320px) and (max-width: 767px) {
  .big-block ul.metroList li.smallOne {
    width: 100%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .big-block ul.metroList li.smallOne {
    width: 50%;
  }
}

.cat-Link-Metro {
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
  padding: 0;
  background: #fff;
  border: 3px solid;
  padding: 10px 2em;
  position: relative;
  overflow: hidden;
  margin: 2em auto 0;
  width: auto;
  font-size: 123%;
}

.cat-Link-Metro:before {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0%;
  right: auto;
}

.cat-Link-Metro span b {
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
  padding-right: 0em;
  padding-left: auto;
}

.cat-Link-Metro span i {
  opacity: 0;
  display: none;
}

.cat-Link-Metro a {
  color: #fff;
}

.cat-Link-Metro:hover {
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
  background: #fff;
}

.cat-Link-Metro:hover span b {
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
  padding-right: 1em;
  padding-left: auto;
}

.cat-Link-Metro:hover span i {
  opacity: 1;
  display: inline-block;
}

.alignCenter {
  text-align: center;
  width: 100%;
  float: left;
}

span.defier-cat-title:before {
  position: absolute;
  top: 18px;
  left: 0;
  right: 0;
  height: 2px;
  background: #e1e1e1;
  content: "";
}

.grid {
  background: <?php echo $color_main2; ?>;
}

/****** highlights-full latest *********/
.defier-block-box .highlights-full ul.recentList li.defier-first-post {
  height: auto !important;
  border-bottom: 1px solid #ededed !important;
  padding: 0 0 30px;
  margin-bottom: 30px;
  float: left;
  width: 100%;
}

.defier-block-box .highlights-full ul.recentList li.defier-first-post .grid figure.effect-thumbDefier {
  height: auto;
  width: 100%;
  position: relative;
  min-width: 100%;
}

.defier-block-box .highlights-full ul.recentList li.defier-first-post .grid figure.effect-thumbDefier i {
  position: absolute;
  color: #ededed;
  top: 0;
  font-size: 175%;
  font-weight: 200;
  padding: 1em 0;
  width: 25%;
  background: rgba(0, 0, 0, 0.5);
  left: 0%;
  opacity: 0;
  bottom: 0;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

@media (min-width: 320px) and (max-width: 767px) {
  .defier-block-box .highlights-full ul.recentList li.defier-first-post .grid figure.effect-thumbDefier i {
    opacity: 1;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .defier-block-box .highlights-full ul.recentList li.defier-first-post .grid figure.effect-thumbDefier i {
    opacity: 1;
  }
}

.defier-block-box .highlights-full ul.recentList li.defier-first-post .grid figure.effect-thumbDefier:hover i {
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
  opacity: 1;
}

.defier-block-box .highlights-full ul.recentList li.defier-first-post .boxContent h2 {
  margin: 0;
  padding: 8px;
  position: absolute;
  left: -9%;
  right: auto;
  background: #fff;
  top: 13px;
}

@media (min-width: 320px) and (max-width: 767px) {
  .defier-block-box .highlights-full ul.recentList li.defier-first-post .boxContent h2 {
    left: 0%;
    right: auto;
    position: relative;
    margin: 0 0 22px 0;
    padding: 0 0;
    background: transparent;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .defier-block-box .highlights-full ul.recentList li.defier-first-post .boxContent h2 {
    left: 0%;
    right: auto;
    position: relative;
    margin: 0 0 22px 0;
    padding: 0 0;
    background: transparent;
  }
}

.defier-block-box .highlights-full ul.recentList li.defier-first-post .boxContent h2 a {
  color: #000;
}

.defier-block-box .highlights-full ul.recentList li.defier-first-post .boxContent h2:hover a {
  color: <?php echo $color_main2; ?>;
}

.defier-block-box .highlights-full ul.recentList li.defier-first-post .boxContent .meta-label {
  width: 100%;
  margin: 110px 0 10px;
  float: left;
}

@media (min-width: 320px) and (max-width: 767px) {
  .defier-block-box .highlights-full ul.recentList li.defier-first-post .boxContent .meta-label {
    margin-top: 0px;
    padding: 15px 0;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .defier-block-box .highlights-full ul.recentList li.defier-first-post .boxContent .meta-label {
    margin-top: 0px;
    padding: 15px 0;
  }
}

.defier-block-box .highlights-full ul.recentList li.defier-first-post .boxContent .meta-label div {
  float: left;
  font-size: 90%;
  margin: 0;
  margin-right: 20px;
  margin-left: auto;
  color: #777;
  display: block;
  float: left;
  padding: 0px 0px;
}

.defier-block-box .highlights-full ul.recentList li.defier-first-post .boxContent .meta-label div .like-counter a {
  color: #777;
}

.defier-block-box .highlights-full ul.recentList li.defier-first-post .boxContent .meta-label div i {
  margin-right: 5px;
  margin-left: auto;
  float: left;
  font-size: 1.2em;
  line-height: 1;
}

.defier-block-box .highlights-full ul.recentList li.defier-first-post .boxContent p {
  color: #797979;
  font-size: 110%;
  text-align: justify;
}

.defier-block-box .highlights-full ul.recentList li.defier-first-post .boxContent p .readMore {
  opacity: 1;
  text-align: right;
  color: <?php echo $color_main2; ?>;
  font-size: 1em;
  margin-left: 15px;
  width: auto;
}

.defier-block-box .highlights-full ul.recentList li.defier-first-post .boxContent p .readMore i {
  margin-right: 5px;
  margin-left: auto;
  font-size: 88%;
  color: #797979;
  float: none;
}

.defier-block-box .highlights-full ul.recentList li.defier-first-post:first-child {
  border-bottom: 1px solid #ededed !important;
}

.defier-block-box .highlights-full ul.recentList li.defier-first-post:last-child {
  border-bottom: 0px solid #ededed !important;
}

/*******  twitter widget  *******/
.widget-tab .twitter-widget {
  float: left;
  width: 100%;
  height: 235px;
  padding: 15px;
  font-family: inherit;
  position: relative;
}

.widget-tab .twitter-widget .slick-slider {
  width: 100%;
  float: left;
}

.widget-tab .twitter-widget .slick-slider span {
  color: #222;
  font-size: 90%;
  margin-bottom: 10px;
}

.widget-tab .twitter-widget .slick-slider span a {
  color: <?php echo $color_main2; ?>;
}

.widget-tab .twitter-widget .slick-slider .slick-dots li button {
  background: <?php echo $color_main6; ?>;
}

.widget-tab .twitter-widget ul.slick-dots {
  position: absolute;
  top: auto;
  bottom: 70px;
  left: 0;
  padding-bottom: 15px;
}

@media (min-width: 320px) and (max-width: 767px) {
  .widget-tab .twitter-widget ul.slick-dots {
    top: auto;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .widget-tab .twitter-widget ul.slick-dots {
    top: auto;
  }
}

.widget-tab .twitter-widget .twitterfootwrapper {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 20px;
}

.widget-tab .twitter-widget .twitterfootwrapper .twitterFooterC1 {
  font-size: 90%;
  float: left;
  color: <?php echo $color_main6; ?>;
}

.widget-tab .twitter-widget .twitterfootwrapper .twitterFooterC1 .fa-twitter {
  color: #55adec;
  font-size: 160%;
}

.widget-tab .twitter-widget .twitterfootwrapper .follow {
  float: right;
  color: #55adec;
  font-size: 100%;
  background: transparent;
  padding: 0;
}

.posts-list {
  position: relative;
  float: left;
  width: 100%;
}

.posts-list .slick-dots {
  top: 0;
  z-index: 999;
  padding-top: 15px;
  height: 0;
}

.posts-list .slick-dots li button:before {
  display: none;
}

.slick-dots li button:before {
  display: none;
}

/* Sticky Sidebar */
.content-area {
  position: relative;
  z-index: 10;
  width: 100%;
  margin: 0 !important;
}

.navigation {
  float: left;
  width: 100%;
  text-align: center;
  padding: 20px 0;
}

.navigation ul {
  list-style: none;
}

.navigation ul li {
  background: transparent;
  border: 1px solid #ddd;
  padding: 0px;
  display: inline-block;
  margin-right: 4px;
  margin-left: auto;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.navigation ul li a {
  background: transparent;
  padding: 10px;
  color: #777;
  font-size: 100%;
  float: left;
}

.navigation ul li:hover {
  background: <?php echo $color_main3; ?>;
  border: 1px solid <?php echo $color_main3; ?>;
  padding: 0px;
  margin-right: 4px;
  margin-left: auto;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.navigation ul li:hover a {
  background: transparent;
  padding: 10px;
  color: #fff;
  font-size: 100%;
  float: left;
}

.navigation ul li.active {
  background: <?php echo $color_main2; ?>;
  border: 1px solid <?php echo $color_main2; ?>;
  padding: 0px;
  margin-right: 4px;
  margin-left: auto;
}

.navigation ul li.active a {
  background: transparent;
  padding: 10px;
  color: #fff;
  font-size: 100%;
  float: left;
}

/************************ Video Post Format  ************************/
.video-post-format iframe {
  width: 100%;
  height: 400px;
}

.sound-post-format iframe {
  width: 100%;
}

blockquote {
  border: medium none;
  color: #fff;
  margin: 0;
  padding: 50px;
  text-align: center;
}

blockquote p {
  background-color: rgba(0, 0, 0, 0.3);
  border-radius: 5px;
  font-size: 25px;
  padding: 19px;
}

blockquote cite {
  float: right;
}

blockquote cite a {
  color: #fff;
}

blockquote cite a:hover {
  color: #fff;
}

.quote-post-format {
  background-size: cover;
}

.quote-post-format .entry-footer {
  margin: 0;
}

.link-post-format-content {
  border: medium none;
  color: #fff;
  margin: 0;
  padding: 50px;
  text-align: center;
}

@media (min-width: 320px) and (max-width: 767px) {
  .link-post-format-content {
    padding: 100px 15px;
  }
}

@media (min-width: 320px) and (max-width: 767px) {
  .link-post-format-content {
    padding: 100px 30px;
  }
}

.link-post-format-content h2 a {
  color: #fff;
}

@media (min-width: 320px) and (max-width: 767px) {
  .link-post-format-content h2 a {
    line-height: 230%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .link-post-format-content h2 a {
    line-height: 230%;
  }
}

.link-post-format-content h2 a span {
  font-style: italic;
  font-size: 20px;
}

.link-post-format-content h2 a:hover {
  color: #fff;
}

.social-post-embed {
  text-align: center;
  padding: 30px;
  float: left;
  width: 100%;
}

/************************ Video Post Format  ************************/
/* form starting stylings ------------------------------- */
.group {
  position: relative;
  margin-bottom: 25px;
  float: left;
  margin-top: 25px;
  width: 100%;
  /* LABEL ======================================= */
  /* active state */
  /* active state */
  /* BOTTOM BARS ================================= */
  /* active state */
  /* active state */
  /* active state */
  /* ANIMATIONS ================ */
}

.group input, .group textarea {
  font-size: 100%;
  padding: 10px 10px 10px 15px;
  display: block;
  width: 100%;
  margin: 0;
  border: none;
  border-bottom: 1px solid #f4f4f4;
}

.group input:focus, .group textarea:focus {
  outline: none;
}

.group label {
  color: #f4f4f4;
  font-size: 18px;
  font-weight: normal;
  position: absolute;
  pointer-events: none;
  left: 5px;
  top: 10px;
  -webkit-transition: 0.2s ease all;
  -moz-transition: 0.2s ease all;
  -ms-transition: 0.2s ease all;
  transition: 0.2s ease all;
}

.group textarea:focus ~ label, .group textarea:valid ~ label {
  top: -20px;
  font-size: 14px;
  color: <?php echo $color_main2; ?>;
}

.group input:focus ~ label, .group input:valid ~ label {
  top: -20px;
  font-size: 14px;
  color: <?php echo $color_main2; ?>;
}

.group .bar {
  position: relative;
  display: block;
  width: 100%;
}

.group .bar:before, .group .bar:after {
  content: '';
  height: 2px;
  width: 0;
  bottom: 1px;
  position: absolute;
  background: <?php echo $color_main2; ?>;
  -webkit-transition: 0.2s ease all;
  -moz-transition: 0.2s ease all;
  -ms-transition: 0.2s ease all;
  transition: 0.2s ease all;
}

.group .bar:before {
  left: 0%;
  right: auto;
}

.group .bar:after {
  right: 0%;
  left: auto;
}

.group textarea:focus ~ .bar:before, .group textarea:focus ~ .bar:after {
  width: 100%;
}

.group input:focus ~ .bar:before, .group input:focus ~ .bar:after {
  width: 100%;
}

.group textarea:focus ~ .highlight {
  -webkit-animation: inputHighlighter 0.3s ease;
  -moz-animation: inputHighlighter 0.3s ease;
  animation: inputHighlighter 0.3s ease;
}

.group input:focus ~ .highlight {
  -webkit-animation: inputHighlighter 0.3s ease;
  -moz-animation: inputHighlighter 0.3s ease;
  animation: inputHighlighter 0.3s ease;
}

@-webkit-keyframes inputHighlighter {
  from {
    background: <?php echo $color_main2; ?>;
  }
  to {
    width: 0;
    background: transparent;
  }
}

@-moz-keyframes inputHighlighter {
  from {
    background: <?php echo $color_main2; ?>;
  }
  to {
    width: 0;
    background: transparent;
  }
}

@keyframes inputHighlighter {
  from {
    background: <?php echo $color_main2; ?>;
  }
  to {
    width: 0;
    background: transparent;
  }
}

.like-counter a.liked i {
  color: #ff0000;
}

.time, .view-counter, .like-counter {
  float: left;
  display: inline-block;
  margin-right: 15px;
  margin-left: auto;
  text-transform: capitalize;
}

.time a, .view-counter a, .like-counter a {
  color: #fff;
}

ul, ol {
  list-style: none;
}

/***************** timeline *******************/
ul.timeline {
  float: right;
  width: 98%;
}

ul.timeline li {
  float: left;
  display: inline-block;
  width: 100%;
  position: relative;
  padding-left: 35px;
  border: 0px;
  margin: 0;
  -webkit-transition: "all 0.3s ease";
  -moz-transition: "all 0.3s ease";
  -ms-transition: "all 0.3s ease";
  transition: "all 0.3s ease";
  padding-bottom: 20px;
}

ul.timeline li:before {
  content: "";
  width: 2px;
  bottom: 3px;
  top: 20px;
  left: 14px;
  right: auto;
  position: absolute;
  background: #ededed;
}

ul.timeline li i {
  position: absolute;
  left: 10px;
  right: auto;
  top: 7px;
  color: #ccc;
  font-size: 70%;
}

ul.timeline li h3 {
  margin: 0;
}

ul.timeline li h3 a {
  color: #222;
  font-size: 55%;
  margin-bottom: 10px;
  float: left;
  line-height: 130%;
  width: 100%;
  font-weight: 500;
}

ul.timeline li .time {
  font-size: 85%;
  text-transform: lowercase;
  color: #777;
  padding-left: 15px;
  padding-right: auto;
  position: relative;
}

ul.timeline li .time i {
  margin-right: 5px;
  margin-left: 0px;
  left: 0;
  right: auto;
  top: 5px;
  font-size: 100%;
  line-height: 0.3;
}

ul.timeline li:hover {
  -webkit-transition: "all 0.3s ease";
  -moz-transition: "all 0.3s ease";
  -ms-transition: "all 0.3s ease";
  transition: "all 0.3s ease";
}

ul.timeline li:hover h3 a {
  color: <?php echo $color_main2; ?>;
}

ul.timeline li:hover .time {
  color: #222;
}

ul.timeline li:hover i {
  color: <?php echo $color_main3; ?>;
}

.search-results .page-title {
  padding: 0.3em 1em 0.3em 0.5em;
  border-top: 0;
  margin-bottom: 20px;
  margin-top: 0;
  background: transparent;
  color: #777;
  /* border-bottom: 1px solid #f2f2f2; */
  text-align: left;
  float: left;
  width: 100%;
}

aside.widget-tab {
  background: #fff;
}

@media (min-width: 320px) and (max-width: 767px) {
  aside.widget-tab ul.slick-dots {
    top: 5%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  aside.widget-tab ul.slick-dots {
    top: 5%;
  }
}

@media (min-width: 320px) and (max-width: 767px) {
  aside.widget .posts-list ul.slick-dots {
    top: 5%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  aside.widget .posts-list ul.slick-dots {
    top: 5%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .widget-tab .tab li.defier-posts-list .grid {
    height: 140px;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .widget-tab .tab li.defier-posts-list .grid figure.def-list-post figcaption {
    width: 50%;
  }
  .widget-tab .tab li.defier-posts-list .grid figure.def-list-post figcaption h5 {
    font-size: 115%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .widget-tab .tab li.defier-posts-list .grid figure.def-list-post img {
    width: 50%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  #portfolio-wrapper .portfolio-list .gridThumb {
    height: 110px;
    overflow: hidden;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  #portfolio-wrapper .portfolio-list .gridThumb:first-child {
    width: auto;
    height: auto;
  }
}

.advertising div {
  margin-bottom: 30px;
}

.grid figure figcaption {
  z-index: 99;
}

.grid figure figcaption a.halfsize {
  font-size: 50%;
}

.grid figure figcaption a.quarterSize {
  font-size: 70%;
}

a.quarterSize {
  font-size: 70%;
}

.headerV3 h1.site-title a {
  letter-spacing: -1px;
  font-weight: 200;
  color: #fff;
}

figure.effect-thumbDefier figcaption h2 a {
  font-size: 80%;
}

.widget_quick-flickr-widget .quick-flickr-item {
  padding: 0;
  margin: 0;
}

figure.effect-thumbDefier-gallery figcaption {
  z-index: auto;
}

article .post-format-entry {
  margin-bottom: 15px;
}

.defier-block-box {
  background: transparent;
  box-shadow: 0 0 0px 0;
  margin: 0px 0 20px;
  padding: 0px;
  position: relative;
  display: inline-block;
  width: 100%;
}

.defier-block-box .highlights-full {
  padding: 0;
  margin-bottom: 25px;
}

.defier-block-box .highlights-full ul.halfTohalf li.defier-first-post {
  padding-right: 15px !important;
}

@media (min-width: 320px) and (max-width: 767px) {
  .defier-block-box .highlights-full ul.halfTohalf li.defier-first-post {
    padding: 0 !important;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .defier-block-box .highlights-full ul.halfTohalf li.defier-first-post {
    padding: 0 !important;
  }
}

.defier-block-box .highlights-full ul.halfTohalf li.defier-first-post .slidertwoWarpper {
  height: 490px !important;
}

.defier-block-box .highlights-full ul.halfTohalf li.defier-first-post .slidertwoWarpper img {
  position: relative;
  display: block;
  min-height: inherit;
  max-width: initial;
  opacity: 1;
  width: auto;
  height: 490px;
  margin: 0 auto;
  left: 0;
  right: 0;
}

@media (min-width: 768px) and (max-width: 1199px) {
  .defier-block-box .highlights-full ul.halfTohalf li.defier-first-post .slidertwoWarpper img {
    left: 0;
    right: 0;
  }
}

.defier-block-box .highlights-full ul.halfTohalf li.defier-first-post .slidertwoWarpper h2 {
  font-size: 270%;
}

.defier-block-box .highlights-full ul.halfTohalf li {
  width: 50% !important;
}

@media (min-width: 320px) and (max-width: 767px) {
  .defier-block-box .highlights-full ul.halfTohalf li {
    width: 100% !important;
    padding: 0;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .defier-block-box .highlights-full ul.halfTohalf li {
    width: 100% !important;
    padding: 0;
  }
}

.defier-block-box .highlights-full ul.defier-posts-list {
  margin: 0;
  list-style: outside none none;
  /*---------------*/
  /***** list  *****/
  /*---------------*/
}

.defier-block-box .highlights-full ul.defier-posts-list li.defier-first-post {
  border-bottom: 1px solid #f1f1f1;
  border-top: 0px;
  display: inline-block;
  margin-bottom: 10px;
  width: 100%;
}

@media (min-width: 320px) and (max-width: 767px) {
  .defier-block-box .highlights-full ul.defier-posts-list li.defier-first-post {
    height: auto !important;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .defier-block-box .highlights-full ul.defier-posts-list li.defier-first-post {
    height: auto !important;
  }
}

.defier-block-box .highlights-full ul.defier-posts-list li.defier-first-post .miHeight {
  height: 230px !important;
}

.defier-block-box .highlights-full ul.defier-posts-list li.defier-first-post figure.effect-thumbDefier time {
  top: 5%;
}

.defier-block-box .highlights-full ul.defier-posts-list li.defier-first-post figure.effect-thumbDefier h2 a {
  text-align: center;
}

.defier-block-box .highlights-full ul.defier-posts-list li.defier-first-post figure.effect-thumbDefier p {
  font-size: 75%;
  bottom: 20px;
}

.defier-block-box .highlights-full ul.defier-posts-list li.defier-first-post figure.effect-thumbDefier p a.readMore {
  bottom: -15px;
}

@media (min-width: 320px) and (max-width: 767px) {
  .defier-block-box .highlights-full ul.defier-posts-list li.defier-first-post figure.effect-thumbDefier p {
    margin: 0 0 5px 0;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .defier-block-box .highlights-full ul.defier-posts-list li.defier-first-post figure.effect-thumbDefier p {
    margin: 0 0 5px 0;
  }
}

.defier-block-box .highlights-full ul.defier-posts-list li.defier-first-post figure.effect-thumbDefier .data-label {
  width: 100%;
  color: #ddd;
}

.defier-block-box .highlights-full ul.defier-posts-list li.defier-first-post:first-child {
  border: 0;
}

.defier-block-box .highlights-full ul.defier-posts-list li.grid {
  margin: 0;
  border: 0;
  display: block;
  float: left;
  height: 90px;
  padding-bottom: 0px;
  margin-bottom: 10px;
  /*        border-bottom: 1px solid #ededed; */
}

.defier-block-box .highlights-full ul.defier-posts-list li.grid:last-child {
  border-bottom: 0px solid #ededed;
  margin-bottom: 0px;
}

.defier-block-box .highlights-full ul.defier-posts-list li.grid figure.def-list-post {
  background: <?php echo $color_main2; ?>;
  width: 100%;
  margin: 0;
  overflow: hidden;
  float: left;
  max-width: 100%;
  position: relative;
  height: 100%;
}

.defier-block-box .highlights-full ul.defier-posts-list li.grid figure.def-list-post img {
  position: absolute;
  width: 35%;
  left: 0;
  right: auto;
  top: 0%;
  bottom: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

@media (min-width: 320px) and (max-width: 767px) {
  .defier-block-box .highlights-full ul.defier-posts-list li.grid figure.def-list-post img {
    width: 50%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .defier-block-box .highlights-full ul.defier-posts-list li.grid figure.def-list-post img {
    width: 50%;
  }
}

.defier-block-box .highlights-full ul.defier-posts-list li.grid figure.def-list-post figcaption {
  text-align: left;
  position: relative;
  width: 65%;
  float: right;
  padding: 0 10px 0 15px;
  background: #fff;
  z-index: 99;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.defier-block-box .highlights-full ul.defier-posts-list li.grid figure.def-list-post h4 {
  position: relative;
  overflow: hidden;
  padding: 0;
  float: left;
  margin: 3px 0;
  font-size: 85%;
  line-height: 135%;
  text-transform: initial;
}

.defier-block-box .highlights-full ul.defier-posts-list li.grid figure.def-list-post h4 a {
  color: <?php echo $color_main5; ?>;
}

@media (min-width: 320px) and (max-width: 767px) {
  .defier-block-box .highlights-full ul.defier-posts-list li.grid figure.def-list-post h4 a {
    font-size: 100%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .defier-block-box .highlights-full ul.defier-posts-list li.grid figure.def-list-post h4 a {
    font-size: 110%;
    line-height: 150%;
  }
}

.defier-block-box .highlights-full ul.defier-posts-list li.grid figure.def-list-post p {
  position: relative;
  overflow: hidden;
  padding: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
  opacity: 1;
  float: left;
  font-size: 60%;
  z-index: 999999999999;
  color: #ccc;
}

.defier-block-box .highlights-full ul.defier-posts-list li.grid figure.def-list-post p i {
  margin-right: 5px;
  margin-left: auto;
}

@media (min-width: 320px) and (max-width: 767px) {
  .defier-block-box .highlights-full ul.defier-posts-list li.grid figure.def-list-post p p {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;
  }
}

.defier-block-box .highlights-full ul.defier-posts-list li.grid figure.def-list-post:hover figcaption {
  position: absolute;
  width: 100%;
  right: 0;
  left: 0;
  padding: 0 10px 0 15px;
  background: transparent;
  z-index: 999;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.defier-block-box .highlights-full ul.defier-posts-list li.grid figure.def-list-post:hover img {
  max-width: none;
  width: -webkit-calc(100% + 20px);
  width: calc(100% + 20px);
  opacity: 0.7;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0px, 0, 0);
  transform: translate3d(0px, 0, 0);
}

.defier-block-box .highlights-full ul.defier-posts-list li.grid figure.def-list-post:hover h4 {
  text-align: center;
  font-size: 110%;
  margin: 8px 0;
}

.defier-block-box .highlights-full ul.defier-posts-list li.grid figure.def-list-post:hover h4 a {
  color: #fff;
}

.defier-block-box .highlights-full ul.defier-posts-list li.grid figure.def-list-post:hover p {
  opacity: 0;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.defier-cat-title {
  float: left;
  position: relative;
  width: 100%;
  border: 0px;
  display: inline-block;
  height: 44px;
  margin-bottom: 10px;
}

.defier-cat-title:before {
  position: absolute;
  top: 18px;
  left: 0;
  right: 0;
  height: 2px;
  background: #e1e1e1;
  content: "";
}

.defier-cat-title h4.widget-title {
  background: #fff;
  margin: 0;
  color: <?php echo $color_main6; ?>;
  font-size: 140%;
  font-weight: normal;
  text-transform: capitalize;
  position: absolute;
  padding-right: 15px;
  padding-left: 25px;
  left: 0;
  right: auto;
  line-height: 33px;
  float: left;
  position: relative;
}

.defier-cat-title h4.widget-title:first-letter {
  font-weight: 800;
  color: #848484;
}

.defier-cat-title .lavecat {
  font-size: 60%;
  position: absolute;
  left: 0;
  float: left;
  width: 8px;
  height: 8px;
  margin: 13px 6px;
  z-index: 99;
  background: <?php echo $color_main6; ?>;
}

.Carousel {
  margin: 0px -15px;
  height: 260px;
  overflow: hidden;
  position: relative;
}

.Carousel .defier-cat-title {
  position: absolute;
  z-index: 9999;
  border: 0px;
  height: 44px;
  float: none;
  left: 0;
  margin-left: 2%;
}

.Carousel .defier-cat-title:before {
  position: absolute;
  top: 18px;
  left: 0;
  right: 0;
  height: 2px;
  background: #e1e1e1;
  display: none;
}

.Carousel .defier-cat-title p a {
  margin: 5em 0;
}

.Carousel .defier-cat-title h4.widget-title {
  background: #fff;
  color: <?php echo $color_main6; ?>;
  font-size: 125%;
  font-weight: normal;
  text-transform: capitalize;
  position: absolute;
  margin-left: 2%;
  padding-right: 15px;
  padding-left: 30px;
  margin-right: auto;
  padding-bottom: 5px;
  left: 0;
  right: auto;
  line-height: 25px;
  float: left;
  position: relative;
}

.Carousel .defier-cat-title h4.widget-title:first-letter {
  font-weight: 800;
  color: #848484;
}

.Carousel .defier-cat-title .lavecat {
  font-size: 60%;
  position: absolute;
  left: 0;
  float: left;
  width: 8px;
  height: 8px;
  margin: 10px 13px;
  z-index: 99;
}

.Carousel figure.effect-thumbDefier2 {
  height: 260px !important;
  -webkit-box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
  -moz-box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
  -o-box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
  -ms-box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
  box-shadow: 0 0 70px 30px <?php echo $color_main1; ?> inset;
}

.Carousel figure.effect-thumbDefier2 .catLabel {
  color: #fff;
  position: relative;
  overflow: hidden;
  z-index: 150000;
  top: 10%;
  z-index: 99;
  float: left;
  left: 5%;
  padding: 0 5px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  border-radius: 3px;
  left: 5%;
}

.Carousel figure.effect-thumbDefier2 .catLabel a {
  z-index: 1;
}

.Carousel figure.effect-thumbDefier2 .catLabel .lavecat {
  font-size: 60%;
  position: absolute;
  left: 0;
  float: left;
  width: 10px;
  height: 10px;
  margin: 8px;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  z-index: 99;
}

.Carousel figure.effect-thumbDefier2 .catLabel a {
  float: left;
  color: #fff;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  font-size: 101%;
  font-weight: lighter;
  text-transform: capitalize;
  padding-left: 20px;
  z-index: 20000001;
}

.Carousel figure.effect-thumbDefier2 .catLabel a::first-letter {
  font-weight: bold;
}

.Carousel figure.effect-thumbDefier2 .meta-label {
  color: #fff;
  padding: 15px;
  top: 10%;
  width: 93%;
  z-index: 9999999;
  float: left;
  position: absolute;
  display: block;
  left: 3%;
  opacity: 0;
  -ms-transform: translate3d(0, 10px, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 10px, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 10px, 0);
  transform-origin: 20% 40%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
}

.Carousel figure.effect-thumbDefier2 .meta-label .pull-left, .Carousel figure.effect-thumbDefier2 .meta-label .pull-right {
  font-size: 65%;
  color: <?php echo $color_main4; ?>;
}

.Carousel figure.effect-thumbDefier2 .meta-label .pull-left i, .Carousel figure.effect-thumbDefier2 .meta-label .pull-right i {
  font-size: 120%;
  margin-right: 10px;
  margin-left: auto;
  float: left;
}

.Carousel figure.effect-thumbDefier2 h2 a {
  position: absolute;
  top: 30%;
  left: 0;
  width: 100%;
  color: #fff;
  padding-right: 5%;
  padding-left: 10%;
  line-height: 150%;
  text-align: left;
  -ms-transform: translate3d(0, -20%, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, -20%, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, -20%, 0);
  transform-origin: 20% 40%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
  text-transform: capitalize;
  font-size: 80%;
}

.Carousel figure.effect-thumbDefier2 h2 a .verticalLine {
  position: absolute;
  left: 5%;
  top: 0;
  bottom: 0px;
  width: 4px;
}

.Carousel figure.effect-thumbDefier2 p {
  position: absolute;
  top: 60px;
  margin-top: 20px;
  border-top: 2px solid rgba(255, 255, 255, 0.1);
  left: 0;
  width: 100%;
  opacity: 0;
  -ms-transform: translate3d(0, 0, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 0, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 0, 0);
  transform-origin: 20% 40%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
  text-transform: capitalize;
  text-transform: initial;
  text-align: justify;
  font-size: 80%;
  padding: 2em 10%;
}

.Carousel figure.effect-thumbDefier2 p i {
  margin-left: 10px;
}

@media (min-width: 320px) and (max-width: 767px) {
  .Carousel figure.effect-thumbDefier2 p {
    padding: 1.5em;
  }
}

.Carousel figure.effect-thumbDefier2 p a {
  width: 100%;
  text-align: right;
  margin: 0.5em 0;
  color: #fff;
  float: left;
  font-size: 100%;
  text-transform: uppercase;
}

.Carousel figure.effect-thumbDefier2 p a i {
  margin-right: 10px;
  margin-left: auto;
  font-size: 110%;
  color: <?php echo $color_main3; ?>;
  line-height: 1.2;
}

.Carousel figure.effect-thumbDefier2 time {
  color: #fff;
  top: 20%;
  z-index: 999999999999999999999999999999999;
  float: right;
  position: absolute;
  display: block;
  right: 5%;
  opacity: 0;
  -ms-transform: translate3d(0, 0, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 0, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 0, 0);
  transform-origin: 20% 40%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
}

.Carousel figure.effect-thumbDefier2 time i {
  font-size: 120%;
  margin-right: 10px;
  margin-left: auto;
}

.Carousel figure.effect-thumbDefier2 figcaption:before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.7);
  content: '';
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
}

@media (min-width: 320px) and (max-width: 767px) {
  .Carousel figure.effect-thumbDefier2 figcaption:before {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    content: '';
    -webkit-transition: all 0.35s;
    -moz-transition: all 0.35s;
    -ms-transition: all 0.35s;
    transition: all 0.35s;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .Carousel figure.effect-thumbDefier2 figcaption:before {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    content: '';
    -webkit-transition: all 0.35s;
    -moz-transition: all 0.35s;
    -ms-transition: all 0.35s;
    transition: all 0.35s;
  }
}

.Carousel figure.effect-thumbDefier2:hover .catLabel {
  color: #fff;
  position: relative;
  overflow: hidden;
  top: 10%;
  float: left;
  left: 5%;
  padding: 0 5px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  border-radius: 3px;
  left: 5%;
}

.Carousel figure.effect-thumbDefier2:hover .catLabel a {
  z-index: 1;
}

.Carousel figure.effect-thumbDefier2:hover .catLabel .lavecat {
  position: absolute;
  -ms-transform: scale(100%, 100%);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: scale(100%, 100%);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: scale(100%, 100%);
  transform-origin: 20% 40%;
  font-size: 60%;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: -1;
  margin: 0;
  height: auto;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  border-radius: 3px;
  width: 100%;
}

.Carousel figure.effect-thumbDefier2:hover .catLabel a {
  float: left;
  color: #fff;
  font-size: 100%;
  font-weight: lighter;
  text-transform: capitalize;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -ms-transition: all 0.2s ease;
  transition: all 0.2s ease;
  padding-left: 0px;
}

.Carousel figure.effect-thumbDefier2:hover h2 a {
  color: #fff;
  opacity: 0;
  -ms-transform: translate3d(0, -50%, 0) translate3d(0, -40px, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, -50%, 0) translate3d(0, -40px, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, -50%, 0) translate3d(0, -40px, 0);
  transform-origin: 20% 40%;
}

.Carousel figure.effect-thumbDefier2:hover .meta-label {
  opacity: 1;
  -ms-transform: translate3d(0, 0, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 0, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 0, 0);
  transform-origin: 20% 40%;
}

.Carousel figure.effect-thumbDefier2:hover figcaption:before {
  opacity: 1;
  -ms-transform: translate3d(0, 0, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 0, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 0, 0);
  transform-origin: 20% 40%;
  background: -webkit-linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
  background: -o-linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
  background: linear-gradient(rgba(255, 255, 255, 0) 0%, <?php echo $color_main1; ?> 75%);
  top: 0;
}

.Carousel figure.effect-thumbDefier2:hover p {
  opacity: 1;
  -ms-transform: translate3d(0, 0, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 0, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 0, 0);
  transform-origin: 20% 40%;
}

@media (min-width: 320px) and (max-width: 767px) {
  .Carousel figure.effect-thumbDefier2:hover p {
    padding: 1.5em;
  }
}

.Carousel figure.effect-thumbDefier2:hover p a {
  width: 100%;
  text-align: right;
  margin: 0.5em 0;
  color: #fff;
}

.Carousel figure.effect-thumbDefier2:hover time {
  opacity: 1;
  -ms-transform: translate3d(0, 0, 0);
  /* IE 9 */
  -ms-transform-origin: 20% 40%;
  /* IE 9 */
  -webkit-transform: translate3d(0, 0, 0);
  /* Chrome, Safari, Opera */
  -webkit-transform-origin: 20% 40%;
  /* Chrome, Safari, Opera */
  transform: translate3d(0, 0, 0);
  transform-origin: 20% 40%;
}

.widget {
  background: transparent;
  box-shadow: 0 0 0px 0;
  margin: 0;
  padding: 0;
}

.def_col_4 {
  width: 100%;
}

.def_col_4 li {
  float: left;
  width: 33.33333333%;
  border-bottom: 0px;
  margin: 0;
  padding: 0px !important;
  height: 80px;
  overflow: hidden;
  border: 2px solid #fff !important;
}

.def_col_4 li a {
  display: block;
}

.def_col_4 li a img {
  position: relative;
  width: 270%;
  height: 85px;
  opacity: 0.7;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  transition: all 0.3s;
}

@media (min-width: 768px) and (max-width: 1199px) {
  .def_col_4 li a img {
    height: 175px !important;
  }
}

.def_col_4 li a img:hover {
  opacity: 1;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  transition: all 0.3s;
}

.widget-tab ul li.cat-item {
  height: auto;
  position: relative;
  float: left;
  width: 100%;
  color: #929292;
  background: #f9f9f9;
  border: 0;
  margin-bottom: 6px;
  padding: 8px;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  transition: all 0.3s;
  text-align: right;
}

.widget-tab ul li.cat-item a {
  text-align: left;
  float: left;
}

.widget-tab ul li.cat-item:hover {
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  transition: all 0.3s;
  background: #dbdbdb;
}

.widget-tab ul li.cat-item:hover a {
  margin-left: 12%;
  margin-right: auto;
  color: #fff;
}

.widget-tab ul li.cat-item:before {
  content: "";
  margin-right: 10px;
  margin-left: 0px;
  background: #dbdbdb;
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 5%;
}

.widget-tab ul li.cat-item a {
  margin-left: 12%;
  margin-right: auto;
  color: #a9a9a9;
}

.widget-tab li {
  border-bottom: 1px solid #e3e3e3;
  color: #4a4a4a;
  height: 100%;
  list-style: none none;
  margin-bottom: 10px;
  padding-bottom: 10px;
}

@media (min-width: 320px) and (max-width: 767px) {
  .slidingMenu {
    display: inline-block;
    float: left;
  }
}

.fullwidth-page {
  display: inline-block;
  width: 100%;
  margin: 0;
  padding: 0;
}

.fullwidthWrapper {
  width: 100%;
  overflow: hidden;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  display: block;
}

.panel-grid {
  margin: 45px 0 0px  0px !important;
}

.siteorigin-panels-stretch {
  margin: 0 -15px;
}

.grid {
  position: relative;
  margin: 0 auto;
  list-style: none;
  text-align: center;
}

.grid figure figcaption {
  color: #fff;
  text-transform: uppercase;
  font-size: 1.25em;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.homepage-Wrapper {
  padding: 10px;
  float: left;
}

.Standard .meta-first-row {
  margin-top: 20px;
}

.search-results .type-page {
  border: 1px solid #ededed;
  background: none repeat scroll 0 0 #fff;
  box-shadow: 0 0 0px 0 #dadada;
  padding: 20px;
  float: left;
  width: 100%;
  margin-bottom: 25px;
}

@media (min-width: 768px) and (max-width: 1199px) {
  .search-results .type-page {
    padding: 10px;
  }
}

.format-audio, .format-gallery, .format-quote, .format-status, .format-video, .format-link, .format-image, .format-aside, .format-chat, .type-attachment, .format-standard {
  background: none repeat scroll 0 0 #fff;
  box-shadow: 0 0 0px 0 #dadada;
  border: 1px solid #ededed;
  padding: 20px;
  float: left;
  width: 100%;
  margin-bottom: 25px;
}

@media (min-width: 768px) and (max-width: 1199px) {
  .format-audio, .format-gallery, .format-quote, .format-status, .format-video, .format-link, .format-image, .format-aside, .format-chat, .type-attachment, .format-standard {
    padding: 10px;
  }
}

.format-audio figure, .format-gallery figure, .format-quote figure, .format-status figure, .format-video figure, .format-link figure, .format-image figure, .format-aside figure, .format-chat figure, .type-attachment figure, .format-standard figure {
  position: relative;
  float: left;
  width: 100%;
}

/************* block loop **************/
.meta-first-row {
  margin-bottom: 0px;
  float: left;
  width: 100%;
  margin-bottom: 20px;
}

@media (min-width: 320px) and (max-width: 767px) {
  .meta-first-row .byAuthor {
    text-align: center;
  }
}

.meta-first-row .byAuthor img.avatar {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
  float: left;
  margin-right: 10px;
  width: auto;
}

@media (min-width: 320px) and (max-width: 767px) {
  .meta-first-row .byAuthor img.avatar {
    float: none;
    display: inline-block !important;
  }
}

.meta-first-row .byAuthor span {
  font-size: 75%;
  display: block;
  margin: 0;
  padding: 0;
  color: #777;
}

@media (min-width: 320px) and (max-width: 767px) {
  .meta-first-row .byAuthor span {
    float: none;
    display: inline-block;
  }
}

.meta-first-row .byAuthor a {
  font-size: 140%;
  color: <?php echo $color_main2; ?>;
  line-height: 190%;
}

.meta-first-row .inCategories {
  padding: 0;
  line-height: 32px;
}

@media (min-width: 320px) and (max-width: 767px) {
  .meta-first-row .inCategories {
    margin: 0 -15px;
    text-align: center;
  }
  .meta-first-row .inCategories span:first-child {
    margin-left: 0px;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .meta-first-row .inCategories {
    margin: 0 -15px;
    text-align: center;
  }
  .meta-first-row .inCategories span:first-child {
    margin-left: 0px;
  }
}

.gallery-post-images {
  position: relative;
  float: left;
  width: 100%;
  margin-bottom: 40px !important;
  height: auto;
  overflow: hidden;
}

@media (min-width: 320px) and (max-width: 767px) {
  .gallery-post-images {
    height: auto;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .gallery-post-images {
    height: auto;
  }
}

@media (min-width: 320px) and (max-width: 767px) {
  .gallery-post-images .slick-dots {
    top: 5px;
  }
}

.gallery-post-images .slick-list .slick-slide {
  position: relative;
  list-style: none;
}

.gallery-post-images .slick-list .slick-slide:before {
  border: 3px solid rgba(255, 255, 255, 0.4);
  content: "";
  position: absolute;
  top: 0px;
  bottom: 0;
  left: 0;
  right: 0;
}

.gallery-post-images .slick-list .slick-slide img {
  width: 100%;
}

@media (min-width: 320px) and (max-width: 767px) {
  .gallery-post-images .slick-list .slick-slide img {
    height: auto;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .gallery-post-images .slick-list .slick-slide img {
    height: auto;
  }
}

.gallery-post-images .fa-arrow-left2 {
  position: absolute;
  left: 65px;
}

.gallery-post-images .fa-arrow-right2 {
  right: 65px;
  position: absolute;
}

.gallery-post-images .slick-arrow {
  margin-right: .07142857em;
  display: inline-block;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-shadow: 0 1px 0 #fff;
  color: #fff;
  top: 33vh;
  z-index: 9999999;
  font-size: 360%;
  opacity: 0.6;
  -webkit-transition: all 0.3 ease;
  -moz-transition: all 0.3 ease;
  -ms-transition: all 0.3 ease;
  transition: all 0.3 ease;
}

@media (min-width: 768px) and (max-width: 1199px) {
  .gallery-post-images .slick-arrow {
    top: 18vh;
  }
}

@media (min-width: 320px) and (max-width: 767px) {
  .gallery-post-images .slick-arrow {
    top: 18vh;
  }
}

.gallery-post-images .slick-arrow:hover {
  opacity: 1.0;
  -webkit-transition: all 0.3 ease;
  -moz-transition: all 0.3 ease;
  -ms-transition: all 0.3 ease;
  transition: all 0.3 ease;
}

.entry-header h1.entry-title {
  text-align: center;
  padding-bottom: 5px;
}

.entry-header h1.entry-title a {
  color: #000;
  font-size: 90%;
}

.entry-header h1.entry-title a:Hover {
  color: <?php echo $color_main2; ?>;
}

figure.post-thumb {
  position: relative;
}

figure.post-thumb .post-type-format {
  position: absolute;
  top: 30px;
  left: 30px;
  right: auto;
  z-index: 9999999999;
  color: #fff;
  font-size: 230%;
  opacity: 0.5;
}

.entry-meta {
  text-align: center;
  color: #777;
  margin-bottom: 15px;
  font-size: 105%;
  border: 0;
}

.entry-meta div:last-child:after {
  content: "";
  margin: 0;
}

.entry-meta .time, .entry-meta .view-counter, .entry-meta .like-counter {
  color: #a2a5a6;
  display: inline-block;
  font-size: 80%;
}

.entry-meta .time a.jm-post-like, .entry-meta .view-counter a.jm-post-like, .entry-meta .like-counter a.jm-post-like {
  font-size: 100%;
  color: #a2a5a6;
}

.entry-meta .time:after, .entry-meta .view-counter:after, .entry-meta .like-counter:after {
  content: "/";
  display: inline;
  margin: 0;
  margin-left: 15px;
  margin-right: 15px;
}

@media (min-width: 320px) and (max-width: 767px) {
  .entry-meta .time:after, .entry-meta .view-counter:after, .entry-meta .like-counter:after {
    margin: 0 15px;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .entry-meta .time:after, .entry-meta .view-counter:after, .entry-meta .like-counter:after {
    margin: 0 15px;
  }
}

.entry-meta .time i, .entry-meta .view-counter i, .entry-meta .like-counter i {
  color: <?php echo $color_main2; ?>;
  margin-right: 5px;
  margin-left: 0px;
  float: left;
  line-height: 1.3;
}

.entry-content {
  float: left;
  width: 100%;
  padding: 2em;
  margin: 0;
  color: #777;
  font-size: 115%;
  letter-spacing: 0;
  line-height: 170%;
  text-align: justify;
}

.entry-content .readMoreWrapper {
  text-align: center;
  padding: 0;
  margin: 50px 0 20px;
}

.entry-content .readMoreWrapper a.readMore {
  color: #777;
  font-weight: 400;
  font-weight: 400;
  border: 1px solid #ddd;
  padding: 10px 25px;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
  width: auto;
}

.entry-content .readMoreWrapper a.readMore i {
  font-weight: 200;
  color: #777;
  display: none;
  float: none;
  opacity: 0;
  visibility: hidden;
  width: 0;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
  line-height: 0;
}

.entry-content .readMoreWrapper a.readMore:hover {
  color: <?php echo $color_main2; ?>;
  border: 1px solid <?php echo $color_main2; ?>;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.entry-content .readMoreWrapper a.readMore:hover i {
  display: inline-block;
  margin-left: auto !important;
  margin-right: 10px;
  color: <?php echo $color_main2; ?>;
  opacity: 1;
  visibility: visible;
  width: 20px;
  margin-right: 5px;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.def-thumbnails {
  position: relative;
  float: left;
  margin-bottom: 35px;
  width: 100%;
}

.def-thumbnails:before {
  border: 3px solid rgba(255, 255, 255, 0.4);
  content: "";
  position: absolute;
  top: 0px;
  bottom: 0;
  left: 0;
  right: 0;
}

.def-thumbnails img {
  width: 100%;
}

.sound-post-format {
  float: left;
  width: 100%;
}

.entry-header, .entry-content {
  padding: 0 20px;
  float: left;
  width: 100%;
  margin: 0;
}

.format-link {
  padding: 0;
  position: relative;
}

.format-link .link-post-format {
  float: left;
  width: 100%;
}

.format-link .link-post-format-content h2 a {
  color: #fff;
  background: #000;
  padding: 8px;
}

.format-link .link-post-format-content header.entry-header {
  margin: 0;
}

.format-link .link-post-format-content header.entry-header .entry-meta .time, .format-link .link-post-format-content header.entry-header .entry-meta .view-counter, .format-link .link-post-format-content header.entry-header .entry-meta .like-counter {
  color: #fff;
  display: inline-block;
  font-size: 80%;
  float: none;
}

.format-link .link-post-format-content header.entry-header .entry-meta .time i, .format-link .link-post-format-content header.entry-header .entry-meta .view-counter i, .format-link .link-post-format-content header.entry-header .entry-meta .like-counter i {
  color: #fff;
}

.format-link .link-post-format-content header.entry-header .entry-meta .time a, .format-link .link-post-format-content header.entry-header .entry-meta .view-counter a, .format-link .link-post-format-content header.entry-header .entry-meta .like-counter a {
  color: #fff;
}

.format-link .link-post-format-content header.entry-header .entry-meta .time a i, .format-link .link-post-format-content header.entry-header .entry-meta .view-counter a i, .format-link .link-post-format-content header.entry-header .entry-meta .like-counter a i {
  color: #fff;
}

.format-link .link-post-format-content header.entry-header h1.entry-title a {
  margin: 0;
  color: #fff;
  font-size: 60%;
  padding: 0;
}

.format-quote {
  padding: 0;
  width: 100%;
}

.format-quote .quote-post-format {
  float: left;
  position: relative;
  background-size: cover !important;
}

.format-quote .quote-post-format .quote-post-format-content {
  background-color: rgba(0, 0, 0, 0.5);
  float: left;
}

.format-quote blockquote {
  border: medium none;
  color: #fff;
  margin: 0;
  padding: 50px;
  text-align: center;
}

.format-quote blockquote p {
  background: transparent;
  border-radius: 0px;
  font-size: 102%;
  padding: 3em 10em;
  text-align: justify;
  width: 100%;
  margin: 0 auto;
}

.format-quote blockquote p i {
  font-size: 270%;
  color: <?php echo $color_main3; ?>;
}

@media (min-width: 320px) and (max-width: 767px) {
  .format-quote blockquote p {
    padding: 3em 0em;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .format-quote blockquote p {
    padding: 3em 3em;
  }
}

.format-quote blockquote cite {
  margin: 10px 0;
  width: 100%;
}

.format-quote blockquote cite a {
  color: #fff;
  font-weight: 500;
  border: 2px solid;
  padding: 10px 15px;
}

.format-quote blockquote cite a:hover {
  color: #fff;
}

.format-quote .entry-meta .time, .format-quote .entry-meta .view-counter, .format-quote .entry-meta .like-counter {
  color: #fff;
  display: inline-block;
  font-size: 80%;
  float: none;
}

.format-quote .entry-meta .time i, .format-quote .entry-meta .view-counter i, .format-quote .entry-meta .like-counter i {
  color: #fff;
}

.format-quote .entry-meta .time a, .format-quote .entry-meta .view-counter a, .format-quote .entry-meta .like-counter a {
  color: #fff;
}

.format-quote .entry-meta .time a i, .format-quote .entry-meta .view-counter a i, .format-quote .entry-meta .like-counter a i {
  color: #fff;
}

.format-quote h1.entry-title a {
  margin: 0;
  color: #fff;
  font-size: 60%;
  padding: 0;
}

.format-quote h1.entry-title a:hover {
  color: #fff;
}

.video-post-format p {
  color: #a2a5a6;
  font-size: 88%;
}

.video-post-format p a {
  color: #222;
}

h2.page-title {
  padding: 1em 1em 0.3em 0.5em;
  margin-top: 0;
  background: transparent;
  color: #777;
  text-align: left;
  margin-bottom: 25px;
}

@media (min-width: 320px) and (max-width: 767px) {
  h2.page-title {
    margin-top: 15px;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  h2.page-title {
    margin-top: 15px;
  }
}

.grid {
  overflow: hidden;
}

ul.breadcrumbs {
  padding: 20px 0;
  list-style: none;
}

ul.breadcrumbs li {
  display: inline-block;
}

ul.breadcrumbs li a {
  color: #777;
}

ul.breadcrumbs li.item-home i {
  color: #ddd;
  margin-right: 12px;
}

ul.breadcrumbs li.item-home a {
  color: #777;
}

ul.breadcrumbs li.item-home a:hover {
  color: <?php echo $color_main2; ?>;
}

ul.breadcrumbs span.current {
  color: <?php echo $color_main2; ?>;
  border-bottom: 1px solid #ddd;
}

ul.breadcrumbs li.separator {
  color: #ddd;
  font-family: monospace;
  margin: 0 12px;
}

.inCategories {
  font-size: 95%;
  color: #777;
  text-align: right;
  line-height: 25px;
  padding: 20px 0;
}

.inCategories .cat-links {
  margin-left: 15px;
}

.inCategories .cat-links i {
  margin-left: 5px;
  color: #a2a5a6;
}

.inCategories .cat-links a {
  color: #a2a5a6;
}

.inCategories .tags-links {
  margin-left: 15px;
}

.inCategories .tags-links i {
  margin-left: 5px;
  color: #a2a5a6;
}

.inCategories .tags-links a {
  color: #a2a5a6;
}

.inCategories .comments-link {
  margin-left: 15px;
}

.inCategories .comments-link a {
  color: #a2a5a6;
}

.inCategories .comments-link a i {
  margin-left: 5px;
  color: #a2a5a6;
}

.inCategories .edit-link {
  margin-left: 15px;
}

.inCategories .edit-link a {
  color: #a2a5a6;
}

.inCategories .edit-link a i {
  margin-left: 5px;
  color: #a2a5a6;
  display: inline-block;
}

.fullw {
  width: 100%;
  float: left;
}

/********  fixedpage layout ************/
/********  fixedpage layout ************/
body#Fixed .fixedwidth-container {
  width: 85%;
  margin: 0 auto;
  display: block;
}

/********  fullwidth layout ************/
body#Fixed .fixedwidth-container, body#Fixed .fixed-container {
  width: 100%;
  margin: 0 auto;
  display: block;
  padding: 0 5%;
  float: left;
}

@media (min-width: 320px) and (max-width: 767px) {
  body#Fixed .fixedwidth-container, body#Fixed .fixed-container {
    padding: 0 2%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  body#Fixed .fixedwidth-container, body#Fixed .fixed-container {
    padding: 0 2%;
  }
}

body#Fixed .footer-bottom {
  padding: 20px 0px;
}

/********  boxed layout ************/
body {
  height: auto;
  text-align: left;
}

html {
  text-align: center;
}

body#Fullwidth {
  padding: 0px;
  float: left;
  width: 100%;
}

body#Fullwidth .fixed-container {
  padding: 0px 15px;
  float: left;
  width: 100%;
}

@media (min-width: 320px) and (max-width: 767px) {
  body#Fullwidth .fixed-container {
    padding: 0 2%;
  }
}

body#Fullwidth .fixedwidth-container {
  padding: 0px;
  float: left;
  width: 100%;
}

body#Boxed {
  width: 92%;
  margin: 0 auto;
  display: inline-block;
  position: relative;
  height: auto;
  background: #fff !important;
  -webkit-box-shadow: 0px -150px 40px 2px #ededed;
  -moz-box-shadow: 0px -150px 40px 2px #ededed;
  -o-box-shadow: 0px -150px 40px 2px #ededed;
  -ms-box-shadow: 0px -150px 40px 2px #ededed;
  box-shadow: 0px -150px 40px 2px #ededed;
  padding: 0;
}

@media (min-width: 320px) and (max-width: 767px) {
  body#Boxed {
    width: 100%;
  }
}

body#Boxed .fixedwidth-container {
  padding: 0px;
  float: left;
  width: 100%;
}

.fixed-container {
  padding: 0 15px;
}

@media (min-width: 320px) and (max-width: 767px) {
  .fixed-container {
    padding: 0 2%;
  }
}

.entry-meta .time, .entry-meta .view-counter, .entry-meta .like-counter {
  float: none;
}

article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
  display: block;
}

#Fixed .entry-header {
  margin: 25px 0;
}

main .sidebarLeft .grid {
  position: relative;
  height: auto;
}

.format-link .sl-count,
.format-quote .sl-count {
  color: #fff;
  float: left;
  line-height: 1.5;
}

figure .sl-count {
  color: #fff;
  float: left;
  line-height: 1.5;
}

.sl-count {
  color: #777;
  float: left;
  line-height: 1.5;
}

/* Wrapper */
.sl-wrapper a {
  border-bottom: 0 !important;
  text-decoration: none !important;
}

.sl-button {
  padding: 0.375em 0.625em;
  font-size: 1em;
  line-height: 1;
  font-weight: normal;
}

/* Colors */
a.liked {
  color: #da1b1b;
}

a.liked:hover,
a.liked:active,
a.liked:focus {
  color: #666666;
}

/* Icon */
.sl-icon {
  margin-right: 0.3125em;
  vertical-align: middle;
}

/* Loader */
.loader,
.loader:before,
.loader:after {
  background: rgba(0, 0, 0, 0.2);
  -webkit-animation: load1 1s infinite ease-in-out;
  animation: load1 1s infinite ease-in-out;
  width: .2em;
  height: .6em;
}

.loader:before,
.loader:after {
  position: absolute;
  top: 0;
  content: '';
}

.loader:before {
  left: -.375em;
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}

.loader {
  text-indent: -9999em;
  display: inline-block;
  position: relative;
  vertical-align: middle;
  font-size: 1em;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}

.loader:after {
  left: .375em;
}

@-webkit-keyframes load1 {
  0%,
  80%,
  100% {
    box-shadow: 0 0 rgba(0, 0, 0, 0.2);
    height: .6em;
  }
  40% {
    box-shadow: 0 -0.3em rgba(0, 0, 0, 0.2);
    height: 1em;
  }
}

@keyframes load1 {
  0%,
  80%,
  100% {
    box-shadow: 0 0 rgba(0, 0, 0, 0.2);
    height: .6em;
  }
  40% {
    box-shadow: 0 -0.3em rgba(0, 0, 0, 0.2);
    height: 1em;
  }
}

.social-post-embed iframe {
  display: inline !important;
}

.post-wrapper-single {
  padding: 0;
  margin: 0;
}

.single-Wrapper {
  padding: 0;
  margin: 0;
  border: 0px;
}

.single-Wrapper .entry-content {
  color: #000;
}

.single-Wrapper .entry-content figcaption {
  font-size: 70%;
  color: #8b8b8b;
}

.single-Wrapper .grid {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  width: 100%;
}

@media (min-width: 320px) and (max-width: 767px) {
  .single-Wrapper .grid {
    position: relative;
    height: auto;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .single-Wrapper .grid {
    position: relative;
    height: auto;
  }
}

.single-Wrapper .grid figure.post-figure figcaption {
  position: absolute;
}

.single-Wrapper .grid figure.post-figure figcaption .post-type-format {
  position: absolute;
  margin: 40px;
  font-size: 130%;
  color: #fff;
  right: 0;
  left: auto;
}

.single-Wrapper .grid figure.post-figure figcaption ul.breadcrumbs {
  position: absolute;
  top: 30px;
  width: 100%;
  text-align: left;
  padding-left: 3em;
}

.single-Wrapper .grid figure.post-figure figcaption ul.breadcrumbs li {
  display: inline-block;
  font-size: 75%;
  text-transform: capitalize;
  bottom: 180px;
  text-shadow: 1px 1px 0px #777;
  -webkit-text-shadow: 1px 1px 0px #777;
  -o-text-shadow: 1px 1px 0px #777;
  -moz-text-shadow: 1px 1px 0px #777;
}

.single-Wrapper .grid figure.post-figure figcaption ul.breadcrumbs li a {
  color: #fff;
}

.single-Wrapper section.post-info-wrapper {
  float: none;
  margin: 0 auto;
  display: block;
  padding: 20px;
}

.single-Wrapper section.post-content-wrapper {
  float: none;
  margin: 50vh auto 0;
  display: table;
  background: rgba(255, 255, 255, 0.9);
  padding: 20px;
}

@media (min-width: 320px) and (max-width: 767px) {
  .single-Wrapper section.post-content-wrapper {
    margin: 0;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .single-Wrapper section.post-content-wrapper {
    margin: 0;
  }
}

.single-Wrapper section.post-content-wrapper .entry-header {
  padding: 0 20px;
  float: left;
  width: 100%;
  margin: 0;
}

.single-Wrapper section.post-content-wrapper .entry-header .meta-first-row {
  margin-bottom: 15px;
  margin-top: 15px;
  float: left;
  width: 100%;
}

.single-Wrapper section.post-content-wrapper .entry-footer {
  width: 100%;
  float: left;
  border-top: 1px solid #ededed;
  margin-top: 35px;
}

.single-Wrapper section.post-content-wrapper .entry-footer .inCategories {
  padding: 2px 0;
  margin-top: 15px;
}

.mouse-icon {
  text-align: center;
  padding-top: 38vh;
  width: 17px;
  cursor: pointer;
  margin: 0 auto;
}

.mouse-icon div {
  width: 17px;
  margin: 0;
  padding: 0;
  display: inline-block;
}

.mouse-icon span {
  display: block;
  width: 5px;
  height: 5px;
  -ms-transform: rotate(45deg);
  /* IE 9 */
  -webkit-transform: rotate(45deg);
  /* Chrome, Safari, Opera */
  transform: rotate(45deg);
  border-right: 2px solid white;
  border-bottom: 2px solid white;
  margin: 0 0 3px 6px;
}

.mouse-icon .unu {
  margin-top: 6px;
}

.mouse-icon .unu, .mouse-icon .doi, .mouse-icon .trei {
  -webkit-animation: mouse-scroll 1s infinite;
  -moz-animation: mouse-scroll 1s infinite;
}

.mouse-icon .unu {
  -webkit-animation-delay: .1s;
  -moz-animation-delay: .1s;
  -webkit-animation-direction: alternate;
}

.mouse-icon .doi {
  -webkit-animation-delay: .2s;
  -moz-animation-delay: .2s;
  -webkit-animation-direction: alternate;
}

.mouse-icon .trei {
  -webkit-animation-delay: .3s;
  -moz-animation-delay: .3s;
  -webkit-animation-direction: alternate;
}

.mouse-icon .mouse {
  height: 21px;
  width: 14px;
  border-radius: 10px;
  transform: none;
  border: 2px solid white;
  top: 170px;
  display: inline-block;
}

.mouse-icon .wheel {
  height: 5px;
  width: 2px;
  display: block;
  margin: 5px auto;
  background: white;
  position: relative;
}

.mouse-icon .wheel {
  -webkit-animation: mouse-wheel 1.2s ease infinite;
  -moz-animation: mouse-wheel 1.2s ease infinite;
}

@-webkit-keyframes mouse-wheel {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(6px);
    -ms-transform: translateY(6px);
    transform: translateY(6px);
  }
}

@-moz-keyframes mouse-wheel {
  0% {
    top: 1px;
  }
  50% {
    top: 2px;
  }
  100% {
    top: 3px;
  }
}

@-webkit-keyframes mouse-scroll {
  0% {
    opacity: 0;
  }
  50% {
    opacity: .5;
  }
  100% {
    opacity: 1;
  }
}

@-moz-keyframes mouse-scroll {
  0% {
    opacity: 0;
  }
  50% {
    opacity: .5;
  }
  100% {
    opacity: 1;
  }
}

@-o-keyframes mouse-scroll {
  0% {
    opacity: 0;
  }
  50% {
    opacity: .5;
  }
  100% {
    opacity: 1;
  }
}

@keyframes mouse-scroll {
  0% {
    opacity: 0;
  }
  50% {
    opacity: .5;
  }
  100% {
    opacity: 1;
  }
}

.author-bio {
  background: #fdfdfd;
  border: 1px solid #ededed;
  float: left;
  margin: 0 0 20px;
  padding: 20px;
  color: #222;
  position: relative;
  width: 100%;
  box-shadow: 0px 0px;
}

@media (min-width: 320px) and (max-width: 767px) {
  .author-bio {
    padding: 0;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .author-bio {
    padding: 0;
  }
}

.author-bio img.avatar {
  margin: 25px 0px;
}

.author-bio h3.author-title a {
  color: #000;
}

.author-bio h3.author-title i {
  font-size: 60%;
  margin-right: 10px;
}

.author-bio h3.author-title .aut-website {
  display: inline;
}

.author-bio p.author-description {
  font-size: 90%;
  text-align: left;
}

.author-bio ul.icons {
  list-style: none;
}

.author-bio ul.icons li {
  border-radius: 50%;
  background: #ededed;
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 4px;
  margin-right: 10px;
  float: left;
  opacity: 0.8;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.author-bio ul.icons li a {
  color: #222;
}

.author-bio ul.icons li:hover {
  opacity: 1;
  background: <?php echo $color_main8; ?>;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.author-bio ul.icons li:hover i {
  color: #fff;
}

.text-align-center {
  text-align: center;
}

#post-nav {
  float: left;
  width: 100%;
  margin: 30px 0 20px 0;
}

#post-nav .post-next, #post-nav .post-previous {
  padding: 0;
}

#post-nav .post-next .content, #post-nav .post-previous .content {
  text-align: left;
  color: #222;
}

#post-nav .post-next .content a.previous, #post-nav .post-previous .content a.previous {
  color: #222;
  font-size: 110%;
  font-weight: 500;
  position: relative;
  padding-left: 22px;
  padding-right: auto;
}

#post-nav .post-next .content a.previous i, #post-nav .post-previous .content a.previous i {
  margin-right: 10px;
  font-size: 130%;
  margin-left: auto;
  left: 0;
  right: auto;
  color: #777;
}

#post-nav .post-next .content a.next, #post-nav .post-previous .content a.next {
  color: #222;
  font-size: 110%;
  font-weight: 500;
  position: relative;
  padding-right: 22px;
  padding-left: auto;
}

#post-nav .post-next .content a.next i, #post-nav .post-previous .content a.next i {
  margin-left: 10px;
  font-size: 130%;
  right: 0;
  left: auto;
  margin-right: auto;
  color: #777;
}

#post-nav .post-next .content h4 a, #post-nav .post-previous .content h4 a {
  color: #ccc;
  font-size: 70%;
}

#post-nav .post-next .content h4 a:hover, #post-nav .post-previous .content h4 a:hover {
  color: <?php echo $color_main3; ?>;
}

#post-nav .post-next .content {
  text-align: right;
}

section#related_posts {
  float: left;
  margin: 15px 0;
  width: 100%;
}

section#related_posts .Carousel {
  margin: 0;
}

section#related_posts .Carousel figure.effect-thumbDefier2 .meta-label {
  bottom: auto;
  top: 10%;
}

section#related_posts .Carousel figure.effect-thumbDefier2 .meta-label .pull-left {
  text-transform: capitalize;
  margin-right: 15px;
}

section#related_posts .Carousel figure.effect-thumbDefier2 .meta-label .pull-right {
  text-transform: capitalize;
}

section#related_posts .slick-dots {
  position: absolute;
  top: 2vh;
  display: block;
  width: 100%;
  padding: 0;
  margin: 0;
  list-style: none;
  text-align: center;
  z-index: 9999999;
  /* float: right; */
  width: 10%;
  height: 30px;
  right: 3%;
  left: auto;
}

section#related_posts .slick-dots li {
  position: relative;
  display: inline-block;
  width: 20px;
  height: 20px;
  margin: 0 5px;
  padding: 0;
  cursor: pointer;
  float: right;
}

section#related_posts .slick-dots li button {
  font-size: 0;
  line-height: 0;
  display: inline;
  width: 3px;
  height: 3px;
  padding: 3px;
  cursor: pointer;
  color: transparent;
  border: 0;
  outline: none;
  background: #ededed;
  border-radius: 50%;
  -webkit-transition: "all 0.3s";
  -moz-transition: "all 0.3s";
  -ms-transition: "all 0.3s";
  transition: "all 0.3s";
}

section#related_posts .slick-dots li.slick-active button {
  width: 5px;
  height: 5px;
  padding: 5px;
  -webkit-transition: "all 0.3s";
  -moz-transition: "all 0.3s";
  -ms-transition: "all 0.3s";
  transition: "all 0.3s";
  background: <?php echo $color_main3; ?>;
}

section#related_posts .grid {
  height: auto;
  position: relative;
}

.latestFromAuth {
  border-left: 1px solid #ededed;
  border-right: 0px;
}

@media (min-width: 320px) and (max-width: 767px) {
  .latestFromAuth {
    border-left: 0px solid #ededed;
    border-top: 1px solid #ededed;
    margin: 20px 0;
    float: left;
    width: 100%;
    padding-top: 10px;
  }
}

.latestFromAuth h4 {
  font-weight: normal;
  font-size: 125%;
  margin: 15px 0px 10px;
}

.latestFromAuth ul.lister {
  display: block;
  margin-left: 30px;
}

.latestFromAuth ul.lister li {
  margin-bottom: 5px;
}

.latestFromAuth ul.lister li a {
  color: #787878;
  font-size: 90%;
}

.latestFromAuth ul.lister li a:hover {
  color: <?php echo $color_main2; ?>;
}

/******* comments Area *********/
.comments-area {
  float: left;
  width: 100%;
  margin-top: 35px;
}

.comments-area span:before {
  display: none;
}

.comments-area span.defier-cat-title {
  float: left;
  height: auto;
}

.comments-area span.defier-cat-title h4.widget-title {
  position: relative;
  text-align: center;
}

.comments-area span.defier-cat-title h4.widget-title span {
  font-size: 155%;
  padding: 0 10px;
  color: #000;
}

.comments-area span.defier-cat-title h4.widget-title i {
  color: <?php echo $color_main2; ?>;
  font-size: 70%;
  padding-right: 5px;
}

.comments-area .comment-reply-title {
  font-size: 100%;
  margin: 2px 0 20px;
  display: block;
  float: left;
  width: 100%;
}

.comments-area .comment-reply-title small {
  padding-top: 0px;
  color: #222;
}

.comments-area .comment-reply-title small a {
  color: #222;
  background: #fff;
  float: right;
}

.comments-area form.comment-form p a {
  color: #777;
  font-weight: 200;
  font-size: 98%;
}

.comments-area form.comment-form .group textarea {
  outline: none;
  resize: none;
}

.comments-area form.comment-form p.form-submit input[type=submit] {
  border: 2px solid <?php echo $color_main2; ?>;
  border-radius: 0px;
  float: right;
  background: transparent;
  color: <?php echo $color_main2; ?>;
  font-size: 100%;
  width: auto;
  outline: none;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
  padding: 13px 20px;
  font-size: 120%;
}

.comments-area form.comment-form p.form-submit input[type=submit]:hover {
  border: 2px solid <?php echo $color_main2; ?>;
  background: <?php echo $color_main2; ?>;
  color: #fff;
  padding: 13px 20px;
  font-size: 120%;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.comments-area form.comment-form p.form-submit input[type=submit]:focus {
  border: 2px solid <?php echo $color_main2; ?>;
  background: <?php echo $color_main2; ?>;
  color: #fff;
}

p.form-submit {
  width: 100%;
  float: left;
}

#comments ol,
#comments ul {
  list-style: outside none none;
  padding: 0;
  margin-top: 50px;
  float: left;
}

#comments ol li,
#comments ul li {
  padding: 0px;
  display: inline-block;
  border: 0;
  width: 100%;
}

#comments ol li .comment-body,
#comments ul li .comment-body {
  position: relative;
  float: left;
  margin: 0;
  padding: 0;
  width: 100%;
}

#comments ol li .comment-body .comment-author,
#comments ul li .comment-body .comment-author {
  float: left;
  width: 35%;
  z-index: 999;
  position: relative;
  left: 20px;
  top: 30px;
  background: #fff;
  border: 2px solid #f7f7f7;
  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;
  -ms-border-radius: 50px;
  border-radius: 50px;
}

@media (min-width: 320px) and (max-width: 767px) {
  #comments ol li .comment-body .comment-author,
  #comments ul li .comment-body .comment-author {
    width: 100%;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  #comments ol li .comment-body .comment-author,
  #comments ul li .comment-body .comment-author {
    width: 100%;
  }
}

#comments ol li .comment-body .comment-author img,
#comments ul li .comment-body .comment-author img {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
  width: 55px;
  padding: 5px;
}

@media (min-width: 320px) and (max-width: 767px) {
  #comments ol li .comment-body .comment-author img,
  #comments ul li .comment-body .comment-author img {
    position: relative;
  }
}

#comments ol li .comment-body .comment-author cite,
#comments ul li .comment-body .comment-author cite {
  font-style: normal;
  margin-left: 10px;
  color: #0785ab;
  position: absolute;
  top: 4px;
  left: 55px;
  font-size: 18px;
}

@media (min-width: 320px) and (max-width: 767px) {
  #comments ol li .comment-body .comment-author cite,
  #comments ul li .comment-body .comment-author cite {
    left: 0px;
    position: relative;
    top: 0px;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  #comments ol li .comment-body .comment-author cite,
  #comments ul li .comment-body .comment-author cite {
    left: 0px;
    position: relative;
    position: relative;
    top: 0px;
  }
}

#comments ol li .comment-body .comment-author cite a,
#comments ul li .comment-body .comment-author cite a {
  color: #222;
}

#comments ol li .comment-body .comment-author cite a:hover,
#comments ul li .comment-body .comment-author cite a:hover {
  color: <?php echo $color_main2; ?>;
}

#comments ol li .comment-body .comment-author .says,
#comments ul li .comment-body .comment-author .says {
  display: inline;
  position: absolute;
  top: 28px;
  left: 65px;
  font-size: 90%;
  color: #777;
}

@media (min-width: 320px) and (max-width: 767px) {
  #comments ol li .comment-body .comment-author .says,
  #comments ul li .comment-body .comment-author .says {
    position: relative;
    top: 0;
    left: 0px;
    top: 0px;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  #comments ol li .comment-body .comment-author .says,
  #comments ul li .comment-body .comment-author .says {
    position: relative;
    top: 0;
    left: 0px;
  }
}

#comments ol li .comment-body p,
#comments ul li .comment-body p {
  clear: inherit;
  color: #4a4a4a;
  display: block;
  font-size: 100%;
  line-height: 160%;
  margin: 0;
  padding: 50px 20px 20px 20px;
  width: 100%;
  border-radius: 0px;
  background: #f7f7f7;
  width: 100%;
  float: left;
  top: 0px;
  -webkit-border-radius: 30px 0 0 0;
  -moz-border-radius: 30px 0 0 0;
  -ms-border-radius: 30px 0 0 0;
  border-radius: 30px 0 0 0;
  position: relative;
}

@media (min-width: 320px) and (max-width: 767px) {
  #comments ol li .comment-body p,
  #comments ul li .comment-body p {
    margin-bottom: 25px;
    float: none;
    padding: 120px 20px 20px 20px;
  }
}

#comments ol li .comment-body .reply,
#comments ul li .comment-body .reply {
  text-align: right;
  padding: 0;
  position: absolute;
  top: 70px;
  display: inline;
  right: 5px;
}

@media (min-width: 320px) and (max-width: 767px) {
  #comments ol li .comment-body .reply,
  #comments ul li .comment-body .reply {
    top: 40px;
  }
}

#comments ol li .comment-body .reply a,
#comments ul li .comment-body .reply a {
  background: transparent;
  border: medium none;
  border-radius: 0px;
  box-shadow: none;
  color: <?php echo $color_main1; ?>;
  font-family: inherit;
  text-shadow: none;
  font-size: 12px;
  padding: 8px 20px;
  display: inline-block;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

#comments ol li .comment-body .reply a:before,
#comments ul li .comment-body .reply a:before {
  content: "\e039";
  margin-right: 5px;
  font-family: 'defier-icon' !important;
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

#comments ol li .comment-body .reply a:hover,
#comments ul li .comment-body .reply a:hover {
  color: <?php echo $color_main3; ?>;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

#comments ol li .comment-body .comment-meta,
#comments ul li .comment-body .comment-meta {
  font-family: tahoma;
  font-size: 80%;
  padding: 3px;
  border-radius: 0;
  /* width: 100%; */
  text-align: right;
  position: absolute;
  top: 75px;
  right: 105px;
  z-index: 999;
  border-right: 1px solid #ddd;
  border-left: 0px;
  padding-right: 30px;
}

@media (min-width: 320px) and (max-width: 767px) {
  #comments ol li .comment-body .comment-meta,
  #comments ul li .comment-body .comment-meta {
    right: 18px;
    border: 0;
    padding: 0;
    top: 15px;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  #comments ol li .comment-body .comment-meta,
  #comments ul li .comment-body .comment-meta {
    right: 18px;
    border: 0;
    padding: 0;
    top: 15px;
  }
}

#comments ol li .comment-body .comment-meta a,
#comments ul li .comment-body .comment-meta a {
  color: #ccc;
}

.comment-awaiting-moderation {
  float: right;
  position: absolute;
  right: 0;
  top: 25px;
  padding: 5px;
  background: #fff7e7;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  border-radius: 3px;
  color: #b39556;
  font-size: 95%;
}

ol.children {
  list-style: outside none none;
  padding: 0;
  margin-top: 0 !important;
  padding-left: 3% !important;
  padding-right: 0 !important;
  margin-left: 0;
  width: 100%;
}

ol.children li.comment {
  padding: 0;
}

ol.children li.comment .comment-body p {
  background: transparent !important;
  border: 1px solid #ededed;
}

.logged-in-as {
  font-size: 12px;
  color: #4a4a4a;
  float: left;
  width: 100%;
  line-height: 35px;
  text-align: center;
}

.comment-notes {
  color: rgba(102, 102, 102, 0.75);
  font-family: inherit;
  font-size: 12px;
  margin: 20px auto;
  text-align: center;
  width: 100%;
  float: left;
}

/******* comments Area *********/
.post-format-entry embed, .post-format-entry iframe, .post-format-entry object {
  max-width: 100%;
  width: 100%;
  height: 500px;
  margin: 20px 0;
}

/************* Social Media Share Icon *******************/
ul.share-post-social {
  padding: 20px 0;
}

ul.share-post-social span {
  float: left;
  padding: 2px 15px;
  color: #777;
}

ul.share-post-social li {
  display: inline-block;
  position: relative;
}

ul.share-post-social li a {
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
  padding: 5px 10px;
  float: left;
  border: 1px solid #ededed;
}

@media (min-width: 320px) and (max-width: 767px) {
  ul.share-post-social li a {
    padding: 5px 5px;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  ul.share-post-social li a {
    padding: 5px 5px;
  }
}

ul.share-post-social li a i {
  float: left;
  margin-right: 0px;
  font-size: 110%;
  width: 25px;
  text-align: center;
}

ul.share-post-social li a span {
  padding: 0px;
  line-height: 1;
  overflow: hidden;
  display: none;
  position: absolute;
  background: rgba(0, 0, 0, 0.6);
  padding: 5px;
  color: #fff;
  font-size: 75%;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -ms-border-radius: 2px;
  border-radius: 2px;
  top: -30px;
  border-radius: 2px;
  width: 80px;
  text-align: center;
  left: -15px;
}

ul.share-post-social li a span:after {
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 5px 5px 0 5px;
  border-color: rgba(0, 0, 0, 0.6) transparent transparent transparent;
  content: "";
  top: 20px;
  position: absolute;
  left: 35px;
}

ul.share-post-social li a.social-facebook i {
  color: #597ac7;
}

ul.share-post-social li a.social-twitter i {
  color: #5cbcec;
}

ul.share-post-social li a.social-google-plus i {
  color: #3a3a3a;
}

ul.share-post-social li a.social-stumble i {
  color: #ff4417;
}

ul.share-post-social li a.social-linkedin i {
  color: #90c9dc;
}

ul.share-post-social li a.social-pinterest i {
  color: #ff3636;
}

ul.share-post-social li:hover {
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

ul.share-post-social li:hover a {
  background: #f1f1f1;
}

ul.share-post-social li:hover a i {
  float: left;
  font-size: 110%;
}

ul.share-post-social li:hover a span {
  overflow: visible;
  display: block;
}

body#Fixed .fixedwidth-container.Sidebar-Right, body#Fixed .fixedwidth-container.Sidebar-Left, body#Fixed .fixedwidth-container.Standard, body#Fullwidth .fixedwidth-container.Sidebar-Right, body#Fullwidth .fixedwidth-container.Sidebar-Left, body#Fullwidth .fixedwidth-container.Standard, body#Boxed .fixedwidth-container.Sidebar-Right, body#Boxed .fixedwidth-container.Sidebar-Left, body#Boxed .fixedwidth-container.Standard {
  margin-top: 25px;
}

.fixedwidth-container.Sidebar-Right, .fixedwidth-container.Sidebar-Left, .fixedwidth-container.Standard {
  float: left;
  width: 100%;
}

.fixedwidth-container.Sidebar-Right ul.breadcrumbs, .fixedwidth-container.Sidebar-Left ul.breadcrumbs, .fixedwidth-container.Standard ul.breadcrumbs {
  font-size: 85%;
}

.fixedwidth-container.Sidebar-Right .single-Wrapper .entry-header, .fixedwidth-container.Sidebar-Left .single-Wrapper .entry-header, .fixedwidth-container.Standard .single-Wrapper .entry-header {
  float: left;
  position: relative;
}

.fixedwidth-container.Sidebar-Right .single-Wrapper .entry-header .meta-first-row, .fixedwidth-container.Sidebar-Left .single-Wrapper .entry-header .meta-first-row, .fixedwidth-container.Standard .single-Wrapper .entry-header .meta-first-row {
  margin-bottom: 20px;
  float: left;
  width: 100%;
}

.fixedwidth-container.Sidebar-Right .single-Wrapper .entry-header h1.entry-title, .fixedwidth-container.Sidebar-Left .single-Wrapper .entry-header h1.entry-title, .fixedwidth-container.Standard .single-Wrapper .entry-header h1.entry-title {
  padding-bottom: 5px;
  margin-bottom: 20px;
  line-height: 140%;
  text-align: left;
}

.fixedwidth-container.Sidebar-Right .single-Wrapper .grid, .fixedwidth-container.Sidebar-Left .single-Wrapper .grid, .fixedwidth-container.Standard .single-Wrapper .grid {
  height: auto;
  margin-bottom: 15px;
  float: left;
  position: relative;
  background: transparent;
}

.fixedwidth-container.Sidebar-Right .single-Wrapper .grid figure.post-figure figcaption, .fixedwidth-container.Sidebar-Left .single-Wrapper .grid figure.post-figure figcaption, .fixedwidth-container.Standard .single-Wrapper .grid figure.post-figure figcaption {
  position: absolute;
}

.fixedwidth-container.Sidebar-Right .single-Wrapper .grid figure.post-figure figcaption .post-type-format, .fixedwidth-container.Sidebar-Left .single-Wrapper .grid figure.post-figure figcaption .post-type-format, .fixedwidth-container.Standard .single-Wrapper .grid figure.post-figure figcaption .post-type-format {
  position: absolute;
  margin: 40px;
  font-size: 130%;
  color: #fff;
  right: 0;
  left: auto;
}

.Standard .entry-header h1.entry-title {
  text-align: left;
  padding-bottom: 5px;
  line-height: 140%;
  margin: 0 3% 20px;
}

.Standard ul.breadcrumbs {
  padding: 5px 0;
  list-style: none;
  text-align: right;
}

.Standard .widget-tab {
  padding: 10px;
  float: left;
  width: 100%;
}

.Standard .entry-content {
  padding: 0 70px 30px;
}

@media (min-width: 320px) and (max-width: 767px) {
  .Standard .entry-content {
    padding: 0 20px 30px;
  }
}

.comment-respond {
  float: left;
  width: 100%;
  margin-top: 20px;
}

.single-Wrapper .entry-meta div {
  float: none;
  margin: 15px 0 20px 0;
}

@media (min-width: 320px) and (max-width: 767px) {
  header.entry-header .meta-first-row {
    margin-top: 20px;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  header.entry-header .meta-first-row {
    margin-top: 20px;
  }
}

.standard .single-Wrapper .grid {
  position: relative;
  height: auto;
}

.comment-reply-title span.defier-cat-title h4.widget-title {
  width: 100%;
}

#Fixed .Full-width {
  padding: 0 !important;
}

#portfolio-wrapper .portfolio {
  list-style: none;
}

#portfolio-wrapper .portfolio .gridThumb {
  margin-bottom: 30px;
}

@media (min-width: 320px) and (max-width: 767px) {
  #portfolio-wrapper .portfolio .gridThumb {
    margin-bottom: 0px;
  }
}

#portfolio-wrapper .portfolio .gridThumb .grid {
  background: <?php echo $color_main2; ?>;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery {
  border-radius: 0;
  height: 230px;
  min-width: 100%;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

@media (min-width: 320px) and (max-width: 767px) {
  #portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery {
    height: auto;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  #portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery {
    height: auto;
  }
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery figcaption:after {
  background: rgba(0, 0, 0, 0.4);
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  content: "";
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery figcaption h4 {
  position: absolute;
  z-index: 999;
  text-transform: capitalize;
  top: 0;
  padding: 10px;
  display: none;
  left: 0;
  background: rgba(0, 0, 0, 0.5);
  margin: 20px;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery figcaption h4 a {
  font-size: 100%;
  color: #fff;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery figcaption p.excerpt {
  display: none;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery figcaption p.links {
  z-index: 999999;
  position: absolute;
  top: 0px;
  left: 0;
  width: 100%;
  right: 0;
  font-size: 170%;
  bottom: 0;
  opacity: 0;
  text-align: center;
  padding-top: 21%;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

@media (min-width: 320px) and (max-width: 767px) {
  #portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery figcaption p.links {
    opacity: 1;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  #portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery figcaption p.links {
    opacity: 1;
  }
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery figcaption p.links a {
  background: <?php echo $color_main1; ?>;
  color: #fff;
  padding: 10px;
  height: 40px;
  cursor: pointer;
  width: 40px;
  display: inline-block;
  margin: 5px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery figcaption p.links a i {
  float: left;
  display: inline-block;
  font-size: 65%;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery:hover {
  color: <?php echo $color_main3; ?>;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery:hover figcaption img {
  opacity: 1;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery:hover figcaption h4 {
  top: 0;
  display: none;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery:hover figcaption:after {
  background: transparent;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  content: "";
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery:hover figcaption p.excerpt {
  display: none;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery:hover figcaption p.links {
  opacity: 1;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery:hover figcaption p.links a {
  background: <?php echo $color_main1; ?>;
  color: #fff;
  padding: 10px;
  height: 40px;
  width: 40px;
  display: inline-block;
  margin: 5px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery:hover figcaption p.links a i {
  font-size: 65%;
  float: left;
  display: inline-block;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.effect-thumbDefier-gallery:hover figcaption p.links a:hover {
  color: <?php echo $color_main3; ?>;
  background: #fff;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.fixed-gallery-thum {
  position: fixed;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  top: 0;
  z-index: 99999999999999999999;
  left: 0;
  bottom: 0;
  padding: 0em;
  height: auto !important;
  text-align: center;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.fixed-gallery-thum a {
  display: inline-block;
  margin: 0 21%;
  text-align: center;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.fixed-gallery-thum img {
  opacity: 1;
  z-index: 999;
  width: auto;
  margin: 0 auto;
  position: relative;
  top: 170px;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.fixed-gallery-thum h4 {
  display: block !important;
  top: 0px;
  right: auto;
  margin: 20px;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.fixed-gallery-thum h4 a {
  display: block;
  margin: 0;
  text-align: left;
  font-size: 120%;
  font-weight: 200;
  margin: 10px;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.fixed-gallery-thum p.excerpt {
  display: block !important;
  z-index: 999999;
  position: absolute;
  bottom: 0;
  background: rgba(0, 0, 0, 0.6);
  text-transform: capitalize;
  padding: 20px;
  width: 100%;
  text-align: left;
  font-size: 74%;
  margin: 0;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.fixed-gallery-thum p.excerpt a {
  margin: 0;
  padding-left: 10px;
  color: #fff;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.fixed-gallery-thum p.excerpt a i {
  padding-right: 5px;
  color: <?php echo $color_main3; ?>;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.fixed-gallery-thum figcaption p.links {
  display: none;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.fixed-gallery-thum figcaption:after {
  background: rgba(0, 0, 0, 0.7) !important;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.fixed-gallery-thum:hover:after {
  background: rgba(0, 0, 0, 0.7) !important;
}

#portfolio-wrapper .portfolio .gridThumb .grid figure.fixed-gallery-thum .searchclose2 {
  text-align: center;
  vertical-align: middle;
  padding-top: 18px;
  cursor: pointer;
  margin: 25px;
  width: 55px;
  height: 55px;
  background: url(../images/search-close.png);
  right: 8.4%;
  position: absolute;
  cursor: pointer;
  z-index: 9999999;
  top: 0;
  right: 0;
}

#portfolio-filter {
  border-bottom: 1px solid #f0f0f0;
  border-top: 1px solid #f0f0f0;
  list-style-type: none;
  margin: 0px 0 20px auto;
  padding: 0px 20px;
}

#portfolio-filter li {
  margin: 0;
  border-right: 1px solid #f0f0f0;
  padding: 0;
  display: inline-block;
}

#portfolio-filter li a {
  color: #999;
  display: block;
  /*margin: 10px;*/
  text-transform: capitalize;
  padding: 15px 25px;
  outline: none;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

#portfolio-filter li a.current {
  background: <?php echo $color_main3; ?>;
  color: #fff;
  outline: none;
  border-radius: 0;
  /*margin: 10px;*/
  padding: 15px 25px;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

#portfolio-filter li:last-child {
  border: 0;
}

.typee-page {
  background: none repeat scroll 0 0 #fff;
  border: 1px solid #ededed;
  padding: 20px;
  float: left;
  width: 100%;
  margin-bottom: 25px;
}

.search-result .entry-header h1.entry-title {
  text-align: left;
  padding-bottom: 5px;
  margin: 0;
}

.search-result .entry-header h1.entry-title a {
  font-size: 80%;
}

.search-result .entry-meta {
  text-align: left;
}

.search-result .entry-content {
  font-size: 95%;
}

.search-result .readMoreWrapper {
  text-align: right;
}

.page-header {
  padding-bottom: 9px;
  margin: 0;
  border-bottom: 0px solid #eee;
  padding: 20px 20px;
}

.page-header h1 {
  font-size: 170%;
  margin: 0;
}

.page-header h1 span {
  font-size: 125%;
  color: <?php echo $color_main3; ?>;
}

.masonry {
  padding-bottom: 150px;
}

.masonry .navigation {
  display: none;
}

.masonry .content-area .format-link .entry-meta {
  display: none;
}

.masonry .content-area .format-link .link-post-format-content {
  padding: 50px 20px;
}

.masonry .content-area .format-link .link-post-format-content h2.title {
  background: #000;
  padding: 10px;
}

.masonry .content-area .format-link .link-post-format-content h2.title a {
  background: transparent;
}

.masonry .content-area .format-link .link-post-format-content h2.title a i {
  margin: 5px 5px;
  float: left;
}

.masonry .content-area .format-link .link-post-format-content h2.title a b.link {
  font-size: 50%;
  margin-top: 100px;
}

.masonry .content-area .format-quote .entry-header, .masonry .content-area .format-link .entry-header {
  display: none;
}

.masonry .content-area .format-quote .entry-content, .masonry .content-area .format-link .entry-content {
  display: none;
}

.masonry .content-area .format-quote .entry-meta, .masonry .content-area .format-link .entry-meta {
  background: #222 !important;
}

.masonry .content-area .format-quote blockquote, .masonry .content-area .format-link blockquote {
  padding: 30px;
}

.masonry .content-area .format-quote blockquote p, .masonry .content-area .format-link blockquote p {
  font-size: 95%;
  padding: 3em 0;
}

.masonry .content-area .format-quote blockquote p i, .masonry .content-area .format-link blockquote p i {
  display: none;
}

.masonry .content-area .format-quote blockquote cite, .masonry .content-area .format-link blockquote cite {
  margin: 0px 0 50px;
  width: 100%;
}

.masonry .content-area article.post {
  overflow: hidden;
  width: 100%;
  margin: 0px;
  padding: 0;
}

.masonry .content-area article.post figure.post-thumb {
  position: relative;
}

.masonry .content-area article.post figure.post-thumb figcaption .post-type-format {
  position: absolute;
  top: 10px;
  left: 10px;
  right: 10px;
  z-index: 9999999999;
  color: #fff;
  font-size: 144%;
  opacity: 1;
  width: 35px;
  text-align: center;
  height: 35px;
}

.masonry .content-area article.post figure.post-thumb .format-status figure.post-thumb figcaption {
  display: none;
}

.masonry .content-area article.post figure.post-thumb .post-format-entry .social-post-embed {
  padding: 0;
}

.masonry .content-area article.post figure.post-thumb .post-format-entry embed, .masonry .content-area article.post figure.post-thumb .post-format-entry iframe, .masonry .content-area article.post figure.post-thumb .post-format-entry object {
  height: auto;
  margin: 0px 0;
}

.masonry .content-area article.post figure.post-thumb .post-format-entry .gallery-post-images {
  width: 100%;
  margin-bottom: 0px !important;
  height: auto;
}

.masonry .content-area article.post figure.post-thumb .post-format-entry .gallery-post-images .slick-list .slick-slide img {
  height: auto;
}

.masonry .content-area article.post figure.post-thumb .post-format-entry .gallery-post-images .slick-arrow {
  top: 2vh;
  right: 10px;
  left: auto;
  font-size: 150%;
}

.masonry .content-area article.post figure.post-thumb .post-format-entry .gallery-post-images .fa-arrow-left2 {
  left: auto;
  right: 50px;
}

.masonry .content-area article.post figure.post-thumb .post-format-entry a {
  margin-bottom: 15px;
}

.masonry .content-area article.post header.entry-header {
  padding: 0 10px;
}

.masonry .content-area article.post header.entry-header h1 {
  line-height: 70%;
  margin: 0;
}

.masonry .content-area article.post header.entry-header h1 a {
  font-size: 65%;
}

.masonry .content-area article.post .entry-meta {
  float: left;
  width: 100%;
  background: #f1f1f1;
  margin: 0;
  padding: 10px 0;
}

.masonry .content-area article.post .entry-meta .time, .masonry .content-area article.post .entry-meta .view-counter, .masonry .content-area article.post .entry-meta .like-counter {
  float: none;
  margin: 0;
}

.masonry .content-area article.post .entry-meta .time:after, .masonry .content-area article.post .entry-meta .view-counter:after, .masonry .content-area article.post .entry-meta .like-counter:after {
  opacity: 0;
  margin: 0 5px;
}

.masonry .content-area article.post .entry-content {
  margin: 15px 0;
  font-size: 100%;
  overflow: hidden;
}

.masonry .content-area #infscr-loading {
  position: fixed;
  bottom: 15px;
  z-index: 999999999999;
  background: url(../images/loader.gif);
  background-position: center center;
  background-repeat: no-repeat;
  background-color: #fff;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
  border-radius: 50%;
  height: 60px;
  width: 60px;
  padding: 6px;
  background-size: 50%;
  -webkit-box-shadow: 0 20px 70px 2px #777;
  -moz-box-shadow: 0 20px 70px 2px #777;
  -o-box-shadow: 0 20px 70px 2px #777;
  -ms-box-shadow: 0 20px 70px 2px #777;
  box-shadow: 0 20px 70px 2px #777;
}

.masonry .content-area #infscr-loading img {
  display: none;
}

.single-loop {
  margin: 30px 0 0;
}

/**************** pages ********************/
.page-title {
  padding: 0.3em 1em 0.3em 0.5em;
  border-top: 1px solid #f2f2f2;
  margin-bottom: 20px;
  margin-top: 0;
  background: #f9f9f9;
  color: #777;
  /* border-bottom: 1px solid #f2f2f2;*/
  text-align: center;
  float: left;
  width: 100%;
}

.page-title h2 {
  color: #777;
  margin: 0;
  line-height: 210%;
  text-align: left;
}

/************ 404 *******************/
.error-404 {
  float: left;
  width: 100%;
  padding: 5em;
}

.error-404 a {
  color: #777;
  padding: 0 5px;
}

.error-404 a:hover {
  color: <?php echo $color_main2; ?>;
  padding: 0 5px;
}

@media (min-width: 320px) and (max-width: 767px) {
  .error-404 {
    padding: 0 1em;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .error-404 {
    padding: 0 1em;
  }
}

.error-404 .img404 {
  background: url(../images/404.svg);
  height: 400px;
  width: 100%;
  background-size: 70%;
  background-repeat: no-repeat;
  background-position: center;
}

@media (min-width: 320px) and (max-width: 767px) {
  .error-404 .img404 {
    height: 260px;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .error-404 .img404 {
    height: 260px;
  }
}

.error-404 header.page-header {
  float: left;
  width: 100%;
}

.error-404 header.page-header h1.page-title {
  background: transparent;
  border: 0;
  padding: 20px 0;
  width: 100%;
  float: left;
  color: <?php echo $color_main2; ?>;
}

.error-404 .page-content ul.catelist li {
  border-bottom: 1px solid #ededed;
  padding: 5px;
}

.error-404 .page-content p {
  color: #777;
  font-size: 130%;
  float: left;
  width: 100%;
  text-align: center;
  margin-bottom: 40px;
}

.error-404 .page-content .search-form {
  background: none;
  float: left;
  width: 100%;
  border-top: 1px solid #ededed;
  padding: 50px 0 50px 0;
}

.error-404 .page-content .search-form input {
  padding: 10px;
  font-size: 150%;
  font-weight: 200;
  border-radius: 0;
  border: 1px solid #ededed;
}

.error-404 .page-content .search-form input:focus {
  outline: none;
}

/***  ShortCodes  ***/
span.wpcf7-not-valid-tip, div.wpcf7-mail-sent-ng {
  background-color: #eed3d7;
  border: medium none;
  box-sizing: border-box;
  color: #b94a48;
  display: block;
  left: 0;
  margin: 10px 0;
  padding: 14px;
  position: relative;
  top: 0;
  width: 100%;
}

div.wpcf7-response-output {
  background-color: #dff0d8;
  border: medium none;
  color: #468847;
  margin: 10px 0;
  padding: 14px;
}

div.wpcf7-validation-errors {
  background-color: #fcf8e3;
  border: medium none;
  clear: both;
  color: #c09853;
  margin: 10px 0;
  padding: 14px;
}

span.dropcap {
  float: left;
  font-size: 400%;
  font-weight: 600;
  margin-right: 15px;
  padding: 18px 0 9px;
  font-family: Georgia,Arial,"helvetica neue",Helvetica,Verdana,sans-serif;
}

span.square {
  background: none repeat scroll 0 0 #0785ab !important;
  color: #fff;
  font-size: 32px;
  padding: 10px !important;
}

span.circle {
  background: none repeat scroll 0 0 #0785ab !important;
  border-radius: 30px;
  color: #fff;
  font-size: 24px;
  padding: 10px 13px !important;
}

.one_half, .one_third, .two_third, .three_fourth, .one_fourth {
  float: left;
  margin-bottom: 20px;
  margin-right: 3%;
  position: relative;
}

.one_half {
  width: 48.5%;
}

.one_third {
  width: 31%;
}

.two_third {
  width: 65.6664%;
}

.one_fourth {
  width: 22.5%;
}

.three_fourth {
  width: 74.5%;
}

.last_item {
  margin-right: 0 !important;
}

.last_item:after {
  clear: both;
}

.highlight {
  background: #FF9;
  color: #000;
  padding: 5px 10px;
}

.spacer {
  clear: both;
  height: 30px;
}

hr {
  background-color: transparent;
  border-bottom: medium none;
  border-top: 1px solid #999;
  width: 100%;
}

hr.thin {
  border-top: 1px solid #999;
  height: 1px;
}

hr.fat {
  border-top: 2px solid #999;
  height: 2px;
}

hr.dashed {
  background: none repeat scroll 0 0 transparent;
  border-top: 1px dashed #999;
  height: 1px;
}

hr.dotted {
  background: none repeat scroll 0 0 transparent;
  border-top: 2px dotted #999;
  height: 2px;
}

hr.stylish {
  background: url("../images/stylish-hr.png") repeat-x scroll 0 0 transparent;
  border-top: medium none;
  height: 6px;
}

hr.shadow {
  background: url("../images/shadow-hr.png") repeat-x scroll center top/contain transparent;
  border-top: medium none;
  height: 14px;
}

.blockquote-holder {
  background: #f6f6f6;
  border-radius: 5px;
  font-size: 100%;
  margin: 20px 0;
  padding: 35px 20px;
}

.blockquote-holder blockquote {
  font-family: inherit;
  padding: 0 50px;
  font-style: italic;
  color: #222;
}

.button-rounded {
  border: none;
  border-radius: 4px;
  box-shadow: none;
  display: inline-block;
  margin: 10px 0;
  padding: 12px 20px;
}

.button-square {
  border: none;
  border-radius: 0px;
  display: inline-block;
  margin: 10px 0;
  box-shadow: none;
  padding: 12px 20px;
}

.first-p {
  color: #999;
}

.defier-first-prag {
  text-align: justify !important;
  color: #000;
  padding: 20px 0;
  float: left;
  width: 100%;
  margin-bottom: 20px;
  border-top: 1px solid #f1f1f1;
  border-bottom: 1px solid #f1f1f1;
  font-size: 110%;
  font-weight: 500;
}

[dir="rtl"] .fa-arrow-right2 {
  display: inline-block;
  font-size: 150%;
  margin: 10px;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

[dir="rtl"] .fa-arrow-right2:before {
  content: "\e094";
}

[dir="rtl"] .fa-arrow-left2 {
  display: inline-block;
  font-size: 150%;
  margin: 10px;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  z-index: 9999;
}

[dir="rtl"] .fa-arrow-left2:before {
  content: "\e095";
}

a.readMore i {
  font-weight: 200;
  margin-left: 10px !important;
  margin-right: 10px !important;
  float: right;
  line-height: 2;
}

[dir="rtl"] .defier-cat-title h4.widget-title:first-letter {
  font-weight: inherit;
}

[dir="rtl"] .grid figure.effect-thumbDefier .catLabel a:first-letter {
  font-weight: inherit;
}

/***    by default  ***/
html, body {
  height: 100%;
}

html, body, ul, ol {
  padding: 0;
  margin: 0;
}

.pointer:hover {
  cursor: url(../images/cursor.png), auto !important;
}

/* --------------------------------

Primary style

-------------------------------- */
*, *::after, *::before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

html {
  font-size: 62.5%;
}

body.overflow-hidden {
  /* used when modal is visible */
  overflow: hidden;
}

a {
  color: #03bb91;
  text-decoration: none;
}

.nopadding {
  padding: 0;
}
.grid figure.effect-thumbDefier.popular-post h2 a {
  top:55% !important;
}
@media (min-width: 320px) and (max-width: 767px) {
  .headerV3 #socialMediaList {
    margin:0;
  }
}
/*# sourceMappingURL=style.css.map */
