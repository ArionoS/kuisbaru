$(function(){
    $(".post-module").hover(function(){
      $(".description").stop().animate({'height':'toggle'},300);
    });
  });