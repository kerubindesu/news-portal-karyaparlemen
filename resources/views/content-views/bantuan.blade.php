@extends('layout.laman_template')

@section('title', 'Bantuan')

@section('container')
<div class="container">
    {{-- <span>{{ Breadcrumbs::render('bantuan') }}</span> --}}
    <a href="" class="mb-3">
        <img src="{{ asset("assets/img/1081458.jpg") }}" class="img-fluid rounded mb-3">
    </a>
    <h5>Bantuan</h5>
    <p>
    <h5>Mengatur Akun Karya Parlemen</h5>

    <h5>a. Login</b></h5>
    <p>
        Anda dapat melakukan login dengan menggunakan akun Facebook dan Google. Proses login dibutuhkan untuk:
        membuat Story, memberikan Komentar, menyukai sebuah Story, melaporkan gangguan yang ada pada sebuah Story
    </p>
    <h5>b. Profil dan Pengaturan</h5>
    <p>
        Pengguna dapat melakukan pengaturan beberapa hal terkait profil pribadi di kumparan:
    </p>

    <h5>Pengaturan foto profil</h5>
    <p>
        Foto profil akan diambil dari foto yang sedang digunakan di akun Facebook atau akun Google Anda. Namun Anda dapat menggantinya dengan foto baru yang berasal dari galeri baik di perangkat desktop atau perangkat mobile Anda. Cara mengganti foto profil adalah dengan klik pada tombol "Upload Picture" yang ada di ujung kanan atas.
        Selanjutnya pilihlah foto yang diinginkan dari galeri Anda. Setelah terpasang, klik Save untuk menyimpan.
        Pengaturan deskripsi profil
        Deskripsi profil terletak di bawah bagian foto. Anda dapat memberikan deskripsi diri dengan singkat sebanyak 140 karakter.
        Penggunaan Kumparan
    </p>
    <h5>a. Membuat Akun</h5>
    <p>
        Jika Anda belum memiliki akun kumparan, klik pada ikon Profile dan gunakan akun Facebook atau Google untuk melakukan pendaftaran pertama kali.
        Anda juga dapat menggunakan nomor telepon untuk membuat akun di KARYAPARLEMEN. KARYAPARLEMEN akan meminta nomor telepon Anda dan mengirimkan kode melalui SMS. Dengan kode tersebut Anda akan diminta melakukan verifikasi nomor telepon.
    </p>
    <h5>b. Hubungan Pertemanan</h5>
    <p>Pertemanan di kumparan dapat dilakukan dengan klik tombol Follow pada profil yang dituju. Sistem pertemanan yang ada di kumparan adalah sistem tanpa membutuhkan persetujuan dari salah satu pihak. Anda dapat mengikuti sebuah akun tanpa akun yang dituju memberikan timbal balik dalam bentuk Follow. Ada 2 cara yang dapat digunakan:
    Jika Anda sedang membaca suatu Story, klik pada tombol Follow yang berada pada sisi kanan atas untuk langsung mengikuti suatu akun.
        Jika Anda mengunjungi profil suatu akun, Anda akan melihat tombol Follow untuk dapat langsung mengikuti akun tersebut</p>

    <h5>c. Beranda</h5>
    <p>Di dalam beranda, Anda akan melihat Timeline, My News, Topic serta liputan khusus (Highlights) yang sudah disusun oleh Tim Editorial kami.</p>
    <p>Timeline: seluruh Story yang dibuat dan sudah dikurasi oleh Tim Redaksi kumparan. Anda juga dapat melihat Story dari orang-orang atau topik yang sudah anda follow</p>
    <p>Topik: seluruh topik yang ada di kumparan yang dapat Anda ikuti sesuai dengan minat Anda akan informasi</p>
    <p>Highlights: sebuah topik khusus yang memiliki banyak Story sebagai pendukung terkait. Pada bagian ini, Anda dapat melihat berita yang menjadi fokus pembahasan kumparan.</p>

    <h5>d. Halaman Trending</h5>
    <p>Anda dapat melihat seluruh topik, Story, komentar hingga profil populer di kumparan</p>
    <h5>e. Halaman Notifikasi</h5>
    <p>Anda bisa mendapatkan notifikasi baik dari interaksi sesama pengguna maupun rekomendasi Story dari kumparan</p>

    <h5>f. Membuat Story</h5>
    <p>Untuk menciptakan Story baru, klik pada tombol "New Story" atau tombol "+" pada aplikasi mobile dan situs mobile. Anda akan melihat sebuah halaman untuk membuat tulisan. Di dalamnya dapat disertakan foto dan video sesuai dengan kreativitas Anda. Story Anda yang telah terpublikasi akan muncul di bagian "My News" serta halaman "Profile"</p>
    <h5>g. Foto</h5>
    <p>Foto adalah gambar tidak bergerak yang dapat Anda unggah ke kumparan. Dimensi foto yang diharapkan adalah foto dengan dimensi 16:9. Pilihlah foto yang sesuai dengan deskripsi yang Anda sertakan agar para pengguna lainnya juga dapat memahaminya dengan jelas.</p>
    <h5>h. Video</h5>
    <p>Video adalah gambar bergerak dan bersuara yang dapat Anda unggah ke kumparan. Foto yang diharapkan untuk diunggah ke kumparan adalah foto dengan format landscape</p>
</div>
@endsection