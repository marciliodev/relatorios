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

    $("a").click(function(){
        
        var escritorio = "http://localhost/codempdf/index.php/pdf_escritorio";
        var almoxarifado = "http://localhost/codempdf/index.php/pdf_almoxarifado";
        var servico_vascular = "http://localhost/codempdf/index.php/pdf_servico_vascular";
        var entrada = "http://localhost/codempdf/index.php/pdf_entrada";
        
        var url  = window.location.href; 
        var absoluto = url.split("/")[url.split("/").length -1];
        //console.log(absoluto);

        if (absoluto == "index.php?p=material_escritorio") {
            
            $("#btnImp").attr("href", escritorio);
        }
        
        if (absoluto == "index.php?p=material_almoxarifado") {

             $("#btnImp").attr("href", almoxarifado);
        }
        
        if (absoluto == "index.php?p=material_servico_vascular") {

            $("#btnImp").attr("href", servico_vascular);
        }
        
        if (absoluto == "index.php?p=material_entrada") {

            $("#btnImp").attr("href", entrada);
        } 
        
        if (absoluto == "http://localhost/codempdf/") {

            $("#btnImp").attr("href", "#");
        }

        if (absoluto == "http://localhost/codempdf/index.php/") {

            $("#btnImp").attr("href", "#");
        }
    });

    $('#consulta').click(function() {
        //colocar os dados das datas iniciais e finais e converter
        //para algum dado válido que pode ser usado na construćão do sql.

    });

});

    function dropdownMenu() {
    
        document.getElementById("myDropdown").classList.toggle("show");
    }

    function filterFunction() {
    
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }