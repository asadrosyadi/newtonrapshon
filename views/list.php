<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Newtonrapshon</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Dashboard</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Newtonrapshon</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
					 <div class="col-5 align-self-center">
					
                        <div class="customize-input float-right">
                   
				</div>
				</div>
                </div>
            </div>
			
			<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <h3 class="card-title">Literasi dari fungsi <b> 2x<sup>2</sup> - e<sup>2x</sup> </b></h3>
				 <form method="post">
				
				<div class="row">
				
				 <div class="col-6">
					<div class="form-group">
                        <label class="control-label col-xs-3" >X0</label>
                        <div class="col-xs-9">
                           <input type="text" name="xlower" class="form-control">
                        </div>
                    </div>
				</div>
				<div class="col-6">
					<div class="form-group">
                        <label class="control-label col-xs-3" >ε</label>
                        <div class="col-xs-9">
                           <input type="text" name="tol" class="form-control">
                        </div>
                    </div>
				</div>
				
				<div class="col-12">
					<div class="form-group">
						</br>
                        <button type="submit" name="submit" value="submit" class="btn btn-danger text-center" style="margin-top:7px; width:100%;">Submit</button>
                    </div>
				</div>
				</div>
			</form>
		</div>
		</div>
		</div>
</div>
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
<?php
if(isset($_POST['submit'])) {
$a=$this->input->post('xlower');
$tol=$this->input->post('tol');
$max=10000;

$x2=$a;
//fungsi yang akan dicari akarnya
function f($x){
    $e = 2.71828182846;
    
    $y= pow (2*$x,2);
    $z= pow ($e,2*$x);
        $f1= $y - $z ;
        //$f1= sin($x)/cos($x)-$x-0.5 ;
     return $f1;
    }

//fungsi yang akan dicari akarnya turunan
function ft($x){
    $e1 = 2.71828182846;
    $y1= pow ($e1,2);

    $f1=(4*$x) - $y1 ;
    return $f1;
   }

echo"<h4 class='card-title'>Pencarian akar dengan Metode Newtonrapshon</h4>";
echo"<p>Nilai X0 : $a <br>";
echo"ε : $tol <br>";
echo"Maksimum Iterasi : $max <br></p>";

$Fa=f($a);
$Fb=ft($a);

 echo"
 <table class='table' id='table1'>
 <thead>
 <tr>
  <td width=46 align=center ><b>
  Iterasi</b></td>
  <td width=123 align=center ><b>
  X0</b></td>
  <td align=center ><b>f(x0)</b></td>
  <td width=160 align=center ><b>
  f'(X0)</b></td>
  <td width=160 align=center ><b>
  x(n+1)</b></td>
  <td width=160 align=center ><b>
  f(x(n+1))</b></td>
 </tr>
 </thead>
 
";
$i=0;
//while ((it<=max_iter) and (epsilon>tol))
	echo "<tbody>";
while(($i<=$max) ){
$i=$i+1;
$m= $a -($Fa/$Fb);
$Fm= f($m);
$Fma= ft($m);
$eps= abs($Fm);

echo"<tr>
  <td width=46><center>$i</center></td>
  <td width=123><center>$a</center></td>
  <td><center>$Fa</center></td>
  <td><center>$Fb</center></td>
  <td><center>$m</center></td>
  <td><center>$Fm</center></td>
 </tr>
";
  if($eps>=$tol){
   $a=$m;
   $Fa=$Fm;
   $Fb=$Fma;
  } else{
    break;

  }

  

}

echo"</tbody></table>";
if($i<$max){
 echo"<h2>Iterasi Terpenuhi</h2><p>Hasil Akhir : $m </p>";
}
else{
 echo"<h2>Toleransi tidak terpenuhi</h2>";
}

}
							?>
							
							</div>
							</div>
							</div>
							</div>

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
</div>             
           