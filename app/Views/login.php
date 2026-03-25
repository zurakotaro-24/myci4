<!-- Importing the layout file for this view -->
<?= $this->extend('components/layout') ?>

<!-- Initializing the content section, which will then be inside the layout file view. -->
<!-- All views must have this to use the layout view with header and footer. -->
<?= $this->section('content') ?>

    <h1>Login User</h1>
    
    <?php if(isset($error)): ?>
        <span class="text-danger">
            <?= $error; ?>
        </span>
    <?php endif; ?>

    <?= form_open(base_url('user/login')) ?>
        <table>
            <tr>
                <td>Username: </td>
                <td>
                    <input type="text" name="username" value="<?= set_value('username') ?>">
                    <span class="text-danger">
                        <?= displayError($validation ?? null, 'username') ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password" value="<?= set_value('password') ?>">
                    <span class="text-danger">
                        <?= displayError($validation ?? null, 'password') ?>
                    </span>
                </td>
            </tr>
        </table>
        <button type="submit">Login</button>
    <?= form_close() ?>

    <a href="<?= base_url('user/register') ?>">Sign up here</a>
<?= $this->endSection() ?>