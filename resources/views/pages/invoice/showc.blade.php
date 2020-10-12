@extends('layouts.default')

@section('content')

<div class="container-fluid" style="background-color: white">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 col-xl-9">
        {{-- <div class="card shadow"> --}}
            {{-- <div class="card-header">
            <strong class="card-title">Quotation Slip</strong>
            <strong class="float-right">REQUEST FOR QUOTATION SLIP {{$item->id}} </strong>
            </div> --}}
            
            <div class="card-body p-8">
                {{-- <h4 class="float-right" style="background-color: black; color:white">QUOTATION SLIP</h4> <br /><br /><br /> --}}               
                {{-- <div class="float-right">
                    <div class="col-sm-12">
                        <strong>
                            <p>Dated : {{$item->date}}</p>
                            <p>Currency : {{$item->currency_id}}</p>
                            <p>Equivalent to IDR</p>
                        </strong>
                    </div>
                </div>

                <p>     
                    <strong>
                        {{$item->insureds->name}} </br>
                        {{$item->insureds->address}}
                    </strong> 
                </p>  --}}
               <p style="font-size: 12px">Invoice COPY No.{{$item->id}}</p>

            <div class="row">
                <div class="col-sm-4">
                <p>     
                    <strong>
                        {{$item->insureds->name}} </br>
                        {{$item->insureds->address}}
                    </strong> 
                </p>  
                </div>
                <div class="col-sm-4" style="margin-left: 240px">
                    <p>
                        <strong>
                            Dated :{{$item->date}} </br>
                            Currency :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$item->currency_id}} </br>
                            Kurs to IDR :{{$item->kurs_to_idr}}
                        </strong>
                    </p>
                </div>
            </div>

            <div>
                <p>Up: {{$item->insureds->pic}}</p>
            </div> 
                </br>
                    </br> 
                <h3 align=""><i><u>INVOICE No.{{$item->id}} </u></i></h3>
                <p>We are pleased to advise that the cover has been arranged according to your instructions.Please forward your premium payment immendiately to ensure the continuity of cover and refer to the important warning at the end of this invoice relating to Premium payment warranty.</p>
                <p style="margin-bottom: 2rem">Failure to comply with this may invalidate your insurance policy</p>
            <div style="margin-left: 15px">
                <div class="row" style="margin-bottom: -1%">
                    <div class="col-sm-4">
                        <p >TYPE OF COVER</p>
                    </div>                    
                    <div class="col-sm-6 ">
                        <strong>
                        {{$item->cover_type}}
                        </strong>
                    </div>                    
                </div>
                <div class="form-group row" style="margin-bottom: -1%">
                    <div class="col-sm-4">
                        <p >THE INSURER/SECURITY</p>
                    </div>                    
                    <div class="col-sm-6 ">
                        {{$item->insurance_id}}
                    </div>                    
                </div>
                <div class="form-group row" style="margin-bottom: -1%">
                    <div class="col-sm-4">
                        <p >POLICY / ENDORSEMENT NUMBER</p>
                    </div>                    
                    <div class="col-sm-6">
                        {{$item->policy_number}}
                    </div>                    
                </div>
                <div class="form-group row" style="margin-bottom: -1%">
                    <div class="col-sm-4">
                        <p >INSURED</p>
                    </div>                    
                    <div class="col-sm-6 ">
                        {{$item->insureds->name}}
                    </div>                    
                </div>
                <div class="form-group row" style="margin-bottom: -1%">
                    <div class="col-sm-4">
                        <p >PERIOD OF INSURANCE</p>
                    </div>                    
                    <div class="col-sm-6 ">
                        {{$item->period_from}}&nbsp;&nbsp; TO &nbsp;&nbsp;{{$item->period_to}}
                    </div>                    
                </div>
                <div class="form-group row" style="margin-bottom: -1%">
                    <div class="col-sm-4">
                        <p >RISK LOCATION</p>
                    </div>                    
                    <div class="col-sm-6 ">
                        {{$item->risk_location}}
                    </div>                    
                </div>
                <div class="form-group row" style="margin-bottom: -1%">
                    <div class="col-sm-4">
                        <p >SUM INSURED</p>
                    </div>                    
                    <div class="col-sm-6 ">
                        {{$item->sum_insured}}
                    </div>                    
                </div>
                <div class="form-group row" style="margin-bottom: -1%">
                    <div class="col-sm-4">
                        <p >PREMIUM PAYMENT WARRANTY</p>
                    </div>                    
                    <div class="col-sm-6 ">
                        {{$item->payment_warranty}}
                    </div>                    
                </div>
            </div>
            <div class="form-group row col-sm-4" style="margin-bottom: 1,5rem">
                PARTICULARS
            </div>
            <div class="from-group row" style="margin-left: 15px">
                <div style="margin-bottom: 1,5rem">
                    <p>Being Insurance Premium for transaction of{{$item->particulars}}</p>
                </div>
            </div>


            {{-- <div row>   
                <div class="float-right col-sm-6">
                    <tr>Premium   {{$item->premium}}</tr><br>
                    <tr>Policy/Endorsement Cost   {{$item->policy_cost}}</tr><br>
                    <tr>Stampduty {{$item->stamp_duty}}</tr><br>
                    <tr>Others {{$item->others_premium}}</tr><br>
                    <hr>
                <tr><strong>Gross Premium {{$item->premium + $item->policy_cost + $item->stamp_duty}}</strong></tr><br>
                    <tr>Admin Cost {{$item->admin_cost}}</tr>
                    <hr>
                <tr><strong>Total Premium{{$item->premium + $item->policy_cost + $item->stamp_duty + $item->admin_cost}}</strong></tr>
                </div>
                <div class="col-sm-8">
                    <p style="margin-bottom:0">E & O E</p> 
                    <p style="margin-bottom:0" >Signed For and on behalf of</p>
                    <p style="margin-bottom: 0">
                    <strong>{{$item->signfor}}</strong>
                    </p>
                </div>
            </div> --}}
            <h5 align="center" style="margin-bottom: 20px">SUMMARY OF TRANSACTION</h5>

            <div class="col-sm-12">
                <div class="form-group row" style="margin-bottom:0">              
                    <div class="col-sm-6 ">
                        <table border="0">
                            <tr>
                                <td style="width: 250px">MDS Commision</td>
                                <td>{{$item->mds_commission}}</td>
                            </tr>
                            <tr>
                                <td>Value at Tax(VAT)</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Incoming Tax</td>
                                <td>0</td>
                            </tr>
                            <tr style="border-bottom:1px solid black">
                                <td>Others</td>
                                <td>{{$item->others_mds}}</td>
                            </tr>
                            <tr>
                                <strong>
                                    <td><strong>Net MDS Commission</strong></td>
                                    <td><strong>0</strong></td>
                                </strong>
                            </tr>
                            <tr>
                                <td>O/S Outcome Commission</td>
                                <td>( {{$item->outcome_commission}} )</td>
                            </tr>
                            <tr style="border-bottom:1px solid black">
                                <td>Incoming Tax</td>
                                <td><strong>( {{$item->incoming_tax_total}} )</strong></td>
                            </tr>
                            <tr>
                                <td style="padding-bottom: 20px"><strong>Total MDS Commision</strong></td>
                                <td style="padding-bottom: 20px"><strong>({{$item->outcome_commission + $item->incoming_tax_total}})</strong></td>
                            </tr>
                            <tr style="border-top:1px solid black">
                                <td><strong>Equivalent in IDR</strong></td>
                                <td><strong>({{$item->outcome_commission + $item->incoming_tax_total * $item->kurs_to_idr}})</strong></td>
                            </tr>
                            <tr style="border-top:1px solid black">
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div class=" col-sm-6">    
                        <table border="0">
                            <tr>
                                <td style="width: 250px">Premium</td>
                                <td>{{$item->premium}}</td>
                            </tr>
                            <tr>
                                <td style="">Policy/Endorsement Cost</td>
                                <td>{{$item->policy_cost}}</td>
                            </tr>
                            <tr>
                                <td>Stampduty</td>
                                <td>{{$item->stamp_duty}}</td>
                            </tr>
                            <tr style="border-bottom: 1px solid black;">
                                <td >Others</td>
                                <td >{{$item->others_premium}}</td>
                            </tr>
                            <tr>
                                <td ><strong> Gross Premium</strong></td>
                                <td><strong>{{$item->premium + $item->policy_cost + $item->stamp_duty}}</strong></td>
                            </tr>
                            <tr style="border-bottom: 1px solid black;">
                                <td style="padding-bottom: 20px">Admin Cost</td>
                                <td style="padding-bottom: 20px">{{$item->admin_cost}}</td>
                            </tr>
                            <tr >
                                <td style="padding-bottom: 20px"><strong> Total Premium</strong></td>
                                <td style="padding-bottom: 20px"><strong>{{$item->premium + $item->policy_cost + $item->stamp_duty + $item->admin_cost}}</strong></td>
                            </tr>
                            <tr style="border-top: 1px solid black ">
                                <td ><strong> Equivalent in IDR</strong></td>
                                <td><strong>{{$item->premium + $item->policy_cost + $item->stamp_duty + $item->admin_cost * $item->kurs_to_idr}}</strong></td>
                            </tr>
                            <tr style="border-top:1px solid black">
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

                {{-- <div class="row" style="background-color: rgb(153, 150, 150); display: block">
                    <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;FINANCIAL & OTHERS</p>
                </div> --}}
                {{-- <div class="form-group row" style="margin-bottom:0">
                    <div class="col-sm-3">
                        <p >RATE/PREMIUM</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        {!!$item->rate!!}
                    </div>
                </div>
                <div class="form-group row" style="margin-bottom:0">
                    <div class="col-sm-3">
                        <p >COMPENSATION</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        {!!$item->compensation!!}% of Premium
                    </div>
                </div>
                <div class="form-group row" style="margin-bottom:0">
                    <div class="col-sm-3">
                        <p >PREMIUM WARRANTY</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        {!!$item->warranty!!}
                    </div>
                </div>
                <div class="form-group row" style="margin-bottom:0">
                    <div class="col-sm-3">
                        <p >REMARKS</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        {!!$item->remarks!!}
                    </div>
                </div>
                <div class="col-sm-12">
                    
                <div class="form-group row" style="margin-bottom:0">              
                    <div class="col-sm-6 ">
                        <p style="margin-bottom:0">E & O E</p> 
                <p style="margin-bottom:0" >Signed For and on behalf of</p>
                        {!!$item->signfor!!}
                    </div>
                    <div class="col-sm-6 " align="right">
                        <p style="margin-bottom:0">&nbsp;</p> 
                        <p style="margin-bottom:0; text-align:right"  >Noted and Confirmed by</p>
                        {!!$item->confirmby!!}
                    </div>
                </div>
                </div> --}}
                
            </div> <!-- /. card-body -->
        {{-- </div> <!-- /. card --> --}}
    </div> <!-- /. col -->
</div>
@endsection 