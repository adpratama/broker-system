<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kwitansi {{$kwitansi->id}}</title>
</head>
<body>
</body>
<div class="container" style="margin-left: 1cm; margin-right:1cm; font-family:'Gill Sans'; font-size: 12px;">
    <h2>MDS INDONESIA</h2>
    <p style="margin-top: -15px;">Oil & Gas Supporting Services</p>
    <br>
    <h2 style="margin-left:30px; width:120px; text-align:center;color:blue; border:2px solid blue;">ORIGINAL</h2>
    <div class="row">
        <div style="float: right; width:120px;">
            <h2 style="border:1px solid blue; text-align:center;">MDS-{{$kwitansi->invoice->id}}-OR</h2>
        </div>
        <div style="float: right; margin-top:1px; margin-right:20px; color:blue;">
            <p >KWITANSI NO.</p>
            <p style="margin-top: -10px">RECEIPT NO.</p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <table border="">
        <tr style="">
            <td width="100px" style="color:blue">
                <p>Telah Terima dari</p>
                <p style="margin-top: -10px"><i>Recived From</i></p>
            </td>
            <td width="519px" style="border:1px solid blue;">
                <p style="text-align: center; "><strong>{{$kwitansi->insurance->name}}</strong> {{$kwitansi->insurance->address}}</p>
            </td>
         </tr>
         <tr>
            <td width="100px" style="color:blue">
                <p>Uang sejumlah</p>
                <p style="margin-top: -10px"><i>The sum of</i></p>
            </td>
            <td width="519px" style="border:1px solid blue;">
                <p style="text-align:center"><strong>{{$kwitansi->currency->mata_uang}}: Thirty Seven Million Eighty Thousand Six hundred Forty Seven Indonesian Rupiahs</strong></p>
            </td>
         </tr>
         <tr>
            <td width="100px" style="color:blue">
                <p>Untuk pembayaran</p>
                <p style="margin-top: -10px"><i>In Payment of</i></p>
            </td>
            <td width="519px" style="border:1px solid blue;">
                <p style="text-align:center">Being payment of <strong>Invoice No.{{$kwitansi->invoice->id}}</strong> under Policy No.<strong>{{$kwitansi->invoice->policy_number}}</strong> for GENERAL-Liability Insurance which covered by Asuransi {{$kwitansi->insurance->name}} with PARTICULARS "{{$kwitansi->invoice->particulars}}"</p>
            </td>
         </tr>
    </table>
    <br>
    <br>
    <table border="" style="border: solid black;">
        <tr>
            <td width="100px" style="padding-right:10px; text-align: right;">
                <p style="color:blue;">Jumlah Pembayaran</p>
                <p style="margin-top: -10px; color:blue;"><i>Amount Payment</i></p>
            </td>
            <td width="200px" align="center" style="border:1px blue; width:120px;">
                {{-- <h4>IDR 37,080,647.<sup>00</sup></h4> --}}
                <h4 style=" text-align:center;">IDR 37,080,647.<sup>00</sup></h4>
            </td>
            <td width="210px" style="text-align: right; padding-right:10px;">
                <p style="color:blue;">Tanggal</p>
                <p style="margin-top: -10px; color:blue;"><i>Date</i></p>
            </td>
            <td style="border:1px blue; width:160px; height: 5px; text-align:right;">
                <p style="margin-right:10px">Jakarta, <strong>{{$kwitansi->date}}</strong></p>
            </td>
         </tr>
    </table>
    <br>
    <table border="" style="border: solid black;">
        <tr>
            <td width="350px" height="" style="border:1px solid blue">
                <p style="color:blue; text-align:center; border-bottom:1px solid blue;">Kwintasi ini tidak berlaku jika cek/wesel belum di uangkan</p>
                <p style="margin-top: -10px; color:blue; text-align:center;"><i>this receipt is not valid unless cheque/draft is cleared for payment</i></p>
                <p></p>
            </td>
        </tr>
    </table>
    <br>
    <table border="" style="border:1px solid blue">
        <tr style="border:red">
            <th width="110px" style="color: blue">Cash/Cheque No.</th>
            <th width="110px" style="color: blue">Bankers</th>
            <th width="120px" style="color: blue">Account No.</th>
        </tr>
        <tr style="text-align: center">
            <td>{{$kwitansi->jenis_pembayaran}}</td>
            <td>{{$kwitansi->bankers}}</td>
            <td>{{$kwitansi->no_rekening}}</td>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

            {{-- COPY --}}
    <div class="container" style="margin-left: 1cm; margin-right:1cm; font-family:'Gill Sans'; font-size: 12px;">
        <h2>MDS INDONESIA</h2>
        <p style="margin-top: -15px;">Oil & Gas Supporting Services</p>
        <br>
        <h2 style="margin-left:30px; width:120px; text-align:center;color:blue; border:2px solid blue;">COPY</h2>
        <div class="row">
            <div style="float: right; width:120px;">
                <h2 style="border:1px solid blue; text-align:center;">MDS-{{$kwitansi->invoice->id}}-OR</h2>
            </div>
            <div style="float: right; margin-top:1px; margin-right:20px; color:blue;">
                <p >KWITANSI NO.</p>
                <p style="margin-top: -10px">RECEIPT NO.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <table border="">
            <tr style="">
                <td width="100px" style="color:blue">
                    <p>Telah Terima dari</p>
                    <p style="margin-top: -10px"><i>Recived From</i></p>
                </td>
                <td width="519px" style="border:1px solid blue;">
                    <p style="text-align: center; "><strong>{{$kwitansi->insurance->name}}</strong> {{$kwitansi->insurance->address}}</p>
                </td>
             </tr>
             <tr>
                <td width="100px" style="color:blue">
                    <p>Uang sejumlah</p>
                    <p style="margin-top: -10px"><i>The sum of</i></p>
                </td>
                <td width="519px" style="border:1px solid blue;">
                    <p style="text-align:center"><strong>{{$kwitansi->currency->mata_uang}}: Thirty Seven Million Eighty Thousand Six hundred Forty Seven Indonesian Rupiahs</strong></p>
                </td>
             </tr>
             <tr>
                <td width="100px" style="color:blue">
                    <p>Untuk pembayaran</p>
                    <p style="margin-top: -10px"><i>In Payment of</i></p>
                </td>
                <td width="519px" style="border:1px solid blue;">
                    <p style="text-align:center">Being payment of <strong>Invoice No.{{$kwitansi->invoice->id}}</strong> under Policy No.<strong>{{$kwitansi->invoice->policy_number}}</strong> for GENERAL-Liability Insurance which covered by Asuransi {{$kwitansi->insurance->name}} with PARTICULARS "{{$kwitansi->invoice->particulars}}"</p>
                </td>
             </tr>
        </table>
        <br>
        <br>
        <table border="" style="border: solid black;">
            <tr>
                <td width="100px" style="padding-right:10px; text-align: right;">
                    <p style="color:blue;">Jumlah Pembayaran</p>
                    <p style="margin-top: -10px; color:blue;"><i>Amount Payment</i></p>
                </td>
                <td width="200px" align="center" style="border:1px blue; width:120px;">
                    {{-- <h4>IDR 37,080,647.<sup>00</sup></h4> --}}
                    <h4 style=" text-align:center;">IDR 37,080,647.<sup>00</sup></h4>
                </td>
                <td width="210px" style="text-align: right; padding-right:10px;">
                    <p style="color:blue;">Tanggal</p>
                    <p style="margin-top: -10px; color:blue;"><i>Date</i></p>
                </td>
                <td style="border:1px blue; width:160px; height: 5px; text-align:right;">
                    <p style="margin-right:10px">Jakarta, <strong>{{$kwitansi->date}}</strong></p>
                </td>
             </tr>
        </table>
        <br>
        <table border="" style="border: solid black;">
            <tr>
                <td width="350px" height="" style="border:1px solid blue">
                    <p style="color:blue; text-align:center; border-bottom:1px solid blue;">Kwintasi ini tidak berlaku jika cek/wesel belum di uangkan</p>
                    <p style="margin-top: -10px; color:blue; text-align:center;"><i>this receipt is not valid unless cheque/draft is cleared for payment</i></p>
                    <p></p>
                </td>
            </tr>
        </table>
        <br>
        <table border="" style="border:1px solid blue">
            <tr style="border:red">
                <th width="110px" style="color: blue">Cash/Cheque No.</th>
                <th width="110px" style="color: blue">Bankers</th>
                <th width="120px" style="color: blue">Account No.</th>
            </tr>
            <tr style="text-align: center">
                <td>{{$kwitansi->jenis_pembayaran}}</td>
                <td>{{$kwitansi->bankers}}</td>
                <td>{{$kwitansi->no_rekening}}</td>
            </tr>
        </table>
    </div>
</div>
</html>