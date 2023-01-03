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
            'mentor_id' => '2',
            'namaCourse' => 'Belajar Basic Python Programming untuk Analisis Data Kompleks',
            'slugCourse' => 'belajar-basic-python-programming-untuk-analisis-data-kompleks',
            'lamaVideo' => '5 jam 3 menit',
            'jumlahVideo' => '27 video pembelajaran',
            'deskripsiCourse' => 'Python adalah bahasa pemrograman yang banyak digunakan dalam pengelolaan data pada berbagai aplikasi web, software (perangkat lunak), dan hampir semua arsitektur sistem. Python menggunakan bahasa pemrograman interpretatif yang merupakan sekumpulan perintah kemudian dikelompokkan menjadi satu, jadi fokus pada efisiensi penulisan program.',
            'hargaCourse' => 'Rp 299.000'

        ]);

        Course::create([
            'category_id' => '1',
            'mentor_id' => '3',
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
            'mentor_id' => '4',
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
            'mentor_id' => '5',
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
            'mentor_id' => '6',
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
            'mentor_id' => '7',
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
            'mentor_id' => '8',
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
            'mentor_id' => '9',
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
            'category_id' => '5',
            'mentor_id' => '10',
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
            'category_id' => '5',
            'mentor_id' => '10',
            'namaCourse' => 'Belajar ABRSM Scales dan Arpeggios Grade Initials-3',
            'slugCourse' => 'belajar-abrsm-scales-dan-arpeggios-grade-initials-3',
            'lamaVideo' => '3 jam',
            'jumlahVideo' => '10 video pembelajaran',
            'deskripsiCourse' => 
            'Program belajar ini berisikan materi-materi scales dan arpeggios yang akan diujikan di ujian piano Practical ABRSM (The Associated Board of the Royal Schools of Music). Scales dan Arpeggios merupakan salah satu dari empat elemen ujian praktek ABRSM. Walaupun program belajar ini berisikan materi dari ABRSM, namun murid-murid yang tidak berminat untuk ujian juga bisa memanfaatkan program ini untuk mengasah skill bermain scales dan arpeggios mereka. Skill-skill yang diajarkan di program ini dilakukan secara bertingkat mulai dari yang mudah hingga sulit sehingga mereka akan sangat bermanfaat bagi semua pianis yang sedang belajar bermain piano.

            Pelajaran scales dan arpeggios di program ini berisikan cara memainkan major scales dan minor scales (natural, harmonic dan melodic minor), contrary-motion scales, chromatic scales, chromatic contrary-motion scales dan arpeggios. Juga di dalam video ini terdapat tips untuk mengatasi kesulitan-kesulitan bermain scales atau arpeggios tertentu dan beberapa solusi untuk mengatasinya. Bila murid membutuhkan pedoman untuk jari-jari apa yang digunakan untuk tiap scale dan arpeggio, maka murid dapat membeli Buku Referensi Scales dan Arpeggios dari website Kreativ Lab. Untuk bisa mengikuti pelajaran ini dengan baik, murid disarankan sudah bisa membaca not balok dan ritme tingkat dasar. Kemampuan untuk membaca not balok dan ritme akan sangat membantu anda untuk mencari dan membentuk tangganada maupun arpeggio yang diujikan.',
            'hargaCourse' => 'Rp 99.000'

        ]);

        Mentor::create([
            'name' => 'Ahmad Rosi Komarudin',
            'username' => 'ahmadrk',
            'email' => 'ahmadrosikomarudin@monerocourse.com',
            'password' => bcrypt('password'),
            'deskripsiMentor' => 
            'Ahmad is Professional Trainer teach about Computer Networking & Python Programming. Have experience more than 5 years, make him credible to teach about Computer Networking especially Cisco & Mikrotik.

            Ahmad also work as Network Engineer, doing some project in many big company to handle their network infrastructure. Ahmad use his python skill to manage thousands of networking devices, so many company choose him to manage their big network infrastructure.
            
            Ahmad also work as Software Defined Networking (SDN) Developer, Build SDN Application using Django & Flask.',
            'isAdmin' => '0',
        ]);
        
        Mentor::create([
            'name' => 'Eko Kurniawan Khannedy',
            'username' => 'ekokk',
            'email' => 'ekokurniawankhannedy@monerocourse.com',
            'password' => bcrypt('password'),
            'deskripsiMentor' => "Hi, my name is Eko Kurniawan Khannedy

            I work as a Technical Architect in one of the biggest ECommerce in Indonesia. I have more than 10 years of experience building Applications in Startup and Corporate Companies
            
            I also Content Creator at Programmer Zaman Now. You can see lot's of tutorial about Programming, Web, Backend, Frontend, Mobile and DevOps in Programmer Zaman Now.
            
            For more information about Programmer Zaman Now, you can see in Website, Youtube Channel, or Social Media",
            'isAdmin' => '0',
        ]);

        Mentor::create([
            'name' => 'Bale Training',
            'username' => 'baletraining',
            'email' => 'baletraining@monerocourse.com',
            'password' => bcrypt('password'),
            'deskripsiMentor' => 
            "Sebagai lembaga dibidang pelatihan dan konsultasi kami berkomitmen untuk meningkatkan kualitas SDM dan pengembangan organisasi di perusahaan-perusahaan klien kami.

            Salah satu alat dan modal utama untuk mencapai visi dan misi perusahaan adalah sumber daya manusia (SDM) yang dimiliki yaitu SDM yang mampu menjalankan peran dan fungsinya dengan baik dan benar.
            
            SDM merupakan satu-satunya aset yang independen dan dinamis sehingga SDM dapat menjadi aset yang potensial hanya jika dikelola dan dikembangkan dengan cara yang baik.
            
            Bale training merupakan institusi yang concern menerapkan pengetahuan “Rahasia Positive Thinking & Positive Feeling” yang mampu merubah SDM perusahaan. Dengan perpaduan dua “Rahasia” tersebut dapat membantu meningkatkan percepatan Kompetensi SDM perusahaan.
            
            Skala prioritas Bale Training adalah untuk meningkatkan kinerja SDM melalui program pelatihan yang sesuai dengan kebutuhan karyawan, sistematis dan berkesinambungan. Bale Training juga membantu perusahaan mempersiapkan riset-riset manajemen yang aplicable melalui metodologi yang tepat.
            
            Jasa pelatihan kami telah banyak membantu perusahaan-perusahaan dan instansi pemerintahan dalam peningkatan kualitas SDM-nya dan meningkatkan daya saing dalam menghadapi tantangan Global.",
            'isAdmin' => '0',
        ]);

        Mentor::create([
            'name' => 'QM Financial',
            'username' => 'qmfinancial',
            'email' => 'qmfinancial@monerocourse.com',
            'password' => bcrypt('password'),
            'deskripsiMentor' => 
            "Kami percaya pengetahuan keuangan dapat memperbaiki proses pengambilan keputusan.

            Kami juga percaya setiap orang mampu jadi financial planner bagi diri dan keluarganya sendiri asal dibekali dengan pengetahuan dan keterampilan keuangan yang mencukupi.
            
            Proses belajar finansial tidak bisa instan. Kita perlu melalui fase awareness (pengenalan), knowledge (pengetahuan), dan action (praktik).
            
            Ayo belajar segala yang finansial bersama QM Financial.
            Because finance should be practical.",
            'isAdmin' => '0',
        ]);

        Mentor::create([
            'name' => 'Christian Guswai',
            'username' => 'christianguswai',
            'email' => 'christianguswai@monerocourse.com',
            'password' => bcrypt('password'),
            'deskripsiMentor' => 
            "Christian F. Guswai, adalah Konsultan, Trainer, Author, dan Pembicara Publik di bisnis retail yang telah berpengalaman lebih dari 32 tahun di industri ritel.

            Penerima award: 100 Top Global Training and Development Minds di Kongres Sumber Daya Manusia Dunia di Mumbai, India. Dan pada tahun 2019 mendapatkan award sebagai Top Global Retail Minds di Asia Africa GCC Retail Congress.
            
            15 tahun pertamanya dijalani sebagai praktisi bisnis ritel di mana Guswai bersentuhan dengan multi-format ritel seperti; department store (Cahaya Department Stores), perusahaan grosir multinasional (Makro Cash & Carry), Hypermarket (Continent Hypermarket dan Carrefour Indonesia).
            
            17 tahun berikutnya, pengalamannya sebagai konsultan bagi banyak peritel di seluruh Indonesia, mulai dari ujung barat hingga bagian timur Indonesia, telah memperkaya pengalamannya dalam menangani berbagai jenis permasalahan di bisnis ritel.
            
            Guswai juga berbagi ilmu bisnis ritel baik melalui workshop/training umum maupun pelatihan bagi banyak perusahaan ritel nasional untuk berbagai topik bisnis ritel.
            
            Dengan pengalaman dan pengetahuannya yang teruji, Guswai telah menulis 9 buku dalam rangkaian Retail Excellence Series dan telah menjadi buku panduan wajib bagi peritel di seluruh negeri.
            
            Selain itu Guswai juga menjadi kontributor sebagai kolumnis dan nara sumber untuk beberapa media baik cetak maupun elektronik.
            
            Guswai kerap diundang sebagai pembicara di beberapa forum internasional.",
            'isAdmin' => '0',
        ]);
        
        Mentor::create([
            'name' => 'Remote Worker Indonesia',
            'username' => 'remoteworkerindonesia',
            'email' => 'remoteworkerindonesia@monerocourse.com',
            'password' => bcrypt('password'),
            'deskripsiMentor' => 
            "Persiapan Jadi Remote Worker - Apakah kamu sedang bersiap-siap untuk bekerja secara remote? Jika demikian, selamat datang! Kamu sudah menemukan tim instruktur yang tepat untukmu!

            Kami tahu, kamu mungkin sedang mengalami kebingungan seraya bertanya-tanya harus memulai dari mana sebenarnya untuk bisa menjadi pekerja remote.
            
            Tenang, kebingungan dan pertanyaan-pertanyaan tersebut sangat normal, kok. Karena kami juga pernah mengalaminya ketika memulai sebagai pekerja remote.
            
            Tapi saat itu, karena masih bau kencur, kami melakukan banyak kesalahan dan kekeliruan. Misalnya saja, stress karena proposal pekerjaan tidak ada yang tembus atau baperan ketika klien meminta revisi berkali-kali.
            
            Ironisnya, saat itu tak ada orang yang membantu kami.
            
            Nah, agar kamu tidak melakukan kesalahan dan kekeliruan seperti yang kami lakukan dulu, Tim RemoteworkerID akan membagikan panduan dan persiapan apa saja yang harus kamu butuhkan sehingga bisa menjadi pekerja remote.
            
            Semoga bisa membantu, ya.",
            'isAdmin' => '0',
        ]);

        Mentor::create([
            'name' => 'Established Jakarta',
            'username' => 'establishedjakarta',
            'email' => 'establishedjakarta@monerocourse.com',
            'password' => bcrypt('password'),
            'deskripsiMentor' => 
            "Established Jakarta telah membantu banyak mitra untuk terhubung dengan konsumen untuk menmberikan dampak positif bagi bisnis mereka.

            Kami terus belajar untuk meningkatkan pengetahuan dan keahlian kami untuk menciptakan solusi pemasaran yang sesuai dengan kebutuhan bisnis mitra kami.
            
            Kami juga memiliki misi untuk memasyarakatkan ilmu digital marketing dan teknologi ke dalam kehidupan setiap orang untuk bisnis dan masyarakat yang lebih baik.
            
            Dan sekarang, giliran Anda untuk menyelam lebih dalam dan meningkatkan keterampilan digital Anda",
            'isAdmin' => '0',
        ]);

        Mentor::create([
            'name' => 'KODE by Hacktiv8',
            'username' => 'hacktiv8',
            'email' => 'hacktiv@monerocourse.com',
            'password' => bcrypt('password'),
            'deskripsiMentor' => 
            "KODE merupakan bagian dari PT Hacktivate Teknologi Indonesia (Hacktiv8), sebuah lembaga pendidikan yang membantu percepatan karir para profesional di era ekonomi digital.

            Kami melihat kesempatan untuk membantu para profesional dalam meningkatkan kemampuan serta kompetensi mereka saat sudah berada di dunia kerja tanpa terikat waktu dan tempat. Karena itu, KODE lahir sebagai sebuah sarana yang memberikan kemudahan untuk meningkatkan skill-skill yang dibutuhkan di dunia kerja. Kami percaya dengan KODE semua bisa belajar!",
            'isAdmin' => '0',
        ]);

        Mentor::create([
            'name' => 'Rangga Fermata',
            'username' => 'ranggafermata',
            'email' => 'ranggafermata@monerocourse.com',
            'password' => bcrypt('password'),
            'deskripsiMentor' => 
            'Saya adalah seorang scientist sekaligus dosen yang ekspert di matematika. Saya tertarik ilmu musik dan mendalami penggunaan software fl studio 20. ALhamdulillah saya berhasil menguasainya, adapun lagu-lagu yang berhasil saya remix menggunakan fl studio meliputi genre Pop, house trance, dan MIDI.

            Saya tidak mempunyai pengalaman khusus terkait musik, saya tidak bisa main gitar, tidak bisa main piano, maupun alat musik lain. Saya hanya seorang penikmat musik. Saya senang mendengarkan berbagai macam genre musik dari musik jadul sampai musik terkini.
            
            
            
            Di era revolusi industri 5.0 ini, segala macam aspek mulai banyak terintegrasi dengan kecanggihan teknologi. Termasuk dunia musik. Anda bisa bikin lagu sebagaimana band professional hanya dengan modal laptop dan duduk manis di depan meja kerja anda. Tetapi untuk mewujudkan itu, anda wajib menguasai salah satu software pembuat musik. FL STUDIO adalah yang paling recomended karena tampilannya lebih sederhana, lebih mudah diaplikaskan dan sudah digunakan oleh banyak DJ berkelas dunia seperti Martin Garrix.
            
            
            
            Untuk itulah saya disini mecoba membantu mewujudkan impian anda dengan membuka kursus ini.',
            'isAdmin' => '0',
        ]);

        Discount::factory(3)->create();
    }
}
