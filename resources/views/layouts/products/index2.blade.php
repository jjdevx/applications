{!!View("layouts.breadcrumb")->with('breadcrumb',$breadcrumb)!!} 
<div class="custom-add">
    <a href="{{URL::to('addpro')}}"><button class="btn btn-primary btn-sm" type="button">New</button></a>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row"> 
        @foreach($datas['customers'] as $values)
            <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content product-box">

                        <div class="product-imitation"> 
                            <div class="cus-div">
                                <span class="s-div price"><span style="color: white;">Set in : </span>${{$values->price}}</span>
                                <span class="s-div"><span style="color: white;">Name : </span> {{ucfirst($values->name)}}</span>
                            </div>
                            <?php
                                $img=str_replace('\\','/',$values->image);
                            ?>
                            <img src="{{$img}}">
                            <div class="cus-div cus-div-bottom">
                                <span class="s-div">
                                    <?php 
                                        $exp='';
                                        $sdate = new DateTime(date('Y-m-d', strtotime($values->start_date)));
                                        $cdate = new DateTime(date("Y-m-d H:i:s"));
                                        $edate = new DateTime(date('Y-m-d', strtotime($values->end_date)));
                                        $countdays=$sdate->diff($cdate)->days;
                                        $totaldays=$sdate->diff($edate)->days;
                                        $totalprice=$countdays * $values->interest;
                                        $expdays=$totaldays-$countdays;
                                        if($countdays > $totaldays){
                                            $exp="Exp";
                                        }
                                        echo $countdays." left / ".$totaldays.' days';
                                    ?>
                                </span>
                                <span class="s-div price"><span style="color: #333;">Total : </span> ${{$totalprice}}</span>
                            </div>
                        </div>
                        <div class="product-desc"> 
                            @foreach($datas['dynamictbl']['results'] as $val) 
                                <?php 
                                    if ($values->pid==$val->id){
                                        $cat_parent=$val->name;
                                    }
                                    if ($values->cid==$val->id){
                                        $cat_child=$val->name;
                                    }
                                ?>
                            @endforeach 
                            
                            <div class="contact_cat">
                                <small class="text-muted">
                                {{ucfirst($cat_parent)}}
                                </small>
                                <small class="text-muted">
                                {{'Tell : '.$values->phone}}
                                </small>
                            </div> 
                            <div class="contact_cat">
                                <small class="text-muted">
                                Start date
                                </small>
                                <small class="text-muted">
                                {{$values->start_date}}
                                </small>
                            </div>
                            <div class="contact_cat">
                                <small class="text-muted">
                                End date
                                </small>
                                <small class="text-muted">
                                {{$values->end_date}}
                                </small>
                            </div>
                            <div class="exp_pro">
                                <a href="#" class="product-name" <?php echo isset($exp) && !empty($exp)?'':'style="width:100% !important;"'?>>
                                {{ucfirst($cat_child)}}
                                </a> 
                                @if(!empty($exp) or $exp!='' )
                                <a href="#" class="product-name exp">
                                {{$exp.' : '.$expdays.' d'}}
                                </a>
                                @endif 
                                
                            </div>  
                            <div class="small m-t-xs"> 
                                {{strlen($values->decriptions)>500?substr($values->decriptions,0,500).'...':$values->decriptions}}
                            </div>
                            <div class="m-t text-righ">

                              <a href="{{ action('ProductController@detail',['id'=>$values->id])}}" data-val="" class="btn btn-xs btn-outline btn-primary" id="detailpro">Info <i class="fa fa-long-arrow-right"></i> </a>
                              <a href="{{ action('ProductController@edit',['id'=>$values->id])}}" data-val="" class="btn btn-xs btn-outline btn-primary" id="editpro">Edit <i class="fa fa-long-arrow-right"></i> </a>
                                <a href="#" class="btn btn-xs btn-outline label label-danger prodel">Deleted <i class="fa fa-long-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach 
    </div>
