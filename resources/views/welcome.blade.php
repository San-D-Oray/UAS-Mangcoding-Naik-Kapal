

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <style type="text/tailwindcss">
    @layer utilities {
      .container {
        @apply max-w-[90%] mx-auto;
      }

      .btn {
        @apply bg-[#212121] text-white px-5 py-3 text-center;
      }  

      .btn.rounded {
        @apply rounded-full;
      }

      .home::before {
        /* content: url("./assets/scratch.svg");
        position: absolute;
        bottom: -18px; */
      }

      .active {
        @apply block;
      }
    }
  </style>
  <title>Mangcoding Naik Kapal</title>
</head>
<!-- Body Awal Header -->
<body>
  <header class="">
    <nav class="container relative flex py-5 items-center justify-between lg:mx-20 md:mx-10 mx-8">
        <div>
          <a href="#" class="text-logo font-logo text-[1.5rem] font-bold ">Naik.<span class="text-white">kapal</span></a>
        </div>
        <ul
          class="ml-auto lg:flex lg:space-x-8 lg:space-y-0 text-white lg:items-center lg:z-auto lg:static lg:bg-transparent lg:h-0 lg:w-auto lg:pl-0 lg:opacity-100 space-x-0 space-y-8 z-10 absolute bg-white/20 backdrop-blur-md w-full py-10 lg:py-0 text-[1.2rem] lg:text-[1rem] px-7 opacity-0 top-[-400px] transition-all ease-in duration-500 left-0">
          <li class="list-none">
            <a href="home.html" class="hover:text-button">Home</a>
          </li>
          <li class="list-none">
            <a href="home.html" class="hover:text-button">Destination</a>
          </li>
          <li class="list-none">
            <a href="home.html" class="hover:text-button">Choose Class</a>
          </li>
          <li class="list-none">
            <a href="#" class="hover:text-button">Manage</a>
          </li>
          <li class="list-none">
            <a href="#" class="hover:text-button">About Us</a>
          </li>
          <div class="lg:flex block lg:items-center lg:pl-10 space-x-8">
          @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
            @endif
          </div>
        </ul>
        <div id="toggle" class="text-white text-[2rem] lg:hidden absolute right-10 mt-2">
          <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </div>
      </nav>
  </header>
  <!-- Akhiran Header -->
    <!-- Bagian hero -->
    <section>

      <div class="hero-section md:mt-[-110px] mt-[-100px] mb-40 w-full h-[80vh] z-[-20] relative"
      style="background: url('./assets/bg-hero.jpeg'); background-position: center; background-size: cover;">
      <div class="w-full h-[80vh] absolute top-0 left-0"
      style="background: linear-gradient(90deg, #000000 -46.92%, rgba(0, 0, 0, 0) 100%)"></div>
      <div class="content py-[16rem] lg:mx-20 mx-8 font-content text-white relative z-30 space-y-6">
        <h1 data-aos="fade-up"
        data-aos-duration="1000" class="text-[2.5rem] md:text-[3rem] font-bold lg:w-[40%] md:w-[60%] w-[95%]">Let's explore the World with us
      </h1>
      <p data-aos="fade-up"
      data-aos-duration="1200" class="text-[.9rem] text-[#d8d8d8] md:w-[40%] lg:w-[30%]">Lorem ipsum dolor sit amet, consectetur adipiscing
      elit.
      Vestibulum in purus eget tellus aliquam egestas.</p> 
      <button class=" px-5 py-3 bg-[#8992FA] hover:bg-[#FFD31D]">Sign Up</button>
            </div>
          </div>
</section>

      <!-- akhir bagian hero -->

      <section class=" relative w-full h-[1450px] lg:h-[1100px] md:h-[1100px] xl:h-[800px] ">
        <div class="py-10 md:py-20 ">
          <h3 class="text-sm ml-12 lg:ml-10 xl:ml-0  text-[#FFD31D] xl:px-20 ">JUST FOR THOSE WHO USE US</h3>
          <h1 class="ml-10 lg:ml-10 xl:ml-0 text-2xl py-3 font-bold -tracking-tight md:text-3xl xl:px-20 md:py-3">Some advantages for <br>You to Choose our <br>flights</h1>
          <p class=" py-3 text-[#969696] text-sm ml-3 lg:ml-0 xl:px-20 md:px-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi <br>pretium facilisis mollis. Donec nec auctor tortor. In varius <br>ipsum sit amet elit congue, mattis bibendum nibh feugiat.</p>
          <img src="./assets/smoke.png" alt="" class="absolute ml-48 lg:ml-0 lg:px-20 md:py-3">
          <h1 class="relative ml-12  lg:ml-36 md:mt-3">Wicaksana.Adi</h1>
          <p class="relative text-xs text-[#969696] ml-12 lg:ml-36 md:mt-0">UI/UX Designer</p>
        </div>
        <div class="flex">
        <div class="py-5 ">
          <h1 class="relative text-3xl md:text-4xl font-bold text-[#8992FA] ml-14 lg:ml-40">+2,000</h1>
          <p class="text-xs relative left-10 px-9 lg:left-36 md:ml-4  py-2">App user</p>
        </div>
        <div class="py-5 ">
          <h1 class="relative text-3xl md:text-4xl font-bold text-[#8992FA] ml-10">+2,000</h1>
          <p class="text-xs relative ml-14 md:ml-16 py-2">App user</p>
        </div>
      </div>

      <div class="absolute ml-7 mt-7 w-[200px] h-[250px] md:ml-0 md:top-14  md:left-[55%] md:w-[290px] md:h-[288px] lg:left-[43%] border-solid border-2 border-indigo-600 rounded-2xl">
        <div class="relative -top-4 left-4  w-[200px] h-[250px] bg-white md:w-[290px] md:h-[288px] rounded-2xl shadow-lg ">
        <img src="./assets/hero.png" alt="" class="px-5 pt-7 md:pt-14">
        <h1 class="md:text-2xl font-bold px-5 py-5">Guaranteed Safety</h1>
        <p class="text-sm px-5 md:tracking-wider text-[#969696]">Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit. Morbi<br> pretium facilisis mollis. </p>
      </div>

      <div class="absolute mt-8 md:mt-12 w-[200px] h-[250px] md:w-[290px] md:h-[288px] border-solid border-2 border-indigo-600 rounded-2xl">
        <div class="relative -top-4 left-4 w-[200px] h-[250px] bg-white md:w-[290px] md:h-[288px] rounded-2xl shadow-lg">
          <img src="./assets/tiket.png" alt="" class="px-5 pt-7 md:pt-14">
          <h1 class=" md:text-2xl font-bold px-5 py-5">Easy transaction</h1>
          <p class="text-sm px-5 md:tracking-wider text-[#969696]">Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit. Morbi<br> pretium facilisis mollis.</p>
        </div>

      </div>
      <div class="absolute w-[200px] h-[250px]  mt-80 md:mt-0 md:w-[290px] md:h-[288px] xl:left-[120%]  xl:top-40 lg:top-[240%] md:top-[240%]  border-solid border-2 border-indigo-600 rounded-2xl">
        <div class="relative -top-4 left-4 w-[200px] h-[250px] bg-white md:w-[290px] md:h-[288px] rounded-2xl shadow-lg">
          <img src="./assets/pohon.png" alt="" class="px-5 pt-7 md:pt-14">
          <h1 class=" md:text-2xl font-bold px-5 py-5">Many Destination</h1>
          <p class="text-sm px-5 md:tracking-wider text-[#969696]">Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit. Morbi<br> pretium facilisis mollis.</p>
        </div>
      </div>
    </div>

      </section>

  <!-- Section 2 -->

  <section class="w-full h-[1300px]  md:h-[550px] lg:h-[590px] bg-white">
    <div class="md:flex lg:flex">

      <div class=" absolute left-4 mt-10 lg:mt-20 md:left-10 w-[250px] h-[400px]  lg:w-[350px] lg:h-[430px] lg:left-10 xl:w-[430px] xl:h-[430px] xl:left-24 shadow-xl bg-white">
        <h1 class="font-bold lg:text-2xl md:text-xl lg:px-5 px-3 pt-4">Progress in our application</h1>
        <img src="./assets/Vector2.png" alt="" class="pt-3 px-3 lg:px-5 ">
        <p class="text-sm lg:text-base text-[#969696] pt-3 lg:pt-4 lg:px-5 px-3 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pretium facilisis mollis. Donec nec auctor tortor. In varius ipsum sit amet elit congue, mattis bibendum nibh feugiat.</p>

        <h1 class="font-bold lg:text-xl text-sm pt-4 px-3 lg:px-5 lg:pt-7 pb-3 lg:pb-3 xl:pb-4">Progress in our application</h1>
        <div class="absolute bg-[#BFC4FF] w-56 lg:w-80 xl:w-96  h-3 ml-3 rounded-lg lg:ml-5 ">
          <div class="absolute bg-[#8992FA] w-44 lg:w-60 xl:w-72 h-3 rounded-lg " > </div>
          <div class="abosulte bg-[#8992FA] w-2 h-2 mt-4 rounded-full ml-[170px] lg:ml-[232px] xl:ml-[280px]">
            <p class="text-sm pt-2">85%</p>
          </div>
        </div>

        <div class="flex mt-20 px-3 md:mt-12 md:px-2 xl:mt-20 ">
          <img src="./assets/model1.png" alt="" class="absolute ml-2">
          <img src="./assets/model2.png" alt="" class="relative ml-5">
          <img src="./assets/model3.png" alt="" class="absolute ml-9">
          <p class="absolute text-sm ml-20 text-[#969696] mt-2">+ 12 People </p>
        </div>

        
      </div>
      
      <div class="absolute  w-[190px] h-[190px] mt-[448px] left-9 md:mt-10 md:left-[300px] lg:w-[233px] lg:h-[237px] lg:left-[400px] lg:mt-10 xl:left-[500px] bg-white shadow-sm">
        <div>
          <img src="./assets/Group 1801.png" alt="" class="absolute mt-3 ml-1 lg:ml-[24px] xl:ml-[24px] -top-0.5 xl:-top-0.5 xl:mt-4">
          <img src="./assets/Ellipse1.png" alt="" class="absolute ml-[13px] lg:ml-[34px] xl:ml-[34px]">
          <img src="./assets/Ellipse2.png" alt="" class="mx-auto mt-5 xl:mt-7 ">
          <h1 class="absolute font-bold ml-20 -top-2 mt-20 lg:ml-[105px] xl:ml-[105px] xl:mt-24">85%</h1>
        </div>
        <div>
          <h1 class="text-center font-semibold mt-5 xl:mt-10 ">Progress <br>Application</h1>
        </div>
      </div>
      <div class="absolute  w-[190px] h-[190px] mt-[640px] left-9 md:h-[230px] md:mt-72 md:left-[300px]  lg:w-[233px] lg:h-[240px] lg:left-[400px] lg:mt-[320px] xl:left-[500px] bg-white">
        <div>
          <img src="./assets/Ellipse 14.png" alt="" class="absolute ml-[10px] lg:ml-[31px] xl:ml-[31px]">
          <img src="./assets/Ellipse 13.png" alt="" class="mx-auto mt-2">
          <h1 class="relative -top-[95px] ml-[80px] xl:-top-[98px] lg:ml-[105px] xl:ml-[105px] font-bold">80%</h1>
          
        </div>
        <div>
          <h1 class="text-center font-semibold">People View</h1>
        </div> 
      </div>

      <div class="absolute left-4 w-[250px] mt-[840px] h-[400px] md:mt-10 md:left-[500px] lg:mt-20 lg:w-[350px] lg:h-[440px] lg:left-[647px] xl:w-[460px] xl:h-[440px] xl:left-[780px] bg-white">
        <div>
          <h3 class="text-[#FFD31D] text-xs ml-5 pt-5 lg:text-base ">JUST FOR THOSE WHO USE US</h3>
          <h1 class="font-bold text-lg ml-5 pt-2 lg:text-2xl xl:text-3xl">Progress in our <br>Application</h1>
          <p class="text-sm text-[#969696] pt-3 px-5 lg:pt-5 xl:pt-6 lg:text-base" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pretium facilisis mollis. Donec nec auctor tortor. In varius ipsum sit amet elit congue, mattis bibendum nibh feugiat.</p>
          
        </div>
        <div class="lg:flex absolute xl:pt-5 ">
          <div class="ml-5 pt-5">
            <h2 class="text-2xl font-bold text-[#8992FA] xl:text-4xl xl:font-bold">+2,000</h2>
          <p class="text-xs ml-3 xl:ml-8 xl:pt-3 text-[#969696]">App user</p>
          </div>
          <div class=" absolute ml-36 lg:ml-40 xl:ml-40 xl:px-3 -top-[1px] pt-5 xl:top-5 ">
            <h2 class="text-2xl font-bold text-[#8992FA] xl:text-4xl xl:font-bold">+2,000</h2>
          <p class="text-xs ml-3  xl:ml-8 xl:pt-3 text-[#969696]">App user</p>
          </div>
          <div class="ml-20 lg:ml-48 lg:pt-5">
            <h2 class="text-2xl font-bold text-[#8992FA] xl:text-4xl xl:font-bold">+2,000</h2>
          <p class="text-xs ml-3  xl:ml-8 xl:pt-3 text-[#969696]">App user</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 2 end -->
    


  
  <!--Awal section-->
<section class="banner container relative mt-5 mb-20 bg-[#EFF0FF] min-h-[300px] items-center justify-center">
  <div class="flex text-center justify-center flex-col space-y-3 relative z-40 p-6">
    <h2 class="text-x1 text-yellow-500">JUST FOR THOSE WHO USE US</h2>
    <h3 class="text-3xl font-bold text-center">Progres In Our Application</h3>
    <p class="text-gray-500 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pretium facilisis mollis.</p>
    <a href="#" class=" py-2 px-5 rounded-sm">
      <button class=" px-5 py-3 bg-[#8992FA] hover:bg-[#FFD31D]">Sign Up</button></a>
  </div>
</section>
<!--Akhir section-->

<!--Awal Coments-->
<section class="w-full h-[1500px] md:h-[118vh] xl:h-[110vh] ">
  <div class="text-center pt-10 md:pt-20">
    <h3 class="text-sm text-[#FFD31D] pb-5">JUST FOR THOSE WHO USE US</h3>
    <h1 class="text-2xl md:text-3xl font-bold">Comments on this App</h1>
  </div>
  <div class=" md:flex justify-center items-center ml-2 md:ml-0 pt-10 gap-2 md:gap-8">
    <div class="w-[325px] h-[400px]  bg-white shadow-lg rounded-lg pt-4  md:pt-6">
      <img src="assets/Thomas.png" alt="" class="mx-auto">
      <h1 class="text-center pt-3 font-bold md:pt-5 md:text-2xl">Thomas Alfabeth</h1>
      <p class="text-xs text-center pt-1 text-[#969696] md:pt-2 md:text-sm">UI / UX Designer</p>
      <p class="text-xs md:text-sm sm:text-xs text-center pt-2 tracking-wide md:pt-4"> Lorem ipsum dolor sit amet, consectetur <br>adipiscing elit. Morbi pretium facilisis mollis.<br> Donec nec auctor tortor. In varius ipsum sit<br> amet elit congue, mattis bibendum nibh.</p>
    </div>
    <div class="w-[318px] h-[400px] bg-white shadow-lg rounded-lg pt-4 mt-5 md:mt-0 md:pt-6">
      <img src="./assets/Akbarullah.png" alt="" class="mx-auto">
      <h1 class="text-center pt-3 font-bold md:pt-5 md:text-2xl">Akbarullah</h1>
      <p class="text-xs text-center pt-1 text-[#969696] md:pt-2 md:text-sm">UI Designer</p>
      <p class="text-xs md:text-sm text-center tracking-wide pt-2 md:pt-4"> Lorem ipsum dolor sit amet, consectetur <br>adipiscing elit. Morbi pretium facilisis mollis.<br> Donec nec auctor tortor. In varius ipsum sit<br> amet elit congue, mattis bibendum nibh.</p>
    </div>
    <div class="w-[318px] h-[400px] bg-white shadow-lg rounded-lg  mr-2 mt-5 md:mt-0 mb-10 md:mb-0 md:mr-0 pt-4 md:pt-6">
      <img src="./assets/Alexy.png" alt="" class="mx-auto">
      <h1 class="text-center pt-3 font-bold md:pt-5 md:text-2xl">Alexy</h1>
      <p class="text-xs text-center pt-1 text-[#969696] md:pt-2 md:text-sm">UI / UX Designer</p>
      <p class="text-xs md:text-sm text-center tracking-wide pt-2 md:pt-4"> Lorem ipsum dolor sit amet, consectetur <br>adipiscing elit. Morbi pretium facilisis mollis.<br> Donec nec auctor tortor. In varius ipsum sit<br> amet elit congue, mattis bibendum nibh.</p>
    </div>
  </div>
 </section>

<!--Akhiir Coment-->


<!-- Awal Footer -->
<section class="w-full h-[500px] md:h-[340px] lg:h-[340px] bg-[#0B0F18]">
  <img src="./assets/Ellipse 31.png" alt="" class="absolute w-9 md:w-24 left-0 ">
    <div class="flex pt-5 lg:pt-10 md:pt-10">
      <div class="ml-10 md:ml-28">
        <h1 class="font-bold md:text-2xl sm:text-base pb-3 md:pb-6"> <span class="text-[#8992FA]">Naik</span><span class="text-white">.Kapal</span></h1>
        <p class="text-xs text-[#969696] lg:text-sm pb-5 md:pb-20">Lorem ipsum dolor sit amet, consectetur <br>adipiscing elit. Morbi pretium facilisis <br>mollis. Donec nec auctor tortor. In varius<br> ipsum sit amet elit congue, mattis <br>bibendum nibh feugiat.</p>
        <h5 class="text-xs text-white md:text-sm font-bold">©Naik.kapal All Rights Reserved</h5>
        
      </div>
      <div class="lg:flex">
        <img src="./assets/Vector 2.png" alt="" class="absolute left-80 md:left-0 md:mt-0 md:ml-[350px] lg:left-96 lg:ml-5 lg:mt-0 xl:left-[480px]">
      </div>
      <div class="absolute flex md:left-[330px] xl:left-[540px] lg:left-[400px] lg:right-96 lg:flex">
        <div class="lg:ml-16 xl:ml-1 ml-8 mt-48 md:mt-0 xl:mt-2 xl:mr-5">
          <h1 class=" text-1xl font-bold text-white">About</h1>
          <p class="text-xs pt-4 text-[#D8D8D8]"><a href="">Progress</a></p>
          <p class="text-xs pt-3 text-[#D8D8D8]"><a href="">Comment</a></p>
        </div>
       
        <div class="lg:ml-16 ml-6 mt-48 md:mt-0  xl:mt-2 xl:mr-3">
          <h1 class=" text-1xl font-bold text-white">Destination</h1>
          <p class="text-xs pt-4 text-[#D8D8D8]"><a href="">Waters</a></p>
          <p class="text-xs pt-3 text-[#D8D8D8]"><a href="">Mainland</a></p>
        </div>
        <div class=" lg:ml-16 ml-6 mt-48 md:mt-0 xl:mt-2  ">
          <h1 class=" text-1xl font-bold text-white">Choose Class</h1>
          <p class="text-xs pt-4 text-[#D8D8D8]"><a href="">Economy</a></p>
          <p class="text-xs pt-3 text-[#D8D8D8]"><a href="">Executive</a></p>
          <p class="text-xs pt-3 text-[#D8D8D8]"><a href="">VVIP</a></p>
        </div>
        <div class="absolute  w-32  lg:ml-16 ml-8 mt-80 md:mt-0  md:left-[300px] lg:left-[406px] xl:mt-2 xl:left-[400px]  ">
          <h1 class=" text-1xl font-bold text-white">Contact Us</h1>
          <p class="text-xs pt-4 text-[#D8D8D8]"><a href="">Contact Us</a></p>
          <p class="text-xs pt-3 text-[#D8D8D8]"><a href="">Privacy Policy</a></p>
          <p class="text-xs pt-3 text-[#D8D8D8]"><a href="">Log In</a></p>
        </div>
        
      </div>
      <div class="absolute flex ml-[200px] md:ml-[600px] xl:ml-[1100px] lg:ml-[800px] gap-4">
        <a href=""><img src="./assets/fb.png" alt="" class="  pt-[430px] md:pt-[250px] lg:pt-64"></a>
        <a href=""><img src="./assets/tw.png" alt="" class="  pt-[430px] md:pt-[250px] lg:pt-64"></a>
        <a href=""><img src="./assets/ig.png" alt="" class="  pt-[430px] md:pt-[250px] lg:pt-64"></a>
        <a href=""><img src="./assets/yt.png" alt="" class="  pt-[430px] md:pt-[250px] lg:pt-64"></a>

      </div>
      <img src="./assets/Ellipse 32.png" alt="" class="absolute w-12 md:w-28 right-0 md:pt-52 pt-[430px]">
    </div>
    <div class="absolute mt-40 md:mt-16 lg:mt-9">
      <img src="./assets/Frame 12.png" alt="" class=" h-3 md:h-3 mt-[153px] lg:mt-0 md:mt-0  xl:mt-0">
    </div>
 </section>

 <script>
  function Menu(e){
    let list = document.querySelector('ul');
    e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
  }
</script>

</body>

</html>
<!-- Akhir Footer -->
  
