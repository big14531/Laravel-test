<template>
    <div class="container">
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
    <h1>Gallery</h1>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif -->

            <form action="images/create" method="post" class="dropzone" id="dropzone">
            </form>

            <div class="gallery-box">
                <!-- @foreach ( $images as $image )
                <div class="img-box">
                    <img src="/storage/{{ $image->path }}" alt="" class="gallery-item">
                </div>
                @endforeach -->
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


