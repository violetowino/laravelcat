
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEIGHBOURS' PARKING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/main.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    {{-- <style>
        *{
          font-family: 'Poppins', sans-serif;
          background:"";
        }
        .h-font{
            font-family: 'Merienda', cursive;
        }
        .custom-bg{
          background-color: #f92770;
        }
        .custom-bg:hover{
          background-color: #f927715b;
        }

         /*---about....*/
         
        #about-2{
            background-color: antiquewhite;
        }
        .about-item {
            margin-bottom: 20px;
            margin-top: 20px;
            background-color: aliceblue;
            padding: 80px 30px;
            box-shadow: 0 0 9px black;
        }
        .about-item i{
            font-size: 50px;
            margin: 0;
        }
        .about-item h2 {
            font-size: 28px;
            margin-bottom: 10px;
            color: brown;
        }
        .about-item hr {
            width: 70px;
            height: 3px;
            background-color: blue;
            border: none;
            margin: auto;
        }
        .about-item p{
            margin-top: 22px;
        }
        .about-item:hover {
            background-color: aqua;
            cursor: pointer;
        }
        .about-item:hover i,
        .about-item:hover h2,
        .about-item:hover hr {
            transition: 500ms ease-in-out;
        }
        .about-item:hover i{
            transform: translateY(-25px);
        }
        footer {
            background: black;
            color: whitesmoke;
            padding: 20px;
        }
        /* .card-body i{
            font-size: 50px;
            margin: 0;
        } */

         /*.... contact us....*/

         .containers {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 15px;
        }
        .containers .contactInfo {
            width: 50%;
            display: flex;
            flex-direction: column;
        }
        .containers .contactInfo .box {
            position: relative;
            padding: 12px 0;
            display: flex;
        }
        .containers .contactInfo .icon {
            min-width: 60px;
            height: 60px;
            background: lightblue;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            font-size: 15px;
        }
        .containers .contactInfo .box .text {
            display: flex;
            margin-left: 20px;
            font-size: 14px;
            color: black;
            flex-direction: column;
            font-weight: 300;
        }
        .containers .contactInfo .box .text h5{
            font-weight: 100;
            color: brown;
        }
        .itemm {
            background-color: blanchedalmond;
        }
        h5{
            font-weight: 100;
            color: brown;
        }
    </style> --}}

</head>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
        
            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
        
            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
        
            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break; 
        }
    @endif 
</script>
