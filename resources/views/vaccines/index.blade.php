@extends('vaccines.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Registered Vaccines</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('vaccines.create') }}"> Register new vaccine</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Manufacturer</th>
            <th>Approved</th>
            <th width="280px">Lainnya</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->vaccine_name }}</td>
            <td>{{ $value->manufacturer }}</td>
            <td>{{ $value->approved }}</td>
            <td>
                <form action="{{ route('vaccines.destroy',$value->vaccine_id) }}" method="POST">   
                    <!-- <a class="btn btn-info" href="{{ route('vaccines.show',$value->vaccine_id) }}">Show</a>     -->
                    <a class="btn btn-primary" href="{{ route('vaccines.edit',$value->vaccine_id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection