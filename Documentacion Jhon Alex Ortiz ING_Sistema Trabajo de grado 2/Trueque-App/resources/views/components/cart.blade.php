<div :class="cartOpen ? 'translate-x-0 ease-out' : 'translate-x-full ease-in'" class="fixed right-0 top-0 max-w-lg w-full h-full px-6 py-4 transition duration-300 transform overflow-y-auto shadow-md bg-white">


        <div class="h-full flex flex-col">
          <div class="flex-1">
            <div class="flex items-start justify-between">
              <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">
                Shopping cartS
              </h2>
              <div class="ml-3 h-7 flex items-center">
                <button @click="cartOpen = !cartOpen" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                  <span class="sr-only">Close panel</span>
                  <!-- Heroicon name: outline/x -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>

            <div class="mt-8">
              <div class="flow-root">
                <ul role="list" class="-my-6 divide-y divide-gray-200">
                  <li class="py-6 flex">
                    <div class="flex-shrink-0 w-24 h-24 border border-gray-200 rounded-md overflow-hidden">
                      <img src="{{ asset('img/vitr.jpeg') }}" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="w-full h-full object-center object-cover">
                    </div>

                    <div class="ml-4 flex-1 flex flex-col">
                      <div>
                        <div class="flex justify-between text-base font-medium text-gray-900">
                          <h3>
                            <a href="#">
                              Throwback Hip Bag
                            </a>
                          </h3>
                          <p class="ml-4">
                            $90.00
                          </p>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">
                          Salmon
                        </p>
                      </div>
                      <div class="flex-1 flex items-end justify-between text-sm">
                        <p class="text-gray-500">
                          Qty 1
                        </p>

                        <div class="flex">
                          <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                        </div>
                      </div>
                    </div>
                  </li>

                  <li class="py-6 flex">
                    <div class="flex-shrink-0 w-24 h-24 border border-gray-200 rounded-md overflow-hidden">
                      <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-02.jpg" alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch." class="w-full h-full object-center object-cover">
                    </div>

                    <div class="ml-4 flex-1 flex flex-col">
                      <div>
                        <div class="flex justify-between text-base font-medium text-gray-900">
                          <h3>
                            <a href="#">
                              Medium Stuff Satchel
                            </a>
                          </h3>
                          <p class="ml-4">
                            $32.00
                          </p>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">
                          Blue
                        </p>
                      </div>
                      <div class="flex-1 flex items-end justify-between text-sm">
                        <p class="text-gray-500">
                          Qty 1
                        </p>

                        <div class="flex">
                          <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                        </div>
                      </div>
                    </div>
                  </li>
                          

                  <li class="py-6 flex">
                    <div class="flex-shrink-0 w-24 h-24 border border-gray-200 rounded-md overflow-hidden">
                      <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-02.jpg" alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch." class="w-full h-full object-center object-cover">
                    </div>

                    <div class="ml-4 flex-1 flex flex-col">
                      <div>
                        <div class="flex justify-between text-base font-medium text-gray-900">
                          <h3>
                            <a href="#">
                              Medium Stuff Satchel
                            </a>
                          </h3>
                          <p class="ml-4">
                            $32.00
                          </p>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">
                          Blue
                        </p>
                      </div>
                      <div class="flex-1 flex items-end justify-between text-sm">
                        <p class="text-gray-500">
                          Qty 1
                        </p>

                        <div class="flex">
                          <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                        </div>
                      </div>
                    </div>
                  </li>

                  <!-- More products... -->
                </ul>
              </div>
            </div>
          </div>

          <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
            <div class="flex justify-between text-base font-medium text-gray-900">
              <p>Subtotal</p>
              <p>$262.00</p>
            </div>
            <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
            <div class="mt-6">
              <a href="#" class="flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">Checkout</a>
            </div>
            <div class="mt-6 flex justify-center text-sm text-center text-gray-500">
              <p>
                or <button type="button" class="text-indigo-600 font-medium hover:text-indigo-500">Continue Shopping<span aria-hidden="true"> &rarr;</span></button>
              </p>
            </div>
          </div>
        </div>
    
</div>