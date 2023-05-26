<?php include 'header.php'; ?>
<div>
    <h2>Add New Admission</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" required/>
        </div>
        <div class="form-group">
            <label>10 mark</label>
            <input type="text" name="s10" required/>
        </div>
        <div class="form-group">
            <label>12 mark</label>
            <input type="text" name="s12" required/>
        </div>
        <div class="form-group">
            <label>department</label>
            <input type="text" name="department" required/>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
