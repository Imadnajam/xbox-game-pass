<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Game Pass | Xbox</title>

<!--
- favicon link
-->
<link rel="shortcut icon" href="./assets/images/logo.svg" type="image/svg+xml">

<!--
- custom css link
-->
<link rel="stylesheet" href="{{ asset('home/css/style.css') }}">

<!--
- google font link

-->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&display=swap"
    rel="stylesheet">

    <style>
        .pagination {
            color: white;
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
        }
    
        .pagination li {
            margin: 0 5px;
            display: inline-block;
        }
    
        .pagination a, .pagination span {
            padding: 8px 12px;
            border: 1px solid #ccc;
            text-decoration: none;
            color: #333;
            border-radius: 4px;
        }
    
        .pagination .active span {
            background-color: #0e7a0d;
            color: #fff;
        }
    
        .pagination a:hover {
            background-color: #f0f0f0;
        }
    </style>