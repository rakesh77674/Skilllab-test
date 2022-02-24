<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skill lab test</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    
	<div class="container">
	<h2>Select the modules</h2>
	<form>
        <div class="form-group">
            <label for="exampleInputEmail1">LectureName</label>
            <input type="name" class="form-control" id="lecturename"  placeholder="lecturename">
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Gender</label>
        <select id="state" class="form-control" >
			<option value="">Male</option>
            <option value="">FeMale</option>
            <option value="">Others</option>
		</select>
    </div>
          <div class="form-group">
            <label for="exampleInputEmail1">LectureName</label>
            <input type="name" class="form-control" id="lecturename"  placeholder="lecturename">
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            
          </div>
        <div class="form-group">
            <label for="exampleInputPhone">Phone</label>
            <input type="number" class="form-control" id="phone"  placeholder="Enter phone">
          </div>
          <div class="form-group">
            <label for="exampleInputAddress">Address</label>
            <input type="name" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nationalitiy</label>
            <select id="state" class="form-control" >
                <option value="">Nepali</option>
                <option value="">English</option>
                <option value="">Hindi</option>
            </select>
        </div>
        <div class="form-group">
            <label for="birthday">DOB:</label>
           <input type="date" id="dob" name="dob">
        </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
         

		<div class="form-group">
		<select id="country" class="form-control" >
			<option value="">Select Faculty</option>
			{{-- @foreach($country as $list) --}}
				<option value=""></option>
			{{-- @endforeach --}}
		</select>
		
		<br/>
		<select id="state" class="form-control" >
			<option value="">Select modules</option>
		</select>
		<br/>
		</div>
	  </form>
      <button type="submit" class="btn btn-primary">Submit</button>
	</div>
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>

        <script>
            jQuery(document).ready(function(){
                jQuery('#country').change(function(){
                    let cid=jQuery(this).val();
                    jQuery('#city').html('<option value="">Select City</option>')
                    jQuery.ajax({
                        url:'/getState',
                        type:'post',
                        data:'cid='+cid+'&_token={{csrf_token()}}',
                        success:function(result){
                            jQuery('#state').html(result)
                        }
                    });
                });
                
                jQuery('#state').change(function(){
                    let sid=jQuery(this).val();
                    jQuery.ajax({
                        url:'/getCity',
                        type:'post',
                        data:'sid='+sid+'&_token={{csrf_token()}}',
                        success:function(result){
                            jQuery('#city').html(result)
                        }
                    });
                });
                
            });
                
            </script> --}}
</body>
</html>