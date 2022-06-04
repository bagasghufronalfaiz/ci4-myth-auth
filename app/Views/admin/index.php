<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Users List</h1>
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $user->username ?></td>
                        <td><?= $user->email ?></td>
                        <td><?= $user->name ?></td>
                        <td><a href="<?= base_url('admin/' . $user->userid); ?>" class="btn btn-info" />Detail</td>
                    </tr>
                    <?php endforeach ?>
                    
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- End of Page Content -->

<?= $this->endSection() ?>