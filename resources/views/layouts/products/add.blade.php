{!!View("layouts.breadcrumb")->with('breadcrumb',$breadcrumb)!!}
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>All form elements <small>With custom checbox and radion elements.</small></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <form method="get" class="form-horizontal" id='form'>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Person's name</label>
                        <div class="col-sm-10"><input name="txtPname" type="text" placeholder="Person's name" class="form-control"></div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Phone</label>
                      <div class="col-sm-10"><input name="txtPhone" type="text" placeholder="Enter phone" class="form-control" ></div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10"><input name="txtEmail" type="email" placeholder="Enter email" class="form-control" required></div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Type</label>
                    <div class="col-sm-10">
                      <select name="txtType" data-placeholder="Choose a Type..." class="chosen-select" multiple style="width:350px;" tabindex="4">
                          <option value="">Select</option>
                          <option value="United States">phone</option>
                          <option value="United Kingdom">motor</option>
                      </select>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Model</label>
                        <div class="col-sm-10"><input type="text" name="txtModel" placeholder="Model" class="form-control"></div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Set price</label>
                      <div class="col-sm-10"><input name="txtSetPrice" type="text" placeholder="Enter price" class="form-control"></div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Image</label>
                      <div class="col-sm-10">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                          <div class="form-control" data-trigger="fileinput">
                              <i class="glyphicon glyphicon-file fileinput-exists"></i>
                          <span class="fileinput-filename"></span>
                          </div>
                          <span class="input-group-addon btn btn-default btn-file">
                              <span class="fileinput-new">Select file</span>
                              <span class="fileinput-exists">Change</span>
                              <input type="file" name="..."/>
                          </span>
                          <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                      </div></div>
                    </div>

                    <div class="form-group" id="data_1">
                        <label class="col-sm-2 control-label">Start</label>
                        <div class="col-sm-10">
                            <div class="input-group date">
                              <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="txtStart" value="03/04/2014">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="col-sm-2 control-label">End</label>
                        <div class="col-sm-10">
                            <div class="input-group date">
                              <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="txtEnd" value="03/04/2014">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">Descritions</label>
                    <div class="col-sm-12">
                      <div class="summernote">
                          <h3>Lorem Ipsum is simply</h3>
                          dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                          when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                          typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                          <br/>
                          <br/>
                          <ul>
                              <li>Remaining essentially unchanged</li>
                              <li>Make a type specimen book</li>
                              <li>Unknown printer</li>
                          </ul>
                      </div>
                      </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-white" type="submit">Cancel</button>
                            <button class="ladda-button btn btn-primary"  data-style="expand-left">Submit</button>
                            <!-- <button class="btn btn-primary" type="submit">Save changes</button> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
