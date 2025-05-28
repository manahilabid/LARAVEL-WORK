<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
</head>
<body>
    <h1>welcome to the form</h1>    
    <section class="container">
        <div class="row ">
            <div class="col-6">
                <h1>fill this form </h1>
               <center>
                 <form method="post" action="{{Route('formsubmitted')}}">
                    @csrf
                    <input type="name" placeholder="enter your name" name="name" class=" form-control mb-3">
                    <input type="email" placeholder="enter your email" name="email" class=" form-control mb-3">
                    <input type="number" placeholder="enter your number" name="number" class=" form-control mb-3">
                    <input type="address" placeholder="enter your address" name="address" class=" form-control mb-3">
                    <button class="btn btn-dark w-100">submit</button>
                </form>

               </center>
            </div>
        </div>
    </section>
</body>
</html>