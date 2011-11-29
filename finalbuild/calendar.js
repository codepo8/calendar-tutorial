(function(){
var list = document.querySelector('ol'),
    output = document.querySelector('article');
    
list.addEventListener('click', function(ev) {
  var t = ev.target;
  if (t.tagName ==='A') {
    var y = ev.clientY + document.body.scrollTop +
            document.documentElement.scrollTop;
    load(+t.innerHTML, y);
  }
  ev.preventDefault();
}, false);


output.addEventListener('click',function(ev){
  var t = ev.target;
  if(t.tagName === 'A' && t.id === 'close') {
    output.style.top = '-400px';
    output.className = '';
    ev.preventDefault();
  }
},false);

document.addEventListener( 'keydown', function(key) {
   if ( key.keyCode === 27 ) {
     if( output.className === 'show' ) {
       output.style.top = '-400px';
       output.className = '';
     }
   }
 }, false );

function load(day,y) {
  var httpstats = /200|304/;
  var request = new XMLHttpRequest();
  request.onreadystatechange = function() {
    if (request.readyState == 4) {
      if (request.status && httpstats.test(request.status)) {
        output.innerHTML = request.responseText;
        output.className = 'show';
        output.style.top = y + 'px';
      } else {
        document.location = 'index.php?day=' + day;
      }
    }
  };
  request.open('get', 'api.php?ajax=1&day='+day, true);
  request.setRequestHeader('If-Modified-Since',
                           'Wed, 05 Apr 2006 00:00:00 GMT');
  request.send(null);  
}
}());
