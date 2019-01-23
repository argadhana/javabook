@extends('admin.templat.index')
@section('title', 'Data Buku')
@section('panel-link')
    <li>Data Buku</li>
@endsection
@section('main')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"> 
                <a href="{{url('admin/buku/create')}}" class="btn btn-primary pull-right"><em class="fa fa-plus"></em> Tambah</a>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover datatable table-responsive">
                    <thead>
                        <tr>
                            <th>Item ID</th>
                            <th>Item Name</th>
                            <th>Item Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>9</td>
                            <td>Item 9</td>
                            <td>$9</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Item 8</td>
                            <td>$8</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Item 7</td>
                            <td>$7</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Item 6</td>
                            <td>$6</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Item 5</td>
                            <td>$5</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Item 4</td>
                            <td>$4</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Item 3</td>
                            <td>$3</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Item 20</td>
                            <td>$20</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Item 2</td>
                            <td>$2</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Item 19</td>
                            <td>$19</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Item 2</td>
                            <td>$2</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Item 19</td>
                            <td>$19</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Item 3</td>
                            <td>$3</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Item 20</td>
                            <td>$20</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Item 2</td>
                            <td>$2</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Item 19</td>
                            <td>$19</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Item 2</td>
                            <td>$2</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Item 19</td>
                            <td>$19</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
