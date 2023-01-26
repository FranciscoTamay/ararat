function init(){
    //RUTA DE LA API QUE SE USARA 
    var apiCategoria='http://127.0.0.1:8000/apiCategoria'
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
            id_categoria:'',
            nombre:'',
            editando:false,
            producto:'',
            find:'',
    
        },
    
        created() {
            this.getCategorias();
        },
    
        methods: {
            getCategorias:function(){
                this.$http.get(apiCategoria).then(function(json){
                    this.categorias=json.data;
                }).catch(function(json){
                    console.log.json
                });
            },

            showModal:function(){
                this.editando=false,
                this.id_categoria='',
                this.nombre='',
                $('#modalProducto').modal('show');
                // cuando se egrague el select de los productos para seleccionar la categoria 
                // y el tipo del producto pongan la propiedad para que lo traiga vacio
            },

            addProducto:function(){
                //este es el json que se enviara al controllador
                var categoria={id_categoria:this.id_categoria,nombre:this.nombre};
                this.$http.post(apiCategoria,categoria).then(function(json){
                    console.log('Inserccion Exitosa');
                    this.getCategorias();
                }).catch(function(json){
                    console.log(json);
                });
                $('#modalProducto').modal('hide');
            },

            editProducto:function(id){
                this.editando=true;
                this.id_categoria=id;
                this.$http.get(apiCategoria + '/' + id).then(function(json){
                    this.id_categoria=json.data.id_categoria;
                    this.nombre=json.data.nombre;
                });
                $('#modalProducto').modal('show');
            },

            updateProducto:function(){
                var jsonCate={
                    id_categoria:this.id_categoria,
                    nombre:this.nombre,
                };
                this.$http.patch(apiCategoria + '/' + this.id_categoria,jsonCate).then(function(json){
                    this.getCategorias();
                });
                $('#modalProducto').modal('hide');
            },

            deleteProducto:function(id){
                var confirmacion=confirm('Esta seguro de quere eliminar la categoria?');
                if(confirmacion){
                    this.$http.delete(apiCategoria + '/' + id).then(function(json){
                        this.getCategorias();
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
    