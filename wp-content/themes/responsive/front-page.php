<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Site Front Page
 *
 * Note: You can overwrite front-page.php as well as any other Template in Child Theme.
 * Create the same file (name) include in /responsive-child-theme/ and you're all set to go!
 * @see            http://codex.wordpress.org/Child_Themes and
 *                 http://themeid.com/forum/topic/505/child-theme-example/
 *
 * @file           front-page.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/front-page.php
 * @link           http://codex.wordpress.org/Template_Hierarchy
 * @since          available since Release 1.0
 */

/**
 * Globalize Theme Options
 */
$responsive_options = responsive_get_options();
/**
 * If front page is set to display the
 * blog posts index, include home.php;
 * otherwise, display static front page
 * content
 */
if ( 'posts' == get_option( 'show_on_front' ) && $responsive_options['front_page'] != 1 ) {
	get_template_part( 'home' );
} elseif ( 'page' == get_option( 'show_on_front' ) && $responsive_options['front_page'] != 1 ) {
	$template = get_post_meta( get_option( 'page_on_front' ), '_wp_page_template', true );
	$template = ( $template == 'default' ) ? 'index.php' : $template;
	locate_template( $template, true );
} else { 

	get_header();
	
	//test for first install no database
	$db = get_option( 'responsive_theme_options' );
    //test if all options are empty so we can display default text if they are
    $empty = ( empty( $responsive_options['home_headline'] ) && empty( $responsive_options['home_subheadline'] ) && empty( $responsive_options['home_content_area'] ) ) ? false : true;
	?>

	
<!-- begining of #featured -->

<div class="first_page"  >

	<center>
    
    <div id="main_slide" style="width:1250px;height:600px;font-family:Lato;font-size:150%;background-color:#transparent">
    	
		

		
		<div id="main_slide_container" style="width:1250px;height:600px;background-color:#transparent;">
		
			<div id="main_slide_space" style="height:20px;">
			</div>
		
			
			<div id="main_slide_left" style="height:500px;width750px;float:left;background-color:#transparent;">
				<a href="https://www.pathgeo.com/" ><img src = "https://www.pathgeo.com/wp-content/themes/responsive/core/images/main-img.png" alt="logo" border="0" style = "margin:0px 0px 0px 0px;width:750px;height:500px;float:left;" /></a>

			</div>
		
			<div id="main_slide_right" style="height:400px;width:500px;float:left;">

				
				<div id="main_title" style="height:300px;width:600px;float:left;background-color:#transparent;">
				
					<font color="#999 " style="font-family:Lato;font-size:150%;margin:0px;text-align:left;float:left;">			
						Providing Geo-targeting, Real-Time </br></br>
						& Impact Detection Tools.
					</font>	
					
					<font color="#787878  " style="font-family:Lato;font-size:100%;margin:50px;text-align:left;float:left;">			
						Map Your Customers to Drive Business Decisions</br></br>
						Listening, Analyzing, and Engaging Your Customers in Social Web (Social Media and Web Pages)
						</br></br>
						<div id="button areas" style = "margin:0px;text-align:right;float:right;">
						<a href="https://www.pathgeo.com/demo/maptime/">
						    <div class="large blue awesome">
							
			            					
			                    <div id="blog_area" style="width:150px;height:20px;">

			                    	
			                    	<div id="blog" style="background-color:transparent;height:20px;width:130px;float:left;">
			                    	
			                    		<font style="font-family:Lato;font-size:150%;margin:0px;text-align:right;float:left;color:#ffffff;">
						    	
											View Demo <!--&raquo;--> 
						    		
										</font>	
			                    	
			                    	</div>
									
			                    	<div id="right_arrow" style="background-color:transparent;height:20px;width:20px;float:left;">
			                    		<img src = "https://www.pathgeo.com/wp-content/themes/responsive/core/images/arrow-right.png" alt="logo" border="0" style = "margin:0px 0px 0px 0px;width:20px;height:20px;" />						
			                    	</div>									
									
			                    </div>
			                    						
								
							
						    </div> 
						</a>
						</div>
					</font>	
				</div>
			
			</div>

		
		</div>
		
		
			
	</div>
		
	<div id="middle_panel" style="width:975px;height:350px;">
		
    
    
    
    
    
    	<div id="title_m1" style="background-color:#FF6600;height:10px;width:960px;font-family:Lato;font-size:120%;"></div>
    	<div id="title_m" style="background-color:#FF6600;height:30px;width:960px;font-family:Lato;font-size:150%;">
    		
    		<font color="ffffff ">Marketing, brand analysis, public opinions, and customer engagement</font>
    		
    	</div>
    	<div id="title_m3" style="height:20px;font-family:Lato;font-size:120%;"></div>
    
    	<div id="middle_L" style="background-color:#ffffff;height:200px;width:470px;float:left">
    		<div id="middle_L_space" style="background-color:#ffffff;height:10px;width:400px;"></div>
    		<font color="FF6600 " style="font-family:Lato;font-size:190%;float:left;font-weight:normal;">			
    			&nbsp;&nbsp;&nbsp;
    			Map Time
    		</font>
    		<br/>
    		<div id="middle_L_space" style="background-color:#ffffff;height:20px;width:400px;"></div>
    		<font color="404040  " style="font-family:Lato;font-size:130%;float:left;margin:10px 20px 10px 20px;text-align:left;font-weight:normal;">			
    			A web tool allows you to geocode and geo-analyze your data (with street addresses) into maps and to overlay with census and demographic data.
    		</font>	
    		<br/>
    		<div id="middle_L_space" style="background-color:#ffffff;height:20px;width:400px;"></div>
    		<a id= "maptime" href="https://www.pathgeo.com/?page_id=12"><b><font color="36c8ea  " style="font-family:Lato;font-size:130%;float:right;margin:30px;font-weight:normal;">			
    			Learn More >				
    		</font></a>			
    	</div>
    	
    
    	
    	<div id="middle_m" style="height:200px;width:20px;float:left;"></div>	
    
    	<div id="middle_R" style="background-color:#ffffff;height:200px;width:470px;float:left;">
    		<div id="middle_R_space" style="background-color:#ffffff;height:10px;width:400px;"></div>
    		<font color="FF6600 " style="font-family:Lato;font-size:190%;float:left;font-weight:normal;">
    			
    			&nbsp;&nbsp;&nbsp;
    			Social Time
    		</font>
    		<br/>
    		<div id="middle_R_space" style="background-color:#ffffff;height:20px;width:400px;"></div>
    		<font color="404040  " style="font-family:Lato;font-size:130%;float:left;margin:10px 20px 0px 20px;text-align:left;font-weight:normal">			
    			A real-time web-based social media geo-search tool that allows users to retrieve social media feedbacks, online reputations, and customer opinions from a user-selected geo-targeting region with keywords.
    		</font>
    		<div id="middle_R_space" style="background-color:#ffffff;height:20px;width:400px;"></div>
    		<a id= "socialtime" href="https://www.pathgeo.com/?page_id=10"><b><font color="36c8ea  " style="font-family:Lato;font-size:130%;float:right;margin:20px 30px 0px 30px;font-weight:normal;">			
    			Learn More >				
    		</font></a>					
    	</div>
    	
    	<div id="middle_space" style="clear:both;text-align:center;height:20px;"></div>		
    	
    
    
    	<div id="middle_B_L" style="background-color:#ffffff;height:200px;width:305px;float:left">
    		<div id="middle_B_L_top" style="background-color:#909090;height:80px;width:305px;">
    			<font color="ffffff  " style="font-family:Lato;font-size:140%;float:left;margin:10px 20px 10px 20px;text-align:left;font-weight:normal;">
    			    Businesses around the world use PathGeo.
    			</font>
    		</div>
    		
    		<font color="585858   " style="font-family:Lato;font-size:110%;float:left;margin:5px;font-weight:normal;">			
    			PathGeo provides geo-targeting and real-time web tools for listening, analyzing, and engaging social web (social media and web pages) in marketing, brand analysis, public opinions, and customer engagement.
    		</font>			
    	</div>
    	
    	<div id="middle_B_L_space" style="height:200px;width:20px;float:left;"></div>	
    
    	<div id="middle_B_M" style="background-color:#ffffff;height:200px;width:305px;float:left;">
    		<div id="middle_B_M_top" style="background-color:#909090;height:80px;width:305px;">
    			<font color="ffffff  " style="font-family:Lato;font-size:140%;float:left;margin:10px 20px 10px 20px;text-align:left;font-weight:normal;">
    			    What's all the Buzz about Social Analytics Anyways?
    			</font>
    		</div>
    		

	
		    <div id="blog_area" style="width:350px;height:150px;">
				<div  style="background-color:#ffffff;height:110px;width:130px;float:left;padding:9px 0px 0px 0px;">
					<div class="circular"></div>
				</div>
				
				<div id="blog_title" style="background-color:#ffffff;height:120px;width:170px;float:left;">
				
					<font color="585858   " style="font-family:Lato;font-size:120%;float:left;margin:10px;font-weight:normal;">			
						Reversing Virtual Reality Realization of Our...			
					</font>	
				
				
					<a id= "blog" href="https://www.pathgeo.com/?p=165"><b><font color="36c8ea  " style="font-family:Lato;font-size:130%;float:right;margin:10px;font-weight:normal;">			
						Read On >				
					</font>	
				
				</div>
		    </div>
		    	
			

			<!--<div class="circular"></div>-->
		
    	</div>	
    
    	<div id="middle_B_M_space" style="height:200px;width:20px;float:left;"></div>	
    
    	<div id="middle_B_R" style="background-color:#ffffff;height:200px;width:305px;float:left;">
    		<div id="middle_B_R_top" style="background-color:#909090;height:80px;width:305px;">
    			<font color="ffffff  " style="font-family:Lato;font-size:140%;float:left;margin:10px 20px 10px 20px;text-align:left;font-weight:normal;">
    			    Need Something Custom? In-Depth Analytics? We can help!
    			</font>
    		</div>

			<div style="margin:10px 18px 0px 18px">
    		<span><font color="585858   " style="font-family:Lato;font-size:130%;float:left;margin:3px;font-weight:normal;">			
    			Learn about our
    		</font></span>	
    		<span><font color="FF6600   " style="font-family:Lato;font-size:130%;float:left;margin:3px;font-weight:normal;">			
    			Geo-Targeting
    		</font></span>
    		<span><font color="FF6600   " style="font-family:Lato;font-size:130%;float:left;margin:3px;font-weight:normal;">			
    			API's 
    		</font></span>			
    		<span><font color="585858   " style="font-family:Lato;font-size:130%;float:left;margin:3px;font-weight:normal;">			
    			& 
    		</font></span>	
    		<span><font color="FF6600   " style="font-family:Lato;font-size:130%;float:left;margin:3px;font-weight:normal;">			
    			Social Media Analytics
    		</font></span>
    		<span><font color="FF6600   " style="font-family:Lato;font-size:130%;float:left;margin:3px;font-weight:normal;">			
    			 Reports
    		</font></span>
				<span><a id= "blog" href="https://www.pathgeo.com/?page_id=106"><b><font color="36c8ea  " style="font-family:Lato;font-size:130%;float:right;margin:10px;font-weight:normal;">			
					Read On >				
				</font></span>				
			</div>	
		
    	</div>	
    
    </div>
</div>   

	
<!-- end of #featured -->
               
	<?php 
	get_sidebar('home');
	get_footer(); 
}
?>