<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Invoice No. {{$quotation->id}}</title>
<!-- Latest compiled and minified CSS -->
   <!-- Latest compiled and minified CSS -->
   <!-- Latest compiled and minified CSS -->
   <style>
      td[rowspan] {
         vertical-align: top;
         text-align: left;
      }

   </style>

</head>
<body 
{{-- style="background: url('assets/img/example-image-50.jpg'); width: 100%" --}}
>
   <div class="container" style="margin-left: 0.8cm; margin-right: 0.8cm; font-family:'Segoe UI Light'; text-align:justify; font-size:14px">
      <br>
      <h4 style=" color:white; text-align: right">
         <strong>
            <span style="background-color: black;">
               QUOTATION SLIP
            </span> 
         </strong>
      </h4>

      <br>
      Jakarta, {{$quotation->date}}

      <br><br>
      <strong>
         {{$quotation->client->name}} <br>
         {{$quotation->client->address}} <br>
         {{$quotation->client->kota}}, {{$quotation->client->provinsi}}
      </strong>
      <br><br>
      <strong>Up:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>{{$quotation->client->pic}} </u></strong>

      <br><br>
      <h2 style="text-align: center; border-bottom: 1px solid black; border-top: 1px solid black">QUOTATION SLIP NO. {{$quotation->id}} </h2>

      <p style="text-align: justify">
      We thank you for Insurance request and we are pleased to provide Quotation of Insurance with Terms and Conditions (T/C) are: 
      </p>
      <p style="background-color: silver; color:black;"><strong>DATA & INFORMATION</strong></p>

      <p style="text-align: justify;vertical-align: top;
      text-align: left;">{!!$quotation->content!!}</p>

      <p style="background-color: silver; color:black;"><strong>FINANCIAL & OTHERS</strong></p>

      <table>
         <tr>
            <td width="200px">RATE/PREMIUM</td>
            <td>
               <li>Section I (CGL) : USD 1,500.00 / year </li>
               <li>Section III (WCA/EL) :1.00 % x Total Payroll along Contract with Minimum
                  Premium at USD 500.00</li>
               <li>Section III (EL) : USD 500.00 / year </li>
            </td>
         </tr>
         <tr>
            <td>COMPENSATION</td>
            <td>{{$quotation->compensation}} % of Premium</td>
         </tr>
         <tr>
            <td>PREMIUM WARRANTY</td>
            <td>{{$quotation->premium_warranty}} days from Policy Issuance date </td>
         </tr>
         <tr>
            <td>REMARKS</td>
            <td>
               <li style="margin-left: 15px">L/R Nil for the past 3 years </li>
               <li style="margin-left: 15px">Scope of Work as per contract </li>
            </td>
         </tr>
      </table>
      <table width="100%">
         <tr>
            <td>
               E & OE <br>
               Signed for and on behalf of <br>
               <strong><i>URUN DANA TAKAFUL, PT </i></strong>
               <br><br><br><br><br>
               <u>{{$quotation->authorize->nama}}</u><br>
               {{$quotation->authorize->jabatan}}
            </td>
            <td style="text-align: right">
               <br>
               Noted and Confirmed by <br>
               <strong><i>{{$quotation->client->name}} </i></strong>
               <br><br><br><br><br>
               <u><span style="border-bottom: 1px solid black">       </span></u> <br>
               Authorized Signature
            </td>
         </tr>
      </table>
   </div>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js" 
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" 
      crossorigin="anonymous">
   </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
      crossorigin="anonymous">
   </script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
      crossorigin="anonymous">
   </script>
</body>
</html>  