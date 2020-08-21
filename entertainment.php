
  <?php include'header.php'?>
  <!-- end -->
  <blockquote class="blockquote text-center">
    <h3 class="mb-0">List of Game of the Year awards</h3>
    <footer class="blockquote-footer">Sekiro™: Shadows Die Twice, STAR WARS™: The Old Republic™, Creaks <cite
        title="Source Title">and more epic games</cite></footer>
  </blockquote>
  <hr>
  <div class="container-fluid">
    <div class="row">
      <!-- lsidebar -->
      <?php include'lsidebar.php'?>
      <!-- end -->
      <!-- container -->
      <div class="col-sm-6 mx-0 px-0">
        <div class="card mb-2" id="sekiro">
          <img src="https://steamcdn-a.akamaihd.net/steam/apps/814380/header.jpg?t=1589483460" class="card-img-top"
            alt="...">
          <div class="card-body">
            <h5 class="card-title">Sekiro™: Shadows Die Twice</h5>
            <p class="card-text">In Sekiro: Shadows Die Twice you are the "one-armed wolf", a disgraced and disfigured
              warrior rescued from the brink of death. Bound to protect a young lord who is the descendant of an ancient
              bloodline, you become the target of many vicious enemies, including the dangerous Ashina clan. When the
              young lord is captured, nothing will stop you on a perilous quest to regain your honor, not even death
              itself.
            </p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago<a href="#">Here</a> to see
                details</small></p>
          </div>
        </div>
        <div class="card mb-2" id="starwars">
          <img src="https://steamcdn-a.akamaihd.net/steam/apps/1286830/header.jpg?t=1595431446" class="card-img-top"
            alt="...">
          <div class="card-body">
            <h5 class="card-title">STAR WARS™: The Old Republic™</h5>
            <p class="card-text">STAR WARS™: The Old Republic™ is the only massively multiplayer online game with a
              Free-to-Play option that puts you at the center of your own story-driven STAR WARS™ saga. Play as a Jedi,
              a Sith, a Bounty Hunter, or as one of many other iconic Star Wars roles and explore the galaxy far, far
              away over three thousand years before the classic films. With 5 narrative expansions, become the hero of
              your own STAR WARS adventure as you choose your path down the Light or Dark side of the Force™.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card mb-2" id="creaks">
          <img src="https://steamcdn-a.akamaihd.net/steam/apps/956030/header.jpg?t=1595430023" class="card-img-top"
            alt="...">
          <div class="card-body">
            <h5 class="card-title">Creaks</h5>
            <p class="card-text">The ground starts shaking, light bulbs are breaking - and something rather unusual is
              happening right behind the walls of your very room. Equipped with nothing but wit and courage, you slowly
              descend into a world inhabited by avian folk and seemingly deadly furniture monsters.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <nav aria-label="...">
          <ul class="pagination">
            <li class="page-item disabled">
              <span class="page-link">Previous</span>
            </li>
            <li class="page-item active" aria-current="page">
              <a class="" href="#sekiro">
              <span class="page-link">
                1
                <span class="sr-only">(current)</span>
              </span>
            </a>
            </li>
            <li class="page-item"><a class="page-link" href="#starwars">2</a></li>
            <li class="page-item"><a class="page-link" href="#creaks">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- end -->
      <!-- rsidebar -->
      <?php include'rsidebar.php'?>
      <!-- end -->
    </div>
    <!-- footer -->
    <?php include'footer.php'?>
  <!-- end -->
</body>

</html>