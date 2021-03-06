<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin name
    |--------------------------------------------------------------------------
    |
    | This value is the name of laravel-admin, This setting is displayed on the
    | login page.
    |
    */
    'name' => '管理后台',

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin logo
    |--------------------------------------------------------------------------
    |
    | The logo of all admin pages. You can also set it as an image by using a
    | `img` tag, eg '<img src="http://logo-url" alt="Admin logo">'.
    |
    */
    'logo' => '<b>管理后台</b> ',

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin mini logo
    |--------------------------------------------------------------------------
    |
    | The logo of all admin pages when the sidebar menu is collapsed. You can
    | also set it as an image by using a `img` tag, eg
    | '<img src="http://logo-url" alt="Admin logo">'.
    |
    */
    'logo-mini' => '<b>K</b>',

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin bootstrap setting
    |--------------------------------------------------------------------------
    |
    | This value is the path of laravel-admin bootstrap file.
    |
    */
    'bootstrap' => app_path('Admin/bootstrap.php'),

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin route settings
    |--------------------------------------------------------------------------
    |
    | The routing configuration of the admin page, including the path prefix,
    | the controller namespace, and the default middleware. If you want to
    | access through the root path, just set the prefix to empty string.
    |
    */
    'route' => [

        'prefix' => env('ADMIN_ROUTE_PREFIX', 'admin'),

        'namespace' => 'App\\Admin\\Controllers',

        'middleware' => ['web', 'admin'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin install directory
    |--------------------------------------------------------------------------
    |
    | The installation directory of the controller and routing configuration
    | files of the administration page. The default is `app/Admin`, which must
    | be set before running `artisan admin::install` to take effect.
    |
    */
    'directory' => app_path('Admin'),

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin html title
    |--------------------------------------------------------------------------
    |
    | Html title for all pages.
    |
    */
    'title' => env('APP_NAME').' - 管理后台',

    /*
    |--------------------------------------------------------------------------
    | Access via `https`
    |--------------------------------------------------------------------------
    |
    | If your page is going to be accessed via https, set it to `true`.
    |
    */
    'https' => env('ADMIN_HTTPS', env('APP_SECURE', false)),

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin auth setting
    |--------------------------------------------------------------------------
    |
    | Authentication settings for all admin pages. Include an authentication
    | guard and a user provider setting of authentication driver.
    |
    | You can specify a controller for `login` `logout` and other auth routes.
    |
    */
    'auth' => [

        'controller' => \Encore\Admin\Controllers\AuthController::class,

        'guard' => 'admin',

        'guards' => [
            'admin' => [
                'driver'   => 'session',
                'provider' => 'admin',
            ],
        ],

        'providers' => [
            'admin' => [
                'driver' => 'eloquent',
                'model'  => \App\Models\AdminUser::class,
            ],
        ],

        // Add "remember me" to login form
        'remember' => true,

        // Redirect to the specified URI when user is not authorized.
        'redirect_to' => 'auth/login',

        // The URIs that should be excluded from authorization.
        'excepts' => [
            'auth/login',
            'auth/logout',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin upload setting
    |--------------------------------------------------------------------------
    |
    | File system configuration for form upload files and images, including
    | disk and upload path.
    |
    */
    'upload' => [

        // Disk in `config/filesystem.php`.
        'disk' => 'admin',

        // Image and file upload path under the disk above.
        'directory' => [
            'image' => 'images',
            'file'  => 'files',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin database settings
    |--------------------------------------------------------------------------
    |
    | Here are database settings for laravel-admin builtin model & tables.
    |
    */
    'database' => [

        // Database connection for following tables.
        'connection' => '',

        // User tables and model.
        'users_table' => 'admin_users',
        'users_model' => Encore\Admin\Auth\Database\Administrator::class,

        // Role table and model.
        'roles_table' => 'admin_roles',
        'roles_model' => Encore\Admin\Auth\Database\Role::class,

        // Permission table and model.
        'permissions_table' => 'admin_permissions',
        'permissions_model' => Encore\Admin\Auth\Database\Permission::class,

        // Menu table and model.
        'menu_table' => 'admin_menu',
        'menu_model' => Encore\Admin\Auth\Database\Menu::class,

        // Pivot table for table above.
        'operation_log_table'    => 'admin_operation_log',
        'user_permissions_table' => 'admin_user_permissions',
        'role_users_table'       => 'admin_role_users',
        'role_permissions_table' => 'admin_role_permissions',
        'role_menu_table'        => 'admin_role_menu',
    ],

    /*
    |--------------------------------------------------------------------------
    | User operation log setting
    |--------------------------------------------------------------------------
    |
    | By setting this option to open or close operation log in laravel-admin.
    |
    */
    'operation_log' => [

        'enable' => env('ADMIN_OPERATION_LOG', false),

        /*
         * Only logging allowed methods in the list
         */
        'allowed_methods' => ['GET', 'HEAD', 'POST', 'PUT', 'DELETE', 'CONNECT', 'OPTIONS', 'TRACE', 'PATCH'],

        /*
         * Routes that will not log to database.
         *
         * All method to path like: admin/auth/logs
         * or specific method to path like: get:admin/auth/logs.
         */
        'except' => [
            'admin/auth/logs*',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User default avatar
    |--------------------------------------------------------------------------
    |
    | Set a default avatar for newly created users.
    |
    */
    'default_avatar' => '/vendor/laravel-admin/AdminLTE/dist/img/user2-160x160.jpg',

    /*
    |--------------------------------------------------------------------------
    | Admin map field provider
    |--------------------------------------------------------------------------
    |
    | Supported: "tencent", "google", "yandex".
    |
    */
    'map_provider' => 'google',

    /*
    |--------------------------------------------------------------------------
    | Application Skin
    |--------------------------------------------------------------------------
    |
    | This value is the skin of admin pages.
    | @see https://adminlte.io/docs/2.4/layout
    |
    | Supported:
    |    "skin-blue", "skin-blue-light", "skin-yellow", "skin-yellow-light",
    |    "skin-green", "skin-green-light", "skin-purple", "skin-purple-light",
    |    "skin-red", "skin-red-light", "skin-black", "skin-black-light".
    |
    */
    'skin' => 'skin-blue-light',

    /*
    |--------------------------------------------------------------------------
    | Application layout
    |--------------------------------------------------------------------------
    |
    | This value is the layout of admin pages.
    | @see https://adminlte.io/docs/2.4/layout
    |
    | Supported: "fixed", "layout-boxed", "layout-top-nav", "sidebar-collapse",
    | "sidebar-mini".
    |
    */
    'layout' => ['sidebar-mini', 'sidebar-collapse'],

    /*
    |--------------------------------------------------------------------------
    | Login page background image
    |--------------------------------------------------------------------------
    |
    | This value is used to set the background image of login page.
    |
    */
    'login_background_image' => '',

    /*
    |--------------------------------------------------------------------------
    | Show version at footer
    |--------------------------------------------------------------------------
    |
    | Whether to display the version number of laravel-admin at the footer of
    | each page
    |
    */
    'show_version' => false,

    /*
    |--------------------------------------------------------------------------
    | Show environment at footer
    |--------------------------------------------------------------------------
    |
    | Whether to display the environment at the footer of each page
    |
    */
    'show_environment' => false,

    /*
    |--------------------------------------------------------------------------
    | Menu bind to permission
    |--------------------------------------------------------------------------
    |
    | whether enable menu bind to a permission
    */
    'menu_bind_permission' => true,

    /*
    |--------------------------------------------------------------------------
    | Enable default breadcrumb
    |--------------------------------------------------------------------------
    |
    | Whether enable default breadcrumb for every page content.
    */
    'enable_default_breadcrumb' => false,

    /*
    |--------------------------------------------------------------------------
    | Enable/Disable assets minify
    |--------------------------------------------------------------------------
    */
    'minify_assets' => [

        // Assets will not be minified.
        'excepts' => [

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Enable/Disable sidebar menu search
    |--------------------------------------------------------------------------
    */
    'enable_menu_search' => true,

    /*
    |--------------------------------------------------------------------------
    | Extension Directory
    |--------------------------------------------------------------------------
    |
    | When you use command `php artisan admin:extend` to generate extensions,
    | the extension files will be generated in this directory.
    */
    'extension_dir' => app_path('Admin/Extensions'),

    /*
    |--------------------------------------------------------------------------
    | Settings for extensions.
    |--------------------------------------------------------------------------
    |
    | You can find all available extensions here
    | https://github.com/laravel-admin-extensions.
    |
    */
    'extensions' => [
        'media-manager' => [

            // Select a local disk that you configured in `config/filesystem.php`
            'disk' => 'admin'
        ],

        'ueditor' => [

            // 如果要关掉这个扩展，设置为false
            'enable' => true,

            // 编辑器的前端配置 参考：http://fex.baidu.com/ueditor/#start-config
            'config' => [
                'initialFrameHeight' => 400, // 例如初始化高度
            ],
             'field_type' => 'editor'
        ],

        /**
         * 中国地图选择器 distpicker
         * https://github.com/laravel-admin-extensions/china-distpicker
         *
         * 表单使用
         * $form->distpicker(['province_id' => '省', 'city_id' => '市', 'district_id' => '区'], '请选择区域');
         *
         * // 筛选使用
         * $filter->distpicker('province_id', 'city_id', 'district_id', '地域选择');
         */
        'china-distpicker' => [
            // 如果要关掉这个扩展，设置为false
            'enable' => true,
        ],

        /**
         * 图片裁剪上传
         * https://github.com/laravel-admin-extensions/cropper
         *
         * 默认模式是自由剪裁模式，如果需要强制剪裁尺寸，请使用（注意该尺寸就是最后得到的图片尺寸 非“比例”）
         * $form->cropper('content','label')->cRatio($width,$height);
         */
        'cropper' => [
            // 如果要关掉这个扩展，设置为false
            'enable' => true,
        ],

        // 多tags输入
        // tagsinput: https://github.com/namet117/laravel-admin-tagsinput

        // 异步选择器 Laravel-Admin select2 异步插件
        // https://github.com/xiaohuilam/laravel-admin-select2/blob/master/README_cn.md

        /**
         * 文件夹路径文件选择器 File-browser
         * https://github.com/laravel-admin-extensions/file-browser
         *
         * 在app/Admin/bootstrap.php中添加以下代码：
         * Encore\Admin\Form::extend('media', \Encore\FileBrowser\FileBrowserField::class);
         *
         * 使用方法：
         * $form->media('images', 'images')->path('uploads/images');
         * Model下对应字段需要处理
         * public function getImagesAttribute($v)
         * {
         *     return json_decode($v, true);
         * }
         */

        /**
         * Simditor 富文本编辑器
         * https://github.com/laravel-admin-extensions/simditor
         *
         * $form->simditor('simditor');
         */
        'simditor' => [
            // Set to false if you want to disable this extension
            'enable' => false,
            // Editor configuration
            'config' => [
                'upload' => [
                    'url' => '/admin/files/simditor', # example api route: admin/api/upload
                    'fileKey' => 'files',
                    'connectionCount' => 3,
                    'leaveConfirm' => 'Uploading is in progress, are you sure to leave this page?'
                ],
                'tabIndent' => true,
                'toolbar' => ['title', 'bold', 'italic', 'underline', 'strikethrough', 'fontScale', 'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|', 'link', 'image', 'hr', '|', 'indent', 'outdent', 'alignment'],
                'toolbarFloat' => true,
                'toolbarFloatOffset' => 0,
                'toolbarHidden' => false,
                'pasteImage' => true,
                'cleanPaste' => false,
            ]
        ],

        /**
         * md编辑器
         * https://github.com/ShareManT/laravel-admin-ext-editormd
         *
         * $form->editormd('editormd');
         *
         * 注意： 此组件不可与simditor同时使用
         */
        'editormd' => [
            // Set to false if you want to disable this extension
            'enable' => true,
            // Set to true if you want to take advantage the screen length for your editormd instance.
            'wideMode' => false,
            // Set to true when the instance included in larave-admin tab component.
            'dynamicMode' => false,
            // Editor.js configuration (Refer to http://pandao.github.io/editor.md/)
            'config' =>
                [
                    'path' => '/vendor/laravel-admin-ext/editormd/editormd-1.5.0/lib/',
                    'width' => '100%',
                    'height' => 600,
                    'emoji' => true
                ]
        ],

        /**
         * 富文本编辑器
         * https://github.com/laravel-admin-extensions/wangEditor
         *
         * $form->editor('content');
         */
        'wang-editor' => [

            // 如果要关掉这个扩展，设置为false
            'enable' => false,

            // 编辑器的配置
            'config' => [
                'uploadImgServer' => '/uploads'
            ]
        ],

        /**
         * 代码编辑器
         * https://github.com/laravel-admin-extensions/clike-editor
         *
         * 支持语音 https://codemirror.net/mode/index.html
         *
         * $form->clang('code')->height(500);
         * $form->cpp('code');
         * $form->csharp('code');
         * $form->java('code');
         * $form->objectivec('code');
         * $form->scala('code');
         * $form->kotlin('code');
         * $form->ceylon('code');
         */
        'clike-editor' => [

            // 如果要关掉这个扩展，设置为false
            'enable' => true,

            // 编辑器的配置
            'config' => [

            ]
        ],

    ],

    'powered_by_info' => '技术支持：<a href="https://www.klinson.com/" target="_blank" title="专业开发一切web、公众号、小程序，请联系我吧">klinson.com</a>',

];
