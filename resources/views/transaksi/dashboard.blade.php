@extends('templates')
 
@section('content')
<section class="content">
    <div class="row">
      <div class="col-xs-12">
          <div class="box">
              <div class="box-header">
              <h3 class="box-title">Transaksi</h3>
              <a href="<?php echo url('transaksi/create') ?>" class="btn btn-info">ADD</a>
                  
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Item</th>
                              <th>Price</th>
                              <th>Paid</th>
                              <th>Created</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php
                            $n=1
                          @endphp
                          @foreach ($transaksi as $row)
                                      <tr>
                                            <td>{{$n}}</td>
                                            <td>{{$row->item}}</td>
                                            <td>{{$row->qty}}</td>
                                            <td>{{number_format($row->price)}}</td>
                                            <td>{{number_format($row->paid)}}</td>
                                            <td><a class="btn btn-info" href="{{route('transaksi.show',$row->id)}}">Edit</a>|<a href="{{url('transaksi/destroy/'.$row->id)}}" class="btn btn-danger">Delete</a></td>
                                      </tr>
                          @php
                            $n++
                          @endphp
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection