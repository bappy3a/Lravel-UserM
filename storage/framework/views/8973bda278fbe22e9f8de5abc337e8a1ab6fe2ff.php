
<?php $__env->startSection('content'); ?>
 <div class="page-header">
  <h1 class="page-title font_lato">Basic Tables </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="<?php echo e(URL::to('/dashboard')); ?>"><?php echo e(trans('app.home')); ?></a></li>
		<li class="active">Basic Tables</li>
	</ol>
  </div>
</div> 
<div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-md-6">
              <!-- Example Basic -->
              <div class="example-wrap">
                <h4 class="example-title">Basic</h4>
                <p>Add class <code>.table</code>.</p>
                <div class="example table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Role</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Teagan</td>
                        <td>Prohaska</td>
                        <td>@Elijah</td>
                        <td>
                          <span class="label label-danger">admin</span>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Andy</td>
                        <td>Gaylord</td>
                        <td>@Ramiro</td>
                        <td>
                          <span class="label label-info">member</span>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Veronica</td>
                        <td>Gusikowski</td>
                        <td>@Maxime</td>
                        <td>
                          <span class="label label-warning">developer</span>
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Bruce</td>
                        <td>Rogahn</td>
                        <td>@Maggio</td>
                        <td>
                          <span class="label label-success">supporter</span>
                        </td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Carolina</td>
                        <td>Hickle</td>
                        <td>@Hammes</td>
                        <td>
                          <span class="label label-info">member</span>
                        </td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Madaline</td>
                        <td>Eichmann</td>
                        <td>@Amaya</td>
                        <td>
                          <span class="label label-success">supporter</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- End Example Basic -->
            </div>
            <div class="col-md-6">
              <!-- Example Hover Table -->
              <div class="example-wrap">
                <h4 class="example-title">Hover Table</h4>
                <p>Add<code>.table-hover</code>to enable a hover state on table rows
                  within a<code>&lt;tbody&gt;</code></p>
                <div class="example table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Products</th>
                        <th>Popularity</th>
                        <th>Sales</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Milk Powder</td>
                        <td>
                          <span data-plugin="peityLine">5,3,2,-1,-3,-2,2,3,4,1</span>
                        </td>
                        <td>
                          <span class="text-danger text-semibold"><i class="icon wb-chevron-down-mini" aria-hidden="true"></i>                            28.76%</span>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Air Conditioner</td>
                        <td>
                          <span data-plugin="peityLine">1,-1,-2,1,2,1,0,1,3,2</span>
                        </td>
                        <td>
                          <span class="text-warning text-semibold"><i class="icon wb-chevron-down-mini" aria-hidden="true"></i>                            8.55%</span>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>RC Cars</td>
                        <td>
                          <span data-plugin="peityLine">3,2,3,-1,-3,-1,0,2,4,5</span>
                        </td>
                        <td>
                          <span class="text-success text-semibold"><i class="icon wb-chevron-up-mini" aria-hidden="true"></i>                            58.56%</span>
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Down Coat</td>
                        <td>
                          <span data-plugin="peityLine">1,-2,0,2,4,5,3,2,3,5</span>
                        </td>
                        <td>
                          <span class="text-info text-semibold"><i class="icon wb-chevron-up-mini" aria-hidden="true"></i>                            35.76%</span>
                        </td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>SLR Camera</td>
                        <td>
                          <span data-plugin="peityLine">1,-1,0,2,3,1,-1,1,4,2</span>
                        </td>
                        <td>
                          <span class="text-warning text-semibold"><i class="icon wb-chevron-down-mini" aria-hidden="true"></i>                            21.13%</span>
                        </td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Jacket</td>
                        <td>
                          <span data-plugin="peityLine">4,2,-1,-3,-2,1,3,5,2,4</span>
                        </td>
                        <td>
                          <span class="text-info text-semibold"><i class="icon wb-chevron-up-mini" aria-hidden="true"></i>                            26.88%</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- End Example Hover Table -->
            </div>
            <div class="col-md-6">
              <!-- Example Bordered Table -->
              <div class="example-wrap">
                <h4 class="example-title">Bordered Table</h4>
                <p>Add<code>.table-bordered</code>for borders on all sides of the
                  table and cells.</p>
                <div class="example table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Task</th>
                        <th>Progress</th>
                        <th>Deadline</th>
                        <th class="text-nowrap">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Lunar probe project</td>
                        <td>
                          <div class="progress progress-xs margin-vertical-10 ">
                            <div class="progress-bar progress-bar-danger" style="width: 35%"></div>
                          </div>
                        </td>
                        <td>May 15, 2016</td>
                        <td class="text-nowrap">
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Edit">
                            <i class="icon wb-wrench" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Delete">
                            <i class="icon wb-close" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Dream successful plan</td>
                        <td>
                          <div class="progress progress-xs margin-vertical-10 ">
                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                          </div>
                        </td>
                        <td>July 1, 2016</td>
                        <td class="text-nowrap">
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Edit">
                            <i class="icon wb-wrench" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Delete">
                            <i class="icon wb-close" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Office automatization</td>
                        <td>
                          <div class="progress progress-xs margin-vertical-10 ">
                            <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                          </div>
                        </td>
                        <td>Apr 12, 2016</td>
                        <td class="text-nowrap">
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Edit">
                            <i class="icon wb-wrench" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Delete">
                            <i class="icon wb-close" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>The sun climbing plan</td>
                        <td>
                          <div class="progress progress-xs margin-vertical-10 ">
                            <div class="progress-bar progress-bar-primary" style="width: 70%"></div>
                          </div>
                        </td>
                        <td>Aug 9, 2016</td>
                        <td class="text-nowrap">
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Edit">
                            <i class="icon wb-wrench" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Delete">
                            <i class="icon wb-close" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Open strategy</td>
                        <td>
                          <div class="progress progress-xs margin-vertical-10 ">
                            <div class="progress-bar progress-bar-primary" style="width: 85%"></div>
                          </div>
                        </td>
                        <td>Apr 2, 2016</td>
                        <td class="text-nowrap">
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Edit">
                            <i class="icon wb-wrench" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Delete">
                            <i class="icon wb-close" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Tantas earum numeris</td>
                        <td>
                          <div class="progress progress-xs margin-vertical-10 ">
                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                          </div>
                        </td>
                        <td>July 11, 2016</td>
                        <td class="text-nowrap">
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Edit">
                            <i class="icon wb-wrench" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Delete">
                            <i class="icon wb-close" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- End Example Bordered Table -->
            </div>
            <div class="col-md-6">
              <!-- Example Striped Rows -->
              <div class="example-wrap">
                <h4 class="example-title">Striped Rows</h4>
                <p>Use<code>.table-striped</code>to add zebra-striping to any table
                  row within the<code>&lt;tbody&gt;</code>.Striped tables are styled
                  via the<code>:nth-child</code>CSS selector, which is not available
                  in Internet Explorer 8.</p>
                <div class="example table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Order ID</th>
                        <th>Username</th>
                        <th>Payment</th>
                        <th>Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>2569</td>
                        <td>@Jessica</td>
                        <td>
                          <span class="badge badge-dark">Credit Card</span>
                        </td>
                        <td>$256.10</td>
                      </tr>
                      <tr>
                        <td>4582</td>
                        <td>@William</td>
                        <td>
                          <span class="badge badge-success">Paypal</span>
                        </td>
                        <td>$96.75</td>
                      </tr>
                      <tr>
                        <td>2563</td>
                        <td>@Jennifer</td>
                        <td>
                          <span class="badge badge-dark">Credit Card</span>
                        </td>
                        <td>$458.00</td>
                      </tr>
                      <tr>
                        <td>4378</td>
                        <td>@Rolando</td>
                        <td>
                          <span class="badge badge-success">Paypal</span>
                        </td>
                        <td>$30.25</td>
                      </tr>
                      <tr>
                        <td>8465</td>
                        <td>@Katelin</td>
                        <td>
                          <span class="badge badge-dark">Credit Card</span>
                        </td>
                        <td>$158.50</td>
                      </tr>
                      <tr>
                        <td>1526</td>
                        <td>@Richard</td>
                        <td>
                          <span class="badge badge-success">Paypal</span>
                        </td>
                        <td>$58.80</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- End Example Striped Rows -->
            </div>
            <div class="clearfix visible-md-block visible-lg-block"></div>
            <div class="col-md-6">
              <!-- Example Condensed -->
              <div class="example-wrap">
                <h4 class="example-title">Condensed Table</h4>
                <p>Add<code>.table-condensed</code>to make tables more compact by
                  cutting cell padding in half.</p>
                <div class="example table-responsive">
                  <table class="table table-condensed">
                    <thead>
                      <tr>
                        <th>Invoice</th>
                        <th>Username</th>
                        <th>Amount</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="javascript:void(0)">Order #53451</a></td>
                        <td>Mary Adams</td>
                        <td>$24.98</td>
                        <td>2016/7/26</td>
                      </tr>
                      <tr>
                        <td><a href="javascript:void(0)">Order #53452</a></td>
                        <td>Caleb Richards</td>
                        <td>$564.00</td>
                        <td>2016/7/15</td>
                      </tr>
                      <tr>
                        <td><a href="javascript:void(0)">Order #53453</a></td>
                        <td>June Lane</td>
                        <td>$58.87</td>
                        <td>2016/7/01</td>
                      </tr>
                      <tr>
                        <td><a href="javascript:void(0)">Order #53454</a></td>
                        <td>Crystal Bates</td>
                        <td>$97.50</td>
                        <td>2016/6/26</td>
                      </tr>
                      <tr>
                        <td><a href="javascript:void(0)">Order #53455</a></td>
                        <td>Heather Harper</td>
                        <td>$249.99</td>
                        <td>2016/6/09</td>
                      </tr>
                      <tr>
                        <td><a href="javascript:void(0)">Order #53456</a></td>
                        <td>Willard Wood</td>
                        <td>$24.98</td>
                        <td>2016/6/01</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- End Example Condensed -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel -->
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-lg-6">
              <!-- Example Table section -->
              <div class="example-wrap">
                <h4 class="example-title">Table Section</h4>
                <div class="example">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th class="width-50">
                        </th>
                        <th>
                          Project
                        </th>
                        <th>
                          Progress
                        </th>
                        <th class="hidden-xs width-200">
                          Date
                        </th>
                      </tr>
                    </thead>
                    <tbody class="table-section active">
                      <tr>
                        <td class="text-center"><i class="table-section-arrow"></i></td>
                        <td class="font-weight-bold">
                          Project #25369
                        </td>
                        <td>
                          <span class="label label-danger">Canceled</span>
                        </td>
                        <td class="hidden-xs">
                          <span class="text-muted">July 10, 2016</span>
                        </td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td></td>
                        <td class="font-weight-bold text-success">
                          ##MODULE-1111
                        </td>
                        <td>
                          Done
                        </td>
                        <td class="hidden-xs">
                          July 27, 2016
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="font-weight-bold text-success">
                          ##MODULE-723
                        </td>
                        <td>
                          Done
                        </td>
                        <td class="hidden-xs">
                          July 7, 2016
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="font-weight-bold text-success">
                          ##MODULE-4200c
                        </td>
                        <td>
                          Done
                        </td>
                        <td class="hidden-xs">
                          July 12, 2016
                        </td>
                      </tr>
                    </tbody>
                    <tbody class="table-section">
                      <tr>
                        <td class="text-center"><i class="table-section-arrow"></i></td>
                        <td class="font-weight-bold">
                          Project #28686
                        </td>
                        <td>
                          <span class="label label-info">Testing</span>
                        </td>
                        <td class="hidden-xs">
                          <span class="text-muted">July 12, 2016</span>
                        </td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td></td>
                        <td class="font-weight-bold text-success">
                          ##MODULE-3100c
                        </td>
                        <td>
                          Doing
                        </td>
                        <td class="hidden-xs">
                          July 25, 2016
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="font-weight-bold text-success">
                          ##MODULE-6400
                        </td>
                        <td>
                          Done
                        </td>
                        <td class="hidden-xs">
                          July 24, 2016
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="font-weight-bold text-success">
                          ##MODULE-2210
                        </td>
                        <td>
                          Done
                        </td>
                        <td class="hidden-xs">
                          July 22, 2016
                        </td>
                      </tr>
                    </tbody>
                    <tbody class="table-section">
                      <tr>
                        <td class="text-center"><i class="table-section-arrow"></i></td>
                        <td class="font-weight-bold">
                          Project #29587
                        </td>
                        <td>
                          <span class="label label-primary">Developing</span>
                        </td>
                        <td class="hidden-xs">
                          <span class="text-muted">July 15, 2016</span>
                        </td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td></td>
                        <td class="font-weight-bold text-success">
                          ##MODULE-7400
                        </td>
                        <td>
                          Done
                        </td>
                        <td class="hidden-xs">
                          July 2, 2016
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="font-weight-bold text-success">
                          ##MODULE-510c
                        </td>
                        <td>
                          Done
                        </td>
                        <td class="hidden-xs">
                          July 3, 2016
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="font-weight-bold text-success">
                          ##MODULE-3a00
                        </td>
                        <td>
                          Done
                        </td>
                        <td class="hidden-xs">
                          July 17, 2016
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- End Example Table-section -->
            </div>
            <div class="col-lg-6">
              <!-- Example Table Selectable -->
              <div class="example-wrap">
                <h4 class="example-title">Table Selectable</h4>
                <div class="example">
                  <table class="table table-hover" data-selectable="selectable" data-row-selectable="true">
                    <thead>
                      <tr>
                        <th class="width-50">
                          <span class="checkbox-custom checkbox-primary">
                            <input class="selectable-all" type="checkbox">
                            <label></label>
                          </span>
                        </th>
                        <th>
                          Id
                        </th>
                        <th>
                          Project
                        </th>
                        <th class="hidden-xs">
                          Status
                        </th>
                        <th class="hidden-xs">
                          Progress
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="checkbox-custom checkbox-primary">
                            <input class="selectable-item" type="checkbox" id="row-619" value="619">
                            <label for="row-619"></label>
                          </span>
                        </td>
                        <td>619</td>
                        <td>The sun climbing plan</td>
                        <td class="hidden-xs">
                          <span class="label label-primary">Developing</span>
                        </td>
                        <td class="hidden-xs">
                          <span data-plugin="peityLine">5,3,2,-1,-3,-2,2,3,5,2</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="checkbox-custom checkbox-primary">
                            <input class="selectable-item" type="checkbox" id="row-620" value="620">
                            <label for="row-620"></label>
                          </span>
                        </td>
                        <td>620</td>
                        <td>Lunar probe project</td>
                        <td class="hidden-xs">
                          <span class="label label-warning">Design</span>
                        </td>
                        <td class="hidden-xs">
                          <span data-plugin="peityLine">1,-1,0,2,3,1,-1,1,4,2</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="checkbox-custom checkbox-primary">
                            <input class="selectable-item" type="checkbox" id="row-621" value="621">
                            <label for="row-621"></label>
                          </span>
                        </td>
                        <td>621</td>
                        <td>Dream successful plan</td>
                        <td class="hidden-xs">
                          <span class="label label-info">Testing</span>
                        </td>
                        <td class="hidden-xs">
                          <span data-plugin="peityLine">2,3,-1,-3,-1,0,2,4,5,3</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="checkbox-custom checkbox-primary">
                            <input class="selectable-item" type="checkbox" id="row-622" value="622">
                            <label for="row-622"></label>
                          </span>
                        </td>
                        <td>622</td>
                        <td>Office automatization</td>
                        <td class="hidden-xs">
                          <span class="label label-danger">Canceled</span>
                        </td>
                        <td class="hidden-xs">
                          <span data-plugin="peityLine">1,-2,0,2,4,5,3,2,4,2</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="checkbox-custom checkbox-primary">
                            <input class="selectable-item" type="checkbox" id="row-623" value="623">
                            <label for="row-623"></label>
                          </span>
                        </td>
                        <td>623</td>
                        <td>Open strategy</td>
                        <td class="hidden-xs">
                          <span class="label label-default">Reply waiting</span>
                        </td>
                        <td class="hidden-xs">
                          <span data-plugin="peityLine">4,2,-1,-3,-2,1,3,5,2,4</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- End Example Table Selectable -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel -->
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body">
          <!-- Example Responsive -->
          <div class="example-wrap">
            <h4 class="example-title">Responsive</h4>
            <p>Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code>              to make them scroll horizontally on small devices (under 768px).
              When viewing on anything larger than 768px wide, you will not see
              any difference in these tables.</p>
            <div class="example">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Invoice</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Amount</th>
                      <th>Status</th>
                      <th>Country</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="javascript:void(0)">Order #26589</a></td>
                      <td>Herman Beck</td>
                      <td>
                        <span class="text-muted"><i class="wb wb-time"></i> Oct 16, 2016</span>
                      </td>
                      <td>$45.00</td>
                      <td>
                        <div class="label label-table label-success">Paid</div>
                      </td>
                      <td>EN</td>
                    </tr>
                    <tr>
                      <td><a href="javascript:void(0)">Order #58746</a></td>
                      <td>Mary Adams</td>
                      <td>
                        <span class="text-muted"><i class="wb wb-time"></i> Oct 12, 2016</span>
                      </td>
                      <td>$245.30</td>
                      <td>
                        <div class="label label-table label-info">Shipped</div>
                      </td>
                      <td>CN</td>
                    </tr>
                    <tr>
                      <td><a href="javascript:void(0)">Order #98458</a></td>
                      <td>Caleb Richards</td>
                      <td>
                        <span class="text-muted"><i class="wb wb-time"></i> May 18, 2016</span>
                      </td>
                      <td>$38.00</td>
                      <td>
                        <div class="label label-table label-primary">Shipped</div>
                      </td>
                      <td>AU</td>
                    </tr>
                    <tr>
                      <td><a href="javascript:void(0)">Order #32658</a></td>
                      <td>June Lane</td>
                      <td>
                        <span class="text-muted"><i class="wb wb-time"></i> Apr 28, 2016</span>
                      </td>
                      <td>$77.99</td>
                      <td>
                        <div class="label label-table label-info">Paid</div>
                      </td>
                      <td>FR</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- End Example Responsive -->
          <!-- Example Contextual Classes -->
          <div class="example-wrap">
            <h4 class="example-title">Contextual Classes</h4>
            <p>Use classes( <code>.active</code>, <code>.success</code>, <code>.info</code>,
              <code>.warning</code>, <code>.danger</code> ) to color table rows
              or individual cells.</p>
            <div class="example table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Order note</th>
                    <th>Product</th>
                    <th>Buyer</th>
                    <th>payment</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="active">
                    <td># 259648</td>
                    <td>As we got further and further away, it [the Earth] diminished
                      in size.</td>
                    <td>Kode Gaming Laptop</td>
                    <td>Crystal Bates</td>
                    <td>Credit Card</td>
                    <td>5/10/2016</td>
                  </tr>
                  <tr class="">
                    <td># 486524</td>
                    <td>Tantas earum numeris, scribi innumerabiles quietae clariora.</td>
                    <td>New Season Jacket</td>
                    <td>Nathan Watts</td>
                    <td>Paypal</td>
                    <td>5/11/2016</td>
                  </tr>
                  <tr class="success">
                    <td># 985632</td>
                    <td>Metum quieti agatur ut sequitur delectatio accusamus.</td>
                    <td>IO Mouse</td>
                    <td>Ronnie Ellis</td>
                    <td>Credit Card</td>
                    <td>5/16/2016</td>
                  </tr>
                  <tr class="">
                    <td># 159853</td>
                    <td>Incorrupte torquatum animi nudus, pendet fugiamus pariter.</td>
                    <td>Doe Bike</td>
                    <td>Daniel Russell</td>
                    <td>Paypal</td>
                    <td>5/22/2016</td>
                  </tr>
                  <tr class="info">
                    <td># 753698</td>
                    <td>Opes oculis forte omnisque virtute caecilii ceterorum.</td>
                    <td>Zets Baseball Bat</td>
                    <td>Sarah Graves</td>
                    <td>Credit Card</td>
                    <td>5/28/2016</td>
                  </tr>
                  <tr class="">
                    <td># 154789</td>
                    <td>Supplicii nominavi studiose sequimur vidisse.</td>
                    <td>Air Condition</td>
                    <td>Camila Lynch</td>
                    <td>Paypal</td>
                    <td>6/10/2016</td>
                  </tr>
                  <tr class="warning">
                    <td># 321489</td>
                    <td>Amentur pellat sinat commemorandis Vivatur.</td>
                    <td>DSLR</td>
                    <td>Ramon Dunn</td>
                    <td>Credit Card</td>
                    <td>6/19/2016</td>
                  </tr>
                  <tr class="">
                    <td># 568741</td>
                    <td>Applies the hover color to a particular row or cell.</td>
                    <td>Camping Bag</td>
                    <td>Scott Sanders</td>
                    <td>Paypal</td>
                    <td>6/23/2016</td>
                  </tr>
                  <tr class="danger">
                    <td># 369852</td>
                    <td>Indicates a dangerous or potentially negative action.</td>
                    <td>Jogging Shoes</td>
                    <td>Nina Wells</td>
                    <td>Credit Card</td>
                    <td>6/25/2016</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End Example Contextual Classes -->
        </div>
      </div>
      <!-- End Panel -->
    </div>
<br/>
<?php $__env->stopSection(); ?>

 

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>