<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smuti Smoothie</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
{{View::make('header')}}
@yield('content')
{{View::make('footer')}}    

</body>

<!--<script>
$(document).ready(function()
{

$("button").click(function()
{
    alert("Sacuvali ste Vaše podatke")
})
})
</script>-->

    <style> 
.custom-login{

height: 500px;
padding-top: 150px;
}

img.slider-img{

    height: 400px !important
}


.custom-product{

height: 700px;
}

.slider-text{

   color: #F52887 !important
}

.najtrazeniji-slike{

    height: 100px;
   
}

.najtrazeniji-proizvod{

    float: left;
    weight: 40%;
}

.najtrazeniji-proizvodi{
margin: 30px;

}


.opis-slike{

    height: 200px;
}

.pretraga-polje{

    width: 500px !important
}

.korpa-lista{

border-bottom: 1px solid #ccc;
margin-bottom: 20px;
padding-bottom: 20px;

}


</style>
</html>