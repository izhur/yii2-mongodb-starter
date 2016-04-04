<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Application', 'options' => ['class' => 'header']],
                    ['label' => 'Home', 'url' => ['/site/index'], 'icon'=>'fa fa-home'],
                    ['label' => 'About', 'url' => ['/site/about'], 'icon'=>'fa fa-info-circle'],
                    ['label' => 'Contact', 'url' => ['/site/contact'], 'icon'=>'fa fa-commenting'],
                    ['label' => 'Customer', 'url' => ['/customer'], 'icon'=>'fa fa-group'],
                    [
                        'label' => 'Admin', 'url' => ['/admin'],
                        'icon' => 'fa fa-gears',
                        'items' => [
                            ['label' => 'Route', 'url' => ['/admin/route']],
                            ['label' => 'Rule', 'url' => ['/admin/rule']],
                            ['label' => 'Permission', 'url' => ['/admin/permission']],
                            //['label' => 'Menu', 'url' => ['/admin/menu']],
                            ['label' => 'Role', 'url' => ['/admin/role']],
                            ['label' => 'Assingment', 'url' => ['/admin/assignment']],
                            ['label' => 'User', 'url' => ['/user']],
                        ],
                        'visible'=> !Yii::$app->user->isGuest
                    ],
                    ['label' => 'Signup', 'url' => ['/site/signup'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],

                    ['label' => 'Tools', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    [
                        'label' => 'Same tools',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'fa fa-circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
