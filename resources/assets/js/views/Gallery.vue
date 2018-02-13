<template>
    <div class="container">
    <h1>Gallery</h1>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-10">

            <!-- Dropzone -->
            <vue-dropzone ref="myVueDropzone" id="dropzone" name="file" :options="dropzoneOptions">
                <input type="hidden" name="_token" :value="csrf_token">
            </vue-dropzone>

            <!-- Emergency Upload -->
            <form action="images/create" method="post" enctype="multipart/form-data">
                <input type="file" name="file" id="file">
                <input type="submit" value="Upload Image" name="submit">
                <input type="hidden" name="_token" :value="csrf_token">
            </form>

            <!-- Gallery  -->
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
    // Import Dependency
    import vue2Dropzone from 'vue2-dropzone'
    import 'vue2-dropzone/dist/vue2Dropzone.css'
    import axios from 'axios';

    export default {
        name: 'MainApp',
        components: {
            vueDropzone: vue2Dropzone
        },
        data() {
            return {
                datas : [],
                errors: [],
                csrf_token : $('meta[name="csrf-token"]').attr('content'),
                dropzoneOptions: {
                    method : 'POST',
                    url: 'images/create',
                    thumbnailWidth: 150,
                    maxFilesize: 2,
                    addRemoveLinks: true,
                    headers: {
                        'X-CSRFToken': $('meta[name="csrf-token"]').attr('content')
                    }
                }
            }
        },
        // Ajax Request for show all image
        created() {
            axios.get('/images/show')
            .then(response => {
                this.datas = response.data.images
            })
            .catch(e => {
                this.errors.push(e)
            })
        }
    }
</script>


