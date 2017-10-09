<html>
<body>
<form action='insertblog.php' method='post' >
    <input type='hidden' name='postID' value='<?php echo $row['postID'];?>'>

    <p><label>Title</label><br />
    <input type='text' name='postTitle' value='<?php echo $row['postTitle'];?>'></p>

    <p><label>Description</label><br />
    <textarea name='postDesc' cols='60' rows='10'><?php echo $row['postDesc'];?></textarea></p>

    <p><label>Content</label><br />
    <textarea name='postCont' cols='60' rows='10'><?php echo $row['postCont'];?></textarea></p>

    <p><input type='submit' name='submit' value='Add'></p>

</form>
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
</script>
</body>
</html>