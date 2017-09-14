<nav class="navbar navbar-toggleable-md navbar-light bg-faded mb-2">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Quality Assurance</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item @yield('uploadActive')">
        <a class="nav-link" href="/campaign">Upload <span class="sr-only"></span></a>
      </li>
      <li class="nav-item @yield('allCampaignsActive')">
        <a class="nav-link" href="/">All Campaigns <span class="sr-only"></span></a>
      </li>
    </ul>
  </div>
</nav>