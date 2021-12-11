const app = new Vue({
    el:'#app',
    data:{
        pass: "",
        passC: "",
        selectedRol:'',
        estadoEti: false,
        usuario:1,
        listarUsu:[],
        listarAgentes:[],
        rol:"",
        nombre:"",

        idModifi:'',
        checked:false,
        nombreModifi:'',
        rolModifi:'',

        tipo:'',
        listaDestinos:[],
        codigoAgente:'',

        etiquetaEstadoA: "Activo",
        etiquetaEstadoB: "Inactivo"

      },
    created(){
      this.carga_usuario()
      this.getUsuarios()
      this.getConsolidado()
    },
    computed:{

      datosFiltradosAgentes(){
        return this.listarAgentes.filter((filtro)=>{
                return filtro.match(this.codigoAgente) 
        });
      }, 
    },
      methods:{
        getUsuarios(){         
          axios.get('http://localhost/leoexport/controlador/reservas/api/getUsuarios.php')
          .then(res =>{                    
              this.listarUsu = res.data
            
          })
        },

        getConsolidado(){         
          axios.get('http://localhost/leoexport/controlador/reservas/api/getConsolidado.php')
          .then(res =>{                    
              this.listaDestinos = res.data
            
          })
        },


        carga_usuario(){
          this.asigna_rol_usuario();
          this.asigna_nombre_usuario();
        },

        registro(){

                if (this.pass == this.passC ) {
            
                        const form = document.getElementById("formRegistroUsuario")
                        axios
                        .post("../../controlador/reservas/api/crud/registrar_usuario.php", new FormData(form))
                        .then((res) => {
                            this.respuesta = res.data
                            swal.fire("Registrado", "Se registro con éxito"+this.respuesta.trim() , "success");
                        })
                } else {
                    swal.fire("los passwords no son iguales", "", "fail");
                }  
        },
        asigna_rol_usuario(){
          axios.get('http://localhost/leoexport/controlador/reservas/api/getRol.php')
          .then(res =>{                    
            this.rol = res.data             

            console.log('rol de usuario es:'+this.rol);
          })
        },
        asigna_nombre_usuario(){
          axios.get('http://localhost/leoexport/controlador/reservas/api/getNombre.php')
          .then(res =>{                    
            this.nombre = res.data             

            console.log('nombre de usuario es:'+this.nombre);
          })
        },
        eliminarUsuario(id){
          swal.fire({
            title:'Seguro que deseas eliminar el usuario',
            text:'Al eliminarlo no podras recuperarlo',
            icon:'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, bórralo!'
        })
        .then((aceptar)=>{
            if (aceptar.value) {
                axios.get('http://localhost/leoexport/controlador/reservas/api/crud/eliminar_usuario.php?id=' + id )
                .then((res) =>{
                 if (res.data.trim() == 'success') {
                     swal.fire('Eliminado', '', 'success')
                     location.href = '../principal/listar_usuarios.php'
                  
                 }else{
                    swal.fire('Falló','Tramo no eliminado', 'fail')
                 }
                })
            }else{
                return false
            }
          })
        },
        modificarUsuario(idP){
          this.idModifi=idP;
          console.log('id de usuario a modificar:'+this.idModifi);

          this.dameUsuario();
          console.log('usuario a modifica:'+this.nombreModifi);

        },

        dameUsuario(){
          // $usuario= this.listarUsu.filter((filtro)=>{
          //   return filtro.id.match(this.idModifi)});
 
           $usuario = this.listarUsu.find((Usuario)=>{
               return Usuario.id == this.idModifi;
               });

               this.nombreModifi= $usuario.nombre;
               this.rolModifi= $usuario.rol;
               this.checked= $usuario.estado== "activo" ? true : false ; 

        }     
    }
})

  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });

  $(document).ready(function () {
    $('#dtHorizontalVerticalExample').DataTable({
    "scrollX": true,
    "scrollY": 200,
    });
    $('.dataTables_length').addClass('bs-select');
    });