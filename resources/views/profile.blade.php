@extends('layout/index')
@section('titel','Profil')
@section('content')
    <h1>Hello ini Halaman </h1>
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Select2 (Default Theme)</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body" style="display: block;">
            <div class="row">
              <div class="col-md-6" data-select2-id="29">
                <div class="form-group">
                  <label>Minimal</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="3">Alabama</option>
                    <option data-select2-id="30">Alaska</option>
                    <option data-select2-id="31">California</option>
                    <option data-select2-id="32">Delaware</option>
                    <option data-select2-id="33">Tennessee</option>
                    <option data-select2-id="34">Texas</option>
                    <option data-select2-id="35">Washington</option>
                  </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-nnnb-container"><span class="select2-selection__rendered" id="select2-nnnb-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Disabled</label>
                  <select class="form-control select2 select2-hidden-accessible" disabled="" style="width: 100%;" data-select2-id="4" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="6">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="true" aria-labelledby="select2-yh5d-container"><span class="select2-selection__rendered" id="select2-yh5d-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Multiple</label>
                  <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Select a State" style="width: 492.5px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Disabled Result</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="9" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="11">Alabama</option>
                    <option>Alaska</option>
                    <option disabled="disabled">California (disabled)</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="10" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-87gq-container"><span class="select2-selection__rendered" id="select2-87gq-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <h5>Custom Color Variants</h5>
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Minimal (.select2-danger)</label>
                  <select class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="14">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="13" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-85k7-container"><span class="select2-selection__rendered" id="select2-85k7-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Multiple (.select2-purple)</label>
                  <div class="select2-purple">
                    <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="16" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Select a State" style="width: 492.5px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer" style="display: block;">
            Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin.
          </div>
        </div>
        <!-- /.card -->

        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Select2 (Bootstrap4 Theme)</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-plus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body" style="display: none;">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Minimal</label>
                  <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="19">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select><span class="select2 select2-container select2-container--bootstrap4" dir="ltr" data-select2-id="18" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-k554-container"><span class="select2-selection__rendered" id="select2-k554-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Disabled</label>
                  <select class="form-control select2bs4 select2-hidden-accessible" disabled="" style="width: 100%;" data-select2-id="20" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="22">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--disabled" dir="ltr" data-select2-id="21" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="true" aria-labelledby="select2-19yw-container"><span class="select2-selection__rendered" id="select2-19yw-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Multiple</label>
                  <select class="select2bs4 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="23" tabindex="-1" aria-hidden="true">
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select><span class="select2 select2-container select2-container--bootstrap4" dir="ltr" data-select2-id="24" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Select a State" style="width: 492.5px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Disabled Result</label>
                  <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="27">Alabama</option>
                    <option>Alaska</option>
                    <option disabled="disabled">California (disabled)</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select><span class="select2 select2-container select2-container--bootstrap4" dir="ltr" data-select2-id="26" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-447y-container"><span class="select2-selection__rendered" id="select2-447y-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer" style="display: none;">
            Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin.
          </div>
        </div>
        <!-- /.card -->

        <div class="card card-default collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Bootstrap Duallistbox</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-plus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body" style="display: none;">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label>Multiple</label>
                  <div class="bootstrap-duallistbox-container row moveonselect moveondoubleclick"> <div class="box1 col-md-6">   <label for="bootstrap-duallistbox-nonselected-list_" style="display: none;"></label>   <span class="info-container">     <span class="info">Showing all 6</span>     <button type="button" class="btn btn-sm clear1" style="float:right!important;">show all</button>   </span>   <input class="form-control filter" type="text" placeholder="Filter">   <div class="btn-group buttons">     <button type="button" class="btn moveall btn-outline-secondary" title="Move all">&gt;&gt;</button>        </div>   <select multiple="multiple" id="bootstrap-duallistbox-nonselected-list_" name="_helper1" style="height: 102px;"><option>Alaska</option><option>California</option><option>Delaware</option><option>Tennessee</option><option>Texas</option><option>Washington</option></select> </div> <div class="box2 col-md-6">   <label for="bootstrap-duallistbox-selected-list_" style="display: none;"></label>   <span class="info-container">     <span class="info">Showing all 1</span>     <button type="button" class="btn btn-sm clear2" style="float:right!important;">show all</button>   </span>   <input class="form-control filter" type="text" placeholder="Filter">   <div class="btn-group buttons">          <button type="button" class="btn removeall btn-outline-secondary" title="Remove all">&lt;&lt;</button>   </div>   <select multiple="multiple" id="bootstrap-duallistbox-selected-list_" name="_helper2" style="height: 102px;"><option selected="">Alabama</option></select> </div></div><select class="duallistbox" multiple="multiple" style="display: none;">
                    <option selected="">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer" style="display: none;">
            Visit <a href="https://github.com/istvan-ujjmeszaros/bootstrap-duallistbox#readme">Bootstrap Duallistbox</a> for more examples and information about
            the plugin.
          </div>
        </div>
        <!-- /.card -->

        <div class="row">
          <div class="col-md-6">

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Input masks</h3>
              </div>
              <div class="card-body">
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                  <label>Date masks:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- Date mm/dd/yyyy -->
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask="" inputmode="numeric">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- phone mask -->
                <div class="form-group">
                  <label>US phone mask:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" inputmode="text">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- phone mask -->
                <div class="form-group">
                  <label>Intl US phone mask:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="" inputmode="text">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- IP mask -->
                <div class="form-group">
                  <label>IP mask:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask="" inputmode="numeric">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Color &amp; Time Picker</h3>
              </div>
              <div class="card-body">
                <!-- Color Picker -->
                <div class="form-group">
                  <label>Color picker:</label>
                  <input type="text" class="form-control my-colorpicker1 colorpicker-element" data-colorpicker-id="1" data-original-title="" title="">
                </div>
                <!-- /.form group -->

                <!-- Color Picker -->
                <div class="form-group">
                  <label>Color picker with addon:</label>

                  <div class="input-group my-colorpicker2 colorpicker-element" data-colorpicker-id="2">
                    <input type="text" class="form-control" data-original-title="" title="">

                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-square"></i></span>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- time Picker -->
                <div class="bootstrap-timepicker">
                  <div class="form-group">
                    <label>Time picker:</label>

                    <div class="input-group date" id="timepicker" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#timepicker">
                      <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="far fa-clock"></i></div>
                      </div>
                      </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col (left) -->
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Date picker</h3>
              </div>
              <div class="card-body">
                <!-- Date -->
                <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <!-- Date and time -->
                <div class="form-group">
                  <label>Date and time:</label>
                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime">
                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <!-- /.form group -->
                <!-- Date range -->
                <div class="form-group">
                  <label>Date range:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservation">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- Date and time range -->
                <div class="form-group">
                  <label>Date and time range:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservationtime">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- Date and time range -->
                <div class="form-group">
                  <label>Date range button:</label>

                  <div class="input-group">
                    <button type="button" class="btn btn-default float-right" id="daterange-btn">
                      <i class="far fa-calendar-alt"></i> Date range picker
                      <i class="fas fa-caret-down"></i>
                    </button>
                  </div>
                </div>
                <!-- /.form group -->
              </div>
                <div class="card-footer">
                  Visit <a href="https://getdatepicker.com/5-4/">tempusdominus </a> for more examples and information about
                  the plugin.
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- iCheck -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">iCheck Bootstrap - Checkbox &amp; Radio Inputs</h3>
              </div>
              <div class="card-body">
                <!-- Minimal style -->
                <div class="row">
                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary2">
                        <label for="checkboxPrimary2">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary3" disabled="">
                        <label for="checkboxPrimary3">
                          Primary checkbox
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- radio -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked="">
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">
                        <label for="radioPrimary2">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary3" name="r1" disabled="">
                        <label for="radioPrimary3">
                          Primary radio
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Minimal red style -->
                <div class="row">
                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-danger d-inline">
                        <input type="checkbox" checked="" id="checkboxDanger1">
                        <label for="checkboxDanger1">
                        </label>
                      </div>
                      <div class="icheck-danger d-inline">
                        <input type="checkbox" id="checkboxDanger2">
                        <label for="checkboxDanger2">
                        </label>
                      </div>
                      <div class="icheck-danger d-inline">
                        <input type="checkbox" disabled="" id="checkboxDanger3">
                        <label for="checkboxDanger3">
                          Danger checkbox
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- radio -->
                    <div class="form-group clearfix">
                      <div class="icheck-danger d-inline">
                        <input type="radio" name="r2" checked="" id="radioDanger1">
                        <label for="radioDanger1">
                        </label>
                      </div>
                      <div class="icheck-danger d-inline">
                        <input type="radio" name="r2" id="radioDanger2">
                        <label for="radioDanger2">
                        </label>
                      </div>
                      <div class="icheck-danger d-inline">
                        <input type="radio" name="r2" disabled="" id="radioDanger3">
                        <label for="radioDanger3">
                          Danger radio
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Minimal red style -->
                <div class="row">
                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-success d-inline">
                        <input type="checkbox" checked="" id="checkboxSuccess1">
                        <label for="checkboxSuccess1">
                        </label>
                      </div>
                      <div class="icheck-success d-inline">
                        <input type="checkbox" id="checkboxSuccess2">
                        <label for="checkboxSuccess2">
                        </label>
                      </div>
                      <div class="icheck-success d-inline">
                        <input type="checkbox" disabled="" id="checkboxSuccess3">
                        <label for="checkboxSuccess3">
                          Success checkbox
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- radio -->
                    <div class="form-group clearfix">
                      <div class="icheck-success d-inline">
                        <input type="radio" name="r3" checked="" id="radioSuccess1">
                        <label for="radioSuccess1">
                        </label>
                      </div>
                      <div class="icheck-success d-inline">
                        <input type="radio" name="r3" id="radioSuccess2">
                        <label for="radioSuccess2">
                        </label>
                      </div>
                      <div class="icheck-success d-inline">
                        <input type="radio" name="r3" disabled="" id="radioSuccess3">
                        <label for="radioSuccess3">
                          Success radio
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Many more skins available. <a href="https://bantikyan.github.io/icheck-bootstrap/">Documentation</a>
              </div>
            </div>
            <!-- /.card -->

            <!-- Bootstrap Switch -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Bootstrap Switch</h3>
              </div>
              <div class="card-body">
                <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-focused bootstrap-switch-animate bootstrap-switch-on" style="width: 86px;"><div class="bootstrap-switch-container" style="width: 126px; margin-left: 0px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 42px;">ON</span><span class="bootstrap-switch-label" style="width: 42px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 42px;">OFF</span><input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch=""></div></div>
                <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate bootstrap-switch-off" style="width: 86px;"><div class="bootstrap-switch-container" style="width: 126px; margin-left: -42px;"><span class="bootstrap-switch-handle-on bootstrap-switch-success" style="width: 42px;">ON</span><span class="bootstrap-switch-label" style="width: 42px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-danger" style="width: 42px;">OFF</span><input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch="" data-off-color="danger" data-on-color="success"></div></div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col (right) -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">bs-stepper</h3>
              </div>
              <div class="card-body p-0">
                <div class="bs-stepper linear">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#logins-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger" aria-selected="false" disabled="disabled">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Logins</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step active" data-target="#information-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger" aria-selected="true">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Various information</span>
                      </button>
                    </div>
                  </div>
                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    <div id="information-part" class="content active dstepper-block" role="tabpanel" aria-labelledby="information-part-trigger">
                      <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a> for more examples and information about the plugin.
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Dropzone.js <small><em>jQuery File Upload</em> like look</small></h3>
              </div>
              <div class="card-body">
                <div id="actions" class="row">
                  <div class="col-lg-6">
                    <div class="btn-group w-100">
                      <span class="btn btn-success col fileinput-button dz-clickable">
                        <i class="fas fa-plus"></i>
                        <span>Add files</span>
                      </span>
                      <button type="submit" class="btn btn-primary col start">
                        <i class="fas fa-upload"></i>
                        <span>Start upload</span>
                      </button>
                      <button type="reset" class="btn btn-warning col cancel">
                        <i class="fas fa-times-circle"></i>
                        <span>Cancel upload</span>
                      </button>
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center">
                    <div class="fileupload-process w-100">
                      <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                        <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress=""></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table table-striped files" id="previews">
                  
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Visit <a href="https://www.dropzonejs.com">dropzone.js documentation</a> for more examples and information about the plugin.
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
@endsection
@push('profiljs')
    <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
@endpush