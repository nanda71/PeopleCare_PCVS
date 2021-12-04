@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Vaccina Batch Information</h4>
            <p class="card-category"> To view information of registered vaccina batches  </p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    No
                  </th>
                  <th>
                    Vaccine Name
                  </th>
                  <th>
                    Manufacturer
                  </th>
                  <th>
                    Expiry Data
                  </th>
                  <th>
                    Available
                  </th>
                  <th>
                    Administered quantity
                  </th>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection