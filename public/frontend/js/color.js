$(document).ready(function(){$(".group1").colorbox({rel:'group1'});$(".group2").colorbox({rel:'group2',transition:"fade"});$(".group3").colorbox({rel:'group3',transition:"none",width:"75%",height:"75%"});$(".group4").colorbox({rel:'group4',slideshow:true});$(".ajax").colorbox();$(".youtube").colorbox({iframe:true,innerWidth:640,innerHeight:390});$(".vimeo").colorbox({iframe:true,innerWidth:500,innerHeight:409});$(".iframe").colorbox({iframe:true,width:"80%",height:"80%"});$(".inline").colorbox({inline:true,width:"50%"});$(".callbacks").colorbox({onOpen:function(){alert('onOpen: colorbox is about to open');},onLoad:function(){alert('onLoad: colorbox has started to load the targeted content');},onComplete:function(){alert('onComplete: colorbox has displayed the loaded content');},onCleanup:function(){alert('onCleanup: colorbox has begun the close process');},onClosed:function(){alert('onClosed: colorbox has completely closed');}});$('.non-retina').colorbox({rel:'group5',transition:'none'})
$('.retina').colorbox({rel:'group5',transition:'none',retinaImage:true,retinaUrl:true});$("#click").click(function(){$('#click').css({"background-color":"#f00","color":"#fff","cursor":"inherit"}).text("Open this window again and this message will still be here.");return false;});});jQuery.colorbox.settings.maxWidth='95%';jQuery.colorbox.settings.maxHeight='95%';var resizeTimer;function resizeColorBox()
{if(resizeTimer)clearTimeout(resizeTimer);resizeTimer=setTimeout(function(){if(jQuery('#cboxOverlay').is(':visible')){jQuery.colorbox.load(true);}},300);}
jQuery(window).resize(resizeColorBox);window.addEventListener("orientationchange",resizeColorBox,false);function onerrored(val)
{$('.error_'+val).remove();}
$(window).on('load',function(){$('#phonemodal').modal('show');});$(window).on('load',function(){$('#myModal22').modal('show');});$(window).on('load',function(){$('#myModal211').modal('show');});