 <?php
 include "../config/koneksi.php";
  $id = $_GET['id_pemasukan_kuliah'];
  $query	= mysqli_query($conn,"SELECT A.*, B.nama_siswa AS siswa, C.universitas_nama AS universitas, D.nama_jurusan AS jurusan FROM pemasukan_kuliah AS A 
  LEFT JOIN siswa AS B ON(A.id_siswa = B.id_siswa)
  LEFT JOIN universitas AS C ON(A.id_universitas = C.id_universitas)
  LEFT JOIN jurusan AS D ON(A.id_jurusan = D.id_jurusan) where A.id_pemasukan_kuliah = '$id'");
      while ($hasil = mysqli_fetch_array($query)) 
          
          {
              $total = $hasil['harga'];
 ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice ITC-Centre</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="../resources/logo-itcc.png" style="width:100%; max-width:150px; ">
                            </td>
                            
                            <td>
                                Invoice #: <?php echo $hasil['id_pemasukan_kuliah'];?><br>
                                Created: <?php echo $hasil['tanggal'];?><br>
                            </td>
                        </tr>
                        
                        
                           
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Graha Pena Lt.14 - R1401A<br>
                                Jl. Frontage Ahmad Yani No.88,Surabaya 60234 <br>
                                Jawa Timur, Indonesia 
                            </td>
                            
                            <td>
                                <b>Student Name</b> <br>
                                <?php echo $hasil['siswa'];?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                    Check #
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    Tunai
                </td>
                
                <td>
                    -
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Program Kuliah
                </td>
                
                <td>
                    Harga
                </td>
            </tr>
            <tr class="item">
                <td>
                <b>Universitas : </b> <?php echo $hasil['universitas'];?>
                </td>
            </tr>
            <tr class="item">
                <td>
                    <b>Jurusan</b> : <?php echo $hasil['jurusan'];?>
                </td>
                
                <td>
                <?php echo "Rp. ".number_format($total,2,',','.')."";?>
                </td>
            </tr>
            
        
            
            <tr class="total">
                <td></td>
                
                <td>
                    <b>Total </b> <?php echo "Rp. ".number_format($total,2,',','.')."";?>
                </td>
            </tr>
            <img src="../resources/lunas.png" style="width:100%; max-width:150px; position:relative;  bottom:0px; left:500px;">
                            
        </table>

<?php }?>
    </div>
</body>
</html>
<script>
    window.print();
</script>
 