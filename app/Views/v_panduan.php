<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="card border-0 shadow">
    <div class="card-header text-center display-3">Panduan Pengguna</div>
    <div class="card-body p-3">
        <div class="accordion" id="accordionPricing">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Apa itu Data Master?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionPricing">
                    <div class="accordion-body">
                        Data master terdiri dari 6 sub menu antara lain: Data Objek, Data Kategori, Data Attribut, Data Bulan, Data Tahun, dan Data Lokasi.
                        <ul>
                            <li>Data Objek <br>Data Objek merupakan judul dari sebuah datasets (tabel). Misal suatu datasets memiliki judul "Pertumbuhan Penduduk Kota Banjarbaru Tahun 2011-2019".</li>
                            <li>Data Kategori <br>Yang dimaksud dengan Kategori yaitu sebuah pengelompokkan dari beberapa objek. Misalkan terdapat 2 objek dengan judul "Angka Inflasi Kota Banjarbaru Tahun 2011-2019" dan "Pertumbuhan Ekonomi (%) Kota Banjarbaru, Kalimantan Selatan, dan Indonesia Tahun 2011-2018", maka kedua objek tersebut termasuk kedalam kategori "Ekonomi". Kategori ini akan memudahkan dalam melakukan pencarian objek nantinya.</li>
                            <li>Data Attribut <br>Attribut merupakan sebuah informasi tambahan dari suatu datasets (tabel). Misal terdapat objek dengan judul "Proyeksi Penduduk Kota Banjarbaru Per Kecamatan Tahun 2010-2020 (BPS)", maka attribut akan berisi "L+P" yang menandakan gabungan antara Laki-laki dan Perempuan.</li>
                            <li>Data Tahun <br>Berisikan tahun yang digunakan dalam menginput sebuah data nantinya.</li>
                            <li>Data Lokasi <br>Data lokasi merupakan nama-nama lokasi yang nantinya dibutuhkan untuk menginput datasets. Khususnya lokasi dari Kalimantan Selatan</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Bagaimana cara menambahkan Data Objek baru?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionPricing">
                    <div class="accordion-body">
                        Sebelum mengisi Data Objek harus terlebih dahulu mengisi Data Kategori! Jika sudah berikut tahapan dalam mengisi data objek:
                        <ol>
                            <li>Pada sidebar menu pilih Objek pada Data Master <br><img loading="lazy" width="100%" src="<?= base_url('public/assets/img/panduan/1.PNG'); ?>" alt=""></li>
                            <li>Kemudian pilih Tombol Tambah Data, maka akan tampil seperti ini: <br><img loading="lazy" width="100%" src="<?= base_url('public/assets/img/panduan/2.PNG'); ?>" alt=""></li>
                            <li>Kedua kolom tersebut wajib diisi. Jika sudah menambahkan kategori di awal tadi, maka kategori tersebut akan muncul pada input berupa dropdown sebagai berikut: <br><img loading="lazy" width="100%" src="<?= base_url('public/assets/img/panduan/3.PNG'); ?>" alt=""></li>
                            <li>Pilih tombol "Tambah" jika judul objek dengan kategorinya sudah sesuai.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Bagaimana cara melakukan zoom pada diagram?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionPricing">
                    <div class="accordion-body">
                        Diagram yang dapat di zoom hanya terdapat pada menu statistik. Klik kanan satu kali pada diagram tersebut maka fitur zoom akan aktif dan gunakan scroll mouse untuk melakukan zoom in atau zoom out. Pilih tombol reset zoom untuk mengembalikan tampilan seperti semula.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                        Bisakah kita memfokuskan diagram pada lokasi tertentu saja?
                    </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionPricing">
                    <div class="accordion-body">
                        Bisa, dengan cara meng-klik nama lokasi yang ingin dihilangkan pada legenda diagram hingga lokasi yang di klik itu tercoret. Seperti gambar barikut:
                        <br><img loading="lazy" width="100%" src="<?= base_url('public/assets/img/panduan/4.PNG'); ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        Lorem ipsum dolor, sit amet consectetur adipisicing.
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionPricing">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere optio tenetur atque autem unde quia provident perspiciatis. Eum, quod quo.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading6">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                        Lorem ipsum dolor, sit amet consectetur adipisicing.
                    </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionPricing">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere optio tenetur atque autem unde quia provident perspiciatis. Eum, quod quo.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading7">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                        Lorem ipsum dolor, sit amet consectetur adipisicing.
                    </button>
                </h2>
                <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionPricing">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere optio tenetur atque autem unde quia provident perspiciatis. Eum, quod quo.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading8">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                        Lorem ipsum dolor, sit amet consectetur adipisicing.
                    </button>
                </h2>
                <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionPricing">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere optio tenetur atque autem unde quia provident perspiciatis. Eum, quod quo.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>