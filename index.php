<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Location Populator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
    
    <section id="form">
        <div class="container">
            <div class="row">
                <form action="process.php" method="post" id="locations-form" name="locations-form">
					<div id="form-fields">
						<div class="form-group">
							<h2>Location LOCATIONID</h2>
							<p>
								<label for="name">Location Name:</label>
								<input type="text" class="form-control" name="location[LOCATIONID][location-name]" placeholder="Location Name">
							</p>
							<p>
								<label for="lat">Latitude:</label>
								<input type="text" class="form-control"  name="location[LOCATIONID][lat]" placeholder="Latitude">
							</p>
							<p>
								<label for="long">Longitude:</label>
								<input type="text" class="form-control" name="location[LOCATIONID][long]" placeholder="Longitude">
							</p>
							<p>
								<label for="html">HTML Contents:</label>
								<textarea name="location[LOCATIONID][html]" class="form-control" cols="30" rows="10" placeholder="Place html content inside here. This will display when the location is clicked on in a tooltip window.  "></textarea>
							</p>
						</div>
					</div>
                    <p>
						<button class="btn btn-primary addField">Add Field</button>    <button type="submit" class="btn btn-primary">Submit</button>
                    </p>
                </form>
            </div>
        </div>
    </section>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			
			var fieldHtml = jQuery('#form-fields').html();
			var fieldId = 1;
			var tmpField = fieldHtml;
			tmpField = tmpField.replace(/LOCATIONID/g, fieldId);
			jQuery('#form-fields').html(tmpField);
			
			jQuery('.addField').click(function(e){
				e.preventDefault();
				fieldId = fieldId+1;
				var tmpField = fieldHtml;
				tmpField = tmpField.replace(/LOCATIONID/g, fieldId);
				jQuery('#form-fields').append(tmpField);
			});
		
		});
	</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    
</body>
</html>