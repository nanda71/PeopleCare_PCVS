@extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> View Vaccine Batch Information</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>
                  batchID
                </th>
                <th>
                  batchNo
                </th>
                <th>
                  vaccineID
                </th>
                <th>
                  expiryDate
                </th>
                <th>
                  quantityAvailable
                </th>
                <th>
                  quantityAdministered
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  1
                </td>
                <td>
                  1
                </td>
                <td>
                  1
                </td>
                <td>
                  2021-12-09 10:15:33
                </td>
                <td>
                  5
                </td>
                <td>
                  3
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
