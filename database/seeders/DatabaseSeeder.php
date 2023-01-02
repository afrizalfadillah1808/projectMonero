<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Discount;
use App\Models\Mentor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Category::create([
            'namaCategory' => 'IT & Software',
            'slugCategory' => 'it-software',
        ]);

        Category::create([
            'namaCategory' => 'Finance & Accounting',
            'slugCategory' => 'finance-accounting',
        ]);

        Category::create([
            'namaCategory' => 'Business',
            'slugCategory' => 'business',
        ]);

        Category::create([
            'namaCategory' => 'Marketing',
            'slugCategory' => 'marketing'
            

        ]);

        Category::create([
            'namaCategory' => 'Music',
            'slugCategory' => 'music',
        ]);

        Mentor::create([
            'name' => 'Administrator',
            'username' => 'Administrator',
            'email' => 'administrator@monerocourse.com',
            'password' => bcrypt('password'),
            'deskripsiMentor' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            'isAdmin' => '1',
        ]);

        Course::create([
            'category_id' => '1',
            'mentor_id' => '1',
            'namaCourse' => 'Belajar Basic Python Programming untuk Analisis Data Kompleks',
            'slugCourse' => 'belajar-basic-python-programming-untuk-analisis-data-kompleks',
            'lamaVideo' => '5 jam 3 menit',
            'jumlahVideo' => '27 video pembelajaran',
            'deskripsiCourse' => 'Python adalah bahasa pemrograman yang banyak digunakan dalam pengelolaan data pada berbagai aplikasi web, software (perangkat lunak), dan hampir semua arsitektur sistem. Python menggunakan bahasa pemrograman interpretatif yang merupakan sekumpulan perintah kemudian dikelompokkan menjadi satu, jadi fokus pada efisiensi penulisan program.',
            'hargaCourse' => 'Rp 299.000'

        ]);

        Course::create([
            'category_id' => '1',
            'mentor_id' => '1',
            'namaCourse' => 'Belajar Mengolah dan Menganalisis Data Menggunakan Microsoft Excel',
            'slugCourse' => 'belajar-mengolah-dan-menganalisis-data-menggunakan-microsoft-excel',
            'lamaVideo' => '10 jam 4 menit',
            'jumlahVideo' => '94 video pembelajaran',
            'deskripsiCourse' => 
            'Microsoft Excel adalah sebuah aplikasi yang sering digunakan sehari-hari bagi para pekerja, pengusaha, maupun mahasiswa yang sangat membantu dalam proses mengolah dan menganalisis data sesuai dengan kebutuhan. Bentuknya yang di desain dalam spreadsheet yang dibuat serta didistribusikan oleh Microsoft Corporation agar dapat digunakan untuk sistem operasi Windows dan juga Mac OS.

            Di era digital saat ini, belajar keterampilan mengoperasikan Microsoft Excel bukan lagi menjadi suatu kebutuhan, namun keharusan yang perlu dikuasai. Banyak bidang yang relevan sekali dalam penggunakan aplikasi ini dan tentunya digunakan untuk mempermudah proses kerja. Microsoft Excel sangat membantu dalam meningkatkan produktivitas kerja dengan catatan Sobat QuBisa dapat mahir dalam penggunaan rumus excel atau fitur function dan formulas-nya.
            
            Yuk, pelajari kursus ini dan tingkatkan keterampilanmu dalam mengolah dan menganalisis data dengan menggunakan Microsoft Excel. Selamat belajar!',
            'hargaCourse' => 'Rp 275.000'

        ]);

        Course::create([
            'category_id' => '2',
            'mentor_id' => '2',
            'namaCourse' => 'Belajar Cara Mengendalikan Uang Demi Merencanakan Masa Depan',
            'slugCourse' => 'belajar-cara-mengendalikan-uang-demi-merencanakan-masa-depan',
            'lamaVideo' => '5 jam 7 menit',
            'jumlahVideo' => '15 video pembelajaran',
            'deskripsiCourse' => 
            'Semua orang pasti memiliki keinginan yang berkaitan dengan uang seperti membeli barang-barang baru, memiliki dana untuk melanjutkan pendidikan, atau mempunyai tabungan pensiun. Banyak yang menyerah untuk mendapatkannya padahal sebenarnya semua keinginan tersebut mungkin untuk dimiliki. 

            Salah satu caranya adalah memahami konsep dasar pengelolaan keuangan, pondasi dalam menggunakan uang dengan lebih bijak, efektif, dan efisien. 
            
            Pada program ini, kita akan belajar pengetahuan dan keterampilan pengelolaan keuangan dasar mulai dari menetapkan tujuan, perencanaan, mencoba simulasi hingga tips praktis yang akan membantu dalam mengelola keuangan. Yuk latih keterampilan mengelola uang untuk menunjang kehidupan yang lebih terencana dan terstruktur secara finansial!',
            'hargaCourse' => 'Rp 149.000'

        ]);

       Course::create([
            'category_id' => '2',
            'mentor_id' => '2',
            'namaCourse' => 'Belajar Akuntansi Keuangan Perusahaan bagi Akuntan Pemula',
            'slugCourse' => 'belajar-akuntansi-keuangan-perusahaan-bagi-akuntan-pemula',
            'lamaVideo' => '9 jam 11 menit',
            'jumlahVideo' => '68 video pembelajaran',
            'deskripsiCourse' => 
            'Peran akuntansi sangat penting dalam setiap bisnis, baik itu bisnis berskala kecil seperti UMKM hingga perusahaan besar. Akuntansi adalah disiplin ilmu yang dapat diterapkan di berbagai pekerjaan. Agar sebuah bisnis dapat stabil dan semakin berkembang, maka dibutuhkan aktivitas akuntansi. Untuk menjadi seorang akuntan yang handal dan profesional bukan sesuatu yang mudah. Akuntansi memang bisa dikatakan sulit untuk dipahami, tetapi jika Anda menemukan cara yang tepat untuk mempelajarinya, maka semuanya akan menjadi mudah dan menyenangkan. Sebagai seorang akuntan yang handal dan profesional, Anda harus mampu mendorong keputusan bisnis melalui pengelolaan keuangan dan arus kas yang tepat, akurat, dan terstruktur.

 

            Mahir Accounting adalah kelas online yang dibuat khusus untuk Anda yang ingin belajar Akuntansi secara cepat dengan metode pembelajaran yang menyenangkan. Materi yang didapatkan Anda diantaranya pengenalan dasar mengenai akuntansi, praktek membuat laporan, hingga menganalisis laporan keuangan.',
            'hargaCourse' => 'Rp 149.000'

        ]);
        

        Course::create([
            'category_id' => '3',
            'mentor_id' => '3',
            'namaCourse' => 'Memenangkan Penjualan dengan Digital Selling Skills',
            'slugCourse' => 'memenangkan-penjualan-dengan-digital-selling-skills',
            'lamaVideo' => '2 jam 10 menit',
            'jumlahVideo' => '17 video pembelajaran',
            'deskripsiCourse' => 'Kondisi bisnis sebuah usaha ataupun perusahaan tidak terlepas dari berbagai faktor baik itu internal maupun eksternal. Faktor internal biasanya relatif lebih dapat disesuaikan sedang sumber daya yang ada . Namun, biasanya pengaruh eksternal terkadang sulit untuk dikendalikan karena tantangannya jauh lebih besar. Kompetisi  atau persaingan antar bisnis cenderung lebih bersifat kompleks. Apalagi saat ini era VUCA sudah bukan lagi hal yang aneh, berbagai industri di Indonesia dan dunia sudah lama beradaptasi dengan era ini. Apa itu VUCA? VUCA adalah sebuah kepanjangan dari terminologi situasi global yaitu Volatility (volatilitas), Uncertainty (ketidakpastian), Complexity (kompleksitas), dan Ambiguity (ambiguitas).

            Salah satu unit dalam bisnis yang membuatnya mampu bertahan dan beradaptasi dengan era VUCA tersebut adalah unit penjualan (Sales). Diperlukan Sales People atau Sales Person yang memiliki keterampilan beradaptasi dengan cepat di era ini. Hal tersebut ditunjukkan dengan kemampuan berpikir yang tidak hanya sekedar menjual tetapi membangun bisnis. Aktivitas sales yang dapat dilakukan untuk mengaktualisasikannya adalah dengan penguasaan teknologi digital. Pemanfaatan media digital dalam hal ini melibatkan media sosial, marketplace, online platform, dan media lainnya yang dapat menaikkan success rate penjualan bisnis Anda.',
            'hargaCourse' => 'Rp 175.000'

        ]);

        Course::create([
            'category_id' => '3',
            'mentor_id' => '3',
            'namaCourse' => 'Tingkatkan Pembelian dengan Presentasi Penjualan yang Persuasif bagi Pekerja Penjualan',
            'slugCourse' => 'tingkatkan-pembelian-dengan-presentasi-penjualan-yang-persuasif-bagi-pekerja-penjualan',
            'lamaVideo' => '8 jam 57 menit',
            'jumlahVideo' => '55 video pembelajaran',
            'deskripsiCourse' => 
            'Dalam menjual sebuah produk, seorang Sales Person tidak bisa langsung tanpa basa-basi, menawarkan produk, kepada calon Customer. Mereka harus bisa menjelaskan terlebih dahulu mengenai produk dan keunggulannya ataupun yang biasa disebut dengan Features and Benefits, sehingga calon Customer tertarik untuk membelinya. Oleh karenannya, modal utama dari seorang sales adalah wajib memiliki kemampuan untuk membuat presentasi penjualan yang menarik dan persuasif.

            Namun terkadang, bertemu calon customer pada saat presentasi membuat sales person mengalami kegugupan dan berkurangnya rasa percaya diri. Situasi tersebut bisa membuat proses presentasi menjadi tidak lancar dan informasi yang disampaikan akan diterima dengan tidak optimal. Oleh karena itu, seorang Sales harus mampu mengendalikan hal tersebut dan dengan cepat mengubahkan rasa percaya diri mereka menjadi lebih baik. Tidak hanya itu, seorang Sales Person juga harus menguasai kompetensi dasar yaitu teknik presentasi yang persuasif.',
            'hargaCourse' => 'Rp 500.000'

        ]);

        Course::create([
            'category_id' => '4',
            'mentor_id' => '4',
            'namaCourse' => 'Optimasi Penggunaan Google Analytics untuk Bisnis',
            'slugCourse' => 'optimasi-penggunaan-google-analytics-untuk-bisnis',
            'lamaVideo' => '2 jam 3 menit',
            'jumlahVideo' => '14 video pembelajaran',
            'deskripsiCourse' => 
            'Apa itu google analytics? Google Analytics adalah sebuah layanan gratis dari Google yang menampilkan statistik pengunjung sebuah situs web. Google Analytics biasa digunakan oleh para pemilik website maupun blog untuk menganalisa kinerja website bedasarkan data-data statistik yang ditampilkan.
            Mempelajari kebiasaan para pengunjung website data tersebut bisa dimanfaatkan untuk meningkatkan performa bisnis agar brand bisnis makin dikenal atau dimanfaatkan untuk menaikkan konversi. ',
            'hargaCourse' => 'Rp 275.000'

        ]);

        Course::create([
            'category_id' => '4',
            'mentor_id' => '4',
            'namaCourse' => 'Merancang Iklan di Meta Ads (Facebook dan Instagram) untuk Menjadi Spesialis Periklanan',
            'slugCourse' => 'merancang-iklan-di-meta-ads-facebook-dan-instagram-untuk-menjadi-spesialis-periklanan',
            'lamaVideo' => '4 jam 47 menit',
            'jumlahVideo' => '26 video pembelajaran',
            'deskripsiCourse' => 
            'Indonesia sebagai salah satu negara dengan jumlah penduduk terbesar di dunia tentu menjadi salah satu negara dengan jumlah pengguna media sosial terbesar di dunia. Sebagai contoh, Indonesia menduduki peringkat ketiga sebagai negara dengan jumlah pengguna Facebook dengan 130 juta pengguna aktif bulanan. Selain itu Indonesia juga memiliki 62 juta pengguna aktif bulanan di Instagram, yang merupakan jumlah terbesar ke-4 didunia untuk pengguna Instagram aktif.

            Tentu perusahaan tidak ingin melewatkan kesempatan ini.  Maka tidak heran jika saat ini banyak pemilik bisnis mencari seorang Digital Marketing yang mampu menunjang tujuan dari peningkatan penjualan bisnis mereka.',
            'hargaCourse' => 'Rp 325.000'

        ]);

        Course::create([
            'category_id' => '4',
            'mentor_id' => '4',
            'namaCourse' => 'Belajar Membaca Not Balok dan Main Piano',
            'slugCourse' => 'belajar-membaca-not-balok-dan-main-piano',
            'lamaVideo' => '5 jam',
            'jumlahVideo' => '30 video pembelajaran',
            'deskripsiCourse' => 
            'Program belajar ini merupakan bagian kedua dari program Belajar Membaca Not Balok dan Main Piano. Murid disarankan untuk mempelajari bagian 1 sebelum mengikuti pelajaran ini. Di bagian pertama ini, kita telah belajar cara membaca not balok, ritme dan not dengan tanda accidentals (tanda sharp, flat dan natural). Di program ini, anda akan mempelajari dasar musik yang tidak kalah pentingnya seperti scales/tangganada, key signature dan cara mencari key signature, ritme lainnya selain yang telah diajarkan di part 1 (seperti 6/8, 9/8 dll), indikasi tempo, pedal dan ornamentation.

            Pelajaran ini cocok bagi anda yang belum pernah belajar bermain piano sama sekali, maupun untuk anda yang sudah pernah belajar bermain piano namun ingin untuk belajar membaca not balok. Program ini juga cocok bagi anda yang ingin untuk mempersiapkan mengikuti ujian piano ABRSM (The Associated Board of Royal School of Music) atau ANZCA (Australian and New Zealand Cultural Arts).
            
            Untuk mengikuti pelajaran ini dengan baik, murid bisa untuk mendownload buku PDF yang berisikan materi pelajaran di bab awal tiap topik materi. Selain mengikuti pelajaran video ini, anda juga disarankan untuk sering berlatih memainkan lagu-lagu yang ada di buku PDF yang diberikan. Skill bermain piano hanya akan bisa anda kuasai dengan cepat dan baik bila anda banyak berlatih bermain piano dan membaca partitur.',
            'hargaCourse' => 'Rp 99.000'

        ]);

        Course::create([
            'category_id' => '4',
            'mentor_id' => '4',
            'namaCourse' => 'Belajar ABRSM Scales dan Arpeggios Grade Initials-3',
            'slugCourse' => 'belajar-abrsm-scales-dan-arpeggios-grade-initials-3',
            'lamaVideo' => '3 jam',
            'jumlahVideo' => '10 video pembelajaran',
            'deskripsiCourse' => 
            'Program belajar ini berisikan materi-materi scales dan arpeggios yang akan diujikan di ujian piano Practical ABRSM (The Associated Board of the Royal Schools of Music). Scales dan Arpeggios merupakan salah satu dari empat elemen ujian praktek ABRSM. Walaupun program belajar ini berisikan materi dari ABRSM, namun murid-murid yang tidak berminat untuk ujian juga bisa memanfaatkan program ini untuk mengasah skill bermain scales dan arpeggios mereka. Skill-skill yang diajarkan di program ini dilakukan secara bertingkat mulai dari yang mudah hingga sulit sehingga mereka akan sangat bermanfaat bagi semua pianis yang sedang belajar bermain piano.

            Pelajaran scales dan arpeggios di program ini berisikan cara memainkan major scales dan minor scales (natural, harmonic dan melodic minor), contrary-motion scales, chromatic scales, chromatic contrary-motion scales dan arpeggios. Juga di dalam video ini terdapat tips untuk mengatasi kesulitan-kesulitan bermain scales atau arpeggios tertentu dan beberapa solusi untuk mengatasinya. Bila murid membutuhkan pedoman untuk jari-jari apa yang digunakan untuk tiap scale dan arpeggio, maka murid dapat membeli Buku Referensi Scales dan Arpeggios dari website Kreativ Lab. Untuk bisa mengikuti pelajaran ini dengan baik, murid disarankan sudah bisa membaca not balok dan ritme tingkat dasar. Kemampuan untuk membaca not balok dan ritme akan sangat membantu anda untuk mencari dan membentuk tangganada maupun arpeggio yang diujikan.',
            'hargaCourse' => 'Rp 99.000'

        ]);
        
        
        Mentor::factory(3)->create();

        Discount::factory(3)->create();
    }
}
