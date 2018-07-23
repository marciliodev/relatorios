$(document).ready(function(){

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
});

    // Função para gerar gif de loading na busca dos resltados dos relatorios
    $(function(){
        
        var twoToneButton = document.querySelector('.twoToneButton');
        
            twoToneButton.addEventListener("click", function() {
            twoToneButton.innerHTML = "Buscando... <img src=\"./assets/img/load.gif\" height=\"17\" width=\"17\"/> ";
            twoToneButton.classList.add('spinning');
            
        setTimeout( 
                function  (){  
                    twoToneButton.classList.remove('spinning');
                    twoToneButton.innerHTML = "<img src=\"./assets/img/magnifier.png\" height=\"17\" width=\"17\"/> Buscar";
                    
                }, 1000);
        }, false);
        
    });

    //Mascara os inputs de datas
    function mascaraData( input, e )
    {
        var kC = (document.all) ? event.keyCode : e.keyCode;
        var data = input.value;
        
        if( kC!=8 && kC!=46 )
        {
            if( data.length==2 )
            {
                input.value = data += '/';
            }
            else if( data.length==5 )
            {
                input.value = data += '/';
            }
            else
                input.value = data;
        }
    }

    //Chamar menu de relatórios
    function dropdownMenu() {
    
        document.getElementById("myDropdown").classList.toggle("show");
        openedWindow.close();
    }

    //Filtrar relatórios na busca de acordo com a digitação
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