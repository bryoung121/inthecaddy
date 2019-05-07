<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('header'); ?>

<?php foreach($blogs['blogdetails'] as $row):?>
	<title><?php echo $row['blog_title'] ?></title>
	<meta name="description" content="<?php echo $row['blog_text'] ?> ">
<?php endforeach;?>

</head>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">
 $(function() {
	$("#btnSubComment").click(function() {
		SaveComment();
	});
});
function SaveComment()
{
		var myDataObject = {
				hidblogid:<?php echo($this->input->get('blogid', TRUE)); ?>,
				txtEmail: document.getElementById('txtEmail').value,
				txtDisplayName:document.getElementById('txtDisplayName').value,
				txtComment:document.getElementById('txtComment').value
				};
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>index.php/post/addcomment/",
			data: myDataObject,
			async: false,
			success: function(){
			alert("New Comment Posted");
			}
		});
}
</script>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">InTheCaddy</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/about">About</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('../img/inthecaddy_header.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
					<?php foreach($blogs['blogdetails'] as $row):?>

                        <h1><?php echo $row['blog_title'] ?></h1>
                        <h2 class="subheading"></h2>
                        <span class="meta">Posted by <a href="#">InTheCaddy</a> on <?php echo $row['dtcreated'] ?></span>
					<?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<?php foreach($blogs['blogdetails'] as $row):?>
                    <?php echo $row['blog_text']?>
				<?php endforeach;?>

                </div>
            </div>
        </div>
    </article>
	 <div class="container">
		Add Comments
		<table>
			<tr>
				<td>Email:(Not shown)</td>
				<td><input type="text" name="txtEmail" id="txtEmail"></td>
			</tr>
			<tr>
				<td>Display Name:</td>
				<td><input type="text" name="txtDisplayName" id="txtDisplayName"></td>
			</tr>
			<tr>
				<td>Comment:</td>
				<td><textarea name="txtComment" id="txtComment" cols="50" rows="4"></textarea></td>
			</tr>
			<tr>
				<td><input type="button" id="btnSubComment" name="btnSubComment" value="Submit"></td>
			</tr>
		</table>
		View Comments
			<table>

			<?php foreach($blogs['comments'] as $row2):?>
				<?php

						echo "<tr><td><hr>Posted On " . $row2['dtim_created'] . "</td></tr>";
						echo "<tr><td>by " . $row2['displayName'] . "</td></tr>";
						echo "<tr><td>" . $row2['blog_comment'] . "</td></tr>";
				?>
				<?php endforeach;?>
			</table>
	</div>
				<hr>


			<?php $this->load->view('footer'); ?>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="../js/clean-blog.min.js"></script>

</body>

</html>
