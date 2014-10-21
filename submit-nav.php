<div class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
  <div class='container-fluid heddur'>
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='navbar-brand heddur' href='/'>smash lounge&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-gamepad fa-1x'></i></a>
    </div>
    <div class='navbar-collapse collapse'>
      <ul class='nav navbar-nav navbar-right'>
          <li><a href='https://www.twitter.com/thesmashlounge'><i class='fa fa-twitter'></i></a></li>
          <li><a href='https://www.facebook.com/SmashLounge'><i class='fa fa-facebook'></i></a></li>
          <li><a href='http://www.reddit.com/r/smashlounge'><i class='fa fa-reddit'></i></a></li>
          <li><a href='http://www.github.com/logancollingwood/smashlounge'><i class='fa fa-github-alt'></i></a></li>
          <li><a href='/api/docs'>api</a></li>
          <li><a href='/donate.php'>donate</a></li>
          <li><a href='/about.html'>about</a></li>
            <?php if ($extra == 'logout'): ?>
              <li><a href='static/logout.php'>logout</a></li>
            <?php else if ($extra =='register'): ?>
              <li><a href='/register'>register</a></li>
            <?php else if ($extra == 'update'): ?>
              <li><a href='/update'>update</a></li>
            <?php endif; ?>
      </ul>
    </div>
  </div>
</div>