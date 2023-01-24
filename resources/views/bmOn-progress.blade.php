@extends('layouts.bmNav')
@section('container')
<h1>On Progress Prospek</h1>
<a href="/branchManager"><button type="button" class="btn btn-outline-primary">< Kembali</button></a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Prospek</th>
            <th scope="col">Perusahaan</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        @foreach ($prospek as $item)         
        <tbody class="table-group-divider">
          <tr>
            <td>{{ $item["prospek"] }}</td>
            <td>{{ $item["perusahaan"] }}</td>
            <td>{{ $item["tanggal"] }}</td>
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
        @endforeach
      </table>
@endsection