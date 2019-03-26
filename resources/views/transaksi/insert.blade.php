@extends('templates')
 
@section('content')
<section class="content">
    <div class="row">
      <div class="col-xs-12">
          <div class="box">
              <div class="box-header">
              <h3 class="box-title">Tambah transaksi</h3>
              </div>
            <form role="form" action="{{route('transaksi.store')}}" method="POST">
                 @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Item</label>
                            <input type="text" name="item" class="form-control" id="exampleInputEmail1" placeholder="Item">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Count</label>
                            <input type="number" name="count" class="form-control" id="exampleInputEmail1" placeholder="Item">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="Item">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Paid</label>
                            <input type="number" name="paid" class="form-control" id="exampleInputEmail1" placeholder="Item">
                        </div>
                    </div>
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
          </div>
      </div>
    </div>
</section>
@endsection