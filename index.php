<?php include 'header.php'; ?>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1>Date Convert</h1>
			<p>Suppose, your original date is <code>2021-01-06</code>, and you want to convert as like <code>d-m-Y</code></p>
			<span class="dateFormat_01"><i class="fa fa-copy"></i></span>
			<pre id="dateFormat_01">
				$originalDate = "2010-03-21";
				$newDate = date("d-m-Y", strtotime($originalDate));
				echo $newDate;
			</pre>
			<p>Output will be <code><?php  $originalDate = "2010-03-21"; $newDate = date("d-m-Y", strtotime($originalDate)); echo $newDate; ?></code>  </p>

		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>