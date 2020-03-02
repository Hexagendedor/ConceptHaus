<template>
  <div id="app">
    <div id="mute"></div>
    <div class="card">
          <div class="card-header">
              <h3 class="card-title">Calificaciones</h3>

              <div class="card-tools">
                  <button class="btn btn-success" data-toggle="modal" data-target="#addNew">Agregar Calificación <i class="fa fa-plus"></i></button>
              </div>
          </div>
          <div class="card-body table-responsive p-0">
                <table class="table table-hover text-capitalize">
                  <tbody>
                    <tr>
                        <th>ID</th>
                        <th>alumno</th>
                        <th>materia</th>
                        <th>calificacion</th>
                        <th>creacion</th>
                        <th>accion</th>
                  </tr> 

                  <tr v-for="caliter in calificaciones"
                      v-bind="caliter"
                      :key="caliter.id"
                      @update="update"
                      @delete="del">

                        <td>{{ caliter.id_t_calificaciones }}</td>
                        <td>{{ caliter.id_t_alumno }}</td>
                        <td>{{ caliter.id_t_materia }}</td>
                        <td>{{ caliter.calificacion}}</td>
                        <td>{{ caliter.created_at}}</td>
                        <td>
                            <button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </td>
                  </tr>
                </tbody></table>
              </div>
            
              <div class="card-footer">
                 
              </div>
    </div>
  
  </div>
</template>

<script>
     function CalificacionClass({ id_t_calificaciones, id_t_alumno, id_t_materia, calificacion, created_at}) {
        this.id_t_calificaciones = id_t_calificaciones;
        this.id_t_alumno = id_t_alumno;
        this.id_t_materia = id_t_materia;
        this.calificacion = calificacion;
        this.created_at = created_at;
    }

    //import CalificacionComponent from './CalificacionComponent.vue';

    export default {
        data() {
            return {
                calificaciones: [],
                mute: false
            }
        },
        methods: {
            async read() {
                this.mute = true;
                window.axios.get('/api/calificaciones').then(
                    response => {
                      response.data.forEach(cal => this.calificaciones.push(new CalificacionClass(cal)));
                    }
                );
                this.mute = false;
            },
            async create() {
                const { data } = window.axios.post('/api/calificaciones/create',{materia, alumno, valor});
                this.calificaciones.push(new CalificacionClass(data));
            },
            async update(id, valor) {
                this.mute = true;
                await window.axios.put(`/api/calificaciones/${id}`, { valor });
                // Once AJAX resolves we can update the calification with the new value
                this.calificaciones.find(cal => cal.id === id).calificacion = valor;
                this.mute = false;
            },
            async del(id) {
                await window.axios.delete(`/api/calificaciones/${id}`);
                let index = this.calificaciones.findIndex(cal => cal.id_t_calificaciones === id);
                this.calificaciones.splice(index, 1);
            }
        },
        components: {
            //CalificacionComponent
        },
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