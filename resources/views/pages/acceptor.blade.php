@extends('template.main')

@section('title','dashboard')

@section('content')

<div class="row">
    <div class="col">
        <table class="table table-bordered bg-white text-center">
            <thead>
                <th>no</th>
                <th>Car</th>
                <th>Driver</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalCenter"
                        >
                          Launch modal
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalCenterTitle">Modal title</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col mb-3">
              <label for="nameWithTitle" class="form-label">Driver</label>
              <input
                type="text"
                id="nameWithTitle"
                class="form-control"
                placeholder="Enter Name"
                readonly
              />
            </div>
          </div>
          <div class="row">
            <div class="col mb-3">
                <label for="nameWithTitle" class="form-label">Car</label>
                <input
                  type="text"
                  id="nameWithTitle"
                  class="form-control"
                  placeholder="Enter Name"
                  readonly
                />
              </div>
          </div>
          <div class="row">
            <div class="col mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">note</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly></textarea>
              </div>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger">Reject</button>
            <button type="button" class="btn btn-primary">Accept</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    
@endsection