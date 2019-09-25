<?php include("inc/header.php");?>
<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg p-3">
	<div class="container">

<!-- ================= main slide ================= -->
		<div id="demo" class="carousel slide" data-ride="carousel">

		  <!-- Indicators -->
		  <ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		  </ul>
		  
		  <!-- The slideshow -->
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="imagens/banners/slide1.jpg" alt="" width="1250px" height="400px">
			</div>
			<div class="carousel-item">
			  <img src="imagens/banners/slide1.jpg" alt="" width="100%" height="400px">
			</div>
			<div class="carousel-item">
			  <img src="imagens/banners/slide1.jpg" alt="" width="100%" height="400px">
			</div>
		  </div>
		  
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		  </a>
		</div>
<!-- ============== main slidesow .end // ============= -->

	</div> <!-- container .//  -->
	
<!-- ========================= DIV CONTENT ========================= -->
	<div class="section-request bg pt-3">
		<div class="container">
		
			<header class="section-heading heading-line">
				<h4 class="title-section bg text-uppercase">Novos Itens</h4>
			</header>
		
			<div class="row-sm">
			<?php if(count($produtos->listarNovos(8)) > 0) : ?>	
				<?php foreach($produtos->listarNovos(8) as $produto) : ?>	
					<?php $id = $produto["id_produto"]; ?>
				<div class="col-md-3" onclick="location.href='produto.php?id=<?=$id?>';" style="cursor: pointer;">
					<figure class="card card-product">
						<div class="img-wrap"> 
						<img src="<?=$produto["imagem"]?>"></div>
						<figcaption class="info-wrap">
							<h6 class="title text-dark"><?= $produto["nome"]?></h6>					
							<div class="price-wrap">
								<h3><span class="price-new text-info">R$<?=$produto["valor"]?></span></h3>
							</div> <!-- price-wrap.// -->	
											
						</figcaption>
					</figure> <!-- card // -->
				</div> <!-- col // -->	
				<?php endforeach; ?>	
			<?php else: ?>
				<!-- caso não tiver nenhum produto -->
			<?php endif; ?>
		
			</div> <!-- row.// -->	
		
			<header class="section-heading heading-line text-center">
				<a href="loja.php" class="bg btn text-info title-section text-uppercase"><strong>Clique Aqui para Ver Mais</strong></a>
			</header>

			<?php include('inc/owl.php');?>	
			
		</div><!-- container // -->
	</div>	
<!-- ========================= DIV CONTENT END// ========================= -->

</section>
<!-- ========================= SECTION MAIN END// ========================= -->

<?php include("inc/footer.php"); ?>

