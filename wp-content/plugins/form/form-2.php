<?php
/* 
    Plugin Name: hello world 
    Plugin URI: http://www.wordpress.org 
    Description: Create plugin 
    Author: bhushan 
    Version: 1.0 
    Author URI: http://www.xyz.com 
    */
class MyPlugin
{

    private $my_plugin_screen_name;
    private static $instance;
    /*......*/

    static function GetInstance()
    {

        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function PluginMenu()
    {
        $this->my_plugin_screen_name = add_menu_page(
            'Plugin ',
            'Plugin ',
            'manage_options',
            __FILE__,
            array($this, 'RenderPage'),
            plugins_url('/img/icon.png', __DIR__)
        );
    }

    public function RenderPage()
    {
?>
        <div class='wrap'>
            <h2>custom form</h2>
            <div class="main-content">

                <!-- You only need this form and the form-basic.css -->

                <form action="registrasi.php" method="post" name="form1">
                    <table>
                        <tr>
                            <td width="120">Username</td>
                            <td><input type="text" name="name"></td>
                        </tr>

                        <tr>
                            <td width="120">Email</td>
                            <td><input type="text" name="email"></td>
                        </tr>

                        <tr>
                            <td>No. HP</td>
                            <td><input type="text" name="hp"></td>
                        </tr>

                        <tr>
                            <td>Testimonial </td>
                            <td><input type="text" name="testimonial"></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="Submit"></td>
                        </tr>

                    </table>
                </form>
            </div>

        </div>
<?php
    }

    public function InitPlugin()
    {
        add_action('admin_menu', array($this, 'PluginMenu'));
    }
}

$MyPlugin = MyPlugin::GetInstance();
$MyPlugin->InitPlugin();
?>