

    </div>
  </div>
</main>
  <!-- MDB core JavaScript-->
  <script type="text/javascript" src="../css/MDB-Free_4/js/mdb.min.js"></script>
  
  <!-- jQuery -->
  <script type="text/javascript" src="../css/MDB-Free_4/js/jquery.min.js"></script>
   <!-- Bootstrap tooltips -->
   <!-- <script type="text/javascript" src="../css/MDB-Free_4/js/popper.min.js"></script> -->
  <!-- Bootstrap core JavaScript -->
  <!-- <script type="text/javascript" src="../css/MDB-Free_4/js/bootstrap.min.js"></script> -->

  
   <!-- Bootstrap core JavaScript-->
   <!-- <script type="text/javascript" src="../login/vendor/bootstrap/js/popper.min.js"></script>
  <script type="text/javascript" src="../login/vendor/bootstrap/js/bootstrap.min.js"></script> -->
  <!-- <script type="text/javascript" src="../login/vendor/bootstrap/js/tooltip.js"></script> -->

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  
  <!-- Your custom scripts (optional) -->

    <script src="../js/app.js"></script>
    
 <!-- del menucompleto2 -->
 <script src="https://loremframework.altervista.org/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script>
M.AutoInit();
</script>

<script language="JavaScript">
//variabile dove memorizzare il tempo di pausa in millisecondi
var attesa = 200;
// singolo carattere del messaggio
var cchar ="";
//stringa da visualizzare
var visibile="";
var i=-1;
var messaggio='Unify The Web!';
function vai() {
	if (i < messaggio.length) {
         	i++
		cchar = messaggio.substr(i, 1);
        	visibile = visibile + cchar;
        	 setTimeout("vai()", attesa);
        	if(document.all.testo) document.all.testo.innerHTML = visibile;
        }	
	else {
		return false
	}	
}
</script>

  
</body>
</html>

