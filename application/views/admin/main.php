<html>
<head>
</head>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">
 $(function() {
	$("#btnSaveUpdate").click(function() {
		SaveBlog();
	});
});
function SaveBlog()
{
		var myDataObject = {
				txtBlogTitle: document.getElementById('txtBlogTitle').value,
				txtBlog:document.getElementById('txtBlog').value
				};
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>admin/main/addblog/",
			data: myDataObject,
			async: false,
			success: function(){
			alert("New Blog Posted");
			}
		});
}
</script>
<body>
<p>Admin Main Page</p>
<?php echo validation_errors('<div class="message errormsg"><p>', '</p></div>'); 
$attributes = array('id' => 'newblog', 'name' => 'newblog');
echo form_open('admin/main/addblog/', $attributes);
 ?>
	<table>
		<tr>
			<td>Blog Title:</td>
			<td><input type="text" id="txtBlogTitle" name="txtBlogTitle"></td>
		</tr>
		<tr>
			<td>Text:</td>
			<td><textarea id="txtBlog" name="txtBlog" cols="50" rows="20"></textarea></td>
		</tr>
		<tr>
			<td colspan="2">
			<input type="button" name="btnSaveUpdate" id="btnSaveUpdate" value="Save">
			</td>
		</tr>
	</table>
</form>

</body>
</html>
