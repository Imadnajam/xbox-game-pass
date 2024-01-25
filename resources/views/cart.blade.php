<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.frontend.headLinks')
</head>

<body id="top">


    @include('components.frontend.homeHeader')






    <!--
    - #FOOTER
  -->

    @include('components.frontend.footer')





    <!--
    - custom js link
  -->
    <script src="{{asset('home/js/script.js')}}"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



</body>

</html>
