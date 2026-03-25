<!-- Importing the layout file for this view -->
<?= $this->extend('components/layout') ?>

<!-- Initializing the content section, which will then be inside the layout file view. -->
<!-- All views must have this to use the layout view with header and footer. -->
<?= $this->section('content') ?>

    <h1>Form Validations</h1> 

    <?php if(isset($message)):  ?>
        <?= $message; ?>
    <?php endif; ?>

    <?= form_open(base_url('save-form')) ?>
        <table>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username" value="<?= set_value('username') ?>">

                    <span class="text-danger">
                        <?= displayError($validation ?? null, 'username') ?>
                    </span>

                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" value="<?= set_value('email') ?>">

                    <span class="text-danger">
                        <?= displayError($validation ?? null, 'email') ?>
                    </span>

                </td>
            </tr>
            <tr>
                <td>Mobile</td>
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
                    <input type="submit" name="save" value="save">
                </td>
            </tr>
        </table>
    <?= form_close() ?>

<?= $this->endSection() ?>