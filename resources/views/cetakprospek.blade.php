<h3><center>Laporan Data Prospek</center></h3>
<table border="1" cellspacing="0" cellpadding="5">
  <tr>
    <th>Status</th>
    <th>Tujuan Perusahaan</th>
    <th>Client</th>
    <th>Tanggal Kunjungan</th>
    <th>Waktu Kunjungan</th>
    <th>Jenis Prospek</th>
    <th>Rincian Kegiatan</th>
  </tr>
  @foreach($prospek as $item) 
  <tr class="text-center">
    <td>
      <?php if($item->is_validated == 1) {
        echo "Tervalidasi";
      }elseif ($item->is_validated == 0) {
        echo "Belum Tervalidasi";
      }   
      ?></td>
    <td>{{ $item->perusahaan }}</td>
    <td>{{ $item->client }}</td>
    <td>{{ $item->tanggal }}</td>
    <td>{{ $item->waktu }}</td>
    <td>{{ $item->jenisProspek->prospek }}</td>
    <td>{{ $item->keterangan }}</td>
  </tr>
  @endforeach
</table>