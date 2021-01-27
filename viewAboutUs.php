<?php 
  $title = "About us";
  include('layout/head.php'); 
?>

<!-- this is menu -->
<div class="ui container">
	<!-- top menu -->
	<div class="ui pt-1 ngambang container secondary pointing menu">
		<a href="index.php" class="item">Home</a>
		<a href="viewData.php" class="item">Data</a>
		<a href="viewAboutUs.php" class="active item">About us</a>
		<div class="right menu">
			<a class="ui item"><i class="file alternate outline icon"></i>Poliklinik</a>
		</div>
	</div>
</div>
<!-- end menu -->

<!-- this is content writed -->
<div class="ui container basic segment">
<div class="ui link cards centered aligned">
  <div class="card">
    <div class="image">
      <img src="assets/images/girl.jpg">
    </div>
    <div class="content">
      <div class="header">Salsabila Fajriati Romli</div>
      <div class="meta">
        <span>3411191119</span>
      </div>
      <div class="description">
        Matthew is an interior designer living in New York.
      </div>
    </div>
    <div class="extra content">
      <span>
        <i class="large instagram icon"></i>
        salsabilaf09
      </span>
    </div>
  </div>
  <div class="card">
    <div class="image">
      <img src="assets/images/girl.jpg">
    </div>
    <div class="content">
      <div class="header">Fitri Destiyanti</div>
      <div class="meta">
        <span>3411191121</span>
      </div>
      <div class="description">
        Molly is a personal assistant living in Paris.
      </div>
    </div>
    <div class="extra content">
      <span>
        <i class="large instagram icon"></i>
        fitridestiyant
      </span>
    </div>
  </div>
  <div class="card">
    <div class="image">
      <img src="assets/images/boy.jpg">
    </div>
    <div class="content">
      <div class="header">Rio Gestavito</div>
      <div class="meta">
        <span>3411191129</span>
      </div>
      <div class="description">
        Elyse is a copywriter working in New York.
      </div>
    </div>
    <div class="extra content">
      <span>
        <i class="large instagram icon"></i>
        riogesta_
      </span>
    </div>
  </div>
</div>
</div>
<!-- end contents -->

<?php include('layout/footer.php'); ?>