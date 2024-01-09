<h1>
<?php echo 'แม่สูตรคูณ Online ' ?>
</h1>

<form method="post" action="/myD">
         @csrf
        <label for="fname">ใส่ตัวเลข:</label><br>
        <input type="text" name="myinput" >
        <button type="submit">Submit</button>
     
</form>