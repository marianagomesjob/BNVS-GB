<!DOCTYPE html>
<html>
	<head>
	<title></title>
	</head>
	<body>
		<div class="modal-body">
			<form role="form">
				<div class="box-body">
				
					<div class="row">
						<div class="col-xs-2">
							<div class="form-group">
							<label class="empresa">Status</label>
							<select class="form-control">
							<option>Ativo</option>
							<option>Desativado</option>
							</select>
							</div>
						</div>
					</div>
					<!--Infomações sobre a empresa-->
					<div class="row">
						<div class="col-xs-2">
						<label for="exampleInputEmail1">Código</label>
						<input type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-4">
						<label for="exampleInputEmail1">Razão Social</label>
						<input type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-4">
						<label for="exampleInputEmail1">Fantasia</label>
						<input type="text" class="form-control" placeholder="">
						</div>							
					</div>
					

					
					<!--Infomações sobre a CNPJ-->
					<div class="row">
						<div class="col-xs-2">
						<label for="exampleInputEmail1">CNPJ</label>
						<input type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-2">
						<label for="exampleInputEmail1">Inscrição Estadual</label>
						<input type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-2">
						<label for="exampleInputEmail1">Inscrição Municipal</label>
						<input type="text" class="form-control" placeholder="">
						</div>							
					
					
						<div class="col-xs-4">
							<div class="form-group">
							<label class="empresa">Ramo de Atividade</label>
							<select class="form-control">
							<option>option 1</option>
							<option>option 2</option>
							</select>
							</div>
						</div>
					
						<div class="col-xs-2">
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
							<span class="glyphicon glyphicon-plus-sign"></span>
							</button>
							<!-- Modal -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">Ramo de Atividade</h4>
											
										</div>
										<div class="modal-body">
											<form role="form">
												<div class="box-body">
													<div class="col-xs-8">
													<label for="exampleInputEmail1">Ramo de Atividade</label>
													<input type="text" class="form-control" placeholder="">
													</div>				
													</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
											<button type="button" class="btn btn-danger">Incluir</button>
										</div>
									</div>
								</div>
							</div>						
						</div>	
						<br>
						<div class="col-xs-4">
						<label for="exampleInputEmail1">E-mail para envio de Nota Fiscal</label>
						<input type="text" class="form-control" placeholder="">
						</div>
						
					</div>	
					<hr>
					<br>
					<div class="row">
						<div class="col-xs-3">
						<label  for="exampleInputEmail1">Taxa de Gestão Geral(%)</label>
						<input type="text" class="form-control" placeholder="">
						</div>

						<div class="col-xs-2">
						<label for="exampleInputEmail1">Taxa de Gestão VT(%)</label>
						<input type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-2">
						<label for="exampleInputEmail1">Taxa de Gestão BR  (R$)</label>
						<input type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-2">
						<label for="exampleInputEmail1">Taxa de Gestão BA (R$)</label>
						<input type="text" class="form-control" placeholder="">
						</div>							
					</div>
					
					<div class="row">
						<div class="col-xs-2">
						<label for="exampleInputEmail1">Taxa de Gestão BC (R$)</label>
						<input type="text" class="form-control" placeholder="">
						</div>
						
						<div class="col-xs-2">
						<label for="exampleInputEmail1">Outros Valores (R$)</label>
						<input type="text" class="form-control" placeholder="">
						</div>							
						
						<div class="col-xs-2">
						<label for="exampleInputEmail1">Entrega</label>
						<input type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-2">
						<label for="exampleInputEmail1">Desconto</label>
						<input type="text" class="form-control" placeholder="">
						</div>
						
						<div class="col-xs-1">
						<label for="exampleInputEmail1">Prazo</label>
						<input type="text" class="form-control" placeholder="">
						</div>	
					</div>
					
					<hr>
					<h4>Endereço</h4>
					<br>
					<div class="row">
						<div class="col-xs-3">
						<label for="exampleInputEmail1">CEP</label> 
						<input type="text" class="form-control" placeholder="">

						</div>		
						
						<div class="col-xs-1">
						<label for="exampleInputEmail1">Tipo</label>
						<input type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-4">
						<label for="exampleInputEmail1">Logradouro</label>
						<input type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-2">
						<label for="exampleInputEmail1">Número</label>
						<input type="text" class="form-control" placeholder="">
						</div>	
						
					</div>					
					
					<div class="row">
						<div class="col-xs-2">
						<label for="exampleInputEmail1">Complemento</label>
						<input type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-2">
						<label for="exampleInputEmail1">Bairro</label>
						<input type="text" class="form-control" placeholder="">
						</div>		
						
						<div class="col-xs-1">
						<label for="exampleInputEmail1">Cód.IBGE</label>
						<input type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-2">
						<label for="exampleInputEmail1">Cidade</label>
						<input type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-1">
						<label for="exampleInputEmail1">UF</label>
						<input type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-2">
						<label for="exampleInputEmail1">Estado</label>
						<input type="text" class="form-control" placeholder="">
						</div>				
						
					</div>	

					<br>
					<div class="col-xs-12">
						<a href="empresa.php" class="btn btn-default">Voltar</a>
						<a href="#" class="btn btn-danger">Salvar</a>
					</div>					
				</div>
			</form>
		</div>
	</body>
</html>
