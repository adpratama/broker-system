@extends('layouts.default')
@section('content')
<section class="section" style="font-family: 'Segoe UI'">

   <div class="section-body">
      <div class="invoice">
         <div class="invoice-print">
            <div class="row">
               <div class="col-lg-1"></div>
               <div class="col-lg-10">

                  {{-- Kepada dan Tanggal --}}
                  <div class="row">
                     <div class="col-md-6">
                     <address>
                        <strong>{{$invoice->quotation->insurance->name}} <br>
                           {{$invoice->quotation->insurance->address}}<br>
                        </strong>
                     </address>
                     </div>
                     <div class="col-md-3 text-right">
                        <strong>
                           Date: <br>
                           Currency: <br>
                           Equivalent to IDR <br>
                        </strong>
                     </div>
                     <div class="col-md-3 text-md-left">
                     <address>
                        <strong>
                           {{$invoice->date}} <br>
                           {{$invoice->quotation->currency->input_kode}} - 
                              {{$invoice->quotation->currency->mata_uang}}<br>
                           Rp. {{number_format($invoice->kurs)}}<br>
                     </strong>
                     </address>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-md-3">
                        <br>
                        <h4>
                           <u> INVOICE No. {{$invoice->id}} </u> 
                        </h4>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-md-12">
                        <p align="justify"> 
                           We are pleased to advise that the cover has been arranged according to your instructions. Please forward your premium payment immediately to ensure the continuity of cover and refer to the important warning at the end of this invoice relating to Premium payment warranty. 
                        </p>
                        <p>
                           Failure to comply with this may invalidate your insurance policy. 
                        </p>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-md-4">
                        <p style="margin-bottom: 0">TYPE OF COVER</p>
                     </div>
                     <div class="col-md-8">
                        <p style="margin-bottom: 0">{{$invoice->quotation->covertype->deskripsi}} </p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4">
                        <p style="margin-bottom: 0"> THE INSURER / SECURITY</p>
                     </div>
                     <div class="col-md-8">
                        <p style="margin-bottom: 0">{{$invoice->quotation->insurance->name}} </p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4">
                        <p>POLICY / ENDORSEMENT NUMBER</p>
                     </div>
                     <div class="col-md-8">
                        <p style="margin-bottom: 0">{{$invoice->policy_number}} </p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4">
                        <p style="margin-bottom: 0">INSURED</p>
                     </div>
                     <div class="col-md-8">
                        <p style="margin-bottom: 0">{{$invoice->quotation->client->name}} </p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4">
                        <p style="margin-bottom: 0">PERIOD OF INSURANCE</p>
                     </div>
                     <div class="col-md-8">
                        <p style="margin-bottom: 0">{{$invoice->quotation->period_from}} <span>&emsp;to&emsp;</span> {{$invoice->quotation->period_to}} </p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4">
                        <p style="margin-bottom: 0">RISK LOCATION</p>
                     </div>
                     <div class="col-md-8">
                        <p style="margin-bottom: 0">Anywhere within Indonesia area </p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4">
                        <p style="margin-bottom: 0">SUM INSURED</p>
                     </div>
                     <div class="col-md-8">
                        <p style="margin-bottom: 0">{{$invoice->quotation->sum_insured}} </p>
                     </div>
                  </div>   
                  <div class="row">
                     <div class="col-md-4">
                        <p style="margin-bottom: 0">PREMIUM WARRANTY</p>
                     </div>
                     <div class="col-md-8">
                        <p style="margin-bottom: 0">{{$invoice->quotation->premium_warranty}} days from the Invoice release date</p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4">
                        <p >TYPE OF COVER</p>
                     </div>
                     <div class="col-md-8">
                        <p >{{$invoice->quotation->covertype->deskripsi}} </p>
                     </div>
                  </div>               
                  
               </div>               
            </div>
            <div class="row">
               <div class="col-lg-2">
                  <p align="right" style="margin-bottom: 0">PARTICULARS</p>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-1"></div>
               <div class="col-lg-10">
                  <p align="justify" >
                     Being Insurance Premium for transaction of {!!$invoice->particulars!!}
                  </p>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-1"></div>
               <div class="col-lg-3">
                  <address>
                     E & O E <br>
                     Signed for and on behalf of <br>
                     <strong>URUN DANA TAKAFUL, PT</strong>
                  </address>
               </div>
               <div class="col-lg-1"></div>
               <div class="col-lg-3 text-right">
                  Premium <br>
                  Policy/Endorsement Cost <br>
                  Stamp Duty <br>
                  Others <br>
                  <strong>Gross Premium</strong> <br>
                  Admin Cost <br>
                  <strong>Total Premium</strong>
                  <br> <br>
                  <strong>EQUIVALENT TO IDR</strong>
               </div>
               <div class="col-lg-3 text-right">
                  {{number_format($invoice->quotation->premi)}}.00 <br>
                  {{number_format($invoice->policy_cost)}}.00 <br>
                  {{number_format($invoice->stamp_duty)}}.00 <br>
                  {{number_format($invoice->others)}}.00 <br>
                  <strong>{{number_format(($invoice->quotation->premi)+($invoice->policy_cost)+($invoice->stamp_duty)+($invoice->quotation->others))}}.00 </strong> <br>
                  {{number_format($invoice->admin_cost)}} <br>
                  <strong>{{number_format(($invoice->quotation->premi)+($invoice->policy_cost)+($invoice->stamp_duty)+($invoice->quotation->others)+($invoice->admin_cost))}}</strong>
                  <br> <br>
                  <strong>Rp. {{number_format((($invoice->quotation->premi)+($invoice->policy_cost)+($invoice->stamp_duty)+($invoice->quotation->others))*($invoice->kurs))}}.00</strong>
               </div>
            </div>
         <hr>
      </div>
   </div>
</section>
@endsection