<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rayterton Academy - Pendaftaran Trainer</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <style>
    * { box-sizing: border-box; }
    body { font-family: 'Poppins', sans-serif; margin: 0; padding: 0; background: #f9f9f9; color: #333; }
    section { padding: 40px 20px; max-width: 1100px; margin: 30px auto; background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
    h2 { color: #004080; border-left: 5px solid #004080; padding-left: 10px; margin-bottom: 20px; }
    select, input, textarea { font-family: 'Poppins', sans-serif; padding: 10px; width: 100%; border: 1px solid #ccc; border-radius: 8px; margin-bottom: 20px; background-color: #fff; }
    .form-group label { display: block; margin-bottom: 5px; font-weight: 500; }
    .form-group label .optional { font-weight: 300; color: #666; }
    /* GANTI SEMUA ATURAN .cta-button DENGAN KODE LENGKAP DI BAWAH INI */

.cta-button {
  width: 100%;
  display: block;
  margin-top: 20px;
  padding: 15px 30px;
  background-color: #004080;
  color: white;
  border: none;
  border-radius: 10px; /* [DIUBAH] Menggunakan nilai besar untuk lengkungan sempurna */
  cursor: pointer;
  font-size: 16px;
  font-weight: 700;   /* [DIUBAH] Font dibuat tebal (bold) */
  transition: background-color 0.3s ease;
  text-align: center;
}

.cta-button:hover {
  background-color: #005c9e;
}

.cta-button:disabled {
  background-color: #ccc;
  cursor: not-allowed;
  opacity: 0.7;
  color: #666;
}
    .hidden { display: none; }
    .button-container { display: flex; flex-wrap: wrap; gap: 10px; padding: 10px; border: 1px solid #ccc; border-radius: 8px; margin-bottom: 20px; max-height: 200px; overflow-y: auto; }
    .choice-button { background-color: #f0f0f0; border: 1px solid #ddd; border-radius: 20px; padding: 8px 15px; cursor: pointer; font-size: 14px; transition: all 0.2s ease-in-out; user-select: none; }
    .choice-button:hover { background-color: #e0e0e0; }
    .choice-button.active { background-color: #007acc; color: white; border-color: #005c9e; font-weight: 500; }
    .tabs-nav { display: flex; border-bottom: 2px solid #ccc; margin-bottom: 0; }
    .tab-nav-button { background-color: #f0f0f0; border: 1px solid #ccc; border-bottom: none; padding: 10px 15px; cursor: pointer; font-size: 14px; border-radius: 8px 8px 0 0; margin-right: 5px; }
    .tab-nav-button.active { background-color: #007acc; color: white; border-color: #007acc; font-weight: 500; }
    .tabs-content { border: 1px solid #ccc; border-top: none; padding: 15px; border-radius: 0 0 8px 8px; }
    .tab-pane { display: none; }
    .tab-pane.active { display: block; }
  </style>
</head>
<body>
<?php  ?>
  <section>
    <h2>Formulir Pendaftaran Trainer</h2>
    <form id="trainerForm" action="daftar_trainer_form_proxy.php" method="POST" enctype="multipart/form-data">

      <div class="form-group"><label>Nama Lengkap (Full Name) <span style="color:red;">*</span></label><input type="text" name="fullname" required></div>
      <div class="form-group"><label>HP/Whatsapp <span style="color:red;">*</span></label><input type="tel" name="whatsapp" required></div>
      <div class="form-group"><label>Email <span style="color:red;">*</span></label><input type="email" name="email" required></div>
      <div class="form-group"><label>Pekerjaan Terakhir / Saat Ini <span class="optional">(Opsional)</span></label><input type="text" name="pekerjaan" placeholder="Contoh: Web Developer, Manager"></div>
      <div class="form-group"><label>Jabatan <span class="optional">(Opsional)</span></label><input type="text" name="jabatan" placeholder="Contoh: Senior Developer, Project Manager"></div>
      <div class="form-group"><label>Perusahaan <span class="optional">(Opsional)</span></label><input type="text" name="perusahaan" placeholder="Contoh: PT ABC Indonesia"></div>
      <hr style="margin: 30px 0;">
      <p><b>Silahkan pilih kelas yang anda bisa sebagai trainer (boleh pilih lebih dari 1)</b></p>
      <div class="form-group"><label>1. Kategori Training</label><div id="kategori-container" class="button-container"></div></div>
      <div class="form-group hidden" id="kelas-training-wrapper"><label>Kelas Training</label><div id="kelas-tab-nav" class="tabs-nav"></div><div id="kelas-tab-content" class="tabs-content"></div></div>
      <div id="hidden-inputs"></div>
      <p style="text-align: center; font-weight: bold; margin: 15px 0;">ATAU</p>
      <div class="form-group"><label>2. Minat Pengajaran Lainnya / Area Keahlian Anda</label><textarea id="pengajaran_diminati" name="pengajaran_diminati" rows="4" placeholder="Jika kelas yang Anda inginkan tidak ada di daftar..."></textarea></div>
      <hr style="margin: 30px 0;">
      <div class="form-group"><label>Resume (CV) (PDF Only) <span style="color:red;">*</span></label><input type="file" name="resume" accept=".pdf" required></div>

      <div class="g-recaptcha" data-sitekey="6Ld3Q5QrAAAAAM5N9lH2T-meZF_16-gSeZ0DxkOB" data-callback="enableTrainerSubmitBtn"></div>
      <br>

      <button type="submit" class="cta-button" id="trainerSubmitBtn" disabled>Daftar Sekarang</button>
    </form>
  </section>

<script>
    // [BARU] 5. Fungsi callback untuk mengaktifkan tombol setelah reCAPTCHA selesai
    function enableTrainerSubmitBtn() {
        document.getElementById('trainerSubmitBtn').disabled = false;
    }

    // ... sisa JavaScript Anda yang lain tetap sama ...
    document.addEventListener('DOMContentLoaded', function() {
        // (kode JS untuk tombol kategori, tab, dan kelas tidak perlu diubah)
        const kategoriContainer = document.getElementById('kategori-container');
        const kelasTrainingWrapper = document.getElementById('kelas-training-wrapper');
        const tabNavContainer = document.getElementById('kelas-tab-nav');
        const tabContentContainer = document.getElementById('kelas-tab-content');
        const form = document.getElementById('trainerForm');
        const pengajaranDiminatiTextarea = document.getElementById('pengajaran_diminati');
        const hiddenInputsContainer = document.getElementById('hidden-inputs');
        let allCategoriesData = [];
        fetch('daftar_trainer_form_proxy.php?action=get_categories').then(response => response.json()).then(data => { if (data.error) { console.error('Server Error:', data.error); return; } allCategoriesData = data; kategoriContainer.innerHTML = ''; data.forEach(category => { const button = document.createElement('button'); button.type = 'button'; button.className = 'choice-button'; button.textContent = `${category.CATEGORY_CODE} - ${category.CATEGORY_NAME}`; button.dataset.value = category.CATEGORY_CODE; kategoriContainer.appendChild(button); }); }).catch(error => console.error('Error fetching categories:', error));
        kategoriContainer.addEventListener('click', function(event) { if (event.target.classList.contains('choice-button')) { event.target.classList.toggle('active'); updateKelasTabs(); } });
        function updateKelasTabs() { const activeKategoriButtons = kategoriContainer.querySelectorAll('.choice-button.active'); const selectedCategories = Array.from(activeKategoriButtons).map(btn => btn.dataset.value); tabNavContainer.innerHTML = ''; tabContentContainer.innerHTML = ''; if (selectedCategories.length > 0) { kelasTrainingWrapper.classList.remove('hidden'); const fetchPromises = selectedCategories.map(categoryCode => fetch(`daftar_trainer_form_proxy.php?action=get_classes&category=${encodeURIComponent(categoryCode)}`).then(response => response.json())); Promise.all(fetchPromises).then(resultsByCat => { selectedCategories.forEach((categoryCode, index) => { const classes = resultsByCat[index]; const categoryData = allCategoriesData.find(cat => cat.CATEGORY_CODE === categoryCode); const tabButton = document.createElement('button'); tabButton.type = 'button'; tabButton.className = 'tab-nav-button'; tabButton.textContent = categoryData.CATEGORY_NAME; tabButton.dataset.tabTarget = `tab-${categoryCode}`; tabNavContainer.appendChild(tabButton); const tabPane = document.createElement('div'); tabPane.id = `tab-${categoryCode}`; tabPane.className = 'tab-pane'; const classButtonsContainer = document.createElement('div'); classButtonsContainer.className = 'button-container'; classButtonsContainer.style.border = 'none'; if (classes.length > 0) { classes.forEach(cls => { const button = document.createElement('button'); button.type = 'button'; button.className = 'choice-button'; button.textContent = `(${cls.class_code}) ${cls.class_title}`; button.dataset.value = `${cls.class_code} - ${cls.class_title}`; classButtonsContainer.appendChild(button); }); } else { classButtonsContainer.textContent = 'Tidak ada kelas di kategori ini.'; } tabPane.appendChild(classButtonsContainer); tabContentContainer.appendChild(tabPane); }); if (tabNavContainer.firstChild) { tabNavContainer.firstChild.classList.add('active'); tabContentContainer.firstChild.classList.add('active'); } }); } else { kelasTrainingWrapper.classList.add('hidden'); } }
        tabNavContainer.addEventListener('click', function(event) { if (event.target.classList.contains('tab-nav-button')) { tabNavContainer.querySelectorAll('.tab-nav-button').forEach(btn => btn.classList.remove('active')); tabContentContainer.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('active')); const targetPaneId = event.target.dataset.tabTarget; event.target.classList.add('active'); document.getElementById(targetPaneId).classList.add('active'); } });
        tabContentContainer.addEventListener('click', function(event) { if (event.target.classList.contains('choice-button')) { event.target.classList.toggle('active'); } });
        form.addEventListener('submit', function(event) { hiddenInputsContainer.innerHTML = ''; const activeKategori = kategoriContainer.querySelectorAll('.choice-button.active'); activeKategori.forEach(btn => { const hiddenInput = document.createElement('input'); hiddenInput.type = 'hidden'; hiddenInput.name = 'kategori[]'; hiddenInput.value = btn.dataset.value; hiddenInputsContainer.appendChild(hiddenInput); }); const activeKelas = tabContentContainer.querySelectorAll('.choice-button.active'); activeKelas.forEach(btn => { const hiddenInput = document.createElement('input'); hiddenInput.type = 'hidden'; hiddenInput.name = 'kelas_training[]'; hiddenInput.value = btn.dataset.value; hiddenInputsContainer.appendChild(hiddenInput); }); const isKelasSelected = activeKelas.length > 0; const isMinatFilled = pengajaranDiminatiTextarea.value.trim() !== ''; if (!isKelasSelected && !isMinatFilled) { alert('Harap isi salah satu: Pilih "Kelas Training" dari daftar atau isi "Minat Pengajaran Lainnya".'); event.preventDefault(); } });
    });
</script>
<?php  ?>
</body>
</html>