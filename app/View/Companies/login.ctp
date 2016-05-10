<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Post', Array('url' => '/companies/login')); ?>
    <table>
        <tr>
            <th>メールアドレス</th>
            <td><?php echo $this->Form->input('Company.email', Array('label' => false)); ?></td>
        </tr>
        <tr>
            <th>パスワード</th>
            <td><?php echo $this->Form->input('Company.password', Array('label' => false)); ?></td>
        </tr>
    </table>
    <?php echo $this->Form->end('ログイン'); ?>