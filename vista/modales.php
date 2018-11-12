




<?php foreach ($datos as $paciente =>$valor) : ?>

	<!-- Modal para tratamiento-->
	<div aria-hidden="true" aria-labelledby="tratamientoModal" class="modal fade" id="tratamientoModal<?php echo $valor->id_paciente; ?>" role="dialog" tabindex="-1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="tratamientoModal">
						Tratamiento
						<?php echo $valor->
						cedula_paciente; ?>
						<?php echo $valor->
						nombre_paciente; ?>
						<?php echo $valor->
						apellido_paciente; ?>
					</h5>
				</div>
				<form action="" id="form_tratamiento" method="post">
					<div class="row">
						<div class="form-group label-floating has-success col-lg-6 col-md-6 col-sm-6">
							<div class="modal-body">
								<label class="bmd-label-floating" for="tipo_busqueda">
									Medicamentos:
								</label>
								<select class="form-control" data-style="btn btn-success btn-round" id="nombre" name="nombre" type="">
									<option selected="">
										Seleccione
									</option>
									<option value="Cloroquina">
										Cloroquina
									</option>
									<option value="Primaquina">
										Primaquina 5mg
									</option>
									<option value="Primaquina 15mg">
										Primaquina 15mg
									</option>
									<option value="Artemether + Lumenfartin">
										Artemether + Lumenfartin
									</option>
									<option value="Primaquina 7,5mg">
										Primaquina 7,5mg
									</option>
									<option value="Quinina Amp">
										Quinina Amp
									</option>
									<option value="Artesunato Amp">
										Artesunato Amp
									</option>
									<option value="Artemether">
										Artemether
									</option>
								</select>
							</div>
						</div>
						<div class="form-group label-floating has-success col-lg-6 col-md-6 col-sm-6">
							<div class="modal-body">
								<label class="label-control" for="tipo_busqueda">
									Cantidad:
								</label>
								<input class="form-control" id="cantidad" name="cantidad" type="number" />

							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group label-floating has-success col-lg-6 col-md-6 col-sm-6">
							<div class="modal-body">
								<label class="label-control">
									Fecha Suministrado:
								</label>
								<input type="text" class="form-control" id="fecha_suministrado" name="fecha_suministrado" class="datepicker" value=""/>
							</div>
						</div>
					</div>
					<input name="guardartratamiento" type="hidden" value="si">
					<input name="id_paciente" type="hidden" value="<?php echo $valor->id_paciente; ?>">
					<div class="modal-footer">
						<button class="btn btn-secondary btn-sm" data-dismiss="modal" type="button">
							Cerrar
						</button>
						<button class="btn btn-success btn-sm" id="guardartratamiento" type="submit" value="<?php echo $valor->id_paciente; ?>">
							Guardar
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	<!--fin de modal tratamiento -->

	<!-- Modal para Detalles-->
	<div aria-hidden="true" aria-labelledby="tratamientoModal" class="modal fade bd-detalles-modal-lg" id="detalleModal<?php echo $valor->id_paciente; ?>" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="detalleModal">
						Detalles del Paciente
						<?php echo $valor->
						cedula_paciente; ?>
						<?php echo $valor->
						nombre_paciente; ?>
						<?php echo $valor->
						apellido_paciente; ?>
					</h5>
				</div>
				<div class="row">
					<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
						<div class="modal-body">
							<div id="detalles">
								<div class="form-group label-floating has-success">
									<label class="bmd-label-floating">N° de cédula</label>                        
									<input type="text" name="cedula" id="cedula" class="form-control"
									value="<?php echo $valor->
									cedula_paciente; ?>" disabled>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
						<div class="modal-body">
							<div id="detalles">
								<div class="form-group label-floating has-success">
									<label class="bmd-label-floating">Nombres</label>
									<input type="text" name="nombre" id="nombre" class="form-control"
									value="<?php echo $valor->
									nombre_paciente; ?>" disabled>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
						<div class="modal-body">
							<div id="detalles">
								<div class="form-group label-floating has-success">
									<label class="bmd-label-floating">Apellidos</label>
									<input type="text" name="apellido" id="apellido" class="form-control"
									value="<?php echo $valor->
									apellido_paciente; ?>" disabled>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group label-floating has-success col-lg-6 col-md-6 col-sm-6">
						<div class="modal-body">
							<div id="detalles">
								<div class="form-group label-floating has-success">
									<label class="bmd-label-floating">Correo</label>
									<input type="email" name="email" id="email" class="form-control"
									value="<?php echo $valor->
									email_paciente; ?>" disabled>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group label-floating has-success col-lg-6 col-md-6 col-sm-6">
						<div class="modal-body">
							<div id="detalles">
								<div class="form-group label-floating has-success">
									<label for="direccion" class="bmd-label-floating">Dirección</label>
									<input type="text" class="form-control" name="direccion_paciente" id="direccion_paciente" 
									value="<?php echo $valor->
									direccion_paciente; ?>" disabled>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class=" col-lg-4 col-md-4 col-sm-4">
						<select class="form-control" type="select" id="estadomod" name="estado" data-style="btn btn-success btn-round">
							<option disabled selected>Estado</option>
							<?php foreach ($datose as $estado => $fila) {?>
								<?php if ($fila->id_estado == $muni->id_estado): ?>

									<option value="<?php echo $fila->id_estado ?>" selected="selected">
										<?php echo $fila->nombre ?></option>

									<?php endif?>
									<option value="<?php echo $fila->id_estado ?>">
										<?php echo $fila->nombre ?></option>
									<?php }?>
								</select>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-4">
								<select class="form-control" id="municipiomod" name="municipiomod" data-style="btn btn-success btn-round">
									<option disabled selected>Municipio</option>
									<?php foreach ($datosm as $municipio => $fila) {?>
										<?php if ($fila->id_municipio == $muni->municipio_id): ?>

											<option value="<?php echo $fila->id_municipio ?>" selected="selected"><?php echo $fila->nombre ?></option>
										<?php endif?>
										<option value="<?php echo $fila->id_municipio ?>"><?php echo $fila->nombre ?></option>
									<?php }?>
								</select>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-4">
								<select class="form-control" id="parroquiamod" name="parroquiamod" data-style="btn btn-success btn-round">
									<option disabled selected>Parroquia</option>
									<?php foreach ($datosp as $parroquia => $fila) {?>
										<?php if ($fila->id_parroquia == $pac->id_parroquia): ?>


											<option value="<?php echo $fila->id_parroquia ?>" selected="selected"><?php echo $fila->nombre ?></option>


										<?php endif?>
										<option value="<?php echo $fila->id_parroquia ?>"><?php echo $fila->nombre ?></option>
									<?php }?>
								</select>

							</div>
						</div>
						<div class="row">
							<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
								<div class="modal-body">
									<div id="detalles">
										<div class="form-group label-floating has-success">
											<label for="ocupacion" class="bmd-label-floating">Ocupación</label>
											<input type="text" class="form-control" name="ocupacion" id="ocupacion"
											value="<?php echo $valor->
											ocupacion; ?>" disabled>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
								<div class="modal-body">
									<div id="detalles">
										<div class="form-group label-floating has-success">
											<label for="telefonomovil" type="" class="bmd-label-floating">Teléfono</label>
											<input type="text" class="form-control" name="telefono_paciente" id="telefono_paciente"
											value="<?php echo $valor->
											telefono_paciente; ?>" disabled>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
								<div class="modal-body">
									<div id="detalles">
										<div class="form-group label-floating has-success">
											<label for="peso_paciente" class="bmd-label-floating">Peso</label>
											<input type="number" class="form-control" name="peso_paciente" id="peso_paciente" 
											value="<?php echo $valor->
											peso_paciente; ?>" disabled>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-lg-4 col-md-4 col-sm-4">
								<select class="form-group" type="" name="estadocivil_paciente" id="estadocivil_paciente" data-style="btn btn-success btn-round" disabled>
									<option disabled selected>Estado Civil</option>
									<?php  $esci = $pac->estadocivil_paciente;
									if ($esci == 2) { ?>
										<option value="2" selected="selected">Soltero(a)</option>
									<?php } else { ?>
										<option value="2" >Soltero(a)</option>
									<?php }

									if ($esci == 3) {?>
										<option value="3" selected="selected">Casado(a)</option>
									<?php  } else{ ?>
										<option value="3" >Casado(a)</option>
									<?php }

									if ($esci == 4) {?>
										<option value="4" selected="selected">Divorciado(a)</option>
									<?php } else {?>
										<option value="4" >Divorciado(a)</option>
									<?php }
									if ($esci == 5) {?>
										<option value="5" selected="selected">Viudo(a)</option>
									<?php } else {?>
										<option value="5" >Viudo(a)</option>
									<?php }
									?>
								</select>
							</div>

							<div class="form-group col-lg-4 col-md-4 col-sm-4">
								<label for="nacionalidad" value="<?php echo $valor->
								nacionalidad_paciente; ?>">									
								</label>
							</div>
							<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
								<label for="etnia" class="bmd-label-floating">Etnia</label>
								<input type="text" name="etnia_paciente" id="etnia_paciente" class="form-control" 
								value="<?php echo $valor->
								etnia_paciente; ?>">
							</div>
						</div>
						<div class="row">
							<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
								<div class="modal-body">
									<div id="detalles">
										<div class="form-group label-floating has-success">
											<label for="peso_paciente" class="bmd-label-floating">Pruebas realizadas</label>
											<input type="number" class="form-control" name="tipo_prueba" id="tipo_prueba" 
											value="<?php echo $valor->
											tipo_prueba; ?>" disabled>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
								<div class="modal-body">
									<div id="detalles">
										<div class="form-group label-floating has-success">
											<label for="peso_paciente" class="bmd-label-floating">Pruebas realizadas</label>
											<input type="number" class="form-control" name="tipo_busqueda" id="tipo_busqueda" 
											value="<?php echo $valor->
											tipo_busqueda; ?>" disabled>
										</div>
									</div>
								</div>
							</div>
						</div>
						<input name="detalles" type="hidden" value="si">
						<input name="detallespac" type="hidden" value="<?php echo $valor->id_paciente; ?>">
						<div class="modal-footer">
							<button class="btn btn-secondary btn-sm" data-dismiss="modal" type="button">
								Cerrar
							</button>
							<button class="btn btn-success btn-sm" id="detalles" type="submit" value="<?php echo $valor->id_paciente; ?>">
								Guardar
							</button>
						</div>
					</input>
				</input>
			</div>
		</div>
	</div>
	<!--fin de modal Detalles -->
	<!-- Modal para prueba-->
	<div aria-hidden="true" aria-labelledby="pruebaModalTitle" class="modal fade bd-prueba-modal-lg" id="pruebaModal<?php echo $valor->id_paciente; ?>" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pruebaModalTitle">
						Pruebas:
						<?php echo $valor->
						cedula_paciente; ?>
						<?php echo $valor->
						nombre_paciente; ?>
						<?php echo $valor->
						apellido_paciente; ?>
					</h5>
				</div>
				<form action="" id="form_prueba" method="post" >
					<div class="row">

						<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
							<div class="modal-body">
								<label class="bmd-label-floating" for="tipo_busqueda">
									Tipo de Prueba:
								</label>
								<select class="form-control" data-style="btn btn-success btn-round" id="tipo_prueba" name="tipo_prueba" type="">
									<option selected="">
										Seleccione
									</option>
									<option value="1">
										Lámina GGyE
									</option>
									<option value="2">
										PDRM
									</option>
								</select>
							</div>
						</div>
						<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
							<div class="modal-body">
								<label class="bmd-label-floating" for="tipo_busqueda">
									Tipo de Búsqueda:
								</label>
								<select class="form-control" data-style="btn btn-success btn-round" id="tipo_busqueda" name="tipo_busqueda" type="">
									<option selected="">
										Seleccione
									</option>
									<option value="1">
										Pasiva
									</option>
									<option value="2">
										Activa
									</option>
								</select>
							</div>
						</div>
						<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
							<div class="modal-body">
								<label class="bmd-label-floating" for="especie_plasmodium">
									Especie Plasmodium
								</label>
								<select class="form-control" data-style="btn btn-success btn-round" id="especie_plasmodium" name="especie_plasmodium" type="">
									<option selected="">
										Seleccione
									</option>
									<option value="1">
										Plasmodium falciparum
									</option>
									<option value="2">
										Plasmodium vivax
									</option>
									<option value="Mixto">
										Mixto
									</option>
								</select>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
							<div class="modal-body">
								<label class="bmd-label-floating" for="codigo_notificacion">
									Código Notif.
								</label>
								<input class="form-control" id="codigo_notificacion" name="codigo_notificacion" type="text">
							</input>
						</div>
					</div>
					
					<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
						<div class="modal-body">
							<label class="bmd-label-floating" for="numero_lamina_pdrm">
								N° Lámina PDRM
							</label>
							<input class="form-control" id="numero_lamina_pdrm" name="numero_lamina_pdrm" type="text">

						</div>
					</div>
				</div>
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">
						Toma de Lámina o PDRM:
					</h5>
				</div>
				<div class="row">
					<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
						<div class="modal-body">
							<label class="label-control">
								Fecha Inicio Fiebre:
							</label>
							<input class="datepicker" id="fecha_inicio_fiebre" name="fecha_inicio_fiebre" type="text" value=""/>
						</div>
					</div>
					<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
						<div class="modal-body">
							<label class="label-control">
								Fecha Toma de Lámina:
							</label>
							<input class="datepicker" id="fecha_toma_lamina" name="fecha_toma_lamina" type="text" value=""/>
						</div>
					</div>
					<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
						<div class="modal-body">
							<label class="label-control" for="lugar">
								Lugar:
							</label>
							<input class="form-control has-success" id="lugar" name="lugar_toma_lamina" type="text">

						</div>
					</div>
				</div>
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">
						Origen Probable de Infección
					</h5>
				</div>


				<div class="row">
					<div class="modal-body">
						<div class="form-group label-floating has-success col-lg-8 col-sm-8 col-md-8">
							<label class="bmd-label-floating" for="direccion">
								Dirección
							</label>
							<input class="form-control" id="direccion" name="direccion" type="text">

						</div>
					</div>
				</div>
				<input name="guardarregistroprueba" type="hidden" value="si" />
				<input name="id" type="hidden" value="<?php echo $valor->id_paciente; ?>" />
				<div class="modal-footer">
					<button class="btn btn-secondary btn-sm" data-dismiss="modal" type="button">
						Cerrar
					</button>
					<button class="btn btn-success btn-sm" id="guardarprueba" type="submit" value="<?php echo $valor->id_paciente; ?>">
						Guardar
					</button>
				</div>
			</form>
		</div>
	</div>
	<a class="btn btn-danger btn-sm pull-right btn-round" href="<?php echo RUTA ?>/?accion=principal" role="button">
		Inicio
	</a>
</div>
<!--fin de modal prueba -->

<!-- Inicio Modal Recaida  -->
<div class="modal fade bd-recaida-modal-lg" id="recaidaModal<?php echo $valor->id_paciente; ?>" tabindex="-1" role="dialog" aria-labelledby="recaidaModal<?php echo $valor->id_paciente; ?>" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="recaidaModal">Nuevo Caso</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="" id="recaidapac" method="post" >
					<div class="row">
						<div class="form-group label-floating has-success col-lg-6 col-md-6 col-sm-6">
							<div class="modal-body">
								<label class="bmd-label-floating" for="especie_plasmodium">
									Clasificacion del caso
								</label>
								<select class="form-control" data-style="btn btn-success btn-round" id="clasif" name="clasif" type="">
									<option selected="">
										Seleccione
									</option>
									<option value="Autoctono">
										Autoctono
									</option>
									<option value="Importado">
										Importado
									</option>
									<option value="Introducido">
										Introducido
									</option>
									<option value="Inducido">
										Inducido
									</option>
									<option value="Criptico">
										Criptico
									</option>
								</select>
							</div>
						</div>
						<div class="form-group label-floating has-success col-lg-6 col-md-6 col-sm-6">
							<label class="bmd-label-floating" for="direccion">
								Episodio Anterior de Malaria
							</label>
							<input class="form-control" id="direccion" name="direccion" type="text">

						</div>
					</div>
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">
							Fechas de Caso Actual:
						</h5>
					</div>
					<div class="row">					
						<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
							<div class="modal-body">
								<label class="label-control">
									Fecha Toma de Lámina Caso Actual:
								</label>
								<input class="datepicker" id="fecha_toma_lamina" name="fecha_toma_lamina" type="text" value=""/>
							</div>
						</div>
						<div class="form-group label-floating has-success col-lg-4 col-md-4 col-sm-4">
							<div class="modal-body">
								<label class="label-control">
									Examen de Lámina Actual:
								</label>
								<input class="datepicker" id="fecha_toma_lamina" name="fecha_toma_lamina" type="text" value=""/>
							</div>
						</div>
					</div>
					<div class="row">
						
					</div>
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">
							Toma de Lámina Caso Actual:
						</h5>
					</div>
					<div class="row">
						<div class="form-group label-floating has-success col-lg-6 col-md-6 col-sm-6">
							<label class="bmd-label-floating" for="direccion">
								Lugar
							</label>
							<input class="form-control" id="direccion" name="direccion" type="text">

						</div>
						<div class=" col-lg-6 col-md-6 col-sm-6">
							<select class="form-control" type="select" id="estadomod" name="estado" data-style="btn btn-success btn-round">
								<option disabled selected>Estado</option>
								<?php foreach ($datose as $estado => $fila) {?>
									<?php if ($fila->id_estado == $muni->id_estado): ?>

										<option value="<?php echo $fila->id_estado ?>" selected="selected">
											<?php echo $fila->nombre ?></option>

										<?php endif?>
										<option value="<?php echo $fila->id_estado ?>">
											<?php echo $fila->nombre ?></option>
										<?php }?>
									</select>
								</div>
							</div>			

							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">
									Episodio Anterior:
								</h5>
							</div>
							<div class="row">
								<div class=" col-lg-4 col-md-4 col-sm-4">
									<select class="form-control" type="select" id="estadomod" name="estado" data-style="btn btn-success btn-round">
										<option disabled selected>Estado</option>
										<?php foreach ($datose as $estado => $fila) {?>
											<?php if ($fila->id_estado == $muni->id_estado): ?>

												<option value="<?php echo $fila->id_estado ?>" selected="selected">
													<?php echo $fila->nombre ?></option>

												<?php endif?>
												<option value="<?php echo $fila->id_estado ?>">
													<?php echo $fila->nombre ?></option>
												<?php }?>
											</select>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4">
											<select class="form-control" id="municipiomod" name="municipiomod" data-style="btn btn-success btn-round">
												<option disabled selected>Municipio</option>
												<?php foreach ($datosm as $municipio => $fila) {?>
													<?php if ($fila->id_municipio == $muni->municipio_id): ?>

														<option value="<?php echo $fila->id_municipio ?>" selected="selected"><?php echo $fila->nombre ?></option>
													<?php endif?>
													<option value="<?php echo $fila->id_municipio ?>"><?php echo $fila->nombre ?></option>
												<?php }?>
											</select>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4">
											<select class="form-control" id="parroquiamod" name="parroquiamod" data-style="btn btn-success btn-round">
												<option disabled selected>Parroquia</option>
												<?php foreach ($datosp as $parroquia => $fila) {?>
													<?php if ($fila->id_parroquia == $pac->id_parroquia): ?>


														<option value="<?php echo $fila->id_parroquia ?>" selected="selected"><?php echo $fila->nombre ?></option>


													<?php endif?>
													<option value="<?php echo $fila->id_parroquia ?>"><?php echo $fila->nombre ?></option>
												<?php }?>
											</select>

										</div>
										<div class="form-group label-floating has-success col-lg-6 col-md-6 col-sm-6">
											<label class="bmd-label-floating" for="toma_completa">
												Toma Completa de Tratamiento
											</label>											
											<input name="si" value="si" id="si" type="radio"/> Si
											<label for="si">Si</label>
											<input name="no" value="no" id="no" type="radio"/> No
											<label for="no">No</label>
										</div>
									</div>

								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>

				<!-- Fin Modal Recaida    -->

				
			<?php endforeach;?>



			<script type="text/javascript">
				$(document).ready(function() {

					var $input = $( '.datepicker' ).pickadate({

        selectMonths: true, // Creates a dropdown to control month
        selectYears: 120,
        //max: new Date(2003,12,31),
    //max: new Date(), //Muestra todas las fechas pasadas y futuras
    min: false, // new Date() deshabilita las fechas pasadas y solo muestra de la actual hasta hoy
    today: 'Hoy',
    clear: 'Limpiar',
    close: 'Seleccionar',
    format: 'yyyy-mm-dd',
    monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
    weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'MiÃ©rcoles', 'Jueves', 'Viernes', 'SÃ¡bado'],
    weekdaysShort: ['Dom', 'Lun', 'Mar', 'Miér', 'Jue', 'Vie', 'Sáb'],
    weekdaysLetter: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
    showMonthsShort: undefined,
    showWeekdaysFull: undefined,
    labelMonthNext: 'Mes siguiente',
    labelMonthPrev: 'Mes anterior',
    labelMonthSelect: 'Seleccione el mes',
    labelYearSelect: 'Seleccione el año',
    min: new Date(1910,1,1),
    max: new Date(2050,12,31)

});    


					$("#estado").on('change', function () {
						$("#estado option:selected").each(function () {

							elegido=$(this).val();

							$.get("?accion=municipio",
								{ elegido: elegido },
								function(data){
									console.log(data);

									$("#cbx_municipio").html(data);

								});
						});
					});


					$("#cbx_municipio").on('change', function () {
						/* Act on the event */

						$("#cbx_municipio option:selected").each(function () {

							elegido=$(this).val();
            //alert(elegido);
            $.get("?accion=parroquia",
            	{ elegido: elegido },
            	function(data){
            		console.log(data);

            		$("#cbx_parroquia").html(data);

            	});
        });
					});


					$("#estadomod").on('change', function () {
						$("#estadomod option:selected").each(function () {

							elegido=$(this).val();

							$.get("?accion=municipio",
								{ elegido: elegido },
								function(data){
									console.log(data);

                   $("#municipiomod").empty(); //limpiamos lo que hay
                   $("#parroquiamod").empty(); //limpiamos lo que hay

                   $("#municipiomod").html(data);

               });
						});
					});

					$("#municipiomod").on('change', function () {
						/* Act on the event */

						$("#municipiomod option:selected").each(function () {

							elegido=$(this).val();
            //alert(elegido);
            $.get("?accion=parroquia",
            	{ elegido: elegido },
            	function(data){
            		console.log(data);


            		$("#parroquiamod").html(data);

            	});
        });
					});

					$( "#recaidapac" ).on( "submit", function( event ) {

						event.preventDefault();
						id= $('#prueba').val();
						var dataString = $('#recaidapac').serialize();

						alert('Datos serializados: '+dataString);

						$.ajax({
							type: "POST",
							url: "",
							data: dataString,
							success: function(data) {

								alert("Recaida Paciente Registrada");
								$('.modal').remove();
								console.log(data);
             // window.location='?accion=consultarPaciente';
         }
     });
					});



				});
			</script>