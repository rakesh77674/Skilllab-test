<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skill lab test</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
  </head>
  <body style="background:#e8e8e8">
    
    <div class="container">
        <h2>Fill The Form</h2>
            <form method ="POST" action="{{url('addmodule')}}">
                @csrf
              <div class="form-group">
                    <label for="exampleInputEmail1">LectureName</label>
                    <input type="text" name = "LectureName" class="form-control" id="Lecturename"  placeholder="lecturename">
                </div>
                <div class="form-group">
                   <label for="exampleInputGender">Gender</label>
                    <select id="gender" name = "Gender" class="form-control" >
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="Others">Others</option>
                     </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPhone">Phone</label>
                    <input type="number" name = "phone" class="form-control" id="phone"  placeholder="Enter phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputAddress">Address</label>
                    <input type="name" class="form-control" name = "Address" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                       <label for="exampleInputNationality">Nationalitiy</label>
                        <select id="nationality" name = "Nationality" class="form-control" >
                        <option value="nepali">Nepali</option>
                        <option value="English">English</option>
                        <option value="Hindi">Hindi</option>
                     </select>
                </div>
                <div class="form-group">
                    <label for="birthday">DOB:</label>
                    <input type="date" id="dob" name="DOB">
                </div>  
                <div class="form-group">
                    <label for="Faculty">Faculty</label>
                    <select id="faculty" name ="faculties_id" class="form-control" >
                    <option value="">Select Faculty</option>
                     @foreach($data as $data)
                    <option value="{{ $data->id}}">{{ $data->faculty}}</option>
                     @endforeach

                     </select>
                     <br/>
                     <label for="Faculty">Module</label>
                     <select id="module" name= "modules_id" class="form-control" >
                        <option value="">Select Module</option>
                     </select>
                     <br/>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
    </div>
        <script>
            jQuery(document).ready(function(){
              jQuery('#faculty').change(function(){
                     let cid=jQuery(this).val();
                     jQuery('#module').html('<option value="">Select Module</option>')
                     jQuery.ajax({
                        url:'/getmodule',//url given in request
                         type:'post',
                         data:'cid='+cid+'&_token={{csrf_token()}}',
                         success:function(result){
                             jQuery('#module').html(result);
                        }
                      });
                    });
                });    
        </script> 
</body>
</html>