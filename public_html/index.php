<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rayterton Academy — Training & Certification</title>
  <meta name="description" content="Rayterton Academy: IT, Business/Finance/Economy, dan Entrepreneurship/Leadership/Management training. Daftar kelas, jadwal terdekat, dan pendaftaran online.">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    :root{
      --brand:#00b4cc;
      --brand-dark:#0096ab;
      --ink:#0f172a;
      --muted:#667085;
      --bg:#f5f8fb;
      --card:#ffffff;
      --accent:#004080;
      --radius:18px;
      --shadow:0 14px 30px rgba(2,13,33,.12);
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{margin:0;font-family:ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Arial;background:var(--bg);color:var(--ink)}
    a{color:var(--accent);text-decoration:none}
    a:hover{text-decoration:underline}
    /* Appbar */
    .appbar{
      position:sticky;top:0;z-index:1000;
      backdrop-filter:saturate(180%) blur(8px);
      background:rgba(255,255,255,.85);
      border-bottom:1px solid rgba(2,13,33,.06);
    }
    .brand{display:flex;gap:10px;align-items:center;text-decoration:none}
    .brand img{height:36px;width:auto}
    .brand .title{font-weight:800;color:var(--ink);letter-spacing:.2px}
    .nav-link{font-weight:600;color:var(--ink)!important;opacity:.85}
    .nav-link:hover{opacity:1}
    .btn-cta{background:var(--brand);color:#fff!important;border:0;border-radius:999px;padding:.6rem 1rem;font-weight:700}
    .btn-cta:hover{background:var(--brand-dark)}
    /* Hero */
    .hero{position:relative;isolation:isolate}
    .hero video{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;opacity:.28;z-index:-1}
    .hero .overlay{background:linear-gradient(180deg,rgba(255,255,255,.7),rgba(245,248,251,.95));position:absolute;inset:0;z-index:-1}
    .hero .content{padding:clamp(48px,10vw,120px) 0}
    .kicker{display:inline-flex;gap:8px;align-items:center;background:#fff;border:1px solid #e7eef7;
      padding:6px 12px;border-radius:999px;font-size:13px;color:#2f3a4a;box-shadow:0 4px 12px rgba(0,0,0,.05)}
    .hero h1{font-size:clamp(28px,4vw,44px);line-height:1.15;font-weight:900;margin:.6rem 0 1rem;color:#081a36}
    .hero p{font-size:clamp(15px,1.5vw,18px);color:var(--muted);max-width:880px}
    .hero .actions{display:flex;gap:12px;flex-wrap:wrap;margin-top:18px}
    .btn-ghost{background:#fff;border:1px solid #d9e4f1;border-radius:999px;padding:.6rem 1rem;font-weight:700;color:#0f172a}
    .btn-ghost:hover{background:#f6f9fd}
    /* Counters */
    .counters{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
    .counter{background:var(--card);border-radius:var(--radius);padding:20px;box-shadow:var(--shadow)}
    .counter .num{font-weight:900;font-size:clamp(24px,3vw,32px);color:var(--accent)}
    .counter .lbl{color:var(--muted);font-weight:600}
    @media (max-width: 900px){ .counters{grid-template-columns:repeat(2,1fr)} }
    /* Category cards */
    .section{padding:clamp(48px,8vw,80px) 0}
    .section h2{font-weight:900;margin-bottom:10px}
    .section p.lead{color:var(--muted);max-width:860px}
    .cat-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:24px}
    .cat{background:linear-gradient(180deg,#fff, #f8fbff);border:1px solid #e7eef7;border-radius:20px;overflow:hidden;
      transition:.2s transform, .2s box-shadow; box-shadow:0 10px 20px rgba(2,13,33,.06)}
    .cat:hover{transform:translateY(-2px);box-shadow:0 18px 34px rgba(2,13,33,.12)}
    .cat .art{height:120px;background:radial-gradient(120px 60px at 10% 20%,rgba(0,180,204,.25),transparent),
                                 radial-gradient(140px 60px at 90% 40%,rgba(0,64,128,.25),transparent);
      display:flex;align-items:center;justify-content:center}
    .cat .art i{font-size:38px;color:#083a66}
    .cat .body{padding:18px}
    .cat .body h3{font-weight:800;margin:0 0 6px}
    .cat .body p{color:var(--muted);margin:0 0 14px}
    .cat .body .actions{display:flex;gap:8px}
    /* Featured classes */
    .cards{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:18px}
    .cardx{background:#fff;border:1px solid #e7eef7;border-radius:18px;overflow:hidden;box-shadow:0 12px 24px rgba(2,13,33,.08)}
    .cardx img{width:100%;height:168px;object-fit:cover}
    .cardx .bx{padding:16px}
    .badge-soft{background:rgba(0,180,204,.12);color:#045866;border:1px solid rgba(0,180,204,.2);
      padding:4px 10px;border-radius:999px;font-weight:700;font-size:12px}
    .cardx h4{font-weight:900;margin:10px 0 6px}
    .cardx p{color:var(--muted);margin:0 0 12px}
    .cardx .meta{display:flex;gap:10px;align-items:center;color:#475569;font-weight:600;font-size:14px}
    .cardx .meta i{font-size:16px}
    .cardx .actions{display:flex;gap:8px;margin-top:12px}
    @media (max-width: 1100px){ .cards{grid-template-columns:repeat(2,1fr)} }
    @media (max-width: 720px){ .cards{grid-template-columns:1fr} .cat-grid{grid-template-columns:1fr} }
    /* Schedule */
    .schedule{background:linear-gradient(180deg,#e9f7fa,#ffffff)}
    .sch-list{margin-top:14px}
    .sch-item{display:flex;gap:12px;align-items:center;background:#fff;border:1px solid #d9eef3;border-radius:14px;padding:12px 14px;margin-bottom:10px}
    .sch-date{min-width:80px;text-align:center}
    .sch-date .d{font-size:20px;font-weight:900;color:#064b63;line-height:1}
    .sch-date .m{font-size:13px;font-weight:800;color:#0f172a;opacity:.6}
    .sch-title{flex:1}
    .sch-title .t{font-weight:800}
    .sch-title .s{color:var(--muted);font-size:14px}
    /* Promo */
    .promo{background:#081a36;color:#e6f7fb;border-radius:18px;padding:18px 20px;display:flex;gap:16px;align-items:center}
    .promo .big{font-weight:900;font-size:28px;line-height:1.1}
    .promo .desc{opacity:.9}
    @media (max-width: 820px){ .promo{flex-direction:column;text-align:center} }
    /* Footer */
    footer{background:#061529;color:#d3e7f0;padding:40px 0;margin-top:28px}
    .fbrand{display:flex;gap:10px;align-items:center}
    .fbrand img{height:32px}
    .fnav a{color:#d3e7f0;opacity:.9}
    .fnav a:hover{opacity:1}
  </style>
</head>
<body>

  <!-- Appbar -->
  <nav class="appbar py-2">
    <div class="container d-flex align-items-center justify-content-between">
      <a class="brand" href="#top">
        <img src="rayterton-academy-logo-black.png" alt="Rayterton Logo">
      </a>
      <ul class="nav d-none d-md-flex">
        <li class="nav-item"><a class="nav-link" href="#categories">Kategori</a></li>
        <li class="nav-item"><a class="nav-link" href="#featured">Kelas</a></li>
        <li class="nav-item"><a class="nav-link" href="#schedule">Jadwal</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
      </ul>
      <div class="d-flex align-items-center gap-2">
        <a class="btn-ghost d-none d-md-inline-block" href="#catalog">Lihat Katalog</a>
        <a class="btn-cta" href="#register">Daftar Sekarang</a>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero" id="top">
    <div class="overlay"></div>
    <video autoplay muted loop playsinline>
      <source src="assets/video/hero-learning.mp4" type="video/mp4">
    </video>
    <div class="container content">
      <span class="kicker"><i class="bi bi-lightning-charge-fill"></i> 100% Custom-fit Training</span>
      <h1>Level up tim Anda dengan kurikulum praktis yang selaras dengan proyek nyata</h1>
      <p>Rayterton Academy menghadirkan pelatihan intensif untuk IT, Business/Finance/Economy, serta Entrepreneurship, Leadership, dan Management. Kurikulum dapat dikustomisasi agar sesuai kebutuhan perusahaan. Pendaftaran online, jadwal terdekat, dan dukungan pasca kelas tersedia.</p>
      <div class="actions">
        <a href="#featured" class="btn-cta"><i class="bi bi-collection me-1"></i> Telusuri Kelas Populer</a>
        <a href="#schedule" class="btn-ghost"><i class="bi bi-calendar-event me-1"></i> Lihat Jadwal Terdekat</a>
        <a href="#contact" class="btn-ghost"><i class="bi bi-telephone me-1"></i> Konsultasi Dengan Kami</a>
      </div>
      <div class="counters mt-4">
        <div class="counter">
          <div class="num">22+ tahun</div>
          <div class="lbl">Pengalaman</div>
        </div>
        <div class="counter">
          <div class="num">70+ modul</div>
          <div class="lbl">Software Rayterton</div>
        </div>
        <div class="counter">
          <div class="num">10+ trainer</div>
          <div class="lbl">Berpengalaman</div>
        </div>
        <div class="counter">
          <div class="num">5,000+</div>
          <div class="lbl">Alumni & peserta</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Categories -->
  <section class="section" id="categories">
    <div class="container">
      <h2>Kategori Utama</h2>
      <p class="lead">Pilih jalur yang paling relevan untuk tim Anda. Setiap kategori dapat disesuaikan dengan studi kasus perusahaan.</p>
      <div class="cat-grid">
        <article class="cat">
          <div class="art"><i class="bi bi-laptop"></i></div>
          <div class="body">
            <h3>IT</h3>
            <p>Fullstack, DevOps, Cloud, Data, AI, Cybersecurity, dan banyak lagi.</p>
            <div class="actions">
              <a class="btn-cta" href="#featured">Lihat Kelas</a>
              <a class="btn-ghost" href="#register">Minta Saran</a>
            </div>
          </div>
        </article>
        <article class="cat">
          <div class="art"><i class="bi bi-cash-coin"></i></div>
          <div class="body">
            <h3>Business, Finance, Economy</h3>
            <p>Corporate finance, budgeting, analytics, compliance, IFRS, dan operasional.</p>
            <div class="actions">
              <a class="btn-cta" href="#featured">Lihat Kelas</a>
              <a class="btn-ghost" href="#register">Minta Saran</a>
            </div>
          </div>
        </article>
        <article class="cat">
          <div class="art"><i class="bi bi-people"></i></div>
          <div class="body">
            <h3>Entrepreneurship, Leadership, Management</h3>
            <p>Strategi bisnis, kepemimpinan, manajemen operasional, dan culture building.</p>
            <div class="actions">
              <a class="btn-cta" href="#featured">Lihat Kelas</a>
              <a class="btn-ghost" href="#register">Minta Saran</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Featured classes -->
  <section class="section" id="featured">
    <div class="container">
      <div class="d-flex align-items-end justify-content-between gap-2 flex-wrap">
        <div>
          <h2>Kelas Populer</h2>
          <p class="lead">Contoh pilihan kelas yang tersedia saat ini. Silakan minta katalog lengkap.</p>
        </div>
        <a class="btn-ghost" id="catalog" href="#register"><i class="bi bi-download me-1"></i> Minta Katalog PDF</a>
      </div>

      <div class="cards">
        <article class="cardx">
          <img src="assets/img/React.jpg" alt="Fullstack React Node PostgreSQL">
          <div class="bx">
            <span class="badge-soft">IT</span>
            <h4>Fullstack React, Node, Redis & PostgreSQL</h4>
            <p>Membangun aplikasi enterprise lengkap dengan autentikasi, CRUD, caching, dan deployment.</p>
            <div class="meta"><i class="bi bi-clock"></i> 3 hari • <i class="bi bi-bar-chart"></i> Intermediate</div>
            <div class="actions">
              <a class="btn-cta" href="#register">Daftar</a>
              <a class="btn-ghost" href="#detail-it008">Detail</a>
            </div>
          </div>
        </article>

        <article class="cardx">
          <img src="assets/img/2.avif" alt="IFRS & Reporting">
          <div class="bx">
            <span class="badge-soft">BFE</span>
            <h4>IFRS Essentials & Financial Reporting</h4>
            <p>Pemahaman praktis IFRS untuk penyusunan laporan keuangan dan analisis kinerja.</p>
            <div class="meta"><i class="bi bi-clock"></i> 2 hari • <i class="bi bi-bar-chart"></i> Beginner</div>
            <div class="actions">
              <a class="btn-cta" href="#register">Daftar</a>
              <a class="btn-ghost" href="#detail-bfe">Detail</a>
            </div>
          </div>
        </article>

        <article class="cardx">
          <img src="assets/img/3.avif" alt="Leadership for Managers">
          <div class="bx">
            <span class="badge-soft">ELM</span>
            <h4>Strategic Operational Excellence for COO</h4>
            <p>Kerangka operasional, KPI, dan continuous improvement untuk pemimpin operasional.</p>
            <div class="meta"><i class="bi bi-clock"></i> 2 hari • <i class="bi bi-bar-chart"></i> Intermediate</div>
            <div class="actions">
              <a class="btn-cta" href="#register">Daftar</a>
              <a class="btn-ghost" href="#detail-coo">Detail</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Schedule -->
  <section class="section schedule" id="schedule">
    <div class="container">
      <h2>Jadwal Terdekat</h2>
      <p class="lead">Pilih jadwal atau minta in-house training untuk perusahaan Anda.</p>
      <div class="row g-3">
        <div class="col-lg-7">
          <div class="sch-list">
            <div class="sch-item">
              <div class="sch-date">
                <div class="d">24</div>
                <div class="m">Okt</div>
              </div>
              <div class="sch-title">
                <div class="t">Data Analytics with Python</div>
                <div class="s">Online • 2 hari</div>
              </div>
              <a href="#register" class="btn-cta">Daftar</a>
            </div>
            <div class="sch-item">
              <div class="sch-date">
                <div class="d">05</div>
                <div class="m">Nov</div>
              </div>
              <div class="sch-title">
                <div class="t">IFRS Essentials & Financial Reporting</div>
                <div class="s">Jakarta • 2 hari</div>
              </div>
              <a href="#register" class="btn-cta">Daftar</a>
            </div>
            <div class="sch-item">
              <div class="sch-date">
                <div class="d">20</div>
                <div class="m">Nov</div>
              </div>
              <div class="sch-title">
                <div class="t">Cybersecurity Fundamentals</div>
                <div class="s">Online • 2 hari</div>
              </div>
              <a href="#register" class="btn-cta">Daftar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="promo">
            <div>
              <div class="big">Promo Partner</div>
              <div class="desc">Institusi partner mendapatkan diskon hingga 20% dan kelas privat untuk minimal 10 peserta.</div>
            </div>
            <a href="#contact" class="btn-ghost">Jadi Partner</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="section" id="about">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
          <h2>Tentang Rayterton Academy</h2>
          <p class="lead">Kami membantu perusahaan di Asia Tenggara melakukan transformasi digital melalui pelatihan yang bisa disesuaikan penuh. Konten selaras dengan proyek nyata dan aplikasi Rayterton Apps.</p>
          <ul class="list-unstyled">
            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> Kurikulum modular dan project-based</li>
            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> Sertifikat kelulusan</li>
            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> Konsultasi pasca kelas</li>
            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> Paket in-house untuk tim perusahaan</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <img src="assets/img/academy.png" alt="Rayterton Academy" class="img-fluid rounded-4 shadow">
        </div>
      </div>
    </div>
  </section>

  <!-- Register -->
  <section class="section" id="register">
    <div class="container">
      <div class="row g-3 align-items-stretch">
        <div class="col-lg-6">
          <div class="p-4 bg-white rounded-4 border" style="box-shadow:var(--shadow)">
            <h3 class="mb-2">Daftar atau Minta Jadwal</h3>
            <form action="index_regis_form_proxy.php" class="post">
            <p class="text-muted mb-3">Isi formulir ini untuk mendaftar kelas publik atau meminta in-house training.</p>
            <form>
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" placeholder="Nama Anda">
                </div>
                <div class="col-md-6">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" placeholder="email@perusahaan.com">
                </div>
                <div class="col-md-6">
                  <label class="form-label">WhatsApp</label>
                  <input type="tel" class="form-control" placeholder="+62 ...">
                </div>
                <div class="col-md-6">
                  <label class="form-label">Kategori</label>
                  <select class="form-select">
                    <option>IT</option>
                    <option>Business, Finance, Economy</option>
                    <option>Entrepreneurship, Leadership, Management</option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label">Nama Kelas</label>
                  <select class="form-select">
                    <option>Fullstack React, Node, Redis & PostgreSQL</option>
                    <option>IFRS Essentials & Financial Reporting</option>
                    <option>Strategic Operational Excellence for COO</option>
                    <option>Data Analytics with Python</option>
                    <option>Cybersecurity Fundamentals</option>
                    <option>Lainnya (sebutkan di pesan tambahan)</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Preferensi Jadwal</label>
                  <input type="date" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="form-label">Metode</label>
                  <select class="form-select">
                    <option>Online</option>
                    <option>Tatap muka</option>
                    <option>In-house</option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label">Pesan Tambahan</label>
                  <textarea class="form-control" rows="3" placeholder="Kebutuhan khusus, jumlah peserta, tujuan bisnis"></textarea>
                </div>
                <div class="col-12">
                  <button type="button" class="btn-cta"><i class="bi bi-send me-1"></i> Kirim</button>
                </div>
              </div>
            </form>
          </form>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="p-4 rounded-4 text-white" style="background:#083a66">
            <h3 class="mb-2">Hubungi Kami</h3>
            <p class="mb-3">Butuh konsultasi pemilihan kelas yang paling pas</p>
            <div class="d-flex flex-column gap-2">
              <div><i class="bi bi-envelope me-2"></i> academy@rayterton.com</div>
              <div><i class="bi bi-telephone me-2"></i> +62 812 0000 0000</div>
              <div><i class="bi bi-geo-alt me-2"></i> Jakarta • Singapore • Kuala Lumpur</div>
            </div>
            <hr class="border-light my-4">
            <p class="small opacity-75 mb-0">Dengan mengirim formulir, Anda setuju data diproses untuk kebutuhan layanan pelatihan.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-5">
          <div class="fbrand">
            <img src="rayterton-academy-logo.png" alt="Rayterton Logo">
          </div>
          <p class="mt-2">Bagian dari Rayterton Apps Software. Solusi pelatihan yang bisa disesuaikan untuk mendukung transformasi digital organisasi Anda.</p>
        </div>
        <div class="col-lg-3">
          <h6>Navigasi</h6>
          <nav class="fnav d-flex flex-column gap-1">
            <a href="#categories">Kategori</a>
            <a href="#featured">Kelas</a>
            <a href="#schedule">Jadwal</a>
            <a href="#register">Pendaftaran</a>
          </nav>
        </div>
        <div class="col-lg-4">
          <h6>Newsletter</h6>
          <p>Dapatkan jadwal dan promo terbaru.</p>
          <div class="d-flex gap-2">
            <input class="form-control" placeholder="email@perusahaan.com">
            <button class="btn-cta">Langganan</button>
          </div>
        </div>
      </div>
      <hr class="border-secondary-subtle my-4">
      <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <small>© <span id="y"></span> Rayterton. All rights reserved.</small>
        <div class="d-flex gap-3">
          <a href="#">Kebijakan Privasi</a>
          <a href="#">Syarat Layanan</a>
        </div>
      </div>
    </div>
  </footer>

  <script>
    // Tahun footer
    document.getElementById('y').textContent = new Date().getFullYear();
    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(a=>{
      a.addEventListener('click', e=>{
        const id = a.getAttribute('href');
        if(id.length > 1){
          e.preventDefault();
          document.querySelector(id)?.scrollIntoView({behavior:'smooth',block:'start'});
        }
      })
    });
  </script>
</body>
</html>
