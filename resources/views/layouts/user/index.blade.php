<div class="custom-add">
    <a href="{{route('user.create')}}" class="btn btn-primary ladda-button" data-style="expand-left"><span class="ladda-label">New</span></a>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Basic Table</h5>
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
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Created_at</th>
                            <th width="190px" align="center"  >Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas['users'] as $key => $val)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$val->name}}</td>
                            <td>{{$val->lastname}}</td>
                            <td></td>
                            <td>{{$val->phone}}</td>
                            <td>{{$val->email}}</td>
                            <td>{{$val->created_at}}</td>
                            <td colspan="3" align="center">
                                <a href="{{action('CustomUserController@info',['id'=>$val->id])}}" data-val="" class="btn btn-xs btn-outline btn-primary" id="editpro">Info <i class="fa fa-long-arrow-right"></i> </a>
                                <a href="{{action('CustomUserController@edit',['id'=>$val->id])}}" data-val="" class="btn btn-xs btn-outline btn-primary" id="editpro">Edit <i class="fa fa-long-arrow-right"></i> </a>
                                {{Form::open(['route' =>['user.delete',$val->id]])}}
                                  {{Form::hidden('_method','DELETE')}}
                                  {{Form::submit('Delete',['class'=>'btn btn-danger'])}} 
                                {{Form::close()}} 
                            </td>
                        </tr> 
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>