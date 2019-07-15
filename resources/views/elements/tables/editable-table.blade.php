@extends('layouts.template')
@section('content')
  <link rel="stylesheet" href="{{URL::to('/')}}/global/vendor/editable-table/editable-table.css">
  <div class="page-header">
  <h1 class="page-title font_lato">Editable Table </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="{{URL::to('/dashboard')}}">{{ trans('app.home')}}</a></li>
		<li class="active">Editable Table</li>
	</ol>
  </div>
</div> 
  <div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body">
          <table class="editable-table table table-striped" id="editableTable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Cost</th>
                <th>Profit</th>
                <th>Fun</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Car</td>
                <td>100</td>
                <td>200</td>
                <td>0</td>
              </tr>
              <tr>
                <td>Bike</td>
                <td>330</td>
                <td>240</td>
                <td>1</td>
              </tr>
              <tr>
                <td>Plane</td>
                <td>430</td>
                <td>540</td>
                <td>3</td>
              </tr>
              <tr>
                <td>Yacht</td>
                <td>100</td>
                <td>200</td>
                <td>0</td>
              </tr>
              <tr>
                <td>Segway</td>
                <td>330</td>
                <td>240</td>
                <td>1</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>
                  <strong>Total</strong>
                </th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <!-- End Panel -->
    </div>
<br/>
@stop


 
