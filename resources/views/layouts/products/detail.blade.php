{!!View("layouts.breadcrumb")->with('breadcrumb',$breadcrumb)!!} 
<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">
        <div class="col-lg-12">

            <div class="ibox product-detail">
                <div class="ibox-content">

                    <div class="row">
                        <div class="col-md-5">


                            <div class="product-images">

                                <div>
                                    <div class="image-imitation">
                                        <img style="max-width: 100%;" src="{{asset($datas['product']->gname)}}">
                                    </div>
                                </div>
                                <div>
                                    <div class="image-imitation">
                                       <img style="max-width: 100%;" src="{{asset($datas['product']->gname)}}">
                                    </div>
                                </div>
                                <div>
                                    <div class="image-imitation">
                                       <img style="max-width: 100%;" src="{{asset($datas['product']->gname)}}">
                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="col-md-7">

                            <h2 class="font-bold m-b-xs">
                            @foreach($datas['categories'] as $cat)
                            {{$cat->id==$datas['product']->gender?$cat->name:''}}
                            @endforeach
                               @foreach($datas['customusers']['results'] as $val)
                               {{$val->id==$datas['product']->cus_id?ucwords($val->lastname).' '.ucwords($val->name):''}}
                               @endforeach
                            </h2>
                            <small>{{$datas['product']->cus_des}}</small>
                            <div class="m-t-md">
                                <h2 class="product-main-price">Set in : ${{$datas['product']->price}} </h2>
                            </div>
                            <dl class="small m-t-md">
                                <dt>Phone : </dt>
                                <dd>&nbsp;&nbsp;{{$datas['product']->phone}}</dd>
                                <dt>Email : </dt>
                                <dd>&nbsp;&nbsp;{{$datas['product']->email}}</dd>
                                <dt>Address : </dt>
                                <dd>&nbsp;&nbsp;{{$datas['product']->address}}</dd>
                            </dl>
                            <hr>

                            <h4>Description</h4>

                            <div class="small text-muted">
                                {{$datas['product']->pro_des}}
                            </div>
                            <dl class="small m-t-md">
                                <?php 
                                    $exp='';
                                    $sdate = new DateTime(date('Y-m-d', strtotime($datas['product']->start_date)));
                                    $cdate = new DateTime(date("Y-m-d H:i:s"));
                                    $edate = new DateTime(date('Y-m-d', strtotime($datas['product']->end_date)));
                                    $countdays=$sdate->diff($cdate)->days;
                                    $totaldays=$sdate->diff($edate)->days;
                                    $totalprice=$countdays * $datas['product']->interest;
                                    $expdays=$totaldays-$countdays;
                                    if($countdays > $totaldays){
                                        $exp="Exp";
                                    } 
                                ?>
                                <dt>Start date : </dt>
                                <dd>&nbsp;&nbsp;{{$datas['product']->start_date}}</dd>
                                <dt>End date : </dt>
                                <dd>&nbsp;&nbsp;{{$datas['product']->end_date}}</dd> 
                                <dt>Total of days : </dt>
                                <dd>&nbsp;&nbsp;Days left : {{$countdays.' \\ '.'days'}}</dd>
                                <dd>&nbsp;&nbsp;Total : {{$totaldays.' \\ '.'days'}}</dd>
                                <dd>&nbsp;&nbsp;Pays : ${{$totalprice}}</dd>
                                <dd>&nbsp;&nbsp;Interest : ${{$datas['product']->interest}}</dd>
                            </dl>
                            <hr>

                            <div>
                                <div class="btn-group">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-cart-plus"></i> Add to cart</button>
                                    <button class="btn btn-white btn-sm"><i class="fa fa-star"></i> Add to wishlist </button>
                                    <button class="btn btn-white btn-sm"><i class="fa fa-envelope"></i> Contact with author </button>
                                </div>
                            </div>



                        </div>
                    </div>

                </div>
                <div class="ibox-footer">
                    <span class="pull-right">
                        Full stock - <i class="fa fa-clock-o"></i> 14.04.2016 10:04 pm
                    </span>
                    The generated Lorem Ipsum is therefore always free
                </div>
            </div>

        </div>
    </div> 

</div>
