@extends('template.layout')

@section('title')
    Calculator
@endsection

@section('content')
    <div class="w-[85%] mx-auto">
        <!-- Header -->
        <div class="w-full">
            <h1 class="text-mid text-title font-bold">Welcome to our Eco Enzyme Calculator!</h1>
            <p class="text-dark text-subheading font-medium">Our Eco Enzyme Calculator is a powerful tool designed to help you determine the precise measurements of ingredients needed to create your own eco enzyme solution. By inputting a detail, such as the desired volume of eco enzyme, weight of the waste, water volume, or weight of sugar, our calculator will generate accurate measurements tailored to your requirements.</p>
        </div>

        <!-- Calculator -->
        <div class="w-full flex mt-10 justify-between">
            <div class="w-[40%]">
                <img src="{{ Storage::url('assets/calculator/calculator-img.png') }}" alt="calculator image" class="w-auto h-[440px]">
                <div class="w-full mt-10">
                    <div class="flex justify-between items-center">
                        <img src="{{ Storage::url('assets/calculator/eco-enzyme.png') }}" alt="eco-enzyme logo" class="w-[5%] h-auto">
                        <div class="relative w-[92%] flex border border-light rounded">
                            <div id="enzyme-fill" class="w-full p-5 bg-light h-full"></div>
                            <div id="enzyme-blank"></div>
                            <p id="total-enzyme" class="absolute right-2 top-1/2 -translate-y-1/2 text-subheading text-dark font-medium">.. liter</p>
                        </div>
                    </div>
                    <div class="flex justify-between mt-5 items-center">
                        <img src="{{ Storage::url('assets/calculator/waste.png') }}" alt="waste logo" class="w-[5%] h-auto">
                        <div class="relative w-[92%] flex border border-black rounded">
                            <div id="waste-fill" class="w-[60%] p-5 bg-black"></div>
                            <div id="waste-blank" class="w-[40%] bg-white p-5 rounded-r"></div>
                            <p id="total-waste" class="absolute right-2 top-1/2 -translate-y-1/2 text-subheading text-black font-medium">.. kg</p>
                        </div>
                    </div>
                    <div class="flex justify-between mt-5 items-center">
                        <img src="{{ Storage::url('assets/calculator/water.png') }}" alt="waste logo" class="w-[5%] h-auto">
                        <div class="relative w-[92%] flex border border-dark rounded">
                            <div id="water-fill" class="w-[10%] p-5 bg-dark"></div>
                            <div id="water-blank" class="w-[90%] bg-white p-5 rounded-r"></div>
                            <p id="total-water" class="absolute right-2 top-1/2 -translate-y-1/2 text-subheading text-dark font-medium">.. liter</p>
                        </div>
                    </div>
                    <div class="flex justify-between mt-5 items-center">
                        <img src="{{ Storage::url('assets/calculator/sugar.png') }}" alt="sugar logo" class="w-[5%] h-auto">
                        <div class="relative w-[92%] flex border border-mid rounded">
                            <div id="sugar-fill" class="w-[30%] p-5 bg-mid"></div>
                            <div id="sugar-blank" class="w-[70%] bg-white p-5 rounded-r"></div>
                            <p id="total-sugar" class="absolute right-2 top-1/2 -translate-y-1/2 text-subheading text-mid font-medium">.. kg</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[55%]">
                <div class="w-full">
                    <h2 class="mb-2 text-mid text-heading font-bold">Calculator Guide</h2>
                    <p class="text-dark text-subheading font-medium">Choose to input one of these details:</p>
                    <ul class="pl-6 text-dark text-subheading font-medium list-disc">
                        <li><span class="text-mid text-subheading font-bold">Eco-Enzyme Volume:</span> Select the desired production volume in Liter to determine ingredient quantities.</li>
                        <li><span class="text-mid text-subheading font-bold">Total Waste:</span> Input the amount of food waste you have in kg. We suggest you to use 80% fruit waste and 20% vegetable waste.</li>
                        <li><span class="text-mid text-subheading font-bold">Water Volume:</span> Input the amount of water in Liter.</li>
                        <li><span class="text-mid text-subheading font-bold">Sugar:</span> Input the amount of sugar in kg.</li>
                        <li><span class="text-mid text-subheading font-bold">Calculate:</span> Click the calculate button and we will show the required ingredients for you!</li>
                    </ul>
                </div>
                <div class="w-full mt-10">
                    <h1 class="text-mid text-title font-bold">Calculate Yours!</h1>
                    <form>
                        <div class=" w-[90%] mt-2">
                            <div class="w-full flex justify-between">
                                <label for="enzyme-volume" class="w-full text-name text-dark font-medium">Eco-Enzyme Volume</label>
                                <p class="text-subname text-mid font-normal">(L)</p>
                            </div>
                            <div class="w-full mt-2">
                                <input type="number" id="enzyme-volume" name="enzyme-volume" required class="w-full rounded border-0 outline-none py-1.5 px-3 text-name text-dark font-medium ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:text-subname placeholder:font-normal focus:ring-2 focus:ring-inset focus:ring-mid focus:shadow-md" placeholder="Input the desired Eco-Enzyme volume in liter">
                            </div>
                        </div>

                        <div class="w-[90%] mt-5">
                            <div class="w-full  flex justify-between">
                                <label for="waste-weight" class="text-name text-dark font-medium">Total Waste</label>
                                <p class="text-subname text-mid font-normal">(kg)</p>
                            </div>
                            <div class="w-full mt-2">
                                <input type="number" id="waste-weight" name="waste-weight" required class="w-full rounded border-0 outline-none py-1.5 px-3 text-name text-dark font-medium ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:text-subname placeholder:font-normal focus:ring-2 focus:ring-inset focus:ring-mid focus:shadow-md" placeholder="Input weight of the waste in kg">
                            </div>
                        </div>

                        <div class="w-[90%] mt-5">
                            <div class="w-full  flex justify-between">
                                <label for="water-volume" class="text-name text-dark font-medium">Water Volume</label>
                                <p class="text-subname text-mid font-normal">(L)</p>
                            </div>
                            <div class="w-full mt-2">
                                <input type="number" id="water-volume" name="water-volume" required class="w-full rounded border-0 outline-none py-1.5 px-3 text-name text-dark font-medium ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:text-subname placeholder:font-normal focus:ring-2 focus:ring-inset focus:ring-mid focus:shadow-md" placeholder="Input water volume in liter">
                            </div>
                        </div>

                        <div class="w-[90%] mt-5">
                            <div class="w-full  flex justify-between">
                                <label for="sugar-weight" class="text-name text-dark font-medium">Sugar</label>
                                <p class="text-subname text-mid font-normal">(kg)</p>
                            </div>
                            <div class="w-full mt-2">
                                <input type="number" id="sugar-weight" name="sugar-weight" required class="w-full rounded border-0 outline-none py-1.5 px-3 text-name text-dark font-medium ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:text-subname placeholder:font-normal focus:ring-2 focus:ring-inset focus:ring-mid focus:shadow-md" placeholder="Input weight of sugar in kg">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function changeText(enzyme, waste, water, sugar){
            document.getElementById("total-enzyme").innerHTML = enzyme.value.toString() + " liter"
            document.getElementById("total-waste").innerHTML = waste.value.toString() + " kg"
            document.getElementById("total-water").innerHTML = water.value.toString() + " liter"
            document.getElementById("total-sugar").innerHTML = sugar.value.toString() + " kg"
        }

        document.getElementById("enzyme-volume").addEventListener('input', (e) => {
            e.preventDefault();
            
            let enzyme = document.getElementById("enzyme-volume");
            let waste = document.getElementById("waste-weight");
            let water = document.getElementById("water-volume");
            let sugar = document.getElementById("sugar-weight");

            let water_amount = enzyme.value * 6 / 10;
            water.value = water_amount.toFixed(2);
            let waste_amount = water.value * 3 / 10;
            waste.value = waste_amount.toFixed(2);
            let sugar_amount = water.value * 1 / 10;
            sugar.value = sugar_amount.toFixed(2);

            changeText(enzyme, waste, water, sugar);
        });

        document.getElementById("waste-weight").addEventListener('input', (e) => {
            e.preventDefault();
            
            let enzyme = document.getElementById("enzyme-volume");
            let waste = document.getElementById("waste-weight");
            let water = document.getElementById("water-volume");
            let sugar = document.getElementById("sugar-weight");

            let water_amount = waste.value * 10 / 3;
            water.value = water_amount.toFixed(2);
            let sugar_amount = waste.value * 1 / 3;
            sugar.value = sugar_amount.toFixed(2);
            // masih bingung
            let enzyme_amount = water.value * 10 / 6;
            enzyme.value = enzyme_amount.toFixed(2);

            changeText(enzyme, waste, water, sugar);
        });

        document.getElementById("water-volume").addEventListener('input', (e) => {
            e.preventDefault();
            
            let enzyme = document.getElementById("enzyme-volume");
            let waste = document.getElementById("waste-weight");
            let water = document.getElementById("water-volume");
            let sugar = document.getElementById("sugar-weight");

            let waste_amount = water.value * 3 / 10;
            waste.value = waste_amount.toFixed(2);
            let sugar_amount = water.value * 1 / 10;
            sugar.value = sugar_amount.toFixed(2);
            // masih bingung
            let enzyme_amount = water.value * 10 / 6;
            enzyme.value = enzyme_amount.toFixed(2);

            changeText(enzyme, waste, water, sugar);
        });

        document.getElementById("sugar-weight").addEventListener('input', (e) => {
            e.preventDefault();
            
            let enzyme = document.getElementById("enzyme-volume");
            let waste = document.getElementById("waste-weight");
            let water = document.getElementById("water-volume");
            let sugar = document.getElementById("sugar-weight");

            let waste_amount = sugar.value * 3;
            waste.value = waste_amount.toFixed(2);
            let water_amount = sugar.value * 10;
            water.value = water_amount.toFixed(2);
            // masih bingung
            let enzyme_amount = water.value * 10 / 6;
            enzyme.value = enzyme_amount.toFixed(2);

            changeText(enzyme, waste, water, sugar);
        });
    </script>
@endsection