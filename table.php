<html lang="en-US">
<head>
	<meta charset="utf-8" />
	<title>Responsive Table</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>	
</head>
<body>

	<div id="wrapper">
		<div class="divtable" id="testTbl" var-offset="25">
			<div class="trow head">
				<div class="tcell">Date</div>
				<div class="tcell">Type</div>
				<div class="tcell">Price</div>
				<div class="tcell">Granted</div>
				<div class="tcell">Exercised</div>
				<div class="tcell">Vested</div>
				<div class="tcell">Non-vested</div>
				<div class="tcell">Expiration</div>
			</div> <!-- /.trow -->
			
			<div class="trow">
				<div class="tcell">Jan 09, 2013</div>
				<div class="tcell">RES</div>
				<div class="tcell">$30.00</div>
				<div class="tcell">150</div>
				<div class="tcell">100</div>
				<div class="tcell">$0</div>
				<div class="tcell">$0</div>
				<div class="tcell">Jan 09, 2020</div>
			</div> <!-- /.trow -->
	
			<div class="trow">
				<div class="tcell">Oct 15, 2012</div>
				<div class="tcell">NQSO</div>
				<div class="tcell">$32.00</div>
				<div class="tcell">0</div>
				<div class="tcell">0</div>
				<div class="tcell">$0</div>
				<div class="tcell">$2,400</div>
				<div class="tcell">Oct 15, 2022</div>
			</div> <!-- /.trow -->
			
			<div class="trow">
				<div class="tcell">Jun 01, 2012</div>
				<div class="tcell">RES</div>
				<div class="tcell">$28.00</div>
				<div class="tcell">350</div>
				<div class="tcell">0</div>
				<div class="tcell">$0</div>
				<div class="tcell">$11,900</div>
				<div class="tcell">Jun 01, 2022</div>
			</div> <!-- /.trow -->
			
			<div class="trow">
				<div class="tcell">Oct 12, 2010</div>
				<div class="tcell">NQSO</div>
				<div class="tcell">$24.05</div>
				<div class="tcell">900</div>
				<div class="tcell">240</div>
				<div class="tcell">$2,090</div>
				<div class="tcell">$4,000</div>
				<div class="tcell">Oct 12, 2021</div>
			</div> <!-- /.trow -->
			
			<div class="trow total">
				<div class="tcell keepLabel totaltext">TOTAL</div>
				<div class="tcell hideinResp">&nbsp;</div>
				<div class="tcell hideinResp">&nbsp;</div>
				<div class="tcell">1,500</div>
				<div class="tcell">340</div>
				<div class="tcell lg">$2,090</div>
				<div class="tcell lg">$18,300</div>
				<div class="tcell hideinResp">&nbsp;</div>
			</div> <!-- /.trow -->
		
		</div> <!-- /.divtable -->
	</div>
	<script src="script.js"></script>
</body>
</html>