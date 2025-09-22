<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Training DTO - Rayterton Academy</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; margin: 20px; background: #f2f2f2; color: #333; }
    h1 { color: #004080; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; background: white; }
    th, td { padding: 12px; border: 1px solid #ddd; text-align: left; font-size: 14px; vertical-align: top; }
    th { background-color: #004080; color: white; }
    a.button {
      padding: 6px 12px;
      background-color: #0066cc;
      color: white;
      text-decoration: none;
      border-radius: 4px;
      font-size: 14px;
    }
    a.button:hover {
      background-color: #003d66;
    }
    .container {
      max-width: 1100px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>
<?php include('../../partials/header.html'); ?>
<div class="container">
  <h1>Daftar Training Career Track: Digital Transformation Officer (DTO)</h1>
  <table>
    <thead>
      <tr>
        <th>Kode</th>
        <th>Nama Training & Aksi</th>
        <th>Deskripsi Singkat</th>
        <th>Type Training</th>
        <th>Durasi (Hari)</th>
      </tr>
    </thead>
    <tbody>
      
      <!-- ### Problem Analysis
The task requires updating the `href` attributes in the HTML content from `[File](Pasted_Text_1753592350231.txt)` to match the file names shown in the image of the file list. The current `href` values end with `.html`, but the actual files in the directory are PHP files. We need to replace `.html` with `.php` and ensure that the path structure remains consistent.

### Steps to Solve
1. **Identify the Current Structure**:
   - The `href` in the HTML content ends with `.html`.
   - The actual files in the directory end with `.php`.

2. **Update the `href`**:
   - Replace `.html` with `.php` in each `href`.
   - Match the file names from the image to the corresponding entries in the HTML content.
   - For example:
     - `/training/dto/digital-transformation-strategy-and-roadmap-dto001.html` → `/training/dto/dto001-digital-transformation-roadmap.php`
     - `/training/dto/customer-centric-digital-experience-cx-ux-dto002.html` → `/training/dto/dto002-cx-ux-experience.php`
     - And so on.

3. **Path Preservation**:
   - Ensure that `/training/dto/` remains unchanged in all `href` values.

### Solution Implementation
Below is the updated HTML content with the corrected `href` attributes:

```html -->
<tr>
  <td rowspan="3">DTO001</td>
  <td rowspan="3">
    <div><strong>Digital Transformation Strategy and Roadmap</strong></div>
    <div style="margin-top: 6px; display:inline-flex; gap:10px;">
      <a href="/training/dto/dto001-digital-transformation-roadmap.php" class="button" target="_blank">Deskripsi & Silabus</a>
      <a href="../../daftar.html?kode=DTO001" class="button" target="_blank">Daftar</a>
    </div>
  </td>
  <td rowspan="3">Merancang dan mengeksekusi peta jalan transformasi digital perusahaan. Cocok untuk: DTO, Transformation Lead, IT Strategy.</td>
  <td><div class="type-training-item">Online (Zoom)</div></td>
  <td><div class="duration-item">1 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">Onsite (Offline di kantor Rayterton)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">On Client Site (min 5 persons)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <td rowspan="3">DTO002</td>
  <td rowspan="3">
    <div><strong>Customer-Centric Digital Experience (CX/UX)</strong></div>
    <div style="margin-top: 6px; display:inline-flex; gap:10px;">
      <a href="/training/dto/dto002-cx-ux-experience.php" class="button" target="_blank">Deskripsi & Silabus</a>
      <a href="../../daftar.html?kode=DTO002" class="button" target="_blank">Daftar</a>
    </div>
  </td>
  <td rowspan="3">Mendesain pengalaman digital yang terintegrasi dan fokus pada pelanggan. Cocok untuk: DTO, Digital CX Officer, UX Strategist.</td>
  <td><div class="type-training-item">Online (Zoom)</div></td>
  <td><div class="duration-item">1 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">Onsite (Offline di kantor Rayterton)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">On Client Site (min 5 persons)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <td rowspan="3">DTO003</td>
  <td rowspan="3">
    <div><strong>Business Process Reengineering and Automation</strong></div>
    <div style="margin-top: 6px; display:inline-flex; gap:10px;">
      <a href="/training/dto/dto003-business-process-automation.php" class="button" target="_blank">Deskripsi & Silabus</a>
      <a href="../../daftar.html?kode=DTO003" class="button" target="_blank">Daftar</a>
    </div>
  </td>
  <td rowspan="3">Optimasi proses bisnis melalui digitalisasi & RPA. Cocok untuk: DTO, BPM Officer, Process Improvement Lead.</td>
  <td><div class="type-training-item">Online (Zoom)</div></td>
  <td><div class="duration-item">1 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">Onsite (Offline di kantor Rayterton)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">On Client Site (min 5 persons)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <td rowspan="3">DTO004</td>
  <td rowspan="3">
    <div><strong>Artificial Intelligence and Data-Driven Innovation</strong></div>
    <div style="margin-top: 6px; display:inline-flex; gap:10px;">
      <a href="/training/dto/dto004-artificial-intelligence-innovation.php" class="button" target="_blank">Deskripsi & Silabus</a>
      <a href="../../daftar.html?kode=DTO004" class="button" target="_blank">Daftar</a>
    </div>
  </td>
  <td rowspan="3">Pemanfaatan AI untuk efisiensi dan inovasi produk/jasa. Cocok untuk: DTO, Data Scientist, AI Project Manager.</td>
  <td><div class="type-training-item">Online (Zoom)</div></td>
  <td><div class="duration-item">1 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">Onsite (Offline di kantor Rayterton)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">On Client Site (min 5 persons)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <td rowspan="3">DTO005</td>
  <td rowspan="3">
    <div><strong>Agile Enterprise and Digital Culture Change</strong></div>
    <div style="margin-top: 6px; display:inline-flex; gap:10px;">
      <a href="/training/dto/dto005-agile-culture-change.php" class="button" target="_blank">Deskripsi & Silabus</a>
      <a href="../../daftar.html?kode=DTO005" class="button" target="_blank">Daftar</a>
    </div>
  </td>
  <td rowspan="3">Membangun budaya digital yang agile dan adaptif. Cocok untuk: DTO, Agile Coach, HR Transformation Officer.</td>
  <td><div class="type-training-item">Online (Zoom)</div></td>
  <td><div class="duration-item">1 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">Onsite (Offline di kantor Rayterton)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">On Client Site (min 5 persons)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <td rowspan="3">DTO006</td>
  <td rowspan="3">
    <div><strong>Technology Stack and Platform Selection for Digital Ecosystem</strong></div>
    <div style="margin-top: 6px; display:inline-flex; gap:10px;">
      <a href="/training/dto/dto006-technology-stack-platform.php" class="button" target="_blank">Deskripsi & Silabus</a>
      <a href="../../daftar.html?kode=DTO006" class="button" target="_blank">Daftar</a>
    </div>
  </td>
  <td rowspan="3">Memilih platform dan stack yang sesuai untuk akselerasi digital. Cocok untuk: DTO, Solution Architect, IT Delivery Lead.</td>
  <td><div class="type-training-item">Online (Zoom)</div></td>
  <td><div class="duration-item">1 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">Onsite (Offline di kantor Rayterton)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">On Client Site (min 5 persons)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <td rowspan="3">DTO007</td>
  <td rowspan="3">
    <div><strong>E-Governance and Compliance in Digital Initiatives</strong></div>
    <div style="margin-top: 6px; display:inline-flex; gap:10px;">
      <a href="/training/dto/dto007-e-governance-compliance.php" class="button" target="_blank">Deskripsi & Silabus</a>
      <a href="../../daftar.html?kode=DTO007" class="button" target="_blank">Daftar</a>
    </div>
  </td>
  <td rowspan="3">Tata kelola dan kepatuhan transformasi digital. Cocok untuk: DTO, IT Governance Officer, Compliance Digital.</td>
  <td><div class="type-training-item">Online (Zoom)</div></td>
  <td><div class="duration-item">1 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">Onsite (Offline di kantor Rayterton)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">On Client Site (min 5 persons)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <td rowspan="3">DTO008</td>
  <td rowspan="3">
    <div><strong>Digital KPI, Analytics & Performance Monitoring</strong></div>
    <div style="margin-top: 6px; display:inline-flex; gap:10px;">
      <a href="/training/dto/dto008-kpi-analytics-performance.php" class="button" target="_blank">Deskripsi & Silabus</a>
      <a href="../../daftar.html?kode=DTO008" class="button" target="_blank">Daftar</a>
    </div>
  </td>
  <td rowspan="3">Mengukur dampak digitalisasi secara real-time dan strategis. Cocok untuk: DTO, Performance Analyst, Digital PMO.</td>
  <td><div class="type-training-item">Online (Zoom)</div></td>
  <td><div class="duration-item">1 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">Onsite (Offline di kantor Rayterton)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">On Client Site (min 5 persons)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <tr>
  <td rowspan="3">DTO009</td>
  <td rowspan="3">
    <div><strong>Digital Product and Innovation Management</strong></div>
    <div style="margin-top: 6px; display:inline-flex; gap:10px;">
      <a href="/training/dto/dto009-product-innovation-management.php" class="button" target="_blank">Deskripsi & Silabus</a>
      <a href="../../daftar.html?kode=DTO009" class="button" target="_blank">Daftar</a>
    </div>
  </td>
  <td rowspan="3">Manajemen produk digital dan inovasi berkelanjutan. Cocok untuk: DTO, Product Manager, Innovation Lead.</td>
  <td><div class="type-training-item">Online (Zoom)</div></td>
  <td><div class="duration-item">1 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">Onsite (Offline di kantor Rayterton)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">On Client Site (min 5 persons)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <td rowspan="3">DTO010</td>
  <td rowspan="3">
    <div><strong>Omnichannel Strategy and Marketing Automation</strong></div>
    <div style="margin-top: 6px; display:inline-flex; gap:10px;">
      <a href="/training/dto/dto010-omnichannel-marketing.php" class="button" target="_blank">Deskripsi & Silabus</a>
      <a href="../../daftar.html?kode=DTO010" class="button" target="_blank">Daftar</a>
    </div>
  </td>
  <td rowspan="3">Menyatukan channel digital dan otomasi pemasaran. Cocok untuk: DTO, Digital Marketing Lead, CRM Manager.</td>
  <td><div class="type-training-item">Online (Zoom)</div></td>
  <td><div class="duration-item">1 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">Onsite (Offline di kantor Rayterton)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
<tr>
  <td><div class="type-training-item">On Client Site (min 5 persons)</div></td>
  <td><div class="duration-item">2 Hari</div></td>
</tr>
    </tbody>
  </table>
</div>
<?php include('../../partials/footer.html'); ?>
</body>
</html>
