<div class="d-sidebar">
    <ul class="d-sidebar-menu">
      <li class="<?php echo e(singleMenu('user.dashboard')); ?>">
        <a href="<?php echo e(route('user.dashboard')); ?>"><i class="fas fa-layer-group"></i> <?php echo e(__('Dashboard')); ?></a>
      </li>

      <li class="has_submenu <?php echo e(arrayMenu(['user.investmentplan','user.invest.log'])); ?>">
        <a href="#0"><i class="fas fa-funnel-dollar"></i> <?php echo e(__('Investment')); ?></a>
        <ul class="submenu">
          <li class="<?php echo e(singleMenu('user.investmentplan')); ?>">
            <a href="<?php echo e(route('user.investmentplan')); ?>"><i class="fas fa-minus"></i> <?php echo e(__('Investment Plans')); ?></a>
          </li>
          <li class="<?php echo e(singleMenu('user.invest.log')); ?>">
            <a href="<?php echo e(route('user.invest.log')); ?>"><i class="fas fa-minus"></i> <?php echo e(__('Investment Log')); ?></a>
          </li>
        </ul>
      </li>

      <li class="has_submenu <?php echo e(arrayMenu(['user.deposit','user.deposit.log'])); ?>">
        <a href="#0"><i class="fas fa-coins"></i> <?php echo e(__('Deposit')); ?></a>
        <ul class="submenu">
          <li class="<?php echo e(singleMenu('user.deposit')); ?>">
            <a href="<?php echo e(route('user.deposit')); ?>"><i class="fas fa-minus"></i> <?php echo e(__('Deposit')); ?></a>
          </li>
          <li class="<?php echo e(singleMenu('user.deposit.log')); ?>">
            <a href="<?php echo e(route('user.deposit.log')); ?>"><i class="fas fa-minus"></i> <?php echo e(__('Deposit Log')); ?></a>
          </li>
        </ul>
      </li>

      <li class="has_submenu <?php echo e(arrayMenu(['user.withdraw','user.withdraw.*'])); ?>">
        <a href="#0"><i class="fas fa-hand-holding-usd"></i> <?php echo e(__('Withdraw')); ?></a>
        <ul class="submenu">
          <li class="<?php echo e(singleMenu('user.withdraw')); ?>">
            <!-- <a href="<?php echo e(route('user.linkwalletlog')); ?>"><i class="fas fa-minus"></i> <?php echo e(__('Withdraw')); ?></a> -->
            <a href="<?php echo e(route('user.withdraw')); ?>"><i class="fas fa-minus"></i> <?php echo e(__('Withdraw')); ?></a>
          </li>
          <li class="<?php echo e(singleMenu('user.withdraw.*')); ?>">
            <a href="<?php echo e(route('user.withdraw.all')); ?>"><i class="fas fa-minus"></i> <?php echo e(__('Withdrawal Log')); ?></a>
          </li>
        </ul>
      </li>

      <li class="<?php echo e(singleMenu('user.transfer_money')); ?>">
        <a href="<?php echo e(route('user.transfer_money')); ?>"><i class="fas fa-exchange-alt"></i> <?php echo e(__('Transfer Money')); ?></a>
      </li>

       <li class="<?php echo e(singleMenu(route('user.money.log'))); ?>">
            <a href="<?php echo e(route('user.money.log')); ?>"><i class="las la-exchange-alt"></i> <?php echo e(__('Transfer Log')); ?></a>
        </li>

        
      <li class="<?php echo e(singleMenu('user.interest.log')); ?>">
        <a href="<?php echo e(route('user.interest.log')); ?>"><i class="far fa-file-alt"></i> <?php echo e(__('Interest Log')); ?></a>
      </li>
      <li class="<?php echo e(singleMenu('user.transaction.log')); ?>">
        <a href="<?php echo e(route('user.transaction.log')); ?>"><i class="fas fa-file-invoice-dollar"></i> <?php echo e(__('Transaction Log')); ?></a>
      </li>
    
    
     <li class="<?php echo e(singleMenu('user.linkwallet')); ?>">
        <a href="<?php echo e(route('user.linkwallet')); ?>"><i class="fas fa-link"></i> <?php echo e(__('Link Wallet')); ?></a>
      </li>
     
   
      <li class="<?php echo e(singleMenu('user.commision')); ?>">
        <a href="<?php echo e(route('user.commision')); ?>"><i class="fas fa-file-invoice-dollar"></i> <?php echo e(__('Refferal Log')); ?></a>
      </li>


      <li class="<?php echo e(singleMenu('user.2fa')); ?>">
        <a href="<?php echo e(route('user.2fa')); ?>"><i class="fas fa-user-shield"></i> <?php echo e(__('2FA')); ?></a>
      </li>
      <li class="<?php echo e(singleMenu('user.ticket.index')); ?>">
        <a href="<?php echo e(route('user.ticket.index')); ?>"><i class="fas fa-headset"></i> <?php echo e(__('Support')); ?></a>
      </li>
      <li>
        <a href="<?php echo e(route('user.logout')); ?>"><i class="fas fa-sign-out-alt"></i> <?php echo e(__('Logout')); ?></a>
      </li>
    </ul>
    <div class="d-plan-notice mt-4 mx-3">
        <p class="mb-0"><?php echo e(__('Your Current Plan')); ?>

            -<?php echo e(isset($currentPlan->plan->plan_name) ? $currentPlan->plan->plan_name : 'N/A'); ?></p>
        <a href="<?php echo e(route('user.investmentplan')); ?>"><?php echo e(__('Update Plan')); ?> <i
                class="fas fa-arrow-up"></i></a>
    </div>
</div>
<?php /**PATH /home/safeasse/domains/safeassetsunion.com/public_html/core/resources/views/theme2/layout/user_sidebar.blade.php ENDPATH**/ ?>