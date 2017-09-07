# ProjectResourceMgmt
Web Based Project Resource Management Tool


LogistAPI - Service 
Alamat		: localhost/test_2/index.php
Melayani jasa per-logistik-an , seperti :
1.	Tambah Project Baru
Kirimkan object JSON via POST berisi
a.	serviceID : 1
b.	nama : “Nama Project Baru”
c.	bulan : 2
d.	tahun : 2013

2.	Tambah Kebutuhan Barang Ke Suatu Project
Kirimkan object JSON via POST berisi
a.	serviceID : 2
b.	id_project : 1
c.	id_barang: 3
d.	qty : 4 

3.	Tambah Kebutuhan Barang Ke Suatu Project
Kirimkan object JSON via POST berisi
e.	serviceID : 3
f.	id_project_barang : 1
g.	current_qty : 4

4.	Lihat Seluruh Project
Kirimkan object JSON via POST berisi
h.	serviceID : 4
i.	id_project : 1
j.	id_barang: 3
k.	qty : 4 
Hasil akan dikembalikan dalam bentuk JSON juga..

5.	Lihat Seluruh Barang pada Project
Kirimkan object JSON via POST berisi
l.	serviceID : 5
m.	id_project : 1

Hasil akan dikembalikan dalam bentuk JSON juga..






