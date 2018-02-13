<template>
    <div class="container">
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
    <h1>Gallery</h1>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-10">

            <dropzone id="myVueDropzone" url="https://httpbin.org/post" v-on:vdropzone-success="showSuccess">
                <!-- Optional parameters if any! -->
                <input type="hidden" name="token" value="xxx">
            </dropzone>

            <div class="gallery-box">
                <div class="img-box" v-for="image in datas">
                    <img :src="image.path" :alt="image.name" class="gallery-item">
                </div>
            </div>
        </div>
    </div>
</div>
</template>


<script>
    import Dropzone from 'vue2-dropzone-multiple'
    import axios from 'axios';

    export default {
        name: 'MainApp',
        components: {
            Dropzone
        },
        data() {
            return {
                datas : [],
                errors: []
            }
        },
        created() {
            axios.get('/images/show')
            .then(response => {
                this.datas = response.data.images
                console.log( this.datas )
            })
            .catch(e => {
                this.errors.push(e)
            })
        },
        methods: {
            'showSuccess': function (file) {
                console.log('A file was successfully uploaded')
            }
        }
    }
</script>


