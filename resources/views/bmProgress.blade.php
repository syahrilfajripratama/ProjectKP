@extends('layouts.BMNav')

@section('container')
    <h1>On Progress Prospek</h1>
    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
      <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
      <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>
    
      <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
      <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>
    
      <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
      <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Prospek</th>
            <th scope="col">Perusahaan</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <tr>
            <th scope="row">1</th>
            <td>Asuransi Properti</td>
            <td>BANK BNI 46</td>
            <td>23 Desember 2022</td>
            <td>
              <button class="btn btn-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Comments</button>
              <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasBottomLabel">Berikan Catatan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body small">
                  <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a note here" id="floatingNote" style="height: 80px"></textarea>
                    <label for="floatingNote">Note</label>
                  </div>
                  <a href=""><button class="btn btn-primary" type="button">Submit</button></a>
                </div>
              </div>
              | <button type="button" class="btn btn-outline-success">Validasi</button></td>
          </tr>
        </tbody>
        <tbody class="table-group-divider">
          <tr>
            <th scope="row">2</th>
            <td>Asuransi Kebakaran</td>
            <td>PT Bulog</td>
            <td>23 Januari 2023</td>
            <td>
              <button class="btn btn-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Comments</button>
              <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasBottomLabel">Berikan Catatan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body small">
                  <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a note here" id="floatingNote" style="height: 80px"></textarea>
                    <label for="floatingNote">Note</label>
                  </div>
                  <a href=""><button class="btn btn-primary" type="button">Submit</button></a>
                </div>
              </div>
              | <button type="button" class="btn btn-outline-success">Validasi</button></td>
          </tr>
          </tr>
        </tbody>
      </table>
@endsection