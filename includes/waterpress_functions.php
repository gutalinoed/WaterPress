<?php 
// Хук события 'wp_footer', запуск функции 'spb_iq_write_text()'
 add_action("wp_footer", "waterpress_text");
 // Хук событие 'admin_menu', запуск функции 'spb_iq_admin()'
 add_action( 'admin_menu', 'waterpress_admin' );

function waterpress_text()
{
    if (date("l") === "Monday")
    {
        echo "<p style='color: black; padding-left: 15%; background-color: blue;'>Понедельник день тяжелый, береги воду</p>";
    }
    else if (date("l") === "Friday")
    {
        echo "<p style='color: black; padding-left: 15%;'>Вода это маленькая пятница</p>";
    }
    else
    {
        echo "<p style='color: black; padding-left: 15%;'>В любой день береги воду</p>";
    }    
}

function waterpress_admin()
{
 add_menu_page(
 'Plugin settings',                                 // Название страницы
 'Waterpress Plugin',                               // Текст ссылки в меню
 'manage_options',                                  // Требование к возможности видеть ссылку 
 'waterpress/includes/waterpress-admin-page.php'   // 'slug' - файл отобразится по нажатию на ссылку
 );
}