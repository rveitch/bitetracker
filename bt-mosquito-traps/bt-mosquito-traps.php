<?php
/*
Plugin name: Bite Tracker Plugin
Plugin URI: http://veitchdigital.com/bitetracker
Description: This plugin adds bites
Author: Ryan Veitch & Grant
Author URI: http://veitchdigital.com/bitetracker
Version: 2.0
*/

  /**
   * Register Settings Page
   */
    add_action('admin_menu', 'bite_tracker_admin_pages');
    function bite_tracker_admin_pages() {
      if ( function_exists('current_user_can') && current_user_can('manage_options') ) { //Show Push Notification Tester ONLY to main SuperAdmin
       add_options_page(
         'Trap Count Settings',
         'Trap Count Settings',
         'manage_options',
         'bite_tracker_map_settings',
         'bite_tracker_map_settings'
       );
       add_action('admin_init', 'bite_tracker_admin_init');
     }
    }

  /**
   * Register Trap Counts
   */
    function bite_tracker_admin_init() {

        register_setting('bite-tracker-settings', 'trap_1_count');
        register_setting('bite-tracker-settings', 'trap_2_count');
        register_setting('bite-tracker-settings', 'trap_3_count');
        register_setting('bite-tracker-settings', 'trap_4_count');
        register_setting('bite-tracker-settings', 'trap_5_count');
        register_setting('bite-tracker-settings', 'trap_6_count');
        register_setting('bite-tracker-settings', 'trap_7_count');
        register_setting('bite-tracker-settings', 'trap_8_count');
        register_setting('bite-tracker-settings', 'trap_9_count');
        register_setting('bite-tracker-settings', 'trap_10_count');
        register_setting('bite-tracker-settings', 'trap_11_count');
        register_setting('bite-tracker-settings', 'trap_12_count');
        register_setting('bite-tracker-settings', 'trap_13_count');
        register_setting('bite-tracker-settings', 'trap_14_count');
        register_setting('bite-tracker-settings', 'trap_15_count');
        register_setting('bite-tracker-settings', 'trap_16_count');

    }

/*************************** PARSE-PN Dashboard Page **************************
*******************************************************************************
* Create admin dashboard page.
*/

function bite_tracker_map_settings() {



     ?>
     <div class="wrap">
     <div class="card">
       <div class="inside">
   	<form action="options.php" method="post">
   		<?php settings_fields('bite-tracker-settings'); ?>

   		<h3>Trap Count Map Settings</h3>

   		<table class="form-table">

        <tr valign="top">
   				<th style="width:125px" scope="row">Trap 1 Count: </th>
   				<td><input type="text" name="trap_1_count" value="<?php echo get_option('trap_1_count'); ?>" size="50"></td>
   			</tr>

        <tr valign="top">
   				<th style="width:125px" scope="row">Trap 2 Count: </th>
   				<td><input type="text" name="trap_2_count" value="<?php echo get_option('trap_2_count'); ?>" size="50"></td>
   			</tr>

        <tr valign="top">
   				<th style="width:125px" scope="row">Trap 3 Count: </th>
   				<td><input type="text" name="trap_3_count" value="<?php echo get_option('trap_3_count'); ?>" size="50"></td>
   			</tr>

        <tr valign="top">
   				<th style="width:125px" scope="row">Trap 4 Count: </th>
   				<td><input type="text" name="trap_4_count" value="<?php echo get_option('trap_4_count'); ?>" size="50"></td>
   			</tr>

        <tr valign="top">
   				<th style="width:125px" scope="row">Trap 5 Count: </th>
   				<td><input type="text" name="trap_5_count" value="<?php echo get_option('trap_5_count'); ?>" size="50"></td>
   			</tr>

        <tr valign="top">
          <th style="width:125px" scope="row">Trap 6 Count: </th>
          <td><input type="text" name="trap_6_count" value="<?php echo get_option('trap_6_count'); ?>" size="50"></td>
        </tr>

        <tr valign="top">
          <th style="width:125px" scope="row">Trap 7 Count: </th>
          <td><input type="text" name="trap_7_count" value="<?php echo get_option('trap_7_count'); ?>" size="50"></td>
        </tr>

        <tr valign="top">
          <th style="width:125px" scope="row">Trap 8 Count: </th>
          <td><input type="text" name="trap_8_count" value="<?php echo get_option('trap_8_count'); ?>" size="50"></td>
        </tr>

        <tr valign="top">
          <th style="width:125px" scope="row">Trap 9 Count: </th>
          <td><input type="text" name="trap_9_count" value="<?php echo get_option('trap_9_count'); ?>" size="50"></td>
        </tr>

        <tr valign="top">
          <th style="width:125px" scope="row">Trap 10 Count: </th>
          <td><input type="text" name="trap_10_count" value="<?php echo get_option('trap_10_count'); ?>" size="50"></td>
        </tr>

        <tr valign="top">
          <th style="width:125px" scope="row">Trap 11 Count: </th>
          <td><input type="text" name="trap_11_count" value="<?php echo get_option('trap_11_count'); ?>" size="50"></td>
        </tr>

        <tr valign="top">
          <th style="width:125px" scope="row">Trap 12 Count: </th>
          <td><input type="text" name="trap_12_count" value="<?php echo get_option('trap_12_count'); ?>" size="50"></td>
        </tr>

        <tr valign="top">
          <th style="width:125px" scope="row">Trap 13 Count: </th>
          <td><input type="text" name="trap_13_count" value="<?php echo get_option('trap_13_count'); ?>" size="50"></td>
        </tr>

        <tr valign="top">
          <th style="width:125px" scope="row">Trap 14 Count: </th>
          <td><input type="text" name="trap_14_count" value="<?php echo get_option('trap_14_count'); ?>" size="50"></td>
        </tr>

        <tr valign="top">
          <th style="width:125px" scope="row">Trap 15 Count: </th>
          <td><input type="text" name="trap_15_count" value="<?php echo get_option('trap_15_count'); ?>" size="50"></td>
        </tr>

        <tr valign="top">
          <th style="width:125px" scope="row">Trap 16 Count: </th>
          <td><input type="text" name="trap_16_count" value="<?php echo get_option('trap_16_count'); ?>" size="50"></td>
        </tr>


   		</table>

   		<?php submit_button(); ?>

   	</form>
     </div>
     </div>
     </div>
     <?php

   }
// End Plugin Code //
?>
