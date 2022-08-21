// Ini for tampilkan content kalo KTU click Kab/Kota
// Pertama torang get dulu element kong kase maso di variabel baru
const divKabKota = document.getElementById("pilihanKabKota");
const buttonKabKota = document.querySelector(
	".button-pilih-pemerintah.kab-kota"
);

// Abis itu torang tambah event listner, yaitu ketika button di click maka aksi apa yang akan terjadi. dalam kasus
// ini torang beking fungsi baru yaitu addNew
buttonKabKota.addEventListener("click", addNew);

// Fungsi ini torang pake for kase tambah elemet div baru di dalam suatu container div laeng
function addNew() {
	if (divKabKota.style.display !== "none") {
		const newDiv = document.createElement("div");
		const divBaru = `<div class="heading-penerima-kab-kota mt-3">
    <label for="cariKab/Kota" class="nama-kab-kota">Cari Kabupaten/Kota:</label>
    <div class="input-icons">
        <span class="icons"><i class="bi bi-search"></i></span>
        <input class="form-control" id="cariKab/Kota" rows="3" placeholder="Cari">
    </div>
</div>
<hr>
<div class="ktu-pilih-kab-kota" id="ktuPilihKabKota">
    <div class="form-check pilih-kab-kota d-flex align-items-center">
        <input class="form-check-input" type="radio" name="pilihanKabKota" id="pilihanKabKota1" value="option1">
        <label class="form-check-label" for="pilihanKabKota1">
            Kabupaten Minahasa Utara
        </label>
    </div>
    <hr>
    <div class="form-check pilih-kab-kota d-flex align-items-center">
        <input class="form-check-input" type="radio" name="pilihanKabKota" id="pilihanKabKota2" value="option2">
        <label class="form-check-label" for="pilihanKabKota2">
            Kota Bitung
        </label>
    </div>
    <hr>
    <div class="form-check pilih-kab-kota d-flex align-items-center">
        <input class="form-check-input" type="radio" name="pilihanKabKota" id="pilihanKabKota3" value="option3">
        <label class="form-check-label" for="pilihanKabKota3">
            Kabupaten Minahasa
        </label>
    </div>
    <hr>
    <div class="form-check pilih-kab-kota d-flex align-items-center">
        <input class="form-check-input" type="radio" name="pilihanKabKota" id="pilihanKabKota4" value="option4">
        <label class="form-check-label" for="pilihanKabKota4">
            Kabupaten Minahasa Selatan
        </label>
    </div>
    <hr>
</div>`;
		newDiv.insertAdjacentHTML(`beforeend`, divBaru);
		// newDiv.innerHTML = html.trim();

		// const divBaru = newDiv.appendChild();

		divKabKota.appendChild(newDiv);
	} else {
		divKabKota.style.display = "block";
	}
}

// function elementFromHTML(html) {
// 	const template = document.createElement("template");

// 	template.innerHTML = html.trim();
// }

`<div class="heading-penerima-kab-kota mt-3">
    <label for="cariKab/Kota" class="nama-kab-kota">Cari Kabupaten/Kota:</label>
    <div class="input-icons">
        <span class="icons"><i class="bi bi-search"></i></span>
        <input class="form-control" id="cariKab/Kota" rows="3" placeholder="Cari">
    </div>
</div>
<hr>
<div class="ktu-pilih-kab-kota" id="ktuPilihKabKota">
    <div class="form-check pilih-kab-kota d-flex align-items-center">
        <input class="form-check-input" type="radio" name="pilihanKabKota" id="pilihanKabKota1" value="option1">
        <label class="form-check-label" for="pilihanKabKota1">
            Kabupaten Minahasa Utara
        </label>
    </div>
    <hr>
    <div class="form-check pilih-kab-kota d-flex align-items-center">
        <input class="form-check-input" type="radio" name="pilihanKabKota" id="pilihanKabKota2" value="option2">
        <label class="form-check-label" for="pilihanKabKota2">
            Kota Bitung
        </label>
    </div>
    <hr>
    <div class="form-check pilih-kab-kota d-flex align-items-center">
        <input class="form-check-input" type="radio" name="pilihanKabKota" id="pilihanKabKota3" value="option3">
        <label class="form-check-label" for="pilihanKabKota3">
            Kabupaten Minahasa
        </label>
    </div>
    <hr>
    <div class="form-check pilih-kab-kota d-flex align-items-center">
        <input class="form-check-input" type="radio" name="pilihanKabKota" id="pilihanKabKota4" value="option4">
        <label class="form-check-label" for="pilihanKabKota4">
            Kabupaten Minahasa Selatan
        </label>
    </div>
    <hr>
</div>`;
