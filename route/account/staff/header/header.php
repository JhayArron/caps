  <div class="app-header header-shadow <?php echo $accountHeader[0]['themeHeader']; ?>">
      <div class="app-header__logo">
          <h5><?php echo strtoupper($account[0]['business_name']); ?></h5>
          <div class="header__pane ml-auto">
              <div>
                  <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                      data-class="closed-sidebar">
                      <span class="hamburger-box">
                          <span class="hamburger-inner"></span>
                      </span>
                  </button>
              </div>
          </div>
      </div>
      <div class="app-header__mobile-menu">
          <div>
              <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                  <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                  </span>
              </button>
          </div>
      </div>
      <div class="app-header__menu">
          <span>
              <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                  <span class="btn-icon-wrapper">
                      <i class="fa fa-ellipsis-v fa-w-6"></i>
                  </span>
              </button>
          </span>
      </div>
      <div class="app-header__content">
         
          <div class="app-header-right">
              <div class="header-btn-lg pr-0">
                  <div class="widget-content p-0">
                      <div class="widget-content-wrapper">
                          <div class="widget-content-left">
                              <div class="btn-group">
                                  <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                      <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                      <i class="fa fa-cog fa-spin"></i>
                                  </a>
                                  <div tabindex="-1" role="menu" aria-hidden="true"
                                      class="dropdown-menu dropdown-menu-right">
                                      <a href="?view=MYACCOUNT" tabindex="0" class="dropdown-item">Settings</a>
                                      <a href="../../CLINIC/?company=<?php echo $account[0]['business_name']; ?>" tabindex="0" class="dropdown-item">Logout</a>
                                  </div>
                              </div>
                          </div>
                          <div class="widget-content-left  ml-3 header-user-info">
                              <div class="widget-heading">
                                <?php echo strtoupper($account[0]['fullname']); ?>
                              </div>
                              <div class="widget-subheading">   
                                 <?php echo strtoupper($account[0]['role_name']); ?>
                              </div>
                          </div>
                          <div class="widget-content-right header-user-info ml-3">
                              <a href="../../CLINIC/?company=<?php echo $account[0]['business_name']; ?>" class="btn-shadow p-1 btn btn-danger btn-sm show-toastr-example">
                                  <i class="fa fa-exclamation-circle"></i>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>