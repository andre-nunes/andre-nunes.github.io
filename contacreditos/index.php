<?php session_start(); ?>
<html>
 <!-- aaaaww look at you, reading source code and everything... -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Conta Créditos</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/functions.js" type="text/javascript"></script>
	</head>
	<body>
		
		<!-- hardcoded :( -->

		<div class="accordion" id="accordion2">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne" onClick="cleanOtherHalfyear()">
						<h2>1º Semestre</h2>
					</a>
				</div>
				<div id="collapseOne" class="accordion-body collapse in">
					<div class="accordion-inner">
						<div class="row-fluid">
							<div class="span4">
								<h3>1º Ano</h3>
								<table id="1" class="table table-hover">
									<thead>
										<th>Disciplina</th>
										<th>Créditos</th>
										<th><input type="checkbox" name="choice" value="0" onchange="checkAll('#1 input')"/></th>
									</thead>
									<tbody>
										<tr>
											<td title="Álgebra Linear">AL</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Cálculo Diferencial e Integral 1">CDI-I</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Fundamentos da Programação">FP</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Sistemas Digitais">SD</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Teoria da Computação">TC</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="span4">
								<h3>2º Ano</h3>
								<table id="2" class="table table-hover">
									<thead>
										<th>Disciplina</th>
										<th>Créditos</th>
										<th><input type="checkbox" name="choice" value="0" onchange="checkAll('#2 input')"/></th>
									</thead>
									<tbody>
										<tr>
											<td title="Análise Complexa e Equações Diferenciais">ACED</td><td>7.5</td><td><input type="checkbox" name="choice" value="7.5" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Cálculo Diferencial e Integral 1">CDI-I</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Cálculo Diferencial e Integral 2">CDI-II</td><td>7.5</td><td><input type="checkbox" name="choice" value="7.5" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Electromagnetismo e Óptica">EO</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Gestão">Ges</td><td>4.5</td><td><input type="checkbox" name="choice" value="4.5" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Programação com Objectos">PO</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Sistemas Operativos">SO</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="span4">
								<h3>3º Ano</h3>
								<table id="3" class="table table-hover">
									<thead>
										<th>Disciplina</th>
										<th>Créditos</th>
										<th><input type="checkbox" name="choice" value="0" onchange="checkAll('#3 input')"/></th>
									</thead>
									<tbody>
										<tr>
											<td title="Bases de Dados">BD</td><td>7.5</td><td><input type="checkbox" name="choice" value="7.5" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Inteligência Artificial">IA</td><td>7.5</td><td><input type="checkbox" name="choice" value="7.5" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Interfaces Pessoa Máquina">IPM</td><td>7.5</td><td><input type="checkbox" name="choice" value="7.5" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Portefólio Pessoal 1">PP-I</td><td>1.5</td><td><input type="checkbox" name="choice" value="1.5" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Probabilidade e Estatística">PE</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Redes de Computadores">RC</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo" onClick="cleanOtherHalfyear()">
						<h2>2º Semestre</h2>
					</a>
				</div>
				<div id="collapseTwo" class="accordion-body collapse">
					<div class="accordion-inner">
						<div class="row-fluid">
							<div class="span4">
								<h3>1º Ano</h3>
								<table id="4" class="table table-hover">
									<thead>
										<th>Disciplina</th>
										<th>Créditos</th>
										<th><input type="checkbox" name="choice" value="0" onchange="checkAll('#4 input')"/></th>
									</thead>
									<tbody>
										<tr>
											<td title="Álgebra Linear">AL</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>

										<tr>
											<td title="Arquitectura de Computadores">AC</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Cálculo Diferencial e Integral 1">CDI-I</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Cálculo Diferencial e Integral 2">CDI-II</td><td>7.5</td><td><input type="checkbox" name="choice" value="7.5" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Fundamentos da Programação">FP</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Introdução a Algoritmos e Estruturas de Dados">IAED</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Matemática Discreta">MD</td><td>4.5</td><td><input type="checkbox" name="choice" value="4.5" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Mecânica e Ondas">MO</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="span4">
								<h3>2º Ano</h3>
								<table id="5" class="table table-hover">
									<thead>
										<th>Disciplina</th>
										<th>Créditos</th>
									<th><input type="checkbox" name="choice" value="0" onchange="checkAll('#5 input')"/></th>
									</thead>
									<tbody>
										<tr>
											<td title="Análise Complexa e Equações Diferenciais">ACED</td><td>7.5</td><td><input type="checkbox" name="choice" value="7.5" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Compiladores">Comp</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Computação Gráfica">CG</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Lógica para Programação">LP</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Probabilidade e Estatística">PE</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Sistemas e Sinais">SS</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="span4">
								<h3>3º Ano</h3>
								<table id="6" class="table table-hover">
									<thead>
										<th>Disciplina</th>
										<th>Créditos</th>
									<th><input type="checkbox" name="choice" value="0" onchange="checkAll('#6 input')"/></th>
									</thead>
									<tbody>
										<tr>
											<td title="Análise e Sintese de Algoritmos">ASA</td><td>7.5</td><td><input type="checkbox" name="choice" value="7.5" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Engenharia de Software">ES</td><td>7.5</td><td><input type="checkbox" name="choice" value="7.5" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Modelação">Mod</td><td>6</td><td><input type="checkbox" name="choice" value="6" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Portefólio Pesssoal 2">PP-II</td><td>1.5</td><td><input type="checkbox" name="choice" value="1.5" onchange="checkTotal()"/></td>
										</tr>
										<tr>
											<td title="Sistemas Distribuídos">SD</td><td>7.5</td><td><input type="checkbox" name="choice" value="7.5" onchange="checkTotal()"/></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="box span4 offset5">
			<h3>Total de créditos:&nbsp;&nbsp;&nbsp;&nbsp;<b class="sum text-success">0</b></h3>
			<p>(Limite: 40.5)</p>
		</div>

		
	</body>
</html>