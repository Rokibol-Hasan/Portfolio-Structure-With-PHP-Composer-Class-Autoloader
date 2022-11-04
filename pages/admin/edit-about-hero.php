<main class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="login-form shadow-lg my-5 p-5">
                    <h1 class="my-3 text-center">Edit Hero Content Of About Page</h1>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title" value="<?php echo $result['title']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" name="description" class="form-control" id="description" value="<?php echo $result['description']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="input-file" class="form-label">Password</label>
                            <input type="file" name="image" class="form-control" id="input-file" onchange="loadFile(event)" value="">
                            <img class="mt-2" src="<?php echo $result['image']; ?>" height="100px" width="100px" alt="img" id="output">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Save</button>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</main>
<script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>