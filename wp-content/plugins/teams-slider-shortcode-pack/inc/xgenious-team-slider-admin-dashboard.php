<?php
/**
 * @package Xgenious pricing plan Shortcode
 * @version 1.0
 *
**/
/*======================
    Admin Theme Options
=======================*/

add_action( 'admin_menu', 'xgenious_team_slider_widget_plugin_menu' );

/** Step 1. */
function xgenious_team_slider_widget_plugin_menu() {
	add_menu_page( 'Team Slider', 'Team Slider', 'manage_options', 'team-slider-shortcode-pack', 'xgenious_team_slider_widget_theme_options','dashicons-businessman' ,'21');
}

// /** Step 3. */
function xgenious_team_slider_widget_theme_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	$markup = '<div class="x-team_slider-wrapper">
                    <div class="xgeinous-team-slider-section-title">
                        <h2>Team Slider Shortcode </h2>
                        <small>Team Slider Shortcode Collection</small>
                    </div>
                    <div class="xgenious-team-slider-options-body">
                        <table>
                            <tr>
                                <td>Select Your Team Slider</td>
                                <td> 
                                    <select name="xgeinous-team-slider-shortcode-options" id="xgeinous-team-slider-options">
                                        <option value="01">Team Slider no-1</option>
                                        <option value="02">Team Slider no-2</option>
                                        <option value="03">Team Slider no-3</option>
                                        <option value="04">Team Slider no-4</option>
                                        <option value="05">Team Slider no-5</option>
                                        <option value="06">Team Slider no-6</option>
                                        <option value="07">Team Slider no-7</option>
                                        <option value="08">Team Slider no-8</option>
                                        <option value="09">Team Slider no-9</option>
                                        <option value="10">Team Slider no-10</option>
                                        <option value="11">Team Slider no-11</option>
                                        <option value="12">Team Slider no-12</option>
                                        <option value="13">Team Slider no-13</option>
                                        <option value="14">Team Slider no-14</option>
                                        <option value="15">Team Slider no-15</option>
                                    </select> 
                                
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="xgenious-team-slider-preview-image">
                        <div id="team-slider-append">
                        <table id="xgeinous-team-slider-shortcode-table">
                            <tr>
                                <td align="center" colspan="3"> 
                                  <textarea id="show_short_code"> [xgenious_team_slider_01] </textarea>
                                </td>
                            </tr>
                            
                            <tr class="xgenious-team-slider-shortcode-input">
                                <td> <label for="xcount">Count *</label></td>
                                <td> 
                                 <input type="text" name="xcount" id="xcount"  value="-1"/>
                                 <small class="xsmall-text"> Enter How Many Items You Want In Team Slider, Enter -1 For Unlimited Team Slider Post.<small>
                                </td>
                            </tr>
                            <tr class="xgenious-team-slider-shortcode-input">
                                <td> <label for="xitems">Items *</label></td>
                                <td> 
                                 <input type="text" name="xitems" id="xitems"  value="4"/>
                                 <small class="xsmall-text"> Enter How Many Items You Want To Show In Team Slider.<small>
                                </td>
                            </tr>
                            <tr class="xgenious-team-slider-shortcode-input">
                                <td> <label for="xautoplay" >Autoplay </label></td>
                                <td>
                                    <select id="xautoplay" class="xstyle">
                                        <option value="true">Enable</option>
                                        <option value="false">Disable</option>
                                    </select>
                                     <small class="xsmall-text">Enable / Disable Autoplay <small>
                                </td>
                            </tr>
                            <tr class="xgenious-team-slider-shortcode-input">
                                <td> <label for="xcategory" >Category </label></td>
                                <td>
                                    <select id="xcategory" class="xstyle">
                                        '.get_team_category().'
                                    </select>
                                     <small class="xsmall-text">Select Category . if you want to show slider category wise.<small>
                                </td>
                            </tr>
                            <tr class="xgenious-team-slider-shortcode-input">
                                <td> <label for="xsocial" >Social Icons </label></td>
                                <td>
                                    <select id="xsocial" class="xstyle">
                                        <option value="true">Enable</option>
                                        <option value="false">Disable</option>
                                    </select>
                                    <small class="xsmall-text">Enable / Disable Social Icon <small>
                                </td>
                            </tr>

                            <tr class="xgenious-team-slider-shortcode-input">
                                <td> <label for="xautoplayTimeout">AutoplayTimeout *</label></td>
                                <td> 
                                 <input type="text" name="xautoplayTimeout" id="xautoplayTimeout"  value="5000"/>
                                 <small class="xsmall-text"> Enter autoplayTimeout For Team Slider. input count as mili seconds <small>
                                </td>
                            </tr>
                            <tr class="xgenious-team-slider-shortcode-input">
                                <td> <label for="xsocial_color">Slider Color *</label></td>
                                <td> 
                                 <input type="text" name="xsocial_color" id="xsocial_color"  value=""/>
                                 <small class="xsmall-text"> Enter color code with #. eg #000000; <small>
                                </td>
                            </tr>
                            <tr class="xgenious-team-slider-shortcode-input">
                                <td> <label for="xbtn_targer">Get The Shortcode </label></td>
                                <td> 
                                 <button type="button" class="button button-primary button-large" name="xbtn_submit" id="xbtn_submit">Get Shortcode</button>
                                </td>
                            </tr>
                        </table>
                        <br/>
                        <h2>Team Slider Preview Image </h2>
                        <br/>
                        <br/>
                            <img id="show_preview_img" src="'.XGENIOUS_TEAMS_SLIDER_ADD_ONS_PACK_URL.'/assets/img/01.jpg" alt="Team Slider Shortcode "/>
                        </div>
                    </div>
                    

              </div>';
    echo $markup;
}






?>