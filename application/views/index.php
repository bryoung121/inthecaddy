<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<?php $this->load->view('header'); ?>
<title>InTheCaddy In The Caddy</title>
<meta name="description" content="YouTube companion site for InTheCaddy youtube channel, blogging for my vlogging. General conversation about family and life. Posts and news is generic and poosted weekly.">
</head>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
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
    <header class="intro-header" style="background-image: url('img/inthecaddy_header.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>InTheCaddy</h1>
                        <hr class="small">
                        <span class="subheading">InTheCaddy Frame of Mind</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
          <div class="row">
			<div class="col-sm-6">
				<?php
				$count = 0;

					foreach($blogs as $row):
						if ($count <= 2)
						{
							echo "<div class='post-preview'><a href='/post?blogid=" . $row['blogid'] . "'>";
							echo "<h2 class='post-title'>" . $row['blog_title'] . "</h2>";
							echo "<h3 class='post-subtitle'>" . substr($row['blog_text'], 0, 100) . " ....</h3></a>";
							echo "<p class='post-meta'>Posted by <a href='mailto:inthecaddy@gmail.com'>InTheCaddy</a> on ". $row['dtcreated'] . "</p>";
							echo "</div><hr>";
							$count++;
						}else
						{$count++;}
					endforeach

				?>
            </div>
            <div class="col-sm-6">
			Previous Blogs
            <table id="example" class="display" cellspacing="0" width="100%">
			<thead>
            <tr>
                <th>Date</th>
                <th>Title</th>
            </tr>
        </thead>
			<?php
			$count = 0;
					foreach($blogs as $row):
						if ($count > 3)
						{
							echo "<tr>";
							echo "<td>" . $row['dtcreated'] . "</td>";
							echo "<td><a href='/post?blogid=" . $row['blogid'] . "'>" .$row['blog_title'] . "</a></td>";
							echo "</tr>";
							$count++;
						}else
						{$count++;}
					endforeach
			?>

			</table>
            </div>
          </div>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- inthecaddy-leaderboard -->
			<ins class="adsbygoogle"
				 style="display:inline-block;width:728px;height:90px"
				 data-ad-client="ca-pub-9407949770682588"
				 data-ad-slot="1963444017"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
                <!-- Pager
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul> -->

            </div>
    <hr>

	<?php $this->load->view('footer'); ?>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
