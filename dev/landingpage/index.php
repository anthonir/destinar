<?php ob_start(); include ('data/seguridad.php'); include ('data/info.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="google-site-verification" content="-AqqVh32jbYKnsH-VyunaHREoqDttWedQk9D6MS3uLI" />
<meta name="apple-mobile-web-app-status-bar-style" content="#000">
<meta name="msapplication-navbutton-color" content="#000">
<meta name="theme-color" content="#000">
<link rel="apple-touch-icon-precomposed" href="imagenes/favicon.png"></link>
<link rel="icon" href="imagenes/favicon.png"></link>
<link rel="external" href="imagenes/favicon.png"></link>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<title><? echo $title;?></title>
<meta name="description" content="<? echo $description;?>"/>
<link type="text/css" href="css/estilos.css?v=<? echo $version;?>" rel="stylesheet" />

<style type="text/css">
@font-face{font-family:'Roboto';font-style:normal;font-weight:300;src:local('Roboto Light'),local(Roboto-Light),url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fBBc4.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local(Roboto),local(Roboto-Regular),url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxK.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;src:local('Roboto Medium'),local(Roboto-Medium),url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fBBc4.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'),local(Roboto-Bold),url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}
@font-face{font-family:'FontAwesome';src:url('fuentes/fontawesome-webfont.eot?v=4.4.0');src:url('fuentes/fontawesome-webfont.eot?#iefix&v=4.4.0') format('embedded-opentype'),url('fuentes/fontawesome-webfont.woff2?v=4.4.0') format('woff2'),url('fuentes/fontawesome-webfont.woff?v=4.4.0') format('woff'),url('fuentes/fontawesome-webfont.ttf?v=4.4.0') format('truetype'),url('fuentes/fontawesome-webfont.svg?v=4.4.0#fontawesomeregular') format('svg');font-weight:normal;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-lg{font-size:1.33333333em;line-height:.75em;vertical-align:-15%}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-fw{width:1.28571429em;text-align:center}.fa-ul{padding-left:0;margin-left:2.14285714em;list-style-type:none}.fa-ul>li{position:relative}.fa-li{position:absolute;left:-2.14285714em;width:2.14285714em;top:.14285714em;text-align:center}.fa-li.fa-lg{left:-1.85714286em}.fa-border{padding:.2em .25em .15em;border:solid .08em #eee;border-radius:.1em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left{margin-right:.3em}.fa.fa-pull-right{margin-left:.3em}.pull-right{float:right}.pull-left{float:left}.fa.pull-left{margin-right:.3em}.fa.pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}.fa-rotate-90{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1);-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=3);-webkit-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);-webkit-transform:scale(-1, 1);-ms-transform:scale(-1, 1);transform:scale(-1, 1)}.fa-flip-vertical{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1);-webkit-transform:scale(1, -1);-ms-transform:scale(1, -1);transform:scale(1, -1)}:root .fa-rotate-90,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-flip-horizontal,:root .fa-flip-vertical{filter:none}.fa-stack{position:relative;display:inline-block;width:2em;height:2em;line-height:2em;vertical-align:middle}.fa-stack-1x,.fa-stack-2x{position:absolute;left:0;width:100%;text-align:center}.fa-stack-1x{line-height:inherit}.fa-stack-2x{font-size:2em}.fa-inverse{color:#fff}.fa-glass:before{content:"\f000"}.fa-music:before{content:"\f001"}.fa-search:before{content:"\f002"}.fa-envelope-o:before{content:"\f003"}.fa-heart:before{content:"\f004"}.fa-star:before{content:"\f005"}.fa-star-o:before{content:"\f006"}.fa-user:before{content:"\f007"}.fa-film:before{content:"\f008"}.fa-th-large:before{content:"\f009"}.fa-th:before{content:"\f00a"}.fa-th-list:before{content:"\f00b"}.fa-check:before{content:"\f00c"}.fa-remove:before,.fa-close:before,.fa-times:before{content:"\f00d"}.fa-search-plus:before{content:"\f00e"}.fa-search-minus:before{content:"\f010"}.fa-power-off:before{content:"\f011"}.fa-signal:before{content:"\f012"}.fa-gear:before,.fa-cog:before{content:"\f013"}.fa-trash-o:before{content:"\f014"}.fa-home:before{content:"\f015"}.fa-file-o:before{content:"\f016"}.fa-clock-o:before{content:"\f017"}.fa-road:before{content:"\f018"}.fa-download:before{content:"\f019"}.fa-arrow-circle-o-down:before{content:"\f01a"}.fa-arrow-circle-o-up:before{content:"\f01b"}.fa-inbox:before{content:"\f01c"}.fa-play-circle-o:before{content:"\f01d"}.fa-rotate-right:before,.fa-repeat:before{content:"\f01e"}.fa-refresh:before{content:"\f021"}.fa-list-alt:before{content:"\f022"}.fa-lock:before{content:"\f023"}.fa-flag:before{content:"\f024"}.fa-headphones:before{content:"\f025"}.fa-volume-off:before{content:"\f026"}.fa-volume-down:before{content:"\f027"}.fa-volume-up:before{content:"\f028"}.fa-qrcode:before{content:"\f029"}.fa-barcode:before{content:"\f02a"}.fa-tag:before{content:"\f02b"}.fa-tags:before{content:"\f02c"}.fa-book:before{content:"\f02d"}.fa-bookmark:before{content:"\f02e"}.fa-print:before{content:"\f02f"}.fa-camera:before{content:"\f030"}.fa-font:before{content:"\f031"}.fa-bold:before{content:"\f032"}.fa-italic:before{content:"\f033"}.fa-text-height:before{content:"\f034"}.fa-text-width:before{content:"\f035"}.fa-align-left:before{content:"\f036"}.fa-align-center:before{content:"\f037"}.fa-align-right:before{content:"\f038"}.fa-align-justify:before{content:"\f039"}.fa-list:before{content:"\f03a"}.fa-dedent:before,.fa-outdent:before{content:"\f03b"}.fa-indent:before{content:"\f03c"}.fa-video-camera:before{content:"\f03d"}.fa-photo:before,.fa-image:before,.fa-picture-o:before{content:"\f03e"}.fa-pencil:before{content:"\f040"}.fa-map-marker:before{content:"\f041"}.fa-adjust:before{content:"\f042"}.fa-tint:before{content:"\f043"}.fa-edit:before,.fa-pencil-square-o:before{content:"\f044"}.fa-share-square-o:before{content:"\f045"}.fa-check-square-o:before{content:"\f046"}.fa-arrows:before{content:"\f047"}.fa-step-backward:before{content:"\f048"}.fa-fast-backward:before{content:"\f049"}.fa-backward:before{content:"\f04a"}.fa-play:before{content:"\f04b"}.fa-pause:before{content:"\f04c"}.fa-stop:before{content:"\f04d"}.fa-forward:before{content:"\f04e"}.fa-fast-forward:before{content:"\f050"}.fa-step-forward:before{content:"\f051"}.fa-eject:before{content:"\f052"}.fa-chevron-left:before{content:"\f053"}.fa-chevron-right:before{content:"\f054"}.fa-plus-circle:before{content:"\f055"}.fa-minus-circle:before{content:"\f056"}.fa-times-circle:before{content:"\f057"}.fa-check-circle:before{content:"\f058"}.fa-question-circle:before{content:"\f059"}.fa-info-circle:before{content:"\f05a"}.fa-crosshairs:before{content:"\f05b"}.fa-times-circle-o:before{content:"\f05c"}.fa-check-circle-o:before{content:"\f05d"}.fa-ban:before{content:"\f05e"}.fa-arrow-left:before{content:"\f060"}.fa-arrow-right:before{content:"\f061"}.fa-arrow-up:before{content:"\f062"}.fa-arrow-down:before{content:"\f063"}.fa-mail-forward:before,.fa-share:before{content:"\f064"}.fa-expand:before{content:"\f065"}.fa-compress:before{content:"\f066"}.fa-plus:before{content:"\f067"}.fa-minus:before{content:"\f068"}.fa-asterisk:before{content:"\f069"}.fa-exclamation-circle:before{content:"\f06a"}.fa-gift:before{content:"\f06b"}.fa-leaf:before{content:"\f06c"}.fa-fire:before{content:"\f06d"}.fa-eye:before{content:"\f06e"}.fa-eye-slash:before{content:"\f070"}.fa-warning:before,.fa-exclamation-triangle:before{content:"\f071"}.fa-plane:before{content:"\f072"}.fa-calendar:before{content:"\f073"}.fa-random:before{content:"\f074"}.fa-comment:before{content:"\f075"}.fa-magnet:before{content:"\f076"}.fa-chevron-up:before{content:"\f077"}.fa-chevron-down:before{content:"\f078"}.fa-retweet:before{content:"\f079"}.fa-shopping-cart:before{content:"\f07a"}.fa-folder:before{content:"\f07b"}.fa-folder-open:before{content:"\f07c"}.fa-arrows-v:before{content:"\f07d"}.fa-arrows-h:before{content:"\f07e"}.fa-bar-chart-o:before,.fa-bar-chart:before{content:"\f080"}.fa-twitter-square:before{content:"\f081"}.fa-facebook-square:before{content:"\f082"}.fa-camera-retro:before{content:"\f083"}.fa-key:before{content:"\f084"}.fa-gears:before,.fa-cogs:before{content:"\f085"}.fa-comments:before{content:"\f086"}.fa-thumbs-o-up:before{content:"\f087"}.fa-thumbs-o-down:before{content:"\f088"}.fa-star-half:before{content:"\f089"}.fa-heart-o:before{content:"\f08a"}.fa-sign-out:before{content:"\f08b"}.fa-linkedin-square:before{content:"\f08c"}.fa-thumb-tack:before{content:"\f08d"}.fa-external-link:before{content:"\f08e"}.fa-sign-in:before{content:"\f090"}.fa-trophy:before{content:"\f091"}.fa-github-square:before{content:"\f092"}.fa-upload:before{content:"\f093"}.fa-lemon-o:before{content:"\f094"}.fa-phone:before{content:"\f095"}.fa-square-o:before{content:"\f096"}.fa-bookmark-o:before{content:"\f097"}.fa-phone-square:before{content:"\f098"}.fa-twitter:before{content:"\f099"}.fa-facebook-f:before,.fa-facebook:before{content:"\f09a"}.fa-github:before{content:"\f09b"}.fa-unlock:before{content:"\f09c"}.fa-credit-card:before{content:"\f09d"}.fa-feed:before,.fa-rss:before{content:"\f09e"}.fa-hdd-o:before{content:"\f0a0"}.fa-bullhorn:before{content:"\f0a1"}.fa-bell:before{content:"\f0f3"}.fa-certificate:before{content:"\f0a3"}.fa-hand-o-right:before{content:"\f0a4"}.fa-hand-o-left:before{content:"\f0a5"}.fa-hand-o-up:before{content:"\f0a6"}.fa-hand-o-down:before{content:"\f0a7"}.fa-arrow-circle-left:before{content:"\f0a8"}.fa-arrow-circle-right:before{content:"\f0a9"}.fa-arrow-circle-up:before{content:"\f0aa"}.fa-arrow-circle-down:before{content:"\f0ab"}.fa-globe:before{content:"\f0ac"}.fa-wrench:before{content:"\f0ad"}.fa-tasks:before{content:"\f0ae"}.fa-filter:before{content:"\f0b0"}.fa-briefcase:before{content:"\f0b1"}.fa-arrows-alt:before{content:"\f0b2"}.fa-group:before,.fa-users:before{content:"\f0c0"}.fa-chain:before,.fa-link:before{content:"\f0c1"}.fa-cloud:before{content:"\f0c2"}.fa-flask:before{content:"\f0c3"}.fa-cut:before,.fa-scissors:before{content:"\f0c4"}.fa-copy:before,.fa-files-o:before{content:"\f0c5"}.fa-paperclip:before{content:"\f0c6"}.fa-save:before,.fa-floppy-o:before{content:"\f0c7"}.fa-square:before{content:"\f0c8"}.fa-navicon:before,.fa-reorder:before,.fa-bars:before{content:"\f0c9"}.fa-list-ul:before{content:"\f0ca"}.fa-list-ol:before{content:"\f0cb"}.fa-strikethrough:before{content:"\f0cc"}.fa-underline:before{content:"\f0cd"}.fa-table:before{content:"\f0ce"}.fa-magic:before{content:"\f0d0"}.fa-truck:before{content:"\f0d1"}.fa-pinterest:before{content:"\f0d2"}.fa-pinterest-square:before{content:"\f0d3"}.fa-google-plus-square:before{content:"\f0d4"}.fa-google-plus:before{content:"\f0d5"}.fa-money:before{content:"\f0d6"}.fa-caret-down:before{content:"\f0d7"}.fa-caret-up:before{content:"\f0d8"}.fa-caret-left:before{content:"\f0d9"}.fa-caret-right:before{content:"\f0da"}.fa-columns:before{content:"\f0db"}.fa-unsorted:before,.fa-sort:before{content:"\f0dc"}.fa-sort-down:before,.fa-sort-desc:before{content:"\f0dd"}.fa-sort-up:before,.fa-sort-asc:before{content:"\f0de"}.fa-envelope:before{content:"\f0e0"}.fa-linkedin:before{content:"\f0e1"}.fa-rotate-left:before,.fa-undo:before{content:"\f0e2"}.fa-legal:before,.fa-gavel:before{content:"\f0e3"}.fa-dashboard:before,.fa-tachometer:before{content:"\f0e4"}.fa-comment-o:before{content:"\f0e5"}.fa-comments-o:before{content:"\f0e6"}.fa-flash:before,.fa-bolt:before{content:"\f0e7"}.fa-sitemap:before{content:"\f0e8"}.fa-umbrella:before{content:"\f0e9"}.fa-paste:before,.fa-clipboard:before{content:"\f0ea"}.fa-lightbulb-o:before{content:"\f0eb"}.fa-exchange:before{content:"\f0ec"}.fa-cloud-download:before{content:"\f0ed"}.fa-cloud-upload:before{content:"\f0ee"}.fa-user-md:before{content:"\f0f0"}.fa-stethoscope:before{content:"\f0f1"}.fa-suitcase:before{content:"\f0f2"}.fa-bell-o:before{content:"\f0a2"}.fa-coffee:before{content:"\f0f4"}.fa-cutlery:before{content:"\f0f5"}.fa-file-text-o:before{content:"\f0f6"}.fa-building-o:before{content:"\f0f7"}.fa-hospital-o:before{content:"\f0f8"}.fa-ambulance:before{content:"\f0f9"}.fa-medkit:before{content:"\f0fa"}.fa-fighter-jet:before{content:"\f0fb"}.fa-beer:before{content:"\f0fc"}.fa-h-square:before{content:"\f0fd"}.fa-plus-square:before{content:"\f0fe"}.fa-angle-double-left:before{content:"\f100"}.fa-angle-double-right:before{content:"\f101"}.fa-angle-double-up:before{content:"\f102"}.fa-angle-double-down:before{content:"\f103"}.fa-angle-left:before{content:"\f104"}.fa-angle-right:before{content:"\f105"}.fa-angle-up:before{content:"\f106"}.fa-angle-down:before{content:"\f107"}.fa-desktop:before{content:"\f108"}.fa-laptop:before{content:"\f109"}.fa-tablet:before{content:"\f10a"}.fa-mobile-phone:before,.fa-mobile:before{content:"\f10b"}.fa-circle-o:before{content:"\f10c"}.fa-quote-left:before{content:"\f10d"}.fa-quote-right:before{content:"\f10e"}.fa-spinner:before{content:"\f110"}.fa-circle:before{content:"\f111"}.fa-mail-reply:before,.fa-reply:before{content:"\f112"}.fa-github-alt:before{content:"\f113"}.fa-folder-o:before{content:"\f114"}.fa-folder-open-o:before{content:"\f115"}.fa-smile-o:before{content:"\f118"}.fa-frown-o:before{content:"\f119"}.fa-meh-o:before{content:"\f11a"}.fa-gamepad:before{content:"\f11b"}.fa-keyboard-o:before{content:"\f11c"}.fa-flag-o:before{content:"\f11d"}.fa-flag-checkered:before{content:"\f11e"}.fa-terminal:before{content:"\f120"}.fa-code:before{content:"\f121"}.fa-mail-reply-all:before,.fa-reply-all:before{content:"\f122"}.fa-star-half-empty:before,.fa-star-half-full:before,.fa-star-half-o:before{content:"\f123"}.fa-location-arrow:before{content:"\f124"}.fa-crop:before{content:"\f125"}.fa-code-fork:before{content:"\f126"}.fa-unlink:before,.fa-chain-broken:before{content:"\f127"}.fa-question:before{content:"\f128"}.fa-info:before{content:"\f129"}.fa-exclamation:before{content:"\f12a"}.fa-superscript:before{content:"\f12b"}.fa-subscript:before{content:"\f12c"}.fa-eraser:before{content:"\f12d"}.fa-puzzle-piece:before{content:"\f12e"}.fa-microphone:before{content:"\f130"}.fa-microphone-slash:before{content:"\f131"}.fa-shield:before{content:"\f132"}.fa-calendar-o:before{content:"\f133"}.fa-fire-extinguisher:before{content:"\f134"}.fa-rocket:before{content:"\f135"}.fa-maxcdn:before{content:"\f136"}.fa-chevron-circle-left:before{content:"\f137"}.fa-chevron-circle-right:before{content:"\f138"}.fa-chevron-circle-up:before{content:"\f139"}.fa-chevron-circle-down:before{content:"\f13a"}.fa-html5:before{content:"\f13b"}.fa-css3:before{content:"\f13c"}.fa-anchor:before{content:"\f13d"}.fa-unlock-alt:before{content:"\f13e"}.fa-bullseye:before{content:"\f140"}.fa-ellipsis-h:before{content:"\f141"}.fa-ellipsis-v:before{content:"\f142"}.fa-rss-square:before{content:"\f143"}.fa-play-circle:before{content:"\f144"}.fa-ticket:before{content:"\f145"}.fa-minus-square:before{content:"\f146"}.fa-minus-square-o:before{content:"\f147"}.fa-level-up:before{content:"\f148"}.fa-level-down:before{content:"\f149"}.fa-check-square:before{content:"\f14a"}.fa-pencil-square:before{content:"\f14b"}.fa-external-link-square:before{content:"\f14c"}.fa-share-square:before{content:"\f14d"}.fa-compass:before{content:"\f14e"}.fa-toggle-down:before,.fa-caret-square-o-down:before{content:"\f150"}.fa-toggle-up:before,.fa-caret-square-o-up:before{content:"\f151"}.fa-toggle-right:before,.fa-caret-square-o-right:before{content:"\f152"}.fa-euro:before,.fa-eur:before{content:"\f153"}.fa-gbp:before{content:"\f154"}.fa-dollar:before,.fa-usd:before{content:"\f155"}.fa-rupee:before,.fa-inr:before{content:"\f156"}.fa-cny:before,.fa-rmb:before,.fa-yen:before,.fa-jpy:before{content:"\f157"}.fa-ruble:before,.fa-rouble:before,.fa-rub:before{content:"\f158"}.fa-won:before,.fa-krw:before{content:"\f159"}.fa-bitcoin:before,.fa-btc:before{content:"\f15a"}.fa-file:before{content:"\f15b"}.fa-file-text:before{content:"\f15c"}.fa-sort-alpha-asc:before{content:"\f15d"}.fa-sort-alpha-desc:before{content:"\f15e"}.fa-sort-amount-asc:before{content:"\f160"}.fa-sort-amount-desc:before{content:"\f161"}.fa-sort-numeric-asc:before{content:"\f162"}.fa-sort-numeric-desc:before{content:"\f163"}.fa-thumbs-up:before{content:"\f164"}.fa-thumbs-down:before{content:"\f165"}.fa-youtube-square:before{content:"\f166"}.fa-youtube:before{content:"\f167"}.fa-xing:before{content:"\f168"}.fa-xing-square:before{content:"\f169"}.fa-youtube-play:before{content:"\f16a"}.fa-dropbox:before{content:"\f16b"}.fa-stack-overflow:before{content:"\f16c"}.fa-instagram:before{content:"\f16d"}.fa-flickr:before{content:"\f16e"}.fa-adn:before{content:"\f170"}.fa-bitbucket:before{content:"\f171"}.fa-bitbucket-square:before{content:"\f172"}.fa-tumblr:before{content:"\f173"}.fa-tumblr-square:before{content:"\f174"}.fa-long-arrow-down:before{content:"\f175"}.fa-long-arrow-up:before{content:"\f176"}.fa-long-arrow-left:before{content:"\f177"}.fa-long-arrow-right:before{content:"\f178"}.fa-apple:before{content:"\f179"}.fa-windows:before{content:"\f17a"}.fa-android:before{content:"\f17b"}.fa-linux:before{content:"\f17c"}.fa-dribbble:before{content:"\f17d"}.fa-skype:before{content:"\f17e"}.fa-foursquare:before{content:"\f180"}.fa-trello:before{content:"\f181"}.fa-female:before{content:"\f182"}.fa-male:before{content:"\f183"}.fa-gittip:before,.fa-gratipay:before{content:"\f184"}.fa-sun-o:before{content:"\f185"}.fa-moon-o:before{content:"\f186"}.fa-archive:before{content:"\f187"}.fa-bug:before{content:"\f188"}.fa-vk:before{content:"\f189"}.fa-weibo:before{content:"\f18a"}.fa-renren:before{content:"\f18b"}.fa-pagelines:before{content:"\f18c"}.fa-stack-exchange:before{content:"\f18d"}.fa-arrow-circle-o-right:before{content:"\f18e"}.fa-arrow-circle-o-left:before{content:"\f190"}.fa-toggle-left:before,.fa-caret-square-o-left:before{content:"\f191"}.fa-dot-circle-o:before{content:"\f192"}.fa-wheelchair:before{content:"\f193"}.fa-vimeo-square:before{content:"\f194"}.fa-turkish-lira:before,.fa-try:before{content:"\f195"}.fa-plus-square-o:before{content:"\f196"}.fa-space-shuttle:before{content:"\f197"}.fa-slack:before{content:"\f198"}.fa-envelope-square:before{content:"\f199"}.fa-wordpress:before{content:"\f19a"}.fa-openid:before{content:"\f19b"}.fa-institution:before,.fa-bank:before,.fa-university:before{content:"\f19c"}.fa-mortar-board:before,.fa-graduation-cap:before{content:"\f19d"}.fa-yahoo:before{content:"\f19e"}.fa-google:before{content:"\f1a0"}.fa-reddit:before{content:"\f1a1"}.fa-reddit-square:before{content:"\f1a2"}.fa-stumbleupon-circle:before{content:"\f1a3"}.fa-stumbleupon:before{content:"\f1a4"}.fa-delicious:before{content:"\f1a5"}.fa-digg:before{content:"\f1a6"}.fa-pied-piper:before{content:"\f1a7"}.fa-pied-piper-alt:before{content:"\f1a8"}.fa-drupal:before{content:"\f1a9"}.fa-joomla:before{content:"\f1aa"}.fa-language:before{content:"\f1ab"}.fa-fax:before{content:"\f1ac"}.fa-building:before{content:"\f1ad"}.fa-child:before{content:"\f1ae"}.fa-paw:before{content:"\f1b0"}.fa-spoon:before{content:"\f1b1"}.fa-cube:before{content:"\f1b2"}.fa-cubes:before{content:"\f1b3"}.fa-behance:before{content:"\f1b4"}.fa-behance-square:before{content:"\f1b5"}.fa-steam:before{content:"\f1b6"}.fa-steam-square:before{content:"\f1b7"}.fa-recycle:before{content:"\f1b8"}.fa-automobile:before,.fa-car:before{content:"\f1b9"}.fa-cab:before,.fa-taxi:before{content:"\f1ba"}.fa-tree:before{content:"\f1bb"}.fa-spotify:before{content:"\f1bc"}.fa-deviantart:before{content:"\f1bd"}.fa-soundcloud:before{content:"\f1be"}.fa-database:before{content:"\f1c0"}.fa-file-pdf-o:before{content:"\f1c1"}.fa-file-word-o:before{content:"\f1c2"}.fa-file-excel-o:before{content:"\f1c3"}.fa-file-powerpoint-o:before{content:"\f1c4"}.fa-file-photo-o:before,.fa-file-picture-o:before,.fa-file-image-o:before{content:"\f1c5"}.fa-file-zip-o:before,.fa-file-archive-o:before{content:"\f1c6"}.fa-file-sound-o:before,.fa-file-audio-o:before{content:"\f1c7"}.fa-file-movie-o:before,.fa-file-video-o:before{content:"\f1c8"}.fa-file-code-o:before{content:"\f1c9"}.fa-vine:before{content:"\f1ca"}.fa-codepen:before{content:"\f1cb"}.fa-jsfiddle:before{content:"\f1cc"}.fa-life-bouy:before,.fa-life-buoy:before,.fa-life-saver:before,.fa-support:before,.fa-life-ring:before{content:"\f1cd"}.fa-circle-o-notch:before{content:"\f1ce"}.fa-ra:before,.fa-rebel:before{content:"\f1d0"}.fa-ge:before,.fa-empire:before{content:"\f1d1"}.fa-git-square:before{content:"\f1d2"}.fa-git:before{content:"\f1d3"}.fa-y-combinator-square:before,.fa-yc-square:before,.fa-hacker-news:before{content:"\f1d4"}.fa-tencent-weibo:before{content:"\f1d5"}.fa-qq:before{content:"\f1d6"}.fa-wechat:before,.fa-weixin:before{content:"\f1d7"}.fa-send:before,.fa-paper-plane:before{content:"\f1d8"}.fa-send-o:before,.fa-paper-plane-o:before{content:"\f1d9"}.fa-history:before{content:"\f1da"}.fa-circle-thin:before{content:"\f1db"}.fa-header:before{content:"\f1dc"}.fa-paragraph:before{content:"\f1dd"}.fa-sliders:before{content:"\f1de"}.fa-share-alt:before{content:"\f1e0"}.fa-share-alt-square:before{content:"\f1e1"}.fa-bomb:before{content:"\f1e2"}.fa-soccer-ball-o:before,.fa-futbol-o:before{content:"\f1e3"}.fa-tty:before{content:"\f1e4"}.fa-binoculars:before{content:"\f1e5"}.fa-plug:before{content:"\f1e6"}.fa-slideshare:before{content:"\f1e7"}.fa-twitch:before{content:"\f1e8"}.fa-yelp:before{content:"\f1e9"}.fa-newspaper-o:before{content:"\f1ea"}.fa-wifi:before{content:"\f1eb"}.fa-calculator:before{content:"\f1ec"}.fa-paypal:before{content:"\f1ed"}.fa-google-wallet:before{content:"\f1ee"}.fa-cc-visa:before{content:"\f1f0"}.fa-cc-mastercard:before{content:"\f1f1"}.fa-cc-discover:before{content:"\f1f2"}.fa-cc-amex:before{content:"\f1f3"}.fa-cc-paypal:before{content:"\f1f4"}.fa-cc-stripe:before{content:"\f1f5"}.fa-bell-slash:before{content:"\f1f6"}.fa-bell-slash-o:before{content:"\f1f7"}.fa-trash:before{content:"\f1f8"}.fa-copyright:before{content:"\f1f9"}.fa-at:before{content:"\f1fa"}.fa-eyedropper:before{content:"\f1fb"}.fa-paint-brush:before{content:"\f1fc"}.fa-birthday-cake:before{content:"\f1fd"}.fa-area-chart:before{content:"\f1fe"}.fa-pie-chart:before{content:"\f200"}.fa-line-chart:before{content:"\f201"}.fa-lastfm:before{content:"\f202"}.fa-lastfm-square:before{content:"\f203"}.fa-toggle-off:before{content:"\f204"}.fa-toggle-on:before{content:"\f205"}.fa-bicycle:before{content:"\f206"}.fa-bus:before{content:"\f207"}.fa-ioxhost:before{content:"\f208"}.fa-angellist:before{content:"\f209"}.fa-cc:before{content:"\f20a"}.fa-shekel:before,.fa-sheqel:before,.fa-ils:before{content:"\f20b"}.fa-meanpath:before{content:"\f20c"}.fa-buysellads:before{content:"\f20d"}.fa-connectdevelop:before{content:"\f20e"}.fa-dashcube:before{content:"\f210"}.fa-forumbee:before{content:"\f211"}.fa-leanpub:before{content:"\f212"}.fa-sellsy:before{content:"\f213"}.fa-shirtsinbulk:before{content:"\f214"}.fa-simplybuilt:before{content:"\f215"}.fa-skyatlas:before{content:"\f216"}.fa-cart-plus:before{content:"\f217"}.fa-cart-arrow-down:before{content:"\f218"}.fa-diamond:before{content:"\f219"}.fa-ship:before{content:"\f21a"}.fa-user-secret:before{content:"\f21b"}.fa-motorcycle:before{content:"\f21c"}.fa-street-view:before{content:"\f21d"}.fa-heartbeat:before{content:"\f21e"}.fa-venus:before{content:"\f221"}.fa-mars:before{content:"\f222"}.fa-mercury:before{content:"\f223"}.fa-intersex:before,.fa-transgender:before{content:"\f224"}.fa-transgender-alt:before{content:"\f225"}.fa-venus-double:before{content:"\f226"}.fa-mars-double:before{content:"\f227"}.fa-venus-mars:before{content:"\f228"}.fa-mars-stroke:before{content:"\f229"}.fa-mars-stroke-v:before{content:"\f22a"}.fa-mars-stroke-h:before{content:"\f22b"}.fa-neuter:before{content:"\f22c"}.fa-genderless:before{content:"\f22d"}.fa-facebook-official:before{content:"\f230"}.fa-pinterest-p:before{content:"\f231"}.fa-whatsapp:before{content:"\f232"}.fa-server:before{content:"\f233"}.fa-user-plus:before{content:"\f234"}.fa-user-times:before{content:"\f235"}.fa-hotel:before,.fa-bed:before{content:"\f236"}.fa-viacoin:before{content:"\f237"}.fa-train:before{content:"\f238"}.fa-subway:before{content:"\f239"}.fa-medium:before{content:"\f23a"}.fa-yc:before,.fa-y-combinator:before{content:"\f23b"}.fa-optin-monster:before{content:"\f23c"}.fa-opencart:before{content:"\f23d"}.fa-expeditedssl:before{content:"\f23e"}.fa-battery-4:before,.fa-battery-full:before{content:"\f240"}.fa-battery-3:before,.fa-battery-three-quarters:before{content:"\f241"}.fa-battery-2:before,.fa-battery-half:before{content:"\f242"}.fa-battery-1:before,.fa-battery-quarter:before{content:"\f243"}.fa-battery-0:before,.fa-battery-empty:before{content:"\f244"}.fa-mouse-pointer:before{content:"\f245"}.fa-i-cursor:before{content:"\f246"}.fa-object-group:before{content:"\f247"}.fa-object-ungroup:before{content:"\f248"}.fa-sticky-note:before{content:"\f249"}.fa-sticky-note-o:before{content:"\f24a"}.fa-cc-jcb:before{content:"\f24b"}.fa-cc-diners-club:before{content:"\f24c"}.fa-clone:before{content:"\f24d"}.fa-balance-scale:before{content:"\f24e"}.fa-hourglass-o:before{content:"\f250"}.fa-hourglass-1:before,.fa-hourglass-start:before{content:"\f251"}.fa-hourglass-2:before,.fa-hourglass-half:before{content:"\f252"}.fa-hourglass-3:before,.fa-hourglass-end:before{content:"\f253"}.fa-hourglass:before{content:"\f254"}.fa-hand-grab-o:before,.fa-hand-rock-o:before{content:"\f255"}.fa-hand-stop-o:before,.fa-hand-paper-o:before{content:"\f256"}.fa-hand-scissors-o:before{content:"\f257"}.fa-hand-lizard-o:before{content:"\f258"}.fa-hand-spock-o:before{content:"\f259"}.fa-hand-pointer-o:before{content:"\f25a"}.fa-hand-peace-o:before{content:"\f25b"}.fa-trademark:before{content:"\f25c"}.fa-registered:before{content:"\f25d"}.fa-creative-commons:before{content:"\f25e"}.fa-gg:before{content:"\f260"}.fa-gg-circle:before{content:"\f261"}.fa-tripadvisor:before{content:"\f262"}.fa-odnoklassniki:before{content:"\f263"}.fa-odnoklassniki-square:before{content:"\f264"}.fa-get-pocket:before{content:"\f265"}.fa-wikipedia-w:before{content:"\f266"}.fa-safari:before{content:"\f267"}.fa-chrome:before{content:"\f268"}.fa-firefox:before{content:"\f269"}.fa-opera:before{content:"\f26a"}.fa-internet-explorer:before{content:"\f26b"}.fa-tv:before,.fa-television:before{content:"\f26c"}.fa-contao:before{content:"\f26d"}.fa-500px:before{content:"\f26e"}.fa-amazon:before{content:"\f270"}.fa-calendar-plus-o:before{content:"\f271"}.fa-calendar-minus-o:before{content:"\f272"}.fa-calendar-times-o:before{content:"\f273"}.fa-calendar-check-o:before{content:"\f274"}.fa-industry:before{content:"\f275"}.fa-map-pin:before{content:"\f276"}.fa-map-signs:before{content:"\f277"}.fa-map-o:before{content:"\f278"}.fa-map:before{content:"\f279"}.fa-commenting:before{content:"\f27a"}.fa-commenting-o:before{content:"\f27b"}.fa-houzz:before{content:"\f27c"}.fa-vimeo:before{content:"\f27d"}.fa-black-tie:before{content:"\f27e"}.fa-fonticons:before{content:"\f280"}
.lSSlideOuter{overflow:hidden;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.lightSlider:before,.lightSlider:after{content:" ";display:table}.lightSlider{overflow:hidden;margin:0}.lSSlideWrapper{max-width:100%;overflow:hidden;position:relative}.lSSlideWrapper > .lightSlider:after{clear:both}.lSSlideWrapper .lSSlide{-webkit-transform:translate(0px,0px);-ms-transform:translate(0px,0px);transform:translate(0px,0px);-webkit-transition:all 1s;-webkit-transition-property:-webkit-transform,height;-moz-transition-property:-moz-transform,height;transition-property:transform,height;-webkit-transition-duration:inherit!important;transition-duration:inherit!important;-webkit-transition-timing-function:inherit!important;transition-timing-function:inherit!important}.lSSlideWrapper .lSFade{position:relative}.lSSlideWrapper .lSFade > *{position:absolute!important;top:0;left:0;z-index:9;margin-right:0;width:100%}.lSSlideWrapper.usingCss .lSFade > *{opacity:0;-webkit-transition-delay:0;transition-delay:0;-webkit-transition-duration:inherit!important;transition-duration:inherit!important;-webkit-transition-property:opacity;transition-property:opacity;-webkit-transition-timing-function:inherit!important;transition-timing-function:inherit!important}.lSSlideWrapper .lSFade > .active{z-index:10}.lSSlideWrapper.usingCss .lSFade > .active{opacity:1}.lSSlideOuter .lSPager.lSpg{margin:10px 0 0;padding:0;text-align:center}.lSSlideOuter .lSPager.lSpg > li{margin:20px 0;cursor:pointer;display:inline-block;padding:0 5px}.lSSlideOuter .lSPager.lSpg > li a{background-color:#222;border-radius:30px;display:inline-block;height:8px;overflow:hidden;text-indent:-999em;width:8px;position:relative;z-index:99;-webkit-transition:all .5s linear 0;transition:all .5s linear 0}.lSSlideOuter .lSPager.lSpg > li:hover a,.lSSlideOuter .lSPager.lSpg > li.active a{background-color:#777}.lSSlideOuter .media{opacity:.8}.lSSlideOuter .media.active{opacity:1}.lSSlideOuter .lSPager.lSGallery{list-style:none outside none;padding-left:0;margin:0;overflow:hidden;transform:translate3d(0px,0px,0px);-moz-transform:translate3d(0px,0px,0px);-ms-transform:translate3d(0px,0px,0px);-webkit-transform:translate3d(0px,0px,0px);-o-transform:translate3d(0px,0px,0px);-webkit-transition-property:-webkit-transform;-moz-transition-property:-moz-transform;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.lSSlideOuter .lSPager.lSGallery li{overflow:hidden;-webkit-transition:border-radius .12s linear 0 .35s linear 0;transition:border-radius .12s linear 0 .35s linear 0}.lSSlideOuter .lSPager.lSGallery li.active,.lSSlideOuter .lSPager.lSGallery li:hover{border-radius:5px}.lSSlideOuter .lSPager.lSGallery img{display:block;height:auto;max-width:100%}.lSSlideOuter .lSPager.lSGallery:before,.lSSlideOuter .lSPager.lSGallery:after{content:" ";display:table}.lSSlideOuter .lSPager.lSGallery:after{clear:both}.lSAction > a{width:35px;display:block;top:50%;height:66px;background-image:url(imagenes/arrow-slides.png);cursor:pointer;position:absolute;z-index:99;margin-top:0;opacity:.5;-webkit-transition:opacity .35s linear 0;transition:opacity .35s linear 0}.lSAction > a:hover{opacity:1}.lSAction > .lSPrev{background-position:0 0;left:0}.lSAction > .lSNext{background-position:-35px 0;right:0}.lSAction > a.disabled{pointer-events:none}.cS-hidden{height:1px;opacity:0;filter:alpha(opacity=0);overflow:hidden}.lSSlideOuter.vertical{position:relative}.lSSlideOuter.vertical.noPager{padding-right:0!important}.lSSlideOuter.vertical .lSGallery{position:absolute!important;right:0;top:0}.lSSlideOuter.vertical .lightSlider > *{width:100%!important;max-width:none!important}.lSSlideOuter.vertical .lSAction > a{left:50%;margin-left:-14px;margin-top:0}.lSSlideOuter.vertical .lSAction > .lSNext{background-position:31px -31px;bottom:10px;top:auto}.lSSlideOuter.vertical .lSAction > .lSPrev{background-position:0 -31px;bottom:auto;top:10px}.lSSlideOuter.lSrtl{direction:rtl}.lSSlideOuter .lightSlider,.lSSlideOuter .lSPager{padding-left:0;list-style:none outside none}.lSSlideOuter.lSrtl .lightSlider,.lSSlideOuter.lSrtl .lSPager{padding-right:0}.lSSlideOuter .lightSlider > *,.lSSlideOuter .lSGallery li{float:left}.lSSlideOuter.lSrtl .lightSlider > *,.lSSlideOuter.lSrtl .lSGallery li{float:right!important}@-webkit-keyframes rightEnd{0%{left:0}50%{left:-15px}100%{left:0}}@keyframes rightEnd{0%{left:0}50%{left:-15px}100%{left:0}}@-webkit-keyframes topEnd{0%{top:0}50%{top:-15px}100%{top:0}}@keyframes topEnd{0%{top:0}50%{top:-15px}100%{top:0}}@-webkit-keyframes leftEnd{0%{left:0}50%{left:15px}100%{left:0}}@keyframes leftEnd{0%{left:0}50%{left:15px}100%{left:0}}@-webkit-keyframes bottomEnd{0%{bottom:0}50%{bottom:-15px}100%{bottom:0}}@keyframes bottomEnd{0%{bottom:0}50%{bottom:-15px}100%{bottom:0}}.lSSlideOuter .rightEnd{-webkit-animation:rightEnd .3s;animation:rightEnd .3s;position:relative}.lSSlideOuter .leftEnd{-webkit-animation:leftEnd .3s;animation:leftEnd .3s;position:relative}.lSSlideOuter.vertical .rightEnd{-webkit-animation:topEnd .3s;animation:topEnd .3s;position:relative}.lSSlideOuter.vertical .leftEnd{-webkit-animation:bottomEnd .3s;animation:bottomEnd .3s;position:relative}.lSSlideOuter.lSrtl .rightEnd{-webkit-animation:leftEnd .3s;animation:leftEnd .3s;position:relative}.lSSlideOuter.lSrtl .leftEnd{-webkit-animation:rightEnd .3s;animation:rightEnd .3s;position:relative}.lightSlider.lsGrab > *{cursor:-webkit-grab;cursor:-moz-grab;cursor:-o-grab;cursor:-ms-grab;cursor:grab}.lightSlider.lsGrabbing > *{cursor:move;cursor:-webkit-grabbing;cursor:-moz-grabbing;cursor:-o-grabbing;cursor:-ms-grabbing;cursor:grabbing}   
</style>


<? echo $analytics;?>



	<?
	//FORMULARIO
    $nombre=saneaVar($_POST['nombre']);
    $telefono=saneaVar($_POST['telefono']);
    $email=saneaVar($_POST['email']);
    $entrada=saneaVar($_POST['entrada']);

    $salida=saneaVar($_POST['salida']);
    $habitacion=saneaVar($_POST['habitacion']);


    if(isset($_POST['web2'])){

        $web2 = $_POST['web2'];

    } 

    if(isset($_POST['mail2'])){

        $mail2 = $_POST['mail2'];

    } 
        
    if ($mail2 == '' && $web2 == 'http://') { 

        if (strlen($nombre)>0 AND strlen($telefono)>0 AND strlen($email)>0 AND strlen($entrada)>0 AND strlen($salida)>0) {
    	
    		$subject = "Landingpage - ".$empresa_web;
    				
    		$message .= "<b>DATOS DEL CLIENTE</b><br>";
    		
    		$message .= "Nombre: ".utf8_decode($nombre)."<br>";
    		$message .= "Telefono: ".$telefono."<br>";
    		$message .= "Email: ".$email."<br>";
    		$message .= "Entrada: ".$entrada."<br>";
    		$message .= "Salida: ".$salida."<br>";
    		$message .= "Comodidad: ".utf8_decode($habitacion)."<br>";
    	
    		$headers  = "MIME-Version: 1.0\r\n";
    		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			$headers .= "To: ".$empresa_web." <".$email_web.">\r\n";
			$headers .= "From: ".$empresa_web." <".$email_web.">" . "\r\n";

            @mail($to, $subject, $message, $headers);

    		$checkin=explode('/',$entrada);
        	$checkin=$checkin[2].'-'.$checkin[1].'-'.$checkin[0];

    		$checkout=explode('/',$salida);
        	$checkout=$checkout[2].'-'.$checkout[1].'-'.$checkout[0];

        	@header("location:?gracias&checkin=$checkin&checkout=$checkout");
            
        }
    }
?>


</head>
<body>


<a href="javascript:;" class="whatsapp">
    <img src="imagenes/icon-whatsapp.png" alt="Whatsapp" width="60">    
</a>

<div id="btn-actions">
    
    <ul>
        <li><a href="tel:<? echo $movil_web;?>" class="telefono"><i class="fa fa-phone"></i> Llamar</a></li>
        <li><a href="javascript:;" class="whatsapp"><i class="fa fa-whatsapp"></i> Whatsapp</a></li>
    </ul>
    
</div>  


<div id="m1">

    <div class="b1">
    
        <div class="d1">
        
            <a href="<?php echo $URLbase;?>" title="<? echo $empresa_web;?>">
                <img src="imagenes/logo.png?v=<? echo $version;?>" alt="<? echo $empresa_web;?>" />
            </a>
        
        </div>

        
        <div class="d2">
        
            <div class="t2">
            	<a href="#contacto" class="s1">¡Reservá ahora!</a>
            </div>
            
            <div class="t1">
            	<i class="fa fa-phone"></i><a href="tel:<? echo $movil_web;?>"><? echo $telefono_web;?></a>
            </div>

            <div class="t1 desk">
                <i class="fa fa-whatsapp"></i><a href="https://api.whatsapp.com/send?phone=<? echo $whatsapp_movil_web;?>"><? echo $whatsapp_web;?></a>
            </div>            
            
        </div> 
        
        
    
    <div class="clear"></div>
    </div>
        
<div class="clear"></div>
</div>


<? if (isset($_GET['gracias'])){?>

<? echo $conversion;?>
<div id="notification"><div class="info">Hemos recibido tu solicitud. A la brevedad te responderemos, Muchas gracias!</div></div>
<?php @header('Refresh:1; URL=https://hotels.cloudbeds.com/es/reservas/vGYC4D?#checkin='.$_GET['checkin'].'&checkout='.$_GET['checkout']);?>

<? } ?>

<div id="m3">
	
    <div class="mask_b1"></div>
    <div class="mask_b2"></div>
    

    <div class="b1">
    
    	<div class="d2">

        	<h1>Destinar</h1>
            <h2>Apart Hotel Cariló</h2>
            <p><i class="fa fa-tag"></i> Promoción 30% OFF ¡Sólo por Hoy!</p>
			
        <div class="clear"></div>
        </div>
 
 


        <div class="d1">

            
            <form id="contacto" name="contacto" method="post" action="">

                <div style="display:none;">
                    <input type="text" id="mail2" name="mail2" />
                    <input type="text" id="web2" name="web2" value="http://" />
                </div>
            	
                <fieldset>
                
                	<label>¡Oferta, sólo por hoy!</label>
               
                </fieldset>
            
            	<fieldset>

					<label>¿Dónde quieres recibir la reserva?</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" autocomplete="off"/>
                    <input type="tel" id="telefono" name="telefono" placeholder="Teléfono/Celular" autocomplete="off"/>
                    <input type="email" id="email" name="email" placeholder="Email" autocomplete="off"/>
                    
                </fieldset>
                
                
                <fieldset>
                
	                <label>¿En qué fecha?</label>
                    
                    <input type="text" id="entrada" name="entrada" placeholder="Entrada" autocomplete="off"/>            
                    <input type="text" id="salida" name="salida" placeholder="Salida" autocomplete="off"/>

				</fieldset>

			
	             <fieldset>
		
	                <fieldset>
	                
		                <label for="habitacion"> <input type="radio" id="habitacion" name="habitacion" checked="checked" value="Habitación 2 personas">Habitación 2 personas</label>
	                    
					</fieldset>

	                <fieldset>
	                
	                    <label for="apart"> <input type="radio" id="apart" name="habitacion" value="Apart hasta 4 personas">Apart hasta 4 personas</label>
	                    
	                    
	                </fieldset>
	                
	                
	        	</fieldset>

        
                <fieldset>
                
	                <button type="button" onclick="valida_contacto()"><i class="fa fa-envelope-o"></i> Reservá Ahora</button>
                    
                </fieldset>
                


            </form>
            
            
     
        <div class="clear"></div>
        </div>
    
    

    <div class="clear"></div>
    </div>
        

<div class="clear"></div>
</div>


<div id="m4">

    <div class="b1">
        
        <h1>a 100 metros del Mar!</h1>
        <p></p>
    
        <div class="item">

        <ul class="content3-slider">       
                  
       
            <li>

                <div class="d1">

                    <div class="img">
                        <img src="imagenes/wifi.jpg?v=<? echo $version;?>">
                    </div>  

                    <div class="icon">
                        <img src="imagenes/01.png?v=<? echo $version;?>" alt="Wifi Gratis">
                    </div>

                    <div class="title">Wifi Gratis</div>

                </div>

            </li> 

            <li>

                <div class="d1">

                    <div class="img">
                        <img src="imagenes/desayuno.jpg?v=<? echo $version;?>">
                    </div>                  
                
                    <div class="icon">
                        <img src="imagenes/02.png?v=<? echo $version;?>" alt="Desayuno Incluido">
                    </div>

                    <div class="title">Desayuno Incluido</div>

                </div>
            
            </li>   


            <li>

                <div class="d1">
                    <div class="img">
                        <img src="imagenes/salas-de-juegos.jpg?v=<? echo $version;?>">
                    </div>                  
                
                    <div class="icon">
                        <img src="imagenes/03.png?v=<? echo $version;?>" alt="Salas de juegos">
                    </div>
                
                    <div class="title">Salas de juegos</div>

                </div>
            
            </li> 
  
            <li>

                <div class="d1">
                    <div class="img">
                        <img src="imagenes/piscina.jpg?v=<? echo $version;?>">
                    </div>                  
                
                    <div class="icon">
                        <img src="imagenes/04.png?v=<? echo $version;?>" alt="Piscina">
                    </div>
                
                    <div class="title">Exterior y piscina interior climatizada</div>

                </div>
            
            </li>

            <li>

                <div class="d1">

                    <div class="img">
                        <img src="imagenes/aire-acondicionado.jpg?v=<? echo $version;?>">
                    </div>                  
                
                    <div class="icon">
                        <img src="imagenes/05.png?v=<? echo $version;?>" alt="Aire acondicionado">
                    </div>
                
                    <div class="title">Aire acondicionado</div>

                </div>
            
            </li>            


             

        </ul>

        </div>


    <div class="clear"></div>
    </div>


<div class="clear"></div>
</div>



<div id="m5">

	<div class="b1">
        
        <h2>Excelente Hotel en Cariló. La mejor ubicación</h2> 
        <p>Habitaciones amplias y de gran tamaño, buen gusto y excelente funcionabilidad.</p>
        
    <div class="clear"></div>
    </div>

<!--
    <div class="b3 desk">
    	
		<style type="text/css">

		.fondo {display: inline-block;}

		.fondo td {
		     width: 100px;
		     float: left;
		     text-align: center;
		     color: #868686;
		     font-size: 'Roboto';
		}
		 .fondo td span {
		     width: 100%;
		     float: left;
		     display: block;
		}
		 .fondo td span.nomDay {
		     width: 98px;
		     font-size: 10px;
		     font-weight: 700;
		     text-transform: uppercase;
		     margin: 3px 1px 6px 1px;
		     text-align: center;
		     text-overflow:ellipsis;
		     white-space:nowrap;
		     overflow:hidden;
		}
		 .fondo td span.simbDay {
		     height: 60px;
		     margin: 0 0 3px 0;
		}
		 .fondo td span.simbDay21 img {
		     margin-top: 11px;
		}
		 .fondo td span.temps span {
		     width: 49%;
		     float: left;
		     font-size: 15px;
		     font-weight: 500;
		     margin-bottom: 5px;
		}
		 .fondo td span.temps span.TMax {
		     text-align: right;
		     margin-right: 1%;
		     color: #EB1924;
		}
		 .fondo td span.temps span.TMin {
		     text-align: left;
		     margin-left: 1%;
		     color: #0076BA;
		}
		 .fondo td span.simbWind {
		     height: 28px;
		     display: none;
		}
		 .fondo td span.numWind {
		     font-size: 11px;
		     font-weight: 500;
		     margin-top: 3px;
		     display: none;
		}
		 .fondo td span.nomData{display: none}
		 .fondo td span.nomData .tipo {
		     width: 65px;
		     float: left;
		     font-size: 10px;
		     font-weight: 500;
		     text-align: right;
		     padding-top: 1px;
		}
		 .fondo td span.nomData .data {
		     width: 30px;
		     float: left;
		     font-size: 11px;
		     font-weight: 700 
		}

		</style>

		<?

		$url = file_get_contents('https://www.meteored.com.ar/getwid/a662a0989d8df6c1f856f166caff9a56');
		preg_match_all ("/<table class=\"fondo\">([^`]*?)<\/table>/", $url, $tiempo4);
		print_r($tiempo4[0][0]);
		?>    	

    
    <div class="clear"></div>	
    </div>
-->






    <div class="b2">

        <div class="item">

    		<ul id="content2-slider">

            	<li><div class="img"><img src="imagenes/1.jpg?v=<? echo $version;?>"/></div></li>
                <li><div class="img"><img src="imagenes/3.jpg?v=<? echo $version;?>"/></div></li>
                <li><div class="img"><img src="imagenes/4.jpg?v=<? echo $version;?>"/></div></li>
                <li><div class="img"><img src="imagenes/5.jpg?v=<? echo $version;?>"/></div></li>
                <li><div class="img"><img src="imagenes/6.jpg?v=<? echo $version;?>"/></div></li>

            </ul>

        </div>

    <div class="clear"></div>
    </div>


    
	

<div class="clear"></div>
</div>



<div id="m6">

	<div class="b1">
        
        <h2>Destinar, un lugar soñado</h2> 
        <p>Disfrutá de la Playa, El bosque y el Mar en un solo lugar. Escapate a Carilo</p>
        
        <div class="item">
        
            <ul id="content-slider">
        
                <li class="d1 activo">
                
                    <div class="avatar">
                    
                        <div class="img">
                            <img src="imagenes/destinar-carilo-hotel-buenos-aires-carilo.png" alt="Destinar Hotel Buenos Aires Cariló" />
                        </div>
                        
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">“Excelente (9.2/10)”</div>
                        <div class="description">¡Somos #1<br />en Clientes Satisfechos!</div>
                        
                    </div>
    
                </li>   
            
    
                <li class="d1">
                
                    <div class="avatar">
                    
                        <div class="img">
                            <img src="https://media-cdn.tripadvisor.com/media/photo-s/01/2e/70/82/avatar003.jpg" alt="Hotel en Buenos Aires Cariló" />
                        </div>
                        
                        <span>Rodolfo T</span>
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">“Excelente Atención”</div>
                        <div class="description">Un lugar hermoso para descansar. La habitación amplia con todos sus detalles. me toco con hidromasajes. El desayuno super variado.</div>
                        
                    
                    </div>
    
                </li>   
    
                <li class="d1">
                
                    <div class="avatar">
                    
                        <div class="img">
                            <img src="https://media-cdn.tripadvisor.com/media/photo-s/01/2a/fd/97/avatar.jpg" alt="Hotel en Cariló" />
                        </div>
                        
                        <span>M Celeste T</span>
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">“Muy buena experiencia”</div>
                        <div class="description">El lugar ideal para descansar. La piscina climatizada con hidromasaje esta muy buena. El desayuno estuvo exquisto. Y el servicio es muy bueno.</div>
                        
                    
                    </div>
    
                </li>   
    
                <li class="d1">
                
                    <div class="avatar">
                    
                        <div class="img">
                            <img src="https://media-cdn.tripadvisor.com/media/photo-s/01/2e/70/7a/avatar061.jpg" alt="Hotel en Buenos Aires Cariló" />
                        </div>
                        
                        <span>Vanesa78</span>
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">“Increible, como siempre”</div>
                        <div class="description">Visite por segunda vez este hotel y lo unico que tengo para decir son maravillas. El staff como siempre muy atento y servicial.</div>
                        
                    
                    </div>
    
                </li>   
    
                <li class="d1">
                
                    <div class="avatar">
                    
                        <div class="img">
                            <img src="https://media-cdn.tripadvisor.com/media/photo-o/06/56/93/26/facebook-avatar.jpg" alt="Hotel en Cariló" />
                        </div>
                        
                        <span>Maria S</span>
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">"Vacaciones Verano 2018"</div>
                        <div class="description">Muy agradecidos al Hotel Destinar por su gran atención y confort en todos los espacios. Entretenimiento para los niños completo al 100 % (los niños muy contentos)</div>
                        
                    
                    </div>
    
                </li>   
    
    
                <li class="d1">
                
                    <div class="avatar">
                    
                        <div class="img">
                            <img src="https://media-cdn.tripadvisor.com/media/photo-l/01/2a/fd/a0/avatar.jpg" alt="Hotel En Buenos Aires Cariló" />
                        </div>
                        
                      	<span>Nicolas T</span>
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">“Increíble estancia!”</div>
                        <div class="description">El hotel está realmente bien, las habitaciones eran muy cómodas y grandes. Todo el mundo fue muy agradable y servicial!</div>
                        
                    
                    </div>
    
                </li>   
        

        </ul>

	</div>  
		
    <div class="clear"></div>
    </div>
	

<div class="clear"></div>
</div>


<div id="m7">

	<div class="b3">
    
    	<strong>LOCALIZACIÓN</strong> Y CONTACTO  
        
    </div>

    <div class="b1">
        
        <ul>
            <li><strong>RESERVAS</strong><a href="javascript:;" class="whatsapp"><i class="fa fa-whatsapp"></i> <? echo $whatsapp_web;?></a></li>
            <li><strong>CONTACTO</strong><a href="mailto:<? echo $email_web;?>"><i class="fa fa-envelope-o"></i> <? echo $email_web;?></a></li>
            <li><strong>DIRECCIÓN</strong><a href="https://www.google.com.ar/maps/place/<? echo $direccion_web;?>" target="_blank"><i class="fa fa-map-marker"></i> <? echo $direccion_web;?></a></li>
            
            <li><a href="#contacto" class="s1">Reservá Ahora</a></li>
        </ul>
    
    </div>

	<div class="b2">
    
		<div onclick="mapa();" id="mapa"></div>
		<div id="google-map"></div>
        
    </div>
 
<div class="clear"></div>
</div>

<div id="m8">

	<div class="b1">
    
		<ul>
        	<li>COMPÁRTELO</li>
        	<li><a href="<? echo $facebook_web;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
        	<li style="display: none;"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
        	<li><a href="<? echo $instagram_web;?>"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#contacto" class="s1">Reservá ahora <i class="fa fa-envelope-o"></i></a></li>
        </ul>    
    
    <div class="clear"></div>
    </div>

<div class="clear"></div>
</div>


<div id="footer">

	<div class="b1">
    
        <div class="d1">
        <? echo date('Y');?> © <? echo $footer_web;?> Todos los derechos reservados.
        <div class="clear"></div>    
        </div>
        
        <div class="d2">
        <a href="http://www.pcsignos.com.ar/agencia-marketing-digital/" title="Agencia Marketing Digital" target="_blank"></a>
        <div class="clear"></div>    
        </div>
    
    <div class="clear"></div>    
    </div>

<div class="clear"></div>    
</div>





<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script type="text/javascript" src="js/datepicker.js"></script>

<script type="text/javascript">
!function(e,i){"use strict";var t={item:5,autoWidth:!1,slideMove:1,slideMargin:10,addClass:"",mode:"slide",useCSS:!0,cssEasing:"ease",easing:"linear",speed:400,auto:!1,pauseOnHover:!1,loop:!1,slideEndAnimation:!0,pause:2e3,keyPress:!1,controls:!0,prevHtml:"",nextHtml:"",rtl:!1,adaptiveHeight:!1,vertical:!1,verticalHeight:500,vThumbWidth:100,thumbItem:10,pager:!1,gallery:!1,galleryMargin:5,thumbMargin:5,currentPagerPosition:"middle",enableTouch:!0,enableDrag:!0,freeMove:!0,swipeThreshold:40,responsive:[],onBeforeStart:function(e){},onSliderLoad:function(e){},onBeforeSlide:function(e,i){},onAfterSlide:function(e,i){},onBeforeNextSlide:function(e,i){},onBeforePrevSlide:function(e,i){}};e.fn.lightSlider=function(i){if(0===this.length)return this;if(this.length>1)return this.each(function(){e(this).lightSlider(i)}),this;var n={},l=e.extend(!0,{},t,i),a={},s=this;n.$el=this,"fade"===l.mode&&(l.vertical=!1);var o=s.children(),r=e(window).width(),d=null,c=null,u=0,f=0,h=!1,g=0,v="",p=0,m=!0===l.vertical?"height":"width",S=!0===l.vertical?"margin-bottom":"margin-right",b=0,C=0,M=0,T=0,x=null,w="ontouchstart"in document.documentElement,P={};return P.chbreakpoint=function(){if(r=e(window).width(),l.responsive.length){var i;if(!1===l.autoWidth&&(i=l.item),r<l.responsive[0].breakpoint)for(var t=0;t<l.responsive.length;t++)r<l.responsive[t].breakpoint&&(d=l.responsive[t].breakpoint,c=l.responsive[t]);if(void 0!==c&&null!==c)for(var n in c.settings)c.settings.hasOwnProperty(n)&&(void 0!==a[n]&&null!==a[n]||(a[n]=l[n]),l[n]=c.settings[n]);if(!e.isEmptyObject(a)&&r>l.responsive[0].breakpoint)for(var s in a)a.hasOwnProperty(s)&&(l[s]=a[s]);!1===l.autoWidth&&b>0&&M>0&&i!==l.item&&(p=Math.round(b/((M+l.slideMargin)*l.slideMove)))}},P.calSW=function(){!1===l.autoWidth&&(M=(g-(l.item*l.slideMargin-l.slideMargin))/l.item)},P.calWidth=function(e){var i=!0===e?v.find(".lslide").length:o.length;if(!1===l.autoWidth)f=i*(M+l.slideMargin);else{f=0;for(var t=0;t<i;t++)f+=parseInt(o.eq(t).width())+l.slideMargin}return f},(n={doCss:function(){return!(!l.useCSS||!function(){for(var e=["transition","MozTransition","WebkitTransition","OTransition","msTransition","KhtmlTransition"],i=document.documentElement,t=0;t<e.length;t++)if(e[t]in i.style)return!0}())},keyPress:function(){l.keyPress&&e(document).on("keyup.lightslider",function(i){e(":focus").is("input, textarea")||(i.preventDefault?i.preventDefault():i.returnValue=!1,37===i.keyCode?s.goToPrevSlide():39===i.keyCode&&s.goToNextSlide())})},controls:function(){l.controls&&(s.after('<div class="lSAction"><a class="lSPrev">'+l.prevHtml+'</a><a class="lSNext">'+l.nextHtml+"</a></div>"),l.autoWidth?P.calWidth(!1)<g&&v.find(".lSAction").hide():u<=l.item&&v.find(".lSAction").hide(),v.find(".lSAction a").on("click",function(i){return i.preventDefault?i.preventDefault():i.returnValue=!1,"lSPrev"===e(this).attr("class")?s.goToPrevSlide():s.goToNextSlide(),!1}))},initialStyle:function(){var e=this;"fade"===l.mode&&(l.autoWidth=!1,l.slideEndAnimation=!1),l.auto&&(l.slideEndAnimation=!1),l.autoWidth&&(l.slideMove=1,l.item=1),l.loop&&(l.slideMove=1,l.freeMove=!1),l.onBeforeStart.call(this,s),P.chbreakpoint(),s.addClass("lightSlider").wrap('<div class="lSSlideOuter '+l.addClass+'"><div class="lSSlideWrapper"></div></div>'),v=s.parent(".lSSlideWrapper"),!0===l.rtl&&v.parent().addClass("lSrtl"),l.vertical?(v.parent().addClass("vertical"),g=l.verticalHeight,v.css("height",g+"px")):g=s.outerWidth(),o.addClass("lslide"),!0===l.loop&&"slide"===l.mode&&(P.calSW(),P.clone=function(){if(P.calWidth(!0)>g){for(var i=0,t=0,n=0;n<o.length&&(i+=parseInt(s.find(".lslide").eq(n).width())+l.slideMargin,t++,!(i>=g+l.slideMargin));n++);var a=!0===l.autoWidth?t:l.item;if(a<s.find(".clone.left").length)for(var r=0;r<s.find(".clone.left").length-a;r++)o.eq(r).remove();if(a<s.find(".clone.right").length)for(var d=o.length-1;d>o.length-1-s.find(".clone.right").length;d--)p--,o.eq(d).remove();for(var c=s.find(".clone.right").length;c<a;c++)s.find(".lslide").eq(c).clone().removeClass("lslide").addClass("clone right").appendTo(s),p++;for(var u=s.find(".lslide").length-s.find(".clone.left").length;u>s.find(".lslide").length-a;u--)s.find(".lslide").eq(u-1).clone().removeClass("lslide").addClass("clone left").prependTo(s);o=s.children()}else o.hasClass("clone")&&(s.find(".clone").remove(),e.move(s,0))},P.clone()),P.sSW=function(){u=o.length,!0===l.rtl&&!1===l.vertical&&(S="margin-left"),!1===l.autoWidth&&o.css(m,M+"px"),o.css(S,l.slideMargin+"px"),f=P.calWidth(!1),s.css(m,f+"px"),!0===l.loop&&"slide"===l.mode&&!1===h&&(p=s.find(".clone.left").length)},P.calL=function(){o=s.children(),u=o.length},this.doCss()&&v.addClass("usingCss"),P.calL(),"slide"===l.mode?(P.calSW(),P.sSW(),!0===l.loop&&(b=e.slideValue(),this.move(s,b)),!1===l.vertical&&this.setHeight(s,!1)):(this.setHeight(s,!0),s.addClass("lSFade"),this.doCss()||(o.fadeOut(0),o.eq(p).fadeIn(0))),!0===l.loop&&"slide"===l.mode?o.eq(p).addClass("active"):o.first().addClass("active")},pager:function(){var e=this;if(P.createPager=function(){T=(g-(l.thumbItem*l.thumbMargin-l.thumbMargin))/l.thumbItem;var i=v.find(".lslide"),t=v.find(".lslide").length,n=0,a="",o=0;for(n=0;n<t;n++){"slide"===l.mode&&(l.autoWidth?o+=(parseInt(i.eq(n).width())+l.slideMargin)*l.slideMove:o=n*((M+l.slideMargin)*l.slideMove));var r=i.eq(n*l.slideMove).attr("data-thumb");if(!0===l.gallery?a+='<li style="width:100%;'+m+":"+T+"px;"+S+":"+l.thumbMargin+'px"><a href="#"><img src="'+r+'" /></a></li>':a+='<li><a href="#">'+(n+1)+"</a></li>","slide"===l.mode&&o>=f-g-l.slideMargin){n+=1;var d=2;l.autoWidth&&(a+='<li><a href="#">'+(n+1)+"</a></li>",d=1),n<d?(a=null,v.parent().addClass("noPager")):v.parent().removeClass("noPager");break}}var c=v.parent();c.find(".lSPager").html(a),!0===l.gallery&&(!0===l.vertical&&c.find(".lSPager").css("width",l.vThumbWidth+"px"),C=n*(l.thumbMargin+T)+.5,c.find(".lSPager").css({property:C+"px","transition-duration":l.speed+"ms"}),!0===l.vertical&&v.parent().css("padding-right",l.vThumbWidth+l.galleryMargin+"px"),c.find(".lSPager").css(m,C+"px"));var u=c.find(".lSPager").find("li");u.first().addClass("active"),u.on("click",function(){return!0===l.loop&&"slide"===l.mode?p+=u.index(this)-c.find(".lSPager").find("li.active").index():p=u.index(this),s.mode(!1),!0===l.gallery&&e.slideThumb(),!1})},l.pager){var i="lSpg";l.gallery&&(i="lSGallery"),v.after('<ul class="lSPager '+i+'"></ul>');var t=l.vertical?"margin-left":"margin-top";v.parent().find(".lSPager").css(t,l.galleryMargin+"px"),P.createPager()}setTimeout(function(){P.init()},0)},setHeight:function(e,i){var t=null,n=this;t=l.loop?e.children(".lslide ").first():e.children().first();var a=function(){var n=t.outerHeight(),l=0,a=n;i&&(n=0,l=100*a/g),e.css({height:n+"px","padding-bottom":l+"%"})};a(),t.find("img").length?t.find("img")[0].complete?(a(),x||n.auto()):t.find("img").load(function(){setTimeout(function(){a(),x||n.auto()},100)}):x||n.auto()},active:function(e,i){this.doCss()&&"fade"===l.mode&&v.addClass("on");var t=0;if(p*l.slideMove<u){e.removeClass("active"),this.doCss()||"fade"!==l.mode||!1!==i||e.fadeOut(l.speed),t=!0===i?p:p*l.slideMove;var n,a;!0===i&&(a=(n=e.length)-1,t+1>=n&&(t=a)),!0===l.loop&&"slide"===l.mode&&(t=!0===i?p-s.find(".clone.left").length:p*l.slideMove,!0===i&&(a=(n=e.length)-1,t+1===n?t=a:t+1>n&&(t=0))),this.doCss()||"fade"!==l.mode||!1!==i||e.eq(t).fadeIn(l.speed),e.eq(t).addClass("active")}else e.removeClass("active"),e.eq(e.length-1).addClass("active"),this.doCss()||"fade"!==l.mode||!1!==i||(e.fadeOut(l.speed),e.eq(t).fadeIn(l.speed))},move:function(e,i){!0===l.rtl&&(i=-i),this.doCss()?!0===l.vertical?e.css({transform:"translate3d(0px, "+-i+"px, 0px)","-webkit-transform":"translate3d(0px, "+-i+"px, 0px)"}):e.css({transform:"translate3d("+-i+"px, 0px, 0px)","-webkit-transform":"translate3d("+-i+"px, 0px, 0px)"}):!0===l.vertical?e.css("position","relative").animate({top:-i+"px"},l.speed,l.easing):e.css("position","relative").animate({left:-i+"px"},l.speed,l.easing);var t=v.parent().find(".lSPager").find("li");this.active(t,!0)},fade:function(){this.active(o,!1);var e=v.parent().find(".lSPager").find("li");this.active(e,!0)},slide:function(){var e=this;P.calSlide=function(){f>g&&(b=e.slideValue(),e.active(o,!1),b>f-g-l.slideMargin?b=f-g-l.slideMargin:b<0&&(b=0),e.move(s,b),!0===l.loop&&"slide"===l.mode&&(p>=u-s.find(".clone.left").length/l.slideMove&&e.resetSlide(s.find(".clone.left").length),0===p&&e.resetSlide(v.find(".lslide").length)))},P.calSlide()},resetSlide:function(e){var i=this;v.find(".lSAction a").addClass("disabled"),setTimeout(function(){p=e,v.css("transition-duration","0ms"),b=i.slideValue(),i.active(o,!1),n.move(s,b),setTimeout(function(){v.css("transition-duration",l.speed+"ms"),v.find(".lSAction a").removeClass("disabled")},50)},l.speed+100)},slideValue:function(){var e=0;if(!1===l.autoWidth)e=p*((M+l.slideMargin)*l.slideMove);else{e=0;for(var i=0;i<p;i++)e+=parseInt(o.eq(i).width())+l.slideMargin}return e},slideThumb:function(){var e;switch(l.currentPagerPosition){case"left":e=0;break;case"middle":e=g/2-T/2;break;case"right":e=g-T}var i=p-s.find(".clone.left").length,t=v.parent().find(".lSPager");"slide"===l.mode&&!0===l.loop&&(i>=t.children().length?i=0:i<0&&(i=t.children().length));var n=i*(T+l.thumbMargin)-e;n+g>C&&(n=C-g-l.thumbMargin),n<0&&(n=0),this.move(t,n)},auto:function(){l.auto&&(clearInterval(x),x=setInterval(function(){s.goToNextSlide()},l.pause))},pauseOnHover:function(){var i=this;l.auto&&l.pauseOnHover&&(v.on("mouseenter",function(){e(this).addClass("ls-hover"),s.pause(),l.auto=!0}),v.on("mouseleave",function(){e(this).removeClass("ls-hover"),v.find(".lightSlider").hasClass("lsGrabbing")||i.auto()}))},touchMove:function(e,i){if(v.css("transition-duration","0ms"),"slide"===l.mode){var t=b-(e-i);if(t>=f-g-l.slideMargin)if(!1===l.freeMove)t=f-g-l.slideMargin;else{var n=f-g-l.slideMargin;t=n+(t-n)/5}else t<0&&(!1===l.freeMove?t=0:t/=5);this.move(s,t)}},touchEnd:function(e){if(v.css("transition-duration",l.speed+"ms"),"slide"===l.mode){var i=!1,t=!0;(b-=e)>f-g-l.slideMargin?(b=f-g-l.slideMargin,!1===l.autoWidth&&(i=!0)):b<0&&(b=0);var n=function(e){var t=0;if(i||e&&(t=1),l.autoWidth)for(var n=0,a=0;a<o.length&&(n+=parseInt(o.eq(a).width())+l.slideMargin,p=a+t,!(n>=b));a++);else{var s=b/((M+l.slideMargin)*l.slideMove);p=parseInt(s)+t,b>=f-g-l.slideMargin&&s%1!=0&&p++}};e>=l.swipeThreshold?(n(!1),t=!1):e<=-l.swipeThreshold&&(n(!0),t=!1),s.mode(t),this.slideThumb()}else e>=l.swipeThreshold?s.goToPrevSlide():e<=-l.swipeThreshold&&s.goToNextSlide()},enableDrag:function(){var i=this;if(!w){var t=0,n=0,a=!1;v.find(".lightSlider").addClass("lsGrab"),v.on("mousedown",function(i){if(f<g&&0!==f)return!1;"lSPrev"!==e(i.target).attr("class")&&"lSNext"!==e(i.target).attr("class")&&(t=!0===l.vertical?i.pageY:i.pageX,a=!0,i.preventDefault?i.preventDefault():i.returnValue=!1,v.scrollLeft+=1,v.scrollLeft-=1,v.find(".lightSlider").removeClass("lsGrab").addClass("lsGrabbing"),clearInterval(x))}),e(window).on("mousemove",function(e){a&&(n=!0===l.vertical?e.pageY:e.pageX,i.touchMove(n,t))}),e(window).on("mouseup",function(s){if(a){v.find(".lightSlider").removeClass("lsGrabbing").addClass("lsGrab"),a=!1;var o=(n=!0===l.vertical?s.pageY:s.pageX)-t;Math.abs(o)>=l.swipeThreshold&&e(window).on("click.ls",function(i){i.preventDefault?i.preventDefault():i.returnValue=!1,i.stopImmediatePropagation(),i.stopPropagation(),e(window).off("click.ls")}),i.touchEnd(o)}})}},enableTouch:function(){var e=this;if(w){var i={},t={};v.on("touchstart",function(e){t=e.originalEvent.targetTouches[0],i.pageX=e.originalEvent.targetTouches[0].pageX,i.pageY=e.originalEvent.targetTouches[0].pageY,clearInterval(x)}),v.on("touchmove",function(n){if(f<g&&0!==f)return!1;var a=n.originalEvent;t=a.targetTouches[0];var s=Math.abs(t.pageX-i.pageX),o=Math.abs(t.pageY-i.pageY);!0===l.vertical?(3*o>s&&n.preventDefault(),e.touchMove(t.pageY,i.pageY)):(3*s>o&&n.preventDefault(),e.touchMove(t.pageX,i.pageX))}),v.on("touchend",function(){if(f<g&&0!==f)return!1;var n;n=!0===l.vertical?t.pageY-i.pageY:t.pageX-i.pageX,e.touchEnd(n)})}},build:function(){var i=this;i.initialStyle(),this.doCss()&&(!0===l.enableTouch&&i.enableTouch(),!0===l.enableDrag&&i.enableDrag()),e(window).on("focus",function(){i.auto()}),e(window).on("blur",function(){clearInterval(x)}),i.pager(),i.pauseOnHover(),i.controls(),i.keyPress()}}).build(),P.init=function(){P.chbreakpoint(),!0===l.vertical?(g=l.item>1?l.verticalHeight:o.outerHeight(),v.css("height",g+"px")):g=v.outerWidth(),!0===l.loop&&"slide"===l.mode&&P.clone(),P.calL(),"slide"===l.mode&&s.removeClass("lSSlide"),"slide"===l.mode&&(P.calSW(),P.sSW()),setTimeout(function(){"slide"===l.mode&&s.addClass("lSSlide")},1e3),l.pager&&P.createPager(),!0===l.adaptiveHeight&&!1===l.vertical&&s.css("height",o.eq(p).outerHeight(!0)),!1===l.adaptiveHeight&&("slide"===l.mode?!1===l.vertical?n.setHeight(s,!1):n.auto():n.setHeight(s,!0)),!0===l.gallery&&n.slideThumb(),"slide"===l.mode&&n.slide(),!1===l.autoWidth?o.length<=l.item?v.find(".lSAction").hide():v.find(".lSAction").show():P.calWidth(!1)<g&&0!==f?v.find(".lSAction").hide():v.find(".lSAction").show()},s.goToPrevSlide=function(){if(p>0)l.onBeforePrevSlide.call(this,s,p),p--,s.mode(!1),!0===l.gallery&&n.slideThumb();else if(!0===l.loop){if(l.onBeforePrevSlide.call(this,s,p),"fade"===l.mode){var e=u-1;p=parseInt(e/l.slideMove)}s.mode(!1),!0===l.gallery&&n.slideThumb()}else!0===l.slideEndAnimation&&(s.addClass("leftEnd"),setTimeout(function(){s.removeClass("leftEnd")},400))},s.goToNextSlide=function(){var e=!0;"slide"===l.mode&&(e=n.slideValue()<f-g-l.slideMargin),p*l.slideMove<u-l.slideMove&&e?(l.onBeforeNextSlide.call(this,s,p),p++,s.mode(!1),!0===l.gallery&&n.slideThumb()):!0===l.loop?(l.onBeforeNextSlide.call(this,s,p),p=0,s.mode(!1),!0===l.gallery&&n.slideThumb()):!0===l.slideEndAnimation&&(s.addClass("rightEnd"),setTimeout(function(){s.removeClass("rightEnd")},400))},s.mode=function(e){!0===l.adaptiveHeight&&!1===l.vertical&&s.css("height",o.eq(p).outerHeight(!0)),!1===h&&("slide"===l.mode?n.doCss()&&(s.addClass("lSSlide"),""!==l.speed&&v.css("transition-duration",l.speed+"ms"),""!==l.cssEasing&&v.css("transition-timing-function",l.cssEasing)):n.doCss()&&(""!==l.speed&&s.css("transition-duration",l.speed+"ms"),""!==l.cssEasing&&s.css("transition-timing-function",l.cssEasing))),e||l.onBeforeSlide.call(this,s,p),"slide"===l.mode?n.slide():n.fade(),v.hasClass("ls-hover")||n.auto(),setTimeout(function(){e||l.onAfterSlide.call(this,s,p)},l.speed),h=!0},s.play=function(){s.goToNextSlide(),l.auto=!0,n.auto()},s.pause=function(){l.auto=!1,clearInterval(x)},s.refresh=function(){P.init()},s.getCurrentSlideCount=function(){var e=p;if(l.loop){var i=v.find(".lslide").length,t=s.find(".clone.left").length;e=p<=t-1?i+(p-t):p>=i+t?p-i-t:p-t}return e+1},s.getTotalSlideCount=function(){return v.find(".lslide").length},s.goToSlide=function(e){p=l.loop?e+s.find(".clone.left").length-1:e,s.mode(!1),!0===l.gallery&&n.slideThumb()},s.destroy=function(){s.lightSlider&&(s.goToPrevSlide=function(){},s.goToNextSlide=function(){},s.mode=function(){},s.play=function(){},s.pause=function(){},s.refresh=function(){},s.getCurrentSlideCount=function(){},s.getTotalSlideCount=function(){},s.goToSlide=function(){},s.lightSlider=null,P={init:function(){}},s.parent().parent().find(".lSAction, .lSPager").remove(),s.removeClass("lightSlider lSFade lSSlide lsGrab lsGrabbing leftEnd right").removeAttr("style").unwrap().unwrap(),s.children().removeAttr("style"),o.removeClass("lslide active"),s.find(".clone").remove(),o=null,x=null,h=!1,p=0)},setTimeout(function(){l.onSliderLoad.call(this,s)},10),e(window).on("resize orientationchange",function(e){setTimeout(function(){e.preventDefault?e.preventDefault():e.returnValue=!1,P.init()},200)}),this}}(jQuery);    
function valida_contacto(){with(document.getElementById("nombre"))if(className="",0==value.length)return className="i-error",focus(),0;with(document.getElementById("telefono")){if(className="",0==value.length)return className="i-error",focus(),0;var RegExPattern=/^\d+/;if(!value.match(RegExPattern)||""==value)return className="i-error",focus(),0}with(document.getElementById("email")){if(className="",0==value.length)return className="i-error",focus(),0;var RegExPattern=/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;if(!value.match(RegExPattern)||""==value)return className="i-error",focus(),0}with(document.getElementById("entrada"))if(className="",0==value.length)return className="i-error",focus(),0;with(document.getElementById("salida"))if(className="",0==value.length)return className="i-error",focus(),0;document.getElementById("contacto").submit()}
$('.s1').click(function () { $('body,html').animate( { scrollTop:$(this.hash).offset().top } , 800); document.getElementById('nombre').className="i-error"; return false;});
function mapa() {document.getElementById("mapa").style.display = 'none';} function mapa2() {document.getElementById("mapa").style.display = 'block';}

$(document).ready(function() {

	
	if ($(window).width() > 1024) {	
	
		$("#content-slider").lightSlider({
			loop:true,
			keyPress:true,
			pager: true,
            controls:false,
			item:3
	
		});


        $("#content2-slider").lightSlider({
            loop:true,
            keyPress:true,
            controls:false,
            item:4

        });

    
        $(".telefono").removeAttr("href");           
            
                
	
	} else {
		
        $('.telefono').attr("href","tel:<?php echo $movil_web;?>");

        $("#content-slider").lightSlider({
            
            loop:true,
            keyPress:true,
            pager: false,
            controls:false,
            item:1.5
    
        });

        $("#content2-slider").lightSlider({
            loop:true,
            keyPress:true,
            controls:false,
            item:1

        });
		

        $(".content3-slider").lightSlider({
            loop:true,
            keyPress:true,
            controls:false,
            item:1,
            auto: true,
            pause: 5000,    
        });
    

	}	


        $('.whatsapp').click(function () {

            location.href="https://api.whatsapp.com/send?phone=<? echo $whatsapp_movil_web;?>";

              var callback = function () {
                if (typeof(url) != 'undefined') {
                  window.location = url;
                }
              };

              gtag('event', 'conversion', {
                  'send_to': '<? echo $conversion_evento_whatsapp;?>',
                  'event_callback': callback
              });

            
        }); 

        $('.telefono').click(function () {

             var callback = function () {
                if (typeof(url) != 'undefined') {
                  window.location = url;
                }
              };

              gtag('event', 'conversion', {
                  'send_to': '<? echo $conversion_evento_telefono;?>',
                  'event_callback': callback
              });

            
        });


	
});

</script>

<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAOJPKefD6-Vxs1DgZUGWWXbdHbC9Ihcck'></script>    

<script type="text/javascript">

	function initialize() {
	  var marcadores = [
		['<? echo $direccion_web;?>', <? echo $latitude;?>, <? echo $longitude;?>]
	  ];
	  var map = new google.maps.Map(document.getElementById('google-map'), {
		zoom: 15,
		center: new google.maps.LatLng(<? echo $latitude;?>, <? echo $longitude;?>),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	  });
	  
	  var infowindow = new google.maps.InfoWindow();
	  var marker, i;
	  for (i = 0; i < marcadores.length; i++) {  
		marker = new google.maps.Marker({
		  position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
		  map: map
		});
		google.maps.event.addListener(marker, 'click', (function(marker, i) {
		  return function() {
			infowindow.setContent(marcadores[i][0]);
			infowindow.open(map, marker);
		  }
		})(marker, i));
	  }
	}
	google.maps.event.addDomListener(window, 'load', initialize);

</script>


<?php ob_end_flush();?>

</body>
</html>