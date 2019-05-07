<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<?php $this->load->view('header'); ?>
        <div class="container">
            <hr>
			<div style=" margin-top: 3px;">
			<h1>Welcome to InTheCaddy</h1>
			<div style="border-top: 2px solid black;border-bottom: 2px solid black;border-left: 20px solid black;border-right: 20px solid black;">
			<table width = "90%">
				<tr>
					<td cellpadding="10px"><img src="<?php echo base_url()?>img/escalade.png" width="350px" alt="IntheCaddy Escalade"/>
					</td>
					<td><a class="twitter-timeline" data-dnt="true" href="https://twitter.com/InTheCaddy" data-widget-id="517670373026852864">Tweets by @InTheCaddy</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</td>
				</tr>
			</table>
			</div>
			</div>
			<div id="Blog" style="float:left;">
			<?php
			
			foreach($blogs as $row):
				echo "<b>" . $row['blog_title'] . "</b><br>";
				echo "<p>" . $row['blog_text'] . "</p><br>";
			endforeach;
			?>
			</div>
			</div>
			<div id="Blog" style="float:right;">
			
		</div> <!-- /container -->
		<BR><BR>

			<?php $this->load->view('footer'); ?> 

      </body>
</html>