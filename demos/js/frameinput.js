//frameinputs.js

(function( $, SVG ) {

  /**
   * Request Animation Frame polyfill
   */

  (function() {
    var lastTime = 0;

    //Define Browser Vendors
    var vendors = ['ms', 'moz', 'webkit', 'o'];

    //Iterate Over Browser Vendors
    //.. and set requestAnimationFrame when it does not exist
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
        window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] 
                                   || window[vendors[x]+'CancelRequestAnimationFrame'];
    }

    //If still not set after all that...
    if (!window.requestAnimationFrame)
      window.requestAnimationFrame = function(callback, element) {
        //Current Time
        var currTime = new Date().getTime();

        //Time Delay before Next Call
        var timeToCall = Math.max(0, 16 - (currTime - lastTime));

        //setTimeout id
        //.. calls the callback with current time as the first argument
        //.. waits (timeToCall)ms before calling the callback
        var id = window.setTimeout(function() { callback(currTime + timeToCall); }, 
          timeToCall);

        //updates lastTime
        lastTime = currTime + timeToCall;

        //returns setTimeout id
        return id;
      };

    //If cancelAnimationFrame still not set
    if (!window.cancelAnimationFrame)
      //sets cancelAnimationFrame
      window.cancelAnimationFrame = function(id) {
          clearTimeout(id);
      };
  }());

  /**
   * This object creates all video/control elements
   * and is self-contained with all functions
   * for interacting with its own gfycat video.
   */

  var gfyObject = function (gfyElem) {
      var gfyRootElem = gfyElem;
      var gfyId;
      // Options are set by data- attributes on tag
      var optExpand; // Option: will video grow to fill space
      var optTitle; // Option: display title on hover over
      var optCtrls; // Option: add controls to bottom right corner
      var optAutoplay = true; // Option: automatically play video when loaded
      // references to each html element
      var ctrlBox;
      var ctrlPausePlay;
      var ctrlSlower;
      var ctrlFaster;
      var vid;
      var gif;
      var overlayCanvas;
      var titleDiv;
      var isMobile;
      var isReverse = false;
      var isGifOnly = false;
      var self = this;
      var gfyItem;
      var gfyWidth;
      var gfyHeight;

      //Frame Related Variables
      var lastTime = -1;
      var time;
      var currentFrame;
      var frameTick;

      // Helper function -- only required because some browsers do not have get by class name
      function byClass(className, obj) {
          if (obj.getElementsByClassName) {
              return obj.getElementsByClassName(className);
          } else {
              var retnode = [];
              var elem = obj.getElementsByTagName('*');
              for (var i = 0; i < elem.length; i++) {
                  if ((' ' + elem[i].className + ' ').indexOf(' ' + className + ' ') > -1) retnode.push(elem[i]);
              }
              return retnode;
          }
      }

      function createTitle() {
          titleDiv = document.createElement('div');
          titleDiv.style.position = "absolute";
          try {
              titleDiv.style.backgroundColor = "rgba(0,0,0,0.4)";
          } catch (e) {
              // IE does not have rgba
              titleDiv.style.backgroundColor = "#000";
              // Allow non-IE browsers without rgba to carry on
              try {
                  titleDiv.style.filter = 'alpha(opacity=60)';
              } catch (e) {}
          }
          titleDiv.style.color = "#fff";
          titleDiv.style.fontFamily = "Arial,sans-serif";
          titleDiv.style.fontSize = "20px";
          titleDiv.style.padding = "10px";
          titleDiv.innerHTML = gfyItem.title;
          titleDiv.style.left = "0";
          titleDiv.style.top = "0";
          titleDiv.style.display = "none";
          gfyRootElem.appendChild(titleDiv);
      }

      // overlayCanvas used to display a play button overlay if
      // video is not on "autoplay"
      function createOverlayCanvas() {
          overlayCanvas = document.createElement('canvas');
          overlayCanvas.style.position = "absolute";
          overlayCanvas.style.left = "0";
          overlayCanvas.style.top = "0";
          overlayCanvas.onclick = pauseClick;
          overlayCanvas.onmouseout = gfyMouseOut;
          overlayCanvas.onmouseover = gfyMouseOver;
          gfyRootElem.appendChild(overlayCanvas);
      }

      function createVidTag() {
          vid = document.createElement('video');
          vid.className = 'gfyVid';
          if (optAutoplay)
              vid.autoplay = true;
          vid.loop = true;
          if(isMobile)
              vid.controls = true;
          else
              vid.controls = false;
          vid.style.width = '100%';
          vid.style.height = 'auto';
          // poster url gfyName is case sensitive
          vid.setAttribute('poster', 'https://thumbs.gfycat.com/' + gfyItem.gfyName + '-poster.jpg');
          source2 = document.createElement('source');
          source2.src = gfyWebmUrl;
          source2.type = 'video/webm';
          source2.className = "webmsource";
          vid.appendChild(source2);
          source = document.createElement('source');
          source.src = gfyMp4Url;
          source.type = 'video/mp4';
          source.className = "mp4source";
          vid.appendChild(source);
          gfyRootElem.appendChild(vid);
      }

      // from mobiledetect.com
      function mobilecheck() {
          var check = false;
          (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|android|ipad|playbook|silk|blackberry|htc|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
          return check; 
      }
      
      function createGifTag() {
          gif = document.createElement('img');
          gif.src = gfyItem.gifUrl;
          if (optExpand)
              gif.style.width = '100%';
          else
              gif.style.maxWidth = gfyItem.width + 'px';
          gif.style.height = 'auto';
          gif.onmouseout = gfyMouseOut;
          gif.onmouseover = gfyMouseOver;
          gfyRootElem.appendChild(gif);
          gfyRootElem.style.position = "relative";
          gfyRootElem.style.padding = 0;
      }

      function setWrapper() {
          gfyRootElem.style.position = "relative";
          gfyRootElem.style.padding = 0;
          if (!optExpand) {
              gfyRootElem.style.display = 'inline-block';
              gfyRootElem.style.overflow = 'hidden';
              gfyRootElem.style.boxSizing = 'border-box';
              gfyRootElem.style.MozBoxSizing = 'border-box';
              gfyRootElem.style.webkitBoxSizing = 'border-box';
          }
      }

      function createCtrlBox() {
          if (!optCtrls)
              return;
          ctrlRow = document.createElement('div');
          ctrlRow.style.position = 'relative';
          ctrlBox = document.createElement('div');
          ctrlBox.className = "CtrlBox";
          ctrlPausePlay = document.createElement('img');
          ctrlPausePlay.className = "gfyCtrlPause";
          ctrlPausePlay.src = "https://assets.gfycat.com/img/placeholder.png";
          ctrlPausePlay.style.backgroundImage = "url('https://assets.gfycat.com/img/gfycontrols.png')";
          ctrlPausePlay.style.cssFloat = 'right';
          ctrlPausePlay.style.marginRight = '5px';
          ctrlPausePlay.style.width = '12px';
          ctrlPausePlay.style.height = '12px';
          ctrlPausePlay.style.borderStyle = 'none';
          ctrlBox.appendChild(ctrlPausePlay);
          ctrlReverse = document.createElement('img');
          ctrlReverse.className = "gfyCtrlReverse";
          ctrlReverse.src = "https://assets.gfycat.com/img/placeholder.png";
          ctrlReverse.style.backgroundImage = "url('https://assets.gfycat.com/img/gfycontrols.png')";
          ctrlReverse.style.cssFloat = 'right';
          ctrlReverse.style.marginRight = '5px';
          ctrlReverse.style.width = '14px';
          ctrlReverse.style.height = '12px';
          ctrlReverse.style.backgroundPosition = '-46px 0';
          ctrlReverse.style.borderStyle = 'none';
          ctrlSlower = document.createElement('img');
          ctrlSlower.className = "gfyCtrlSlower";
          ctrlSlower.src = "https://assets.gfycat.com/img/placeholder.png";
          ctrlSlower.style.backgroundImage = "url('https://assets.gfycat.com/img/gfycontrols.png')";
          ctrlSlower.style.marginRight = '5px';
          ctrlSlower.style.width = '14px';
          ctrlSlower.style.height = '12px';
          ctrlSlower.style.cssFloat = 'right';
          ctrlSlower.style.borderStyle = 'none';
          ctrlFaster = document.createElement('img');
          ctrlFaster.className = "gfyCtrlFaster";
          ctrlFaster.src = "https://assets.gfycat.com/img/placeholder.png";
          ctrlFaster.style.backgroundImage = "url('https://assets.gfycat.com/img/gfycontrols.png')";
          ctrlFaster.style.width = '14px';
          ctrlFaster.style.height = '12px';
          ctrlFaster.style.cssFloat = 'right';
          ctrlFaster.style.marginRight = '5px';
          ctrlFaster.style.borderStyle = 'none';
          if (vid.paused)
              setCtrlsPaused();
          else
              setCtrlsPlaying();
          ctrlBox.style.position = 'relative';
          ctrlBox.style.cssFloat = 'right';
          ctrlBox.style.width = '100px';
          ctrlBox.style.padding = '5px';
          ctrlBox.style.margin = '0';
          ctrlBox.setAttribute("id", "ctr" + gfyId);
          ctrlPausePlay.onclick = pauseClick;
          ctrlReverse.onclick = reverse;
          ctrlBox.appendChild(ctrlFaster);
          ctrlBox.appendChild(ctrlSlower);
          ctrlBox.appendChild(ctrlReverse);
          ctrlBox.appendChild(ctrlPausePlay);
          ctrlRow.appendChild(ctrlBox);
          gfyRootElem.appendChild(ctrlRow);
      }

      function deleteVidTag() {
          gfyRootElem.removeChild(vid);
      }

      function checkCurrentFrame() {
        //Check for a change in time
        if (vid.currentTime !== lastTime) {
          //Current frame is the current time divided by the framerate
          currentFrame = Math.ceil(vid.currentTime * gfyFrameRate);

          //Create frameTick event
          frameTick = new CustomEvent('frameTick', {'detail': currentFrame})

          //Dispatch custom event
          gfyElem.dispatchEvent(frameTick);

          //Set lastTime to currentTime
          lastTime = vid.currentTime;
        }

        //wait approximately 16ms and run again
        requestAnimationFrame(checkCurrentFrame);
      }

      function init() {
          isMobile = mobilecheck();
          gfyId = gfyRootElem.getAttribute('data-id');
          if (gfyRootElem.getAttribute('data-title') == "true")
              optTitle = true;
          if (gfyRootElem.getAttribute('data-expand') == "true")
              optExpand = true;
          if (gfyRootElem.getAttribute('data-controls') == "true")
              optCtrls = true;
          if (gfyRootElem.getAttribute('data-autoplay') == "false")
              optAutoplay = false;
          var newElem = document.createElement('div');
          attrib_src = gfyRootElem.attributes;
          attrib_dest = newElem.attributes;
          for (var i = 0; i < attrib_src.length; i++) {
              var tst = attrib_src.item(i);
              var tst2 = tst.cloneNode();
              if (tst2.name == "style" && tst.value != 'null') {
                  attrib_dest.setNamedItem(tst2);
              } else {}
              //attrib_dest.setNamedItem(attrib_src.item(i).cloneNode());
          }
          gfyRootElem.parentNode.replaceChild(newElem, gfyRootElem);
          gfyRootElem = newElem;
          // call gfycat API to get info for this gfycat
          loadJSONP("https://gfycat.com/cajax/get/" + gfyId, function (data) {
              if (data) {
                  gfyItem = data.gfyItem;
                  gfyMp4Url = gfyItem.mp4Url;
                  gfyWebmUrl = gfyItem.webmUrl;
                  gfyFrameRate = gfyItem.frameRate;
                  if (document.createElement('video').canPlayType) {
                      createVidTag();
                      setWrapper();
                      createTitle();
                      createOverlayCanvas();
                      checkCurrentFrame();
                      // Can't grab the width/height until video loaded
                      if (vid.addEventListener)
                          vid.addEventListener("loadedmetadata", vidLoaded, false);
                      else
                          vid.attachEvent("onloadedmetadata", vidLoaded);
                      if (optAutoplay)
                          vid.play();
                  } else {
                      isGifOnly = true;
                      createGifTag();
                      createTitle();
                      gif.onload = function () {
                          var ua = navigator.userAgent.toLowerCase();
                          if (ua.indexOf("msie") > -1)
                              titleDiv.style.width = gif.clientWidth + 'px';
                          else
                              titleDiv.style.width = gif.clientWidth - 20 + 'px';
                      }
                  }
              } else {}
          });

      }

      // used to load ajax info for each gfycat on the page
      // callback functions must be setup and uniquely named for each
      function loadJSONP(url, callback, context) {
          var unique = Math.floor((Math.random()*10000000) + 1);
          // INIT
          var name = "_" + gfyId + "_" + unique++;
          if (url.match(/\?/)) url += "&callback=" + name;
          else url += "?callback=" + name;

          // Create script
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = url;

          // Setup handler
          window[name] = function (data) {
              callback.call((context || window), data);
              document.getElementsByTagName('head')[0].removeChild(script);
              script = null;
              try {
                  delete window[name];
              } catch (e) {}
          };

          // Load JSON
          document.getElementsByTagName('head')[0].appendChild(script);
      }

      function setSize() {
          gfyWidth = vid.offsetWidth;
          gfyHeight = vid.offsetHeight;
          // vid.videoWidth is the native size of the video. This stays the same even if the element is resized.
          // if optExpand is not set, then the video will never expand larger than videoWidth, so we need to choose this.
          if (!optExpand && gfyWidth > vid.videoWidth) {
              gfyWidth = vid.videoWidth;
              gfyHeight = vid.videoHeight;
          }
          overlayCanvas.width = gfyWidth;
          overlayCanvas.height = gfyHeight;
          // subtract padding of titleDiv
          titleDiv.style.width = gfyWidth - 20 + 'px';
      }

      function vidLoaded() {
          setSize();
          if (!ctrlBox) {
              createCtrlBox();
          }
          if (!optAutoplay && !isMobile)
              drawPlayOverlay();
      }

      function clearPlayOverlay() {
          var ctx = overlayCanvas.getContext("2d");
          if (gfyWidth)
              ctx.clearRect(0, 0, gfyWidth, gfyHeight);
      }
      // When video is set to load paused, or when no playback controls are present, show a large Play button overlay.
      function drawPlayOverlay() {
          var ctx = overlayCanvas.getContext("2d");
          ctx.clearRect(0, 0, gfyWidth, gfyHeight);
          ctx.strokeStyle = "#ffffff";
          ctx.fillStyle = "#ffffff";
          ctx.lineWidth = 5;
          var pWidth = 70;
          var pHeight = 80;
          var pRad = 5;
          if (gfyHeight < 160 || gfyWidth < 200) {
              pHeight = pHeight * gfyHeight / 240;
              pWidth = pWidth * gfyHeight / 240;
              pRad = 3;
          }
          drawPolygon(ctx, [
              [gfyWidth / 2 - pWidth / 2, gfyHeight / 2 - pHeight / 2],
              [gfyWidth / 2 + pWidth / 2, gfyHeight / 2],
              [gfyWidth / 2 - pWidth / 2, gfyHeight / 2 + pHeight / 2]
          ], pRad);
          ctx.stroke();
          ctx.fill();
      }

      function drawPolygon(ctx, pts, radius) {
          if (radius > 0) {
              pts = getRoundedPoints(pts, radius);
          }
          var i, pt, len = pts.length;
          ctx.beginPath();
          for (i = 0; i < len; i++) {
              pt = pts[i];
              if (i == 0) {
                  ctx.moveTo(pt[0], pt[1]);
              } else {
                  ctx.lineTo(pt[0], pt[1]);
              }
              if (radius > 0) {
                  ctx.quadraticCurveTo(pt[2], pt[3], pt[4], pt[5]);
              }
          }
          ctx.closePath();
      }

      function getRoundedPoints(pts, radius) {
          var i1, i2, i3, p1, p2, p3, prevPt, nextPt,
              len = pts.length,
              res = new Array(len);
          for (i2 = 0; i2 < len; i2++) {
              i1 = i2 - 1;
              i3 = i2 + 1;
              if (i1 < 0) {
                  i1 = len - 1;
              }
              if (i3 == len) {
                  i3 = 0;
              }
              p1 = pts[i1];
              p2 = pts[i2];
              p3 = pts[i3];
              prevPt = getRoundedPoint(p1[0], p1[1], p2[0], p2[1], radius, false);
              nextPt = getRoundedPoint(p2[0], p2[1], p3[0], p3[1], radius, true);
              res[i2] = [prevPt[0], prevPt[1], p2[0], p2[1], nextPt[0], nextPt[1]];
          }
          return res;
      };

      function getRoundedPoint(x1, y1, x2, y2, radius, first) {
          var total = Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2)),
              idx = first ? radius / total : (total - radius) / total;
          return [x1 + (idx * (x2 - x1)), y1 + (idx * (y2 - y1))];
      };

      function setCtrlsPaused() {
          if (!optCtrls) {
              drawPlayOverlay();
              return;
          }
          ctrlPausePlay.style.backgroundPosition = '-71px 0';
          ctrlSlower.style.backgroundPosition = '0 0';
          ctrlSlower.style.marginLeft = "6px";
          ctrlFaster.style.backgroundPosition = '-192px 0';
          ctrlFaster.style.width = "8px";
          ctrlFaster.onclick = stepForward;
          ctrlSlower.onclick = stepBackward;
      }

      function setCtrlsPlaying() {
          clearPlayOverlay();
          if (!optCtrls)
              return;
          ctrlPausePlay.style.backgroundPosition = '-95px 0';
          ctrlFaster.style.backgroundPosition = '-20px 0';
          ctrlSlower.style.backgroundPosition = '-165px 0';
          ctrlFaster.style.width = "14px";
          ctrlSlower.style.marginLeft = "0px";
          ctrlFaster.onclick = faster;
          ctrlSlower.onclick = slower;
      }

      function pauseClick() {
          if (vid.paused) {
              vid.play();
              setCtrlsPlaying();
          } else {
              vid.pause();
              setCtrlsPaused();
          }
      }

      function gfyMouseOver() {
          if (!optTitle || !gfyItem.title)
              return;
          titleDiv.style.display = 'block';
      }

      function gfyMouseOut() {
          if (!optTitle)
              return;
          titleDiv.style.display = 'none';
      }

      function reverse() {
          // Change controls over: reverse button to forward, and slower/faster to step forward/step back.
          ctrlPausePlay.style.backgroundPosition = '-95px 0';
          ctrlSlower.style.backgroundPosition = '0 0';
          ctrlSlower.style.marginLeft = "6px";
          ctrlFaster.style.backgroundPosition = '-192px 0';
          ctrlFaster.style.width = "8px";
          ctrlFaster.onclick = stepForward;
          ctrlSlower.onclick = stepBackward;
          vid.pause();
          // Swap video source tags for reverse encoded files
          var mp4src = byClass("mp4source", vid)[0];
          var webmsrc = byClass("webmsource", vid)[0];
          if (isReverse) {
              mp4src.src = mp4src.src.replace(/-reverse\.mp4/g, ".mp4");
              mp4src.src = mp4src.src.replace(/-reverse\.webm/g, ".webm");
              webmsrc.src = webmsrc.src.replace(/-reverse\.webm/g, ".webm");
              ctrlReverse.style.backgroundPosition = '-46px 0';
              isReverse = false;
          } else {
              mp4src.src = mp4src.src.replace(/\.mp4/g, "-reverse.mp4");
              mp4src.src = mp4src.src.replace(/\.webm/g, "-reverse.webm");
              webmsrc.src = webmsrc.src.replace(/\.webm/g, "-reverse.webm");
              ctrlReverse.style.backgroundPosition = '-141px 0';
              isReverse = true;
          }
          vid.playbackRate = 1;
          vid.load();
          vid.play();
      }

      function slower() {
          if (vid.playbackRate <= 1)
              vid.playbackRate = vid.playbackRate / 2;
          else
              vid.playbackRate--;
      }

      function faster() {
          if (vid.playbackRate <= 1) {
              vid.playbackRate = vid.playbackRate * 2;
          } else {
              vid.playbackRate++;
          }
      }

      function stepForward() {
          if (window.opera) {
              var storeFunc = vid.onplay;
              vid.onplay = function () {
                  vid.pause();
                  vid.onplay = storeFunc;
              };
              vid.play();
          } else {
              vid.currentTime += (1 / gfyFrameRate);
          }
      }

      function stepBackward() {
          vid.currentTime -= (1 / gfyFrameRate);
      }

      function refresh() {
          vid.load();
          vid.play();
      }

      function getFrame() {
          return currentFrame;
      }

      return {
          init: init,
          refresh: refresh,
          getFrame: getFrame,
          getElem: gfyElem
      }
  };

  /* Wrap an existing node in an SVG.js element. This is a slight hack
   * because svg.js does not (in general) provide a way to create an
   * Element of a specific type (eg SVG.Ellipse, SVG.G, ...) from an
   * existing node and still call the Element's constructor.
   *
   * So instead, we call the Element's constructor and delete the node
   * it created (actually, just leaving it to garbage collection, since it
   * hasn't been inserted into the doc yet), replacing it with the given node.
   *
   * Returns the newly created SVG.Element instance.
   */

  SVG.wrap = function(node) {
      if (node.length) node = node[0]; // Allow using with or without jQuery selections
      
      try {
          var element = new SVG(node);
      } catch(e) {
          throw("No such SVG type '" + node + "'");
      }
      
      element.node = node;
      
      return element;
  };

  /**
   * Creates controller animation on selected div
   * @param  {json} frameData [description]
   * @return {void}
   */
  
	$.fn.frameinputs = function ( frameData ) {
    var $this = $(this);
    var svgGC = SVG( $this[0] );

    //A Button
    var $btnA = $this.find( '.button-a .core' );
    var svgBtnA = SVG.wrap( $btnA[0] );
    svgBtnA.active = function() {
      this.fill({color: '#00BC8E', opacity: 1});
    }
    
    svgBtnA.inactive = function() {
      this.fill({color: '#6D998B', opacity: 1});
    }

    //B Button
    var $btnB = $this.find( '.button-b .core' );
    var svgBtnB = SVG.wrap( $btnB[0] );
    svgBtnB.active = function() {
      this.fill({color: '#FF0000', opacity: 1});
    }

    svgBtnB.inactive = function() {
      this.fill({color: '#996D6D', opacity: 1});
    }

    //Y Button
    var $btnY = $this.find( '.button-y .core' );
    var svgBtnY = SVG.wrap( $btnY[0] );
    svgBtnY.active = function() {
      this.fill({color: '#EAEAEA', opacity: 1});
    }

    svgBtnY.inactive = function() {
      this.fill({color: '#999999', opacity: 1});
    }

    //X Button
    var $btnX = $this.find( '.button-x .core' );
    var svgBtnX = SVG.wrap( $btnX[0] );
    svgBtnX.active = function() {
      this.fill({color: '#EAEAEA', opacity: 1});
    }

    svgBtnX.inactive = function() {
      this.fill({color: '#999999', opacity: 1});
    }

    //L Button
    var $btnL = $this.find( '.button-l .core' );
    var svgBtnL = SVG.wrap( $btnL[0] );
    svgBtnL.active = function() {
      this.fill({color: '#EAEAEA', opacity: 1});
    }

    svgBtnL.inactive = function() {
      this.fill({color: '#999999', opacity: 1});
    }

    //R Button
    var $btnR = $this.find( '.button-r .core' );
    var svgBtnR = SVG.wrap( $btnR[0] );
    svgBtnR.active = function() {
      this.fill({color: '#EAEAEA', opacity: 1});
    }

    svgBtnR.inactive = function() {
      this.fill({color: '#999999', opacity: 1});
    }

    //Z Button
    var $btnZ = $this.find( '.button-z .core' );
    var svgBtnZ = SVG.wrap( $btnZ[0] );
    svgBtnZ.active = function() {
      this.fill({color: '#5600AE', opacity: 1});
    }

    svgBtnZ.inactive = function() {
      this.fill({color: '#8E79AD', opacity: 1});
    }

    var $ctrlStick = $this.find( '.controlstick-stick' );
    var svgCtrlStick = SVG.wrap( $ctrlStick[0] );

    svgCtrlStick.stickmove = function( angle, percent ) {
      //Perc  = Percentage of Strength * 115
      //Rad   = Radians of Stick Direction
      //x     = r sin(Rad)
      //y     = r cos(Rad)
      function getRadius ( percent ) {
        return ( percent / 100 ) * 115;
      }

      function toRadians ( angle ) {
        return angle * ( Math.PI / 180 );
      }

      var radians = toRadians ( angle );
      var radius = getRadius( percent );

      function getCoordX ( radians, radius ) {
        return radius * Math.cos( radians );
      }

      function getCoordY ( radians, radius ) {
        return radius * Math.sin( radians );
      }

      var x = getCoordX( radians, radius );
      var y = -1 * getCoordY( radians, radius );

      this.translate( x, y );
    }

    function revertController () {
      svgBtnA.inactive();
      svgBtnB.inactive();
      svgBtnY.inactive();
      svgBtnX.inactive();
      svgBtnL.inactive();
      svgBtnR.inactive();
      svgBtnZ.inactive();
      svgCtrlStick.stickmove( 0, 0 );
    }

    //Need to recreate frameData object...
    var frameAnimations = [];

    for ( var i = 0; i < frameData.length; i++ ) {
      var tempFrame = {};

      //Add Frame
      tempFrame.frame = frameData[i].frame;

      //Add Buttons
      if ( frameData[i].buttons.length ) {
        tempFrame.buttons = [];
        var frameButtons = frameData[i].buttons;
        for (var j = 0; j < frameButtons.length; j++) {
          switch ( frameButtons[j] ) {
            case 'a':
              tempFrame.buttons.push(svgBtnA);
              break;
            
            case 'b':
              tempFrame.buttons.push(svgBtnB);
              break;
            
            case 'y':
              tempFrame.buttons.push(svgBtnY);
              break;
            
            case 'x':
              tempFrame.buttons.push(svgBtnX);
              break;
            
            case 'l':
              tempFrame.buttons.push(svgBtnL);
              break;
            
            case 'r':
              tempFrame.buttons.push(svgBtnR);
              break;
            
            case 'z':
              tempFrame.buttons.push(svgBtnZ);
              break;
          }
        };
      }

      //Add Control Stick Method
      if ( frameData[i].ctrlStick.length ) {
        tempFrame.angle = frameData[i].ctrlStick[0];
        tempFrame.percent = frameData[i].ctrlStick[1];
        tempFrame.ctrlStick = function() {
          svgCtrlStick.stickmove( this.angle, this.percent );
        }
      }

      frameAnimations.push(tempFrame);
    };

    //gfyCat Element
    var gfyEl = document.getElementById( $this.data( 'target' ) );

    //new gfyObject
    var gfyObj = new gfyObject( gfyEl );

    //callback function for 'frameTick' event
		function tick( event ) {
      revertController();
			for ( var i = 0; i < frameAnimations.length; i++ ) {
        if ( event.detail == frameAnimations[i].frame ) {
          if ( frameAnimations[i].buttons ) {
            console.log(frameAnimations[i].buttons);
            for (var j = 0; j < frameAnimations[i].buttons.length; j++) {
              console.log(frameAnimations[i].buttons[j]);
              frameAnimations[i].buttons[j].active();
            };
          }

          if ( frameAnimations[i].ctrlStick ) {
            frameAnimations[i].ctrlStick();
          }
        }
      };
		};

    //initialize gfyObject
    gfyObj.init();

		gfyEl.addEventListener('frameTick', tick, false);
	};

}( jQuery, SVG ));