<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Lista de tareas</h2>
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
               

            </div>
            <div class="col-md-6">
                <div class="form-group"><!-- Formulario para la creación o modificación de nuestras tareas-->
                    <label>Nombre</label>
                    <input v-model="name" type="text" class="form-control">

                    <label>Descripción</label>
                    <input v-model="description" type="text" class="form-control">

                    <label>Contenido</label>
                    <input v-model="content" type="text" class="form-control">
                </div> 
                  <div class="container-buttons">
                    <!-- Botón que añade los datos del formulario, solo se muestra si la variable update es igual a 0-->
                    <button v-if="update == 0" @click="saveTasks()" class="btn btn-success">Añadir</button>
                    <!-- Botón que modifica la tarea que anteriormente hemos seleccionado, solo se muestra si la variable update es diferente a 0-->
                    <button v-if="update != 0" @click="updateTasks()" class="btn btn-warning">Actualizar</button>
                    <!-- Botón que limpia el formulario y inicializa la variable a 0, solo se muestra si la variable update es diferente a 0-->
                    <button v-if="update != 0" @click="clearFields()" class="btn">Atrás</button>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                name:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                description:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                content:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                update:0, /*Esta variable contrarolará cuando es una nueva tarea o una modificación, si es 0 significará que no hemos seleccionado
                          ninguna tarea, pero si es diferente de 0 entonces tendrá el id de la tarea y no mostrará el boton guardar sino el modificar*/
                arrayTasks:[], //Este array contendrá las tareas de nuestra bd
            }
        },
        methods:{
            getTasks(){
                let me =this;
                let url = '/inicio' //Ruta que hemos creado para que nos devuelva todas las tareas
                axios.get(url).then(function (response) {
                    //creamos un array y guardamos el contenido que nos devuelve el response
                    me.arrayTasks = response.data;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            },
            saveTasks(){
                let me =this;
                let url = '/inicio/guardar' //Ruta que hemos creado para enviar una tarea y guardarla
                axios.post(url,{ //estas variables son las que enviaremos para que crear la tarea
                    'name':this.name,
                    'description':this.description,
                    'content':this.content,
                }).then(function (response) {
                    me.getTasks();//llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
                    me.clearFields();//Limpiamos los campos e inicializamos la variable update a 0
                })
                .catch(function (error) {
                    console.log(error);
                });   
                
            },
            updateTasks(){/*Esta funcion, es igual que la anterior, solo que tambien envia la variable update que contiene el id de la
                tarea que queremos modificar*/
                let me = this;
                axios.put('/inicio/actualizar',{
                    'id':this.update,
                    'name':this.name,
                    'description':this.description,
                    'content':this.content,
                }).then(function (response) {
                   me.getTasks();//llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
                   me.clearFields();//Limpiamos los campos e inicializamos la variable update a 0
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            loadFieldsUpdate(data){ //Esta función rellena los campos y la variable update, con la tarea que queremos modificar
                this.update = data.id
                let me =this;
                let url = '/inicio/buscar?id='+this.update;
                axios.get(url).then(function (response) {
                    me.name= response.data.name;
                    me.description= response.data.description;
                    me.content= response.data.content;
                    
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                }); 
            },
            deleteTask(data){//Esta nos abrirá un alert de javascript y si aceptamos borrará la tarea que hemos elegido
                let me =this;
                let task_id = data.id
                if (confirm('¿Seguro que deseas borrar esta tarea?')) {
                    axios.delete('/inicio/borrar/'+task_id
                    ).then(function (response) {
                        me.getTasks();
                    })
                    .catch(function (error) {
                        console.log(error);
                    }); 
                }
            },
            clearFields(){/*Limpia los campos e inicializa la variable update a 0*/
                this.name = "";
                this.description = "";
                this.content = "";
                this.update = 0;
            }
        },
        mounted() {
           this.getTasks();
        }
    }
</script>
