@extends('layouts.template')
@section('content')
 <link rel="stylesheet" href="{{URL::to('/')}}/assets/examples/css/forms/masks.css">
  <div class="page-header">
  <h1 class="page-title font_lato">Masks </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="{{URL::to('/dashboard')}}">{{ trans('app.home')}}</a></li>
		<li class="active">Masks</li>
	</ol>
  </div>
</div> 
 <div class="page-content container-fluid">
      <div class="row">
        <div class="col-md-6">
          <!-- Panel Basic -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Basic</h3>
            </div>
            <div class="panel-body">
              <form class="form-horizontal">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Date</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputDate1" data-plugin="formatter"
                    data-pattern="[[9999]]-[[99]]-[[99]]" />
                    <p class="help-block">2016-01-01</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Date</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputDate2" data-plugin="formatter"
                    data-pattern="[[99]]/[[99]]/[[9999]]" />
                    <p class="help-block">01/01/2016</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Time</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputTime" data-plugin="formatter"
                    data-pattern="[[99]]: [[99]]" />
                    <p class="help-block">00: 00</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Time-Date</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputTimeDate" data-plugin="formatter"
                    data-pattern="[[99]]: [[99]] [[99]]/[[99]]/[[9999]]" />
                    <p class="help-block">00: 00 01/01/2016</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Characters (only)</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputCharacters" data-plugin="formatter"
                    data-pattern="[[aaaaaaaaa]]" />
                    <p class="help-block">abcdefghk (max 9)</p>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-9 col-sm-offset-3">
                    <button type="button" class="btn-primary btn">Submit</button>
                    <button type="button" class="btn-default btn">Cancel</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- End Panel Basic -->
        </div>
        <div class="col-md-6">
          <!-- Panel Extended -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Extended</h3>
            </div>
            <div class="panel-body">
              <form class="form-horizontal">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Phone</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputPhone" data-plugin="formatter"
                    data-pattern="([[999]]) [[999]]-[[9999]]" />
                    <p class="help-block">(123) 123-1234</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Phone2</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputPhone2" data-plugin="formatter"
                    data-pattern="+186 [[999]]-[[999]]-[[9999]]" />
                    <p class="help-block">+186 123-123-1234</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Phone Ext</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputPhoneExt" data-plugin="formatter"
                    data-pattern="([[999]]) [[999]]-[[9999]] x[[99999]]" />
                    <p class="help-block">(123) 123-1234 x12345</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Credit Card</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputCredit" data-plugin="formatter"
                    data-pattern="[[9999]]-[[9999]]-[[9999]]-[[9999]]" />
                    <p class="help-block">1234-1234-1234-1234</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Product Key</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputProduct" data-plugin="formatter"
                    data-pattern="a[[*]]-[[9999]]-C[[999]]" />
                    <p class="help-block">a*-1234-C123</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Percent</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputPercent" data-plugin="formatter"
                    data-pattern="[[99]].[[99]]%" />
                    <p class="help-block">99.99%</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Currency</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputCurrency" data-plugin="formatter"
                    data-pattern="$[[999]],[[999]],[[999]].[[99]]" />
                    <p class="help-block">$999,999,999.99</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Currency</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control text-right" id="inputCurrency2" data-plugin="formatter"
                    data-pattern="$[[999]],[[999]],[[999]].[[99]]" />
                    <p class="help-block">$999,999,999.99</p>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-9 col-sm-offset-3">
                    <button type="button" class="btn-primary btn">Submit</button>
                    <button type="button" class="btn-default btn">Cancel</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- End Panel Extended -->
        </div>
      </div>
    </div>
<br/>
@stop

 
