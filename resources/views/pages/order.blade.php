@extends('template.main')

@section('title','dashboard')

@section('content')

<div class="row">
    <div class="col-lg-8 mb-4 order-0 table-responsive">
        <table class="table table-bordered bg-white text-center">
            <thead>
                <th>no</th>
                <th>Car</th>
                <th>Driver</th>
                <th>Status</th>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-lg-4 col-md-4 order-1">
      <div class="card mb-4">
        <h5 class="card-header">Make Order</h5>
        <div class="card-body">
          
          <div class="mb-3">
            <label for="exampleFormControlSelect1" class="form-label">Select Driver</label>
            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlSelect1" class="form-label">Select Car</label>
            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlSelect1" class="form-label">Select Acceptor</label>
            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>

          <div>
            <label for="exampleFormControlTextarea1" class="form-label">note</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Gunakan untuk menginput detail penyewa seperti : nama, nik, no hp"></textarea>
          </div>
        </div>
      </div>
    </div>
</div>
    
@endsection