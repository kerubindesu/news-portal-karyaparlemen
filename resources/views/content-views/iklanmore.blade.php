@extends('layout.laman_template')

@section('title', 'Iklan')

@section('container')
<div class="container">
    {{-- <span>{{ Breadcrumbs::render('kki') }}</span> --}}
    <a href="" class="mb-3">
        <img src="{{ asset("assets/img/1081458.jpg") }}" class="img-fluid rounded mb-3">
    </a>
    <h3>Ketentuan dan Kebijakan Iklan</h3>
    <p>Kami ingin mendukung ekosistem periklanan digital yang sehat—ekosistem yang tepercaya dan transparan, serta kondusif bagi pengguna, pengiklan, dan penayang. Tujuan situs ini adalah untuk membantu Anda membuat kampanye Google Ads yang sesuai dengan kebijakan periklanan kami yang tercantum di bawah ini. Kebijakan ini dirancang tidak hanya untuk mematuhi hukum, tetapi juga untuk memastikan pengalaman yang aman dan positif bagi pengguna kami. Ini berarti kebijakan kami melarang beberapa konten yang kami yakini berbahaya bagi pengguna dan ekosistem periklanan secara keseluruhan.
    Kami menggunakan kombinasi evaluasi otomatis dan oleh manusia untuk memastikan Google Ads mematuhi kebijakan ini. Namun, jika Anda melihat iklan yang mungkin melanggar kebijakan kami, harap laporkan iklan tersebut di sini.
    </p>

    <h3>Konten terlarang</h3>
    <h4>Barang palsu</h4>
    <p>Google Ads melarang penjualan atau promosi untuk penjualan barang palsu. Barang palsu mengandung merek dagang atau logo yang sama dengan atau sangat sulit dibedakan dari merek aslinya. Barang tersebut meniru fitur merek dari produk dalam upaya untuk menyamar sebagai produk asli dari pemilik merek. Kebijakan ini berlaku untuk konten iklan dan situs Anda.</p>
    <br>

    <h4>Produk atau layanan berbahaya</h4>
    <p>Kami ingin membantu orang-orang agar merasa aman saat online dan offline, jadi kami tidak mengizinkan iklan beberapa produk atau layanan yang menyebabkan kerusakan, kecelakaan, atau cedera.
    Contoh konten berbahaya: Narkoba (kimiawi atau herbal); zat psikoaktif; peralatan untuk memfasilitasi penggunaan obat; senjata, amunisi, bahan peledak, dan kembang api; petunjuk untuk membuat produk peledak atau produk berbahaya lain; produk tembakau</p>
    <br>

    <h4>Tidak Memperbolehkan perilaku yang tidak jujur</h4>
    <p> Kami menghargai kejujuran dan keadilan, jadi kami tidak mengizinkan promosi produk atau layanan yang dirancang untuk memungkinkan perilaku yang tidak jujur.
    Contoh produk atau layanan yang memfasilitasi pelanggaran hukum: Software atau petunjuk peretasan; layanan yang dirancang untuk menggelembungkan traffic iklan atau situs dengan cara yang manipulatif; dokumen palsu; jasa sontekan akademis</p>
    <br>

    <h4>Konten tidak pantas</h4>
    <p>Kami menghargai keberagaman dan menghormati pihak lain, dan kami berusaha keras untuk tidak menghina pengguna, oleh karena itu kami tidak mengizinkan iklan atau halaman tujuan yang menampilkan konten yang mengerikan atau mendukung kebencian, anti toleransi, diskriminasi, atau kekerasan.

    Contoh konten yang tidak patut atau menyinggung: penindasan atau intimidasi terhadap seseorang atau kelompok, diskriminasi rasial, pernak-pernik kelompok pembenci, gambar tempat kejadian perkara atau kecelakaan yang menjijikkan, kesadisan terhadap hewan, pembunuhan, pencederaan diri, ancaman atau pemerasan, penjualan atau perdagangan spesies langka, iklan yang menggunakan bahasa kasar</p>
    <br>

    <h2>Praktik terlarang</h2>
    <h4>Menyalahgunakan jaringan iklan</h4>
    <p>Kami menginginkan iklan yang bermanfaat, beragam, relevan, dan aman bagi pengguna di seluruh Jaringan Google. Kami tidak mengizinkan pengiklan untuk menjalankan iklan, konten, atau halaman tujuan yang berupaya untuk mengelabui atau menghindari proses peninjauan iklan.
    Contoh penyalahgunaan jaringan iklan: mempromosikan konten yang berisi malware; "penyelubungan" atau menggunakan teknik lain untuk menyembunyikan tujuan sebenarnya tempat pengguna akan diarahkan; "arbitrase" atau mempromosikan tujuan yang dirancang semata-mata atau terutama untuk menampilkan iklan; mempromosikan tujuan "jembatan" atau "gateway" yang semata-mata dirancang untuk mengirim pengguna ke tempat lain; beriklan dengan tujuan utama atau semata-mata untuk mendapatkan dukungan jaringan sosial publik dari pengguna; "mengakali" atau memanipulasi setelan dalam upaya untuk mengelak dari sistem pemeriksaan kebijakan kami</p>
    <br>

    <h4>Pengumpulan dan penggunaan data</h4>
    <p>Kami ingin pengguna percaya bahwa informasi tentang mereka akan dihormati dan ditangani dengan hati-hati sebagaimana mestinya. Karena itu, partner iklan kami tidak boleh menyalahgunakan informasi ini, atau mengumpulkannya untuk tujuan yang tidak jelas atau tanpa tindakan pengungkapan atau keamanan yang memadai.</p>
    <br>

    <p>Perhatikan bahwa kebijakan tambahan berlaku saat menggunakan iklan yang dipersonalisasi, yang mencakup pemasaran ulang dan audiens kustom. Jika Anda menggunakan fitur penargetan iklan yang dipersonalisasi, pastikan untuk meninjau kebijakan pengumpulan dan penggunaan data untuk iklan yang dipersonalisasi.
    Contoh informasi pengguna yang harus ditangani dengan hati-hati: nama lengkap; alamat email; alamat surat; nomor telepon; nomor KTP, pensiun, jaminan sosial, nomor pajak, perawatan kesehatan, atau SIM; tanggal lahir atau nama gadis ibu kandung bersama dengan salah satu dari informasi di atas; status keuangan; afiliasi politik; orientasi seksual; ras atau etnis; agama
    Contoh pengumpulan & penggunaan data yang tidak bertanggung jawab: mendapatkan informasi kartu kredit melalui server yang tidak aman, promosi yang mengklaim mengetahui orientasi seksual atau status finansial pengguna, pelanggaran terhadap kebijakan kami yang berlaku untuk periklanan menurut minat dan pemasaran ulang</p>
    <br>

    <h4>Pernyataan tidak benar</h4>
    <p>Kami ingin pengguna memercayai iklan pada platform kami, jadi kami berupaya untuk memastikan iklan transparan dan jujur, serta memberikan informasi yang dibutuhkan pengguna untuk mengambil keputusan yang tepat. Kami tidak mengizinkan iklan atau tujuan yang menipu pengguna dengan mengecualikan informasi produk yang relevan atau memberikan informasi yang menyesatkan tentang produk, layanan, atau bisnis.</p>
    <br>

    <p>Contoh informasi yang menyesatkan: menghilangkan atau menyembunyikan detail penagihan seperti bagaimana, berapa, dan kapan pengguna akan ditagih; menghapus atau menyembunyikan tagihan yang terkait dengan layanan keuangan seperti suku bunga, biaya, dan denda; tidak menampilkan NPWP atau nomor lisensi, informasi kontak, atau alamat fisik bila relevan; membuat penawaran yang sebenarnya tidak ada; membuat klaim yang menyesatkan atau tidak realistis terkait dengan penurunan berat badan atau perolehan keuntungan finansial; mengumpulkan donasi dengan alasan palsu; "phishing" atau mengaku sebagai perusahaan ternama agar pengguna memberikan informasi pribadi atau finansial yang berharga</p>
    <br>

    <h2>Konten dan fitur yang dibatasi</h2>
    <p>Kebijakan di bawah mencakup konten yang terkadang secara hukum atau budaya bersifat sensitif. Periklanan online dapat menjadi cara yang efektif untuk menjangkau pelanggan, namun di area yang sensitif, kami juga berusaha keras untuk mencegah iklan ini ditampilkan pada waktu dan tempat yang mungkin tidak tepat.

    Karena itulah, kami mengizinkan promosi konten di bawah ini, namun secara terbatas. Promosi ini mungkin tidak tampil kepada setiap pengguna di setiap lokasi, dan pengiklan mungkin harus memenuhi persyaratan tambahan sebelum iklan mereka valid untuk dijalankan. Perhatikan bahwa tidak semua produk iklan, fitur, atau jaringan dapat mendukung konten terbatas ini. Detail lebih lanjut dapat ditemukan di Pusat Kebijakan.</p>
    <br>

    <h4>Konten khusus dewasa</h4>
    <p>Iklan harus menghormati preferensi pengguna dan mematuhi peraturan hukum, jadi kami tidak mengizinkan jenis konten khusus dewasa tertentu dalam iklan dan halaman tujuan. Beberapa jenis iklan dan halaman tujuan yang berorientasi dewasa diizinkan jika mematuhi kebijakan di bawah ini dan tidak menargetkan pengguna di bawah umur, namun iklan hanya akan ditampilkan dalam skenario yang terbatas berdasarkan kueri penelusuran pengguna, usia pengguna, dan undang-undang lokal tempat iklan ditayangkan.

    Pelajari tentang konsekuensi jika Anda melanggar kebijakan kami.

    Contoh konten khusus dewasa yang dibatasi: klub tari telanjang, film erotis, mainan seks, majalah dewasa, produk peningkat dorongan seksual, situs perjodohan, model yang bergaya sensual</p>
    <br>

    <h4>Alkohol</h4>
    <p>Kami mematuhi undang-undang dan standar industri setempat tentang minuman beralkohol, jadi kami tidak mengizinkan jenis iklan terkait minuman beralkohol tertentu, baik untuk minuman beralkohol itu sendiri maupun minuman yang menyerupai minuman beralkohol. Beberapa jenis iklan yang berkaitan dengan minuman beralkohol diizinkan jika memenuhi kebijakan di bawah ini, tidak menargetkan pengguna di bawah umur, dan hanya menargetkan negara yang secara jelas diizinkan untuk menampilkan iklan minuman beralkohol.

    Contoh minuman beralkohol yang dibatasi: bir, anggur, sake, minuman keras atau minuman berkadar alkohol tinggi, sampanye, anggur yang mengandung alkohol tinggi, bir non-alkohol, anggur non-alkohol, dan minuman suling non-alkohol</p>
    <br>

    <h4>Hak cipta</h4>
    <p>Kami mematuhi undang-undang hak cipta setempat dan melindungi hak pemegang hak cipta, jadi kami tidak mengizinkan iklan yang tidak sah untuk menggunakan konten yang dilindungi hak cipta. Jika Anda memiliki izin resmi untuk menggunakan konten yang dilindungi hak cipta, ajukan permohonan sertifikasi untuk beriklan. Jika Anda melihat konten yang tidak sah, kirimkan keluhan terkait hak cipta.</p>
    <br>

    <h4>Perjudian dan permainan</h4>
    <p>Kami mendukung iklan perjudian yang bertanggung jawab dan mematuhi undang-undang perjudian dan standar industri setempat, jadi kami tidak mengizinkan jenis iklan terkait perjudian tertentu. Iklan terkait perjudian diizinkan jika mematuhi kebijakan di bawah ini dan pengiklan telah menerima sertifikasi Google Ads yang sesuai. Iklan perjudian harus menargetkan negara yang disetujui, memiliki halaman landing yang menampilkan informasi tentang perjudian yang bertanggung jawab, dan dilarang menargetkan pengguna di bawah umur. Lihat peraturan setempat untuk area yang ingin Anda targetkan.

    Contoh konten yang terkait dengan perjudian yang dibatasi: kasino fisik; situs tempat pengguna dapat melakukan taruhan dalam permainan poker, bingo, rolet, atau acara olahraga; lotere nasional atau swasta; situs agregator taruhan olahraga; situs yang menawarkan kode bonus atau penawaran promosi untuk situs perjudian; materi pendidikan online untuk game berbasis kasino, situs yang menawarkan game "poker untuk hiburan"; situs game uang tunai yang berbasis non-kasino</p>
    <br>

    <h4>Perawatan kesehatan dan obat-obatan</h4>
    <p>Kami berdedikasi untuk mematuhi peraturan periklanan terkait kesehatan dan pengobatan, jadi kami mengharapkan iklan dan halaman tujuannya mengikuti undang-undang dan standar industri yang sesuai. Beberapa konten terkait kesehatan sama sekali tidak boleh diiklankan, sementara konten lainnya hanya dapat diiklankan jika pengiklan mendapatkan sertifikasi dari Google dan hanya menargetkan negara yang disetujui. Lihat peraturan setempat untuk area yang ingin Anda targetkan.</p>
    <br>

    <h4>Konten politik</h4>
    <p>Kami mengharapkan semua iklan dan halaman tujuan politik mematuhi undang-undang pemilu dan kampanye setempat untuk setiap area yang ditargetkan iklan. Kebijakan ini mencakup "masa tenang" pemilu yang ditetapkan secara resmi.

    Contoh konten politik: promosi partai atau kandidat politik, dukungan masalah politi</p>
    <br>

    <h4>Layanan keuangan</h4>
    <p>Kami ingin pengguna mendapatkan informasi yang memadai agar dapat mengambil keputusan finansial yang tepat. Kebijakan kami dirancang untuk memberikan informasi kepada pengguna untuk mempertimbangkan biaya yang berkaitan dengan produk dan layanan keuangan serta untuk melindungi pengguna dari praktik yang merugikan atau menipu. Untuk tujuan kebijakan ini, kami menganggap produk dan layanan keuangan sebagai produk dan layanan yang terkait dengan pengelolaan dan investasi uang dan mata uang kripto, termasuk saran yang dipersonalisasi.

    Saat mempromosikan layanan dan produk keuangan, Anda harus mematuhi peraturan negara bagian dan lokal untuk wilayah yang ditargetkan iklan Anda — misalnya, mencantumkan pengungkapan spesifik yang diwajibkan oleh hukum setempat. Lihat daftar tidak lengkap kami mengenai persyaratan spesifik per negara untuk informasi lebih lanjut, namun perhatikan bahwa pengiklan diharapkan untuk melakukan penelitian sendiri tentang peraturan setempat untuk setiap lokasi yang ditargetkan iklan mereka.</p>
    <br>



    <h4>Merek dagang</h4>
    <p>Ada beberapa faktor yang menentukan kapan merek dagang dapat digunakan dalam iklan. Bersama faktor-faktor yang dijelaskan di Pusat Kebijakan kami, kebijakan ini hanya berlaku jika pemilik merek dagang telah mengajukan keluhan yang valid kepada Google.
    Persyaratan hukum
    Anda senantiasa memiliki tanggung jawab untuk memastikan bahwa Anda mematuhi semua hukum dan peraturan yang berlaku, selain kebijakan periklanan Google, di semua lokasi penayangan iklan Anda.</p>
    <br>

    <h4>Bisnis lainnya yang dibatasi</h4>
    <p>Kami membatasi jenis bisnis tertentu untuk beriklan dengan kami guna mencegah terjadinya eksploitasi pengguna, meskipun masing-masing bisnis tertentu sepertinya sudah mematuhi kebijakan kami lainnya. Berdasarkan peninjauan kami yang berkelanjutan serta masukan dari pengguna, regulator, dan badan perlindungan konsumen, kami sesekali mengidentifikasi produk atau layanan yang rentan terhadap penyalahgunaan. Jika menurut kami jenis bisnis tertentu berpeluang menimbulkan risiko yang tidak wajar terhadap keamanan atau pengalaman pengguna, kami mungkin membatasi atau menghentikan penayangan iklan yang terkait.
    Format dan fitur iklan yang dibatasi
    Ada beberapa faktor yang menentukan akses ke format dan fitur iklan lanjutan di Google Ads. Format iklan tertentu tidak tersedia untuk semua pengiklan sampai pengiklan tersebut memenuhi persyaratan kami atau menyelesaikan proses sertifikasi.

    Persyaratan untuk konten yang dibuat untuk anak-anak
    Pengiklan tidak boleh menjalankan iklan yang dipersonalisasi pada konten yang ditetapkan sebagai Dibuat untuk Anak-Anak. Lihat di sini untuk kategori yang dibatasi untuk iklan pada konten yang dibuat untuk anak-anak.</p>
    <br>
</div>
@endsection