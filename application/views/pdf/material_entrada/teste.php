<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>jQuery UI Datapicker pt-br exemplo</title>
        <link rel="stylesheet" href="<?=('assets/css/jquery-ui-1.8.20.custom.css') ?>">
        <link rel="stylesheet" href="<?=('assets/js/jquery-1.7.2.min.js') ?>">
        <link rel="stylesheet" href="<?=('assets/js/jquery-1.7.2.min.js') ?>">
		<script type="text/javascript">
			$(document).ready(function(){
				 	$(".data").datepicker({
						dateFormat: 'dd/mm/yy',
						dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
						dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
						dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
						monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
						monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
						nextText: 'Próximo',
						prevText: 'Anterior'
					});
			});
		</script>
		
	</head>
	<body>
		<input type="text" class="data" />

	</body>
</html>