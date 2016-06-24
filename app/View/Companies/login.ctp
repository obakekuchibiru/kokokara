<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Company', Array('url' => '/companies/login')); ?>
<? $this->Html->css('user-page.min', null, array('inline' => false)); ?>

    <div class="container-fluid" style="background:#f2f2f2;">
      <div class="col-sm-offset-3 col-sm-6 comp-signin-box">
        <form class="form-signin">
          <h4 class="form-signin-heading">カンパニーページへログイン</h4>
          <label for="inputEmail" class="sr-only">Email address</label>
            <?php echo $this->Form->input('Company.email', array('label' => false, 'id'=>'inputEmail','class'=>'form-control','placeholder'=>'Email address', 'required','autofocus')); ?>
          <label for="inputPassword" class="sr-only">Password</label>
            <?php echo $this->Form->input('Company.password', Array('label' => false, 'id'=>'unputPassword','class'=>'form-control','placeholder'=>'Password', 'required')); ?>

          <?php echo $this->Form->end(__('ログイン')); ?>
        </form>
      </div>
    </div> <!-- /container -->
