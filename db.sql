-- query dashboard dosen
SELECT
    rmk.kode_matkul,
    rmk.nama_matkul,
    rmk.sks,
    COUNT(mkm.id_mahasiswa)  as jml,
    rs.semester
FROM
    sinndo.dosen_ampu da
INNER JOIN sinndo.dosen d ON
    da.id_dosen = d.id_dosen
INNER JOIN sinndo.ref_mata_kuliah rmk ON
    da.id_matakuliah = rmk.id_matkul
LEFT JOIN sinndo.mhs_kontrak_matkul mkm ON
	mkm.id_matkul = rmk.id_matkul
INNER JOIN sinndo.ref_semester rs ON
	rs.id_semester = da.id_semester
GROUP BY rmk.kode_matkul, rmk.nama_matkul, rmk.sks, rs.semester;

-- query count mahasiswa di dashboard dosen
SELECT
    COUNT(id_mahasiswa) as jumlahMhs
FROM
    mhs_kontrak_matkul mkm
WHERE id_dosen = 1;

-- query menampilkan mata kuliah di halaman list mahasiswa yang mengontrak matkul
SELECT
    rmk.kode_matkul,
    rmk.nama_matkul,
    rmk.sks
FROM
    sinndo.ref_mata_kuliah rmk
INNER JOIN sinndo.mhs_kontrak_matkul mkm ON
    rmk.id_matkul = mkm.id_matkul
INNER JOIN sinndo.dosen d ON
    mkm.id_dosen = d.id_dosen
WHERE rmk.id_matkul = 4 -- *4 -> diganti dengan variabel id_matkul
LIMIT 1;
