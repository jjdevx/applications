<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
<<<<<<< HEAD
                <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs">
                      <strong class="font-bold">
                        <?php if( Auth::check() ): ?>
                          <?php echo e(Auth::user()->name); ?>

                        <?php endif; ?>
                      </strong>
                     </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
=======
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Example user</strong>
                            </span> <span class="text-muted text-xs block">Example menu <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Logout</a></li>
>>>>>>> 2a3c368d0071c71161387ebf457f96f7553e26e5
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
<<<<<<< HEAD
            <li class="<?php echo e(isActiveRoute('admin')); ?>">
                <a href="<?php echo e(url('/admin')); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Main view</span></a>
            </li>
            <li class="<?php echo e(isActiveRoute('product')); ?>">
                <a href="<?php echo e(url('/product')); ?>"><i class="fa fa-th-list"></i> <span class="nav-label">Products view</span></a>
=======
            <li class="<?php echo e(isActiveRoute('main')); ?>">
                <a href="<?php echo e(url('/')); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Main view</span></a>
            </li>
            <li class="<?php echo e(isActiveRoute('main')); ?>">
                <a href="<?php echo e(url('/product')); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Products view</span></a>
            </li>
            <li class="<?php echo e(isActiveRoute('minor')); ?>">
                <a href="<?php echo e(url('/minor')); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Minor view</span> </a>
>>>>>>> 2a3c368d0071c71161387ebf457f96f7553e26e5
            </li>
        </ul>

    </div>
</nav>
