$(document).ready(function(){

 $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });

 var _URL = window.URL || window.webkitURL;

 $('#imagenBig').change(function () {
  var file = $(this)[0].files[0];

  img = new Image();
  var imgwidth = 0;
  var imgheight = 0;
  var maxwidth = 1900;
  var maxheight = 920;

  img.src = _URL.createObjectURL(file);
  img.onload = function() {
   imgwidth = this.width;
   imgheight = this.height;
 
   $("#width").text(imgwidth);
   $("#height").text(imgheight);
   if(imgwidth == maxwidth && imgheight == maxheight){
 
  	


  }else{
   $('#modalImgBig').modal('open');
   document.getElementById("imagenBig").value = "";
  }
 };


 });

 $('#imagenMd').change(function () {
  var file = $(this)[0].files[0];

  img = new Image();
  var imgwidth = 0;
  var imgheight = 0;
  var maxwidth = 560;
  var maxheight = 340;

  img.src = _URL.createObjectURL(file);
  img.onload = function() {
   imgwidth = this.width;
   imgheight = this.height;
 
   $("#width").text(imgwidth);
   $("#height").text(imgheight);
   if(imgwidth == maxwidth && imgheight == maxheight){
 
  	


  }else{
   $('#modalImgMd').modal('open');
   document.getElementById("imagenMd").value = "";
  }
 };


 });


 $('#imagenSm').change(function () {
  var file = $(this)[0].files[0];

  img = new Image();
  var imgwidth = 0;
  var imgheight = 0;
  var maxwidth = 360;
  var maxheight = 240;

  img.src = _URL.createObjectURL(file);
  img.onload = function() {
   imgwidth = this.width;
   imgheight = this.height;
 
   $("#width").text(imgwidth);
   $("#height").text(imgheight);
   if(imgwidth == maxwidth && imgheight == maxheight){
 
  	


  }else{
   $('#modalImgSm').modal('open');
   document.getElementById("imagenSm").value = "";
  }
 };


 });




});