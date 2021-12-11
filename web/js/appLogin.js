const app = new Vue({
    el: "#app",
    data: {
      pass: "",
      passC: "",
      respuesta: "",
      boton: "btn blue",
      menu: false,
      estadoEti: false,
      etiquetaEstadoA: "Activo",
      etiquetaEstadoB: "Inactivo",
      inicio: false,
      usuario:1   
  
    },
    methods:{
  
      login(){
        console.log('Hola estoy en login');

        const form = document.getElementById('inicioSesion')
        axios.post('../../controlador/reservas/api/login/login.php', new FormData(form))
        .then( res =>{
            this.respuesta = res.data
            if (res.data == 'success') {        

                console.log('estoy regresando de login'+res.data)
                location.href = '../principal'

            }else if(res.data== 'fallo estado'){
                swal.fire('Usuario esta de baja', ""+res.data)

            }else if (res.data== 'fallo pass'){
                swal.fire('Usuario y/o contraseña incorrectos', ""+res.data)

            }else if(res.data== 'fallo usuario'){
                swal.fire('Usuario y/o contraseña incorrectos', ""+res.data)
            } else{
                swal.fire('Usuario y/o contraseña incorrectos', ""+res.data)
            }                               
        })
      }  
    }
  })
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });