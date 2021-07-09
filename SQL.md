# Penjelasan
- primary key = Yang membedakan databasenya dengan database lainnya
- auto_increment = Tambah satu angka secara otomatis jika ada database yang baru  
- varchar = batas karakter maksimal
- char = jumlah karakter fix; tidak boleh lebih atau kurang


# Perintah SQL
## Login
- mysql -u root -p = Perintah untuk masuk sebagai admin di mysql.
- Default username = root.
- Default password = (tidak ada).

## Lihat dan masuk ke database
- show databases; = Perlihatkan semua database di mysql.
- create database PHP_Dasar; = Buat database "PHP_Dasar" di mysql.
- use php_dasar; = Masuk ke database "PHP_Dasar".

## Membuat dan lihat tabel
- create table mahasiswa (id int primary key auto_increment, nama varchar(100), nrp char(9), email varchar(100), jurusan varchar(100), gambar varchar(100)); = Buat tabel mahasiswa di database "PHP_Dasar", strukturnya/fieldnya "nama_tabel" "tipe_tabel" "primary key (opsional)" "auto_increment(opsional)"
- show tables; = Perlihatkan seluruh tabel.

## Lihat tabel dan buat data di tabelnya
- describe mahasiswa; = Lihat database di tabel mahasiswa.
- insert into mahasiswa values ('', 'Mushlih', '198370973', 'mushlih2004@gmail.com', 'akidah', 'mushlih.jpg'); = Masukkan isi/value fieldnya (dalam tanda kutip) sesuai urutan struktuk/field tabelnya. | '' sama dengan kosong.

## Pilih data di tabelnya
- select * from mahasiswa; = Lihat semua (*) field dan value pada tabel mahasiswa.
- select nrp from mahasiswa; = Lihat field dan value "nrp" pada tabel mahasiswa.
- select nama, nrp from mahasiswa; = Lihat field dan value "nama" dan "nrp" pada tabel mahasiswa.

## Update tabel
- update mahasiswa set jurusan = 'Fikih' where id = 1; = Ubah "jurusan" pada tabel "mahasiswa" menjadi "fikih" pada data yang nrp adalah 1.

## Delete tabel
- delete from mahasiswa where id = 2; = Hapus seluruh data yang "id"nya sama dengan 2 pada tabel mahasiswa. 

## Hapus tabel
- drop table mahasiswa; = Hapus tabel mahasiswa.
- drop database php_dasar; = Hapus database "PHP_Dasar".