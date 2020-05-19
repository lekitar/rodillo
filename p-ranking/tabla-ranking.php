
<div  class="container  page-ranking page">
	<div class="row">
		<div class="col-md-12">

			<div class="tab-content">
				<div role="tabpanel" id="general" class="table-responsive tab-pane active">
					<?php include('p-ranking/filter.php');?>
					<table id="table-rank" class="table table-hover cellheader" style="padding-top: 30px;">
						<thead>
							<tr>
								<th class="headcol" width="11%"> 
									Región 
								</th>
								<th width="11%"> 
									Continente 
								</th>
								<th> 
									Casos 
								</th>
								<th  width="7%"> 
									Muertes 
								</th>
								<th  width="7%"> 
								<span data-tippy-content="Muertes entre casos totales">	% de Muertes </span>
								</th>
								<th  width="8%"> 
								<span data-tippy-content="Hospitalizados totales">	Hosp. </span>
								</th>
								<th  width="8%"> 
									<span data-tippy-content="% de Hospitalizaciones"> % de Hosp. </span>
								</th>
								<th> 
									<span data-tippy-content="Recuperados"> Recup.  </span>
								</th>
								<th> 
									Pruebas
								</th>
								<th> 
									<span data-tippy-content="Porcentaje de pruebas positivas"> %Pos </span>
									
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="headcol"> <a href="#"> Afganistán</td>
								<td class="border-left-none">Asia</td>
								<td>4402</td>
								<td class="border-left-none">120</td>
								<td>0.00308258665806145</td>
								<td></td>
								<td>0</td>
								<td>502</td>
								<td>0</td>
								<td>Inf</td>
							</tr>
							<tr>
								<td class="headcol"> <a href="#"> Albania </a></td>
								<td class="border-left-none">Europa</td>
								<td>856</td>
								<td class="border-left-none">31</td>
								<td>0.0107721288193712</td>
								<td></td>
								<td>0</td>
								<td>627</td>
								<td>0</td>
								<td>Inf</td>
							</tr>
							<tr>
								<td class="headcol"> <a href="#"> Alemania </a></td>
								<td class="border-left-none">Europa</td>
								<td>171324</td>
								<td class="border-left-none">7549</td>
								<td>0.0901007975967519</td>
								<td></td>
								<td>0</td>
								<td>138330</td>
								<td>0</td>
								<td>Inf</td>
							</tr>
							<tr>
								<td class="headcol"> <a href="#"> Andorra </a></td>
								<td class="border-left-none">Europa</td>
								<td>754</td>
								<td class="border-left-none">48</td>
								<td>0.62123859444768</td>
								<td></td>
								<td>0</td>
								<td>545</td>
								<td>0</td>
								<td>Inf</td>
							</tr>
							<tr>
								<td class="headcol"> <a href="#"> Arabia Saudita </a></td>
								<td class="border-left-none">Asia</td>
								<td>39048</td>
								<td class="border-left-none">246</td>
								<td>0.00706614900710122</td>
								<td></td>
								<td>0</td>
								<td>11457</td>
								<td>43841</td>
								<td>0.890673114208161</td>
							</tr>
							<tr>
								<td class="headcol"> <a href="#"> Argelia </a></td>
								<td class="border-left-none">África</td>
								<td>5558</td>
								<td class="border-left-none">494</td>
								<td>0.0112654102374393</td>
								<td></td>
								<td>0</td>
								<td>2546</td>
								<td>0</td>
								<td>Inf</td>
							</tr>
							<tr>
								<td class="headcol"> <a href="#"> Argentina </a></td>
								<td class="border-left-none">Latinoamerica</td>
								<td>6021</td>
								<td class="border-left-none">305</td>
								<td>0.00672150192820056</td>
								<td></td>
								<td>0</td>
								<td>1744</td>
								<td>65668</td>
								<td>0.091688493634647</td>
							</tr>
							<tr>
								<td class="headcol"> <a href="#"> Armenia </a></td>
								<td class="border-left-none">Asia</td>
								<td>3175</td>
								<td class="border-left-none">44</td>
								<td>0.0148485966220118</td>
								<td></td>
								<td>0</td>
								<td>1267</td>
								<td>0</td>
								<td>Inf</td>
							</tr>
							<tr>
								<td class="headcol"> <a href="#"> Aruba </a></td>
								<td class="border-left-none">América del Sur</td>
								<td>101</td>
								<td class="border-left-none">3</td>
								<td>0.0280988329618043</td>
								<td></td>
								<td>0</td>
								<td>89</td>
								<td>0</td>
								<td>Inf</td>
							</tr>
							<tr>
								<td class="headcol"> <a href="#"> Australia </a></td>
								<td class="border-left-none">Europa</td>
								<td>6941</td>
								<td class="border-left-none">97</td>
								<td>0.00380393887281997</td>
								<td></td>
								<td>0</td>
								<td>6084</td>
								<td>498302</td>
								<td>0.0139293039160991</td>
							</tr>
							
						</tbody>
					</table>
				</div>
				<div role="tabpanel" id="aumento" class="table-responsive tab-pane ">
					<?php include('p-ranking/filter.php');?>
					<table id="table-aumento" class="table table-hover cellheader" style="padding-top: 30px;">
						<thead>
							<tr>
								<th> País  </th>
								<th>Región  </th>
								<th>Continente  </th>
								<th>Casos  </th>
								<th><span data-tippy-content="Fecha en la que se llegó a 100 casos acumulados">  Día Cero  </span></th>
								<th><span data-tippy-content="Nuevas muertes confirmadas en los últimos 7 días"> Muertes ult. 7 </span> </th>
								<th><span data-tippy-content="Promedio diario de nuevos casos en los ultimos 7 dias">Prom. casos ult. 7 </span>  </th>
								<th>Tendencia  </th>
								<th><span data-tippy-content="Promedio del % de Aumento diario de los últimos 7 días"> Prom. Aumento ult. 7 % </span> </th>
								<th> <span data-tippy-content="Promedio del % de Aumento diario de los últimos 3 días"> Prom. Aumento ult. 3 %  </span>   </th>
								<th>Velocidad </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								
								<td> <i class="glyphicon glyphicon-plus"> </i> Venezuela</td>
								<td>Latam</td>
								<td>Row 1 Data 2</td>
								<td>Row 1 Data 3</td>
								<td>Row 1 Data 4</td>
								<td>Row 1 Data 1</td>
								<td>Row 2 Data 2</td>
								<td>Row 2 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 4 Data 1</td>
								<td>Row 5 Data 2</td>
							</tr>
							<tr>
								
								<td>Row 1 Data 1</td>
								<td>Row 1 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 1 Data 3</td>
								<td>Row 1 Data 4</td>
								<td>Row 1 Data 1</td>
								<td>Row 2 Data 2</td>
								<td>Row 2 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 4 Data 1</td>
								<td>Row 5 Data 2</td>
							</tr>
							<tr>
								
								<td>Row 1 Data 1</td>
								<td>Row 1 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 1 Data 3</td>
								<td>Row 1 Data 4</td>
								<td>Row 1 Data 1</td>
								<td>Row 2 Data 2</td>
								<td>Row 2 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 4 Data 1</td>
								<td>Row 5 Data 2</td>
							</tr>
							<tr>
								
								<td>Row 1 Data 1</td>
								<td>Row 1 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 1 Data 3</td>
								<td>Row 1 Data 4</td>
								<td>Row 1 Data 1</td>
								<td>Row 2 Data 2</td>
								<td>Row 2 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 4 Data 1</td>
								<td>Row 5 Data 2</td>
							</tr>
							<tr>
								<td>Row 1 Data 1</td>
								<td>Row 1 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 15 Data 1</td>
								<td>Row 15 Data 2</td>
								<td>Row 132 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 1 Data 1</td>
								<td>Row 112 Data 2</td>
								<td>Row 13 Data 1</td>
								<td>Row 1 Data 2</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div role="tabpanel" id="movilidad" class="table-responsive tab-pane ">
					<?php include('p-ranking/filter.php');?>
					<table id="table-movilidad" class="table table-hover cellheader" style="padding-top: 30px;">
						<thead>
							<tr>
								<th> País  </th>
								<th> Región  </th>
								<th> Continente  </th>
								<th> Casos  </th>
								<th><span data-tippy-content="Cambio observado en movilidad desde el día cero"> Movilidad </span> </th>
								<th> <span data-tippy-content="Cambio observado en movilidad en los últimos 7 días"> Movilidad ult. 7  </span> </th>
								<th><span data-tippy-content="Fecha del primer día con una disminución de 40% o más"> 1er día sin Mov. </span></th>
								<th> <span data-tippy-content="Días con 40% o más de disminución en movilidad"> Días sin Mov. </span></th> 

							</tr>
						</thead>
						<tbody>
							<tr>
								
								
								
								<td>Row 1 Data 3</td>
								<td>Row 1 Data 4</td>
								<td>Row 1 Data 1</td>
								<td>Row 2 Data 2</td>
								<td>Row 2 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 4 Data 1</td>
								<td>Row 5 Data 2</td>
							</tr>
							<tr>
								
								
								
								<td>Row 1 Data 3</td>
								<td>Row 1 Data 4</td>
								<td>Row 1 Data 1</td>
								<td>Row 2 Data 2</td>
								<td>Row 2 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 4 Data 1</td>
								<td>Row 5 Data 2</td>
							</tr>
							<tr>
								
								
								
								<td>Row 1 Data 3</td>
								<td>Row 1 Data 4</td>
								<td>Row 1 Data 1</td>
								<td>Row 2 Data 2</td>
								<td>Row 2 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 4 Data 1</td>
								<td>Row 5 Data 2</td>
							</tr>
							<tr>
								
								
								<td>Row 15 Data 1</td>
								<td>Row 15 Data 2</td>
								<td>Row 132 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 1 Data 1</td>
								<td>Row 112 Data 2</td>
								<td>Row 13 Data 1</td>
								<td>Row 1 Data 2</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div role="tabpanel" id="habitantes" class="table-responsive tab-pane ">
					<?php include('p-ranking/filter.php');?>
					<table id="table-habitantes" class="table table-hover cellheader" style="padding-top: 30px;">
						<thead>
							<tr>
								<th> País </th>
								<th> Región  </th>
								<th> Continente  </th>
								<th> Casos  </th>
								<th> Población  </th>
								<th>  <span data-tippy-content="Casos totales por cada mil habitantes"> Casos / mil hab. </span>  </th>
								<th> <span data-tippy-content="Muertes totales por cada mil habitantes"> Muertes / mil hab. </span> </th>
								<th> <span data-tippy-content="Recuperados totales por cada mil habitantes"> Recup. / mil hab. </span> </th> 
								<th> <span data-tippy-content="Pruebas hechas en los últimos 7 días por cada mil habitantes"> Pruebas ult. 7 / mil hab.  </th>
								<th> <span data-tippy-content="Casos nuevos en los últimos 7 días por cada mil habitantes"> Casos ult. 7 / mil hab.</span> </th>
								<th> <span data-tippy-content="Muertes nuevas en los últimos 7 días por cada mil habitantes"> Muertes ult. 7 / mil hab.</span></th> 
							</tr>
						</thead>
						<tbody>
							<tr>
								
								
								<td>Row 1 Data 2</td>
								<td>Row 1 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 1 Data 3</td>
								<td>Row 1 Data 4</td>
								<td>Row 1 Data 1</td>
								<td>Row 2 Data 2</td>
								<td>Row 2 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 4 Data 1</td>
								<td>Row 5 Data 2</td>
							</tr>
							<tr>
								<td>Row 1 Data 1</td>
								<td>Row 1 Data 2</td>
								
								
								<td>Row 1 Data 2</td>
								<td>Row 1 Data 3</td>
								<td>Row 1 Data 4</td>
								<td>Row 1 Data 1</td>
								<td>Row 2 Data 2</td>
								<td>Row 2 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 4 Data 1</td>
								<td>Row 5 Data 2</td>
							</tr>
							<tr>
								<td>Row 1 Data 1</td>
								<td>Row 1 Data 2</td>
								
								<td>Row 1 Data 2</td>
								<td>Row 1 Data 3</td>
								<td>Row 1 Data 4</td>
								<td>Row 1 Data 1</td>
								<td>Row 2 Data 2</td>
								<td>Row 2 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 4 Data 1</td>
								<td>Row 5 Data 2</td>
							</tr>
							<tr>
								
								<td>Row 1 Data 2</td>
								<td>Row 1 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 15 Data 1</td>
								<td>Row 15 Data 2</td>
								<td>Row 132 Data 1</td>
								<td>Row 1 Data 2</td>
								<td>Row 1 Data 1</td>
								<td>Row 112 Data 2</td>
								<td>Row 13 Data 1</td>
								<td>Row 1 Data 2</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div>
</div>

