<?php 

    function truongnguyen_plugin_activation(){
        //khai báo plugin cần cài đặt 
        $plugins =array(
            'name' => 'Advanced_Custom_Field',
            'slug' => 'advanced-custom-fields',
            'required'=>true //có bắt buộc cài plugin hay ko 
        );

        //thiết lập TGM
        $configs=array(
            'menu' => 'tp_plugin_install',
            'has_notice'=>true,
            'dismissable'=>false,//có cho người dùng tắt thông báo ko 
            'is_automatic'=>true//tự động kích hoạt plugin
        );
        tgmpa($plugins,$configs);
    }
    add_action('tgmpa_register', 'truongnguyen_plugin_activation');

?>