<header>
    <div class="header hidden 2xl:flex py-2 items-center justify-around fixed w-full z-100">
      <img src="{{ asset('images/Copilot_20251029_205337 1.png') }}" alt="ETERNALS SUMMONERS logo">
      <nav>
        <ul class="flex gap-20">
          <li class="hover:scale-110 ease-in-out duration-150"><a class="text-3xl text-[#C7A900] " href="#">Home</a>
          </li>
          <li class="hover:scale-110 ease-in-out duration-150"><a class="text-3xl text-[#C7A900] "
              href="play.html">Play</a>
          </li>
          <li class="hover:scale-110 ease-in-out duration-150"><a class="text-3xl text-[#C7A900] "
              href="guide.html">Guide</a></li>
          <li class="hover:scale-110 ease-in-out duration-150"><a class="text-3xl text-[#C7A900] "
              href="market.html">Market</a></li>
          <li class="hover:scale-110 ease-in-out duration-150"><a class="text-3xl text-[#C7A900] " href="deck.html">My
              Deck</a></li>
          <li class="hover:scale-110 ease-in-out duration-150"><a class="text-3xl text-[#C7A900] "
              href="favoris.html">Favoris</a></li>
          <li class="hover:scale-110 ease-in-out duration-150 relative cursor-pointer cart">
            <img class="" src="{{ asset('images/Shopping cart.png') }}" alt="Shopping cart icon">
            <div
              class="w-4 h-4 bg-[#BEA301] flex justify-center items-center rounded-full absolute -top-1 -right-1 counts">
              0
            </div>
          </li>
        </ul>
      </nav>
    </div>
    <div class="fixed bottom-0 w-full bg-black z-100 lg:hidden xl:hidden 2xl:hidden">
      <nav>
        <ul class="flex flex-row items-center justify-evenly">
          <li><a href="market.html"><img src="{{ asset('images/market mobile icon.png') }}" alt="Market icon"></a></li>
          <li><a href="guide.html"><img src="{{ asset('images/guide mobile icon.png') }}" alt="guide icon"></a></li>
          <li><a href="#"><img src="{{ asset('images/home mobile onpage icon.png') }}" alt="home icon"></a></li>
          <li><a href="favoris.html"><img src="{{ asset('images/favoris mobile icon.png') }}" alt="favoris icon"></a></li>
          <li class="relative cart">
            <img src="{{ asset('images/cart mobile icon.png') }}" alt="cart icon">
            <p class="text-black absolute top-0.5 left-5.5 counts">0</p>
          </li>
        </ul>
      </nav>
    </div>
    <div class="hidden fixed right-0  top-0 h-full bg-black z-100 2xl:hidden xl:flex flex-col gap-y-10">
      <img src="{{ asset('images/Copilot_20251029_205337 1.png') }}" alt="ETERNALS SUMMONERS logo">
      <nav>
        <ul class="flex flex-col items-center gap-y-10">
          <li><a href="#"><img src="{{ asset('images/home mobile onpage icon.png') }}" alt="home icon"></a></li>
           <li><a href="play.html"><img class="scale-90" src="{{ asset('images/play icon.png') }}" alt="play icon"></a></li>
          <li><a href="guide.html"><img src="{{ asset('images/guide mobile icon.png') }}" alt="guide icon"></a></li>
          <li><a href="market.html"><img src="{{ asset('images/market mobile icon.png') }}" alt="Market icon"></a></li>
          <li><a href="favoris.html"><img src="{{ asset('images/favoris mobile icon.png') }}" alt="favoris icon"></a></li>
          <li><a href="deck.html"> <img class="scale-90" src="{{ asset('images/my deck mobile onpage icon.png') }}"
                alt="My deck icon"></a></li>
          <li class="relative cart">
            <img src="{{ asset('images/cart mobile icon.png') }}" alt="cart icon">
            <p class="text-black absolute top-0.5 left-5.5 counts">0</p>
          </li>
        </ul>
      </nav>
    </div>
  </header>