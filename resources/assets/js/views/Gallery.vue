<template>
    <div class="container">
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
    <h1>Gallery</h1>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="images/create" method="post" class="dropzone" id="dropzone">
            </form>

            <div class="gallery-box">
            </div>
        </div>
    </div>
</div>


</template>


<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>


