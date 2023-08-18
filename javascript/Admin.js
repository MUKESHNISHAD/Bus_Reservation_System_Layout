function send(method,url,post='',callback){
    var http = new XMLHttpRequest();
    if(method=='post'){
      http.open(method,url,true);
      http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    }
    else{
      http.open(method,url+'?'+post);
    }
    http.onreadystatechange = function(){
      if(this.readyState==4&&this.status==200){
        callback(this.responseText);
      }
    }
    if(method=='post'){
      http.send(post);
    }
    else{
      http.send();
    }
  }

  var add = document.getElementsByTagName('button')[0];
  var remove = document.getElementsByTagName('button')[1];
  var inputs = document.getElementsByTagName('input');
  var busnumber = inputs[0];
  var source = inputs[1];
  var destination = inputs[2];
  
  
  function addbus(text){
    if(text=='1'){
        document.getElementsByClassName('msg')[0].innerHTML = "Added";
    }
    else{
        document.getElementsByClassName('msg')[0].innerHTML = "Not inserted";
    }
    setTimeout(function(){
      document.getElementsByClassName('msg')[0].innerHTML='';
    },1000);
  }

  function removebus(text){
    if(text=='1'){
        document.getElementsByClassName('msg')[1].innerHTML = "Removed";
    }
    else{
        document.getElementsByClassName('msg')[1].innerHTML = "can not remove";
    }
    setTimeout(function(){
      document.getElementsByClassName('msg')[1].innerHTML='';
    },1000);
  }
 
  
  add.addEventListener('click',function(){
    if(busnumber.value==''||source.value==''||destination.value==''){
      document.getElementsByClassName('msg')[0].innerHTML='All field must filled';
      setTimeout(function(){
        document.getElementsByClassName('msg')[0].innerHTML='';
      },1000);
      return ;
    }
    else{
      document.getElementsByClassName('msg')[0].innerHTML='';
    }
    var postdata = "busnumber="+busnumber.value+"&source="+source.value+"&destination="+destination.value;
    send('post','../php/addBus.php',postdata,addbus);
 },false);

 remove.addEventListener('click',function(){
  if(inputs[3].value==''){
    document.getElementsByClassName('msg')[1].innerHTML='All field must filled';
    setTimeout(function(){
      document.getElementsByClassName('msg')[1].innerHTML='';
    },1000);
    return ;
  }
  else{
    document.getElementsByClassName('msg')[1].innerHTML='';
  }
   var postdata = "busnumber="+inputs[3].value;
    send('post','../php/remove.php',postdata,removebus);
 },false);

