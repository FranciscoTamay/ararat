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
    
        el:'#categorias',
        data:{
            mensaje:'HOLA SOY FRANCISCO',
            categorias:[],
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
                this.editando=false,
                this.id='',
                this.nombre='',
                this.precio='',
                this.cantidad='',
                $('#modalProducto').modal('show');
                // cuando se egrague el select de los productos para seleccionar la categoria 
                // y el tipo del producto pongan la propiedad para que lo traiga vacio
            },

            addProducto:function(){
                //este es el json que se enviara al controllador
                var producto={id:this.id,nombre:this.nombre,precio:this.precio,cantidad:this.cantidad};
                this.$http.post(apiProducto,producto).then(function(json){
                    console.log('Inserccion Exitosa');
                    this.getProductos();
                }).catch(function(json){
                    console.log(json);
                });
                $('#modalProducto').modal('hide');
            },

            editProducto:function(id){
                this.editando=true;
                this.id=id;
                this.$http.get(apiProducto + '/' + id).then(function(json){
                    this.id=json.data.id;
                    this.nombre=json.data.nombre;
                    this.precio=json.data.precio;
                    this.cantidad=json.data.cantidad;
                   
                });
                $('#modalProducto').modal('show');
            },

            updateProducto:function(){
                var jsonProd={
                    id:this.id,
                    nombre:this.nombre,
                    precio:this.precio,
                    cantidad:this.cantidad,
                };
                this.$http.patch(apiProducto + '/' + this.id,jsonProd).then(function(json){
                    this.getProductos();
                });
                $('#modalProducto').modal('hide');
            },

            deleteProducto:function(id){
                var confirmacion=confirm('Esta seguro de quere eliminar el producto?');
                if(confirmacion){
                    this.$http.delete(apiProducto + '/' + id).then(function(json){
                        this.getProductos();
                    }).catch(function(json){
                        console.log('Se elimino con exito');
                    });
                }
                
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
    