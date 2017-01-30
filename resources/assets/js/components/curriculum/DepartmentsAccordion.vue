<template>
    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Departaments</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="overlay" v-show="loading">
                <i class="fa fa-refresh fa-spin"></i>
            </div>
            <div class="box-group" id="accordion" v-show="!loading">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary" v-for="(department, index) in departments">
                    <div class="box-header with-border">
                        <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" :href="'#collapse' + index">
                                Departament: {{ department.name }}
                            </a>
                        </h4>
                    </div>
                    <div :id="'collapse' + index" class="panel-collapse collapse">
                        <div class="box-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus architecto autem blanditiis, consectetur ea enim, nam necessitatibus officia optio praesentium quae quod reiciendis sapiente, voluptate voluptatem voluptatibus! Inventore, optio?
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.box-body -->
    </div>
</template>
<style>
</style>
<script>

var API_URL = 'http://localhost:8080/api/v1/task'

export default{
    data(){
        return{
            departments: [
                {'name' : 'Departament informàtica'},
                {'name' : 'Departament Sanitat'},
                {'name' : 'Departament Mecànica'},
            ],
            loading: true
        }
    },
    created () {
        console.log('test')
        var that = this
        setTimeout(function () {
          that.fetchDepartments()
        }, 1000)
    },
    methods: {
        fetchDepartments: function () {
          // this.$http.defaults.headers.common['Authorization'] = 'Bearer ' + this.token

          this.$http.get(API_URL).then((response) => {
            this.loading = false

          }, (response) => {
            this.loading = false
            this.showConnectionError()
          })
        },
        showConnectionError: function() {
            toastr.options.positionClass = 'toast-bottom-full-width';
            toastr.error('Error connecting to api')
        }
    }
}
</script>
