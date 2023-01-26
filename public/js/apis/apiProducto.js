function init(){
    //RUTA DE LA API QUE SE USARA 
    var apiProducto='http://127.0.0.1:8000/apiProductos'
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
    
        el:'#productos',
        data:{
            mensaje:'HOLA SOY FRANCISCO',
            productos:[],
            id:'',
            nombre:'',
            precio:null,
            cantidad:null,
            editando:false,
            producto:'',
            find:'',
    
        },
    
        created() {
            this.getProductos();
        },
    
        methods: {
            getProductos:function(){
                this.$http.get(apiProducto).then(function(json){
                    this.productos=json.data;
                }).catch(function(json){
                    console.log.json
                });
            },

            showModal:function(){
                $('#modalProducto').modal('show');
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
    