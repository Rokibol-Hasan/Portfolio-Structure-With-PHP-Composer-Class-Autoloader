<main class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="about-hero-content shadow-lg my-5 p-5">
                    <h3 class="text-center mb-3"> About page hero content list </h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $x = 1;
                            // if ($getData) {
                            //     while ($result = $getData->fetch_assoc()) { 

                            foreach ($getData as $result) { ?>
                                <tr>
                                    <th scope="row"><?php echo $x++; ?></th>
                                    <td><?php echo $result['title']; ?></td>
                                    <td><?php echo $result['description']; ?></td>
                                    <td><img src="<?php echo $result['image']; ?>" alt="img" height="100px" width="100px"></td>
                                    <td>
                                        <a href="?edit=<?php echo $result['id']; ?>" class="btn btn-primary">Update</a>
                                        <a href="?del=<?php echo $result['id']; ?>" class="btn btn-primary">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</main>