<main class="wrapper">
    <section class="test-data">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="test-data-inner">
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>PHONE</th>
                            </tr>
                            <?php
                            $students = $header->totalStudent();
                            foreach ($students as $student) { ?>
                                <tr>
                                    <th><?php echo $student['id'] ?></th>
                                    <th><?php echo $student['name'] ?></th>
                                    <th><?php echo $student['email'] ?></th>
                                    <th><?php echo $student['phone'] ?></th>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
</main>