<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Company', Array('url' => '/companies/login')); ?>
    <table>
        <tr>
            <th>メールアドレス</th>
            <td><?php echo $this->Form->input('Company.email', Array('label' => 'email')); ?></td>
        </tr>
        <tr>
            <th>パスワード</th>
            <td><?php echo $this->Form->input('Company.password', Array('label' => 'password')); ?></td>
        </tr>
    </table>
    <?php echo $this->Form->end(__('ログイン')); ?>