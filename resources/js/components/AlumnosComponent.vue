<template>
  <div id="app">
    
    <div class="card">
          <div class="card-header">
              <h3 class="card-title">Alumnos</h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-capitalize">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>nombre</th>
                            <th>a. paterno</th>
                            <th>a. materno</th>
                            <th>activo</th>
                            <th>accion</th>
                        </tr> 
                    </thead>
                    <paginate name="alumnos" :list="alumnos" :tag="'tbody'" :per="5">
                        <tr v-for="alumno in paginated('alumnos')"
                            v-bind="alumno"
                            :key="alumno.id_t_alumno">
                            <td>{{ alumno.id_t_alumno }}</td>
                            <td>{{ alumno.nombre }}</td>
                            <td>{{ alumno.ap_paterno }}</td>
                            <td>{{ alumno.ap_materno }}</td>
                            <td>{{ alumno.activo ? "si":"no" }}</td>
                            <td>
                                <button class="btn btn-primary">Ver calificaciones <i class="fa fa-eye"></i></button>
                                <button class="btn btn-success">Agregar Calificacion <i class="fa fa-plus"></i></button>
                            </td>
                        </tr>
                    </paginate>
                </table>
            </div>
            
            <div class="card-footer">
                <paginate-links for="alumnos" :classes="{'ul': 'pagination', 'li': 'page-item', 'a': 'page-link'}" :async="true" show-step-links></paginate-links>
                <router-link to="/alumnos">Go to Home</router-link>
                <router-link to="/calificaciones">Go to cals</router-link>
            </div>
    </div>
  
  </div>
</template>

<script>
     function AlumnoClass({ id_t_alumno, nombre, ap_paterno, ap_materno, activo}) {
        this.id_t_alumno = id_t_alumno;
        this.nombre = nombre;
        this.ap_paterno = ap_paterno;
        this.ap_materno = ap_materno;
        this.activo = activo;
    }

    export default {
        data() {
            return {
                apiBase:'/api/alumnos/',
                paginate: ['alumnos'],
                alumnos: [],
                mute: false
            }
        },
        methods: {
            async read() {
                this.mute = true;
                window.axios.get(this.apiBase).then(
                    response => {
                        response.data.forEach(objData => this.alumnos.push(new AlumnoClass(objData)));
                    }
                );
                this.mute = false;
            },
        },
        components: {},
        created() {
          this.read();
        },
        watch: {
            mute(val) {
                document.getElementById('mute').className = val ? "on" : "";
            }
        }
    }

</script>
<style>
    #app {
        margin: 1em;
    }
    .heading h1 {
        margin-bottom: 0;
    }
</style>