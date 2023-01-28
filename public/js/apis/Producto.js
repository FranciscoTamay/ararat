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
        id_tipoProducto:'',
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
            this.id_tipoProducto='',
            this.nombre='',
            $('#modaltipoProducto').modal('show');


        },

        addProducto:function(){
            //este es el json que se enviara al controllador
            var tipo={id_tipoProducto:this.id_tipoProducto,nombre:this.nombre};
            this.$http.post(Producto,tipo).then(function(json){
                console.log('Inserccion Exitosa');
                this.getTipoProductos();
            }).catch(function(json){
                console.log(json);
            });
            $('#modaltipoProducto').modal('hide');
        },

        editProducto:function(id){
            this.editando=true;
            this.id_tipoProducto=id;
            this.$http.get(Producto + '/' + id).then(function(json){
                this.id_tipoProducto=json.data.id_tipoProducto;
                this.nombre=json.data.nombre;
            });
            $('#modaltipoProducto').modal('show');
        },

        updateProducto:function(){
            var jsonTipo={
                id_tipoProducto:this.id_tipoProducto,
                nombre:this.nombre,
            };
            this.$http.patch(Producto + '/' + this.id_tipoProducto,jsonTipo).then(function(json){
                this.getTipoProductos();
            });
            $('#modaltipoProducto').modal('hide');
        },

        deleteProducto:function(id){
            var confirmacion=confirm('Esta seguro de quere eliminar la categoria?');
            if(confirmacion){
                this.$http.delete(Producto + '/' + id).then(function(json){
                    this.getTipoProductos();
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