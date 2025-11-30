<?php
// ---Object---
// Definisi kelas Rumah
// class Rumah {

// }

// BAGIAN OBJECT

// Membuat Object pertama dari kelas Rumah
// Kita sebut object ini sebagai rumahSaya
// $rumahSaya = new Rumah();

// Membuat Object kedua dari kelas Rumah
// Kita sebut object ini sebagai rumahTetangga
// $rumahTetangga = new Rumah();

// ------------------------------------------------------------------- //

// ---Property---
// Definisi kelas Rumah
// class Rumah {

    // -- BAGIAN PROPERTY --
    // ini adalah data / keadaan yang akan dimiliki oleh object
    // 'public' adalah visibility

//     public $warna = "Putih";
//     public $jumlahKamar = 4;
//     public $alamat = "Jl. Mawar No. 20";
// }

// -- BAGIAN OBJECT --
// (Object dibuat di bawah Class)

//Membuat Object pertama
// $rumahSaya = new Rumah();

// Membuat Object kedua
// $rumahTetangga = new Rumah();

// -------------------------------------------------------------------- //

// ---Method---
// Definisi kelas Rumah
// class Rumah {

//     // -- BAGIAN PROPERTY --
//     public $warna = "Putih";
//     public $jumlahKamar = 4;
//     public $alamat = "Jl. Mawar No. 20";

//     // -- BAGIAN METHOD --
//     // ini adalah perilaku / aksi
//     // 'public' adalah visibility

//     public function kunciPintu() {
//         return "Pintu sudah dikunci!";
//     }

//     public function gantiWarna($warnaBaru) {
//         // '$this->warna' artinya "mengakses property warna milik object ini"
//         $this->warna = $warnaBaru;
//         return "Warna rumah telah diubah menjadi $this->warna";
//     }
// }

// class Rumah {

//     // -- BAGIAN PROPERTY (DATA) --
//     public $warna = "Putih";
//     public $jumlahKamar = 4;

//     // -- BAGIAN METHOD (PERILAKU) --
//     public function kunciPintu() {
//         return "Pintu sudah dikunci!";
//     }

//     public function gantiWarna($warnaBaru) {
//         $this->warna = $warnaBaru; //'$this' artinya "mengakses property warna milik object ini"
//     }
// }

// // -- BAGIAN OBJECT --
// // 1. Membuat Object dari kelas Rumah
// $rumahSaya = new Rumah();

// // 2. Mengakses property (melihat data)
// echo "Warna awal rumah saya: " . $rumahSaya->warna; // Output: Putih
// echo "<br>";

// // 3. Menggunakan Method (Melakukan aksi)
// $rumahSaya->gantiWarna("Kuning");

// // 4. Melihat perubahan pada property setelah menggunakan method
// echo "Warna rumah saya setelah diubah: " . $rumahSaya->warna; // Output: Kuning
// echo "<br>";

// // 5. Menggunakan Method lain
// echo $rumahSaya->kunciPintu(); // Output: Pintu sudah dikunci!
// echo "<hr>";

// // -- BUKTI BAHWA OBJECT ITU UNIK --
// $rumahTetangga = new Rumah();
// echo "Warna awal rumah tetangga: " . $rumahTetangga->warna; // Output: Putih
// // Warna rumah tetangga tetap Putih meskipun rumah saya sudah diubah warnanya

// -------------------------------------------------------------------- //

// ---Cosntruktor---
// class Rumah {

//     public $warna;
//     public $jumlahKamar;
//     public $alamat;

//     public function __construct( $warnaAwal, $kamarAwal, $alamatAwal ) {
//        $this->warna = $warnaAwal;
//        $this->jumlahKamar = $kamarAwal;
//        $this->alamat = $alamatAwal;
//     }

//     // Metode (PERILAKU)
//     public function kunciPintu() {
//         return "Pintu di $this->warna sudah dikunci!";
//     }
// }

// --Bagian Object--

// $rumahSaya = new Rumah("Biru", 5, "Jl. Merpati No. 10");
// $rumahTetangga = new Rumah("Merah", 3, "Jl. Kenari No. 5");

// echo "Warna Rumah Saya: " . $rumahSaya->warna; // Output: Biru
// echo "<br>";
// echo "Jumlah Kamar di rumah Saya" . $rumahSaya->jumlahKamar; // Output: 5
// echo "<br>";
// echo "Alamat Rumah Tetangga: " . $rumahTetangga->alamat; // Output: Jl. Kenari No. 5
// echo "<br>";
// echo $rumahSaya->kunciPintu(); // Output: Pintu di Biru sudah dikunci!

// -------------------------------------------------------------------- //

// ---Object Type---
// Definisi kelas Rumah
class Rumah {

    //Property
    public $warna;
    public $alamat;

    //Constructor (otomatis dijalankan saat 'new')
    public function __construct( $warna, $alamat ) {
       $this->warna = $warna;
       $this->alamat = $alamat;
    }
}

// --INTI MATERI: OBJECT TYPE--

// Kita membuat fungsi terpisah.
// Perhatikan 'Rumah $dataRumah' pada parameter.
// Ini adalah 'Type Hinting' atau 'Object Type'.
// yang merupakan object dari calss 'Rumah'.

function pasangListrik( Rumah $dataRumah ) {
    return "Listrik sedang dipasang di rumah " . $dataRumah->warna .
        " yang beralamat di " . $dataRumah->alamat;
}

// --BAGIAN OBJECT (CARA PAKA)--

// 1. Membuat Object dari kelas Rumah
$rumahSaya = new Rumah("Hijau", "Jl. Melati No. 15");

// 2. Memanggil fungsi dengan object yang benar
echo pasangListrik( $rumahSaya ); 
// Output: Listrik sedang dipasang di rumah Hijau yang beralamat di Jl. Melati No. 15
echo "<br>";

// --CONTOH ERROR--
// 3. Coba panggil fungsi dengan data string (SALAH!)
$teksBiasa = "Ini cuma string";

// Baris di bawah ini jika dijalankan akan menimbulkan error
// echo pasangListrik( $teksBiasa );
// PHP akan error karena $teksBiasa bukan object dari class 'Rumah'
?>

