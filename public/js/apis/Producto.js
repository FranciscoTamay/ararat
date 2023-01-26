function init(){
    //RUTA DE LA API QUE SE USARA 
    //verifica que sea el formato json
    var Producto='http://127.0.0.1:8000/apiTipo'
    // pueden usar las rutas relativas para que no hsya problema pero si estan usando
    // php artisan serv usen la misma total es como lo tengo enrutado pero como vean
    //INICIO DE VUE
    new Vue({
        // SE LE ASIGNA EL TOKEN
         http: {
            headers: {
               'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
            }
        },
    el:'#tipo_productos',

    data:{
        tipo_productos:[],
        id_tipoProductos:'',
        nombre:'',
        editando:false,

    },

    created() {
        this.getTipoProductos();
    },
    methods: {
        getTipoProductos:function(){
            this.$http.get(Producto).then(function(json){
                this.tipo_productos=json.data;
            }).catch(function(json){
                 console.log.json
            });
        },

        showModal:function(){
            this.editando=false,
            this.id_tipoProductos='',
            this.nombre='',
            $('#modaltipoProducto').modal('show');


        },
        
     },

        computed:{
            // filtroProd:function(){
            //     return this.productos.filter((producto)=>{
            //         return producto.nombre.toLowerCase().match(this.find.toLowerCase().trim())
            //     });
            // },
        }
    });
    //FIN DE VUE 
    
    } window.onload = init;