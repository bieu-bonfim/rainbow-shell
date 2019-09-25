<?php include("inc/header.php");
$usuarios->EntreLogado();
?>

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg p-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<main class="card">
					<div class="row no-gutters">
						<aside class="col-md-6 border-right">
							<article class="gallery-wrap"> 
							<div class="img-big-wrap text-center pt-3" >
								<img src="imagens/avatars/default.png" id="blah" style="cursor: context-menu;">
							</div> <!-- slider-product.// -->
								
							</article> <!-- gallery-wrap .end// -->
						</aside>
						
						<aside class="col-md-6">				
							<header class="card-header bg-white">
								<h3 class="card-title mt-2">Envio de Estampa</h3>
								<small class="form-text text-muted">Campos com * são obrigatórios.</small>
							</header>

							<article class="card-body">
								<form method="post" id="cadastro-estampa" enctype="multipart/form-data">							
									<div class="form-group">
										<label>Nome da Arte*</label>
										<input type="text" class="form-control" name="nome" id="nome" required>
									</div>
									<div class="form-group">
										<label>Descrição*</label>
										<textarea maxlength="100" class="form-control z-depth-1" name="desc" id="desc" rows="3" placeholder="Lembre-se que os dados preenchidos irão aparecer na loja, pense bem antes de enviar" style="resize: none" required></textarea>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Tag principal*</label>
												<input type="text" class="form-control" name="tipo" id="tipo" placeholder="Jogos, Filmes, Séries, Alternativo..."  required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Comissão cobrada (%)*</label>
												<input type="text" placeholder="17, 22, 15, 9..." name="comissao" id="comissao" class="form-control" required>
											</div>
										</div>
									</div>						
									<div class="form-group">									
										<label>Upload de Imagem*</label>
										<div class="input-group">
											<!-- <div class="custom-file">
												<input type="file" class="custom-file-input" id="img-upload" aria-describedby="inputGroupFileAddon01">
												<label class="custom-file-label" for="img-upload">Buscar</label>
											</div> -->
											<input type="file" name="img-upload" id="img-upload" required>										
										</div>
										<div class="form-group float-right">
											<button  type="submit" value="submit" id="btn-enviar" class="btn btn-info"><span id="btn-value">Enviar</span></button>
										</div>
									</div>
								</form>
							</article> <!-- card-body.// -->
						</aside> <!-- col.// -->
					</div> <!-- row.// -->
				</main> <!-- card.// -->
			</div> <!-- col // -->
		</div> <!-- row.// -->
	</div><!-- container // -->
</section>
<!-- ========================= SECTION CONTENT .END// ========================= -->


<!-- ========================= FOOTER ========================= -->
<?php include("inc/footer.php"); ?>


<script>
$(document).ready(function(){

// TODO: https://www.codexworld.com/ajax-file-upload-with-form-data-jquery-php-mysql/

	$("#cadastro-estampa").on('submit',function(e){
		e.preventDefault();
		$.ajax({
			url: "app/AJAX_Estampa",
			type: "POST",
			dataType: 'json',
			data:  new FormData(this);
			contentType: false,
			cache: false,
			processData:false,
			beforeSend: function(){
				$("#btn-enviar").prop("disabled", true);
				$("#btn-value").html("Enviando...");
			},
			success: function(data){
				$("#btn-enviar").prop("disabled", false);
				$("#btn-value").html("Enviar");
				$("#alertas").html(data);
			}
		});
	
	});

	$("#img-upload").change(function() {
		var file = this.files[0];
		var fileType = file.type;
		var match = ['image/png'];
		if(!(fileType == match[0])){
			alert('Por favor, envie imagens no formato PNG!');
			$("#img-upload").val('');
			return false;
		}
	});

	$("#btn-enviar").click(function(){
		var nome = $("#nome").val();
		var desc = $("#desc").val();
		var tipo = $("#tipo").val();
		var comissao = $("#comissao").val();

		if(nome == "" || desc == "" || tipo == "" || comissao == ""){
			$("#alertas").html("<div class='alert alert-danger'>Preencha todos os campos!</div>");
		} else{

			var dt = "action=register_estampa&nome="+nome+"&desc="+desc+"&tipo="+tipo+"&comissao="+comissao;

			$.ajax({
				type: "POST",
				url: "app/ajax/AJAX_Estampa.php",
				data: dt,
				beforeSend: function(){
					$("#btn-enviar").prop("disabled", true);
					$("#btn-value").html("Enviando...");
				},
				success: function(data){
					$("#btn-enviar").prop("disabled", false);
					$("#btn-value").html("Enviar");
					$("#alertas").html(data);
					setTimeout(function(){// wait for 5 secs(2)
						location.reload(); // then reload the page.(3)
					}, 2000); 
				}
			});
		}
	});

});

function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
	
		reader.onload = function(e) {
			$('#blah').attr('src', e.target.result);
		}
	
		reader.readAsDataURL(input.files[0]);
	}
}

$("#img-upload").change(function() {
	readURL(this);
});


</script>