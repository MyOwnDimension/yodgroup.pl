

  var w = window.innerWidth;
  var h = window.innerHeight;
  document.documentElement.style.setProperty('--width0', `${w}px`);
  document.documentElement.style.setProperty('--width1', `${w}px`);
  document.documentElement.style.setProperty('--width2', `${w}px`);
  document.documentElement.style.setProperty('--width3', `${w}px`);
  document.documentElement.style.setProperty('--height0', `${h}px`);

    var userAgent = navigator.userAgent;
    if (userAgent.indexOf("Edg") > -1) {
  document.documentElement.style.setProperty('--widthBrowser', `370px`);
    } else if (userAgent.indexOf("Chrome") > -1) {
  document.documentElement.style.setProperty('--widthBrowser', `380px`);
    } else if (userAgent.indexOf("Firefox") > -1) {
  document.documentElement.style.setProperty('--widthBrowser', w/4.02);// 382 
    } else if (userAgent.indexOf("Safari") > -1) {
  document.documentElement.style.setProperty('--widthBrowser', `380px`);
    } else if (userAgent.indexOf("Opera") > -1) {
  document.documentElement.style.setProperty('--widthBrowser', `380px`);
    } else if (userAgent.indexOf("Trident") > -1 || userAgent.indexOf("MSIE") > -1) {
  document.documentElement.style.setProperty('--widthBrowser', `380px`);
    }else{
document.documentElement.style.setProperty('--widthBrowser', `380px`);
	}