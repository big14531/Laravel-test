<template>
    <div class="container">
    <h1>Home</h1>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="disk-usage-box card card-default">
                <div class="card-header">Disk Usage</div>
                <div class="card-body">
                    <ul>
                        <li>Total size : {{ (total_size/(1024*1024)).toFixed(2) }}MB ( {{total_size.toFixed(2)}} B )</li>
                        <li>Number of files : {{ total_file }}</li>
                        
                    </ul>
                </div>
            </div>
            <div class="file-comp-box card card-default">
                <div class="card-header">File Usage Compositions</div>
                <div class="card-body">
                   
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>No. of file</th>
                                <th>Size</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in datas">
                                <td scope="row">{{ item['name'] }} </td>
                                <td>{{ item['count'] }} </td>
                                <td>{{ (item['size']/(1024*1024)).toFixed(2) }}MB ( {{item['size'].toFixed(2)}} B )</td> 
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    import axios from 'axios';

    export default {
    data() {
        return {
            total_file : 0,
            total_size : 0,
            datas : [],
            errors: []
        }
    },

  created() {
    axios.get('/home/show')
    .then(response => {
      this.total_file = response.data.total_file
      this.total_size = response.data.total_size
      this.datas = response.data.file_type
    })
    .catch(e => {
      this.errors.push(e)
    })
  
  }
}
</script>
