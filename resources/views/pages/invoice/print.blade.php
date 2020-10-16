<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Invoice No. {{$invoice->id}}</title>
  <!-- Latest compiled and minified CSS -->
   <!-- Latest compiled and minified CSS -->
   <!-- Latest compiled and minified CSS -->

</head>
<body >
   <div class="container" style="margin-left: 1cm; margin-right: 1cm; font-family:'Segoe UI'; font-size: 11.5px">
      
         <br><br><br><br>
         <table >
            <tr>
               <td width="410px"><strong>{{$invoice->quotation->insurance->name}}</strong></td>
               <td align="right">Date:</td>
               <td>{{$invoice->date}}</td>
            </tr>
            <tr>
               <td width="300px"><strong>{{$invoice->quotation->insurance->address}}</strong></td>
               <td align="right">Currency:</td>
               <td>{{$invoice->quotation->currency->input_kode}} - 
                  {{$invoice->quotation->currency->mata_uang}}</td>
            </tr>
            <tr>
               <td width="100px"></td>
               <td align="right">Equivalent to IDR:</td>
               <td>{{number_format($invoice->kurs)}}</td>
            </tr>
         </table>

         <h4>
            <u> INVOICE No. {{$invoice->id}} </u> 
         </h4>

         <p align="justify"> 
            We are pleased to advise that the cover has been arranged according to your instructions. Please forward your premium payment immediately to ensure the continuity of cover and refer to the important warning at the end of this invoice relating to Premium payment warranty. 
         </p>
         <p>
            Failure to comply with this may invalidate your insurance policy. 
         </p>

         <table style="padding-bottom: 5px" >
            <tr>
               <td width="220px" style="padding-bottom: 5px">TYPE OF COVER</td>
               <td>{{$invoice->quotation->covertype->deskripsi}} <br></td>
            </tr>
            
            <tr>
               <td>THE INSURER / SECURITY</td>
               <td>{{$invoice->quotation->insurance->name}}</td>
            </tr>
            <tr>
               <td>POLICY / ENDORSEMENT NUMBER</td>
               <td> {{$invoice->policy_number}}</td>
            </tr>
            <tr>
               <td>INSURED</td>
               <td>{{$invoice->quotation->client->name}}</td>
            </tr>
            <tr>
               <td>PERIOD OF INSURANCE</td>
               <td>{{$invoice->quotation->period_from}} <span>&emsp;to&emsp;</span> {{$invoice->quotation->period_to}}</td>
            </tr>
            <tr>
               <td>RISK LOCATION</td>
               <td>Anywhere within Indonesia area</td>
            </tr>
            <tr>
               <td>SUM INSURED</td>
               <td>{{$invoice->quotation->sum_insured}}</td>
            </tr>
            <tr>
               <td>PREMIUM WARRANTY</td>
               <td>{{$invoice->quotation->premium_warranty}} days from the Invoice release date</td>
            </tr>
            <tr>
               <td>TYPE OF COVER</td>
               <td><p >{{$invoice->quotation->covertype->deskripsi}} </p></td>
            </tr>
         </table>
            <p>PARTICULARS</p>
            <p align="justify" >
               Being Insurance Premium for transaction of {!!$invoice->particulars!!}
            </p>
            <br> <br>
            <table style="">
               <tr>
                  <td width="250px">E & O E</td>
                  <td width="200px" align="right" >Premium</td>
                  <td width="165px" align="right">{{number_format($invoice->quotation->premi)}}.00</td>
               </tr>
               <tr>
                  <td width="250px">Signed for and on behalf of</td>
                  <td width="200px" align="right" >Policy/Endorsement Cost</td>
                  <td width="165px" align="right">{{number_format($invoice->policy_cost)}}.00 </td>
               </tr>
               <tr>
                  <td width="250px"><strong>URUN DANA TAKAFUL, PT</strong>
                  </td>
                  <td width="200px" align="right" >Stamp Duty</td>
                  <td width="165px" align="right">{{number_format($invoice->stamp_duty)}}.00</td>
               </tr>
               <tr>
                  <td width="200px">
                  </td>
                  <td width="200px" align="right" >Others</td>
                  <td width="165px" align="right" style="border-bottom: 10px">{{number_format($invoice->others)}}.00</td>
               </tr>
               <tr>
                  <td width="200px">
                  </td>
                  <td width="200px" align="right" ><strong>Gross Premium</strong></td>
                  <td width="165px" align="right"><strong>{{number_format(($invoice->quotation->premi)+($invoice->policy_cost)+($invoice->stamp_duty)+($invoice->quotation->others))}}.00 </strong></td>
               </tr>
               <tr>
                  <td width="200px">
                  </td>
                  <td width="200px" align="right" >Admin Cost</td>
                  <td width="165px" align="right">{{number_format($invoice->admin_cost)}}.00</td>
               </tr>
               <tr>
                  <td width="200px">
                  </td>
                  <td width="200px" align="right" ><strong>Total Premium</strong></td>
                  <td width="165px" align="right"><strong>{{number_format(($invoice->quotation->premi)+($invoice->policy_cost)+($invoice->stamp_duty)+($invoice->quotation->others)+($invoice->admin_cost))}}</strong></td>
               </tr>
               <tr>
                  <td width="200px">
                  </td>
                  <td width="200px" align="right" ><strong>EQUIVALENT TO IDR</strong></td>
                  <td width="165px" align="right"><strong>Rp. {{number_format((($invoice->quotation->premi)+($invoice->policy_cost)+($invoice->stamp_duty)+($invoice->quotation->others))*($invoice->kurs))}}.00</strong></td>
               </tr>
            </table>
         </div>               
      
   </div>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>  