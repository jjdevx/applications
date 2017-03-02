{!!View("layouts.breadcrumb")->with('breadcrumb',$breadcrumb)!!}
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <form method="POST" action="{{URL::to('updatepro/'.$datas['product']->pro_id)}}" enctype="multipart/form-data">
        {!! csrf_field() !!} 
        <input name="img_id" type="hidden" value="{{$datas['product']->img_id}}">
        <div class="row">
            <div class="col-lg-12">
                <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1"> Personal info</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2"> Data</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-4"> Images</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                <div class="panel-body">

                                    <fieldset class="form-horizontal">
                                        <div class="form-group"><label class="col-sm-2 control-label">Name:</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="cus_name" id="cus_name"> 
                                                    @foreach($datas['customusers']['results'] as $val) 
                                                    <option value="{{$val->id}}" {{$val->id==$datas['product']->cus_id?'selected="selected"':""}}>{{$val->name}}</option> 
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="form-group"><label class="col-sm-2 control-label">Phone:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="txtPhone" id="txtPhone" value="{{$datas['product']->phone}}" placeholder="${{$datas['product']->phone}}"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Email:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="txtEmail" id="txtEmail" value="{{$datas['product']->email}}" placeholder="${{$datas['product']->email}}"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Address:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="txtAddress" id="txtAddress" value="{{$datas['product']->address}}" placeholder="{{$datas['product']->address}}"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Description:</label>
                                            <div class="col-sm-10">
                                                <div class="summernote">
                                                    {{$datas['product']->cus_des}}
                                                </div>
                                            </div>
                                        </div> 
                                    </fieldset>

                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                <div class="panel-body">

                                    <fieldset class="form-horizontal">
                                        <div class="form-group"><label class="col-sm-2 control-label">ID:</label>
                                            <div class="col-sm-10"><input type="text" value="{{$datas['product']->pro_id}}" class="form-control" placeholder="{{$datas['product']->pro_id}}"></div>
                                        </div> 
                                        <div class="form-group"><label class="col-sm-2 control-label">Type:</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="txtType" name="txtType" >
                                                    @foreach($datas['parrents'] as $val) 
                                                    <option value="{{$val->id}}" {{$val->id==$datas['product']->pid?'selected="selected"':""}}>{{$val->name}}</option> 
                                                    @endforeach 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Model:</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="txtModel" name="txtModel">
                                                    @foreach($datas['categories'] as $val) 
                                                    <option value="{{$val->id}}" {{$val->id==$datas['product']->pc_id?'selected="selected"':""}}>{{$val->name}}</option> 
                                                    @endforeach 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Price:</label>
                                            <div class="col-sm-10"><input name="txtPrice" type="text" class="form-control" placeholder="Price" value="{{$datas['product']->price}}"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Interest</label>
                                            <div class="col-sm-10"><input name="txtInterest" type="text" class="form-control" placeholder="interest" value="{{$datas['product']->interest}}"></div>
                                        </div>
                                        <!-- <div class="form-group" id="data_1">
                                            <label class="col-sm-2 control-label">Start</label>
                                            <div class="col-sm-10">
                                                <div class="input-group date">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                    <input type="text" class="form-control" name="txtStart" value="{{$datas['product']->start_date}}">
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label">Start</label>
                                            <div class=" col-sm-10">
                                                <div class="input-group date form_datetime"  >
                                                <input class="form-control" size="16" type="text" name="txtStart" value="{{$datas['product']->start_date}}">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                            </div>
                                            </div> 
                                        </div>
                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label">End</label>
                                            <div class=" col-sm-10">
                                                <div class="input-group date form_datetime"  >
                                                <input class="form-control" size="16" type="text" name="txtEnd" value="{{$datas['product']->end_date}}">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                            </div>
                                            </div> 
                                        </div>
                                        <!-- <div class="form-group" id="data_1">
                                            <label class="col-sm-2 control-label">End</label>
                                            <div class="col-sm-10">
                                                <div class="input-group date">
                                                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="txtEnd" value="{{$datas['product']->end_date}}">
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="form-group"><label class="col-sm-2 control-label">Description:</label>
                                            <div class="col-sm-10">
                                            <input type="hidden" id="txaDescriptions" name="txaDescriptions">
                                                <div class="summernote">
                                                    {{$datas['product']->pro_des}}
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>


                                </div>
                            </div>
                            <div id="tab-4" class="tab-pane">
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-stripped">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Image preview
                                                </th>
                                                <th>
                                                    Image url
                                                </th>
                                                <th>
                                                    Sort order
                                                </th>
                                                <th>
                                                    Actions
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td style="text-align: center;">
                                                    <img style="max-width: 90px;" src="{{asset($datas['product']->gname)}}">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" disabled value="{{$datas['product']->gname}}">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" value="1">
                                                </td>
                                                <td>
                                                    <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div style="width: 100%;padding: 10px 0;">
            <button type="submit" name="btnSubmit" class="ladda-button btn btn-primary"  data-style="expand-left">Submit</button>
        </div>
        
    </form>
</div>
