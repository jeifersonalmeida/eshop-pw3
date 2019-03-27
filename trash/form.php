<style>
    
    input[type=text] {
        width: 100%;
        /*padding: 5px;*/
    }
    input[type=number] {
        width: 20%;
        /*padding: 5px;*/
    }
    input[type=url] {
        width: 126%;
        /*padding: 5px;*/
    }
    label, input[type=submit] {
        margin: 10px;
    }
</style>
<!-- section -->
<div class="section">
		<!-- container -->
		<div class="container">
            <form action="http://localhost/WP2/9%20template%20puro/Logic/addToCart.php" method="POST">
			<!-- row -->
			<div class="row">
                <h2 style="text-align:center">Add item</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="Name">Name</label><br/>
                    <input type="text" class="form-control" name="Name" placeholder="Name" required>
                </div>
                <div class="col-md-6">
                    <label for="Price">Price</label><br/>
                    <input type="number" class="form-control" name="Price" placeholder="Price" min="0" step="any" required>
                </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                <label for="Link">Image Link</label><br/>
                <input type="url" class="form-control" name="Link" placeholder="URL" required>
            </div>
            </div>
            <div class="row">
                <input type="submit" class="btn btn-primary" name="Submit" value="Add" id="sub">
            </div>
            <!-- /row -->
            </form>
		</div>
		<!-- /container -->
	</div>
    <!-- /section -->