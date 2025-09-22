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
    :root {
      --brand: #00b4cc;
      --brand-dark: #0096ab;
      --ink: #0f172a;
      --muted: #667085;
      --bg: #f5f8fb;
      --card: #ffffff;
      --accent: #004080;
      --radius: 18px;
      --shadow: 0 14px 30px rgba(2, 13, 33, .12);
    }

    * {
      box-sizing: border-box
    }

    html,
    body {
      height: 100%
    }

    body {
      margin: 0;
      font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial;
      background: var(--bg);
      color: var(--ink)
    }

    a {
      color: var(--accent);
      text-decoration: none
    }

    a:hover {
      text-decoration: underline
    }

    /* Appbar */
    .appbar {
      position: sticky;
      top: 0;
      z-index: 1000;
      backdrop-filter: saturate(180%) blur(8px);
      background: rgba(255, 255, 255, .85);
      border-bottom: 1px solid rgba(2, 13, 33, .06);
    }

    .brand {
      display: flex;
      gap: 10px;
      align-items: center;
      text-decoration: none
    }

    .brand img {
      height: 36px;
      width: auto
    }

    .brand .title {
      font-weight: 800;
      color: var(--ink);
      letter-spacing: .2px
    }

    .nav-link {
      font-weight: 600;
      color: var(--ink) !important;
      opacity: .85
    }

    .nav-link:hover {
      opacity: 1
    }

    .btn-cta {
      background: var(--brand);
      color: #fff !important;
      border: 0;
      border-radius: 999px;
      padding: .6rem 1rem;
      font-weight: 700
    }

    .btn-cta:hover {
      background: var(--brand-dark)
    }

    /* Hero */
    .hero {
      position: relative;
      isolation: isolate
    }

    .hero video {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: .28;
      z-index: -1
    }

    .hero .overlay {
      background: linear-gradient(180deg, rgba(255, 255, 255, .7), rgba(245, 248, 251, .95));
      position: absolute;
      inset: 0;
      z-index: -1
    }

    .hero .content {
      padding: clamp(48px, 10vw, 120px) 0
    }

    .kicker {
      display: inline-flex;
      gap: 8px;
      align-items: center;
      background: #fff;
      border: 1px solid #e7eef7;
      padding: 6px 12px;
      border-radius: 999px;
      font-size: 13px;
      color: #2f3a4a;
      box-shadow: 0 4px 12px rgba(0, 0, 0, .05)
    }

    .hero h1 {
      font-size: clamp(28px, 4vw, 44px);
      line-height: 1.15;
      font-weight: 900;
      margin: .6rem 0 1rem;
      color: #081a36
    }

    .hero p {
      font-size: clamp(15px, 1.5vw, 18px);
      color: var(--muted);
      max-width: 880px
    }

    .hero .actions {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
      margin-top: 18px
    }

    .btn-ghost {
      background: #fff;
      border: 1px solid #d9e4f1;
      border-radius: 999px;
      padding: .6rem 1rem;
      font-weight: 700;
      color: #0f172a
    }

    .btn-ghost:hover {
      background: #f6f9fd
    }

    /* Counters */
    .counters {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px
    }

    .counter {
      background: var(--card);
      border-radius: var(--radius);
      padding: 20px;
      box-shadow: var(--shadow)
    }

    .counter .num {
      font-weight: 900;
      font-size: clamp(24px, 3vw, 32px);
      color: var(--accent)
    }

    .counter .lbl {
      color: var(--muted);
      font-weight: 600
    }

    @media (max-width: 900px) {
      .counters {
        grid-template-columns: repeat(2, 1fr)
      }
    }

    /* Category cards */
    .section {
      padding: clamp(48px, 8vw, 80px) 0
    }

    .section h2 {
      font-weight: 900;
      margin-bottom: 10px
    }

    .section p.lead {
      color: var(--muted);
      max-width: 860px
    }

    .cat-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
      margin-top: 24px
    }

    .cat {
      background: linear-gradient(180deg, #fff, #f8fbff);
      border: 1px solid #e7eef7;
      border-radius: 20px;
      overflow: hidden;
      transition: .2s transform, .2s box-shadow;
      box-shadow: 0 10px 20px rgba(2, 13, 33, .06)
    }

    /* Tambahkan di bagian <style> */
#kategori .hero {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}
.cat-button {
  display: inline-block;
  background: linear-gradient(135deg, #ff4141ff, #ea1616ff);
  color: #fff;
  text-decoration: none;
  font-weight: 800;
  font-size: clamp(14px, 1.1vw, 18px);
  padding: 10px 22px;
  border-radius: 16px;
  box-shadow: 0 6px 14px rgba(225, 6, 0, .18);
  transition: transform .08s, background .15s, box-shadow .15s;
  white-space: normal;
  text-align: center;
  max-width: 100%;
  margin: 8px 6px;
}

.cat-button:hover {
  background: #e60000;
  transform: translateY(-2px) scale(1.04);
  box-shadow: 0 12px 24px rgba(183, 5, 0, .22);
}

/* Untuk container tombol kategori agar center dan rapi */
#kategori .hero details {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 18px;
}

#kategori .hero details > summary {
  margin-bottom: 10px;
  font-size: 16px;
  text-align: center;
}

#kategori .hero details a.cat-button {
  margin: 8px 6px;
}

/* Untuk career track agar tombol tetap center dan wrap */
.career-track-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 8px 6px;
}

    .cat:hover {
      transform: translateY(-2px);
      box-shadow: 0 18px 34px rgba(2, 13, 33, .12)
    }

    .cat .art {
      height: 120px;
      background: radial-gradient(120px 60px at 10% 20%, rgba(0, 180, 204, .25), transparent),
        radial-gradient(140px 60px at 90% 40%, rgba(0, 64, 128, .25), transparent);
      display: flex;
      align-items: center;
      justify-content: center
    }

    .cat .art i {
      font-size: 38px;
      color: #083a66
    }

    .cat .body {
      padding: 18px
    }

    .cat .body h3 {
      font-weight: 800;
      margin: 0 0 6px
    }

    .cat .body p {
      color: var(--muted);
      margin: 0 0 14px
    }

    .cat .body .actions {
      display: flex;
      gap: 8px
    }

    /* Featured classes */
    .cards {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
      margin-top: 18px
    }

    .cardx {
      background: #fff;
      border: 1px solid #e7eef7;
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 12px 24px rgba(2, 13, 33, .08)
    }

    .cardx img {
      width: 100%;
      height: 168px;
      object-fit: cover
    }

    .cardx .bx {
      padding: 16px
    }

    .badge-soft {
      background: rgba(0, 180, 204, .12);
      color: #045866;
      border: 1px solid rgba(0, 180, 204, .2);
      padding: 4px 10px;
      border-radius: 999px;
      font-weight: 700;
      font-size: 12px
    }

    .cardx h4 {
      font-weight: 900;
      margin: 10px 0 6px
    }

    .cardx p {
      color: var(--muted);
      margin: 0 0 12px
    }

    .cardx .meta {
      display: flex;
      gap: 10px;
      align-items: center;
      color: #475569;
      font-weight: 600;
      font-size: 14px
    }

    .cardx .meta i {
      font-size: 16px
    }

    .cardx .actions {
      display: flex;
      gap: 8px;
      margin-top: 12px
    }

    @media (max-width: 1100px) {
      .cards {
        grid-template-columns: repeat(2, 1fr)
      }
    }

    @media (max-width: 720px) {
      .cards {
        grid-template-columns: 1fr
      }

      .cat-grid {
        grid-template-columns: 1fr
      }
    }

    /* Schedule */
    .schedule {
      background: linear-gradient(180deg, #e9f7fa, #ffffff)
    }

    .sch-list {
      margin-top: 14px
    }

    .sch-item {
      display: flex;
      gap: 12px;
      align-items: center;
      background: #fff;
      border: 1px solid #d9eef3;
      border-radius: 14px;
      padding: 12px 14px;
      margin-bottom: 10px
    }

    .sch-date {
      min-width: 80px;
      text-align: center
    }

    .sch-date .d {
      font-size: 20px;
      font-weight: 900;
      color: #064b63;
      line-height: 1
    }

    .sch-date .m {
      font-size: 13px;
      font-weight: 800;
      color: #0f172a;
      opacity: .6
    }

    .sch-title {
      flex: 1
    }

    .sch-title .t {
      font-weight: 800
    }

    .sch-title .s {
      color: var(--muted);
      font-size: 14px
    }

    /* Promo */
    .promo {
      background: #081a36;
      color: #e6f7fb;
      border-radius: 18px;
      padding: 18px 20px;
      display: flex;
      gap: 16px;
      align-items: center
    }

    .promo .big {
      font-weight: 900;
      font-size: 28px;
      line-height: 1.1
    }

    .promo .desc {
      opacity: .9
    }

    @media (max-width: 820px) {
      .promo {
        flex-direction: column;
        text-align: center
      }
    }

    /* Footer */
    footer {
      background: #061529;
      color: #d3e7f0;
      padding: 40px 0;
      margin-top: 28px
    }

    .fbrand {
      display: flex;
      gap: 10px;
      align-items: center
    }

    .fbrand img {
      height: 32px
    }

    .fnav a {
      color: #d3e7f0;
      opacity: .9
    }

    .fnav a:hover {
      opacity: 1
    }
  </style>
</head>

<body>

  <!-- Appbar -->
  <nav class="appbar py-2">
    <div class="container d-flex align-items-center justify-content-between">
      <a class="brand" href="#top">
        <img src="rayterton-apps-software-logo.png" alt="Rayterton Logo">
      </a>
      <ul class="nav d-none d-md-flex">
        <li class="nav-item"><a class="nav-link" href="#categories">Kategori</a></li>
        <li class="nav-item"><a class="nav-link" href="#featured">Kelas</a></li>
        <li class="nav-item"><a class="nav-link" href="#schedule">Jadwal</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="#katalog">Katalog</a></li>
        <li class="nav-item"><a class="nav-link" href="#register">Daftar</a></li>
      </ul>

      <a href="/" class="logo-link logo-academy-header">
        <img src="rayterton-academy-logo-black.png" alt="Rayterton Academy Logo" class="logo-academy" style="height:48px;width:auto;">
      </a>
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
  <section id="kategori">
    <div class="hero">
      <p>Silahkan pilih kategori training di bawah ini:</p>
      <details open>
        <summary><strong>Kategori Keahlian Umum (Successful Skills)</strong></summary>
        <a href="/kategori/keahlian-umum/training-it.php" class="cat-button" target="_blank">Information Technology
          (IT)</a>
        <a href="/kategori/keahlian-umum/training-bfe.php" class="cat-button" target="_blank">Business, Finance and
          Economy (BFE)</a>
        <a href="/kategori/keahlian-umum/training-elm.php" class="cat-button" target="_blank">Entrepreneurship,
          Leadership and Management (ELM)</a>
      </details>
      <details open>
        <summary><strong>Kategori Sektor Industri (Business Sector)</strong></summary>
        <a href="/kategori/sektor-industri/training-mn.php" class="cat-button" target="_blank">Manufacturing (MN)</a>
        <a href="/kategori/sektor-industri/training-rt.php" class="cat-button" target="_blank">Retail (RT)</a>
        <a href="/kategori/sektor-industri/training-ds.php" class="cat-button" target="_blank">Distribution (DS)</a>
        <a href="/kategori/sektor-industri/training-bn.php" class="cat-button" target="_blank">Banking (BN)</a>
        <a href="/kategori/sektor-industri/training-mf.php" class="cat-button" target="_blank">Multifinance (MF)</a>
        <a href="/kategori/sektor-industri/training-in.php" class="cat-button" target="_blank">Insurance (IN)</a>
      </details>
      <details open>
        <summary><strong>Kategori Karir (Career Track)</strong></summary>
        <div class="career-track-container">
          <a href="/kategori/karir/training-cfo.php" class="cat-button" target="_blank">CFO - Financial Leadership</a>
          <a href="/kategori/karir/training-cto.php" class="cat-button" target="_blank">CTO - Technology Strategy</a>
          <a href="/kategori/karir/training-coo.php" class="cat-button" target="_blank">COO - Strategic Operational
            Excellence</a>

          <a href="/kategori/karir/training-cso.php" class="cat-button" target="_blank">CSO - Corporate Strategy and
            Execution</a>
          <a href="/kategori/karir/training-dto.php" class="cat-button" target="_blank">Digital Transformation
            Officer</a>

          <a href="/kategori/karir/training-bics.php" class="cat-button" target="_blank">Business and IT Consulting
            Skills</a>
          <a href="/kategori/karir/training-da.php" class="cat-button" target="_blank">Data Analyst - Analytics for
            Business</a>

          <a href="/kategori/karir/training-rwds.php" class="cat-button" target="_blank">Data Scientist - Real World
            Data Science</a>
          <a href="/kategori/karir/training-de.php" class="cat-button" target="_blank">DevOps Engineer - CI/CD and
            Kubernetes</a>
          <a href="/kategori/karir/training-cs.php" class="cat-button" target="_blank">Cyber Security Analyst - Threat
            and Risk Management</a>
        </div>

      </details>

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

      <div class="cards" >
        <article class="cardx">
          <img src="assets/img/React.jpg" alt="Fullstack React Node PostgreSQL">
          <div class="bx">
            <span class="badge-soft">IT</span>
            <h4>Fullstack React, Node, Redis & PostgreSQL</h4>
            <p>Membangun aplikasi enterprise lengkap dengan autentikasi, CRUD, caching, dan deployment.</p>
            <div class="meta"><i class="bi bi-clock"></i> 3 hari • <i class="bi bi-bar-chart"></i> Intermediate</div>
            <div class="actions">
              <a class="btn-cta" href="#register">Daftar</a>
              <a class="btn-ghost" href="./training/it/fullstack-development-using-react-js-node-js-redis-postgresql-it008.php">Detail</a>
            </div>
          </div>
        </article>

        <article class="cardx">
          <img src="assets/img/React.jpg" alt="IFRS & Reporting">
          <div class="bx">
            <span class="badge-soft">IT</span>
            <h4>Oracle Apex dan Jasper Report</h4>
            <p>Kelas Oracle APEX dan Jasper mengajarkan cara membuat aplikasi web modern dengan Oracle APEX serta laporan profesional dengan JasperReports, lengkap dengan integrasi database dan export ke berbagai format.</p>
            <div class="meta"><i class="bi bi-clock"></i> 2 hari • <i class="bi bi-bar-chart"></i> Beginner</div>
            <div class="actions">
              <a class="btn-cta" href="#register">Daftar</a>
              <a class="btn-ghost" href="#detail-bfe">Detail</a>
            </div>
          </div>
        </article>

        <article class="cardx">
          <img src="assets/img/React.jpg" alt="Leadership for Managers">
          <div class="bx">
            <span class="badge-soft">IT</span>
            <h4>Database Relational, SQL dan PL-SQL</h4>
            <p>Kelas Database Relational, SQL, dan PL/SQL mengajarkan konsep database relasional, penulisan query SQL, serta pemrograman PL/SQL untuk mengelola dan memanipulasi data secara efisien.</p>
            <div class="meta"><i class="bi bi-clock"></i> 2 hari • <i class="bi bi-bar-chart"></i> Intermediate</div>
            <div class="actions">
              <a class="btn-cta" href="#register">Daftar</a>
              <a class="btn-ghost" href="#detail-coo">Detail</a>
            </div>
          </div>
        </article>
        <article class="cardx">
          <img src="assets/img/React.jpg" alt="Leadership for Managers">
          <div class="bx">
            <span class="badge-soft">IT</span>
            <h4>dotNet dan Angular</h4>
            <p>Kelas .NET dan Angular mengajarkan pembuatan aplikasi web modern dengan backend menggunakan .NET dan frontend interaktif menggunakan Angular, mulai dari desain, pengembangan, hingga integrasi antar sistem.</p>
            <div class="meta"><i class="bi bi-clock"></i> 2 hari • <i class="bi bi-bar-chart"></i> Intermediate</div>
            <div class="actions">
              <a class="btn-cta" href="#register">Daftar</a>
              <a class="btn-ghost" href="#detail-coo">Detail</a>
            </div>
          </div>
        </article>
        <article class="cardx">
          <img src="assets/img/React.jpg" alt="Leadership for Managers">
          <div class="bx">
            <span class="badge-soft">IT</span>
            <h4>Foundation of AI</h4>
            <p>Kelas Foundation of AI memberikan pemahaman dasar tentang kecerdasan buatan, termasuk konsep machine learning, neural network, dan penerapannya dalam berbagai bidang teknologi modern.</p>
            <div class="meta"><i class="bi bi-clock"></i> 2 hari • <i class="bi bi-bar-chart"></i> Intermediate</div>
            <div class="actions">
              <a class="btn-cta" href="#register">Daftar</a>
              <a class="btn-ghost" href="#detail-coo">Detail</a>
            </div>
          </div>
        </article>
        <article class="cardx">
          <img src="assets/img/React.jpg" alt="Leadership for Managers">
          <div class="bx">
            <span class="badge-soft">IT</span>
            <h4>Cyber Security</h4>
            <p>Kelas Cyber Security mengajarkan dasar-dasar keamanan siber, termasuk proteksi data, deteksi ancaman, dan praktik terbaik untuk melindungi sistem dan jaringan dari serangan digital.</p>
            <div class="meta"><i class="bi bi-clock"></i> 2 hari • <i class="bi bi-bar-chart"></i> Intermediate</div>
            <div class="actions">
              <a class="btn-cta" href="#register">Daftar</a>
              <a class="btn-ghost" href="#detail-coo">Detail</a>
            </div>
          </div>
        </article>
        <article class="cardx">
          <img src="assets/img/3.avif" alt="Leadership for Managers">
          <div class="bx">
            <span class="badge-soft">BFE</span>
            <h4>Project Management</h4>
            <p>Kelas Project Management mengajarkan prinsip, metode, dan alat untuk merencanakan, menjalankan, serta mengawasi proyek agar selesai tepat waktu, sesuai anggaran, dan mencapai tujuan bisnis.</p>
            <div class="meta"><i class="bi bi-clock"></i> 2 hari • <i class="bi bi-bar-chart"></i> Intermediate</div>
            <div class="actions">
              <a class="btn-cta" href="#register">Daftar</a>
              <a class="btn-ghost" href="#detail-coo">Detail</a>
            </div>
          </div>
        </article>
        <article class="cardx">
          <img src="assets/img/3.avif" alt="Leadership for Managers">
          <div class="bx">
            <span class="badge-soft">BFE</span>
            <h4>Risk Management</h4>
            <p>Kelas Risk Management mengajarkan cara mengidentifikasi, menganalisis, dan mengelola risiko agar organisasi dapat mengambil keputusan yang tepat dan meminimalkan potensi kerugian.</p>
            <div class="meta"><i class="bi bi-clock"></i> 2 hari • <i class="bi bi-bar-chart"></i> Intermediate</div>
            <div class="actions">
              <a class="btn-cta" href="#register">Daftar</a>
              <a class="btn-ghost" href="#detail-coo">Detail</a>
            </div>
          </div>
        </article>
        <article class="cardx">
          <img src="assets/img/3.avif" alt="Leadership for Managers">
          <div class="bx">
            <span class="badge-soft">BFE</span>
            <h4>Strategic Management</h4>
            <p>Kelas Strategic Management mengajarkan cara merumuskan, mengimplementasikan, dan mengevaluasi strategi bisnis agar organisasi dapat mencapai tujuan jangka panjang dan tetap kompetitif.</p>
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
  <!-- <section class="section schedule" id="schedule">
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
  </section> -->

  <section id="schedule">
    <div class="container">
      <h2>Jadwal Training Terdekat</h2>
      <div class="month-tabs">
        <button class="tab-btn active" data-month="july">July 2025</button>
        <button class="tab-btn" data-month="august">August 2025</button>
        <button class="tab-btn" data-month="september">September 2025</button>
        <button class="tab-btn" data-month="october">October 2025</button>
      </div>
      <div class="table-responsive">
        <div id="schedule-july" class="tab-content active">
          <table>
            <tr>
              <th>Kode Training</th>
              <th>Nama Training</th>
              <th>Kategori</th>
              <th>Tanggal</th>
              <th>Durasi</th>
              <th>Lokasi</th>
              <th>Harga Per Person (Rp.)</th>
            </tr>
            <tr>
              <td>IT003</td>
              <td>Low Code Development using Oracle Apex and Jasper Report <br>
                <a href="proses_pendaftaran.php?id=IT008&training_date=2025-07-19" class="cta-button">Bayar Sekarang</a>
              </td>
              <td>IT</td>
              <td>3 Juli 2025</td>
              <td>4 Hari</td>
              <td>Onsite(Offline) di kantor Rayterton, Menteng Square, Jakpus</td>
              <td style="text-align: right;">4.800.000</td>
            </tr>
            <tr>
              <td>IT008</td>
              <td>Fullstack Development Using React.Js, Node.js, Redis & PostgreSQL <br>
                <a href="proses_pendaftaran.php?id=IT008&training_date=2025-07-19" class="cta-button">Bayar Sekarang</a>
              </td>
              <td>IT</td>
              <td>19 Juli 2025</td>
              <td>1 Hari</td>
              <td>Online(Zoom)</td>
              <td style="text-align: right;">1.800.000</td>
            </tr>
            <tr>
              <td>IT001</td>
              <td>How to become a Successful Database Software Consultant or Database Programmer <br>
                <a href="proses_pendaftaran.php?id=IT001&training_date=2025-07-20" class="cta-button">Bayar Sekarang</a>
              </td>
              <td>IT</td>
              <td>20 Juli 2025</td>
              <td>1 Hari</td>
              <td>Online(Zoom)</td>
              <td style="text-align: right;">1.500.000</td>
            </tr>
            <tr>
              <td>IT014</td>
              <td>Fullstack Development Using Flutter, Node.Js & PostgreSQL <br>
                <a href="proses_pendaftaran.php?id=IT014&training_date=2025-07-26" class="cta-button">Bayar Sekarang</a>
              </td>
              <td>IT</td>
              <td>26 Juli 2025</td>
              <td>1 Hari</td>
              <td>Online(Zoom)</td>
              <td style="text-align: right;">1.800.000</td>
            </tr>
            <tr>
              <td>IT002</td>
              <td>Database Relational, SQL dan PL-SQL <br>
                <a href="proses_pendaftaran.php?id=IT002&training_date=2025-07-27" class="cta-button">Bayar Sekarang</a>
              </td>
              <td>IT</td>
              <td>27 Juli 2025</td>
              <td>1 Hari</td>
              <td>Online(Zoom)</td>
              <td style="text-align: right;">1.100.000</td>
            </tr>
            <tr>
              <td>IT004</td>
              <td>Web Application Development for Government and Corporate Systems using dotNet and Angular <br>
                <a href="proses_pendaftaran.php?id=IT004&training_date=2025-07-28" class="cta-button">Bayar Sekarang</a>
              </td>
              <td>IT</td>
              <td>28 Juli 2025</td>
              <td>5 Hari</td>
              <td>Onsite(Offline) di kantor Rayterton, Menteng Square, Jakpus</td>
              <td style="text-align: right;">5.800.000</td>
            </tr>
          </table>
        </div>
        <div id="schedule-august" class="tab-content">
          <table>
            <tr>
              <th>Kode Training</th>
              <th>Nama Training</th>
              <th>Kategori</th>
              <th>Tanggal</th>
              <th>Durasi</th>
              <th>Lokasi</th>
              <th>Harga Per Person (Rp.)</th>
            </tr>
            <tr>
              <td>BFE003</td>
              <td>Project Management <br>
                <a href="proses_pendaftaran.php?id=BFE003&training_date=2025-08-08" class="cta-button">Bayar Sekarang</a>
              </td>
              <td>BFE</td>
              <td>8 Agustus 2025</td>
              <td>1 Hari</td>
              <td>Online (Zoom)</td>
              <td style="text-align: right;">1.800.000</td>
            </tr>

            <tr>
              <td>IT019</td>
              <td>Laravel Fullstack with MySQL<br>
                <a href="proses_pendaftaran.php?id=IT019&training_date=2025-08-09" class="cta-button">Bayar Sekarang</a>
              </td>
              <td>IT</td>
              <td>9 Agustus 2025</td>
              <td>2 Hari</td>
              <td>Onsite(Offline) di kantor Rayterton, Menteng Square, Jakpus</td>
              <td style="text-align: right;">1.800.000</td>
            </tr>
            <tr>
              <td>BFE004</td>
              <td>Risk Management <br>
                <a href="proses_pendaftaran.php?id=BFE004&training_date=2025-08-15" class="cta-button">Bayar Sekarang</a>
              </td>
              <td>BFE</td>
              <td>15 Agustus 2025</td>
              <td>1 Hari</td>
              <td>Online (Zoom)</td>
              <td style="text-align: right;">1.800.000</td>
            </tr>
            <tr>
              <td>IT014</td>
              <td>Web Application Development for Government and Corporate Systems using dotNet and Angular
                Deskripsi dan Silabus Daftar<br>
                <a href="proses_pendaftaran.php?id=IT018&training_date=2025-08-23" class="cta-button">Bayar Sekarang</a>
              </td>
              <td>IT</td>
              <td>23 Agustus 2025</td>
              <td>6 Hari</td>
              <td>Onsite(Offline) di kantor Rayterton, Menteng Square, Jakpus</td>
              <td style="text-align: right;">6.824.000 </td>
            </tr>
            <!-- <tr>
            <td>IT018</td>
            <td>Flutter, Firebase Mobile App Development<br>
              <a href="proses_pendaftaran.php?id=IT018&training_date=2025-08-31" class="cta-button">Bayar Sekarang</a>
            </td>
            <td>IT</td>
            <td>23 Agustus 2025</td>
            <td>2 Hari</td>
            <td>Onsite(Offline) di kantor Rayterton, Menteng Square, Jakpus</td>
            <td style="text-align: right;">1.800.000</td>
          </tr> -->
          </table>
        </div>
        <div id="schedule-september" class="tab-content">
          <table>
            <tr>
              <th>Kode Training</th>
              <th>Nama Training</th>
              <th>Kategori</th>
              <th>Tanggal</th>
              <th>Durasi</th>
              <th>Lokasi</th>
              <th>Harga Per Person (Rp.)</th>
            </tr>
            <tr>
              <td colspan="7" style="text-align: center;">No training scheduled for September 2025 yet.</td>
            </tr>
          </table>
        </div>
        <div id="schedule-october" class="tab-content">
          <table>
            <tr>
              <th>Kode Training</th>
              <th>Nama Training</th>
              <th>Kategori</th>
              <th>Tanggal</th>
              <th>Durasi</th>
              <th>Lokasi</th>
              <th>Harga Per Person (Rp.)</th>
            </tr>
            <tr>
              <td colspan="7" style="text-align: center;">No training scheduled for October 2025 yet.</td>
            </tr>
          </table>
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
     const cardsContainer = document.getElementById('cards-container');
  const allCards = Array.from(cardsContainer.querySelectorAll('.cardx'));
  const toggleBtn = document.getElementById('toggle-classes');

  // Sembunyikan semua kartu setelah 3 pertama
  allCards.forEach((card, index) => {
    if(index > 2) card.style.display = 'none';
  });

  toggleBtn.addEventListener('click', () => {
    const isHidden = allCards[3].style.display === 'none';
    allCards.forEach((card, index) => {
      if(index > 2) card.style.display = isHidden ? 'block' : 'none';
    });
    toggleBtn.textContent = isHidden ? 'Sembunyikan' : 'Lihat Selengkapnya';
  });
    // Tahun footer
    document.getElementById('y').textContent = new Date().getFullYear();
    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(a => {
      a.addEventListener('click', e => {
        const id = a.getAttribute('href');
        if (id.length > 1) {
          e.preventDefault();
          document.querySelector(id)?.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      })
    });
    const trainingData = { // Data for the "Deskripsi, Silabus, dan Harga Training" section
      IT: [{
          code: "IT001",
          name: "How to become a Successful Database Software Consultant or Database Programmer",
          type: "Online (Zoom)",
          duration: "1 Hari",
          price: "1.500.000",
          syllabus_path: "/training/it/how-to-become-a-successful-database-software-consultant-or-database-programmer-it001.php"
        },
        {
          code: "IT002",
          name: "Database Relational, SQL dan PL-SQL",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "1.100.000<br>3.300.000<br>3.550.000",
          syllabus_path: "/training/it/database-relational-sql-dan-pl-sql-it002.php"
        },
        {
          code: "IT003",
          name: "Low Code Development using Oracle Apex and Jasper Report",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>4 Hari<br>4 Hari",
          price: "1.100.000<br>4.800.000<br>5.050.000",
          syllabus_path: "/training/it/low-code-development-using-oracle-apex-and-jasper-report-it003.php"
        },
        {
          code: "IT004",
          name: "Web Application Development for Government and Corporate Systems using dotNet and Angular",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>6 Hari<br>6 Hari",
          price: "1.800.000<br>5.800.000<br>6.050.000",
          syllabus_path: "/training/it/web-application-development-for-government-and-corporate-systems-using-dotnet-and-angular-it004.php"
        },
        {
          code: "IT005",
          name: "Datawarehouse, Business Intelligence (BI), Data Analytic, Data Science and Big Data",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "2.200.000<br>4.500.000<br>4.750.000",
          syllabus_path: "/training/it/datawarehouse-business-intelligence-data-analytic-data-science-and-big-data-it005.php"
        },
        {
          code: "IT006",
          name: "ERP (Enterprise Resource Planning)",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "1.100.000<br>2.200.000<br>2.450.000",
          syllabus_path: "/training/it/erp-it006.php"
        },
        {
          code: "IT007",
          name: "Finance and Accounting System",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "1.100.000<br>2.200.000<br>2.450.000",
          syllabus_path: "/training/it/finance-and-accounting-system-it007.php"
        },
        {
          code: "IT008",
          name: "Fullstack Development Using React.Js, Node.js, Redis & PostgreSQL",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "1.800.000<br>5.800.000<br>6.050.000",
          syllabus_path: "/training/it/fullstack-development-using-react-js-node-js-redis-postgresql-it008.php"
        },
        {
          code: "IT009",
          name: "Building Online Store Website for your Business (E-Commerce/B2B/B2C Workshop) using WordPress and WooCommerce",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "1.500.000<br>2.500.000<br>2.750.000",
          syllabus_path: "/training/it/building-online-store-website-for-your-business-using-wordpress-and-woocommerce-it009.php"
        },
        {
          code: "IT010",
          name: "Web Development Fundamentals (HTML, CSS, JS, Bootstrap)",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "1.100.000<br>2.200.000<br>2.450.000",
          syllabus_path: "/training/it/web-development-fundamentals-it010.php"
        },
        {
          code: "IT011",
          name: "UI/UX design with Figma and Design Thinking",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "1.100.000<br>2.200.000<br>2.450.000",
          syllabus_path: "/training/it/ui-ux-design-with-figma-and-design-thinking-it011.php"
        },
        {
          code: "IT012",
          name: "Build REST API with NodeJS and MongoDB",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "1.800.000<br>3.300.000<br>3.550.000",
          syllabus_path: "/training/it/build-rest-api-with-nodejs-and-mongodb-it012.php"
        },
        {
          code: "IT013",
          name: "Git and GitHub for Team Collaboration",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>1 Hari<br>1 Hari",
          price: "1.500.000<br>1.800.000<br>2.050.000",
          syllabus_path: "/training/it/git-and-github-for-team-collaboration-it013.php"
        },
        {
          code: "IT014",
          name: "Fullstack Development Using Flutter, Node.Js & PostgreSQL",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "1.800.000<br>5.800.000<br>6.050.000",
          syllabus_path: "/training/it/fullstack-development-using-flutter-node-js-postgresql-it014.php"
        },
        {
          code: "IT015",
          name: "Dev Ops Engineer (Docker, CI/CD, Terraform)",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "1.800.000<br>5.800.000<br>6.050.000",
          syllabus_path: "/training/it/dev-ops-engineer-it015.php"
        },
        {
          code: "IT016",
          name: "High Performance API Development using Go, Redis, PostgreSQL",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "1.800.000<br>5.800.000<br>6.050.000",
          syllabus_path: "/training/it/high-performance-api-development-using-go-redis-postgresql-it016.php"
        },
        {
          code: "IT017",
          name: "Backend microservices with Go Lang and Kubernetes",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "1.800.000<br>5.800.000<br>6.050.000",
          syllabus_path: "/training/it/backend-microservices-with-go-lang-and-kubernetes-it017.php"
        },
        {
          code: "IT018",
          name: "Flutter, Firebase Mobile App Development",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "1.800.000<br>4.500.000<br>4.750.000",
          syllabus_path: "/training/it/flutter-firebase-mobile-app-development-it018.php"
        },
        {
          code: "IT019",
          name: "Laravel Fullstack with MySQL",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "1.800.000<br>4.000.000<br>4.250.000",
          syllabus_path: "/training/it/laravel-fullstack-with-mysql-it019.php"
        },
        {
          code: "IT020",
          name: "AI For Business",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "",
          syllabus_path: "/training/it/it020-ai-for-business.php"
        },
        {
          code: "IT021",
          name: "Cyber Security",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "",
          syllabus_path: "/training/it/IT021_Cyber_Security.php"
        },
        {
          code: "IT022",
          name: "Foundations Of AI",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "",
          syllabus_path: "/training/it/it022-foundations-of-ai.php"
        },
        {
          code: "IT023",
          name: "Python for Large Language Models (LLMs)",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "",
          syllabus_path: "/training/it/it023-python-for-llm.php"
        },
        {
          code: "IT024",
          name: "Structured and Unstructured Data",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "",
          syllabus_path: "/training/it/t024-structured-unstructured-data.php"
        },
        {
          code: "IT025",
          name: "Retrieval-Augmented Generation (RAG) whit LLMs",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "",
          syllabus_path: "/training/it/it025-rag-with-llms.php"
        },
        {
          code: "IT026",
          name: "Structured Output with Tool Use LLMs",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "",
          syllabus_path: "/training/it/it026-structured-output-tool-use-llms.php"
        },
        {
          code: "IT027",
          name: "ReAct Agents and Conversational AI",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "",
          syllabus_path: "/training/it/it027-react-agents-conversational-ai.php"
        },
        {
          code: "IT028",
          name: "Building AI-Powered Financial Applications",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "",
          syllabus_path: "/training/it/it028-building-ai-powered-financial-applications.php"
        },
        {
          code: "IT029",
          name: "Capstone Project",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "",
          syllabus_path: "/training/it/it029-capstone-project.php"
        },
        {
          code: "IT030",
          name: "Menguasai SQL dengan MySQL / Oracle",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "",
          syllabus_path: "/training/it/it030-menguasai-sql-like-it023.php"
        },
        {
          code: "IT031",
          name: "Menguasai Advance SQL dengan MySQL / Oracle ",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "",
          syllabus_path: "/training/it/it031-menguasai-sql-advance-like-it023.php"
        },
        {
          code: "IT032",
          name: "Python Basic Programming",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "",
          syllabus_path: "/training/it/IT032_Python_Basic_Programming.php"
        },
        {
          code: "IT033",
          name: "Cybersecurity and Digital Resilience",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "",
          syllabus_path: "/training/it/"
        },
        {
          code: "IT034",
          name: "AI Risk dan Model Risk Management",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "",
          syllabus_path: "/training/it/"
        },
        {
          code: "IT035",
          name: "Risk Culture and Governance",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>3 Hari<br>3 Hari",
          price: "",
          syllabus_path: "/training/it/IT032_Python_Basic_Programming.php"
        }
      ],
      BFE: [{
          code: 'BFE001',
          name: 'Strategic Management',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '1.800.000<br>3.300.000<br>3.550.000',
          syllabus_path: '/training/business-finance/strategic-management-bfe001.php'
        },
        {
          code: 'BFE002',
          name: 'Financial Management',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '1.800.000<br>3.300.000<br>3.550.000',
          syllabus_path: '/training/business-finance/financial-management-bfe002.php'
        },
        {
          code: 'BFE003',
          name: 'Project Management',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '1.800.000<br>2.200.000<br>2.450.000',
          syllabus_path: '/training/business-finance/project-management-bfe003.php'
        },
        {
          code: 'BFE004',
          name: 'Risk Management',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '1.800.000<br>3.300.000<br>3.550.000',
          syllabus_path: '/training/business-finance/risk-management-bfe004.php'
        },
        {
          code: 'BFE005',
          name: 'Wealth Management',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '1.800.000<br>3.300.000<br>3.550.000',
          syllabus_path: '/training/business-finance/wealth-management-bfe005.php'
        },
        {
          code: 'BFE006',
          name: 'Change Management',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>1 Hari<br>1 Hari',
          price: '1.200.000<br>1.500.000<br>1.750.000',
          syllabus_path: '/training/business-finance/change-management-bfe006.php'
        },
        {
          code: 'BFE007',
          name: 'Marketing Essentials',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>1 Hari<br>1 Hari',
          price: '1.200.000<br>1.500.000<br>1.750.000',
          syllabus_path: '/training/business-finance/marketing-essentials-bfe007.php'
        },
        {
          code: 'BFE008',
          name: 'Management Accounting',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '1.800.000<br>2.200.000<br>2.450.000',
          syllabus_path: '/training/business-finance/management-accounting-bfe008.php'
        },
        {
          code: 'BFE009',
          name: 'Financial Analyst',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '1.800.000<br>3.300.000<br>3.550.000',
          syllabus_path: '/training/business-finance/financial-analyst-bfe009.php'
        }
      ],
      ELM: [{
          code: 'ELM001',
          name: 'Entrepreneurship and Leadership Skills ',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>1 Hari<br>1 Hari',
          price: '1.250.000<br>2.500.000<br>2.750.000',
          syllabus_path: '/training/entrepreneur-leadership/entrepreneurship-and-leadership-skills-elm001.php'
        },
        {
          code: 'ELM002',
          name: 'Digital Transformation Management',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>1 Hari<br>1 Hari',
          price: '1.250.000<br>2.200.000<br>2.450.000',
          syllabus_path: '/training/entrepreneur-leadership/digital-transformation-management-elm002.php'
        },
        {
          code: 'ELM003',
          name: 'Performance Management',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>1 Hari<br>1 Hari',
          price: '1.250.000<br>2.200.000<br>2.450.000',
          syllabus_path: '/training/entrepreneur-leadership/performance-management-elm003.php'
        },
        {
          code: 'ELM004',
          name: 'People Management / Team Management',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>1 Hari<br>1 Hari',
          price: '1.100.000<br>2.200.000<br>2.450.000',
          syllabus_path: '/training/entrepreneur-leadership/people-management-team-management-elm004.php'
        },
        {
          code: 'ELM005',
          name: 'Time and Priority Management',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>1 Hari<br>1 Hari',
          price: '1.100.000<br>2.200.000<br>2.450.000',
          syllabus_path: '/training/entrepreneur-leadership/time-and-priority-management-elm005.php'
        },
        {
          code: 'ELM006',
          name: 'Agile Management / Agile Leadership',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '1.800.000<br>2.800.000<br>3.050.000',
          syllabus_path: '/training/entrepreneur-leadership/agile-management-agile-leadership-elm006.php'
        },
        {
          code: 'ELM007',
          name: 'Creative & Analytical Thinking',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '1.800.000<br>2.800.000<br>3.050.000',
          syllabus_path: '/training/entrepreneur-leadership/creative-and-analytical-thinking-elm007.php'
        },
        {
          code: 'ELM008',
          name: 'Public Speaking & Presentation Skills',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '1.800.000<br>2.800.000<br>3.050.000',
          syllabus_path: '/training/entrepreneur-leadership/public-speaking-presentation-skills-elm008.php'
        },
        {
          code: 'ELM009',
          name: 'Professional Trainer, Speaker, Coach',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>1 Hari<br>1 Hari',
          price: '1.100.000<br>2.200.000<br>2.450.000',
          syllabus_path: '/training/entrepreneur-leadership/professional-trainer-speaker-coach-elm009.php'
        }
      ],
      MN: [{
          code: "MN001",
          name: "Smart Manufacturing and Industry 4.0",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/manufacturing/smart-manufacturing-and-industry-40-mn001.php"
        },
        {
          code: "MN002",
          name: "Lean Six Sigma for Operational Excellence",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/manufacturing/lean-six-sigma-for-operational-excellence-mn002.php"
        },
        {
          code: "MN003",
          name: "Digital Supply Chain Management",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/manufacturing/digital-supply-chain-management-mn003.php"
        },
        {
          code: "MN004",
          name: "Total Productive Maintenance (TPM) & Predictive Maintenance",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/manufacturing/total-productive-maintenance-tpm-and-predictive-maintenance-mn004.php"
        },
        {
          code: "MN005",
          name: "Data-Driven Manufacturing: Excel to Power BI",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/manufacturing/data-driven-manufacturing:-excel-to-power-bi-mn005.php"
        },
        {
          code: "MN006",
          name: "Manufacturing Performance KPI Dashboard with Excel",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/manufacturing/manufacturing-performance-kpi-dashboard-with-excel-mn006.php"
        },
        {
          code: "MN007",
          name: "Effective Production Planning and Inventory Control (PPIC)",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/manufacturing/effective-production-planning-and-inventory-control-ppic-mn007.php"
        },
        {
          code: "MN008",
          name: "Manufacturing Cost Control & Profitability",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/manufacturing/manufacturing-cost-control-and-profitability-mn008.php"
        },
        {
          code: "MN009",
          name: "Workforce Productivity and Shopfloor Management",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/manufacturing/workforce-productivity-and-shopfloor-management-mn009.php"
        },
        {
          code: "MN010",
          name: "Green Manufacturing and ESG Compliance",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/manufacturing/green-manufacturing-and-esg-compliance-mn010.php"
        },
        {
          code: "MN011",
          name: "Quality Control and Six Sigma in Manufacturing",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/manufacturing/quality-control-and-six-sigma-in-manufacturing-mn011.php"
        },
        {
          code: "MN012",
          name: "ERP Manufacturing Module Overview",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/manufacturing/erp-manufacturing-module-overview-mn012.php"
        },
        {
          code: "MN013",
          name: "Manufacturing Strategy and Transformation",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/manufacturing/manufacturing-strategy-and-transformation-mn013.php"
        },
        {
          code: "MN014",
          name: "Production Reporting and Data Analysis",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/manufacturing/manufacturing/production-reporting-and-data-analysis-mn014.php"
        },
        {
          code: "MN015",
          name: "Manufacturing Costing and Efficiency",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/manufacturing/manufacturing-costing-and-efficiency-mn015.php"
        },
        {
          code: "MN016",
          name: "Lean Manufacturing and Waste Elimination",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/manufacturing/lean-manufacturing-and-waste-elimination-mn016.php"
        },
        {
          code: "MN017",
          name: "Shopfloor Digitalization and Smart Factory Basics",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/manufacturing/shopfloor-digitalization-and-smart-factory-basics-mn017.php"
        },
        {
          code: "MN018",
          name: "Leadership & People Development for Manufacturing Managers",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/manufacturing/leadership-and-people-development-for-manufacturing-managers-mn018.php"
        }
      ],
      RT: [{
          code: "RT001",
          name: "Retail Strategy and Omni-Channel Management",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/retail/retail-strategy-and-omni-channel-management-rt001.php"
        },
        {
          code: "RT002",
          name: "Visual Merchandising and Store Layout Optimization",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/retail/visual-merchandising-and-store-layout-optimization-rt002.php"
        },
        {
          code: "RT003",
          name: "Retail Data Analytics and Reporting",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/retail/retail-data-analytics-and-reporting-rt003.php"
        },
        {
          code: "RT004",
          name: "Customer Service Excellence in Retail",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/retail/customer-service-excellence-in-retail-rt004.php"
        },
        {
          code: "RT005",
          name: "Inventory Management and Shrinkage Control",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/retail/inventory-management-and-shrinkage-control-rt005.php"
        },
        {
          code: "RT006",
          name: "Retail Marketing and Promotion Strategy",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/retail/retail-marketing-and-promotion-strategy-rt006.php"
        },
        {
          code: "RT007",
          name: "Retail Leadership and Store Management",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/retail/retail-leadership-and-store-management-rt007.php"
        },
        {
          code: "RT008",
          name: "Digital Transformation in Retail",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/retail/digital-transformation-in-retail-rt008.php"
        },
        {
          code: "RT009",
          name: "Salesmanship and Retail Selling Techniques",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/retail/salesmanship-and-retail-selling-techniques-rt009.php"
        },
        {
          code: "RT010",
          name: "Managing Retail Operations During High Season",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/retail/managing-retail-operations-during-high-season-rt010.php"
        }
      ],
      DS: [{
          code: "DS001",
          name: "Sales and Distribution Strategy for FMCG",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/distribution/sales-and-distribution-strategy-for-fmcg-ds001.php"
        },
        {
          code: "DS002",
          name: "Distributor Management and Channel Development",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/distribution/distributor-management-and-channel-development-ds002.php"
        },
        {
          code: "DS003",
          name: "Inventory Management and Warehouse Operations",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/distribution/inventory-management-and-warehouse-operations-ds003.php"
        },
        {
          code: "DS004",
          name: "Route Optimization and Delivery Management",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/distribution/route-optimization-and-delivery-management-ds004.php"
        },
        {
          code: "DS005",
          name: "Trade Marketing and Promotion Execution",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/distribution/trade-marketing-and-promotion-execution-ds005.php"
        },
        {
          code: "DS006",
          name: "Sales Forecasting and Demand Planning",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/distribution/sales-forecasting-and-demand-planning-ds006.php"
        },
        {
          code: "DS007",
          name: "Distributor Performance Monitoring and Dashboarding",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/distribution/distributor-performance-monitoring-and-dashboarding-ds007.php"
        },
        {
          code: "DS008",
          name: "Credit Management in Distribution",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/distribution/credit-management-in-distribution-ds008.php"
        },
        {
          code: "DS009",
          name: "Digital Transformation for Distribution Network",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/distribution/digital-transformation-for-distribution-network-ds009.php"
        },
        {
          code: "DS010",
          name: "Leadership and Team Management for Distribution Supervisors",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/distribution/leadership-and-team-management-for-distribution-supervisors-ds010.php"
        }
      ],
      BN: [{
          code: 'BN001',
          name: 'Digital Banking and Fintech Transformation',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/banking/digital-banking-and-fintech-transformation-bn001.php'
        },
        {
          code: 'BN002',
          name: 'Credit Risk Management and Scoring',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/banking/credit-risk-management-and-scoring-bn002.php'
        },
        {
          code: 'BN003',
          name: 'Operational Excellence in Banking Services',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/banking/operational-excellence-in-banking-services-bn003.php'
        },
        {
          code: 'BN004',
          name: 'Core Banking System Understanding for Non-IT',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/banking/core-banking-system-understanding-for-non-it-bn004.php'
        },
        {
          code: 'BN005',
          name: 'Bank Financial Statement Analysis and Profitability',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/banking/bank-financial-statement-analysis-and-profitability-bn005.php'
        },
        {
          code: 'BN006',
          name: 'Regulatory Compliance and Anti-Money Laundering (AML)',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/banking/egulatory-compliance-and-anti-money-laundering-aml-bn006.php'
        },
        {
          code: 'BN007',
          name: 'Digital Marketing and Customer Engagement for Banking',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/banking/digital-marketing-and-customer-engagement-for-banking-bn007.php'
        },
        {
          code: 'BN008',
          name: 'Retail Lending and Microfinance Strategies',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/banking/retail-lending-and-microfinance-strategies-bn008.php'
        },
        {
          code: 'BN009',
          name: 'Branch Performance and KPI Management',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/banking/branch-performance-and-kpi-management-bn009.php'
        },
        {
          code: 'BN010',
          name: 'Leadership and Risk Culture in Banking',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/banking/leadership-and-risk-culture-in-banking-bn010.php'
        }
      ],
      MF: [{
          code: 'MF001',
          name: 'Credit Analysis and Consumer Financing',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/multifinance/credit-analysis-and-consumer-financing-mf001.php'
        },
        {
          code: 'MF002',
          name: 'Collection Strategy and Delinquency Management',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/multifinance/collection-strategy-and-delinquency-management-mf002.php'
        },
        {
          code: 'MF003',
          name: 'Risk Management in Multifinance',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/multifinance/risk-management-in-multifinance-mf003.php'
        },
        {
          code: 'MF004',
          name: 'Operational Excellence in Financing Process',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/multifinance/operational-excellence-in-financing-process-mf004.php'
        },
        {
          code: 'MF005',
          name: 'Anti Fraud Awareness and Investigation Techniques',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/multifinance/anti-fraud-awareness-and-investigation-techniques-mf005.php'
        },
        {
          code: 'MF006',
          name: 'Digital Transformation in Multifinance',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/multifinance/digital-transformation-in-multifinance-mf006.php'
        },
        {
          code: 'MF007',
          name: 'Financial Performance and Portfolio Monitoring',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/multifinance/financial-performance-and-portfolio-monitoring-mf007.php'
        },
        {
          code: 'MF008',
          name: 'Customer Experience and Service Excellence',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/multifinance/customer-experience-and-service-excellence-mf008.php'
        },
        {
          code: 'MF009',
          name: 'Product Innovation and Marketing Strategy',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/multifinance/product-innovation-and-marketing-strategy-mf009.php'
        },
        {
          code: 'MF010',
          name: 'Leadership and Performance Culture for Multifinance Supervisors',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/multifinance/leadership-and-performance-culture-for-multifinance-supervisors-mf010.php'
        }
      ],
      IN: [{
          code: 'IN001',
          name: 'Digital Transformation in Insurance',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/insurance/digital-transformation-in-insurance-in001.php'
        },
        {
          code: 'IN002',
          name: 'Risk-Based Capital (RBC) and Risk Management in Insurance',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/insurance/risk-based-capital-rbc-and-risk-management-in-insurance-in002.php'
        },
        {
          code: 'IN003',
          name: 'Underwriting Management and Risk Selection',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/insurance/underwriting-management-and-risk-selection-in003.php'
        },
        {
          code: 'IN004',
          name: 'Claim Handling and Fraud Prevention',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/insurance/claim-handling-and-fraud-prevention-in004.php'
        },
        {
          code: 'IN005',
          name: 'Product Development and Innovation in Insurance',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/insurance/product-development-and-innovation-in-insurance-in005.php'
        },
        {
          code: 'IN006',
          name: 'Regulatory Compliance and Governance',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/insurance/regulatory-compliance-and-governance-in006.php'
        },
        {
          code: 'IN007',
          name: 'Customer Service Excellence in Insurance',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/insurance/customer-service-excellence-in-insurance-in007.php'
        },
        {
          code: 'IN008',
          name: 'Agency Development and Leadership for Insurance Sales',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/insurance/agency-development-and-leadership-for-insurance-sales-in008.php'
        },
        {
          code: 'IN009',
          name: 'Bancassurance Management and Partnership Strategy',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/insurance/bancassurance-management-and-partnership-strategy-in009.php'
        },
        {
          code: 'IN010',
          name: 'Data Analytics and Reporting for Insurance Business',
          type: 'Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)',
          duration: '1 Hari<br>2 Hari<br>2 Hari',
          price: '',
          syllabus_path: '/training/insurance/data-analytics-and-reporting-for-insurance-business-in010.php'
        }
      ],
      DTO: [{
          code: "DTO001",
          name: "Digital Transformation Strategy and Roadmap",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/dto/digital-transformation-strategy-and-roadmap-dto001.html"
        },
        {
          code: "DTO002",
          name: "Customer-Centric Digital Experience (CX/UX)",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/dto/customer-centric-digital-experience-cx-ux-dto002.html"
        },
        {
          code: "DTO003",
          name: "Business Process Reengineering and Automation",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/dto/business-process-reengineering-and-automation-dto003.html"
        },
        {
          code: "DTO004",
          name: "Artificial Intelligence and Data-Driven Innovation",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/dto/artificial-intelligence-and-data-driven-innovation-dto004.html"
        },
        {
          code: "DTO005",
          name: "Agile Enterprise and Digital Culture Change",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/dto/agile-enterprise-and-digital-culture-change-dto005.html"
        },
        {
          code: "DTO006",
          name: "Technology Stack and Platform Selection for Digital Ecosystem",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/dto/technology-stack-and-platform-selection-for-digital-ecosystem-dto006.html"
        },
        {
          code: "DTO007",
          name: "E-Governance and Compliance in Digital Initiatives",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/dto/e-governance-and-compliance-in-digital-initiatives-dto007.html"
        },
        {
          code: "DTO008",
          name: "Digital KPI, Analytics & Performance Monitoring",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/dto/digital-kpi-analytics-and-performance-monitoring-dto008.html"
        },
        {
          code: "DTO009",
          name: "Digital Product and Innovation Management",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/dto/digital-product-and-innovation-management-dto009.html"
        },
        {
          code: "DTO010",
          name: "Omnichannel Strategy and Marketing Automation",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/dto/omnichannel-strategy-and-marketing-automation-dto010.html"
        }
      ],
      RWDS: [{
          code: "RWDS001",
          name: "Introduction to Data Science and Career Path",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/ds/rwds001-introduction-to-data-science.php"
        },
        {
          code: "RWDS002",
          name: "Python Programming for Data Science",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/ds/rwds002-python-programming-for-data-science.php"
        },
        {
          code: "RWDS003",
          name: "Statistics and Probability for Data Science",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/ds/rwds003-statistics-probability-for-data-science.php"
        },
        {
          code: "RWDS004",
          name: "Exploratory Data Analysis (EDA) and Data Wrangling",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/ds/rwds004-exploratory-data-analysis-data-wrangling.php"
        },
        {
          code: "RWDS005",
          name: "Machine Learning Algorithms and Supervised Learning",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/ds/rwds005-machine-learning-algorithms-supervised-learning.php"
        },
        {
          code: "RWDS006",
          name: "Unsupervised Learning and Clustering Techniques",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/ds/rwds006-unsupervised-learning-clustering-techniques.php"
        },
        {
          code: "RWDS007",
          name: "Model Evaluation, Tuning and Deployment",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/ds/rwds007-data-visualization-storytelling.php"
        },
        {
          code: "RWDS008",
          name: "Real-World Data Science Projects and Case Studies",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/ds/rwds008-big-data-fundamentals-technologies.php"
        },
        {
          code: "RWDS009",
          name: "Big Data and Distributed Computing (Hadoop, Spark)",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/ds/rwds009-introduction-to-deep-learning-neural-networks.php"
        },
        {
          code: "RWDS010",
          name: "AI Ethics, Bias, and Responsible Data Science",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/ds/rwds010-natural-language-processing-fundamentals.php"
        }
      ],
      CSO: [{
          code: "CSO001",
          name: "Strategic Planning and Business Model Innovation",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cso/strategic-planning-and-business-model-innovation-cso001.html"
        },
        {
          code: "CSO002",
          name: "Corporate Performance Management and OKR",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cso/corporate-performance-management-and-okr-cso002.html"
        },
        {
          code: "CSO003",
          name: "Data-Driven Decision Making for Executives",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cso/data-driven-decision-making-for-executives-cso003.html"
        },
        {
          code: "CSO004",
          name: "Digital Business Strategy and Market Disruption",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cso/digital-business-strategy-and-market-disruption-cso004.html"
        },
        {
          code: "CSO005",
          name: "Strategic Risk Management and Scenario Planning",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cso/strategic-risk-management-and-scenario-planning-cso005.html"
        },
        {
          code: "CSO006",
          name: "Stakeholder Engagement and Strategic Communication",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cso/stakeholder-engagement-and-strategic-communication-cso006.html"
        },
        {
          code: "CSO007",
          name: "Sustainability and ESG Strategy",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cso/sustainability-and-esg-strategy-cso007.html"
        },
        {
          code: "CSO008",
          name: "Mergers, Acquisitions and Strategic Partnerships",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cso/mergers-acquisitions-and-strategic-partnerships-cso008.html"
        },
        {
          code: "CSO009",
          name: "Corporate Transformation and Change Leadership",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cso/corporate-transformation-and-change-leadership-cso009.html"
        },
        {
          code: "CSO010",
          name: "Balanced Scorecard and Strategic Execution",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cso/balanced-scorecard-and-strategic-execution-cso010.html"
        }
      ],
      BICS: [{
          code: "BIC001",
          name: "Business and IT Consulting Fundamentals",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/bic/business-and-it-consulting-fundamentals-bic001.html"
        },
        {
          code: "BIC002",
          name: "Requirement Analysis and Stakeholder Management",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/bic/requirement-analysis-and-stakeholder-management-bic002.html"
        },
        {
          code: "BIC003",
          name: "Design Thinking and Solution Framing",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/bic/design-thinking-and-solution-framing-bic003.html"
        },
        {
          code: "BIC004",
          name: "Consulting Proposal and Business Case Development",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/bic/consulting-proposal-and-business-case-development-bic004.html"
        },
        {
          code: "BIC005",
          name: "Presentation, Communication and Storytelling for Consultants",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/bic/presentation-communication-and-storytelling-for-consultants-bic005.html"
        },
        {
          code: "BIC006",
          name: "Change Management and Consulting Execution Skills",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/bic/change-management-and-consulting-execution-skills-bic006.html"
        },
        {
          code: "BIC007",
          name: "Strategic Problem Solving and Issue Tree Structuring",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/bic/strategic-problem-solving-and-issue-tree-structuring-bic007.html"
        },
        {
          code: "BIC008",
          name: "Facilitation, Interviewing and Workshop Moderation",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/bic/facilitation-interviewing-and-workshop-moderation-bic008.html"
        },
        {
          code: "BIC009",
          name: "IT and Business Alignment in Consulting Projects",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/bic/it-and-business-alignment-in-consulting-projects-bic009.html"
        },
        {
          code: "BIC010",
          name: "Client Engagement and Relationship Management",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/bic/client-engagement-and-relationship-management-bic010.html"
        }
      ],
      CFO: [{
          code: "CFO001",
          name: "Strategic Financial Management for Executives",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cfo/cfo001-strategic-financial-management.php"
        },
        {
          code: "CFO002",
          name: "Budgeting, Forecasting & Financial Planning Mastery",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cfo/cfo002-budgeting-forecasting-financial-planning.php"
        },
        {
          code: "CFO003",
          name: "Financial Statement Analysis and Business Valuation",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cfo/cfo003-financial-statement-valuation.php"
        },
        {
          code: "CFO004",
          name: "Capital Structure & Corporate Funding Strategy",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cfo/cfo004-capital-structure-funding-strategy.php"
        },
        {
          code: "CFO005",
          name: "Cash Flow Optimization and Working Capital Management",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cfo/cfo005-cash-flow-working-capital.php"
        },
        {
          code: "CFO006",
          name: "Performance Dashboard & KPI for Finance Leaders",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cfo/cfo006-performance-dashboard-kpi.php"
        },
        {
          code: "CFO007",
          name: "Risk-Based Financial Decision Making",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cfo/cfo007-risk-based-financial-decision.php"
        },
        {
          code: "CFO008",
          name: "Finance Digitalization and ERP Systems for CFO",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cfo/cfo008-finance-digitalization-erp.php"
        },
        {
          code: "CFO009",
          name: "Investor Relations & Financial Communication Skills",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cfo/cfo009-investor-relations-communication.php"
        },
        {
          code: "CFO010",
          name: "Tax Planning Strategy for CFOs",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cfo/cfo010-tax-planning-strategy.php"
        }
      ],
      CTO: [{
          code: "CTO001",
          name: "Strategic Technology Planning for Digital Business",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cto/cto001-strategic-technology-planning.php"
        },
        {
          code: "CTO002",
          name: "Enterprise Architecture and Technology Governance",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cto/cto002-enterprise-architecture-governance.php"
        },
        {
          code: "CTO003",
          name: "Leading Digital Transformation and Innovation",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cto/cto003-digital-transformation-innovation.php"
        },
        {
          code: "CTO004",
          name: "Cloud Computing Strategy and Cost Optimization",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cto/cto004-cloud-computing-strategy.php"
        },
        {
          code: "CTO005",
          name: "Cybersecurity Strategy and Technology Risk Management",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cto/cto005-cybersecurity-strategy-risk.php"
        },
        {
          code: "CTO006",
          name: "Managing Software Development Teams and DevOps Culture",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cto/cto006-managing-devops-teams.php"
        },
        {
          code: "CTO007",
          name: "IT Budgeting, Investment Analysis and ROI",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cto/cto007-it-budgeting-roi.php"
        },
        {
          code: "CTO008",
          name: "AI and Data Strategy for CTO",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cto/cto008-ai-data-strategy.php"
        },
        {
          code: "CTO009",
          name: "Vendor Management and IT Outsourcing Strategy",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cto/cto009-vendor-management-outsourcing.php"
        },
        {
          code: "CTO010",
          name: "Technology Due Diligence for M&A and Startup Investment",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cto/cto010-technology-due-diligence.php"
        }
      ],
      COO: [{
          code: "COO001",
          name: "Strategic Technology Planning for Digital Business",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/coo/coo001-strategic-tech-planning.php"
        },
        {
          code: "COO002",
          name: "Enterprise Architecture and Technology Governance",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/coo/coo002-enterprise-architecture-governance.php"
        },
        {
          code: "COO003",
          name: "Leading Digital Transformation and Innovation",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/coo/coo003-leading-digital-transformation-innovation.php"
        },
        {
          code: "COO004",
          name: "Cloud Computing Strategy and Cost Optimization",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/coo/coo004-cloud-computing-cost-optimization.php"
        },
        {
          code: "COO005",
          name: "Cybersecurity Strategy and Technology Risk Management",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/coo/coo005-cybersecurity-risk-management.php"
        },
        {
          code: "COO006",
          name: "Managing Software Development Teams and DevOps Culture",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/coo/coo006-devops-team-management.php"
        },
        {
          code: "COO007",
          name: "IT Budgeting, Investment Analysis and ROI",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/coo/coo007-it-budgeting-roi.php"
        },
        {
          code: "COO008",
          name: "AI and Data Strategy for COO",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/coo/coo008-ai-data-strategy.php"
        },
        {
          code: "COO009",
          name: "Vendor Management and IT Outsourcing Strategy",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/coo/coo009-vendor-management-outsourcing.php"
        },
        {
          code: "COO010",
          name: "Technology Due Diligence for M&A and Startup Investment",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/coo/coo010-technology-due-diligence.php"
        }
      ],
      CSEC: [{
          code: "CSEC001",
          name: "Introduction to Cybersecurity for Professionals",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cybersecurity/csec001-introduction-to-cybersecurity-for-professionals.php"
        },
        {
          code: "CSEC002",
          name: "Protecting Business from Cyber Threats",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cybersecurity/csec002-protecting-business-from-cyber-threats.php"
        },
        {
          code: "CSEC003",
          name: "Network & Endpoint Security Fundamentals",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cybersecurity/csec003-network-and-endpoint-security-fundamentals.php"
        },
        {
          code: "CSEC004",
          name: "Ethical Hacking & Penetration Testing (Fundamental)",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cybersecurity/csec004-ethical-hacking-penetration-testing-fundamental.php"
        },
        {
          code: "CSEC005",
          name: "Cybersecurity Policy and Compliance for Company",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/cybersecurity/csec005-cybersecurity-policy-and-compliance-for-company.php"
        }
      ],

      DEVOPS: [{
          code: "DEVOPS001",
          name: "CI/CD Pipeline with GitHub Actions, GitLab, and Jenkins",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/devops/de001-ci-cd-pipeline-github-actions-gitlab-jenkins.php"
        },
        {
          code: "DEVOPS002",
          name: "Docker and Kubernetes for Scalable App Deployment",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/devops/de002-docker-kubernetes-scalable-app-deployment.php"
        },
        {
          code: "DEVOPS003",
          name: "Infrastructure as Code (IaC) with Terraform and Ansible",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/devops/de003-infrastructure-as-code-terraform-ansible.php"
        },
        {
          code: "DEVOPS004",
          name: "Monitoring, Logging & Alerting using Prometheus, Grafana, and ELK Stack",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/devops/de004-monitoring-logging-alerting-prometheus-grafana-elk-stack.php"
        },
        {
          code: "DEVOPS005",
          name: "DevSecOps: Integrating Security into DevOps Lifecycle",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/devops/de005-devsecops-integrating-security-devops-lifecycle.php"
        },
        {
          code: "DEVOPS006",
          name: "Cloud Native DevOps with Kubernetes and Helm",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/devops/de006-cloud-infrastructure-management-aws-gcp-azure.php"
        },
        {
          code: "DEVOPS007",
          name: "High Availability and Auto-Scaling in AWS/GCP/Azure",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/devops/de007-site-reliability-engineering-practices-tools.php"
        },
        {
          code: "DEVOPS008",
          name: "GitOps with ArgoCD and FluxCD",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/devops/de008-microservices-architecture-design-implementation.php"
        },
        {
          code: "DEVOPS009",
          name: "Advanced Bash & Shell Scripting for DevOps Automation",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/devops/de009-api-design-development-rest-graphql.php"
        },
        {
          code: "DEVOPS010",
          name: "Service Mesh & Zero Trust Networking with Istio/Linkerd",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/devops/de010-automation-testing-selenium-cypress-postman.php"
        }
      ],

      DA: [{
          code: "DA001",
          name: "Fundamentals of Business Analytics",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/da/da001-business-analytics.php"
        },
        {
          code: "DA002",
          name: "Data Visualization and Dashboard using Excel & Power BI",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/da/da002-data-visualization-dashboard.php"
        },
        {
          code: "DA003",
          name: "Descriptive, Diagnostic and Predictive Analytics",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/da/da003-descriptive-diagnostic-predictive.php"
        },
        {
          code: "DA004",
          name: "SQL for Data Analysis",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/da/da004-sql-data-analysis.php"
        },
        {
          code: "DA005",
          name: "Python for Business Data Analytics",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/da/da005-python-data-analytics.php"
        },
        {
          code: "DA006",
          name: "Statistics and Data Interpretation for Business",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/da/da006-statistics-data-interpretation.php"
        },
        {
          code: "DA007",
          name: "A/B Testing and Experimental Design",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/da/da007-ab-testing-experimental-design.php"
        },
        {
          code: "DA008",
          name: "Data Cleaning and Preparation Techniques",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/da/da008-data-cleaning-preparation-techniques.php"
        },
        {
          code: "DA009",
          name: "KPI and Business Performance Analysis",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/da/da009-kpi-business-performance-analysis.php"
        },
        {
          code: "DA010",
          name: "Customer and Marketing Analytics",
          type: "Online (Zoom)<br>Onsite (Offline di kantor Rayterton)<br>On Client Site (min 5 persons)",
          duration: "1 Hari<br>2 Hari<br>2 Hari",
          price: "",
          syllabus_path: "/training/da/da010-customer-marketing-analytics.php"
        }
      ]
    };

    const kategoriSelect = document.getElementById("kategoriSelect"); // For "Deskripsi, Silabus, dan Harga Training"
    const tabelContainer = document.getElementById("tabelContainer"); // For "Deskripsi, Silabus, dan Harga Training"
    const whatsappNumber = '6281296150369'; // WhatsApp number for Indonesia

    kategoriSelect.addEventListener("change", function() { // For "Deskripsi, Silabus, dan Harga Training"
      const selected = this.value;
      const list = trainingData[selected] || [];
      if (!list.length) return tabelContainer.innerHTML = "";

      let html = `
      <table>
        <thead><tr>
          <th>Kode</th>
          <th>Nama Training</th>
          <th>Type Training</th>
          <th>Durasi (Hari)</th>
          <th>Harga Per Person (Rp.)</th>
         <th>Diskon Juli 2025</th>
         <th>Net Harga Per Person (Rp.)</th>
        </tr></thead><tbody>
    `;
      list.forEach(item => {
        const types = item.type.split('<br>');
        const durs = item.duration.split('<br>');
        const prcs = item.price.split('<br>');
        const rows = Math.max(types.length, durs.length, prcs.length);

        for (let i = 0; i < rows; i++) {
          const type = types[i] || '';
          const duration = durs[i] || '';
          const price = prcs[i] || '';
          const originalPrice = calculateOriginal(price, 15);

          // Encode the WhatsApp message
          const whatsappMessage = encodeURIComponent(`Saya mau bertanya mengenai training ${item.name} (${item.code}) dengan tipe training ${type}. Mohon informasikan detail harganya ya.`);
          const whatsappLink = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;

          html += `<tr>`;
          if (i === 0) { // Only show Kode and Nama Training for the first row
            html += `<td rowspan="${rows}">${item.code}</td>
                   <td rowspan="${rows}">
                     ${item.name}<br>
                     <a href="${item.syllabus_path}" class="silabus-btn" target="_blank">Deskripsi dan Silabus</a>
                     <a href="daftar.html?kode=${item.code}" class="silabus-btn" target="_blank">Daftar</a>
                   </td>`;
          }
          html += `<td>${type}</td>
                 <td>${duration}</td>`;

          // Logic for displaying prices or WhatsApp button spanning 3 columns
          if (price && price.trim() !== '') {
            html += `<td style="text-align: right;">${originalPrice}</td>`;
            html += `<td style="text-align: right;">15%</td>`;
            html += `<td style="text-align: right;">${price}</td>`;
          } else {
            // If no price, show WhatsApp button spanning 3 columns
            html += `<td colspan="3" style="text-align: center;"><a href="${whatsappLink}" class="whatsapp-btn" target="_blank">Ask via WhatsApp</a></td>`;
          }

          html += `</tr>`;
        }
      });
      html += "</tbody></table>";
      tabelContainer.innerHTML = html;
    });

    // Tab functionality for "Jadwal Training Terdekat"
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    function showTab(month) {
      tabContents.forEach(content => {
        content.classList.remove('active');
      });
      tabButtons.forEach(button => {
        button.classList.remove('active');
      });

      document.getElementById(`schedule-${month}`).classList.add('active');
      document.querySelector(`.tab-btn[data-month="${month}"]`).classList.add('active');
    }

    tabButtons.forEach(button => {
      button.addEventListener('click', () => {
        const month = button.dataset.month;
        showTab(month);
      });
    });

    // Show July tab by default on page load
    showTab('august');
  </script>
</body>

</html>