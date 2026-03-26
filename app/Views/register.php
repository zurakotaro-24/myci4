<!-- Importing the layout file for this view -->
<?= $this->extend('components/layout') ?>

<!-- Initializing the content section, which will then be inside the layout file view. -->
<!-- All views must have this to use the layout view with header and footer. -->
<?= $this->section('content') ?>

    <h1>Register User</h1>

    <?= form_open(base_url('user/register')) ?>
        <table>
            <tr>
                <td>Username: </td>
                <td>
                    <input type="text" name="username" value="<?= set_value('username') ?>">
                    <span class="text-danger">
                        <?php if(session()->getFlashdata('duplicate')): ?>
                            <?= session()->getFlashdata('duplicate') ?>
                        <?php endif; ?>
                        <?= displayError($validation ?? null, 'username') ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Password: </td>
                <td>
                    <input type="password" name="password" value="<?= set_value('password') ?>">
                    <span class="text-danger">
                        <?= displayError($validation ?? null, 'password') ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Name: </td>
                <td>
                    <input type="text" name="name" value="<?= set_value('name') ?>">
                    <span class="text-danger">
                        <?= displayError($validation ?? null, 'name') ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Address: </td>
                <td>
                    <input type="text" name="address" value="<?= set_value('address') ?>">
                    <span class="text-danger">
                        <?= displayError($validation ?? null, 'address') ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Email: </td>
                <td>
                    <input type="text" name="email" value="<?= set_value('email') ?>">
                    <span class="text-danger">
                        <?= displayError($validation ?? null, 'email') ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Mobile Number: </td>
                <td>
                    <input type="text" name="mobile" value="<?= set_value('mobile') ?>">
                    <span class="text-danger">
                        <?= displayError($validation ?? null, 'mobile') ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="save" value="save">Register</button>
                </td>
            </tr>
        </table>
    <?= form_close() ?>

<?= $this->endSection() ?>