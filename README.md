
![Logo](./documentation/logo_large.png)


## Authors

- [dwicahyo1512](https://github.com/dwicahyo1512)


# E - Undangan

E-undangan sebagai platform inovatif yang memungkinkan pengguna untuk dengan mudah membuat undangan pernikahan, ulang tahun, atau acara istimewa lainnya dalam bentuk elektronik. Repositori ini berisi kode sumber dari aplikasi E-undangan yang saya kembangkan dengan menggunakan framework PHP CodeIgniter 4 sebagai dasar pengembangan.

Saya telah mengintegrasikan beberapa library pendukung terkenal, seperti Bootstrap untuk desain responsif yang menarik, jQuery untuk interaksi klien yang lebih dinamis, dan TCPDF untuk pembuatan versi cetak undangan dalam format PDF. Proyek ini juga menggunakan Composer untuk manajemen dependensi.

## Features

- CRUD
- Login menggunakan myth/auth
  - Pengaturan Sesi
  - Verifikasi Keamanan
  - Registrasi Pengguna
  - Validasi Data
  - Reset Password
  - Pengelolaan Sesuai Peran(superadmin,admin,user) 
- Print Data
- Excel import/eksport
---



## Installation

Install repository

```bash
  git clone https://github.com/dwicahyo1512/elektronik-undangan.git

  cd elektronik-undangan
```
    
## Deployment

instal composer

```bash
 composer install
```
migrate database

```bash
php spark migrate -all
```
run web

```bash
 php spark serve
```

