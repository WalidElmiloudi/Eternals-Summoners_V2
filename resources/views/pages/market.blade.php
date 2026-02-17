  <main class="xl:w-292 2xl:w-full w-full">
    <section id="cartpopup"
      class="flex justify-center items-center w-full h-screen font-[cinzel] fixed -top-7.5 right-0 z-50 xl:scale-65 xl:right-10 xl:top-0  xl:w-110 xl:rounded-full 2xl:rounded-full xl:h-233 2xl:top-2 2xl:scale-80 hidden z-110">
      <div
        class="w-full h-218 xl:h-250 2xl:h-250 bg-[#BEA301] relative flex flex-col items-center justify-center gap-5 xl:rounded-sm 2xl:rounded-sm">
        <a href="deck.html" class="hover:w-2 xl:hidden"> <img class="absolute top-0 right-0" src="imgs/cart-deck.png"
            alt="My deck icon"></a>
        <a href="play.html" class="xl:hidden"> <img class="absolute top-0 left-0" src="imgs/play icon dark.png"
            alt="play icon"></a>
        <h1 class="text-black text-3xl font-bold">Shopping Cart</h1>
        <hr class="w-98 border">
        <div id="cartDisplay" class="bg-[#897500] w-94 h-161.5 flex flex-col items-center gap-1 overflow-y-auto pt-1">

        </div>
        <hr class="w-98 border">
        <div class="flex items-center w-98 h-12 justify-between">
          <h1 class="text-black text-3xl font-bold">Totale :</h1>
          <p class="text-black text-2xl font-bold">$<span id="total">0</span> USD</p>
        </div>
        <button id="order"
          class="text-3xl text-[#BEA301] font-bold bg-black py-2 px-12 rounded-full mb-5.5 cursor-pointer">Order</button>
    </section>
    <div class="flex flex-col justify-center items-center md:hidden lg:hidden xl:hidden 2xl:hidden">
      <img class="w-35" src="imgs/logo.png" alt="ETERNALS SUMMONERS logo">
      <a href="deck.html" class="hover:w-2"> <img
          class="absolute top-0 right-0 md:hidden lg:hidden xl:hidden 2xl:hidden"
          src="imgs/my deck mobile onpage icon.png" alt="My deck icon"></a>
      <a href="play.html"> <img class="absolute top-0 left-0 md:hidden lg:hidden xl:hidden 2xl:hidden"
          src="imgs/play icon.png" alt="Play icon"></a>
    </div>
    <section class=" hidden xl:flex flex-col items-center 2xl:flex mb-8 2xl:gap-25">
      <div class="flex items-center justify-center">
        <div class="flex flex-col gap-10">
          <h1 class="text-5xl font-bold text-[#AB9100] py-5 xl:text-8xl 2xl:text-9xl">Market</h1>
          <p class="text-3xl text-white w-100 xl:text-5xl/15 xl:w-160 2xl:text-6xl 2xl:w-197">Add Cards To Your
            Collection Or Get Rid Of The No More Useful Ones By Selling Them</p>
        </div>
        <img class="2xl:w-118 2xl:h-210" src="imgs/wandering merchant.png" alt="Wanderind Merchant">
      </div>
      <hr class="w-224 border-[#BEA301] border-2">
    </section>
    <section class="flex flex-col items-center xl:hidden 2xl:hidden gap-y-5 mt-5">
      <h1 class="text-6xl font-bold text-[#AB9100]  xl:text-6xl">Market</h1>
      <p class="text-3xl text-white w-100">Add Cards To Your Collection Or Get Rid Of The No More Useful Ones By Selling
        Them</p>
      <hr class="border-[#BEA301] border-2 w-90">
    </section>
    <section class="flex flex-col items-center">
      <div class="flex justify-between xl:justify-around py-5 gap-2.5 2xl:gap-18 xl:gap-12">
        <p class="filter-btn text-[#8800FF] text-[10px] xl:text-2xl cursor-pointer" data-rarity="Above The Rank">Above
          The Rank</p>
        <p class="filter-btn text-[#FF0000] text-xs xl:text-2xl cursor-pointer" data-rarity="Mythical">Mythical</p>
        <p class="filter-btn text-[#BEA301] text-xs xl:text-2xl cursor-pointer" data-rarity="Legendary">Legendary</p>
        <p class="filter-btn text-[#0077FF] text-xs xl:text-2xl cursor-pointer" data-rarity="Epic">Epic</p>
        <p class="filter-btn text-[#15FF00] text-xs xl:text-2xl cursor-pointer" data-rarity="Rare">Rare</p>
        <p class="filter-btn text-white text-xs xl:text-2xl cursor-pointer" data-rarity="Common">Common</p>
      </div>
      <div id="cardsDisplay"
        class="grid grid-cols-2 xl:grid-cols-3 2xl:grid-cols-3 gap-x-4 gap-y-4 justify-items-center 2xl:w-277 ">

      </div>
      <div id="pagination" class="flex gap-x-5 justify-center my-10 2xl:my-20">
        <div id="prevPage"
          class="w-15 h-15 xl:w-20 xl:h-20 border border-[#BEA301] flex justify-center items-center rounded-full cursor-pointer">
          <p class="text-2xl xl:text-3xl text-[#BEA301]">&lt;</p>
        </div>
        <div id="pageNumbers" class="flex gap-x-2"></div>
        <div id="nextPage"
          class="w-15 h-15 xl:w-20 xl:h-20  border border-[#BEA301] flex justify-center items-center rounded-full cursor-pointer">
          <p class="text-2xl text-[#BEA301] xl:text-3xl">&gt;</p>
        </div>
      </div>
    </section>
  </main>