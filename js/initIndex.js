// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {
  var id = getRandomVod();
  player = new YT.Player('player', {
    height: '390',
    width: '640',
    videoId: id,
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}
var vods = ['iNjzXdPj0s8', 'MCcJ8QPW3wA', 'CjlMagFQNCE', '5Y0opIt4nqc', 'IpIWmRev2fw', '1LUBCbqAK5g', '-kFClkXgfUs', '2TqKzVDb7pE', '2TqKzVDb7pE', 'pM13h34KUCg', 'IY2pTqKz36c', '6QKRlmzCOUI', 'xXrErJsA4ck', 'JTABgDjRnA0', 'kVO3YZh1KXs', 'HDGBYiErj9M'];
var index = 0;

function getRandomVod() {
  if (index >= vods.length) index = 0;
  var vodID = vods[index];
  index++;
  return vodID;
}
// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  //event.target.playVideo();
  $("#vod").fitVids();
  player.setPlaybackQuality('hd720');
}

function playNewVideo() {
  var id = getRandomVod();
  player.loadVideoById(id);
  player.setPlaybackQuality('hd720');
}

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
var done = false;
function onPlayerStateChange(event) {
  if (event.data == YT.PlayerState.PLAYING && !done) {
    setTimeout(stopVideo, 6000);
    done = true;
  }
}
function stopVideo() {
  player.stopVideo();
}

$(document).ready(function(){
  // Target your .container, .wrapper, .post, etc.
  $(document).on("click", "#newVod", function(e) {
    playNewVideo();
  });

  $('.expander').css({'overflow':'auto'});
  /*
  $(".expander").mCustomScrollbar({
    theme: "light-thin",
    scrollButtons: {enable:true},
  });
  */
  $('.videocontainer').fitVids();
  
  $('[data-toggle=offcanvas]').click(function() {
      $(this).toggleClass('visible-xs text-center');
      $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
      $('.row-offcanvas').toggleClass('active');
      $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
      $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
      $('#btnShow').toggle();
  });    
});