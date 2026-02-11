<aside class="side">
    <div class="brand">
      <div class="logoDot" aria-hidden="true"></div>
      <div>
        <div class="brandTitle">CMS Panel</div>
        <div class="brandSub">© 2026 DB Panel</div>
      </div>
    </div>

<div class="nav" role="navigation" aria-label="Sections">

  <form method="get">
    <input type="hidden" name="page" value="hero">
    <button type="submit" class="navBtn <?= $page === 'hero' ? 'active' : '' ?>">
      <span>Hero</span>
      <span class="navMeta"><span class="pill">Text + Image</span></span>
    </button>
  </form>

  <form method="get">
    <input type="hidden" name="page" value="bignews">
    <button type="submit" class="navBtn <?= $page === 'bignews' ? 'active' : '' ?>">
      <span>Big News</span>
      <span class="navMeta"><span class="pill">3 items</span></span>
    </button>
  </form>

  <form method="get">
    <input type="hidden" name="page" value="activities">
    <button type="submit" class="navBtn <?= $page === 'activities' ? 'active' : '' ?>">
      <span>Kegiatan</span>
      <span class="navMeta"><span class="pill">6 items</span></span>
    </button>
  </form>

  <form method="get">
    <input type="hidden" name="page" value="sponsors">
    <button type="submit" class="navBtn <?= $page === 'sponsors' ? 'active' : '' ?>">
      <span>Sponsor</span>
      <span class="navMeta"><span class="pill">16 logos</span></span>
    </button>
  </form>

  <form method="get">
    <input type="hidden" name="page" value="about">
    <button type="submit" class="navBtn <?= $page === 'about' ? 'active' : '' ?>">
      <span>About</span>
      <span class="navMeta"><span class="pill">Sejarah / Visi / Organisasi</span></span>
    </button>
  </form>

  <form method="get">
    <input type="hidden" name="page" value="members">
    <button type="submit" class="navBtn <?= $page === 'members' ? 'active' : '' ?>">
      <span>Anggota</span>
      <span class="navMeta"><span class="pill">Logo + Detail</span></span>
    </button>
  </form>

  <form method="get">
    <input type="hidden" name="page" value="programs">
    <button type="submit" class="navBtn <?= $page === 'programs' ? 'active' : '' ?>">
      <span>Program Kerja</span>
      <span class="navMeta"><span class="pill">Foto & Detail</span></span>
    </button>
  </form>

  <form method="get">
    <input type="hidden" name="page" value="westjavacorner">
    <button type="submit" class="navBtn <?= $page === 'westjavacorner' ? 'active' : '' ?>">
      <span>News Content</span>
      <span class="navMeta"><span class="pill">News + Shorts</span></span>
    </button>
  </form>

  <form method="get">
    <input type="hidden" name="page" value="events">
    <button type="submit" class="navBtn <?= $page === 'events' ? 'active' : '' ?>">
      <span>Event</span>
      <span class="navMeta"><span class="pill">Events + Header</span></span>
    </button>
  </form>

  <form method="get">
    <input type="hidden" name="page" value="clubs">
    <button type="submit" class="navBtn <?= $page === 'clubs' ? 'active' : '' ?>">
      <span>Profile</span>
      <span class="navMeta"><span class="pill">Header + Slider + Clubs</span></span>
    </button>
  </form>

  <form method="get">
    <input type="hidden" name="page" value="gallery">
    <button type="submit" class="navBtn <?= $page === 'gallery' ? 'active' : '' ?>">
      <span>Gallery</span>
      <span class="navMeta"><span class="pill">10 items × 10 photos</span></span>
    </button>
  </form>

  <form method="get">
    <input type="hidden" name="page" value="archives">
    <button type="submit" class="navBtn <?= $page === 'archives' ? 'active' : '' ?>">
      <span>Archives</span>
      <span class="navMeta"><span class="pill">Accordion + PDF links</span></span>
    </button>
  </form>

</div>


    <div class="sideFoot">
      <a class="btn" href="logout.php">Logout</a>
      <a class="btn" href="/" target="_blank" rel="noopener">Open Site</a>
    </div>
  </aside>