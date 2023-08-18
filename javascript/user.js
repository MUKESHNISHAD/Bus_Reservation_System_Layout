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

  var source = document.getElementsByClassName('from')[0];
  var destination = document.getElementsByClassName('to')[0];
  var confirm = document.getElementsByClassName('conform')[0];
  function getbusnumber(text){
    var msg = document.getElementsByClassName('msg')[0];
    let confirm = document.getElementsByClassName('conform')[0];
    if(text=='0'){
        msg.innerHTML = "Not Bus found";
        confirm.disabled = true;
    }
    else{
        msg.innerHTML = "Bus found";
        confirm.disabled = false;
    }
  }

  source.addEventListener('blur',function(evt){
    if(destination.value=='')
    return ;
    var postdata = 'from='+source.value+'&to='+destination.value;
    send('post','../php/busdetails.php',postdata,function(text){getbusnumber(text)});
  },false);
  destination.addEventListener('blur',function(text){
    if(source.value=='')
    return ;
    var postdata = 'from='+source.value+'&to='+destination.value;
    send('post','../php/busdetails.php',postdata,function(text){getbusnumber(text)});
  },false);