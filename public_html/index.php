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

    #kategori .hero details>summary {
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
      transition: transform 0.3s cubic-bezier(.4, 2, .3, 1), box-shadow 0.3s;
      opacity: 1;
      border: 1px solid #e7eef7;
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 12px 24px rgba(2, 13, 33, .08)
    }

    .cardx.hide {
      opacity: 0;
      transform: translateY(40px) scale(0.96);
      pointer-events: none;
    }

    /* Animasi smooth untuk dropdown card kelas populer */
    #more-cards {
      overflow: hidden;
      max-height: 0;
      opacity: 0;
      transition: max-height 0.6s cubic-bezier(.4, .6, .2, 1), opacity 0.4s cubic-bezier(.4, .6, .2, 1);
      will-change: max-height, opacity;
    }

    #more-cards.show {
      max-height: 1200px;
      opacity: 1;
    }

    #more-cards .cardx {
      opacity: 0;
      transform: translateY(30px) scale(0.98);
      transition: opacity 0.5s, transform 0.5s;
    }

    #more-cards.show .cardx {
      opacity: 1;
      transform: translateY(0) scale(1);
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

    .cardx.extra {
      opacity: 0;
      transform: translateY(40px) scale(0.96);
      pointer-events: none;
      transition: opacity 0.5s, transform 0.5s;
      display: none;
    }

    .cardx.extra.show {
      opacity: 1;
      transform: translateY(0) scale(1);
      pointer-events: auto;
      display: block;
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
    section #schedule {
      padding: 20px 20px;
      max-width: 1100px;
      margin: 30px auto 0;
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .month-tabs {
      display: flex;
      justify-content: flex-start;
      margin-bottom: 20px;
      border-bottom: 2px solid #004080;
    }

    .tab-btn {
      background-color: #f1f1f1;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 10px 20px;
      transition: 0.3s;
      font-size: 16px;
      color: #004080;
      border-radius: 8px 8px 0 0;
      margin-right: 5px;
    }

    .tab-btn:hover {
      background-color: #ddd;
    }

    .tab-btn.active {
      background-color: #004080;
      color: white;
      border-bottom: 2px solid #004080;
    }

    .tab-content {
      display: none;
      padding-top: 10px;
    }

    .tab-content.active {
      display: block;
    }

    .table-responsive {
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      font-size: 14px;
    }

    th {
      background-color: #004080;
      color: white;
      padding: 12px;
    }

    td {
      background: #f4faff;
      border: 1px solid #ddd;
      padding: 10px;
    }

    /* button di jadwal */
    .cta-button {
      padding: 6px 12px;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
      font-size: 14px;
      display: inline-block;
      margin: 5px 5px 0 0;
      transition: background-color 0.2s ease, opacity 0.2s ease;
      background-color: #e60000 !important;
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
        <li class="nav-item"><a class="nav-link" href="#kategori">Deskripsi Training</a></li>
        <li class="nav-item"><a class="nav-link" href="#featured">Kelas Populer</a></li>
        <li class="nav-item"><a class="nav-link" href="#schedule">Jadwal Terdekat</a></li>
        <li class="nav-item"><a class="nav-link" href="#register">Registrasi</a></li>
        <li class="nav-item"><a class="nav-link" href="#register">Join Us as Partners</a></li>
        <li class="nav-item"><a class="nav-link" href="#register">Join Us as Trainers</a></li>
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
    <div class="container content" id="about">
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
      <p style="font-size:1.5rem;">Silahkan pilih kategori training di bawah ini:</p>
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

      <div class="cards" id="featured-cards">
        <!-- Card 1 -->
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
        <!-- Card 2 -->
        <article class="cardx">
          <img src="assets/img/ORACLE.jpg" alt="IFRS & Reporting">
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
        <!-- Card 3 -->
        <article class="cardx">
          <img src="assets/img/SQLPLSQL.jpg" alt="Leadership for Managers">
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
        <!-- card ext -->
        <article class="cardx extra">
          <img src="assets/img/dotnet.jpg" alt="dotNet dan Angular">
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
        <article class="cardx extra">
          <img src="assets/img/foundation.jpg" alt="dotNet dan Angular">
          <div class="bx">
            <span class="badge-soft">IT</span>
            <h4>Foundation AI</h4>
            <p>Kelas Foundation of AI memberikan pemahaman dasar tentang kecerdasan buatan, termasuk konsep machine learning, neural network, dan penerapannya dalam berbagai bidang teknologi modern.</p>
            <div class="meta"><i class="bi bi-clock"></i> 2 hari • <i class="bi bi-bar-chart"></i> Intermediate</div>
            <div class="actions">
              <a class="btn-cta" href="#register">Daftar</a>
              <a class="btn-ghost" href="#detail-coo">Detail</a>
            </div>
          </div>
        </article>
        <article class="cardx extra">
          <img src="assets/img/cyber.jpg" alt="dotNet dan Angular">
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
        <article class="cardx extra">
          <img src="assets/img/management consult.jpg" alt="dotNet dan Angular">
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
        <article class="cardx extra">
          <img src="assets/img//risk.avif" alt="dotNet dan Angular">
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
        <article class="cardx extra">
          <img src="assets/img/strat.avif" alt="dotNet dan Angular">
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
      <!-- <div id="more-cards" style="display:none;">
        <div class="cards">

        </div>
      </div> -->
    </div>
    <div class="text-center mt-3">
      <button class="btn-cta" id="show-more-cards" onclick="toggleCards()">Tampilkan Kelas Lainnya</button>
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
              <a href="proses_pendaftaran.php?id=IT018&training_date=2025-09-30" class="cta-button">Bayar Sekarang</a>
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
    // // Script untuk menampilkan lebih banyak kelas dengan animasi
    // const cardsContainer = document.getElementById('cards-container');
    // // Tambahkan/ubah script toggleCards agar ada animasi
    // // ...existing code...
    // function toggleCards() {
    //   var more = document.getElementById('more-cards');
    //   var btn = document.getElementById('show-more-cards');
    //   var cards = more.querySelectorAll('.cardx');
    //   if (!more.classList.contains('show')) {
    //     more.style.display = 'block';
    //     setTimeout(() => {
    //       more.classList.add('show');
    //       cards.forEach((card, i) => {
    //         card.classList.remove('hide');
    //         card.style.transitionDelay = (i * 80) + 'ms';
    //       });
    //     }, 10);
    //     btn.textContent = 'Sembunyikan Kelas Lainnya';
    //   } else {
    //     more.classList.remove('show');
    //     cards.forEach((card, i) => {
    //       card.classList.add('hide');
    //       card.style.transitionDelay = (i * 50) + 'ms';
    //     });
    //     setTimeout(() => {
    //       more.style.display = 'none';
    //       // Tambahkan scroll ke atas #featured
    //       document.getElementById('featured').scrollIntoView({
    //         behavior: 'smooth',
    //         block: 'start'
    //       });
    //     }, 250); // tunggu animasi selesai
    //     btn.textContent = 'Tampilkan Kelas Lainnya';
    //   }
    // }
    // // ...existing code...
    // // Inisialisasi cardx di dropdown agar hidden saat awal
    // document.querySelectorAll('#more-cards .cardx').forEach(card => card.classList.add('hide'));
    // // Tahun footer
    // document.getElementById('y').textContent = new Date().getFullYear();
    // // Smooth scroll
    // document.querySelectorAll('a[href^="#"]').forEach(a => {
    //   a.addEventListener('click', e => {
    //     const id = a.getAttribute('href');
    //     if (id.length > 1) {
    //       e.preventDefault();
    //       document.querySelector(id)?.scrollIntoView({
    //         behavior: 'smooth',
    //         block: 'start'
    //       });
    //     }
    //   })
    // });

    function toggleCards() {
      var btn = document.getElementById('show-more-cards');
      var extras = document.querySelectorAll('.cardx.extra');
      var showing = extras[0]?.classList.contains('show');
      if (!showing) {
        extras.forEach((card, i) => {
          card.style.display = 'block';
          setTimeout(() => {
            card.classList.add('show');
            card.style.transitionDelay = (i * 80) + 'ms';
          }, 10);
        });
        btn.textContent = 'Sembunyikan Kelas Lainnya';
      } else {
        extras.forEach((card, i) => {
          card.classList.remove('show');
          card.style.transitionDelay = (i * 50) + 'ms';
          setTimeout(() => {
            card.style.display = 'none';
          }, 500);
        });
        btn.textContent = 'Tampilkan Kelas Lainnya';
        // Scroll ke atas #featured
        document.getElementById('featured').scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    }
    // ...existing code...
    // Inisialisasi cardx.extra agar hidden saat awal
    document.querySelectorAll('.cardx.extra').forEach(card => {
      card.classList.remove('show');
      card.style.display = 'none';
    });
  </script>

  <script>
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

  <script>
    // Script untuk menonaktifkan tombol "Bayar Sekarang" jika tanggal training sudah lewat
    function disablePastTrainingButtons() {
      const ctaButtons = document.querySelectorAll('.cta-button');
      const today = new Date();
      today.setHours(0, 0, 0, 0);

      ctaButtons.forEach(button => {
        const href = button.getAttribute('href');
        if (!href) return;

        try {
          const urlParams = new URLSearchParams(href.split('?')[1]);
          const trainingDateStr = urlParams.get('training_date');

          if (trainingDateStr) {
            const dateParts = trainingDateStr.split('-');
            const year = parseInt(dateParts[0], 10);
            const month = parseInt(dateParts[1], 10) - 1;
            const day = parseInt(dateParts[2], 10);
            const trainingDate = new Date(year, month, day);

            if (trainingDate < today) {
              button.textContent = 'Fully Booked';
              button.style.setProperty('background-color', '#007bff', 'important');
              button.style.cursor = 'not-allowed';
              button.disabled = true;
              button.removeAttribute('href');
            }
          }
        } catch (error) {
          console.error('Gagal memproses tombol dengan href:', href, error);
        }
      });
    }
    // Panggil fungsi untuk memeriksa dan memperbarui tombol
    disablePastTrainingButtons();
  </script>
  <script>

  </script>
</body>

</html>