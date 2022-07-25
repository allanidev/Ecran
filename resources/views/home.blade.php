

@extends('layouts.app')
    

@section('content')

            <!-- le header -->
        <div class="bg-white -full h-20 rounded-tl-lg">
                <div class="flex">
                    <div class="flex-none w-32 h-14 mt-5 ml-8 mr-10 ">
                            <p><img src="/images/award02.png" alt=""></p>
                    </div>
                    <div class="flex-initial w-64 h-14 mt-6 ml-8 ">

                            <form>   
                                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                                <div class="relative  ">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                    </div>
                                    <input type="search" id="default-search" class="block p-4 pl-10 w-full h-6 text-sm text-gray-900 bg-gray-50 rounded-full border border-gray-300 focus:ring-blue-500  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white  " placeholder="Search all assets" required="">
                                    
                                </div>
                            </form>

                    </div>
                    <div class="flex-initial w-32 ...">
                        
                    </div>

                    <div class="flex-initial w-32 ...">
                        
                    </div>

                    <div class="flex-initial w-32 ...">
                        
                    </div>

                    <div class="flex-initial w-32 ...">
                        
                    </div>

                    <!-- <div class="flex-initial w-32 ...">
                        
                    </div> -->

                    <div class="flex-initial w-32 mr-24">
                        
                    </div>

                    <div class="flex-initial w-32 mt-6 pl-10">
                        <div class="border border rounded-full w-16 h-7 ">
                            <p class="text-center "><a href="">Swap</a></p>
                        </div>
                    </div>

                    <div class="flex-initial w-32 mt-6 mr-10 ">
                        <div class="border border-blue-500 rounded-full w-32 h-7 " style="background-color: #0177fe;">
                            <p class="text-center text-white "><a href="">Connect Walet</a></p>
                        </div>
                    </div>
                    <div class="flex-initial w-5 mt-7 mr-10 ">
                        <p><img src="/images/cloche.png" alt=""></p>
                    </div>
                </div>
         </div>




            <!-- le menu de gauche -->

                    <div>
                            <div  class="flex">
                                <div class=" mr-10  flex-none w-72 " style="background-color: #111315; height:auto;">

                                        <div class="flex mt-5 ml-6">
                                                <div class="flex-none w-10 h-10 border border-black mt-3   rounded-full">
                                                    <p class=" text-center" style="font-size:20px;padding-top:4px"> <a href="">😹</a></p>
                                                </div>
                                                
                                                <div class="flex-initial w-64 ml-5">
                                               
                                                        <p class="text-white text-xl">MetaMask</p>
                                                        <span style="display: flex;">
                                                        <p class="text-gray-400 mr-2">$23,423.12</p>
                                                         <img src="/images/vision.png" style="height:25px; width:25px" alt="">
                                                        </span>
                                               
                                                 </div>
                                       
                                        </div> <br> <br>
                                        <hr class="txt">

                                            <!-- liste déroulant menu -->

                                                <div style="display: flex;">
                                                    <p><img src="/images/chart.png" class="ml-8 mt-10 mr-4"  style="width:25px;height:25px;" alt=""></p>
                                                    <p class="text-white mt-10" style="color:#4c4e51">Market</p>
                                                </div>

                                                <div>
                                                     <div>
                                                     
                                                        <div class="bg-slate-900 h-10 w-60 ml-7 p-2 rounded-lg mt-5" style="display: flex;">
                                                             <p><img src="/images/email.png" class=" mr-3 "  style="width:28px;height:28px;" alt=""></p>
                                                             <p class="text-white mr-28"  style="color:#4c4e51">Pools</p>

                                                             <p><img src="/images/bas.png" class=""  style="width:25px;height:25px;" alt=""></p>
                                                        </div>

                                                      
                                                      </div>

                                                <div style="display: flex;">
                                                    <p><img src="/images/env.png" class="ml-8 mt-5 mr-4"  style="width:25px;height:25px;" alt=""></p>
                                                    <p class="text-white mt-5" style="color:#4c4e51">Transfert</p>
                                                </div>

                                                <div class="ml-5 mt-3">
                                                    <p class="text-white" style="color:#4c4e51">Account</p>
                                                </div>

                                                <div class="bg-slate-900 h-10 w-60 ml-7 p-2 rounded-lg mt-5" style="display: flex;">
                                                             <p class=""><img src="/images/portfolio.png" class=" mr-4 "  style="width:25px;height:25px;" alt=""></p>
                                                             <p class="text-white mr-24" style="color:#4c4e51">Portfolio</p>

                                                             <p><img src="/images/bas.png" class=""  style="width:25px;height:25px;" alt=""></p>
                                                 </div>

                                                        
                                                 <div style="display: flex;">
                                                    <p><img src="/images/invoice.png" class="ml-8 mt-5 mr-4"  style="width:25px;height:25px;" alt=""></p>
                                                    <p class="text-white mt-5" style="color:#4c4e51">History</p>
                                                </div>
                                                    

                                                <div style="display: flex;">
                                                    <p><img src="/images/add-user.png" class="ml-8 mt-5 mr-4"  style="width:25px;height:25px;" alt=""></p>
                                                    <p class="text-white mt-5  mr-9" style="color:#4c4e51">Invite Freinds</p>
                                                    <p class=" w-20 h-6 mt-5 text-center text-white  rounded-full"  style="background-color: #0177fe;">Earm 50%</p>
                                                </div>

                                                <div style="display: flex;">
                                                    <p><img src="/images/settings.png" class="ml-8 mt-5 mr-4"  style="width:25px;height:25px;" alt=""></p>
                                                    <p class="text-white mt-5" style="color:#4c4e51">Settings</p>
                                                </div>


                                                <div class="ml-5 mt-5">
                                                    <p class="text-white" style="color:#4c4e51">Currency</p>
                                                </div>

                                                
                                                <div class="bg-slate-900 h-10 w-60 ml-7 p-2 rounded-lg mt-5" style="display: flex;">
                                                             <p class=""><img src="/images/etat.png" class=" mr-4 "  style="width:30px;height:30px; border-radius:50%;" alt=""></p>
                                                             <p class="text-white mr-28">USD</p>

                                                             <p><img src="/images/bas.png" class=""  style="width:25px;height:25px; " alt=""></p>
                                                 </div><br>

                                                 <div style="display: flex;">
                                                    <p><img src="/images/int.png" class="ml-8 mt-5 mr-4"  style="width:25px;height:25px;" alt=""></p>
                                                    <p class="text-white mt-5" style="color:#4c4e51">Get Support</p>
                                                </div>


                                                <div style="display: flex;">
                                                    <p><img src="/images/settings.png" class="ml-8 mt-5 mr-4"  style="width:25px;height:25px;" alt=""></p>
                                                    <p class="text-white mt-5" style="color:#4c4e51">Give feedback</p>
                                                </div> <br>


                                                <div class="rounded-full h-10 bg-black  w-64 border-gray-200  ml-4" style="display: flex;">
                                                    <p class=" w-36 h-7 mt-1  ml-1  text-center text-white  rounded-full"  style="background-color: #616a76;">Light</p>
                                                    <p class=" w-36 h-7 mr-1 mt-1  text-center text-white  rounded-full"  style="background-color: #000;">Darck</p>
                                                </div><br><br>


                                </div>
                                
                            </div>

                            <div class="flex-initial w-96 ml-28">
                                    <p class="mt-10 ml-2 text-2xl font-bold  mb-8 tech" style="font-family: 'Roboto', sans-serif;">Your top winners today</p>

                                    <div class="flex ml-3">
                                            <div class="flex-1 w-80  ...">
                                                <div class="border border-gray-300 rounded-lg h-16 w-80 " style="display: flex;">
                                                        <p><img src="/images/bitcoin.png" class=" mt-3 ml-3 mr-4" style="width: 40px;height:40px;" alt=""></p>
                                                        <p class="font-bold mt-3  mr-40" style="font-size: 14px;">Bitcoin <br> <span class="text-gray-400">BTC</span></p>
                                                        <p class="font-bold mt-3 text-green-400 " style="font-size: 14px;"> <span   class="pl-5">32%</span> <br> <span class="text-gray-400">$431,00</span></p>
                                                </div>
                                            </div>
                                            <div class="flex-1 w-80 ml-8 ...">
                                                <div class="border border-gray-300 rounded-lg h-16 w-80 " style="display: flex;">
                                                        <p><img src="/images/stellar (1).png" class="mt-3 ml-3 mr-4" style="width: 40px;height:40px;" alt=""></p>
                                                        <p class="font-bold mt-3 mr-40" style="font-size: 14px;">Stellar <br> <span class="text-gray-400">XLM</span></p>
                                                        <p class="font-bold mt-3 text-green-400 " style="font-size: 14px;"> <span   class="pl-7">6%</span> <br> <span class="text-gray-400">$2,131.00</span></p>
                                                </div>
                                            </div>
                                            <div class="flex-1 w-80 ml-8 ...">
                                                <div class="border border-gray-300 rounded-lg h-16 w-80 " style="display: flex;">
                                                        <p><img src="/images/avalanche.png" class="mt-3 ml-3 mr-4" style="width: 40px;height:40px;" alt=""></p>
                                                        <p class="font-bold mt-3 mr-36" style="font-size: 14px;">Avalanche <br> <span class="text-gray-400">AVAX</span></p>
                                                        <p class="font-bold mt-3 text-green-400 " style="font-size: 14px;"> <span   class="pl-5">32%</span> <br> <span class="text-gray-400 pl-2">$55.00</span></p>
                                                </div>
                                            </div>



                                           
                                        </div>
                                                 <p class="mt-10 ml-2 text-2xl font-bold  mb-8" style="font-family: 'Roboto', sans-serif;">Your Holdings</p>

                                                <div style="display: flex;">
                                                   <div>
                                                   <form>   
                                                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                                                        <div class="relative  ">
                                                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                                            </div>
                                                            <input type="search" id="default-search" class="block p-4 pl-10 w-64 h-6 text-sm text-gray-900  rounded-full border border-gray-300 focus:ring-blue-500  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white  " placeholder="Search all assets" required="">
                                                            
                                                        </div>
                                                    </form>
                                                   </div>


                                                            <div class="flex">
                                                                    <div class="flex-none mr-80 border border-gray-300 h-8 ml-28 rounded-full"  style="width: 150px; display:flex">
                                                                            <p class="mr-4 pb-2 pl-4 pt-1">All networks </p>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4 pt-2 ml-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                                                                </svg>
                                                                    </div>

                                                                    <div class="flex-initial w-8 border border-gray-300 rounded-full ml-40">
                                                                        <p> <img src="/images/vision2.png"class="pt-2 pl-1" style="height:25px; width:25px" alt=""></p>
                                                                    </div>

                                                                    
                                                                    
                                                            </div>

                                                       

                                                 </div> <br> <br>


                                                      <div class="h-auto border border-gray-300 rounded-lg" style="width: 1050px;">

                                                            <div class="flex">
                                                                    <div class="flex-1 ...">
                                                                        <p class="text-gray-500 pl-3 pt-2 pb-2">Assets</p>
                                                                    </div>
                                                                    <div class="flex-1 w-64 ...">
                                                                        <p class="text-gray-500 pt-2 pb-2">Amount</p>
                                                                    </div>
                                                                    <div class="flex-1 w-32 ...">
                                                                    <p class="text-gray-500 pt-2 pb-2">Value in USD</p>
                                                                    </div>

                                                                    <div class="flex-1 ...">
                                                                    <p class="text-gray-500 pt-2 pb-2">change %(24K)</p>
                                                                    </div>
                                                                    <div class="flex-1 w-64 ...">
                                                                    <p class="text-gray-500 pt-2 pb-2">change %(7D)</p>
                                                                    </div>
                                                                    <div class="flex-1 w-32 ...">
                                                                    <p class="text-gray-500 pt-2 pb-2 ml-4">Allocation</p>
                                                                    </div>
                                                            </div>       
                                                            
                                                            <hr>


                                                            <div>
                                                            <div class="flex">
                                                                    <div class="flex-1 w-64 pb-2">
                                                                         <div style="display:flex;">
                                                                                <p><img src="/images/stellar (1).png" class="mt-4 ml-3 mr-4  " style="width: 40px;height:40px;" alt=""></p>
                                                                                <p class="font-bold mt-4 mr-2" style="font-size: 14px;">Stellar <br> <span class="text-gray-400">XLMS</span></p>
                                                                         </div>
                                                                    </div>
                                                                    <div class="flex-1 w-64 ...">
                                                                        <p class="pt-4 pl-3">0,32</p>
                                                                    </div>
                                                                    <div class="flex-1 w-32 ...">
                                                                    <p class=" pt-4 pl-4">$3,352</p>
                                                                    </div>

                                                                    <div class="flex-1 ...">
                                                                    <p class="text-green-500 pt-4 pl-9">2%</p>
                                                                    </div>
                                                                    <div class="flex-1 w-64 ...">
                                                                    <p class="text-green-500 pt-4 pl-9">12%</p>
                                                                    </div>
                                                                    <div class="flex-1 w-32 ...">
                                                                    <div class="text-gray-500 pt-4 ml-4">
                                                                    <div class="text-gray-500 pt-2 ml-4 mr-3">

                                                                            <div class="flex justify-between mb-1">


                                                                            </div>
                                                                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                                                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 28%"></div>
                                                                            </div>

                                                                            </div>
                                                                    </div>
                                                                    </div>
                                                            </div>       
                                                            
                                                            <hr>
                                                            </div>

                                                            <div>
                                                            <div class="flex">
                                                                    <div class="flex-1 w-64 pb-2">
                                                                         <div style="display:flex;">
                                                                                <p><img src="/images/bitcoin.png" class="mt-4 ml-3 mr-4  " style="width: 40px;height:40px;" alt=""></p>
                                                                                <p class="font-bold mt-4 mr-2" style="font-size: 14px;">Bitcoin <br> <span class="text-gray-400">BTC</span></p>
                                                                         </div>
                                                                    </div>
                                                                    <div class="flex-1 w-64 ...">
                                                                        <p class="pt-4 pl-3">0,32</p>
                                                                    </div>
                                                                    <div class="flex-1 w-32 ...">
                                                                    <p class=" pt-4 pl-4">$3,352</p>
                                                                    </div>

                                                                    <div class="flex-1 ...">
                                                                    <p class="text-green-500 pt-4 pl-9">2%</p>
                                                                    </div>
                                                                    <div class="flex-1 w-64 ...">
                                                                    <p class="text-green-500 pt-4 pl-9">12%</p>
                                                                    </div>
                                                                    <div class="flex-1 w-32 ...">
                                                                    <div class="text-gray-500 pt-4 ml-4">
                                                                    <div class="text-gray-500 pt-2 ml-4 mr-3">

                                                                            <div class="flex justify-between mb-1">


                                                                            </div>
                                                                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                                                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 38%"></div>
                                                                            </div>

                                                                            </div>
                                                                    </div>
                                                                    </div>
                                                            </div>       
                                                            
                                                            <hr>
                                                            </div>

                                                            <div>
                                                            <div class="flex">
                                                                    <div class="flex-1 w-64 pb-2">
                                                                    <div style="display:flex;">
                                                                                <p><img src="/images/chain.png" class="mt-4 ml-3 mr-4  " style="width: 40px;height:40px;" alt=""></p>
                                                                                <p class="font-bold mt-4 mr-2" style="font-size: 14px;">Chaillink<br> <span class="text-gray-400">LINK</span></p>
                                                                         </div>
                                                                    </div>
                                                                    <div class="flex-1 w-64 ...">
                                                                        <p class="pt-4 pl-3">0,32</p>
                                                                    </div>
                                                                    <div class="flex-1 w-32 ...">
                                                                    <p class=" pt-4 pl-4">$3,352</p>
                                                                    </div>

                                                                    <div class="flex-1 ...">
                                                                    <p class="text-green-500 pt-4 pl-9">2%</p>
                                                                    </div>
                                                                    <div class="flex-1 w-64 ...">
                                                                    <p class="text-green-500 pt-4 pl-9">12%</p>
                                                                    </div>
                                                                    <div class="flex-1 w-32 ...">
                                                                    <div class="text-gray-500 pt-4 ml-4">
                                                                    <div class="text-gray-500 pt-2 ml-4 mr-3">

                                                                        <div class="flex justify-between mb-1">


                                                                        </div>
                                                                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 24%"></div>
                                                                        </div>

                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                            </div>       
                                                            
                                                            <hr>
                                                            </div>

                                                            <div>
                                                            <div class="flex">
                                                                    <div class="flex-1 w-64 pb-2">
                                                                         <div style="display:flex;">
                                                                                <p><img src="/images/bitvert.png" class="mt-4 ml-3 mr-4  " style="width: 40px;height:40px;" alt=""></p>
                                                                                <p class="font-bold mt-4 mr-2" style="font-size: 14px;">Bitcoin Cash <br> <span class="text-gray-400">BCH</span></p>
                                                                         </div>
                                                                    </div>
                                                                    <div class="flex-1 w-64 ...">
                                                                        <p class="pt-4 pl-3">0,32</p>
                                                                    </div>
                                                                    <div class="flex-1 w-32 ...">
                                                                    <p class=" pt-4 pl-4">$3,352</p>
                                                                    </div>

                                                                    <div class="flex-1 ...">
                                                                    <p class="text-green-500 pt-4 pl-9">2%</p>
                                                                    </div>
                                                                    <div class="flex-1 w-64 ...">
                                                                    <p class="text-green-500 pt-4 pl-9">12%</p>
                                                                    </div>
                                                                    <div class="flex-1 w-32 ...">
                                                                    <div class="text-gray-500 pt-4 ml-4">
                                                                    <div class="text-gray-500 pt-2 ml-4 mr-3">

                                                                        <div class="flex justify-between mb-1">


                                                                        </div>
                                                                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 24%"></div>
                                                                        </div>

                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                            </div>       
                                                            
                                                            <hr>
                                                            </div>

                                                            <div>
                                                            <div class="flex">
                                                                    <div class="flex-1 w-64 pb-2">
                                                                         <div style="display:flex;">
                                                                                <p><img src="/images/tether.png" class="mt-4 ml-3 mr-4  " style="width: 40px;height:40px;" alt=""></p>
                                                                                <p class="font-bold mt-4 mr-2" style="font-size: 14px;">Tether<br> <span class="text-gray-400">USDT</span></p>
                                                                         </div>
                                                                    </div>
                                                                    <div class="flex-1 w-64 ...">
                                                                        <p class="pt-4 pl-3">0,32</p>
                                                                    </div>
                                                                    <div class="flex-1 w-32 ...">
                                                                    <p class=" pt-4 pl-4">$3,352</p>
                                                                    </div>

                                                                    <div class="flex-1 ...">
                                                                    <p class="text-green-500 pt-4 pl-9">2%</p>
                                                                    </div>
                                                                    <div class="flex-1 w-64 ...">
                                                                    <p class="text-green-500 pt-4 pl-9">12%</p>
                                                                    </div>
                                                                    <div class="flex-1 w-32 ...">
                                                                    <div class="text-gray-500 pt-4 ml-4">
                                                                    <div class="text-gray-500 pt-2 ml-4 mr-3">

                                                                        <div class="flex justify-between mb-1">


                                                                        </div>
                                                                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 32%"></div>
                                                                        </div>

                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                            </div>       
                                                            
                                                            <hr>
                                                            </div>

                                                            <div>
                                                            <div class="flex">
                                                                    <div class="flex-1 w-64 pb-2">
                                                                         <div style="display:flex;">
                                                                                <p><img src="/images/etherum.png" class="mt-4 ml-3 mr-4  " style="width: 40px;height:40px;" alt=""></p>
                                                                                <p class="font-bold mt-4 mr-2" style="font-size: 14px;">Etherum <br> <span class="text-gray-400">ETH</span></p>
                                                                         </div>
                                                                    </div>
                                                                    <div class="flex-1 w-64 ...">
                                                                        <p class="pt-4 pl-3">0,32</p>
                                                                    </div>
                                                                    <div class="flex-1 w-32 ...">
                                                                    <p class=" pt-4 pl-4">$3,352</p>
                                                                    </div>

                                                                    <div class="flex-1 ...">
                                                                    <p class="text-green-500 pt-4 pl-9">2%</p>
                                                                    </div>
                                                                    <div class="flex-1 w-64 ...">
                                                                    <p class="text-green-500 pt-4 pl-9">12%</p>
                                                                    </div>
                                                                    <div class="flex-1 w-32 ...">
                                                                    <div class="text-gray-500 pt-4 ml-4">
                                                                    <div class="text-gray-500 pt-2 ml-4 mr-3">

                                                                        <div class="flex justify-between mb-1">


                                                                        </div>
                                                                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 64%"></div>
                                                                        </div>

                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                            </div>       
                                                            
                                                            <hr>
                                                            </div>
                                                                
                                                    </div> <br>

                                                    <div class="w-80 h-10 bg-white flex items-center " style="display: flex;"> 
                                                         <p class="border border-gay-300 rounded-full h-6 w-6  mr-3"><img src="/images/gauche.png" alt=""></p>
                                                         <div class="border border-gay-300 rounded-full  w-6  mr-3 bg-black text-white"><p class="text-center">1</p></div>
                                                         <div class="border border-gay-300 rounded-full  w-6  mr-3  "><p class="text-center">2</p></div>
                                                         <div class="border border-gay-300 rounded-full  w-6  mr-3 "><p class="text-center">3</p></div>
                                                         <div class="border border-gay-300 rounded-full  w-6  mr-3 "><p class="text-center">4</p></div>
                                                         <div class="border border-gay-300 rounded-full  w-6  mr-3 "><p class="text-center">5</p></div>
                                                         <div class="border border-gay-300 rounded-full  w-6  mr-3 "><p class="text-center">...</p></div>
                                                         <div class="border border-gay-300 rounded-full w-6 font-sans text-sm mr-3">
                                                            <p class="text-center">66</p>
                                                         </div>
                                                         <p class="border border-gay-300 rounded-full h-6 w-6  mr-3"><img src="/images/droite.png" alt=""></p>

                                                    </div><br>

                                     </div>
                                </div>

                               
@endsection