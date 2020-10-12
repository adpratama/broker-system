@extends('layouts.default')

@section('content')

{{-- <style>
    .bg-immg: {
        background-img: url({{url('bg.png')}});
        width: 500px;
        height: 700px
    }
</style> --}}
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 col-xl-9">
        {{-- <div class="col-12 col-lg-12 col-xl-8"> --}}

        {{-- <div class="card shadow"> --}}
            {{-- <div class="card-header">
            <strong class="card-title">Quotation Slip</strong>
            <strong class="float-right">REQUEST FOR QUOTATION SLIP {{$item->id}} </strong>
            </div> --}}
            
            <div class="card-body p-8">
                <h4 class="float-right" 
                    style="background-color: black; color:white; ">
                    CLOSING INSTRUCTION
                </h4> 
                <br />
                <br />
                <br />
                <p >Jakarta, {{$instruct->date}}</p>
                    
                
                <p>
                    <strong>
                        {{$instruct->insurance->name}} <br />
                        {{$instruct->insurance->address}} 
                    </strong> 
                </p>  
                {{-- <P>Up : <strong>{{ $instruct->insurance->pic}} </strong></P> --}}
                <h4 align="center">CLOSING INSTRUCTION NO: {{$instruct->id}} </h4>

                <p>Having reviewed the proposal submitted, we are pleased to advise you that it is our intention to purchase Insurance and instruct you to issue policy as per the below table</p>

                <div class="row" style="background-color: rgb(153, 150, 150); display: block">
                    <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;DATA & INFORMATION</p>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <p >THE INSURED</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        {!!$instruct->insured!!}
                    </div>                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <p >PERIOD OF INSURANCE</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        {!!$instruct->period!!}
                    </div>                    
                </div>
                <div class="form-group row" style="padding:0 !important">
                    <div class="col-sm-3">
                        <p >DETAILS OF CONTRACT</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        {!!$instruct->contract_details!!}
                    </div>                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <p >SCOPE OF WORK PROJECT</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        {!!$instruct->scope!!}
                    </div>                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <p >TERRITORIAL LIMIT</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        {!!$instruct->territorial!!}
                    </div>                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <p >DETAILS OF EMPLOYEE</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        {!!$instruct->employee_details!!}
                    </div>                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <p >DETAILS OF VEHICLE</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        {!!$instruct->vehicle_details!!}
                    </div>                    
                </div>
                <div class="row" style="background-color: rgb(153, 150, 150); display: block">
                    <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;TERMS & CONDITION</p>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <p >TYPE OF COVER</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        {!!$instruct->cover_type!!}
                    </div>                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <p >FORM INSURANCE COVERAGE</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        {!!$instruct->coverage!!}
                    </div>                    
                </div>
                <div class="row" style="background-color: rgb(153, 150, 150); display: block">
                    <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;FINANCIAL & OTHERS</p>
                </div>
                <div class="form-group row" style="margin-bottom:0">
                    <div class="col-sm-3    ">
                        <p >RATE/PREMIUM</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        {{-- <ul>
                            <div class="col-sm-2">
                                <li>Premium</li>
                                <li>Premium</li>
                            </div>
                            <div class="col-sm-2">
                                <li>{!!$instruct->rate!!}</li>
                                <li>Premium</li>
                            </div>
                            
                        </ul> --}}
                        <table  class="table" >
                            <tr>
                                <td style="padding:0 !important"><li>Premium&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  {{$instruct->currency}}{{number_format($instruct->premium)}}</li></td>
                                <td style="padding:0 !important">= IDR</td>
                                <td align="right" style="padding:0 !important">{{number_format($instruct->premium * $instruct->rate)}} </td>
                                <td align="right" style="padding:0 !important">(Kurs Rp. {{number_format($instruct->rate)}}) </td>
                            </tr>
                            <tr>
                                <td style="padding:0 !important"><li>Policy Cost and Admin Fee</li></td>
                                <td style="padding:0 !important">= IDR</td>
                                <td style="padding:0 !important" align="right">{{number_format($instruct->policy_cost)}}</td>
                            </tr>
                            <tr>
                                <td style="padding:0 !important"><strong>Total Premium</strong></td>
                                <td style="padding:0 !important">= IDR</td>
                                <td style="padding:0 !important" align="right"><strong>{{number_format(($instruct->premium * $instruct->rate)+ $instruct->policy_cost) }}</strong> </td>
                            </tr>
                        </table>
                        
                        
                        
                        
                    </div>
                </div>
                {{-- <div class="form-group row" style="margin-bottom:0">
                    <div class="col-sm-3">
                        <p >COMPENSATION</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        {!!$instruct->compensation!!}% of Premium
                    </div>
                </div> --}}
                <div class="form-group row" style="margin-bottom:0">
                    <div class="col-sm-3">
                        <p >PREMIUM WARRANTY</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        {!!$instruct->warranty!!}
                    </div>
                </div>
                <div class="form-group row" style="margin-bottom:0">
                    <div class="col-sm-3">
                        <p >REMARKS</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        {!!$instruct->remarks!!}
                    </div>
                </div>
                <div class="col-sm-12">
                    
                <div class="form-group row" style="margin-bottom:0">              
                    <div class="col-sm-6 ">
                        <p style="margin-bottom:0">E & O E</p> 
                <p style="margin-bottom:0" >Signed For and on behalf of</p>
                        {!!$instruct->signfor!!}
                    </div>
                    <div class="col-sm-6 " align="right">
                        <p style="margin-bottom:0">&nbsp;</p> 
                        <p style="margin-bottom:0; text-align:right"  >Noted and Confirmed by</p>
                        {!!$instruct->confirmby!!}
                    </div>
                </div>
                </div>
                
            </div> <!-- /. card-body -->
        {{-- </div> <!-- /. card --> --}}
    </div> <!-- /. col -->
</div>
@endsection 