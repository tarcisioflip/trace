<!-- ========== PUXANDO PACOTES JAVA SCRIPT ========== -->

      <!-- DEPENDENCIAS JQUERY -->
      <script type="text/javascript" src="materialize/js/jquery-3.3.1.min.js"></script>
      <!-- DEPENDENCIAS MATERIALIZE -->
      <script type="text/javascript" src="materialize/js/materialize.js"></script>
      

<!-- ========== INICIALIZACOES JQUERY ========== -->
      <script type="text/javascript">        
        $(document).ready(function(){


/*====== CAMPOS SELECT ========*/
             document.addEventListener('DOMContentLoaded', function() {
              var elems = document.querySelectorAll('select');
              var instances = M.FormSelect.init(elems, options);
            });

            // Or with jQuery

            $(document).ready(function(){
              $('select').formSelect();
            });


/*====== CAMPOS DATA ========*/  

              var diaSemana = [ 'Domingo', 'Segunda-Feira', 'Terca-Feira', 'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira', 'Sabado' ];
                var mesAno = [ 'Janeiro', 'Fevereiro', 'Marco', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro'           , 'Dezembro' ];
                var data = new Date();
                var hoje = diaSemana[data.getDay()] + ', ' + mesAno[data.getMonth()] + ' de ' + data.getFullYear();
                $("#dataPesquisa").attr("value", hoje);
                $(".datepicker").pickadate({
                  monthsFull: mesAno,
                  monthsShort: [ 'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez' ],
                  weekdaysFull: diaSemana,
                  weekdaysShort: [ 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab' ],
                  weekdaysLetter: [ 'D', 'S', 'T', 'Q', 'Q', 'S', 'S' ],
                  selectMonths: true,
                  selectYears: true,
                  clear: false,
                  format: 'dddd/mm/yyyy',
                  today: "Hoje",
                  close: "X",
                  min: new Date(data.getFullYear() - 1, 0, 1),
                  max: new Date(data.getFullYear() + 1, 11, 31),
                  closeOnSelect: true
                });

                $("#dataPesquisa").click(function (event) {
                    event.stopPropagation();
                    $(".datepicker").first().pickadate("picker").open();
                });



/*====== CAMPO HORA/TEMPO ========*/  

              //Time Picker:
              document.addEventListener('DOMContentLoaded', function() {
              var elems = document.querySelectorAll('.timepicker');
              var instances = M.Timepicker.init(elems, options);
            });

            // Or with jQuery

            $(document).ready(function(){
              $('.timepicker').timepicker();
            });

/*====== BOTAO MULTIPLO APAGAR/EDITAR ========*/  
          
      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(elems, {
        direction: 'left',
        hoverEnabled: false
        });
      });
      

/*===== CAMPO ADD=====*/

      //https://api.jquery.com/click/
            $("#add-campo").click(function () {
        //https://api.jquery.com/append/
                $("#add_aluno").append('<p>Teste</p>');
            });

/*====== CONTATOR DE DIGITOS ========*/ 
 $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });

      
          
        });
      </script>

<script>
 	 M.AutoInit();
</script>
      
       

  </html>