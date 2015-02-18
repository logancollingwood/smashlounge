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
    <div class="navbar-right dropdown submit-wrapper">
      <a class='btn btn-navbar navbar-btn dropdown-toggle' data-toggle="dropdown" href="#">submit</a>
      <div class="dropdown-menu" role="menu">
        <form class="form">
          <!-- Potentially Use the following hidden fields -->
          <input type="hidden" name="pageid" value="" />
          <input type="hidden" name="dataid" value="" />
          <fieldset>
            <label for="url">GfyCat URL</label>
            <input type="text" class="form-control" name="url" placeholder="gfycat.com/AcceptableWelllitFruitbat"/>
          </fieldset>
          <fieldset>
            <label for="source">Original Source</label>
            <input type="text" class="form-control" maxlength="100" name="source" placeholder="Big House 4"/>
          </fieldset>
          <fieldset>
            <label for="description">Description</label>
            <input type="text" class="form-control" maxlength="100" name="description" placeholder="Mew2King Ken Comboes a Scrub"/>
          </fieldset>
          <button class="btn btn-default post-submissions">submit</button>
        </form>
      </div>
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


      </ul>
    </div>
  </div>
</div>
<style>
  .btn-navbar {
    margin-left: 1em;
    margin-right: 1em;
    padding: 2px 12px;
    font-size: 20px;
    color: #FFF;
    background: #007E8E;
  }

  .btn-navbar:hover,
  .btn-navbar:active,
  .btn-navbar:focus {
    color: #FFF;
  }

  .navbar .heddur:hover .submit-wrapper {
    color: #FFF;
  }

  .submit-wrapper .dropdown-menu {
    background: #0097a7;
  }

  .submit-wrapper form {
    padding: 1em 2em;
    min-width: 320px;
  }

  .submit-wrapper fieldset {
    margin-bottom: 1.5em;
  }

  .submit-wrapper label,
  .submit-wrapper input {
    text-align: center;
  }

  .submit-wrapper .btn-default {
    color: #FFF;
    background: #007E8E;
  }
</style>